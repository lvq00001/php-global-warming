<?php
  function error_found(){
    header("Location: error_page.php");
  }
  set_error_handler('error_found');
?>