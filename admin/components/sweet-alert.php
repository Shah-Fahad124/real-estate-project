<?php
$alertTypes = ['success', 'error', 'delete', 'update'];
foreach ($alertTypes as $type) {
    if (isset($_GET[$type])) {
        $icon = $type === 'error' ? 'error' : 'success';
        $title = ucfirst($type);
        $text = htmlspecialchars($_GET[$type], ENT_QUOTES, 'UTF-8');
        echo "
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: '$title',
                text: '$text',
                icon: '$icon',
                confirmButtonText: 'OK'
            });
        });
        </script>";
    }
}
?>