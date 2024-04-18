<html>
    <head>
        <meta charset = "utf8">
        <?php session_start();
        if(isset($_SESSION["check"]))
        {
            if($_SESSION["check"] == "Yes")
            {
                echo"<b><font size = +5>Hi Chair,Welcome!</font></b><br/>";
            }else{
                echo"非法進入網頁<br/>";
                echo"3秒鐘之後返回登入畫面";
                header("Refresh:3;url = index.php");
            }   
        }else{
            echo"非法進入網頁"; 
            echo"3秒鐘之後返回登入畫面";
            header("Refresh:3;url = index.php");
        }
        ?>
    </head>
    <body bgcolor = D7CCC8>
        You are able to take a rest here till whenever u wanna leave!
    </body>
    <?php session_start();
    echo"<br/><a href='logout.php'>登出</a>";
    ?>
</html>
