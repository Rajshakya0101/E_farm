
<?php include("connection.php"); ?>
<?php
$insert = false;
if(isset($_POST['submit']))
    $tagId = $_POST['Tag_id'];
    $pluckingDate = $_POST['Plucking_date'];
    $vegetableName = $_POST['Vegetable_name'];
    $manureType = $_POST['Manure_type'];
    $vegetableBreed = $_POST['Vegetable_breed'];
    $productionLocation = $_POST['Production_location'];

    // Handle image upload
    $uploadDir = "uploads/"; // Create an "uploads" directory in your project
    $targetFile = $uploadDir . basename($_FILES["img"]["name"]);

    if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
        // Image uploaded successfully, store the path in the database
        $imagePath = $targetFile;

        // Insert data into the database
        $sql = "INSERT INTO `live_stock`.`veggies`(`tag_id`, `plucking_date`, `name`, `manure`, `breed`, `location`, `date`)
                VALUES ('$tagId', '$pluckingDate', '$vegetableName', '$manureType', '$vegetableBreed', '$productionLocation', '$imagePath',current_timestamp());";

    
    if($data == true){
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
    <title>Vegetable Form</title>
    <link rel="shortcut icon" href="/Media/depositphotos_362450534-stock-illustration-vector-picture-cow-head-design______.png">
</head>
 
<body style="background-color:#d5ede9;">
    <div class="w3-container w3-green">
        <h2>Vegetable Form</h2>
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
            <input class="w3-input w3-border" name="Tag_id" id="Id" type="text" style="border-radius: 5px" required="">
        </p>
        <p>
            <label class="w3-text-grey for="img">Select image:</label>
            <input class="w3-input w3-border" style="border-radius: 5px" type="file" id="img" name="img" accept="image/*">
        </p>
        <p>
            <label class="w3-text-grey">Plucking Date</label>
            <input class="w3-input w3-border" name="Plucking_date" id="ParentId" type="Date" style="border-radius: 5px" required="">
        </p>
        <p>
            <label class="w3-text-grey">Name of Veggie</label>
            <input class="w3-select w3-border" name="Vegetable_name" id="veggie" style="border-radius: 5px" type="option">
        </p>
        <p>
            <label class="w3-text-grey">Manures</label>
            <select class="w3-select w3-border" name="Manure_type" id="manure" style="border-radius: 5px" type="option">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="Fertilizers">Fertilizers</option>
                    <option value="Organic Manures">Organic Manures</option>
              </select>
        </p>
        <p>
            <label class="w3-text-grey">Breed (according to veggies)</label>
            <input class="w3-input w3-border" name="Vegetable_breed" id="breed" type="text" style="border-radius: 5px" required="">
        </p>
        <p>
            <label class="w3-text-grey">Location of Production</label>
            <input class="w3-input w3-border" name="Production_location" id="location" type="text" style="border-radius: 5px" required="">
        </p>
        
        <div class="forms" style="border-radius: 5px">
       
        <p><button  type="save" name="submit" class="w3-btn w3-padding w3-green" style="width:120px; border-radius: 5px;  ">Save &nbsp;</button></p>
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