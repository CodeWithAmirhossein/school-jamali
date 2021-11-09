<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بلاگ جمالی | صفحه اصلی</title>
    <style>
        .main {
            direction: rtl;
            text-align: right;
            padding: 5%;
            background: skyblue;
        }
        .login {
            padding: 15px;
            border: solid 1px red;
            background: white;
        }
        .post {
            padding: 15px;
            border: solid 1px blue;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            background: white;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="main">
<div>
    <div class="row">
       <div class="col-md-3">
            <div class="login">
                <form method="post" action="index.php">
                    <label class="form-label" for="phone">شماره تلفن</label>
                    <input class="form-control" id="phone" name="phonenumber" type="number" placeholder="شماره تلفن خود را وارد کنید">
                    <br>
                    <label class="form-label" for="password">رمز ورود</label>
                    <input type="password" class="form-control" id="password" name="pass" placeholder="رمز ورود خود را وارد کنید">
                    <br>
                    <button class="btn btn-primary" name="loginform">ورود</button>
                </form>
            </div>
            <br>
        </div>
        <div class="col-md-9">
            <div class="post">
                <h3>موضوع</h3>
                <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
            </div>
            <br>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>