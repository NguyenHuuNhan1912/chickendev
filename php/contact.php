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
    <link rel="stylesheet" href="../css/contact.css">
    <!-- My Title -->
    <title>Chicken DEV | Liên hệ</title>
</head>

<body>

    <!-- Header -->
    <?php
    include './header.php';
    ?>

    <!-- Main -->
    <main class="main">
        <section class="introduce">
            <article class="introduce_content">
                <h1>liên hệ</h1>
                <p>Luôn lắng nghe ý kiến của khách hàng</p>
            </article>
        </section>
        <section class="contact">
            <section class="row">
                <section class="col-12 col-lg-7">
                    <article class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.7794837835077!2d105.37768721411341!3d10.359509269584853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a0cbeffffffff%3A0x98654e9102bdaab6!2zVHLGsOG7nW5nIFRIUFQgTmd1eeG7hW4gS2h1eeG6v24!5e0!3m2!1svi!2s!4v1648476056291!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </article>
                </section>
                <section class="col-12 col-lg-5">
                    <form class="contact-form" action="./contact.php" method="POST">
                        <section class="row">
                            <article class="col-12">
                                <h1 class="form-title">Gửi phản hồi cho chúng tôi</h1>
                            </article>
                            <article class="col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Họ tên(*)" id="input-name" name="name">
                                    <p class="message hide"></p>
                                </div>
                            </article>
                            <article class="col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Số điện thoại(*)" id="input-numberphone" name="phone">
                                    <p class="message hide"></p>
                                </div>
                            </article>
                            <article class="col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Email(*)" id="input-email" name="email">
                                    <p class="message hide"></p>
                                </div>
                            </article>
                            <article class="col-12">
                                <div class="form-group">
                                    <textarea name="message" id="input-content" cols="30" rows="10" placeholder="Nội dung"></textarea>
                                    <p class="message hide"></p>
                                </div>
                            </article>
                            <article class="col-12">
                                <div class="form-group">
                                    <input type="submit" placeholder="Gửi" id="input-submit" name="submit">
                                </div>
                            </article>
                        </section>
                    </form>
                </section>
            </section>
        </section>
    </main>

    <!-- Footer -->
    <?php
    include './footer.php';
    ?>
    <!-- CDN Library Alert -->
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Data Script -->
    <script src="../js/data.js"></script>
    <!-- Main script -->
    <script src="../js/main.js"></script>
    <!-- Validation Form Main -->
    <script src="../js/validationForm.js"></script>
    <!-- Contact Script  -->
    <script src="../js/contact.js"></script>

    <!-- PHP -->
    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['name'];
        $b = $_POST['phone'];
        $c = $_POST['email'];
        $d = $_POST['message'];
        include './connect.php';
        $stmt = $connect->prepare("INSERT INTO `feedback`(`name`, `phone`, `email`, `message`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $a1, $b1, $c1, $d1);
        $a1 = $a;
        $b1 = $b;
        $c1 = $c;
        $d1 = $d;
        $stmt->execute();
        echo "
                <script>
                    swal('Phản hồi thành công', 'Chúng tôi đã nhận được phản hồi từ bạn, cảm ơn bạn đã đóng góp', 'success');
                    document.addEventListener('keydown', (e) => {
                        if(e.which === 116){
                            location.replace('./contact.php');
                        }
                    });
                </script>
            ";
        $stmt->close();
        $connect->close();
    }
    ?>
</body>

</html>
