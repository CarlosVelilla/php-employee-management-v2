<!DOCTYPE html>
<html lang="en">
<?php
include_once 'assets/html/head.html';
// session_start();
// if (isset($_SESSION["username"])) {
// 	header("Location: ./src/views/dashboard.php");
// }

require_once './src/library/database.php';
require_once './src/library/controller.php';
require_once './src/library/view.php';
require_once './src/library/model.php';
require_once './src/library/app.php';

require_once './config/db.php';

$app = new App();
?>

</html>