<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="../images/main/favicon.png" type="image/png">
    <!-- CDN Library Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Bootstrap5  Grid -->
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <!-- Main style -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Responsive Main Style -->
    <link rel="stylesheet" href="../css/responsive-main.css">
    <!-- My style -->
    <link rel="stylesheet" href="../css/photos-library.css">
    <!-- Custom -->
    <link rel="stylesheet" href="../css/photos-library-store.css">
    <!-- CDN Library Aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- My Title -->
    <title>Chicken DEV | Thư viện ảnh - Chuỗi cửa hàng</title>
</head>

<body>

    <!-- Header -->
    <?php
        include './header.php';
        include './connect.php';
    ?>

    <!-- Main -->
    <main class="main">
        <section class="introduce">
            <section class="introduce-sv">
                <h1>Chuỗi cửa hàng của Chicken DEV</h1>
                <p>Những tỉnh thành mà Chicken DEV có chi nhánh</p>
            </section>
        </section>
        <?php
            $arr = array();
            $sql = "select * from photoslibrarystore";
            $result = $connect->query($sql);
            if (!$connect->query($sql)) {
                echo "Error SQL: " . $connect->error;
            } 
            else {
                $index = 0;
                while ($row = $result->fetch_array()) {
                    $arr[$index] = $row['img'];
                    $index++;
                }
            }
            echo "
                <section class='services p-0 services--f'>
                    <section class='row'>
                        <article class='col-xl-6 col-lg-12'>
                            <div data-aos='fade-right' data-aos-duration='1000' data-aos-easing='linear'>
                                <div class='service-1'>
                                    <img src='{$arr[0]}' alt=''>
                                </div>
                            </div>
                        </article>
                        <article class='col-xl-6 col-lg-12'>
                            <section class='row'>
                                <article class='col-xl-6 col-lg-6'>
                                    <div data-aos='flip-left' data-aos-easing='ease-out-cubic' data-aos-duration='3000'>
                                        <div class='service-2'>
                                            <img src='$arr[1]' alt=''>
                                        </div>
                                    </div>
                                </article>
                                <article class='col-xl-6 col-lg-6'>
                                    <div data-aos='flip-left' data-aos-easing='ease-out-cubic' data-aos-duration='3000'>
                                        <div class='service-3'>
                                            <img src='$arr[2]' alt=''>
                                        </div>
                                    </div>
                                </article>
                                <article class='col-xl-12'>    
                                    <div data-aos='fade-left' data-aos-duration='1000' data-aos-easing='linear'>
                                        <div class='service-4'>
                                            <img src='$arr[3]' alt=''>
                                        </div>
                                    </div>
                                </article>
                            </section>
                        </article>
                    </section>
                </section>    
                <section class='services p-0'>
                <section class='row'>
                    <article class='col-xl-6 col-lg-12'>
                        <section class='row'>
                            <article class='col-xl-12'>
                                <div data-aos='fade-right' data-aos-duration='1000' data-aos-easing='linear'>
                                    <div class='service-4'>
                                        <img src='$arr[4]' alt=''>
                                    </div>
                                </div>
                            </article>
                            <article class='col-xl-6 col-lg-6'>
                                <div data-aos='flip-left' data-aos-easing='ease-out-cubic' data-aos-duration='3000'>
                                    <div class='service-2'>
                                        <img src='$arr[5]' alt=''>
                                    </div>
                                </div>
                            </article>
                            <article class='col-xl-6 col-lg-6'>
                                <div data-aos='flip-left' data-aos-easing='ease-out-cubic' data-aos-duration='3000'>
                                    <div class='service-3'>
                                        <img src='$arr[6]' alt=''>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </article>
                    <article class='col-xl-6 col-lg-12'>
                        <div data-aos='fade-left' data-aos-duration='1000' data-aos-easing='linear'>
                            <div class='service-1'>
                                <img src='$arr[7]' alt=''>
                            </div>
                        </div>
                    </article>
                </section>
            </section>
            <section class='services p-0'>
            <section class='row'>
                <article class='col-xl-6 col-lg-12'>
                    <div data-aos='fade-right' data-aos-duration='1000' data-aos-easing='linear'>
                        <div class='service-1'>
                            <img src='$arr[8]' alt=''>
                        </div>
                    </div>
                </article>
                <article class='col-xl-6 col-lg-12'>
                    <section class='row'>
                        <article class='col-xl-12'>
                            <div data-aos='fade-left' data-aos-duration='1000' data-aos-easing='linear'>
                                <div class='service-4'>
                                    <img src='$arr[9]' alt=''>
                                </div>
                            </div>
                        </article>
                        <article class='col-xl-6 col-lg-6'>
                            <div data-aos='flip-left' data-aos-easing='ease-out-cubic' data-aos-duration='3000'>
                                <div class='service-2'>
                                    <img src='$arr[10]' alt=''>
                                </div>
                            </div>
                        </article>
                        <article class='col-xl-6 col-lg-6'>
                            <div data-aos='flip-left' data-aos-easing='ease-out-cubic' data-aos-duration='3000'>
                                <div class='service-3'>
                                    <img src='$arr[11]' alt=''>
                                </div>
                            </div>
                        </article>
                    </section>
                </article>
            </section>
        </section>
        <section class='services p-0'>
                <section class='row'>
                    <article class='col-xl-6 col-lg-12'>
                        <section class='row'>
                            <article class='col-xl-12'>
                                <div data-aos='fade-right' data-aos-duration='1000' data-aos-easing='linear'>
                                    <div class='service-4'>
                                        <img src='$arr[12]' alt=''>
                                    </div>
                                </div>
                            </article>
                            <article class='col-xl-6 col-lg-6'>
                                <div data-aos='flip-left' data-aos-easing='ease-out-cubic' data-aos-duration='3000'>
                                    <div class='service-2'>
                                        <img src='$arr[13]' alt=''>
                                    </div>
                                </div>
                            </article>
                            <article class='col-xl-6 col-lg-6'>
                                <div data-aos='flip-left' data-aos-easing='ease-out-cubic' data-aos-duration='3000'>
                                    <div class='service-3'>
                                        <img src='$arr[14]' alt=''>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </article>
                    <article class='col-xl-6 col-lg-12'>
                        <div data-aos='fade-left' data-aos-duration='1000' data-aos-easing='linear'>
                            <div class='service-1'>
                                <img src='$arr[15]' alt=''>
                            </div>
                        </div>
                    </article>
                </section>
            </section>
            <section class='services p-0 services--l'>
                <section class='row'>
                    <article class='col-xl-6 col-lg-12'>
                        <section class='row'>
                            <article class='col-xl-12'>
                                <div data-aos='fade-right' data-aos-duration='1000' data-aos-easing='linear'>
                                    <div class='service-4'>
                                        <img src='$arr[16]' alt=''>
                                    </div>
                                </div>
                            </article>
                            <article class='col-xl-6 col-lg-6'>
                                <div data-aos='flip-left' data-aos-easing='ease-out-cubic' data-aos-duration='3000'>
                                    <div class='service-2'>
                                        <img src='$arr[17]' alt=''>
                                    </div>
                                </div>
                            </article>
                            <article class='col-xl-6 col-lg-6'>
                                <div data-aos='flip-left' data-aos-easing='ease-out-cubic' data-aos-duration='3000'>
                                    <div class='service-3'>
                                        <img src='$arr[18]' alt=''>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </article>
                    <article class='col-xl-6 col-lg-12'>
                        <div data-aos='fade-left' data-aos-duration='1000' data-aos-easing='linear'>
                            <div class='service-1'>
                                <img src='$arr[19]' alt=''>
                            </div>
                        </div>
                    </article>
                </section>
            </section>
            ";
        ?>
    </main>

    <!-- Footer -->
    <?php
        include './footer.php';
    ?>

    <!-- CDN Libraty Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Data Script -->
    <script src="../js/data.js"></script>
    <!-- Main script -->
    <script src="../js/main.js"></script>
    <!-- Homepage Script  -->
    <script src="../js/photos-library.js"></script>
    <!-- CDN Library Aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Init Aos -->
    <script>
        AOS.init();
    </script>
</body>

</html>