<?php include("connection.php"); ?>
<?php
$updated = false;
$sr = $_GET['updateid'];
$sql="SELECT * FROM `live_stock`.`cow` WHERE Sr='$sr'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$id = $row['id'];
$parentId = $row['parentId'];
$breed = $row['breed'];
$sex = $row['sex'];
$color = $row['color'];
$weight = $row['weight']; 
$age = $row['age'];
$vaccination = $row['vaccination'];
$diseases = $row['diseases'];
$height = $row['height'];
$food = $row['food'];
// $date_time = $row['datetime'];
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $parentId = $_POST['parentId'];
    $breed = $_POST['breed'];
    $sex = $_POST['sex'];
    $color = $_POST['color'];
    $weight = $_POST['weight']; 
    $age = $_POST['age'];
    $vaccination = $_POST['vaccination'];
    $diseases = $_POST['diseases'];
    $height = $_POST['height'];
    $food = $_POST['food'];
    // $datetime = $_POST[''];
    $sql = "UPDATE `live stock`.`cow` SET Sr=$sr, id=$id,parentId='$parentId',breed='$breed',sex='$sex',color='$color',weight=$weight,age=$age,vaccination='$vaccination',diseases='$diseases',height=$height,food='$food';";
    $data = mysqli_query($conn,$sql);
    if($data == true){
        $updated = true; 
        ?>
        <script>alert('Saved Successfully');</script>
        <?php
        header('location:cowdis.php');
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $conn->close();
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
    <title>Cow Input Form</title>
    <link rel="shortcut icon" href="/Media/depositphotos_362450534-stock-illustration-vector-picture-cow-head-design______.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
 
<body style="background-color:#d5ede9;">
    <div class="w3-container w3-teal">
        <h2>Cow Input Form</h2>
    </div>
    <div class="forms">
    <form action="#" method="post" class="w3-container w3-card-4 w3-margin-top w3-twothird w3-display-topmiddle" style="border-radius: 5px; background-color:white; ">
        <br>
        <p>
            <label class="w3-text-grey">Id</label>
            <input class="w3-input w3-border" name="id" id="Id" value="<?php echo $id?>" type="text" style="border-radius: 5px" required="">
        </p>
        <p>
            <label class="w3-text-grey">Parent Id</label>
            <input class="w3-input w3-border" name="parentId" id="ParentId" type="text" value="<?php echo $parentId?>" style="border-radius: 5px" required="">
        </p>
        <p>
            <label class="w3-text-grey">Breed</label>
            <select class="w3-select w3-border" name="breed" id="Breed" value="<?php echo $breed?>" style="border-radius: 5px" type="option">
                <option value="" disabled selected>Choose your option</option>
                <option value="Jamunapari">Jamunapari</option>
                <option value="Sirohi">Sirohi</option>
                <option value="Boer">Boer</option>
                <option value="Beetal">Beetal</option>
                <option value="Osmanabadi">Osmanabadi</option>
                <option value="Black Bengal">Black Bengal</option>
                <option value="Barbari">Barbari</option>
                <option value="Malabari">Malabari</option>
                <option value="Kutchi">Kutchi</option>
                <option value="Marwari">Marwari</option>
              </select>
        </p>
        <p>
            <label class="w3-text-grey">Sex</label>
            <select class="w3-select w3-border" name="sex" id="Sex" value="<?php echo $sex?>" style="border-radius: 5px" type="option">
                <option value="" disabled selected>Choose your option</option>
                <option value="Male">Male(bucks)</option>
                <option value="Female">Female(nannies)</option>
                <option value="Others">Others</option>
              </select>
        </p>
        <p>
            <label class="w3-text-grey">Color</label>
            <select class="w3-select w3-border" name="color" id="Color" value="<?php echo $color?>" style="border-radius: 5px" type="option">
                <option value="" disabled selected>Choose your option</option>
                <option value="White">White</option>
                <option value="Brown">Brown</option>
                <option value="Black">Black</option>
                <option value="Gray">Gray</option>
                <option value="Red">Red</option>
                <option value="Spots">Spots</option>
              </select>
        </p>
        <p>
            <label class="w3-text-grey">Weight(kg)</label>
            <input class="w3-input w3-border" name="weight" id="Weight" value="<?php echo $weight?>" type="text" style="border-radius: 5px" required="">
        </p>
        <p>
            <label class="w3-text-grey">Age</label>
            <input class="w3-input w3-border" name="age" id="Age" value="<?php echo $age?>" type="text" style="border-radius: 5px" required="">
        </p>
        <p>
            <label class="w3-text-grey">Vaccination</label>
            <select class="w3-select w3-border" name="vaccination" value="<?php echo $vaccination?>" id="Vaccination" style="border-radius: 5px" type="option">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                

              </select>
        </p>
        <p>
            <label class="w3-text-grey">Diseases(specify, if any. Otherwise: No)</label>
            <input class="w3-input w3-border" name="diseases" id="Diseases" value="<?php echo $diseases?>" type="text" style="border-radius: 5px" required="">
        </p>
        <p>
            <label class="w3-text-grey">Height(Feets)</label>
            <input class="w3-input w3-border" name="height" id="Height" type="text" value="<?php echo $height?>" style="border-radius: 5px" required="">
        </p>
        <p>
            <label class="w3-text-grey" style="border-radius: 5px">Food</label>
            <input class="w3-input w3-border" name="food" id="Food" type="text" value="<?php echo $food?>" style="border-radius: 5px" required="">
        </p>
        <br>

        <div class="forms" style="border-radius: 5px">
       
        <p><button  type="save" name="update" class="w3-btn w3-padding w3-teal" style="width:120px; border-radius: 5px;  ">UPDATE &nbsp;</button></p>
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