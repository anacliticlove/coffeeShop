<?php
require_once("../dbConnect.php");

//註冊會員
if (isset($_POST["memberOkButton"])) {
    $joinMember =<<<memberJoin
    INSERT into `會員資料` (`memberEmail`,`memberPassword`,`memberName`,`memberPhone`) VALUES 
    ('{$_POST["eMail"]}','{$_POST["passWord"]}','{$_POST["myName"]}','{$_POST["myPhone"]}')
    memberJoin;
    $result = mysqli_query($link, $joinMember);
    var_dump($result);
    ?>
    <script>
    alert ('加入成功!!請重新登入');
    </script>
    <?php
    header("Refresh:0.1;url=login.php");
    
}
//回首頁
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
                    <h1 onclick="testKeyDown()">註冊會員</h1>

                    <!-- Text input-->
                    <div class="form-group ">
                        <label class="col-md-8 control-label " for="textinput "></label>
                        <div class="col-md-8 ">
                            <div class="input-group ">
                                <span class="input-group-addon ">帳號</span>
                                <input id="eMail" name="eMail" type="text " placeholder="請輸入信箱/帳號" class="form-control input-md " vlaue=""   >
                            </div>
                            <span class="help-block "> &nbsp;</span>
                            <!-- <span class="help-block "> qaz@yahoo.com.tw</span> -->
                        </div>

                    </div>

                    <!-- Password input-->
                    <div class="form-group ">
                        <label class="col-md-8 control-label " for="passwordinput "></label>
                        <div class="col-md-8 ">
                            <div class="input-group">
                                <span class="input-group-addon ">密碼</span>
                                <input id="passWord" name="passWord" type="password " placeholder="請輸入密碼" class="form-control input-md " vlaue="">
                            </div>
                            <span class="help-block "> &nbsp;</span>
                            <!-- <span class="help-block ">1qaz2wsx</span> -->
                        </div>
                    </div>
                    <!-- Password input-->
                    <div class="form-group ">
                        <label class="col-md-8 control-label " for="passwordinput "></label>
                        <div class="col-md-8 ">
                            <div class="input-group">
                                <span class="input-group-addon ">姓名</span>
                                <input id="myName" name="myName" type="text" placeholder="請輸入姓名" class="form-control input-md " vlaue="">
                            </div>
                            <span class="help-block "> &nbsp;</span>
                            <!-- <span class="help-block ">草帽小子</span> -->
                        </div>
                    </div>
                    <!-- Password input-->
                    <div class="form-group ">
                        <label class="col-md-8 control-label " for="passwordinput "></label>
                        <div class="col-md-8 ">
                            <div class="input-group">
                                <span class="input-group-addon ">電話</span>
                                <input id="myPhone" name="myPhone" type="text" placeholder="請輸入電話" class="form-control input-md " vlaue="">
                            </div>
                            <span class="help-block "> &nbsp;</span>
                            <!-- <span class="help-block ">0987456321</span> -->
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group ">
                        <div class="col-md-8 ">
                            <button id="memberOkButton" name="memberOkButton" class="btn btn-success ">確定送出</button>
                            <button id="memberReset" name="memberReset" class="btn btn-danger ">清除重填</button>
                            <button id="goBack" name="goBack" class="btn btn-warning ">回首頁</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-3 "></div>
    </div>
</body>
<script>
     function testKeyDown() {
            // console.log(eventObj)
            document.getElementById('eMail').value = 'qaz@yahoo.com.tw';
            document.getElementById('passWord').value = '1qaz2wsx';
            document.getElementById('myName').value = '王小明';
            document.getElementById('myPhone').value = "0987456321";
        }
</script>
</html>