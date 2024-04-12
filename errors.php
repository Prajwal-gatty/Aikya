<?php
if (isset($_SESSION['errors']) && count($_SESSION['errors']) > 0) {
    echo '<div class="error">';
    foreach ($_SESSION['errors'] as $error) {
        echo '<p>' . $error . '</p>';
    }
    echo '</div>';
    unset($_SESSION['errors']); // Remove the errors from the session
}
?>
