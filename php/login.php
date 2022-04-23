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
    <!-- CDN Library AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Bootstrap5 - Grid -->
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Responsive Main Style-->
    <link rel="stylesheet" href="../css/responsive-main.css">
    <!-- My style -->
    <link rel="stylesheet" href="../css/login.css">
    <!-- My Title -->
    <title>Chicken DEV | Đăng nhập</title>
</head>

<body>
    <!-- Main -->
    <main class="main">
        <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <form action="./login.php" class="form-login" method="POST">
                <section class="row">
                    <article class="col-12">
                        <h1 class="form-title">Đăng nhập</h1>
                    </article>
                    <article class="col-12">
                        <div class="form-group">
                            <input type="text" placeholder="Tài khoản" name="username" id="input-username">
                            <p class="message hide"></p>
                            <i class="fa-solid fa-user user-icon"></i>
                        </div>
                    </article>
                    <article class="col-12">
                        <div class="form-group">
                            <input type="password" placeholder="Mật khẩu" name="password" id="input-password">
                            <p class="message hide"></p>
                            <i class="fa-solid fa-lock pass-icon"></i>
                        </div>
                    </article>
                    <article class="col-12">
                        <div class="form-check">
                            <div class="form-group">
                                <input type="checkbox" name="" id="">
                                <label for="">Ghi nhớ tài khoản</label>
                            </div>
                            <a href="#">
                                <p class="forget-password">Quên mật khẩu</p>
                            </a>
                        </div>
                    </article>
                    <article class="col-12">
                        <div class="form-group">
                            <input type="submit" placeholder="Đăng nhập" id="input-submit" name="submit">
                        </div>
                    </article>
                    <article class="col-12">
                        <div class="login-other">
                            <h2 class="login-other__title">
                                <span>Hoặc đăng nhập bằng</span>
                            </h2>
                            <div class="login-other__app">
                                <img src="../images/login/facebook.png" alt="">
                                <img src="../images/login/google-plus.png" alt="">
                                <img src="../images/login/twitter.png" alt="">
                            </div>
                        </div>
                    </article>
                    <article class="col-12">
                        <div class="sign-up">
                            <h1>Bạn chưa có tài khoản ?</h1>
                            <a href="./signup.php">
                                Đăng kí ngay
                            </a>
                        </div>
                    </article>
                </section>
            </form>
        </div>
    </main>
    <!-- CDN Library Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Validation Form Main -->
    <script src="../js/validationForm.js"></script>
    <!-- Login Script  -->
    <script src="../js/login.js"></script>
    <!-- CDN Library Aos-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Init Aos -->
    <script>
        AOS.init();
    </script>

    <!-- PHP -->
    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['username'];
        $b = $_POST['password'];
        include './connect.php';
        $sql = "select * from myuser";
        $result = $connect->query($sql);
        if (!$connect->query($sql)) {
            echo "Error SQL: " . $connect->error;
        } else {
            while ($row = $result->fetch_array()) {
                if ((strcasecmp($row['username'], $a) === 0) && (strcasecmp($row['password'], $b) === 0)) {
                    $check = 0;
                    break;
                } else {
                    $check = 1;
                }
            }
            if ($check === 0) {
                echo "
                    <script>
                        swal('Đăng nhập thành công', 'Bạn đã đăng nhập thành công, quay lại trang chủ nhé', 'success');
                        document.addEventListener('click', (e) => {
                            location.replace('./homepage.php?action=login&&username={$_POST["username"]}');
                        });
                        document.addEventListener('keydown', (e) => {
                            if (e.which === 116) {
                                location.replace('./login.php');
                            }
                        });
                    </script> ;
                    ";
                    $connect->close();
            } else {
                echo "
                    <script>
                        swal('Đăng nhập thất bại', 'Không có tên tài khoản này, hãy thử lại', 'error');
                                document.addEventListener('keydown', (e) => {
                            if(e.which === 116){
                                location.replace('./login.php');
                            }
                        });
                    </script>
                ";
            }
        }
    }
    ?>
</body>

</html>