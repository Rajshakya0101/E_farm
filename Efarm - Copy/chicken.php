
<?php include("connection.php"); ?>
<?php
$insert = false;
if(isset($_POST['submit'])){
    // $server = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "live_stock";

    // $con = mysqli_connect($server,$username,$password,$database);

    // if(!$con){
    //     die("connection to this database failed due to" . mysqli_connect_error());
    // }
    // echo "Connection established to database.";
    $id = $_POST['id'];
    $parentId = $_POST['parentId'];
    $breed = $_POST['breed'];
    $sex = $_POST['sex'];
    $color = $_POST['color'];
    $weight = $_POST['weight']; 
    $age = $_POST['age'];
    $vaccination = $_POST['vaccination'];
    $diseases = $_POST['diseases'];
    $food = $_POST['food'];
    // if($id!="" && $parentId!="" && $breed!="" && $sex!="" && $color!="" && $weight!="" && $age!="" && $vaccination!="" && $diseases!="" && $height!="" && $food!=""){
    $sql = "INSERT INTO `live_stock`.`chicken`(`id`, `parent_id`, `breed`, `sex`, `color`, `weight`, `age`, `vaccination`, `diseases`, `food`, `date_time`) VALUES ('$id','$parentId','$breed','$sex','$color','$weight','$age','$vaccination','$diseases','$food',current_timestamp());";
    $data = mysqli_query($conn,$sql);
    // }
    if($data == true){
        // echo "Successfully Save.";
        $insert = true;
        // $message = 'Saved Successfully';
        // echo "<script>alert('$message');</script>";
        
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $conn->close();
    // echo $sql;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./goatForm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstra
    p@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Chicken Input Form</title>
    <link rel="shortcut icon" href="/Media/depositphotos_362450534-stock-illustration-vector-picture-cow-head-design______.png">
</head>
 
<body style="background-color:#d5ede9;">
    <div class="w3-container w3-teal">
        <h2>Chicken Input Form</h2>
    </div>
     
    <?php
    $message = 'Saved Successfully';
    function function_alert($message) {
      
        // Display the alert box 
        echo "<script>alert('$message');</script>";
    }
    if($insert==true){
        // echo "<p class='Savetext' style='text-align: center; text-color:green; text-weight:7px'>Saved successfully</p>";
        
        // echo'Saved Successfully';
        // header('Location: index.php');
        function_alert($message);
    }
    ?>
    <div class="forms">
    <form action="#" method="post" class="w3-container w3-card-4 w3-margin-top w3-twothird w3-display-topmiddle" style="border-radius: 5px; background-color:white; ">
        <br>
        <p>
            <label class="w3-text-grey">Tag Id</label>
            <input class="w3-input w3-border" name="id" id="Id" type="text" style="border-radius: 5px" required="">
        </p>
        <p>
            <label class="w3-text-grey">Parent Id</label>
            <input class="w3-input w3-border" name="parentId" id="parent_Id" type="text" style="border-radius: 5px" required="">
        </p>
        <p>
            <label class="w3-text-grey">Breed</label>
            <select class="w3-select w3-border" name="breed">
                <option value="" disabled selected>Choose your option</option>
                <option value="Kadaknath">Kadaknath</option>
                <option value="Vanaraja">Vanaraja</option>
                <option value="Giriraja">Giriraja</option>
                <option value="BeetalRhode Island Red">BeetalRhode Island Red</option>
                <option value="Australorp">Australorp</option>
                <option value="Leghorn">Leghorn</option>
                <option value="Cornish">Cornish</option>
                <option value="Gramapriya">Gramapriya</option>
              </select>
        </p>
        <p>
            <label class="w3-text-grey">Gender</label>
            <select class="w3-select w3-border" name="sex" id="Sex" style="border-radius: 5px" type="option">
                <option value="" disabled selected>Choose your option</option>
                <option value="Male(Rooster)">Male(Rooster)</option>
                <option value="Female(Hen)">Female(Hen)</option>
                <option value="Others">Others</option>
              </select>
        </p>
        <p>
            <label class="w3-text-grey">Color</label>
            <select class="w3-select w3-border" name="color" id="Color" style="border-radius: 5px" type="option">
                <option value="" disabled selected>Choose your option</option>
                <option value="White">White</option>
                <option value="Brown">Brown</option>
                <option value="Black">Black</option>
                <option value="Multicolored">Multicolored</option>
                <option value="Buff">Buff</option>
              </select>
        </p>
        <p>
            <label class="w3-text-grey">Weight(gram)</label>
            <input class="w3-input w3-border" type="text" name="weight" required="">
        </p>
        <p>
            <label class="w3-text-grey">Age(Months)</label>
            <input class="w3-input w3-border" name="age" id="Age" type="text" style="border-radius: 5px" required="">
        </p>
        <p>
            <label class="w3-text-grey">Vaccination</label>
            <select class="w3-select w3-border" name="vaccination" id="Vaccination" style="border-radius: 5px" type="option">
                <option value="" disabled selected>Choose your option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
        </p>
        <p>
            <label class="w3-text-grey">Diseases(specify, if any. Otherwise: No)</label>
            <input class="w3-input w3-border" name="diseases" id="Diseases" type="text" style="border-radius: 5px" required="">
        </p>
        <p>
            <label class="w3-text-grey">Food</label>
            <input class="w3-input w3-border" name="food" id="Food" type="text" style="border-radius: 5px" required="">
        </p>
        <br>

        <div class="forms" style="border-radius: 5px">
       
        <p><button  type="save" name="submit" class="w3-btn w3-padding w3-teal" style="width:120px; border-radius: 5px;  ">Save &nbsp; ></button></p>
        <input type="reset">
        </div>
    </form>
    </div>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootst
    rap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcT
    NXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>