<?php
include 'connectdb.php';

if(isset($_POST['add_students'])){

    $FlatOrRoom = $_POST['FlatOrRoom'];
    $Floor = $_POST['Floor'];
    $Building = $_POST['Building'];
    $StreetAddress = $_POST['StreetAddress'];
    $State = $_POST['State'];
    $District = $_POST['District'];
    $Country = $_POST['Country'];

    if($FlatOrRoom == "" || empty($FlatOrRoom)){
        header('location:index.php?message=You need to fill in the first name');
    }
    else{
        $query = "insert into `Address` (`FlatOrRoom`,`Floor`,`Building`,`StreetAddress`,`State`,`District`,`Country`) values ('$FlatOrRoom','$Floor','$Building','$StreetAddress','$State','$District','$Country')";

        $result = mysqli_query($connection,$query);

        if(!$result){
            die("Query Failed".mysqli_error());
        }
        else{
            header('location:index.php?insert_msg=Your data has been added successfully');

        }

    }
}


?>