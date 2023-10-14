<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  require 'app/view/DashboardView.php';
  require 'app/controller/DashboardController.php';

  include 'header.php';
?>

<
