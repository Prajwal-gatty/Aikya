<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}


include('./controllers/verify-login.php');
include_once('./partials/header.php');
include_once('./partials/navbar.php');
include_once('./partials/sidebar.php');

include_once('../connect.php');
$sql = "SELECT * FROM catering_bookings ORDER BY id DESC LIMIT 3;";
$result = $db->query($sql);
$row = [];
// Check if any rows are returned
if ($result->num_rows > 0) {
  // Output data of each row
  $rows = $result->fetch_all(MYSQLI_ASSOC);
}
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<?php


include_once('./partials/footer.php');
include_once('../partials/common-scripts.php');
