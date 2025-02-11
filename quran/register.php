<?php
require_once("connect.php"); 

if (isset($_POST["submit"])) {
    $Name = mysqli_real_escape_string($con, $_POST["name"]);
    $Age = mysqli_real_escape_string($con, $_POST["age"]);
    $countryCode = mysqli_real_escape_string($con, $_POST["country-code"]);
    $phoneNumber = trim(mysqli_real_escape_string($con, $_POST["phone"]));
    $phone = $countryCode . $phoneNumber;
    $pays = mysqli_real_escape_string($con, $_POST["pays"]);
    $carriere = mysqli_real_escape_string($con, $_POST["carriere"]);
    $version = mysqli_real_escape_string($con, $_POST["version"]);
    $conclution = mysqli_real_escape_string($con, $_POST["conclution"]);
    $niveau = mysqli_real_escape_string($con, $_POST["niveau"]);
    $number = mysqli_real_escape_string($con, $_POST["number"]);

    // Check if all fields are filled
    if (empty($Name) || empty($Age) || empty($countryCode) || empty($phone) || empty($pays) || empty($carriere) || empty($version) || empty($conclution) || empty($niveau) || empty($number)) {
        echo "<script>alert('All fields are required.');</script>";
    } else {
        // Check if the phone number already exists
        $check_query = "SELECT * FROM `information` WHERE `phone` = '$phone'";
        $resultat = mysqli_query($con, $check_query);

        if (mysqli_num_rows($resultat) > 0) {
            echo "<script>alert('An account with this phone number already exists.');</script>";
        } else {
            // Insert new record
            $insert = "INSERT INTO `information` (`name`, `age`,  `phone`, `carriere`, `version`, `conclution`, `niveau`, `number`, `pays`) 
                       VALUES ('$Name', '$Age', '$phone', '$carriere', '$version', '$conclution', '$niveau', '$number', '$pays')";

            if (mysqli_query($con, $insert)) {
                header('Location: thanks.php');
                exit();
            } else {
                echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
            }
        }
    }
}
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
    <script src="https://www.gstatic.com/firebasejs/11.2.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/11.2.0/firebase-analytics.js"></script>
    <script src="firebase-config.js"></script>
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

        <section class="video has-bg-image" aria-label="video"
       >
        <div class="container contAbout">

          <div class="video-card">
            <h1 class="h1 section-title"><span class="span">ابدءي التسجيل الان</span></h1>
      
                 <form id="registrationForm" action="" method="Post" style="text-align: center; background-color: hsl(350, 47%, 85%); margin: 20px 0 30px 0; padding: 10px;">
                  <label for="name">الاسم الكامل</label>
                  <input type="text" id="name" name="name" placeholder="الاسم الكامل">
                 
                  <label for="age">العمر</label>
                  <input type="text" id="age" name="age" placeholder="العمر">
                  <label for="phone">رقم الهاتف</label><br>
                  <select id="country-code" name="country-code">
                    <option value="+212" data-flag="MA"> المغرب(+212)</option>
                    <option value="+213" data-flag="DZ">الجزائر (+213)</option>
                    <option value="+20" data-flag="EG">مصر (+20)</option>
                    <option value="+216" data-flag="TN">تونس (+216)</option>
                    <option value="+216" data-flag="TN">موريتانيا (+222)</option>
                    <option value="+33" data-flag="FR">فرنسا (+33)</option>
                    <option value="+34" data-flag="ES">اسبانيا (+34)</option>
                   
            </select><br>
            <input type="text" id="phone" name="phone" placeholder="رقم الهاتف">

            <label for="pays">البلد</label><br>
            <select  name="pays" id="pays">
                <option value="">--</option>
                <option value="المغرب">المغرب</option>
                <option value="الجزائر">الجزائر</option>
                <option value="مصر">مصر</option>
                <option value="تونس">تونس</option>
                <option value="موريتانيا">موريتانيا</option>
                <option value="فرنسا">فرنسا</option>
                <option value="اسبانيا">اسبانيا</option>
            </select><br>
            <label for="carriere">الوظيفة</label><br>
            <select name="carriere" id="carriere">
                <option value="">--</option>
                <option value="ماكثة">ماكثة</option>
                <option value="عاملة">عاملة</option>
                <option value="طالبة">طالبة</option>
            </select><br>
            <label for="version">الرواية التي تقرئين بها</label><br>
            <select name="version" id="version">
                <option value="ورش">ورش</option>
            </select><br>
              <label for="conclution">الختمة التي تريدينها</label><br>
            <select name="conclution" id="conclution">
                <option value="">--</option>
                <option value="سنة و نصف">سنة و نصف</option>
                <option value="ثلاث سنوات">ثلاث سنوات</option>
            </select><br>
            <label for="niveau">مستواكي في التلاوة و قواعد التجويد</label><br>
            <select name="niveau" id="niveau">
                <option value="">--</option>
                <option value="ضعيفة">ضعيفة</option>
                <option value="مبتدأة">مبتدأة</option>
                <option value="متوسطة">متوسطة</option>
                <option value="جيدة">جيدة</option>
            </select><br>
            <label for="number">عدد محفوظك إذا كان لديك حفظ سابق</label>
            <input type="text" id="number" name="number" placeholder="عدد المحفوظ">

                 
                    <input name="submit" type="submit" class="span btn has-before" value="إرسال" style="background-color: hsl(350, 47%, 59%);">
                 </form>
        


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