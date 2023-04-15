<?php session_start(); ?>

<form method="post">
    <h2>POST Form</h2>
    <input type="text" name="input-1" placeholder="Username">
    <br>
    <button type="submit" name="button">Submit</button>
</form>

<?php
    if(isset($_POST["input-1"])) {
        $_SESSION["input-1"] = $_POST["input-1"];
        echo $_POST["input-1"];
        header("Location: Superglobal Practical-3.php");
    }
?>
