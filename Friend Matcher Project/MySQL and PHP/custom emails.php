<?php
  //add selected names to a second list (aside from the one from matches.php,) and send each composed message to the proper recipient (using a for-loop)
  //use a second for-loop to send an automated message to each remaining name

$emaillist = array();
foreach ($matches as $name) {
	array_push ($emaillist, “$name”);
}
echo ($emaillist);

?>
