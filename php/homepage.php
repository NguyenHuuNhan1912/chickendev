<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="../images/main/favicon.png" type="image/png">
    <!-- CDN Library Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CDN Library Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- CDN Library Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <!-- Bootstrap5 Grid -->
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <!-- Main style -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Main Responsive Style-->
    <link rel="stylesheet" href="../css/responsive-main.css">
    <!-- My style -->
    <link rel="stylesheet" href="../css/homepage.css">
    <!-- My title -->
    <title>Chicken DEV | Trang chủ</title>
</head>

<body>

    <!-- Header -->
    <?php
        include './header.php';
    ?>

    <!-- Main -->
    <main class="main">
        <section class="introduce">
            <article class="content">
                <h2 class="content__title">Đốt cháy mùa hè</h2>
                <h1 class="name-food">Giá cực ưu đãi</h1>
                <p class="money">19k</p>
                <a href="./menu.php">
                    <button class="btn btn--19k">Mua liền</button>
                </a>
            </article>
            <img src="../images/main/arrow-right.png" alt="" class="arrow-img">
        </section>
        
        <section class="slider-chicken-list">
            <?php
                include './connect.php';
                $sql = "SELECT `id`, `type_id`, `name`, `price`, `img` FROM `product` WHERE type_id = '1'";
                $result = $connect->query($sql);
                if (!$connect->query($sql)) {
                    echo "Error SQL: " . $connect->error;
                }
                else{
                    while ($row = $result->fetch_array()){
                        $number = number_format($row['price'], 0, '', '.');
                        echo "
                            <article class='chicken-item'>
                                <div class='chicken-head'>
                                    <img src='{$row['img']}' alt='' class='ck-img'>
                                </div>
                                <div class='chicken-body'>
                                    <h1 class='ck-name'>{$row['name']}</h1>
                                    <p class='ck-des'>1 Phần dưa chua</p>
                                    <p class='ck-des'>1 phần gà</p>
                                    <p class='ck-des'>1 phần cơm</p>
                                    <div class='payment'>
                                        <p class='payment__money'>$number<sup>VNĐ</sup> </p>
                                        <button class='btn btn--food'>Mua liền</button>
                                    </div>
                                </div>
                            </article>
                        ";
                    }
                }
            ?>
        </section>
        <section class="services">
            <article class="row services-content">
            <?php
                    include './connect.php';
                    $sql = "select * from service";
                    $result = $connect->query($sql);
                    if (!$connect->query($sql)) {
                        echo "Error SQL: " . $connect->error;
                    }
                    else{
                        while ($row = $result->fetch_array()) {
                            echo " 
                            <div class='col-lg-6 col-12'>
                                <div class='trademark'>  
                                    {$row['icon']}
                                    <h1 class='trademark__title'>{$row['title']}</h1>
                                    <p class='trademark__des'>
                                        {$row['des']}
                                    </p>
                                    <a href='./introduce.php'>
                                        <button class='btn btn--trademark'>Tìm hiểu ngay</button>
                                    </a>
                                </div>
                            </div>
                            ";
                        }
                    }
            ?>
            </article>
        </section>
        
    </main>

    <!-- Footer -->
    <?php
        include './footer.php';
    ?>

    <!-- CDN Library Slider -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- CDN Library Js Alert -->
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Data Script -->
    <script src="../js/data.js"></script>

    <!-- Main script -->
    <script src="../js/main.js"></script>

    <!-- Main Cart -->
    <script src="../js/main-cart.js"></script>

    <!-- Homepage Script  -->
    <script src="../js/homepage.js"></script>

</body>

</html>