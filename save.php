
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amoozesh_db";

$firstname = $_POST['name_1'];
$lastname = $_POST['password'];
$mobile = $_POST['mobile_3'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
$sql = "INSERT INTO `form1`(`firstname`, `lastname`, `mobile`) VALUES ('$firstname' , '$lastname' , '$mobile')" ;
if ($conn->query($sql) === TRUE) {
   echo "اطلاعات دریافتی شما با موفقیت ثبت شد !";
} else { 
    echo "خطا - مشکلی پیش آمده است !";
}
$conn->close();
?>
</body>
</html>
