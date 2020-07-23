<?php
session_start();
require_once("../dbConnect.php");

//登出:是否取得'logout'的值
if (isset($_GET["logout"])){
    session_unset();
    ?>
        <script>
        alert ('報告完畢，謝謝大家');
        </script>
        <?php
        header("Refresh:0.1 ;url=login.php");
}
//註冊會員
if (isset($_POST["loginJoinButton"])) {
    header("location:member.php");
}
//回首頁
if (isset($_POST["loginBackButton"])) {
    header("Refresh:0.1 ;url=../index.php");
}
//登入:是否取得POST的值
if (isset($_POST["loginOkButton"])) {

    $account =<<<myAccount
    select `memberId`,`memberEmail`,`memberPassword`,
    `memberName`,`memberPhone` FROM `會員資料` where `memberEmail`='{$_POST["eMail"]}' and
    `memberPassword`='{$_POST["passWord"]}'
    myAccount;
    $result = mysqli_query($link, $account);
    // var_dump($result);
    $row = mysqli_fetch_assoc($result);
    //判斷資料是否在會員清單內
    if ($row != null){
        $_SESSION["eMail"] = $row["eMail"];
        $_SESSION["memberId"] = $row["memberId"];
        $_SESSION["memberName"]= $row["memberName"];?>
        <script>
        alert ('登入成功');
        </script>
<?php
    header("Refresh:0.1;url=../index.php");  
    exit();
    //登入失敗
    }else{ $_SESSION["eMail"] = "";
        $_SESSION["memberId"] = "";
        $_SESSION["memberName"]= "";
        ?>
   
        <script>
        
        alert ('帳號或密碼有問題喔!!請先登入');
        </script>
        <?php
        header("Refresh:0.1;url=login.php");
    }

    
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
    
    <link rel="stylesheet" href="../CSS/css_login/login.css">
</head>

<body>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form class="form-horizontal" method="post" action="login.php">
                <fieldset>

                    <!-- Form Name -->
                    <h1 onclick=testKeyDown()>會員登入</h1>

                    <!-- Text input-->
                    <div class="form-group ">
                        <label class="col-md-8 control-label " for="textinput "></label>
                        <div class="col-md-8 ">
                            <div class="input-group ">
                                <span class="input-group-addon ">帳號</span>
                                <input id="eMail" name="eMail" type="text " placeholder="請輸入信箱/帳號" class="form-control input-md ">
                            </div>
                            <span class="help-block "> &nbsp;</span>
                            <!-- <span class="help-block ">qaz@yahoo.com.tw</span> -->
                        </div>

                    </div>

                    <!-- Password input-->
                    <div class="form-group ">
                        <label class="col-md-8 control-label " for="passwordinput "></label>
                        <div class="col-md-8 ">
                            <div class="input-group">
                                <span class="input-group-addon ">密碼</span>
                                <input id="passWord" name="passWord" type="password " placeholder="請輸入密碼" class="form-control input-md ">
                            </div>
                            <span class="help-block "> &nbsp;</span>
                            <!-- <span class="help-block ">1qaz2wsx</span> -->
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group ">
                        <div class="col-md-8 ">
                        <button id="loginOkButton" name="loginOkButton" class="btn btn-success ">登&nbsp;&nbsp;&nbsp;&nbsp;入</button>
                        <button id="loginJoinButton" name="loginJoinButton" class="btn btn-danger ">註冊會員</button>
                        <button id="loginBackButton" name="loginBackButton" class="btn btn-warning ">回首頁</button>
                        </div>
                    </div> 
                </fieldset>
            </form>
            
        </div>
        <div class="col-3 "></div>
    </div>
    <script>
         function testKeyDown() {
            // console.log(eventObj)
            document.getElementById('eMail').value = 'qaz@yahoo.com.tw';
            document.getElementById('passWord').value = '1qaz2wsx';
        }
    </script>
</body>

</html>