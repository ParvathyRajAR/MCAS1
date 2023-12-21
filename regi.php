   <html>
<head><hr>
    <title>Registration Form</title>
</head>
<body>
<center>
<h2>Registration Form</h2></center>
<hr>

<form method="post" action=" ">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br><br>
    
    <label for="gender">Gender:</label>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br><br>
    
    <label for="address">Address:</label>
    <textarea id="address" name="address" required></textarea><br><br>

     <label for="email">Email:</label>
    <input type="text" id="email" name="email" required><br><br>

    
    <label for="language">Language:</label>
    <select id="language" name="language" required>
        <option value="english">English</option>
        <option value="malayalam">Malayalam</option>
        <option value="hindi">Hindi</option>
      
    </select><br><br>
    
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email=$_POST['email'];
    $language = $_POST['language'];
    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo "Gender: $gender <br>";
    echo "Address: $address <br>";
    echo"Email:$email<br>";
    echo "Language: $language <br>";
}
?>
</center>
</body>
</html>