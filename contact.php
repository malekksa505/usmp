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
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <!----------------  CONTENT ------------------->
      <main >
         <header>
         <?php 
            include 'nav.php';
             ?>
             </header>

<div class="container-form">
  <form action="mail.php" method="post">
      <?php 

        if(isset($_GET['invalid'])) {
            $msg = "يرجى كتابة الحقول كاملةً";
            echo '<p style="color:red;">'.$msg.'</p>';
        }

        if(isset($_GET['done'])) {
            $msg = "<p> تم ارسال الرسالة بنجاح </p>";
            echo '<p style="color:green;">' .$msg.'</p>';
        }

      ?>
    <label for="fname">الاسم الاول</label>
    <input type="text" id="fname" name="fname" placeholder="اكتب اسمك" require><br>

    <label for="lname">البريد الإلكتروني</label>
    <input type="email" id="fmail" name="fmail" placeholder="ايميلك" require><br>

    <label for="subject">الرسالة</label>
    <textarea id="subject" name="subject" placeholder="اكتب رسالتك." style="height:200px"></textarea><br>

    <button name="send-email">ارسال</button>
  </form>
</div>


      </main>
      <!----------------  FOOTER  ------------------->
      <?php 
         include 'footer.php'; ?>
         <script src="js/index.js"></script>
   </body>
</html>