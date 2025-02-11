<?php
  require_once("connect.php");
  $id = $_GET['id'];
  if(isset($_POST['submit'])){
    $Title = mysqli_real_escape_string($con2, $_POST['title']);
    $duration = mysqli_real_escape_string($con2, $_POST['duration']);
    $badge = mysqli_real_escape_string($con2, $_POST['badge']);
    $file_name = $_FILES['image']['name'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $upload_path = "../image1/" . $file_name;
   
  
    $insert = "UPDATE `cours` SET `image`='$file_name',`title`='$Title',`duration`='$duration',`badge`='$badge' WHERE `id`= '$id'";
    $resultat = mysqli_query($con2, $insert);
    if($resultat){
        move_uploaded_file($file_tmp, $upload_path);
        header("Location:Cours.php");
        exit();
      } else {
        echo "Error: " . mysqli_error($con2);
      }
  
  }
  $select = "SELECT * FROM `cours` WHERE `id` = '$id'";
$data = mysqli_query($con2, $select);
$cours = mysqli_fetch_array($data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<section>
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($cours['id']); ?>">
        <label for="">الصورة</label><br>
        <input type="file" name="image"  value="<?php echo htmlspecialchars($cours['image']); ?>"><br>
        <label for="">العنوان</label><br>
        <input type="text" name="title" placeholder="العنوان" value="<?php echo htmlspecialchars($cours['title']); ?>"><br>
        <label for="">المدة</label><br>
        <input type="text" name="duration" placeholder="المدة" value="<?php echo htmlspecialchars($cours['duration']); ?>"> <br>
        <label for="">نوع الدورة</label><br>
        <input type="text" name="badge" placeholder="نوع الدورة" value="<?php echo htmlspecialchars($cours['badge']); ?>"><br>
        <input type="submit" name="submit" value="إضافة">
    </form>
</section>
</body>
</html>