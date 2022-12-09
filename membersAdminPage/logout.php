<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
session_destroy();
?>

<script>
    window.location.href = "https://spikeball-club.uk.r.appspot.com";
</script>

<?php
exit;
?>