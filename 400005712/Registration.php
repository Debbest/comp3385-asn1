//400005712
<?php
  // checks for session and starts if not started
  if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }
  require_once  'app/view/RegistrationView.php';
  require_once  'app/model/RegistrationModel.php';
  require_once 'app/controller/RegistrationController.php';