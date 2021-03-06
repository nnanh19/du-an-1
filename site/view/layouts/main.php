<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="content/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<style>
    .navbar-menu{
        position: relative;
        top:  25px;
        left: 0%;
        z-index: 1;
    }
    .header-nav{
        margin:0 35px; 
        display: flex;     
        flex-direction: row;   
        align-items: center;   
        justify-content: space-between;
    }
    .mega-sub-menu{
        position: absolute;
    }
    .mega-sub-menu{
        background: #ffffff;
    }
    .sub-menu{
        display: flex;
        flex-direction: column;
        align-items:center;
        padding: 0;
        
    }
    .mega-sub-menu-box>ul>li{
        list-style: none;
        width:100%;
    }
    .mega-sub-menu-box>ul>li>a{
        text-decoration: none;
        color: #000;
        padding: 10px;
    }
    .mega-sub-menu-box>ul>li {
        list-style: none;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        border-bottom: 0.5px solid #ccc;
    }
    .mega-sub-menu-box>ul>.sub-menu-link-end {
        border-bottom:none;
    }
    .mega-sub-menu-box>.sub-menu{
        width:100px;     
    }
    .mega-sub-menu:hover{
        border-top:1px solid black;
    }
    
    .sub-menu-link>ul>li>a{
        text-decoration: none;
        color: #000;
        padding: 10px;

    }
    .sub-menu-link>ul>li{
        list-style: none;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        border-bottom: 0.5px solid #ccc;
    }
    .sub-menu-link{
        background: #fff;
    }
    .sub-menu-link>li{
        position: relative;
        
    }
    .sub-menu-link>ul{
        position: absolute;
        left:100%;
        width:100px;
    }
    .navbar-menu-link>.mega-sub-menu{
        display: none;
    }
    
    .navbar-menu-link:hover .mega-sub-menu{
        display: block;
    }
    
    .navbar-menu-link-2>.mega-sub-menu-2{
        display: none;
    }
    
    /* hover */
    .navbar-menu-link-2:hover .mega-sub-menu-2{
        display: block;
    }
    .navbar-icon{
        display:flex;
        flex-direction: row;
        align-items: center;
    }
    .navbar-icon>li{
        list-style: none;
        padding:10px;
        padding-top: 30px;
    }
    .navbar-icon>li>a{
        text-decoration: none;
        color:#000;
        font-size:18px;
    }
    .form{
        display:none;
        position: absolute;
        right: 120px;
    }
    .form>input{
        border:1px solid grey;
        outline:none;
        padding: 0 10px;
        font-size:13px;
    }
    .navbar-icon>li:hover .form{
        display:inline;
    }
