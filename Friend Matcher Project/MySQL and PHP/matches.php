<?php
  //add each clicked name to a list (this is the only part that is used for matches.php; the rest is used for the email pages)
       //this is connected to the button at the bottom of the page
$match = <input type="submit friend requests">;
$matches = array();
switch ($match) {
    case $selected person:
        array_push ($matches, “$selected person”);
        break;
    default:
        echo "You have not selected any matches to email.";
}

  //that list will be saved in both the send emails (automatic) and custom emails pages DONE
  //for send emails page, iterate through the list and send each person an automatic email.
  //for custom emails page, allow user to choose which people to send emails to (from only 1 to all chosen names); let user write all selected custom emails
  //when the submit button is pressed, the unchosen names from the custom emails page get sent the automated email

  

?>