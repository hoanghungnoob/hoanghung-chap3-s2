<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $province = $_POST["province"];
            // Lấy giá trị của checkbox skills
            $skills = isset($_POST["skills"]) ? $_POST["skills"] : array(); 
            // Lấy giá trị của radio button gender
            $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
        }
        
    ?>
        <tr>
            <td><?php echo (isset($_POST['name']))? $_POST['name'] : "" ; //name; ?></td>
            <td><?php echo (isset($_POST['email']))? $_POST['email'] : "" ; //email; ?></td>
            <td><?php echo (isset($_POST['password']))? $_POST['password'] : "" ; //password; ?></td>
            <td><?php echo (isset($_POST['number']))? $_POST['number'] : "" ; //number; ?></td>
            <td><?php echo (isset($_POST['message']))? $_POST['message'] : "" ; //message; ?></td>
            <td><?php echo (isset($_POST['province']))? $_POST['province'] : "" ; //province; ?></td>
            <td><?php echo $gender; // gender ?></td>
            <td>
                <?php 
                   // subjects
                   foreach ($skills as $key => $value) {
                        echo $value ." | ";
                   }
                ?>
            </td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>