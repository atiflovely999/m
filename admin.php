<center>
    <a href="index.php">الصفحه الرئيسيه</a>
    <h1>شاشه الدخول</h1>
<img src="7.jpg"  width=300 beight=150>
</center>
<br>
<br>

<center>
<form method="post">
    username : <input type="text" name="username" required />
    <br>
   password : <input type="password" name="password" required />
<br>
<button name="login" type="submit">login</button>

</form>


</center>



<?php
$ussename="olaa";
$password="123456";

if(isset($_POST['login'])){

    $getUserName=$_POST['username'];
    $getpassword=$_POST['password'];

    if($ussename=== $getUserName && $password === $password){
session_start();
$_SESSION['USER'] = $getUserName;
$_SESSION['PASSWORD'] = $getpassword;
$_SESSION['LOGIN'] =true;

  header("location: report.php");
    }else{
        echo"<center>";
        echo"خطأ في اسم المستخدم او كلمه المرور";
    }
}













?>

</body>
</html>