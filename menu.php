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
    <title>菜單 - 港吃茶餐廳</title>
</head>
<body>

    <header>
        <div class="item">
            <img src="image/menu.png" onclick="on()">
            <div id="overlay" onclick="off()">
                <nav>
                    <div class="navbar-menu">
                        <a href="menu.php"><p>菜單</p></a>
                        <a href="shopinfo.php"><p>店面資訊</p></a>
                        <a href="contact.php"><p>聯絡我們</p></a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="item">
            <a href="index.php"><img class="icon" src="image/icon.png"></a>
        </div>
        <div class="item">
            <div class="container">
                <nav>
                    <div class="navbar">
                        <a href="menu.php">菜單</a>
                        <a href="shopinfo.php">店面資訊</a>
                        <a href="contact.php">聯絡我們</a>
                        </div>
                </nav>
                <div class="item">
                    <a href="login.php"><img src="image/user_circleperson.png"></a>
                    <a href=""><img src="image/shopping_bag.png"></a>
                </div>
            </div>
        </div>
    </header>
    
    <main class="menu">
        <h2>菜單</h2>
        <h3>粥粉麵飯</h3>
        <section>
            <div>
                <div class="shrink">
                    <img class="food-img" src="image/food01.png">
                </div>
                <p>揚州炒飯 NT$160</p>
                <img class="circle" src="image/minus_circle.png">
                0
                <img class="circle" src="image/plus_circle.png">
            </div>
            <div>
                <div class="shrink">
                    <img class="food-img" src="image/food02.png">
                </div>
                <p>咸魚肉餅飯 NT$150</p>
                <img class="circle" src="image/minus_circle.png">
                0
                <img class="circle" src="image/plus_circle.png">
            </div>
            <div>
                <div class="shrink">
                    <img class="food-img" src="image/food03.png">
                </div>
                <p>干炒牛肉河粉 NT$160</p>
                <img class="circle" src="image/minus_circle.png">
                0
                <img class="circle" src="image/plus_circle.png">
            </div>
            <div>
                <div class="shrink">
                    <img class="food-img" src="image/food04.png">
                </div>
                <p>潮州四寶湯米線 NT$140</p>
                <img class="circle" src="image/minus_circle.png">
                0
                <img class="circle" src="image/plus_circle.png">
            </div>
        </section>
        <h3>蒸籠點心</h3>
        <section>
            <div>
                <div class="shrink">
                    <img class="food-img" src="image/food05.png">
                </div>
                    <p>水晶蝦餃 NT$160</p>
                <img class="circle" src="image/minus_circle.png">
                0
                <img class="circle" src="image/plus_circle.png">
            </div>
            <div>
                <div class="shrink">
                    <img class="food-img" src="image/food06.png">
                </div>
                <p>蟹籽燒賣 NT$160</p>
                <img class="circle" src="image/minus_circle.png">
                0
                <img class="circle" src="image/plus_circle.png">
            </div>
            <div>
                <div class="shrink">
                    <img class="food-img" src="image/food07.png">
                </div>
                <p>流沙奶黃包 NT$160</p>
                <img class="circle" src="image/minus_circle.png">
                0
                <img class="circle" src="image/plus_circle.png">
            </div>
            <div>
                <div class="shrink">
                    <img class="food-img" src="image/food08.png">
                </div>
                <p>懷舊叉燒包 NT$160</p>
                <img class="circle" src="image/minus_circle.png">
                0
                <img class="circle" src="image/plus_circle.png">
            </div>
        </section>
        <h3>美味小吃</h3>
        <section>
            <div>
                <div class="shrink">
                    <img class="food-img" src="image/food09.png">
                </div>
                <p>臘味蘿蔔糕 NT$80</p>
                <img class="circle" src="image/minus_circle.png">
                0
                <img class="circle" src="image/plus_circle.png">
            </div>
            <div>
                <div class="shrink">
                    <img class="food-img" src="image/food10.png">
                </div>
                <p>蝦米煎腸粉 NT$70</p>
                <img class="circle" src="image/minus_circle.png">
                0
                <img class="circle" src="image/plus_circle.png">
            </div>
            <div>
                <div class="shrink">
                    <img class="food-img" src="image/food11.png">
                </div>
                <p>豆沙煎餅 NT$70</p>
                <img class="circle" src="image/minus_circle.png">
                0
                <img class="circle" src="image/plus_circle.png">
            </div>
            <div>
                <div class="shrink">
                    <img class="food-img" src="image/food12.png">
                </div>
                <p>經典西多士 NT$60</p>
                <img class="circle" src="image/minus_circle.png">
                0
                <img class="circle" src="image/plus_circle.png">
            </div>
        </section>
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

    <script src="js/reaction.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>