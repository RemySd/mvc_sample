<?php

if (empty($_GET['action'])) {
    include 'views/homepage.php';
} elseif ($_GET['action'] === "about") {
    include 'views/about.php';
}
