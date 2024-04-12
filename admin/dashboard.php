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
$catering_bookings = [];
// Check if any rows are returned
if ($result->num_rows > 0) {
  // Output data of each row
  $catering_bookings = $result->fetch_all(MYSQLI_ASSOC);
}

$sql = "SELECT * FROM hall_bookings ORDER BY id DESC LIMIT 3;";
$result = $db->query($sql);
$hall_bookings = [];
// Check if any rows are returned
if ($result->num_rows > 0) {
  // Output data of each row
  $hall_bookings = $result->fetch_all(MYSQLI_ASSOC);
}

$sql = "SELECT * FROM pooja_bookings ORDER BY id DESC LIMIT 3;";
$result = $db->query($sql);
$pooja_bookings = [];
// Check if any rows are returned
if ($result->num_rows > 0) {
  // Output data of each row
  $pooja_bookings = $result->fetch_all(MYSQLI_ASSOC);
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
      <div class="row">
        <div class="col-md-6 col-sm-12">
        <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recent Catering Bookings</h3>
                    <a href="<?= BASE_URL .'/admin/catering.php' ?>" class="btn btn-success d-inline-block float-right">View All</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Booking Date</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Event Description</th>
                                <th>Total Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($catering_bookings as $catering_booking) {
                                echo "<tr>
                                        <td>" . $catering_booking["id"] . "</td>
                                        <td>" . $catering_booking["booking_date"] . "</td>
                                        <td>" . $catering_booking["name"] . "</td>
                                        <td>" . $catering_booking["contact_number"] . "</td>
                                        <td>" . $catering_booking["address"] . "</td>
                                        <td>" . $catering_booking["event_description"] . "</td>
                                        <td>" . $catering_booking["total_count"] . "</td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
        <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recent Hall Bookings</h3>
                    <a href="<?= BASE_URL .'/admin/hall-bookings.php' ?>" class="btn btn-success d-inline-block float-right">View All</a>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Booking Date</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Description</th>
                                <th>Total Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($hall_bookings as $hall_booking) {
                                echo "<tr>
                                        <td>" . $hall_booking["id"] . "</td>
                                        <td>" . $hall_booking["created_at"] . "</td>
                                        <td>" . $hall_booking["name"] . "</td>
                                        <td>" . $hall_booking["phone"] . "</td>
                                        <td>" . $hall_booking["message"] . "</td>
                                        <td>" . $hall_booking["total_count"] . "</td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
        <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recent Pooja Bookings</h3>
                    <a href="<?= BASE_URL .'/admin/pooja-bookings.php' ?>" class="btn btn-success d-inline-block float-right">View All</a>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Booking Date</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Event Description</th>
                                <th>Pooja Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($pooja_bookings as $pooja_booking) {
                                echo "<tr>
                                        <td>" . $pooja_booking["id"] . "</td>
                                        <td>" . $pooja_booking["date"] . "</td>
                                        <td>" . $pooja_booking["name"] . "</td>
                                        <td>" . $pooja_booking["phone"] . "</td>
                                        <td>" . $pooja_booking["message"] . "</td>
                                        <td>" . $pooja_booking["pooja_type"] . "</td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<?php


include_once('./partials/footer.php');
include_once('../partials/common-scripts.php');
