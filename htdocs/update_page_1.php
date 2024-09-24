<?php include('header.php'); ?>
<?php include('connectdb.php'); ?>

<?php

if(isset($_GET['AddressID'])){
    $AddressID = $_GET['AddressID'];


    $query = "SELECT * FROM `Address` WHERE `AddressID` = '$AddressID'";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("query Failed".mysqli_error());
    }
    else{

        $row = mysqli_fetch_assoc($result);

        // print_r($row);
    }
}
?>

<?php 
     if(isset($_POST['update_address'])){

            if(isset($_GET['AddressID_new'])){
                $AddressIDnew = $_GET['AddressID_new'];

            }

             $FlatOrRoom = $_POST['FlatOrRoom'];
             $Floor = $_POST['Floor'];
             $Building = $_POST['Building'];
             $StreetAddress = $_POST['StreetAddress'];
             $State = $_POST['State'];
             $District = $_POST['District'];
             $Country = $_POST['Country'];

             $query = "UPDATE `Address` SET `FlatOrRoom` = '$FlatOrRoom',  `Floor` = '$Floor',  `Building` = '$Building' ,  `StreetAddress` = '$StreetAddress' , `State` = '$State' , `District` = '$District' , `Country` = '$Country'  WHERE `AddressID` = '$AddressIDnew'";
             
             $result = mysqli_query($connection, $query);

             if(!$result){
                die("query Failed".mysqli_error());
            }
            else{
                header('location:index.php?update_msg=You have successfully updated the data.');
            }
     }
   
?>

<form action="update_page_1.php?AddressID_new=<?php echo $AddressID; ?>" method="post">
<div class="form-group">
    <label for="FlatOrRoom">FlatOrRoom</label>
    <input type="text" name="FlatOrRoom" class="form-control" value="<?php echo $row['FlatOrRoom'] ?>">
    </div>
            <div class="form-group">
                <label for="Floor">Floor</label>
                <input type="text" name="Floor" class="form-control" value="<?php echo $row['Floor'] ?>">
            </div>
            <div class="form-group">
                <label for="Building">Building</label>
                <input type="text" name="Building" class="form-control" value="<?php echo $row['Building'] ?>">
            </div>
            <div class="form-group">
                <label for="StreetAddress">StreetAddress</label>
                <input type="text" name="StreetAddress" class="form-control" value="<?php echo $row['StreetAddress'] ?>">
            </div>
            <div class="form-group">
                <label for="State">State</label>
                <input type="text" name="State" class="form-control" value="<?php echo $row['State'] ?>">
            </div>
            <div class="form-group">
                <label for="District">District</label>
                <input type="text" name="District" class="form-control" value="<?php echo $row['District'] ?>">
            </div>
            <div class="form-group">
                <label for="Country">Country</label>
                <input type="text" name="Country" class="form-control" value="<?php echo $row['Country'] ?>">
            </div>

            <input type="submit" class="btn btn-success" name="update_address" value="UPDATE">

</form>


<?php include('footer.php'); ?>
