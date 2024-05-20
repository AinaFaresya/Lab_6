<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
    <style>
        table, td {
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
 <?php 
    $name = "Aina Faresya";
    $matricNum = "AI220019";
    $course = "Information Technology";
    $year = 2;
    $address = "Jalan Delima 17 Taman Cahaya Masai"

 ?>

 <table>
    <tr>
        <td>Name</td>
        <td><?php echo "$name"; ?></td> 
    </tr>

    <tr>
        <td>Matric Number</td>
        <td><?php echo "$matricNum"; ?></td>
    </tr>

    <tr>
        <td>Course</td>
        <td><?php echo "$course"; ?></td>
    </tr>

    <tr>
        <td>Year of Study</td>
        <td><?php echo "$year"; ?></td>
    </tr>

    <tr>
        <td>Address</td>
        <td><?php echo "$address"; ?></td>
    </tr>


 </table>
 
</body>
</html>