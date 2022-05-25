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
         <?php 
            include 'nav.php';
             ?>
         <center>
            <h1 class="titles">كن طالباً !</h1>
         </center>
         <br>
         <form method="post" action="add_membership.php" id="addform">
            <div class="wrapper">
               <?php 
                  $sql = "SELECT * FROM course WHERE active = '1'";
                  $result = $con->query($sql);
                  while($row = $result->fetch()){
                  ?>
               <div>
                  <img src="img/<?php echo $row['image']; ?>" style='margin-left:10%' width="80%" height='180' >
                  <h2><?php echo $row['title']; ?></h2>
                  اختر التخصص : <input checked type="radio" value="<?php echo $row['title']; ?>" name="membership"> <br>	
               </div>
               <?php 
                  }
                  ?>
            </div>
            <div class="card1">
               <br>
               <table width="100%">
                  <tr>
                     <td>الأسم</td>
                     <td> <input  type="text" name="name" id="name"></td>
                  </tr>
                  <tr>
                     <td>العنوان 1</td>
                     <td> <input  type="text" name="address1" id="address1"></td>
                  </tr>
                  <tr>
                     <td>العنوان 2</td>
                     <td> <input  type="text" name="address2" id="address2"></td>
                  </tr>
                  <tr>
                     <td>رقم الاتصال</td>
                     <td> <input  type="text" name="contact" id="contact"></td>
                  </tr>
                  <tr>
                     <td></td>
                     <td >
                        <button id="submit" type="submit" >تسجيل</button>
                     </td>
                  </tr>
               </table>
               <br>
               <br>
               <br>
            </div>
         </form>
         <br>
         </div>
      </main>
      <!----------------  FOOTER  ------------------->
      <?php 
         include 'footer.php'; ?>
         <script src="js/index.js"></script>
   </body>
</html>