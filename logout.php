<?php
session_start();
session_destroy();
echo "<script>alert('Anda telah keluar'); window.location =
'masuk.php'</script>";
