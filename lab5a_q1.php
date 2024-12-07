<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5A Q1</title>
</head>
<body>
    <?php  
        $name = "Puteri Fadlina Aliah Binti Megat Mahayudin";
        $matric = "A1220248";
        $course = "Bachelor in Computer Science (Web Technology)";
        $year = "Year 3";
        $address = "No. 136, Jalan Springhill, Bandar Springhill, Port Dickson";
    ?> 

    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>  
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric; ?></td>  
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>  
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year; ?></td>  
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>  
        </tr>
    </table>
</body>
</html>
