<?php

require  'connectdb.php';//นำเข้ามา

$login_username  = $_POST['username'];
$login_password = $_POST['password'];
$login_email  = $_POST['email'];
 if($login_username == "admin"){
     echo'ห้ามใช้ username เป็น admin';
     exit;
 }

//เข้ารหัส รหัสผ่าน จะมี algorithm หลายตัว เช่น hash_hmac
$salt ='kqjjgjig5356ge44wegoiwiwioowpq';
$hash_login_password = hash_hmac('sha256',$login_password, $salt);
//sha256 คือ Algorithm ชนิดหนึ่งที่ใช้ในการเข้ารหัส
//$hash_login_password ที่ผ่านการเข้ารหัส

$query = "INSERT INTO tb_login (login_username,login_password,login_email)
         VALUES ('$login_username','$hash_login_password','$login_email')";

$result = mysqli_query($dbcon,$query);//เป็นตัว RUN เก็บหรือ ทำอะไรกับDBCON
if($result){
    header("Location:login.php");
    }else {
        echo "เกิดข้อผิดพลาด". mysqli_error($dbcon);
    }
   
    
    mysqli_close($dbcon);//กันไม่ให้ความจำเต็ม