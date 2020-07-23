<?php
session_start();
require_once("../dbConnect.php");

if (isset($_SESSION["memberId"])){
    $updateMember = <<<memberUpdate
    select * from `會員資料` where `memberId` = '{$_SESSION["memberId"]}'
    memberUpdate;
    $result = mysqli_query($link, $updateMember);
    $row = mysqli_fetch_assoc($result);
    }
    if (isset($_POST["upOkButton"])){
        $resetMember = <<<memberReset
            update `會員資料` set 
            `memberEmail` = '{$_POST["reeMail"]}',
            `memberPassword` = '{$_POST["repassWord"]}',
            `memberName` = '{$_POST["remyName"]}',
            `memberPhone` = '{$_POST["remyPhone"]}'
        where `memberId` = '{$_POST["memberId"]}'
        memberReset;
        $result = mysqli_query($link, $resetMember);
        ?>
        <script>
        alert ('修改成功!!請重新登入');
        </script>
        <?php
        header("Refresh:0.1;url=login.php");
    
    }


if (isset($_POST["goBack"])) {
    header("Refresh:0.1 ;url=../index.php");
}





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>咖啡浪潮</title>
    <style>
        @font-face {
            src: url(../CSS/tw/NaikaiFont-Light.ttf);
            font-family: happy;
        }
    </style>

    <link rel="icon" href="../PHOTO/素材/mainicon.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="../CSS/_css/bootstrap.min.css">
    <script src="../CSS/_js/jquery.min.js"></script>
    <script src="../CSS/_js/popper.min.js"></script>
    <script src="../CSS/_js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/css_login/member.css">
</head>

<body>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form class="form-horizontal" method="post" action="">
                <fieldset>

                    <!-- Form Name -->
                    <h1>資料修改</h1>
                    <input type="hidden" name="memberId" value="<?= $row["memberId"] ?>">
                    <!-- Text input-->
                    <div class="form-group " >
                        <label class="col-md-8 control-label " for="textinput "></label>
                        <div class="col-md-8 ">
                            <div class="input-group ">
                                <span class="input-group-addon ">帳號</span>I
                                <input id="reeMail" name="reeMail" type="text " placeholder="請輸入信箱/帳號" class="form-control input-md " value="<?=$row["memberEmail"]?>">
                            </div>
                            <span class="help-block "> &nbsp;</span>
                        </div>

                    </div>

                    <!-- Password input-->
                    <div class="form-group ">
                        <label class="col-md-8 control-label " for="passwordinput "></label>
                        <div class="col-md-8 ">
                            <div class="input-group">
                                <span class="input-group-addon ">密碼</span>
                                <input id="repassWord" name="repassWord" type="password " placeholder="請輸入密碼" class="form-control input-md " value="<?=$row["memberPassword"]?>">
                            </div>
                            <span class="help-block "> &nbsp;</span>
                        </div>
                    </div>
                    <!-- Password input-->
                    <div class="form-group ">
                        <label class="col-md-8 control-label " for="passwordinput "></label>
                        <div class="col-md-8 ">
                            <div class="input-group">
                                <span class="input-group-addon ">姓名</span>
                                <input id="remyName" name="remyName" type="text" placeholder="請輸入姓名" class="form-control input-md " value="<?=$row["memberName"]?>">
                            </div>
                            <span class="help-block "> &nbsp;</span>
                        </div>
                    </div>
                    <!-- Password input-->
                    <div class="form-group ">
                        <label class="col-md-8 control-label " for="passwordinput "></label>
                        <div class="col-md-8 ">
                            <div class="input-group">
                                <span class="input-group-addon ">電話</span>
                                <input id="remyPhone" name="remyPhone" type="tel" placeholder="請輸入電話" class="form-control input-md " value="<?=$row["memberPhone"]?>">
                            </div>
                            <span class="help-block "> &nbsp;</span>
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group ">
                        <div class="col-md-8 ">
                            <button id="upOkButton" name="upOkButton" class="btn btn-success ">確定送出</button>
                            <button id="goBack" name="goBack" class="btn btn-warning ">放棄修改</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-3 "></div>
    </div>
</body>

</html>