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
    <!-- Bootstrap5 - Grid -->
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <!-- Main style -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Responsive Main Style -->
    <link rel="stylesheet" href="../css/responsive-main.css">
    <!-- My style -->
    <link rel="stylesheet" href="../css/photos-library.css">
    <!-- My title -->
    <title>Chicken DEV | Thư viện ảnh</title>
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
                <h1>Thư viện ảnh Chicken DEV</h1>
                <p>Nơi lưu trữ những kĩ niệm đặc biệt của cửa hàng</p>
            </section>
        </section>
        <section class="services p-0">
            <section class="row">
                <?php
                    $arr = array();
                    $sql = "select * from photosLibrary";
                    $result = $connect->query($sql);
                    if (!$connect->query($sql)) {
                        echo "Error SQL: " . $connect->error;
                    } 
                    else {
                        $index = 0;
                        while ($row = $result->fetch_array()) {
                            $arr[$index] = $row[0];
                            $index++;
                            $arr[$index] = $row[1];
                            $index++;
                        }
                    }
                    echo "
                    <article class='col-xl-5 col-lg-12'>
                        <div class='service-1'>
                            <h1>$arr[2]</h1>
                            <p>$arr[3]</p>
                            <a href='#'>
                                <button class='btn btn--sv'>
                                    <span>Xem ảnh</span>
                                    <img src='../images/main/image.png' alt=''>
                                </button>
                            </a>
                        </div>
                    </article>
                    <article class='col-xl-7 col-lg-12'>
                        <section class='row'>
                            <article class='col-xl-6 col-lg-6'>
                                <div class='service-2'>
                                    <h1>$arr[4]</h1>
                                    <p>$arr[5]</p>
                                    <a href='#'>   
                                        <button class='btn btn--sv'>
                                            <span>Xem ảnh</span>
                                            <img src='../images/main/image.png' alt=''>
                                        </button>
                                    </a>
                                </div>
                            </article>
                            <article class='col-xl-6 col-lg-6'>
                                <div class='service-3'>
                                    <h1>$arr[6]</h1>
                                    <p>$arr[7]</p>
                                    <a href='#'>
                                        <button class='btn btn--sv'>
                                            <span>Xem ảnh</span>
                                            <img src='../images/main/image.png' alt=''>
                                        </button>
                                    </a>
                                </div>
                            </article>
                            <article class='col-xl-12'>
                                <div class='service-4'>
                                    <h1>$arr[2]</h1>
                                    <p>$arr[1]</p>
                                    <a href='./photos-library-store.php'>
                                        <button class='btn btn--sv'>
                                            <span>Xem ảnh</span>
                                            <img src='../images/main/image.png' alt=''>
                                        </button>
                                    </a>
                                </div>
                            </article>
                        </section>
                    </article>      
                ";
            ?>
            </section>
        </section>
    </main>

    <!-- Footer -->
    <?php
        include './footer.php';
    ?>
    <!-- CDN Library Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Data Script -->
    <script src="../js/data.js"></script>
    <!-- Main script -->
    <script src="../js/main.js"></script>
    <!-- Photo Library Script  -->
    <script src="../js/photos-library.js"></script>
    
</body>

</html>