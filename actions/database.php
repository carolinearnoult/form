<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root', '');
} catch (Exception $e) {
    die('Une erreure à été trouvée : ' . $e->getMessage());
}
