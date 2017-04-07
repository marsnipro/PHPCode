<html>
    <body>
        <form action="btnclick.php" method="get">
            <input type="submit" name="on" value="on">
            <input type="submit" name="off" value="off">
        </form>
    </body>
</html>
<?php
    if(isset($_POST['on'])) {
        onFunc();
    }
    if(isset($_POST['off'])) {
        offFunc();
    }

    function onFunc(){
        echo "Button on Clicked";
    }
    function offFunc(){
        echo "Button off clicked";
    }
?>
