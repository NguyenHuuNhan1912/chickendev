<?php
session_start();
if (!empty($_GET['action'])) {
    switch ($_GET['action']) {
        case 'login':
            $_SESSION['username'] = $_GET['username'];
            header('Location: ./homepage.php');
            break;
        case 'logout':
            $_SESSION['username'] = '';
            header('Location: ./homepage.php');
            break;
    }
}
?>
<header class="header">
    <nav class="nav-header">
        <a href="./homepage.php">
            <img src="../images/header/logo.png" alt="logo" class="logo">
        </a>
        <nav class="nav-list">
            <ul class="nav-list-link">
                <li class="nav-item-link"><a href="./homepage.php">Trang chủ</a></li>
                <li class="nav-item-link"><a href="./introduce.php">Giới thiệu</a></li>
                <li class="nav-item-link"><a href="./promotion.php">Khuyến mãi</a></li>
                <li class="nav-item-link"><a href="./menu.php">Thực đơn</a></li>
                <li class="nav-item-link"><a href="./recruit.php">Tuyển dụng</a></li>
                <li class="nav-item-link"><a href="./photos-library.php">Thư viện ảnh</a></li>
                <li class="nav-item-link"><a href="./contact.php">Liên hệ</a></li>
            </ul>
            <ul class="nav-list-icon">
                <li class="nav-item-icon callme">
                    <a href="#">
                        <img src="../images/header/phone-call.png" alt="img-icon">
                    </a>
                </li>
                <li class="nav-item-icon">
                    <a href="./cart.php" class="cart-count">
                        <img src="../images/header/shopping-cart.png" alt="img-icon">
                        <div class="count"></div>
                    </a>
                </li>
                <li class="nav-item-icon log">
                    <?php
                    if (!empty($_SESSION['username'])) {
                        echo "
                                <a href='#' class='case-login'>
                                    <img src='../images/header/chicken-main.jpg' class='user-login'>
                                    <img src='../images/header/log-out.png' class='logout'>
                                </a>
                            ";
                    } else {
                        echo "
                                <a href='./login.php' class='case-logout'>
                                    <img src='../images/header/user.png' alt='img-icon'>       
                                </a>
                            ";
                    }
                    ?>
                </li>
                <li class="nav-item-icon">
                    <a href="#" class="bars-icon">
                        <img src="../images/header/bar-icon2.png" alt="img-icon">
                    </a>
                </li>
            </ul>
        </nav>
    </nav>
    <div class="overlay overlay--hide"></div>
    <nav class="nav-header-other">
        <section class="row">
            <article class="col-12">
                <?php
                if (!empty($_SESSION['username'])) {
                    echo "
                            <div class='user'>
                                <img src='../images/header/chicken-main.jpg' alt='img-icon' class='login-menu'>
                                <div class='des'>
                                    <h2>{$_SESSION['username']}</h2>
                                    <p class='nameMain'>Chicken DEV 1010</p>
                                </div>
                                <div class='nav-close'><i class='fas fa-window-close times-icon'></i></div>
                            </div>
                            <script>
                                    const userNameNode = document.querySelector('.user h2');
                                    localStorage.setItem('username',JSON.stringify(userNameNode.textContent));
                                    const userName = JSON.parse(localStorage.getItem('username'));
                                    const userLogin = document.querySelector('.user-login');
                                    userLogin.addEventListener('click', () => {
                                         swal(userName,'Bạn đã đăng nhập với tên tài khoản ở trên', 'info');
                                    });
                            </script>
                        ";
                } else {
                    echo "
                            <div class='nav-close'><i class='fas fa-window-close times-icon'></i></div>
                        ";
                }
                ?>
            </article>
            <article class="col-12">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="nav-item__link" href="./homepage.php">
                            <i class="fa-solid fa-house"></i>
                            <span>Trang chủ</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item__link" href="./introduce.php">
                            <i class="fa-solid fa-circle-info"></i>
                            <span>Giới thiệu</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item__link" href="./promotion.php">
                            <i class="fa-solid fa-utensils"></i>
                            <span>Khuyến mãi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item__link" href="./menu.php">
                            <i class="fa-solid fa-book-open"></i>
                            <span>Thực đơn</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item__link" href="./recruit.php">
                            <i class="fa-solid fa-user-plus"></i>
                            <span>Tuyển dụng</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item__link" href="./photos-library.php">
                            <i class="fa-solid fa-images"></i>
                            <span>Thư viện ảnh</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item__link" href="./contact.php">
                            <i class="fa-solid fa-envelope"></i>
                            <span>Liên hệ</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <?php
                            if (!empty($_SESSION['username'])) {
                                echo "
                                    <a class='nav-item__link logout-menu' href='./homepage.php?action=logout'>
                                        <i class='fa-solid fa-right-from-bracket'></i>
                                        <span>Đăng xuất</span>
                                    </a>
                                ";
                            } 
                            else {
                                echo "
                                    <a class='nav-item__link login' href='./login.php'>
                                        <i class='fa-solid fa-right-to-bracket'></i>
                                        <span>Đăng nhập</span>
                                    </a>
                                ";
                            }
                        ?>
                    </li>
                </ul>
            </article>
        </section>
    </nav>
</header>