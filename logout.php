<?php
session_start();
session_unset();
session_destroy();
?>
    <script type="text/javascript">
        alert("LogOut  Successfully..");
        window.location = "login.php";
    </script>