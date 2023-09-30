<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="../home.php">Home</a>
        <a class="nav-link" href="../ImageUpload/adminupload.php">Image Upload</a>
        <a class="nav-link" href="users.php">Explore Our Events</a>
        
      </div>
    </div>
  </div>
</nav>


<!-- ADD -->
<div class="modal fade" id="eventaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Event Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="insertcode.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">

        <div class="form-group">
            <label>Name</label>
            <input type="text" name ="event_name" class="form-control" placeholder="Enter Event Name" required>
        </div>
        
        <div class="form-group">
            <label>Category</label>
            <select name="event_category" id="event_category" class="form-control" required>
                 <option value="Cultural">Cultural</option>
                <option value="Technical">Technical</option>
                <option value="Sports">Sports</option>
            </select>
        </div>

        <div class="form-group">
            <label>Department</label>
            <input type="text" name ="department" class="form-control" placeholder="Enter Department Name" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" name="event_desc" class="form-control" placeholder="Enter Event Description" required>
        </div>

        <div class="form-group">
            <label> Upload Image </label>
            <input type="file" name="event_image" class="form-control">
        </div>

        <div class="form-group">
        <label>Date</label>
          <input type="date" name="event_date" class="form-control" required>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="saveevent" class="btn btn-primary">Save Data</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- ######################  EDIT ######################### -->

<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Event Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="updatecode.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">

      <input type="hidden" name="update_id" id="update_id">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name ="event_name" id="event_name" class="form-control" placeholder="Enter Event Name" required>
        </div>

        <div class="form-group">
            <label>Category</label>
            <select name="event_category" id="event_category" class="form-control" required>
                 <option value="Cultural">Cultural</option>
                <option value="Technical">Technical</option>
                <option value="Sports">Sports</option>
            </select>
        </div>

        <div class="form-group">
            <label>Department</label>
            <input type="text" name ="department" id="department"class="form-control" placeholder="Enter Department Name" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" name="event_desc" id="event_desc" class="form-control" placeholder="Enter Event Description" required>
        </div>

        <div class="form-group">
            <label> Upload Image </label>
            <input type="file" name="event_image" id="event_image" class="form-control" >
        </div>
        <div class="form-group">
        <label>Date</label>
          <input type="date" name="event_date" class="form-control" required>
        </div>


        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="updateevent" class="btn btn-primary">Update Data</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ############################################### -->


<!-- ######################  DELETE ######################### -->

<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete  Event Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="deletecode.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">

      <input type="hidden" name="delete_id" id="delete_id">
        
        <h4> DO You Want To Delete this Event?</h4>
        

        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="submit" name="deleteevent" class="btn btn-primary">Yes Delete it!!</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ############################################### -->






    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2>Event Uploading Page</h2>
            </div>
            <div class="card">
            <div class="card-body">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eventaddmodal">
                Add Event 
            </button>
            </div>
        </div>
        <div class="card">
          <div class="card-body">
            

            <?php
              $connection = mysqli_connect("localhost","root","");
              $db = mysqli_select_db($connection, 'event_db');

              $query = "SELECT * FROM events";
              $query_run = mysqli_query($connection, $query );
              ?>

            <table id="datatableid" class="table table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Category</th>
                <th scope="col">Event Name</th>
                <th scope="col">Department</th>
                <th scope="col">Description</th>
                <th scope="col">Event Image</th>
                <th scope="col">EDIT</th>
                <th scope="col">DELETE</th>
              </tr>
            </thead>
            <?php
              if($query_run)
              {
                foreach($query_run as $row) 
                { 
            ?>
            <tbody>
           
                
              
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['event_name']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td><?php echo $row['event_desc']; ?></td>
                <td> <?php echo '<img src="uploads/'.$row['event_image'].'" width="100px;" height="100px;" alt="Image">'?> </td>
                <td>
                  <button type="button" class="btn btn-success editbtn"> EDIT </button>
                </td>
                <td>
                  <button type="button" class="btn btn-danger deletebtn "> DELETE</button>
                </td>
              </tr>
              <?php
              }
              ?>
            </tbody>
            <?php
                }
              
              else{
                echo "No Record Found";
              }
            ?>
            </table>
          </div>
        </div>

        </div>
    </div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready(function () {

    $('#datatableid').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10,25,50,-1],
        [10,25,50,"All"]
      ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }
  });
});
</script>



<script>
  $(document).ready(function (){
    $('.deletebtn').on('click', function(){

      $('#deletemodal').modal('show');

      $tr= $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      console.log(data);

      $('#delete_id').val(data[0]);
      

    });
  });
</script>


<script>
  $(document).ready(function (){
    $('.editbtn').on('click', function(){

      $('#editmodal').modal('show');

      $tr= $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      console.log(data);

      $('#update_id').val(data[0]);
      $('#event_category').val(data[1])
      $('#event_name').val(data[2]);
      $('#department').val(data[3]);
      $('#event_desc').val(data[4]);
      $('#event_image').val(data[5]);
      $('#event_date').val(data[6]);

    });
  });
</script>

</body>
</html>