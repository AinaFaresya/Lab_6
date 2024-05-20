<!DOCTYPE html>
<html lang = "en">
<head>
  <title>Lab 6 Q3</title>
</head>

<body>
    <?php
        function calculateArea($width, $height) {
            return $width * $height;
        }

        $width = 10;
        $height = 19;
        $area = calculateArea($width, $height);

        echo "The area of a rectangle with a width $width and height $height is $area";
        ?>
</body>
</html>
