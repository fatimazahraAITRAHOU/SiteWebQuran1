<?php
require_once ('connect.php');


$limit1 = 3;
$select1 = "SELECT * FROM `cours` LIMIT $limit1";
$data1 = mysqli_query($con2, $select1);
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
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.svg')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 section-title">
              قرآننا <span class="span">نور</span> هدانا، و<span class="span">سبيل</span>رفعتنا.
            </h1>

            <p class="hero-text">
              قال رسول الله صلى الله عليه وسلم: (مَثَلُ الذي يَقْرَأُ القُرْآنَ وهو حافِظٌ له، مع السَّفَرَةِ الكِرامِ البَرَرَةِ، ومَثَلُ الذي يَقْرَأُ وهو يَتَعاهَدُهُ، وهو عليه شَدِيدٌ؛ فَلَهُ أجْرانِ).
            </p>
            <h3 class=" section-title"><span class="span">كونوا من الذين يرفعهم الله بالقرآن، وادخلوا في زمرة الذين ينجون بالقرآن. التحقوا بالمراقي العليا، واكتسوا نور القرآن في قلوبكم وبيوتكم.</span></h3>
           



          </div>

          <figure class="hero-banner">

            <div class="img-holder one" style="--width: 270; --height: 300;">
              <img src="./assets/images/hero-banner-1.jpg" width="270" height="300" alt="hero banner" class="img-cover">
            </div>

            <div class="img-holder two" style="--width: 240; --height: 370;">
              <img src="./assets/images/hero-banner-2.jpg" width="240" height="370" alt="hero banner" class="img-cover">
            </div>

            <!-- <img src="./assets/images/hero-shape-1.svg" width="380" height="190" alt="" class="shape hero-shape-1"> -->

            <img src="./assets/images/hero-shape-2.png" width="622" height="551" alt="" class="shape hero-shape-2">

          </figure>

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <p class="section-subtitle">إنجازاتنا</p>

          <h2 class="section-title">
            نُوصل  <span class="span">هدايات</span>القرآن الكريم إلى العالمين.
          </h2>

          <p  style="text-align: center; font-size: 34px; color: black;" class="section-text">
            بلغوا عني و لو بآية بإدارة المعلمة إلهام أم إسراء.
          </p>

          <ul class="grid-list">

            <li>
              <div class="category-card" style="--color: 170, 75%, 41%">

                <div class="card-icon">
                  <i class="fa-solid fa-chalkboard"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">212</a>
                </h3>

                <p class="card-text">
                  حلقة لتعليم وتحفيظ القرآن الكريم 
                </p>
              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 351, 83%, 61%">

                <div class="card-icon">
                  <i class="fa-solid fa-user-graduate"></i>
               </div>

                <h3 class="h3">
                  <a href="#" class="card-title">5600</a>
                </h3>

                <p class="card-text">
                  طالبًا من مختلف الفئات العمرية
                 </p>
              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 229, 75%, 58%">

                <div class="card-icon">
                  <i class="fa-solid fa-book-open"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">25</a>
                </h3>

                <p class="card-text">
                  خطة حفظ متميزة
                </p>
              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 42, 94%, 55%">

                <div class="card-icon">
                  <i class="fa-solid fa-person-chalkboard"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">250</a>
                </h3>

                <p class="card-text">
                  معلمة ذات كفاءة
                </p>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 370;">
              <img src="./assets/images/about-banner.jpg" width="520" height="370" loading="lazy" alt="about banner"
                class="img-cover">
            </div>

            <img src="./assets/images/about-shape-3.png" width="722" height="540" loading="lazy" alt=""
              class="shape about-shape-3">

          </figure>

          <div class="about-content">

            <p class="section-subtitle">عن المقرأة<p>

            <h2 class="h2 section-title"> أكثر من 10 سنوات في تعليم وتحفيظ  القرآن الكريم</h2>

            <p class="section-text">
              بلغوا عني ولو آية مقرأة تؤمن بأن تعلم القرآن الكريم هو أساس الإيمان والارتقاء و هي منصة تعليمية تربط المعلمات بالطالبات من مختلف أنحاء المغرب و خارجه ضمن بيئة تعليمية مستقلة ومتطورة. و ذلك لجعل تعلم القرآن الكريم متاحًا وسهلًا للجميع
            </p>

           
            <button type="submit" class="btn has-before">
              <span class="span"><a href="About.html"> إقرا المزيد</a></span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>
            <img src="./assets/images/about-shape-4.svg" width="100" height="100" loading="lazy" alt=""
              class="shape about-shape-4">

          </div>

        </div>
      </section>





      <!-- 
        - #COURSE
      -->

      <section class="section course" id="courses" aria-label="course">
        <div class="container">

          <p class="section-subtitle">دوراتنا</p>

          <h2 class="h2 section-title">اختاري دورة للبدء</h2>

          <ul class="grid-list">
          <?php foreach($data1 as $cours) {
                    ?>
            <li>
              <div class="course-card">


              <?php
                // الحصول على الصورة الرئيسية للمنتج
                $coursId = $cours['id'];
                $selectImage = "SELECT * FROM `cours` WHERE `id` = '$coursId' LIMIT 1";
                $imageData = mysqli_query($con2, $selectImage);
                $image = mysqli_fetch_assoc($imageData);
                ?>
                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="../image1/<?php echo htmlspecialchars($image['image']); ?>"
                    alt="Build Responsive Real- World Websites with HTML and CSS" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span"><?php echo $cours['duration']?></span>
                </div>

                <div class="card-content">
                  <span class="badge"><?php echo $cours['badge']?></span>
                  <h3 class="h3">
                    <a href="#" class="card-title"> <?php echo $cours['title']?></a>
                  </h3>
                  <a href="corsdetails.php?id=<?php echo $cours['id']; ?>" class="btn has-before">
                  <span class="span">تصفحي الدورة </span>
        
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>
              </div>

            </li>

            <?php 
            }
                    ?>

          </ul>

          <a href="cours.php" class="btn has-before">
            <span class="span">تصفحي المزيد من الدورات</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>





      <!-- 
        - #VIDEO
      -->

      <section class="video has-bg-image" aria-label="video"
        style="background-image: url('./assets/images/video-bg.png')">
        <div class="container">

          <div class="video-card">

            <div class="video-banner img-holder has-after" style="--width: ; --height: ;">
              <img src="./assets/images/téléchargement (19).jpg" width="500" height="550" loading="lazy" alt="video banner"
                class="img-cover">
            </div>

            <img src="./assets/images/video-shape-1.png" width="1089" height="605" loading="lazy" alt=""
              class="shape video-shape-1">

            <img src="./assets/images/video-shape-2.png" width="158" height="174" loading="lazy" alt=""
              class="shape video-shape-2">

          </div>

        </div>
      </section>





      <!-- 
        - #STATE
      -->

      <section class="section stats" aria-label="stats">
        <div class="container">

          <ul class="grid-list">

            <li>
              <div class="stats-card" style="--color: 170, 75%, 41%">
                <h3 class="card-title">أينما كُنتي</h3>

                <p class="card-text">أينما كنتي ومهما كانت ظروفك وانشغالاتك، نساعدك على تعلم كتاب الله تعالى في الوقت الذي ينُاسبك</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 351, 83%, 61%">
                <h3 class="card-title">مهما كان مستواك</h3>

                <p class="card-text">مِن المبتدئات في الحفظ، وصولًا إلى الراغبات بالختم، نوفر محضنا لجميع المقبلين على تعلم كتاب الله تعالى</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 260, 100%, 67%">
                <h3 class="card-title">لتُصبحي متقنًتا</h3>

                <p class="card-text">يُشرف على تأطير الحلقات  ثلة من الأستاذات اللواتي يجمعن بين الكفاءة العلميّة والأدب والتجربة الواسعة </p>
              </div>
            </li>

        

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog has-bg-image" id="blog" aria-label="blog"
        style="background-image: url('./assets/images/blog-bg.svg')">
        <div class="container">
             
             <div class="quran">
              <div>
                <div class="text">
               <h3 class="section-subtitle"><i class="fa-solid fa-person-running"></i> نتسابق</h3>
               <p>نخلق  جوًّا تفاعليًّا وتنافسيًّا بين الطالبات، فتجدن متعة التعلم وهن يقبلن على تعلم كتاب الله تعالى وحفظه.</p>
           </div>
           <div class="text">
               <h3 class="section-subtitle"><i class="fa-solid fa-graduation-cap"></i> نستفيد</h3>
               <p>بالإضافة إلى برنامج الحفظ وضبط التلاوة، نقدم لطالباتنا مجموعة من الدورات والمحاضرات المباشرة في علوم القرآن ومواضيعه.</p>
           </div>
           <div class="text">
               <h3 class="section-subtitle"><i class="fa-solid fa-medal"></i> نرتقي</h3>
               <p>نرتفي بالطالبات بين عدّة مستويات حتّى يصلن إلى درجة الإتقان فيكن من المهرة بالقرآن، ونشجعهن عند كل مرحلة جديدة.</p>
           </div>
           </div>
              <div class="">
                <img src="./assets/images/how to learn Quran quickly.jpeg" width="300" height="450" loading="lazy" alt="video banner">
              </div>
    
              <div>
                <div class="text">
                 <h3 class="section-subtitle"><i class="fa-solid fa-calendar-check"></i> نواظب</h3>
                 <p>نرسل لكن إشعارات تُذكركن بالحفظ والمراجعة وموعد حصتكن القادمة، كما يُرسل لكن أحاديث ونصائح تُشجعكن على المثابرة والتميّز..</p>
             </div>
             <div class="text">
                 <h3 class="section-subtitle"><i class="fa-solid fa-gift"></i> نتشجع</h3>
                 <p>ننظم  مجموعة من المسابقات بين الطالبات بشكل مستمرّ في حفظ وتجويد وأداء وتفسير القرآن الكريم، وتتوج الفائزات فيها بجوائز تحفيزيّة</p>
             </div>
             <div class="text">
                 <h3 class="section-subtitle"><i class="fa-regular fa-message"></i> نتعارف</h3>
                 <p>نساعد  كذلك على إيجاد رفقة قرآنية لطالبات القرآن الكريم، حيث يخلق مجالًا لتواصل الطالبات فيما بينهن من أجل التعاون على حفظ كتاب الله.</p>
             </div> 
             </div>
             </div>
    

          <img src="./assets/images/blog-shape.png" width="186" height="186" loading="lazy" alt=""
            class="shape blog-shape">

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