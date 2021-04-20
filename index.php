<html>
<head></head>
<body>
<h1>Job Registration Form</h1>
<form method='POST'>
<label>ID</label><input type="text" name="">
</br>
<label>Name</label><input type="text" name="name">
</br>
<label>Degree</label><input type="text" name="degree">
</br>
<label>Mobile</label><input type="text" name="mobile">
</br>
<label>Email ID</label><input type="text" name="email">
</br>
<label>Refer</label><input type="text" name="refer">
</br>
<label>Job Post</label><input type="text" name="jobpost">
</br>
<input type="submit" name="submit" value="Register">
</br>
<input  name="checkform" value ="CheckForm">
</form>
</body>
</html>

<?php
include 'connection.php';


  if (isset($_POST['submit'])){
$name = $_POST['name'];
$degree = $_POST['degree'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$refer = $_POST['refer'];
$jobpost = $_POST['jobpost'];

$insertquery = "insert into jobregistration(`NAME`, `DEGREE`, `MOBILE`, `EMAIL ID`, `REFER`, `JOB POST`) 
    values ('$name','$degree','$mobile','$email','$refer','$jobpost') ";

    $res= mysqli_query($con,$insertquery);


    if($res){
        ?> 
       <script>
        alert('data inserted');
        </script>
        <?php
    }else{
        ?>
        <script>
        alert('data not inserted');
        </script>
        <?php
    }



}
?>