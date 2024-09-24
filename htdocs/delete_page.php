<?php include('connectdb.php'); ?>

<?php
    
    if(isset($_GET['AddressID'])){
        $AddressID = $_GET['AddressID'];
    }
    $query = "DELETE FROM `Address` WHERE `AddressID` = '$AddressID'";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed".mysqli_error());
    }

    else{
        header('location:index.php?delete_msg=You have deleted the record.');

    }

?>
