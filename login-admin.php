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
         <center>
            <h1 class="titles">منطقة الإدارة</h1>
         </center>
         <br>
         <?php 
            if(!isset($_SESSION['college_login'])){ ?>
         <form method="post" action="">
            <div class="card1" style="padding: 20px;">
               <h3>تسجيل الدخول</h3>
               <?php 
                  if(isset($_POST['login'])){
                  	$username = $_POST['username'];
                  	$password = $_POST['password'];
                  	
                  	$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
                  	$result = $con->query($sql);
                  	if($result->rowCount() > 0){
                  
                  		$_SESSION['college_login'] = 'yes';
                  		header('location:login-admin.php');
                  
                  
                  	}else{
                  		echo "<span class='alert-danger'>معلومات الدخول غير صحيحة!</span>";
                  	}
                  
                  }
                  
                   ?>
               <table id="panel-admin" width="45%">
                  <tr>
                     <td>أسم المستخدم</td>
                     <td> <input required type="text" name="username"></td>
                  </tr>
                  <tr>
                     <td>كلمة المرور</td>
                     <td>  <input required type="password" name="password"></td>
                  </tr>
                  <tr>
                     <td colspan="2">
                        <button id="submit" name="login" type="submit">الدخول كا إدارة</button> 
                     </td>
                  </tr>
               </table>
            </div>
         </form>
         <?php }else{ 
            header('Location:admin/index.php');
            } ?>
         <center>
         </center>
         <br>
         </div>
      </main>
      <!----------------  FOOTER  ------------------->
      <?php 
         include 'footer.php'; ?>
   </body>
</html>