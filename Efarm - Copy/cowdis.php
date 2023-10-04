<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Animal Stock Detail</h2>
  <p>You can use any of the contextual classes to only add a color to the table header:</p>
  <button class="btn btn-success my-3 shadow-lg" style="align-content: end;"><a href="cow.php" class="text-light">Add Animal</a></button>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Updated Successfully !</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <table class="table">
    <thead class="table-success">
      <tr>
        <th scope="col">S no.</th>
        <th scope="col">Tag Id</th>
        <th scope="col">Parent Id</th>
        <th scope="col">Breed</th>
        <th scope="col">Gender</th>
        <th scope="col">Color</th>
        <th scope="col">Weight</th>
        <th scope="col">Age</th>
        <th scope="col">Vaccination</th>
        <th scope="col">Diseases</th>
        <th scope="col">Height</th>
        <th scope="col">Feed</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM `live_stock`.`cow`";
      $result = mysqli_query($conn,$sql);
      if($result){
        while($row = mysqli_fetch_assoc($result)){
            $sr = $row['Sr'];
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
            echo'<tr>
            <th scope="row">'.$sr.'</th>
            <th scope="row">'.$id.'</th>
            <td>'.$parentId.'</td>
            <td>'.$breed.'</td>
            <td>'.$sex.'</td>
            <td>'.$color.'</td>
            <td>'.$weight.'</td>
            <td>'.$age.'</td>
            <td>'.$vaccination.'</td>
            <td>'.$diseases.'</td>
            <td>'.$height.'</td>
            <td>'.$food.'</td>
            <td>
              <button class="btn btn-success my-3 shadow-lg" style="align-content: end;"><a href="update.php?updateid='.$sr.'" class="text-light">UPDATE</a></button>
              <button class="btn btn-danger my-3 shadow-lg" style="align-content: end;"><a href="delete.php?deleteid='.$sr.'" class="text-light">DELETE</a></button>
            </td>
          </tr>';
        }
      }
      ?>
      
    </tbody>
  </table>
</div>

</body>
</html>
