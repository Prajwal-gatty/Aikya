<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php



if (isset($_SESSION['message']['type'])) {
    $type = $_SESSION['message']['type'];
    $title = $_SESSION['message']['title'];
    $text = $_SESSION['message']['text'];
    echo "<script>
            Swal.fire({
                icon: '{$type}',
                title: '{$title}',
                text: '{$text}',
            });
        </script>";

    unset($_SESSION['message']);
}


?>
