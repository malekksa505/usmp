<?php 
   include 'connection.php';
   session_start();
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Home</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <style type="text/css">
         .mySlides {display: none;}
         img {vertical-align: middle;}
      </style>
   </head>
   <body>
      <!----------------  CONTENT ------------------->
      <header>
         <?php 
            include 'nav.php';
             ?>
             </header>
         <div id="banner">
            <div class="slideshow-container">
               <div class="mySlides fade">
                  <img src="img/slider-2-2.jpg" style="width:100%">
                  <div class="text">طلاب عالميين</div>
                  <div class="text2">طور المهارات اللازمة لرعاية العقول الشابة وتنمية ثقتك في الفصل الدراسي من خلال الخبرة العملية المدعومة.</div>
               </div>
               <div class="mySlides fade">
                  <img src="img/slider-2-1.jpg" style="width:100%">
                  <div class="text">ادرس عن بعد</div>
                  <div class="text2">
                     الدراسة الإلكترونية تأهلك إلى سوق العمل، قم بالتسجيل وأحصل إلى مقعد
                  </div>
               </div>
               <div class="mySlides fade">
                  <img src="img/slider-2-3.jpg" style="width:100%">
                  <div class="text">قم بالبحث عن تخصصك</div>
                  <div class="text2">قم بتأمين مستقبلك من خلال الحصول على شهادة على شكل صناعة في الجامعة العامة رقم 1 في أستراليا من أجل الخبرة التعليمية
                  </div>
               </div>
            </div>
            <br>
            
            <div style="text-align:center">
               <span class="dot"></span> 
               <span class="dot"></span> 
               <span class="dot"></span> 
            </div>
         </div>
         <br>
         <img src="img/testimonials-2.png" align="right" width="200" id='anim1'>
         <br>
         <br>
         <p style="padding: 0 30px 0px 30px;font-size: 22px;color: #515151; width: 80%;line-height: 25px;">
            <b>
               أفضل مجتمع اكاديمي لتقديم المعرفة والعلم والإنجازات. <br>
         <p style="" id="loadtext"></b>
         </p>
         </div>
      </main>
      <!----------------  FOOTER  ------------------->
      <?php 
         include 'footer.php';
         ?>
      <script src="js/index.js"></script>
   </body>
</html>