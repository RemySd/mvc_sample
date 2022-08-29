<?php

ini_set('display_errors', 1);

if (empty($_GET['controller']) || $_GET['controller'] === "homepage") {
    include 'controllers/HomeController.php';
} elseif ($_GET['controller'] === "profil") {
    include 'controllers/ProfilController.php';
}
