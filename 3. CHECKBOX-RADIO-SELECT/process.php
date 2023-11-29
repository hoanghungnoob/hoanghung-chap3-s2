<?php require "templates/header.php";// HEADER ?>
<?php
// YOUR CODE HERE
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $province = $_POST["province"];
        // Lấy giá trị của checkbox skills
        $skills = isset($_POST["skills"]) ? $_POST["skills"] : array(); 
        // Lấy giá trị của radio button gender
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
    }


?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php echo $province // province ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <!-- YOUR CODE HERE [gender] -->
            <?php
               if ($gender == 'Male') {
                echo '<img src="images/male.png" alt="Male Image" style="width: 10%; height: auto;">';
            } else {
                echo '<img src="images/female.png" alt="Female Image" style="width: 10%; height: auto;">';
            }            
            ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php
                // YOUR CODE HERE [subject]
                foreach ($skills as $key => $value) {
                    echo $value  ." ";
                }
            ?>
        </div>
    </div>

<?php require "templates/footer.php"; // FOOTER ?>