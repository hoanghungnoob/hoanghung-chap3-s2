;<?php include_once './templates/header.php'; // HEADER ?>
<ul class="list-group">
<?php
   // YOUR CODE HERE
   echo '<h1>The output of form</h1>';

?>
    <li class="list-group-item"><?php echo (isset($_POST['name']))? $_POST['name']: "no name input" ; // name; ?></li>
    <li class="list-group-item"><?php echo (isset($_POST['email']))? $_POST['email']: "no email input" ;// email; ?></li>
    <li class="list-group-item"><?php echo (isset($_POST['password']))? $_POST['password']: "no password input"; // password; ?></li>
    <li class="list-group-item"><?php echo (isset($_POST['phone']))? $_POST['phone']: "no phone input" ;// number; ?></li>
    <li class="list-group-item"><?php echo (isset($_POST['message']))? $_POST['message']: "no message input" ;// message; ?></li>

</ul>
<?php include './templates/footer.php' // FOOTER ?>