<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<body>
<div class="container">
<?php
if($_SESSION['auth']==true){
    echo "Authorization went successfully";
}
else{
    echo "Wrong input, try again<br> "; 
}
?>
</div>
</body>
</html>