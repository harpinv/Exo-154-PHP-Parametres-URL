<?php
if(isset($_GET['iteration'])) {
    for($i = 0; $i < $_GET['iteration']; $i++) {
        echo '<a href="exo1.php?iteration=5">page suivante</a><br>';
    }
}