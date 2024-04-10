<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('./controllers/verify-login.php');
include_once('./partials/header.php');
include_once('./partials/navbar.php');
include_once('./partials/sidebar.php');


include_once('../connect.php');
$sql = "SELECT * FROM feedback_data";
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
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Manage Users</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Satisfaction level</th>
                                <th>Comments</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($rows as $row) {
                                echo "<tr>
                                        <td>" . $row["id"] . "</td>
                                        <td>" . $row["name"] . "</td>
                                        <td>" . $row["email"] . "</td>
                                        <td>" . $row["phone"] . "</td>
                                        <td>" . $row["satisfaction_level"] . "</td>
                                        <td>" . $row["comments"] . "</td>
                                       
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
</div>

<?php
include_once('./partials/footer.php');
