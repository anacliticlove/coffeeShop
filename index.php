    <?php
    session_start();
    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>咖啡浪潮</title>
    <style>
        @font-face {
            src: url(CSS/tw/NaikaiFont-Light.ttf);
            font-family: happy;
        }
    </style>

    <link rel="icon" href="PHOTO/素材/mainicon.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="CSS/_css/bootstrap.min.css">
    <script src="CSS/_js/jquery.min.js"></script>
    <script src="CSS/_js/popper.min.js"></script>
    <script src="CSS/_js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/coffee_mainpage.css">
    <link rel="stylesheet" href="CSS/nav.css">
</head>

<body style="cursor:url(PHOTO/素材/mainicon.png)">
    <header>
        <!-- ------nav開始------ -->
        <nav>
            <div id="mynav" class="row fixed-top">
                <div class="col-3 logo">
                    <img src="./PHOTO/素材/logo.png" alt="" style="height: 70px;">
                </div>
                <div class="col-1">
                </div>
                <div class="col-3 navList" style="padding-top: 20px;">
                
                </div>
                <div class="col-5 navMember">
                <!-- ------nav開始------- -->
                <a href="index.php"><button  class="btn btn-outline-warning">浪潮㊣首頁</button></a> 
                    <a href="page1_know.php"><button class="btn btn-outline-warning">咖啡知識站</button></a>
                    <a href="Page2_map.php"><button class="btn btn-outline-warning">咖啡產區圖</button></a>
                    <a href="Page3_goWhere.php"><button class="btn btn-outline-warning">咖啡上哪趣</button></a>
                    <!-- 判斷是否有會員 -->
                    <?php if (isset($_SESSION["memberName"]) && ($_SESSION["memberName"] !="")){?>
                    <a class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" 
                    aria-expanded="false" >
                    <!-- 有會員圖片 -->
                    <img class="dropdown" id="myMember" src="./PHOTO/1x/王小明.png" alt="" style="cursor: pointer;">  </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" ><h5><b>Hello!!&nbsp;<?=$_SESSION["memberName"]?></br></h3></a>
                    <div class="dropdown-divider"></div> 
                    <!-- 會員下拉選單-->
                    <a class="dropdown-item" href="login/login.php?logout=1"><b>登出</b></a>
                    <a class="dropdown-item" href="login/update.php?update=<?=$_SESSION["memberId"]?>"><b>資料修改</b></a>
                        </div>
                    <?php }else{?>
                    <!-- 非會員 -->
                    <a href="login/login.php"><img src="./PHOTO/1x/Guest.png" alt="" style="margin-left:10px;">  </a>
                    <?php } ?>
                    <a href="#"><img src="./PHOTO/1x/購物車.png" alt="" style="margin-left:10px;"></a>
                </div>
            </div>
        </nav>
        <!-- ------nav結束------ -->
        <!-- mainPicture -->
        <div id="mymainpic" class="carousel">
            <div class="carousel-inner slide " data-ride="carousel" data-interval="2000">
                <div class="carousel-item active">
                    <img src="./PHOTO/主頁/T1.png" alt="">
                </div>
                <div class="carousel-item">
                    <img src="./PHOTO/主頁/T2.png" alt="">
                </div>
            </div>
        </div>
        <!-- mainPicture end-->
    </header>
    <br>
    <article>
        <section>
            <!-- <p>咖啡知識站</p> -->
            <div id="myKnow" class="myMenu">
                <a href="page1_know.php">
                    <div id="myKnowstation" class="selectMenu mychoose" style="background-image: url(./PHOTO/主頁/bg2-1.png)">
                        <h1>咖啡知識站</h1>
                    </div>
                </a>
            </div>
            <!-- <p>咖啡產區圖</p> -->
            <div id="myPro" class="myMenu">
                <a href="Page2_map.php">
                    <div id="myProduct" class="selectMenu mychoose" style="background-image: url(./PHOTO/主頁/bg2-2.png);">
                        <h1>咖啡產區圖</h1>
                    </div>
                </a>
            </div>
            <!-- <p>咖啡上哪趣</p> -->
            <div id="myGo" class="myMenu">
                <a href="Page3_goWhere.php">
                    <div id="mygoWhere" class="selectMenu mychoose" style="background-image: url(./PHOTO/主頁/bg2-3.png);">
                        <h1>咖啡上哪趣</h1>
                    </div>
                </a>
            </div>
        </section>
        <!-- 咖啡外部連結 -->
        <div class="order" style="text-align: center;">
            <span style="white-space:pre"> </span><span class="line"></span>
            <span style="white-space:pre"> </span><span class="txt">咖啡外部連結網站</span>
            <span style="white-space:pre"> </span><span class="line"></span>
        </div>
        <br>
        <div class="card-columns">
            <a href="https://caffes.me/">
                <div class="card myOther">
                    <img src="./PHOTO/主頁/sbp1.jpg" class="img-fluid">
                    <div class="card-body">
                        <span>CAFFESME咖啡師&我</span>
                    </div>
                </div>
            </a>
            <a href="https://cafenomad.tw/">
                <div class="card myOther ">
                    <img src="./PHOTO/主頁/sbp2.jpg" class="img-fluid">
                    <div class="card-body">
                        <span>Cafe Nomad咖啡遊牧民族</span>
                    </div>
                </div>
            </a>
            <a href="https://www.chanchao.com.tw/coffee/">
                <div class="card myOther ">
                    <img src="./PHOTO/主頁/sbp3.jpg" class="img-fluid">
                    <div class="card-body">
                        <span>2020台灣國際咖啡展</span>
                    </div>
                </div>
            </a>
        </div>

    </article>
    <footer style="background-image: url(./PHOTO/主頁/background2.png);">
        <div id="mybottom " class="myfooter">
        <!-- google地圖 -->
            <div class="row">
                <div class="col-4" style="margin:auto; border-radius:30px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58246.1036926891!2d120.65449100000001!3d24.15835050000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d9650422ae1%3A0x334dfd5796c49ff6!2z6LOH562W5pyDLeaVuOS9jeaVmeiCsueglOeptuaJgC3kuK3ljYDoqJPnt7TkuK3lv4M!5e0!3m2!1szh-TW!2stw!4v1591874740108!5m2!1szh-TW!2stw" width="500" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <!-- 聯絡資訊 -->
                <div class="col-4" style="text-align:center;">
                    <h2>Contact 聯絡我們</h2><br>
                    <h3>tell: <span style=" font-size: 1.5rem; ">0963782773</span></h3><br>
                    <h3>addr: <span style=" font-size: 1.5rem; ">台中市南屯區</span></h3><br>
                    <h3>email: <span style=" font-size: 1.5rem; ">coffee@gmail.com</span></h3><br>
                </div>
                <!-- 想說的話 -->
                <div class=" col-4 ">
                    <form action=" ">
                        <h2>想說的話</h2>
                        <div class=" input-group ">
                            <div class=" input-group-prepend ">
                                <label class=" input-group-text " for=" #customerName ">姓名</label>
                            </div>
                            <input type=" text " id=" customerName ">
                        </div>
                        <br>
                        <div class=" input-group ">
                            <div class=" input-group-prepend ">
                                <label class=" input-group-text " for=" #customerTell ">電話</label>
                            </div>
                            <input type=" text " id=" customerTell ">
                        </div>
                        <br>
                        <div class=" input-group ">
                            <div class=" input-group-prepend ">
                                <label class=" input-group-text " for=" #customerSuggest ">建議</label>
                            </div>
                            <textarea name=" " id=" customerTell " cols=" 30 " rows=" 5 "></textarea>
                        </div>
                        <br>
                        <button type=" submit ">送出</button>
                        <button type=" reset ">清除</button>
                    </form>

                </div>
            </div>

        </div>
        <br>
        <br>
        <br>
        <br>
    </footer>

    <script src="./js/nav.js"></script>
    
    <script>
        function memberPicture(){
          var  myPic= document.getElementById('myMember');
          myPic.setAttribute ().style.border-radius ='30px';
        }
        memberPicture();
        
    </script>
    
</body>

</html>