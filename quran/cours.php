<?php
require_once 'connect.php';
$select = "SELECT * FROM `cours` ";
$data = mysqli_query($con2, $select);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>بلغوا عني ولو آية</title>
  <meta name="title" content="EduWeb - The Best Program to Enroll for Exchange">
  <meta name="description" content="This is an education html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="icon" href="./assets/images/favicon-32x32.png" type="image/x-icon">


  <!-- 
  
    - custom css link
  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-bg.svg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-1.svg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-2.png">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <?php require_once ("Header.php")?>






  <main>
    <article>

       <!-- 
        - #COURSE
      -->

      <section class="section course" id="courses" aria-label="course">
        <div class="container contAbout">


          <h2 class="h2 section-title">اختاري دورة للبدء</h2>
          <ul>
            <li class="grid-list"> 
            <?php foreach($data as $cours) { ?>
  <form action="" method="post">
    <div class="course-card" onclick="window.location.href ='product_shop.php?id=<?php echo $cours['id']; ?>';">
      <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
        <img src="../image1/<?php echo htmlspecialchars($cours['image']); ?>" alt="Course Image" class="img-cover">
      </figure>

      <div class="abs-badge">
        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        <span class="span"><?php echo $cours['duration']?></span>
      </div>

      <div class="card-content">
        <span class="badge"><?php echo $cours['badge']?></span>
        <h3 class="h3">
          <a href="#" class="card-title"><?php echo $cours['title']?></a>
        </h3>
        <a href="corsdetails.php?id=<?php echo $cours['id']; ?>" class="btn has-before">
    <span class="span">تصفحي الدورة</span>
    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
</a>
      </div>
    </div>
  </form>
<?php } ?>

          
           </li>
          </ul>


        </div>
      </section>


    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <?php
require_once('footer.php');
?>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>