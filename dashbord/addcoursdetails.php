<?php
require_once 'connect.php';

// جلب جميع الدورات
$select_courses = "SELECT * FROM `cours`";
$data_courses = mysqli_query($con2, $select_courses);

// التحقق مما إذا تم إرسال النموذج
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cours_id = $_POST['cours_id'];
    $video_url = $_POST['video_url'];
    
    // التحقق من وجود الوصف
    $description = isset($_POST['description']) ? $_POST['description'] : '';  // التأكد من وجود الوصف

    // إدخال الفيديو في قاعدة البيانات
    $insert_video = "INSERT INTO `videos` (cours_id, video_url, description) VALUES ('$cours_id', '$video_url', '$description')";
    if (mysqli_query($con2, $insert_video)) {
        $message = "تم إضافة الفيديو بنجاح.";
    } else {
        $message = "حدث خطأ أثناء إضافة الفيديو.";
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة فيديو لدورة</title>
    <link rel="stylesheet" href="style.css">
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
    <h2>إضافة فيديو جديد لدورة</h2>

    <?php if (isset($message)) { echo "<p>$message</p>"; } ?>

    <!-- نموذج إضافة الفيديو -->
    <form method="POST" action="">
        <label for="cours_id">اختار الدورة:</label></br>
        <select style="margin-right:115px; padding:15px;" name="cours_id" id="cours_id" required>
            <option value="">-- اختر دورة --</option>
            <?php while ($course = mysqli_fetch_assoc($data_courses)): ?>
                <option value="<?php echo $course['id']; ?>"><?php echo $course['title']; ?></option>
            <?php endwhile; ?>
        </select>
        <br>

        <label for="video_url">رابط الفيديو :</label></br>
        <input type="text" style=" border: 1px solid black; " name="video_url" id="video_url" required>
        <br>

        
        <br>

        <button type="submit" class="button">إضافة الفيديو</button>
    </form>
</div>
</div>
            </section>
</body>
</html>
