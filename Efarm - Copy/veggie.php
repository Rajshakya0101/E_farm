<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetable Form</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <style>
        h2 {
            text-align: center;
        }
        .flex {
            align-content: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<div class="w3-container w3-green">
    <h2>Vegetables Form</h2>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Database connection parameters
    $servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
    $username = "root"; // Your MySQL username
    $password = ""; // Your MySQL password
    $dbname = "live_stock"; // Your database name

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from the HTML form
    $tagId = $_POST["tag_id"];
    $pluckingDate = $_POST["plucking_date"];
    $vegetableName = $_POST["vegetable_name"];
    $manureType = $_POST["manure_type"];
    $vegetableBreed = $_POST["vegetable_breed"];
    $productionLocation = $_POST["production_location"];

    // Handle image upload
    $uploadDir = "uploads/"; // Create an "uploads" directory in your project
    $targetFile = $uploadDir . basename($_FILES["img"]["name"]);

    if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
        // Image uploaded successfully, store the path in the database
        $imagePath = $targetFile;

        // Insert data into the database
        $sql = "INSERT INTO `live_stock`.`veggies`(`tag_id`, `plucking_date`, `name`, `manure`, `breed`, `location`, `date`)
                VALUES ('$tagId', '$pluckingDate', '$vegetableName', '$manureType', '$vegetableBreed', '$productionLocation', '$imagePath')";

        if ($conn->query($sql) === TRUE) {
            echo "Record added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading the image.";
    }

    // Close the database connection
    $conn->close();
}
?>
<p>
    <label>Tag Id</label>
    <input class="w3-input" type="text" name="tag_id" />
</p>
<div class="forms">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="w3-container w3-twothird" enctype="multipart/form-data">
    <label for="img">Select image:</label>
    <input type="file" id="img" name="img" accept="image/*">
    <p>
        <label for="birthday">Date of Plucking</label>
        <input type="date" id="birthday" name="plucking_date" />
        <input type="submit" name="submit" />
    </p>
    <p>
        <label>Name of Veggie</label>
        <select class="w3-select w3-border" name="vegetable_name">
            <option value="" disabled selected>Choose your option</option>
            <!-- Update option values and labels as needed -->
            <option value="Carrots">Carrots</option>
            <option value="Broccoli">Broccoli</option>
            <!-- Add more options as needed -->
        </select>
    </p>
    <p>
        <label>Manures</label>
        <select class="w3-select w3-border" name="manure_type">
            <option value="" disabled selected>Choose your option</option>
            <option value="Fertilizers">Fertilizers</option>
            <option value="Organic Manures">Organic Manures</option>
            <!-- Add more options as needed -->
        </select>
    </p>
    <p>
        <label>Breed (according to veggies)</label>
        <input class="w3-input" type="text" name="vegetable_breed" />
    </p>
    <p>
        <label>Location of Production:</label>
        <input class="w3-input" type="text" name="production_location" />
    </p>
    <p><button class="w3-btn w3-teal">Register</button></p>
    <input type="reset">
</form>
</div>
</body>
</html>
