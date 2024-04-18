<html>
    <head>
        <meta charset = "utf8">
        <?php session_start();
        if(isset($_SESSION["check"]))
        {
            if($_SESSION["check"] == "Yes")
            {
                echo"<b><font size = +3>Author您好，歡迎進入論文評論網頁</font></b><br/>";
            }else{
                echo"非法進入網頁<br/>";
                echo"3秒鐘之後返回登入畫面";
                header("Refresh:3;url = index.php");
            }   
        }else{
            echo"非法進入網頁"; 
            echo"5秒鐘之後返回登入畫面";
            header("Refresh:5;url = index.php");
        }
        ?>
    </head>
    <body>
        論文標題:<br/>
        <input type = "text" name = "title" required><br/>
        作者姓名:
        <input type = "text" name = "authorName" required><br/>
        作者Email:
        <input type = "email" name = "authorEmail" required><br/>
    <br/>
        論文摘要:
        <textarea name = "comment"
          rows = "20"
          cols = "50"
          required>
        </textarea>
        <br/>
        <input type = "submit" value = "提交">
        <br/>
    </body>
    <?php
    echo"<br/><a href = 'logout.php'>登出</a>";
    ?>
</html>