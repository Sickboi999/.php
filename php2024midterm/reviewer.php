<html>
    <head>
        <meta charset = "utf8">
        <?php session_start();
        if(isset($_SESSION["check"]))
        {
            if($_SESSION["check"] == "Yes")
            {
                echo"<b><font size = +3>Reviewer您好，歡迎進入論文評論網頁</font></b><br/>";
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
        論文評審決定: 
        <label>
            <input type = "radio" name = "decide" value = "0" checked>Accept
            <input type = "radio" name = "decide" value = "1">Minor Revision
            <input type = "radio" name = "decide" value = "2">Major Revision
            <input type = "radio" name = "decide" value = "3">Reject
        </label>
        <br/>
        論文評論/評語:
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
