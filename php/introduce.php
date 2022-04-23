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
    <!-- Bootstrap5 Grid -->
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <!-- CDN Library AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Main style -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Responsive Main Style -->
    <link rel="stylesheet" href="../css/responsive-main.css">
    <!-- My style -->
    <link rel="stylesheet" href="../css/introduce.css">
    <!-- My title -->
    <title>Chicken DEV | Giới thiệu</title>
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
            <article class="introduce__content">
                <h1 class="name-boss">Cơm gà chicken dev</h1>
                <img src="../images/introduce/face-boss.jfif" alt="" class="face-boss">
            </article>
        </section>

        <section class="development-process">
            <section class="row g-0 development-process__content">
                <?php
                $arr = array();
                $sql = "select * from introduce";
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
                    <article class='col-12'>
                         <div class='dev-1'>
                             <div data-aos='fade-right' data-aos-duration='2000' class='fade-animation fade-animation--des'>
                                 <div class='dev-1__des'>{$arr[0]}</div>
                             </div>
                             <div data-aos='fade-left' data-aos-duration='2000' class='fade-animation fade-animation--img'>
                                 <img src='{$arr[1]}' alt=' class='dev-1__img'>
                             </div>
                         </div>
                     </article>
                     <article class='col-12'>
                         <div class='dev-2'>
                             <div data-aos='fade-right' data-aos-duration='2000' class='fade-animation fade-animation--des'>
                                 <div class='dev-2__des'>{$arr[2]}</div>
                             </div>
                             <div data-aos='fade-left' data-aos-duration='2000' class='fade-animation'>
                                 <img src='{$arr[3]}' alt=' class='dev-2__img fade-animation--img'>
                             </div>
                         </div>
                     </article>
                     <div class='col-12'>
                         <div class='dev-3'>
                             <div data-aos='fade-right' data-aos-duration='2000' class='fade-animation fade-animation--des'>
                                 <div class='dev-3__des'>
                                 {$arr[4]}
                                 </div>
                             </div>
                             <div data-aos='fade-left' data-aos-duration='2000' class='fade-animation fade-animation--img'>
                                 <img src='{$arr[5]}' alt=' class='dev-3__img'>
                             </div>
                         </div>
                     </div>
                     <article class='col-12'>
                         <div class='dev-4'>
                             <div data-aos='fade-right' data-aos-duration='2000' class='fade-animation fade-animation--des'>
                                 <div class='dev-4__des'>
                                 {$arr[6]}
                                 </div>
                             </div>
                             <div data-aos='fade-left' data-aos-duration='2000' class='fade-animation fade-animation--img'>
                                 <img src='{$arr[7]}' alt=' class='dev-4__img'>
                             </div>
                         </div>
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

    <!-- Main script -->
    <script src="../js/main.js"></script>

    <!-- CDN Library Js Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- CDN Library Js Aos-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Init Aos -->
    <script>
        AOS.init();
    </script>
</body>

</html>