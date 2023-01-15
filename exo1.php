<?php
if(isset($_GET['iteration'])) {
    for($i = 0; $i < $_GET['iteration']; $i++) {
        echo "Hello World <br>" ;
    }
}