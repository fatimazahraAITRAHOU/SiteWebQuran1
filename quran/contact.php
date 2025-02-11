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
        <div class="container contAbout">

          <div class="video-card">
            <h1 class="h1 section-title"><span class="span">تواصلي معنا</span></h1>
      
                 <form id="telegramForm" style="text-align: center; background-color: hsl(350, 47%, 85%); margin: 20px 0 30px 0; padding: 10px;">
                  <label for="name">الاسم الكامل</label>
                  <input type="text" id="name" name="name" placeholder="الاسم الكامل">
                  <label for="phone">رقم الهاتف</label>
                  <input type="text" id="phone" name="name" placeholder="رقم الهاتف">
                  <label for="">الرسالة</label><br>
                  <textarea name="message" id="message" rows="15" placeholder="أدخلي رسالتك هنا"></textarea>
                    <input name="submit" type="submit" class="span btn has-before" value="إرسال" onclick="sendToTelegram()" style="background-color: hsl(350, 47%, 59%);">
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
  <script>
function sendToTelegram() {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var message = document.getElementById("message").value;

    var telegramToken = "7509949805:AAFxZ5uAMnWGhQM0DNzrB5LNV5SffLxh6M0"; // ضع هنا توكن البوت
    var chatId = "6995524284"; // ضع هنا Chat ID الخاص بك

    var text = "📩 *رسالة جديدة من موقعك*\n\n" +
        "👤 *الاسم:* " + name + "\n" +
        "📞 *رقم الهاتف:* " + phone + "\n" +
        "💬 *الرسالة:* " + message;

        var url = "https://api.telegram.org/bot" + telegramToken + "/sendMessage?chat_id=" + chatId +
        "&text=" + encodeURIComponent(text) + "&parse_mode=Markdown";

    fetch(url).then(response => {
        if (response.ok) {
            alert("✅ تم إرسال الرسالة بنجاح!");
        } else {
            alert("❌ حدث خطأ أثناء الإرسال.");
        }
    });
}
</script>
</body>

</html>