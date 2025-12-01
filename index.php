<?php
//connection DB
    $connection = new mysqli('localhost','root','','team');
// echo "<pre>";
// print_r($_POST['name'],$_POST['age']);
// echo "</pre>";

//connection DB
    // $connection = new mysqli('localhost','root','','team');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// developer form manage
if(isset($_POST['developer_form'])){
    //get value
    $name = $_POST['name'];
    $age = $_POST['age'];
    $cell = $_POST['cell'];
    $location = $_POST['location'];
    $gender_value = $_POST['gender'] ?? 'Male';
    $skill = $_POST['skill'];
    $photo = $_POST['photo'];

    //form Validation
    if(empty($name)){
        $msg = "Name field is required";
    }elseif(empty($age)){
        $msg= "Age field is required";
    }elseif(empty($cell)){
        $msg  = "<p style=\"color:red;\"> Phone Number is Required</p>";
    }else{
        //send data to DB
        $sql = "INSERT INTO devlopers (name,age,cell,location,gender,skill,photo) VALUES ('$name','$age','$cell','$location','$gender_value','$skill','$photo' )";
        $connection -> query($sql);
        $msg = "<p style=\"color:green;\" >Developer Created Successfull</p>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>team soft</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="team-form">
        <a href="./devs.php">Developers</a>
        <h2>Create Developer</h2>       
        <hr>
        <?php 
            echo $msg  ?? ''; ?>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="age" placeholder="Age">
            <input type="text" name="cell" placeholder="Cell">
            <select name="location" id="">
                <option value="" selected disabled>-select-</option>
                <option value="Barisal">Barisal</option>
                <option value="Patuakhali">Patuakhali</option>
                <option value="Mirzagonj">Mirzagonj</option>
                <option value="Subidkhali">Subidkhali</option>
            </select>
            <div class="gender_value">
                <label>
                   <input type="radio" name="gender" value="Male"> Male
                </label>
                <label>
                   <input type="radio" name="gender" value="female"> Female
                </label>
            </div>
            <select name="skill" id="">
                <option value="" selected disabled>-select-</option>
                <option value="IOS">IOS</option>
                <option value="IOS">IOS</option>
                <option value="PHP">PHP</option>
                <option value="Python">Python</option>
            </select>
            <input type="text" name="photo" placeholder="Photo">
            <input type="submit" name="developer_form" value="Create">
        </form>
    </div>



</body>
</html>