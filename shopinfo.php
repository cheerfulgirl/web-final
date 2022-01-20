<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <title>店面資訊 - 港吃茶餐廳</title>
</head>
<body>

    <header>
        <div class="item">
            <a href="index.php"><img class="icon" src="image/icon.png"></a>
        </div>
        <div class="item">
            <div class="container">
                <div class="item">
                    <nav>
                        <div class="navbar">
                            <a href="menu.php">菜單</a>
                            <a href="shopinfo.php">店面資訊</a>
                            <a href="contact.php">聯絡我們</a>
                          </div>
                    </nav>
                </div>
                <div class="item">
                    <a href="login.php"><img src="image/user_circleperson.png"></a>
                    <a href=""><img src="image/shopping_bag.png"></a>
                </div>
            </div>
        </div>
    </header>
    
    <main class="shop-main">
        <h2>店面資訊</h2>
        <div class="shop-container">
            <h1>港吃茶餐廳</h1>
            <p>台灣台北市大安區延吉街88巷8號1樓</p>
            <p>電話：+886 2 8963 1999</p>
            <hr>
            <div class="row">
                <div class="col">
                    <h3>自取</h3>
                    <p>營業時間<br>

                        週一至週日<br>
                        週三公休<br>
                        
                        11:30 AM - 10:00 PM
                    </p>
                </div>
                <div class="col">
                    <h3>外送</h3>
                    <p>營業時間<br>

                        週一至週日<br>
                        週三公休<br>
                        
                        12:00 AM - 10:30 PM
                    </p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="item">
            <p>Copyright © <?php echo date("Y"); ?> 港吃茶餐廳｜ <a href="">使用條款</a></p>
        </div>
        <div class="item">
            <img src="image/fb_icon.png" alt="social-media-facebook">
            <img src="image/ig_icon.png" alt="social-media-instagram">
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>