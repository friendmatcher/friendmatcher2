<?php
// define variables and set to empty values
$ageerr = $gradeerr = $numbererr = $classerr = $hobbyerr = $colorerr = $personalityerr = "";
$age = $grade = $number = $class = $hobby = $color = $personality = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["age"])) {
  $ageerr = "Age is required";
    } else {
            $age = test_input($_POST["age"]);
    }

    if (empty($_POST["grade"])) {
  $gradeerr = "Grade is required";
    } else {
  $grade = test_input($_POST["grade"]);
    }

    if (empty($_POST["number"])) {
  $numbererr = "Number is required";
    } else {
  $number = test_input($_POST["number"]);
    }

    if (empty($_POST["class"])) {
  $classerr = "Class is required";
    } else {
  $class = test_input($_POST["class"]);
    }

    if (empty($_POST["hobby"])) {
  $hobbyerr = "Hobby is required";
    } else {
  $hobby = test_input($_POST["hobby"]);
    }

    if (empty($_POST["color"])) {
  $colorerr = "Color is required";
    } else {
  $color = test_input($_POST["color"]);
    }

    if (empty($_POST["personality"])) {
  $personalityerr = "Personality type is required";
    } else {
  $personality = test_input($_POST["personality"]);
    }
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data
}
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Age <input type="text" name="age">
  <br><br>
  Grade <input type="text" name="grade">
  <br><br>
  Favorite Number <input type="text" name="number">
  <br><br>
  Favorite Class <input type="text" name="class">
  <br><br>
  Favorite Hobby <input type="text" name="hobby">
  <br><br>
  Favorite Color <input type="text" name="color">
  <br><br>
  Personality Type <input type="text" name="personality">
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