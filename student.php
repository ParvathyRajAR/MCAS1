<!DOCTYPE html>
<html>
<head>
    <title>Student Names</title>
    
    </style>
</head>
<body>
    <?php
    $students = array("Namitha", "Vrinda", "Anna", "Devika", "Fathima", "Sumayya", "Sruthy");
    echo "<h2>Original Array:</h2>";
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    
    asort($students);
    echo "<h2>Ascending Sort:</h2>";
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    
    arsort($students);
    echo "<h2>Descending Sort:</h2>";
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    ?>
</body>
</html>