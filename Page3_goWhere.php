<?php
session_start();
require_once("dbConnect.php");

$result = mysqli_query(
    $link,
    "SELECT * FROM `產品清單` a JOIN `shopname` s on a.shopId = s.shopId ORDER by s.咖啡店名,lisitId"
);
$row = mysqli_fetch_assoc($result);
if (isset($_POST["okButton"])) {
    echo $_POST["沖煮方式"];
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>咖啡浪潮-上哪趣</title>
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
    <link rel="stylesheet" href="./CSS/Page3_gowhere.css">
    <link rel="stylesheet" href="CSS/nav.css">
</head>

<body>
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
                <a href="index.php"><button  class="btn btn-outline-warning">浪潮㊣首頁</button></a>  
                    <a href="page1_know.php"><button class="btn btn-outline-warning">咖啡知識站</button></a>
                    <a href="Page2_map.php"><button class="btn btn-outline-warning">咖啡產區圖</button></a>
                    <a href="Page3_goWhere.php"><button class="btn btn-outline-warning">咖啡上哪趣</button></a>
                    <?php if (isset($_SESSION["memberName"]) && ($_SESSION["memberName"] !="")){?>

                    <a class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" 
                    aria-expanded="false" >
                    <img class="dropdown" id="myMember" src="./PHOTO/1x/王小明.png" alt="" style="cursor: pointer;">  </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" ><h5><b>Hello!! &nbsp; <?=$_SESSION["memberName"]?></b></h3></a>
                    <div class="dropdown-divider"></div>        
                    <a class="dropdown-item" href="login/login.php?logout=1"><b>登出</b></a>
                    <a class="dropdown-item" href="login/update.php?update=<?=$_SESSION["memberId"]?>"><b>資料修改</b></a>
                        </div>
                    <?php }else{?>
                    <a href="login/login.php"><img src="./PHOTO/1x/Guest.png" alt="" style="margin-left:10px;">  </a>
                    <?php } ?>
                    <a href="#"><img src="./PHOTO/1x/購物車.png" alt="" style="margin-left:10px;"></a>
                </div>
            </div>
        </nav>
    <!-- ------nav結束------ -->
    <!-- -------喜好選單開始------ -->
    <div class="container">
        <div class="coffeeForm">
            <!-- 3個br扣掉被nav擋到的部分 -->
            <br><br><br><br>
            <div class="order">
                <span style="white-space:pre"> </span><span class="line"></span>
                <span style="white-space:pre"> </span><span class="txt">喜好選單</span>
                <span style="white-space:pre"> </span><span class="line"></span>
            </div>

            <form method="post" action="Page3_goWhere_2.php">
                <div class="form-group row">
                    <label for="coffeeBrew" class="col-4 col-form-label">
                        <span>沖煮方式</span></label>
                    <div class="col-5">
                        <select id="coffeeBrew" name="沖煮方式" class="custom-select">
                            <option value="手沖">手沖式咖啡</option>
                            <option value="虹吸">虹吸式咖啡</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label" for="productArea"><span>咖啡產區</span></label>
                    <div class="col-5">
                        <select id="productArea" name="國家名稱" class="custom-select" style="text-align: center">
                            <option value="">不限</option>
                            <option value="台灣">台灣</option>
                            <option value="印度">印度</option>
                            <option value="衣索比亞">衣索比亞</option>
                            <option value="肯亞">肯亞</option>
                            <option value="巴西">巴西</option>
                            <option value="巴拿馬">巴拿馬</option>
                            <option value="哥倫比亞">哥倫比亞</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="process" class="col-4 col-form-label"><span>處 理 法</span></label>
                    <div class="col-5">
                        <select id="process" name="處理法" class="custom-select">
                            <option value="">不限</option>
                            <option value="日曬">日曬處理法</option>
                            <option value="水洗">水洗處理法</option>
                            <option value="蜜處理">蜜。處理法</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="beanDry" class="col-4 col-form-label"><span>咖啡焙度</span></label>
                    <div class="col-5">
                        <select id="beanDry" name="焙度" class="custom-select">
                            <option value="">不限</option>
                            <option value="淺焙">淺焙</option>
                            <option value="淺中焙">淺中焙</option>
                            <option value="中焙">中焙</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="flavor" class="col-4 col-form-label"><span>咖啡風味</span></label>
                    <div class="col-5">
                        <select id="flavor" name="風味" class="custom-select">
                            <option value="">不限</option>
                            <option value="花香">花香</option>
                            <option value="莓果">莓果</option>
                            <option value="焦糖">焦糖</option>
                            <option value="堅果">堅果</option>
                            <option value="巧克力可可">巧克力可可</option>
                            <option value="熱帶水果">熱帶水果</option>
                            <option value="塑膠味">塑膠味</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-3 col-5">
                        <button id="okButton" name="okButton" type="submit" class="btn btn-primary">我選好囉</button>
                        <button name="resett" type="reset" class="btn btn-primary">我要重選</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- -------喜好選單結束------ -->



        <!-- ------nav搜尋欄------ -->
        <script src="./js/nav.js"></script>
</body>

</html>