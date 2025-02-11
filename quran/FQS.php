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

        <section class="video has-bg-image" aria-label="video">
            <div class="FQS">
                <h1 style="font-size: 29px;  font-weight: bold; color: hsl(170, 75%, 41%);">نُجيب على أسئلتكم</h1>
                <h5  style="font-size: 29px; text-align: center; font-weight: bold; color: hsl(170, 75%, 41%);">حول مقرأة بلغوا عني ولو آية لتعليم القرآن الكريم عن بعد</h5>

                <div id="faq-container">
                    <!-- Toggle 1 -->
                    <div class="toggle" onclick="handleToggle(0)">
                        <h2>
                            كم رسوم الدراسة في مقرأة بلغوا عني و لو آية لتعليم القرآن الكريم وعلومه؟ 
                            <span class="icon" id="icon-0">▼</span>
                        </h2>
                        <p class="answer" id="answer-0" style="display: none;">
                          عندما تقومين بملء استمارة التسجيل سيتم التواص معك و اخبارك بجميع التفاصيل الخاصة بالدراسة بما فيها الرسوم المترتبة عليك
                        </p>
                    </div>
        
                    <div class="toggle" onclick="handleToggle(1)">
                        <h2>
                            ما الخدمات التي تقدمها مقرأة بلغوا عني و لو بآية، لتعليم القرآن الكريم ؟
                            <span class="icon" id="icon-1">▼</span>
                        </h2>
                        <p class="answer" id="answer-1" style="display: none;">
                        تقدم الدورات والبرامج التفاعلية الممتعة والتي تقدم إلكترونيًّا بطريقة شيقة جميلة؛ حيث نطبق معها فكرة التعليم الحديث القائم على التعلم قبل التعليم.
                      وهي تأتي تحقيقًا لرؤية الأكاديمية في التميز في تعليم القرآن؛ والإبداع في غرس قيمه؛ وتشمل: العقيدة، والتدبر، والسيرة النبوية، وأخلاق القرآن، ويتم إعدادها من طرف صاحبة المقرأة ويمكن الاطلاع عليها عبر زيارة صفحة الدورات والبرامج بالموقع.                        </p>
                    </div>
        
                    <div class="toggle" onclick="handleToggle(2)">
                        <h2>
                            ما طريقة التسجيل في مقرأة بلغوا عني و لو بآية، لتعليم القرآن الكريم وعلومه؟                        
                            <span class="icon" id="icon-2">▼</span>
                        </h2>
                        <p class="answer" id="answer-2" style="display: none;">
                          يتم ملء استمارة التسجيل بالمعلومات الخاصة بالطالبة الجديدة بعدها يتم التواصل معها من طرف المشرفة لاستكمال ما تبقى من عملية التسجيل
                        </p>
                    </div>
        
                    <div class="toggle" onclick="handleToggle(3)">
                        <h2>
                            كيف أتواصل مع مقرأة بلغوا عني و لو بآية، لتعليم القرآن الكريم وعلومه؟                       
                             <span class="icon" id="icon-3">▼</span>
                        </h2>
                        <p class="answer" id="answer-3" style="display: none;">
                          يمكنك التواصل معنا من الموقع عبر صفحة اتصل بنا 
                        </p>
                    </div>
                </div>
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