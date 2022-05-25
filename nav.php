<?php 
   $sql1 = "SELECT * FROM settings ";
   $result1 = $con->query($sql1);
   $row1 = $result1->fetch();
   
   ?>
<nav>
   <a class="active" href="#"><img src="img/<?php echo $row1['logo']; ?>" height="45px"> </a>
   <ul>
      <li><a  href="index.php">الرئيسية </a></li>
      <li><a  href="register.php">التسجيل </a></li>
      <li><a  href="login-admin.php">لوحة التحكم </a></li>
      <li><a  href="contact.php">أتصل بنا</a></li>
      <?php 
         if(isset($_SESSION['college_login'])){
         	?>
      <li><a  href="logout.php">تسجيل خورج </a></li>
      <?php
         }
         
          ?>
   </ul>
</nav>