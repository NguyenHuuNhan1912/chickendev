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
    <link rel="stylesheet" href="../css/form-recruit.css">
    <!-- My title -->
    <title>Chicken DEV | Form Recruit</title>
</head>

<body>

    <!-- Header -->
    <?php
        include './header.php';
    ?>

    <!-- Main -->
    <main class="main">
        <section class="introduce">
            <section class="staff">
                <h1 class="staff__title">Ứng tuyển ngay đi nào</h1>
                <img src="../images/recruit/delivery-man.png" alt="" class="staff__delivery">
            </section>
        </section>
        <section class="introduce-job p-0">
            <section class="row g-5">
                <article class="col-lg-6 col-12">
                    <div class="img">
                        <img src="../images/recruit/shipper.png" alt="">
                    </div>
                </article>
                <article class="col-lg-6 col-12">
                    <div class="infor-job">
                        <div class="infor-job-salary">
                            <h1>Lương</h1>
                            <p>30.000<sup>VNĐ</sup>/1h</p>
                        </div>
                        <div class="infor-job-location">
                            <h1>Địa điểm làm việc</h1>
                            <p>Thị trấn Phú Hòa, huyện Thoại Sơn, tỉnh An Giang</p>
                            <p>Thành phố Long Xuyên, An Giang</p>
                            <p>Xã Phước Long, thành phố Bạc Liêu</p>
                        </div>
                        <div class="infor-job-deadline">
                            <h1>Hạn nộp hồ sơ</h1>
                            <p>10.10.2022 - 19.12.2022</p>
                        </div>
                    </div>
                </article>
            </section>
        </section>
        <form action="./form-recruit.php" class="form-recruitment" method="POST">
            <section class="row">
                <article class="col-md-12 col-12">
                    <h1 class="form-title">Ứng viên ứng tuyển vui lòng điền vào form sau</h1>
                </article>
                <article class="col-md-4 col-12">
                    <div class="form-group">
                        <input type="text" placeholder="Họ và tên(*)" name="name" id="input-name" autocomplete="off">
                        <p class="form-message hide"></p>
                    </div>
                </article>
                <article class="col-md-4 col-12">
                    <div class="form-group">
                        <select name="sex" id="select-sex">
                            <option value="gt" disabled selected>Giới tính</option>
                            <option>Nam</option>
                            <option>Nữ</option>
                            <option>Khác</option>
                        </select>
                    </div>
                </article>
                <article class="col-md-4 col-12">
                    <div class="form-group">
                        <input type="text" placeholder="Năm sinh(*)" name="birth" id="input-birth" autocomplete="off">
                        <p class="form-message hide"></p>
                    </div>
                </article>
                <article class="col-md-4 col-12">
                    <div class="form-group">
                        <input type="text" placeholder="Số điện thoại(*)" name="numberphone" id="input-numberphone" autocomplete="off">
                        <p class="form-message hide"></p>
                    </div>
                </article>
                <article class="col-md-8 col-12">
                    <div class="form-group">
                        <input type="text" placeholder="Nhập địa chỉ(*)" name="address" id="input-address" autocomplete="off">
                        <p class="form-message hide"></p>
                    </div>
                </article>
                <article class="col-md-4 col-12">
                    <div class="form-group">
                        <select id="select-level" name="level">
                            <option value="gt" disabled selected>Trình độ học vấn</option>
                            <option>Đại học</option>
                            <option>Cao đẳng</option>
                            <option>Phổ thông</option>
                        </select>
                        <p class="form-message hide"></p>
                    </div>
                </article>
                <article class="col-md-4 col-12">
                    <div class="form-group">
                        <select id="select-shift" name="shift">
                            <option value="gt" disabled selected>Ca làm việc</option>
                            <option>Ca sáng</option>
                            <option>Ca trưa</option>
                            <option>Ca tối</option>
                        </select>
                        <p class="form-message hide"></p>
                    </div>
                </article>
                <article class="col-md-4 col-12">
                    <div class="form-group">
                        <select id="select-stick" name="stick">
                            <option value="gt" disabled selected>Dự định gắn bó</option>
                            <option>Ngắn hạn</option>
                            <option>Trung hạn</option>
                            <option>Lâu dài</option>
                        </select>
                        <p class="form-message hide"></p>
                    </div>
                </article>
                <article class="col-md-12 col-12">
                    <div class="form-group">
                        <input type="text" placeholder="Link Facebook cá nhân" name="facebook" id="input-link" autocomplete="off">
                        <p class="form-message hide"></p>
                    </div>
                </article>
                <article class="col-md-12 col-12">
                    <div class="form-group">
                        <textarea name="exper" id="input-exper" cols="30" rows="12" placeholder="Kinh nghiệm ở vị trí ứng tuyển"></textarea>
                        <p class="form-message hide"></p>
                    </div>
                </article>
                <article class="col-md-12 col-12">
                    <div class="form-group">
                        <input type="submit" value="Gửi yêu cầu" name="submit" id="input-submit" autocomplete="off">
                    </div>
                </article>
            </section>
        </form>
    </main>
    
    <!-- Footer -->
    <?php
        include './footer.php';
    ?>

    <!-- CDN Library Alert  -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Data Script -->
    <script src="../js/data.js"></script>
    <!-- Main Script -->
    <script src="../js/main.js"></script>
    <!-- Main Form Script -->
    <script src="../js/validationForm.js"></script>
    <!-- Form Recruit Script -->
    <script src="../js/form-recruit.js"></script>

    <?php
        if (isset($_POST['submit'])) {
            $a = $_POST['name'];
            $a = $_POST['name'];
            $b = $_POST['birth'];
            $c = $_POST['numberphone'];
            $d = $_POST['address'];
            $e = $_POST['facebook'];
            $f = $_POST['exper'];
            include './connect.php';
            $sql = "select * from recruitment";
            $result = $connect->query($sql);
            if (!$connect->query($sql)) {
                echo "Error SQL: " . $connect->error;   
            }
            else{
                while ($row = $result->fetch_array()) {
                    if (strcasecmp($row['link'], $e) === 0) {
                        $check = 0;
                        break;
                    } 
                    else {
                        $check = 1;
                    }
                }
                if ($check === 0) {
                    echo "
                        <script>
                            swal('Ứng tuyển thất bại', 'Bạn đã ứng tuyển trước đó rồi, chúng tôi sẽ gọi cho bạn khi có thể', 'error');
                            document.addEventListener('keydown', (e) => {
                                if(e.which === 116){
                                    location.replace('./form-recruit.php');
                                }
                            });
                        </script>
                    ";
                $connect->close();
            }
            else{
                $sql1 = "INSERT INTO `recruitment`(`fullname`, `birth`, `phone`, `address`, `link`, `exp`) VALUES ('$a','$b','$c','$d','$e','$f')";
                if (!$connect->query($sql1)) {
                    echo "Error: " . $connect->error;
                }
                else{
                    echo "
                    <script>
                        swal('Ứng tuyển thành công', 'Bạn đã nộp đơn ứng tuyển thành công, hãy chờ xác nhận từ chúng tôi nhé', 'success');
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
                }
                $connect->close();
            }
        }
    }
    ?>
</body>

</html>