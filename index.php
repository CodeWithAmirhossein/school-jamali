<?php

include('core.php');

?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بلاگ جمالی | صفحه اصلی</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="main">
<div class="row">
    <div class="col-md-3">
        <div class="login">
            <?php
                if ($_SESSION['islogin'] == 'yes') {
                    ?>
                        <form method="post" action="index.php">
                            <label class="form-label" for="subject">موضوع پست</label>
                            <input class="form-control" id="subject" name="subject" placeholder="موضوع پست را وارد کنید">
                            <br>
                            <label class="form-label" for="post">متن پست</label>
                            <textarea class="form-control" id="post" name="posttext" placeholder="متن پست را وارد کنید" rows="3"></textarea>
                            <br>
                            <button class="btn btn-primary" name="postit">پست کن</button>
                        </form>
                        <hr>
                        <a href="index.php?action=logout" class="jlink">
                            خروج
                        </a>
                    <?php
                }
                else {
                    ?>
                        <form method="post" action="index.php">
                            <label class="form-label" for="phone">شماره تلفن</label>
                            <input class="form-control" id="phone" name="phonenumber" type="number" placeholder="شماره تلفن خود را وارد کنید">
                            <br>
                            <label class="form-label" for="password">رمز ورود</label>
                            <input type="password" class="form-control" id="password" name="pass" placeholder="رمز ورود خود را وارد کنید">
                            <br>
                            <button class="btn btn-primary" name="loginform">ورود</button>
                        </form>
                    <?php
                }
            ?>
        </div>
        <br>
    </div>
    <div class="col-md-9">
        <?php
                $posts = mysqli_query($db, "SELECT * FROM jamaliposts ORDER BY `row` DESC");

                if (mysqli_num_rows($posts) != 0) {
                    while ($jpost = mysqli_fetch_assoc($posts)) {
                        ?>
                        <div class="post">
                            <h3><?php echo $jpost['subject']; ?></h3>
                            <p><?php echo $jpost['posttext']; ?></p>
                        </div>
                        <br>
                        <?php
                    }
                }
                else {
                    echo "پستی یافت نشد.";
                }
        ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>