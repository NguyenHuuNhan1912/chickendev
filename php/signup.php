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
    <!-- Main Script -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Responsive Main Script -->
    <link rel="stylesheet" href="../css/responsive-main.css">
    <!-- My Style -->
    <link rel="stylesheet" href="../css/login.css">
    <!-- My Custom off My Style(Login) -->
    <link rel="stylesheet" href="../css/signup.css">
    <!-- My Title -->
    <title>Chicken DEV | Đăng ký</title>
</head>

<body>
    <main class="main">
        <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <form action="./signup.php" class="form-login form-sign-up" method="POST">
                <section class="row">
                    <article class="col-12">
                        <h1 class="form-title">Đăng kí</h1>
                    </article>
                    <article class="col-12">
                        <div class="form-group">
                            <input type="text" placeholder="Tên tài khoản(*)" name="username" id="input-name">
                            <p class="message hide"></p>
                        </div>
                    </article>
                    <article class="col-12">
                        <div class="form-group">
                            <input type="text" placeholder="Số điện thoại(*)" name="numberphone" id="input-numberphone">
                            <p class="message hide"></p>
                        </div>
                    </article>
                    <article class="col-12">
                        <div class="form-group">
                            <input type="text" placeholder="Email(*)" name="email" id="input-email">
                            <p class="message hide"></p>
                        </div>
                    </article>
                    <article class="col-12">
                        <div class="form-group">
                            <input type="password" placeholder="Nhập mật khẩu(*)" name="password" id="input-password">
                            <p class="message hide"></p>
                        </div>
                    </article>
                    <article class="col-12">
                        <div class="form-group">
                            <input type="password" placeholder="Nhập lại mật khẩu(*)" name="password-again" id="input-password--again">
                            <p class="message hide"></p>
                        </div>
                    </article>
                    <article class="col-12">
                        <div class="form-group">
                            <input type="submit" placeholder="Đăng nhập" id="input-submit" name="submit">
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
    <!-- Signup Script -->
    <script src="../js/sign-up.js"></script>
    <!-- CDN Library Aos-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Init Aos -->
    <script>
        AOS.init();
    </script>
    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['username'];
        $b = $_POST['numberphone'];
        $c = $_POST['email'];
        $d = $_POST['password'];
        include './connect.php';
        $sql = "select username from myuser";
        $result = $connect->query($sql);
        if (!$connect->query($sql)) {
            echo "Error SQL: " . $connect->error;
        } else {
            while ($row = $result->fetch_array()) {
                if (strcasecmp($row[0], $a) === 0) {
                    $check = 0;
                    break;
                } else {
                    $check = 1;
                }
            }
            if ($check === 0) {
                echo "
                        <script>
                            swal('Đăng kí thất bại', 'Tên tài khoản đã tồn tại', 'error');
                            document.addEventListener('keydown', (e) => {
                                if(e.which === 116){
                                    location.replace('./signup.php');
                                }
                            });
                        </script>
                    ";
                $connect->close();
            } else {
                $sql1 = "INSERT INTO `myuser`(`username`, `password`, `email`, `numberphone`) VALUES ('$a','$d','$c','$b')";
                if (!$connect->query($sql1)) {
                    echo "Error: " . $connect->error;
                } 
                else {
                    echo "
                            <script>
                                swal('Đăng kí thành công', 'Tài khoản của bạn đã được tạo, quay lại để đăng nhập nhé', 'success');
                                document.addEventListener('click', () => {
                                        location.replace('./login.php');
                                });
                                document.addEventListener('keydown', (e) => {
                                    if(e.which === 116){
                                        location.replace('./login.php');
                                    }
                                });
                            </script>
                        ";
                }
                $connect->close();
            }
        }
    }
    ?>
</body>

</html>