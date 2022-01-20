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
    <title>首頁 - 港吃茶餐廳</title>
</head>
<body>

    <header>
        <div class="item">
            <img src="image/menu.png">
        </div>
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
    
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="image/homebanner-01.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="image/homebanner-02.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="image/homebanner-03.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
        <section class="aboutus">
            <h3>關於我們</h3>
            <p>港吃茶餐廳自1999年開業至今，經營超過20年，供應粥、粉、麵、飯、湯以及小吃點心，每一道港式美食均由來自香港的廚師負責烹製，將原汁原味的香港美食帶給大家，是正宗道地的香港味。</p>
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

    <script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>