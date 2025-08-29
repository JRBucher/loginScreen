<?php
if(isset($_POST['username']) && $_POST['username'] != ""){
    $name = strip_tags($_POST['username']); // remove HTML tags for safety
    file_put_contents("users.txt", $name."\n", FILE_APPEND);
    echo "<h2>Thank you! Your info has been saved.</h2>";
} else {
    echo "<h2>No name entered.</h2>";
}
?>