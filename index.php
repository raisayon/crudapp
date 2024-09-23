<?php include('header.php'); ?>
<?php include('connectdb.php'); ?>

        <div class="box1">
        <h2> All Address </h2>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> ADD ADDRESS</button>
        </div>

        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FlatOrRoom</th>
                    <th>Floor</th>
                    <th>Building</th>
                    <th>StreetAddress</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Country</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $query = "select * from `Address`";

                $result = mysqli_query($connection, $query);

                if(!$result){
                    die("query failed".mysqli_error());
                }
                else{
                   while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                    <td><?php echo $row['AddressID']; ?></td>
                    <td><?php echo $row['FlatOrRoom']; ?></td>
                    <td><?php echo $row['Floor']; ?></td>
                    <td><?php echo $row['Building']; ?></td>
                    <td><?php echo $row['StreetAddress']; ?></td>
                    <td><?php echo $row['State']; ?></td>
                    <td><?php echo $row['District']; ?></td>
                    <td><?php echo $row['Country']; ?></td>
                    <td><a href="update_page_1.php?AddressID=<?php echo $row['AddressID']; ?>" class="btn btn-success">Update</a></td>
                    <td><a href="delete_page.php?AddressID=<?php echo $row['AddressID']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
                    <?php
                   }
                }

                ?>
           
            
            </tbody>
    
         </table>

        
<!-- Modal -->
 <form action="insert_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
            <div class="form-group">
                <label for="FlatOrRoom">FlatOrRoom</label>
                <input type="text" name="FlatOrRoom" class="form-control">
            </div>
            <div class="form-group">
                <label for="Floor">Floor</label>
                <input type="text" name="Floor" class="form-control">
            </div>
            <div class="form-group">
                <label for="Building">Building</label>
                <input type="text" name="Building" class="form-control">
            </div>
            <div class="form-group">
                <label for="StreetAddress">StreetAddress</label>
                <input type="text" name="StreetAddress" class="form-control">
            </div>
            <div class="form-group">
                <label for="State">State</label>
                <input type="text" name="State" class="form-control">
            </div>
            <div class="form-group">
                <label for="District">District</label>
                <input type="text" name="District" class="form-control">
            </div>
            <div class="form-group">
                <label for="Country">Country</label>
                <input type="text" name="Country" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_students" value="ADD"></button>
      </div>
    </div>
  </div>
</div>
            </form>
<?php include('footer.php'); ?>