</style>
</head>
<body>
<div class="container-custom">
    <div class="header-top">
        <div class="header-top-text">
            <span>Ch??o m???ng ?????n v???i Sport store!</span>
        </div>
    </div>
    <!-- end header-top -->
    <div class="header-nav">
        <nav class="navbar-header">
            <a href="./">
                <img src="content/images/logo.png" alt="" class="logo-img">
            </a>
        </nav>
        <ul class="navbar-menu">
            <li class="navbar-menu-link">
                <a href="#">S???n Ph???m</a>
                <div class="mega-sub-menu">
                    <div class="mega-sub-menu-box">
                        <ul class="sub-menu">
                            <li class="sub-menu-link navbar-menu-link-2"><a href="#">B??ng ????</a>
                                <ul class="sub-menu mega-sub-menu-2">
                                    <?php
                                    foreach ($categories as $category) {
                                        extract($category);
                                        $href = "category&ma_loai=$ma_loai";
                                    ?>
                                    
                                    <li class="sub-menu-link"><a href="<?=$href?>"><?=$ten_loai?></a></li>

                                    <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="sub-menu-link navbar-menu-link-2"><a href="#">Ch???y</a>
                                <ul class="sub-menu mega-sub-menu-2">
                                    <?php
                                    foreach ($categories as $category) {
                                        extract($category);
                                    ?>
                                    <li class="sub-menu-link"><a href="#"><?=$ten_loai?></a></li>

                                    <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="sub-menu-link navbar-menu-link-2"><a href="#">T???p luy???n</a>
                                <ul class="sub-menu mega-sub-menu-2">
                                    <?php
                                    foreach ($categories as $category) {
                                        extract($category);
                                    ?>
                                    <li class="sub-menu-link"><a href="#"><?=$ten_loai?></a></li>

                                    <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li><a href="#">Gi???i Thi???u</a></li>
            <li><a href="#">Li??n H???</a></li>
            <li><a href="#">Tin T???c</a></li>
        </ul>
        <ul class="navbar-icon">
                <li><a href="#"><ion-icon name="search" class="icon-header"></ion-icon></a>
                    <form action="./keyword" method="POST" class="form">
                        <input type="text" name="keyword" id="">
                    </form>
                </li>
                <li><a href="./login-form"><ion-icon name="person"></ion-icon></a></li>
                <li><a href="./cart-list"><ion-icon name="cart"></ion-icon></a></li>
        </ul>

    </div>
    <!-- end header-nav -->
    <?php
    
    include_once $view;

    ?>
        <!-- end content -->
        <div class="support-function">
            <div class="support-function-text">
                <h3>B???n c???n h??? tr???,<br>H??y chat v???i ch??ng t??i</h3>
            </div>
            <div class="support-function-img">
                <a href="">
                    <img src="content/images/i-ins.png" alt="">
                    <img src="content/images/i-fb.png" alt="">
                    <img src="content/images/i-mess.png" alt="">
                    <img src="content/images/i-tg.png" alt="">
                    <img src="content/images/i-tw.png" alt="">
                    <img src="content/images/i-phone.png" alt="">
                </a>
            </div>
        </div>
        <!-- end contact us -->
        <footer class="footer-custom">
        <ul class="ul-footer-parent">
            <li class="li-footer-parent">
                <a href="">
                    <img src="content/images/logo.png" alt="" class="logo-img">
                </a>
            </li>
            <li class="li-footer-parent">
                S???n Ph???m
                <ul class="ul-footer">
                    <li class="li-footer">
                        <a href="">Gi??y</a>
                    </li>
                    <li class="li-footer">
                        <a href="">Qu???n ??o</a>
                    </li>
                    <li class="li-footer">
                        <a href="">Ph??? ki???n</a>
                    </li>
                    <br>
                    <li class="li-footer">
                        <a href="">H??ng m???i v???</a>
                    </li>
                    <li class="li-footer">
                        <a href="">??o</a>
                    </li>
                    <li class="li-footer">
                        <a href="">Qu???n</a>
                    </li class="li-footer">
                    <li class="li-footer">
                        <a href="">T??i</a>
                    </li>
                </ul>
                
            </li>
            <li class="li-footer-parent">
                Th??? Thao
                <ul class="ul-footer">
                    <li class="li-footer">
                        <a href="">Qu???n ??o t???p ghim</a>
                    </li>
                    <li class="li-footer">
                        <a href="">??o ng???c th??? thao</a>
                    </li>
                    <li class="li-footer">
                        <a href="">Qu???n t???t n???</a>
                    </li>
                    <br>
                    <li class="li-footer">
                        <a href="">Gi??y b??ng ????</a>
                    </li>
                    <li class="li-footer">
                        <a href="">Gi??y b??ng ???? trong nh??</a>
                    </li>
                    <li class="li-footer">
                        <a href="">B??ng ????</a>
                    </li class="li-footer">
                    <li class="li-footer">
                        <a href="">T??i</a>
                    </li>
                </ul>
            </li>
            <li class="li-footer-parent">
                B??? S??u T???p
                <ul class="ul-footer">
                <li class="li-footer">
                    <a href="">Gi??y adidas Pharrell Williams</a>
                </li>
                <br>
                <li class="li-footer">
                    <a href="">Gi??y Superstar</a>
                </li>
                <li class="li-footer">
                    <a href="">Gi??y Stan Smith</a>
                </li>

                <li class="li-footer">
                    <a href="">Gi??y Gazelle</a>
                </li>
                <li class="li-footer">
                    <a href="">Gi??y NMD</a>
                </li>
            </ul>
            </li>
            <li class="li-footer-parent">
                Th??ng Tin V??? C??ng Ty
                <ul class="ul-footer">
                    <li class="li-footer">
                        <a href="">Gi???i thi???u v??? ch??ng t??i</a>
                    </li>
                    <li class="li-footer">
                        <a href="">C?? h???i ngh??? nghi???p</a>
                    </li>

                    <li class="li-footer">
                        <a href="">Tin t???c</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="footer-custom-bottom">
            <ul class="">
                <li>
                    <a href="">
                            Ch??nh s??ch B???o m???t
                    </a>
                </li>
                <li>
                    <a href="">
                        ??i???u Kho???n v?? ??i???u Ki???n
                    </a>
                </li>
                <li>
                    <a href="">
                        Th??ng tin c???a h??ng
                    </a>
                </li>
                <li class="li-end">
                    <a href="">
                        ??2021 
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- end -->
</div>
</body>
</html>