<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Even Numbers from 1 to N</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
    <?php
        if (isset($_GET['num'])) {
            $result = [];
            $num = intval($_GET['num']);
            for ($i = 1; $i <= $num; $i++) {
                if ($i % 2 == 0) {
                    $result[$i] = $i;
                }
            }
            echo implode(" ", $result);
        }
    ?>
</body>
</html>