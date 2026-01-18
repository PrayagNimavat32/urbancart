<?php
session_start();
include("../../db.php");

include "sidenav.php";
include "topheader.php";
include "activitity.php";

?>

<div class="content">
        <div class="container-fluid">
         <div class="panel-body">
		<a>
            <?php  //success message
            if(isset($_POST['success'])) {
            $success = $_POST["success"];
            echo "<div class='col-md-12 col-xs-12' id='product_msg'>
          <div class='alert alert-success'>
            <a href='#'' class='close' data-dismiss='alert' aria-label='close'>×</a>
            <b>Product is Added..!</b>
          </div>
        </div>";
            }