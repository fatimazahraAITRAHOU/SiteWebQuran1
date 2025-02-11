<?php
  require_once("connect.php");

  if(isset($_POST['submit'])){
    $Title = mysqli_real_escape_string($con2, $_POST['title']);
    $duration = mysqli_real_escape_string($con2, $_POST['duration']);
    $badge = mysqli_real_escape_string($con2, $_POST['badge']);
    $file_name = $_FILES['image']['name'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $upload_path = "../image1/" . $file_name;
   
  
    $insert = "INSERT INTO `cours`(`image`, `title`, `duration`, `badge`) VALUES ('$file_name', '$Title','$duration','$badge')";
    $resultat = mysqli_query($con2, $insert);
    if($resultat){
        move_uploaded_file($file_tmp, $upload_path);
        header("Location:Cours.php");
        exit();
      } else {
        echo "Error: " . mysqli_error($con2);
      }
  
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .button{
  background: #FDF0D5;
  padding: 20px;
  margin-top: 30px;
  border-radius: 10px;
}

    </style>
</head>
<body>
<?php
      require_once('Header.php') 
      ?>

<section class="video has-bg-image" aria-label="video">
<div class="container contAbout">

<div class="video-card">
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">الصورة</label><br>
        <input style="background:#E7C8A0;" type="file" name="image" ><br>
        <label for="">العنوان</label><br>
        <input style="background:#E7C8A0;"  type="text" name="title" placeholder="العنوان"><br>
        <label for="">المدة</label><br>
        <input style="background:#E7C8A0;" type="text" name="duration" placeholder="المدة"> <br>
        <label for="">نوع الدورة</label><br>
        <input style="background:#E7C8A0;" type="text" name="badge" placeholder="نوع الدورة"><br>
        <input type="submit" name="submit" value="إضافة" class="button">
    </form>
</div>
</div>
</section>
</body>
</html>