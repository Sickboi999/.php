<html>
    <head>
        <meta charset = "utf8">
        <b><font size = +3>高大資管論文投稿系統</font></b><br/>
        <br/>
    </head>
    <form action = "check.php" method = "get">
        請選擇您的角色:
        <select name = "role"><br/>
            <option value = "c">Chair</option>
            <option value = "r">Reviewer</option>
            <option value = "a">Author</option>
        </select>
        <br/>
        <?php
        if(isset($_COOKIE["login"]))
        {
            $uId=$_GET["uId"];
            echo"帳號:<input type = "text" name = "uId" value = "$uId"><br/>";
        }else{
            echo"帳號:<input type = "text" name = "uId" value = ""><br/>";
        }
        ?>
        密碼:<input type = "password" name = "uPwd" required><br/>
        <br/>
        <input type = "submit" value = "提交">
        <br/>
    </form>
    <?php
    //header("Refresh:1");
    date_default_timezone_set("Asia/Taipei");
    echo date("Y/m/d h:i:sa");
    ?>
</html>
