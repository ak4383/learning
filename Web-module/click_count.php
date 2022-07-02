<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Khorn altar</title>
    <meta charset="utf-8">
</head>

<body>
    <form>
        <input type="submit" value="Еще череп для трона" />
    </form>
    <?php
        if (isset($_SESSION["count"]))
            $i = $_SESSION["count"];
        else
            $i = -1;

        $i += 1;
        echo "$i черепов";
        $_SESSION["count"] = $i;
    ?>

</body>
</html>