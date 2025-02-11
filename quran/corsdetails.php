<?php
require_once 'connect.php';

// الحصول على معرف الدورة
$id = $_GET['id'] ?? 0;

// جلب بيانات الدورة
$select_course = "SELECT * FROM `cours` WHERE id = $id";
$data_course = mysqli_query($con2, $select_course);
$cours = mysqli_fetch_assoc($data_course);

// جلب جميع الفيديوهات المرتبطة بهذه الدورة
$select_videos = "SELECT video_url FROM videos WHERE cours_id = $id";
$data_videos = mysqli_query($con2, $select_videos);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<link rel="icon" href="./assets/images/favicon-32x32.png" type="image/x-icon">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($cours['title']); ?></title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <style>
 
.list1{
 
align-items: center !important;
  display: grid !important;
  gap: 10px !important;
  justify-content: center !important;
 } 
 
 iframe{
  margin: 0 auto !important;
 width: 480px !important;
 height: 300px !important;
 }

 @media (min-width: 575px){
  .list1{
     grid-template-columns:  1fr  1fr !important; 
  }

 }
 @media (min-width: 768px){
  .list1{
     grid-template-columns:  1fr  1fr !important; 
  }
 }
 @media (max-width: 768px){
  iframe{
 
 /* width: 100% !important; */

 }
 
 }
 @media (max-width: 1024px){
  iframe{
 width: 350px !important;
 }
  .uliframe{
 margin: 0 20% !important;
 } 
 }
 @media (max-width: 912px){
  iframe{
 /* width: 550px !important; */
 }

 }
 @media (max-width: 344px){
  iframe{
 width: 280px !important;
 }

 }
 @media (max-width: 412px){
  iframe{
 width: 280px !important;
 }

 }
 @media (min-width: 992px) {
  .list1{
    grid-template-columns: repeat(4, 1fr) !important;
  }

 }

 

  </style>
</head>

<body>

  <?php require_once("Header.php"); ?>

  <main>
    <article>
    <section class="section course" id="courses" aria-label="course">
    <div class="container contAbout">
          <h2 class="h2 section-title">دروس الدورة</h2>
          <ul class="uliframe" style=" " >
          <li class="list1 liList" style=""> 
          <!-- تشغيل جميع الفيديوهات من قاعدة البيانات -->
          <?php if (mysqli_num_rows($data_videos) > 0): ?>
            <?php while ($video = mysqli_fetch_assoc($data_videos)): ?>
              <iframe width="550px"  src="https://www.youtube.com/embed/<?php echo htmlspecialchars($video['video_url']); ?>" frameborder="0" allowfullscreen></iframe>
              <br>
            <?php endwhile; ?>
          <?php else: ?>
            <p>لم يتم إضافة فيديوهات لهذه الدورة.</p>
          <?php endif; ?>
          </li> 
          </ul>
                 </div>
      </section>
    </article>
  </main>

  <?php require_once('footer.php'); ?>

</body>
</html>
