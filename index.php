<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP Code</title>
</head>

<body>
    <?php
    function checkNumber(int $var = null)
    {
        switch ($var) {
            case $var > 0:
                echo "Positive";
                break;

            case $var < 0:
                echo "Negative";
                break;

            default:
                echo "Neither positive nor negative";
        }
    }

    checkNumber(-3);
    echo "<br />";

    $arr = ["alpha", "beta", "gamma", "delta", "epsilon"];

    print_r(array_rand($arr, 3));
    echo "<br />";

    $arr = shuffle($arr);

    print_r($arr);
    ?>
</body>

</html>