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
    <title>聯絡我們 - 港吃茶餐廳</title>
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
    
    <main class="contact-main">
        <h2>聯絡我們</h2>
        <p><span class="text-color">我們希望聽到您的意見！</span><br>填寫以下表格，我們將在工作週期間的48小時內回覆</p>
        <form>
            <section>
                <input type="text" name="lastname" placeholder="*姓氏" required>
                <input type="text" name="firstname" placeholder="*名字" required>
            </section>
            <section>
                <input type="text" name="email" placeholder="*電子信箱" required>
                <input type="text" name="phone" placeholder="*電話號碼" required>
            </section>
            <section>
                <textarea name="mytext" rows="6" cols="40" maxlength="250" required placeholder="輸入評論（250個剩餘字元）"></textarea>
            </section>
            <section>
                <button>發送</button>
            </section>
        </form>
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