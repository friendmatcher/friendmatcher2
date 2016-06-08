<?php
// define variables and set to empty values
$firstname = $lastname = $email = $username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

 if (empty($_POST["firstname"])) {
  $firstnameerr = "First Name is required";
   } else {
           $firstname = test_input($_POST["firstname"]);
   }

 if (empty($_POST["lastname"])) {
  $lastnameerr = "Last Name is required";
   } else {
           $lastname = test_input($_POST["age"]);
   }
 if (empty($_POST["email"])) {
  $emailerr = "Email is required";
   } else {
           $email = test_input($_POST["email"]);
   }
 if (empty($_POST["username"])) {
  $usernameerr = "Username is required";
   } else {
           $username = test_input($_POST["username"]);
   }
 if (empty($_POST["password"])) {
  $passworderr = "Password is required";
   } else {
           $password = test_input($_POST["password"]);
   }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data
}
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  First Name <input type="text" name="firstname">
  <br><br>
  Last Name <input type="text" name="lastname">
  <br><br>
  Email <input type="text" name="email">
  <br><br>
  Username <input type="text" name="username">
  <br><br>
  Password <input type="text" name="password">
  <br><br>
  <input type="submit" name="make a profile" value="Submit">  
</form>

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;


?>