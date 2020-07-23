<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>咖啡浪潮-知識站 </title>
    <style>
        @font-face {
            src: url(CSS/tw/NaikaiFont-Light.ttf);
            font-family: happy;
        }
       
            .progress>.progress-bar {
                width: 25%;
            }
       
    </style>
    <link rel="icon" href="PHOTO/素材/mainicon.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="CSS/_css/bootstrap.min.css">
    <script src="CSS/_js/jquery.min.js"></script>
    <script src="CSS/_js/popper.min.js"></script>
    <script src="CSS/_js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./CSS/_css/loading.css">
    <link rel="stylesheet" href="./CSS/Page1_kno.css">
    <link rel="stylesheet" href="CSS/nav.css">


</head>

<body style="font-family: happy;">
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

    <div style=" margin:auto
    ;text-align:center; width:1200px;height:700px;">
        <img src="/小專題-咖啡/PHOTO/施工中.gif" alt="" style="padding-left: 100px;
        padding-top:50px;">
        <h1 class="ld ld-bounce">施工中...</h1>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div style="font-size:2rem" >距離完工日期8/21還有</div>
    <i style="font-size:1.5rem"></i>  <i style="font-size:1.5rem"></i>  
    <i style="font-size:1.5rem"></i> <i style="font-size:1.5rem"></i>
    </div>
    <script>
    var aI = document.getElementsByTagName("i");

setInterval(function() {  // 設置倒數計時: 結束時間 - 當前時間

  // 當前時間
  var time = new Date();
  var nowTime = time.getTime(); // 獲取當前毫秒數
  // 設置結束時間 : 5月13號 15點0分0秒
  time.setMonth(7); //   獲取當前 月份 (從 '0' 開始算)
  time.setDate(21); //   獲取當前 日
  time.setHours(18); //   獲取當前 時
  time.setMinutes(0); //   獲取當前 分
  time.setSeconds(0);
  var endTime = time.getTime();

  // 倒數計時: 差值
  var offsetTime = (endTime - nowTime) / 1000; // ** 以秒為單位
  var sec = parseInt(offsetTime % 60); // 秒
  var min = parseInt((offsetTime / 60) % 60); // 分 ex: 90秒
  var hr = parseInt((offsetTime / 60 / 60)% 24); // 時
  var day = parseInt(offsetTime / 60 / 60/ 24);// 日

  aI[0].textContent = day + "日";
  aI[1].textContent = hr + "時";
  aI[2].textContent = min + "分";
  aI[3].textContent = sec + "秒";
}, 1000);
</script>

<script src="./js/nav.js"></script>


</body>

</html>