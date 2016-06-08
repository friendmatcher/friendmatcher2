  //for each name in list (from matches.php), send an automated message
  //(that’s it for this page!)  
<?php

$custom = <input type="submit personalized message to selected people">;
$customs = array();
switch ($custom) {
    case $selected person:
        array_push ($customs, “$selected person”);
        break;
    default:
        echo “”;
}

//send custom email to all names entered in the box
foreach ($customs as $name) {
//take input from user’s writing in the custom email text box and set //it equal to $msg
	$msg = wordwrap($msg, 70);
	mail($email, “Friend Request”, $msg);
	
}

//create a new list called others
//using a for loop, add all of the names that are NOT selected

$other = <input type="submit personalized message to selected people">;
$others = array();
switch ($other) {
    case $selected person:
        array_push ($others, “$selected person”);
        break;
    default:
        echo “”;
}

//send automated email to all names NOT entered in the box
foreach ($others as $name) {
	// echo "$name, you have been sent a friend request!";

	// the message
$msg = "Hello" + $name + “, I would like to be your friend on Friend Matcher. Thank you!”;
	
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
	
// send email
mail($email,"Friend Request",$msg);
}
?>