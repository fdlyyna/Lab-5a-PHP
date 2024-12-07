<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    function calculateArea($width, $height) {
        return $width * $height;
    }

    $width = 4; // Width of the rectangle
    $height = 2; // Height of the rectangle
    $area = calculateArea($width, $height);
    ?>

    <p>
        <b>The area of the rectangle with a width of <?php echo $width; ?> and <?php echo $height; ?> is <?php echo $area; ?>.</b>
    </p>
</body>
</html>
