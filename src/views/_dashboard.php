<?php
require_once '../library/loginController.php';

session_start();
if (!isset($_SESSION["username"])) {
  header("Location: ../../index.php");
}

/* echo $_SESSION["username"]; */


if (time() > $_SESSION['timeout'] + 600) {
  destroySession();
}

include_once '../../assets/html/header.php';
?>

<div class="container-table">
  <!-- <?php
        foreach ($employees as $index => $employee) {
          echo $employee["name"];
          echo $employee["id"];
        }
        ?> -->
  <div class="table-employees" id="employees"></div>
</div>
<?php include_once '../../assets/html/footer.html' ?>