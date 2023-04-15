<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>Superglobals</h2>

        <form method="">
            <h2>Post Form</h2>
            <input type="text" name="input-3" placeholder="Username">
            <br>
            <button type="submit" name="button">Submit</button>
        </form>

        <?php
            $x = 75;
            $y = 25;

            function addition() {
                $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            }

            addition();
            echo $GLOBALS['result']."<br>";

            echo $_SERVER['PHP_SELF']."<br>";
            echo $_SERVER['SERVER_NAME']."<br>";
            echo $_SERVER['HTTP_HOST']."<br>";
            echo $_SERVER['HTTP_REFERER']."<br>";
            echo $_SERVER['HTTP_USER_AGENT']."<br>";
            echo $_SERVER['SCRIPT_NAME']."<br>";
            echo $_SERVER['SERVER_PORT']."<br>";
            echo $_SERVER['SERVER_ADDR']."<br>";
            echo $_SERVER['DOCUMENT_ROOT']."<br>";

            if(isset($_GET["input-1"])&&isset($_GET["input-2"])) {
                echo $_GET["input-1"]."<br>";
                echo $_GET["input-2"]."<br>";
            }
            
        ?>
    </body>
</html>