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
    <!-- Responsive  Main Style-->
    <link rel="stylesheet" href="../css/responsive-main.css">
    <!-- My style -->
    <link rel="stylesheet" href="../css/promotion.css">
    <!-- My title -->
<title>Chicken DEV | Khuyến mãi</title>
</head>

<body>

    <!-- Header -->
    <?php
        include './header.php';
    ?>

    <!-- Main -->
    <main class="main">
        <article class="introduce">
            <div class="content">
                <h1 class="content__title">Khuyến mãi đặc biệt</h1>
                <img src="../images/main/discount.png" class="img-dis">
            </div>
        </article>
        <section class="discount">
            <section class="row discount__content g-0">
                <?php
                    include './connect.php';
                    $sql = "SELECT * FROM `product` WHERE type_id='2'";
                    $result = $connect->query($sql);
                    if (!$connect->query($sql)) {
                        echo "Error SQL: " . $connect->error;
                    }
                    else{
                        $index = 1;
                        while ($row = $result->fetch_array()){
                            $number = number_format($row['price'], 0, '', '.');
                            echo "
                                <article class='col-12 col-md-6 col-lg-4'>
                                    <div class='discount-ck discount-ck--{$index}'>
                                        <img src='{$row['img']}' alt='' class='discount-ck__img'>
                                        <h1 class='discount-ck__name'>{$row['name']}</h1>
                                        <p class='discount-ck__money'>{$number} <sup>VNĐ</sup> </p>
                                        <button class='btn btn--discount'>Mua ngay</button>
                                        <span class='discount-ck__percent'>{$row['discount']}%</span>
                                    </div>
                                </article>
                                ";
                            $index +=1;
                        }
                    }
                    $connect->close();
                ?>
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
    <!-- CDN - JS - Alert -->
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Cart -->
    <script src="../js/main-cart.js"></script>
    <!--Promotion Script  -->
    <script src="../js/promotion.js"></script>
</body>

</html>