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
    <!-- Bootstrap5 - Grid -->
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <!-- Main style -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Responsive Main Style -->
    <link rel="stylesheet" href="../css/responsive-main.css">
    <!-- My style -->
    <link rel="stylesheet" href="../css/menu.css">
    <!-- My title -->
    <title>Chicken DEV | Thực đơn</title>
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
                <h2 class="content__title">thực đơn</h2>
                <h1 class="content__des">Mang đến những bữa ăn ngon cho thực khách</h1>
            </article>
        </section>
        <section class="menu">
            <section class="menu-head">
                <article class="row g-0">
                    <div class="col-12">
                        <div class="types-menu">
                            <div class="type-menu-1">
                                <button>Cơm gà</button>
                                <span></span>
                            </div>
                            <div class="type-menu-2">
                                <button>Cơm gà đặc biệt</button>
                                <span></span>
                            </div>
                            <div class="type-menu-3">
                                <button>Các món khác</button>
                                <span></span>
                            </div>
                            <div class="type-menu-4">
                                <button>Thức uống</button>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="menu-body">
                <article class="menu-body-1">
                    <div class='row'>
                        <?php
                            include './connect.php';
                            $sql = "SELECT * FROM `product` WHERE type_id = 3";
                            $result = $connect->query($sql);
                            if (!$connect->query($sql)) {
                                echo "Error SQL: " . $connect->error;
                            } 
                            else {
                                $index = 1;
                                while ($row = $result->fetch_array()) {
                                    $number = number_format($row['price'], 0, '', '.');
                                    echo "
                                        <div class='col-12 col-lg-4 col-md-6'>
                                            <article class='chicken-item'>
                                                <div class='chicken-head'>
                                                    <img src='{$row['img']}' alt='' class='ck-img'>
                                                </div>
                                                <div class='chicken-body'>
                                                    <h1 class='ck-name'>{$row['name']}</h1>
                                                    <p class='ck-des'>1 phần dưa chua</p>
                                                    <p class='ck-des'>1 phần gà</p>   
                                                    <p class='ck-des'>1 phần cơm</p>
                                                    <div class='payment'>
                                                        <p class='payment__money'> $number<sup>VNĐ</sup> </p>
                                                        <button class='btn btn--food'>Mua liền</button>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    ";
                                    $index += 1;
                                }
                            }
                        ?>
                    </div>
                </article>
                
                <article class="menu-body-2">
                    <div class='row'>
                        <?php
                            include './connect.php';
                            $sql = "SELECT * FROM `product` WHERE type_id = 4";
                            $result = $connect->query($sql);
                            if (!$connect->query($sql)) {
                                echo "Error SQL: " . $connect->error;
                            } 
                            else {
                                $index = 1;
                                while ($row = $result->fetch_array()) {
                                    $number = number_format($row['price'], 0, '', '.');
                                    echo "
                                        <div class='col-12 col-lg-4 col-md-6'>
                                            <article class='chicken-item'>
                                                <div class='chicken-head'>
                                                    <img src='{$row['img']}' alt='' class='ck-img'>
                                                </div>
                                                <div class='chicken-body'>
                                                    <h1 class='ck-name'>{$row['name']}</h1>
                                                    <p class='ck-des'>1 phần dưa chua</p>
                                                    <p class='ck-des'>1 phần gà</p>   
                                                    <p class='ck-des'>1 phần cơm</p>
                                                    <div class='payment'>
                                                        <p class='payment__money'> $number<sup>VNĐ</sup> </p>
                                                        <button class='btn btn--food'>Mua liền</button>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    ";
                                    $index += 1;
                                }
                            }
                        ?>
                    </div>
                </article>
                
                <article class="menu-body-3">
                    <div class='row'>
                        <?php
                            include './connect.php';
                            $sql = "SELECT * FROM `product` WHERE type_id = 5";
                            $result = $connect->query($sql);
                            if (!$connect->query($sql)) {
                                echo "Error SQL: " . $connect->error;
                            } 
                            else {
                                $index = 1;
                                while ($row = $result->fetch_array()) {
                                    $number = number_format($row['price'], 0, '', '.');
                                    echo "
                                        <div class='col-12 col-lg-4 col-md-6'>
                                            <article class='chicken-item'>
                                                <div class='chicken-head'>
                                                    <img src='{$row['img']}' alt='' class='ck-img'>
                                                </div>
                                                <div class='chicken-body'>
                                                    <h1 class='ck-name'>{$row['name']}</h1>
                                                    <p class='ck-des'>Thơm ngon, bổ dưỡng</p>
                                                    <p class='ck-des'>Hợp vệ sinh</p>   
                                                    <p class='ck-des'>Giá cả hợp lý</p>
                                                    <div class='payment'>
                                                        <p class='payment__money'> $number<sup>VNĐ</sup> </p>
                                                        <button class='btn btn--food'>Mua liền</button>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    ";
                                    $index += 1;
                                }
                            }
                        ?>
                    </div>
                </article>
                
                <article class="menu-body-4">
                    <div class='row'>
                        <?php
                            include './connect.php';
                            $sql = "SELECT * FROM `product` WHERE type_id = 6";
                            $result = $connect->query($sql);
                            if (!$connect->query($sql)) {
                                echo "Error SQL: " . $connect->error;
                            } 
                            else {
                                $index = 1;
                                while ($row = $result->fetch_array()) {
                                    $number = number_format($row['price'], 0, '', '.');
                                    echo "
                                        <div class='col-12 col-lg-4 col-md-6'>
                                            <article class='chicken-item'>
                                                <div class='chicken-head'>
                                                    <img src='{$row['img']}' alt='' class='ck-img'>
                                                </div>
                                                <div class='chicken-body'>
                                                    <h1 class='ck-name'>{$row['name']}</h1>
                                                    <p class='ck-des'>Thơm ngon, bổ dưỡng</p>
                                                    <p class='ck-des'>Giải nhiệt mùa hè</p>   
                                                    <p class='ck-des'>Ấm áp mùa đông</p>
                                                    <div class='payment'>
                                                        <p class='payment__money'> $number<sup>VNĐ</sup> </p>
                                                        <button class='btn btn--food'>Mua liền</button>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    ";
                                    $index += 1;
                                }
                            }
                        ?>
                    </div>
                </article>
            </section>
        </section>
    </main>

    <!-- Footer -->
    <?php
        include './footer.php';
    ?>

    <!-- Data Script -->
    <script src="../js/data.js"></script>
    <!-- Main Script -->
    <script src="../js/main.js"></script>
    <!-- CDN Library Alert Js -->
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Main Cart Script -->
    <script src="../js/main-cart.js"></script>
    <!-- Homepage Script  -->
    <script src="../js/menu.js"></script>
</body>

</html>