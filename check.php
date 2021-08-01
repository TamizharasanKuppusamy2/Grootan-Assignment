<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['user name'];
$firstname = $_POST['first name'];
$lastname = $_POST['last name'];
$phonenumber = $_POST['phone number'];
$emailid = $_POST['email id'];
$dob = $_POST['dob'];
$city = $_POST['city'];
$state = $_POST['state'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$password = $_POST['password'];
			
$sql="select * from signup where (user name = '$username' or password = '$password');";

      $res=mysqli_query($conn,$sql);

      if (mysqli_num_rows($res) > 0) {

        $row = mysqli_fetch_assoc($res);
        if ($username==$row['username'])
        {
            echo '<script>alert("Username already exists");
window.location.href="signup.html";

</script>';
        }
        elseif($emailid==$row['emailid'])
        {
            echo '<script>alert("Email id already exists");
window.location.href="signup.html";

</script>';
        }

       } else{
            $uppercase = preg_match('@[A-Z]@', $pass);
            $lowercase = preg_match('@[a-z]@', $pass);
            $number    = preg_match('@[0-9]@', $pass);
            $specialChars = preg_match('@[^\w]@', $pass);

  if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8) {
	  echo '<script>alert("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.");
window.location.href="signup.html";

</script>';
    
}
else{
		
	$password=md5($password);
		
            $sql = "INSERT INTO login(username, password) VALUES ('$username', '$password')";

            if ($conn->query($sql) === TRUE) {
				echo '<script>alert("Registered Successfully");
window.location.href="login.html";
</script>';
               
            } 
			else {
                echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
	   }
$conn->close();
?> 	   