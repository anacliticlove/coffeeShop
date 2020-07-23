<?php
session_start();
require_once("dbConnect.php");

if (isset($_POST["okButton"])) {
    // echo $_POST["沖煮方式"];  
    // echo $_POST["國家名稱"];  
    // echo $_POST["處理法"];  
    // echo $_POST["焙度"];  
    // echo $_POST["風味"]; 
    $A = ($_POST["沖煮方式"] == "") ? "" : "`沖煮方式`='{$_POST["沖煮方式"]}'";
    $B = ($_POST["國家名稱"] == "") ? "" : "and`國家名稱`='{$_POST["國家名稱"]}'";
    $C = ($_POST["處理法"] == "") ? "" : "and`處理法`='{$_POST["處理法"]}'";
    $D = ($_POST["焙度"] == "") ? "" : "and`焙度`='{$_POST["焙度"]}'";
    $E = ($_POST["風味"] == "") ? "" : "and`風味`='{$_POST["風味"]}'";  
    // echo "$A";
    // echo "$B";
    // echo "$C";
    // echo "$D";
    // echo "$E";
    $shopName = <<<SelectList
SELECT `咖啡店名`,`沖煮方式`,`國家名稱`,`處理法`,`焙度`,`風味` FROM `產品清單` a JOIN `shopname` s on a.shopId = s.shopId  WHERE 
$A$B$C$D$E order by `咖啡店名`
SelectList;
    // echo "$shopName";
// exit();
    $result = mysqli_query($link, $shopName);
    var_dump($result);

    //  沒有選擇到跳轉回選擇頁
    if (mysqli_fetch_assoc($result) == null) { ?>
        <script>
            alert("目前無符合項目，請重新選擇，謝謝!!");
        </script>
<?php
        header("Refresh:0.1;url=Page3_goWhere.php");
    }
} ?>

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
    <div class="container" >
        <!-- -------喜好選單結束------ -->
        <!-- -------店家清單開始------ -->

        <div class="coffeeForm">
            <!-- 3個br扣掉被nav擋到的部分 -->
            <br><br><br><br>
            <div class="order">
                <span style="white-space:pre"> </span><span class="line"></span>
                <span style="white-space:pre"> </span><span class="txt">店家清單</span>
                <span style="white-space:pre"> </span><span class="line"></span>
                
            </div>

            <table class="table table-hover table-striped" style="background-image: url('./PHOTO/主頁/background2.png');">
                <thead style="font-size: 1.5rem; text-align:center">
                    <tr>
                        <th>圖片</th>
                        <th>店名</th>
                        <th>國家</th>
                        <th>沖煮方式</th>
                        <th>處理法</th>
                        <th>焙度</th>
                        <th>風味</th>
                        <th><a href="Page3_goWhere.php"><button class="btn btn-outline-success">回選單</button></a></th>
                    </tr>
                </thead>
                <tbody style="font-size: 1.3rem;">
                    <?php
                    $result = mysqli_query($link, $shopName);
                    while ($row = mysqli_fetch_assoc($result)) :
                    ?>
                        <tr style="text-align:center;" >
                            <td ><img src="PHOTO/店家清單/<?= $row["咖啡店名"] ?>.png" class="img-fluid" alt=""></td>
                            <td style="vertical-align:middle;"><?= $row["咖啡店名"] ?></td>
                            <td style="vertical-align:middle;"><?= $row["國家名稱"] ?></td>
                            <td style="vertical-align:middle;"><?= $row["沖煮方式"] ?></td>
                            <td style="vertical-align:middle;"><?= $row["處理法"] ?> </td>
                            <td style="vertical-align:middle;"><?= $row["焙度"] ?> </td>
                            <td style="vertical-align:middle;"><?= $row["風味"] ?> </td>
                            <td style="vertical-align:middle;"><a href="Page1_know.php"><button id="button1id " name="button1id " class="btn btn-danger ">選擇</button></a></td>
                        </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>
        </div>



        <!-- ------nav搜尋欄------ -->
        <script src="./js/nav.js"></script>

        </script>


</body>

</html>