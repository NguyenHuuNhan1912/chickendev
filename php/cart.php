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
    <!-- Main style -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Responsive Main Style -->
    <link rel="stylesheet" href="../css/responsive-main.css">
    <!-- My style -->
    <link rel="stylesheet" href="../css/cart.css">
    <!-- My Title -->
    <title>Chicken DEV | Giỏ hàng</title>
</head>

<body>

    <!-- Header -->
    <?php
    include './header.php';
    ?>

    <!-- Main -->
    <main class="main">
        <section class="infor-order">
            <section class="row">
                <artilce class="col-12 col-xl-4">
                    <form class="order-form" action="./cart.php" method="POST">
                        <section class="row">
                            <article class="col-12">
                                <h1 class="order-form-title">Đặt hàng</h1>
                            </article>
                            <article class="col-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="input-name" placeholder="Họ và tên(*)">
                                    <p class="message hide"></p>
                                </div>
                            </article>
                            <article class="col-12">
                                <div class="form-group">
                                    <input type="text" name="numberphone" id="input-numberphone" placeholder="Số điện thoại(*)">
                                    <p class="message hide"></p>
                                </div>
                            </article>
                            <article class="col-12">
                                <div class="form-group">
                                    <select name="location" id="select-location">
                                        <option value="kvgh" disabled selected>Khu vực giao hàng</option>
                                        <option>Thành phố Long Xuyên(10.000 VNĐ)</option>
                                        <option>Thị trấn Phú Hòa(9.000 VNĐ)</option>
                                        <option>Thị xã Phước Long(40.000 VNĐ)</option>
                                        <option>Nơi khác(50.000 VNĐ)</option>
                                    </select>
                                    <p class="message hide"></p>
                                </div>
                            </article>
                            <article class="col-12">
                                <div class="form-group">
                                    <input type="text" name="location-delivery" id="input-delivery" placeholder="Địa chỉ giao hàng(*)">
                                    <p class="message hide"></p>
                                </div>
                            </article>
                            <article class="col-12">
                                <div class="form-group">
                                    <textarea name="order-note" id="input-content" cols="30" rows="5" placeholder="Ghi chú"></textarea>
                                    <p class="message hide"></p>
                                </div>
                            </article>
                            <article class="col-12">
                                <div class="form-group">
                                    <input type="submit" value="Xác nhận đặt hàng" id="input-submit" name="submit">
                                </div>
                            </article>
                        </section>
                    </form>
                </artilce>
                <article class="col-12 col-xl-8">
                    <div class="order-see-again">
                        <section class="row">
                            <article class="col-12">
                                <div class="time-dilivery">
                                    <h1>Thời gian dự kiến giao hàng</h1>
                                    <div class="form-group">
                                        <select name="time" id="select-time">
                                            <option value="kvgh" disabled selected>Giao ngay</option>
                                            <option>7:30</option>
                                            <option>7:45</option>
                                            <option>8:00</option>
                                            <option>10:00</option>
                                            <option>11:30</option>
                                            <option>1:30</option>
                                        </select>
                                    </div>
                                </div>
                            </article>
                            <article class="col-12">
                                <h1 class="time-dilivery-title">Xem lại đơn hàng</h1>
                            </article>
                            <article class="col-12">
                                <section class="order-see-again-food">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Sản phẩm</th>
                                                <th>Đơn giá</th>
                                                <th>
                                                    <span>Số lượng</span>
                                                </th>
                                                <th>Thành tiền</th>
                                                <th class="delete-food">Xóa món</th>
                                            </tr>
                                        </thead>
                                        <tbody class="infor-foods">

                                        </tbody>
                                    </table>
                                </section>
                            </article>
                            <article class="col-12">
                                <h1 class="time-dilivery-title">Các chi phí</h1>
                            </article>
                            <article class="col-12">
                                <div class="infor-payment">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Tạm tính</th>
                                                <th>Phí vận chuyển</th>
                                                <th>Tổng cộng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="total-pay"></td>
                                                <td class="transport-fee"></td>
                                                <td class="you-pay"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </article>
                            <article class="col-12">
                                <a href="./menu.php" class="back-menu">
                                    <span>Bạn chưa chọn sản phẩm, hãy quay lại thực đơn nhé</span>
                                    <i class="fa-solid fa-arrow-rotate-left"></i>
                                </a>
                            </article>
                        </section>
                    </div>
                </article>
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
    <!-- Main Script -->
    <script src="../js/main.js"></script>
    <!-- Validation Form Main -->
    <script src="../js/validationForm.js"></script>
    <!-- Main Cart Script -->
    <script src="../js/main-cart.js"></script>
    <!-- Cart Script -->
    <script src="../js/cart.js"></script>
    <?php

    if (isset($_POST['submit'])) {
        $a = $_POST['name'];
        $b = $_POST['numberphone'];
        $c = $_POST['location'];
        $d = $_POST['location-delivery'];
        $e = $_POST['order-note'];
        include './connect.php';
        $sql = "SELECT `phone` FROM `order`";
        $result = $connect->query($sql);
        if (!$connect->query($sql)) {
            echo "Error: " . $connect->error;
        } 
        else{
            while ($row = $result->fetch_array()){
                if (strcasecmp($row['phone'], $b) === 0) {
                    $check = 0;
                    break;
                } 
                else {
                    $check = 1;
                }
            }
            if ($check === 0){
                echo "
                        <script>
                            swal('Đặt hàng thất bại', 'Bạn đã đặt hàng rồi, hãy chờ chúng tôi giao hàng nhé', 'error');
                            document.addEventListener('keydown', (e) => {
                                if(e.which === 116){
                                    location.replace('./cart.php');
                                }
                            });
                        </script>
                    ";
                $connect->close();
            }
            else{
                $sql1 = "INSERT INTO `order`(`name`, `phone`, `location`, `address`, `note`) VALUES ('$a','$b','$c','$d','$e')";
                if (!$connect->query($sql1)) {
                    echo "Error: " . $connect->error;
                }
                else{
                    echo "
                            <script>
                                swal('Đặt hàng thành công', 'Bạn đã đặt đơn hàng, chúng tôi sẽ giao sớm nhất có thể !', 'success');
                                document.addEventListener('click', () => {
                                        location.replace('./homepage.php');
                                });
                                document.addEventListener('keydown', (e) => {
                                    if(e.which === 116){
                                        location.replace('./homepage.php');
                                    }
                                });
                            </script>
                        ";
                    $connect->close();
                }
            }
        }
    }
    ?>
</body>

</html>