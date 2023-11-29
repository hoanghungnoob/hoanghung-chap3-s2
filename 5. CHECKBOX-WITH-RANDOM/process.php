<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị của checkbox skills
        $skills = isset($_POST["skills"]) ? $_POST["skills"] : array(); 
    }
?>
    <div class="card">
        
        <div class="card-body">
            <?php
            // CODE HERE
            foreach ($skills as $skill) {
                $randomColor = $colors[array_rand($colors)]; // Chọn một màu ngẫu nhiên từ mảng $colors
                echo '<div class="badge bg-' . $randomColor . '">' . htmlspecialchars($skill) . '</div>';
            }
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>