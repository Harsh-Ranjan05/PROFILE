<?php 
include('db.php');
if($_GET['email']){
    $email = $_GET['email'];
    $query="DELETE FROM register WHERE email='$email'";
    $result=pg_query($conn, $query);
    if($result){
        ?>
    <script type="text/javascript">
        alert("Delete Successfully..");
        window.location = "login.php";
    </script>
<?php
    }
    else{
        ?>
    <script type="text/javascript">
        alert("Failed To Delete");
        window.location = "profile.php";
    </script>
<?php
    }
}
?>