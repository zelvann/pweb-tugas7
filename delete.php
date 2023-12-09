<?php
require 'includes/header.php';
if(isset($_GET['nik']) && delete($_GET['nik'])) {
  return header('Location: index.php');
}
?>