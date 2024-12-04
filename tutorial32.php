<?php 

    $insert = false;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "inotes";

    $connection = mysqli_connect($servername , $username , $password , $database);

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['snoedit'])){
            $sno = $_POST['snoedit'];
            $title = $_POST['modeltitle'];
            $description = $_POST['modeldescription'];

            $sql = "UPDATE `inotesdata` SET `title` = '$title', `concern` = '$description' WHERE `inotesdata`.`sno` = $sno";

            echo $sql;
            
            // $result = mysqli_query($connection , $sql);
            

        }
        else{
        $title = $_POST['title'];
        $description = $_POST['desc'];

        $sql = "INSERT INTO `inotesdata` (`title`, `concern`, `dt`) VALUES ('$title', '$description', CURRENT_TIMESTAMP)";
        
        $result = mysqli_query($connection , $sql);

        if($result){
            $insert = true;
        }
        }
    }
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- JQUERY  -->
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="crossorigin="anonymous"></script>


    <!-- DATA TABLES  -->
     <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
     

    <title>iNotes</title>

    <style>
        table.dataTable th.dt-type-numeric, table.dataTable th.dt-type-date, table.dataTable td.dt-type-numeric, table.dataTable td.dt-type-date{
            text-align: left !important;
        }
    </style>
  </head>
  <body>

        <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="editmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Notes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- MODAL FORM  -->

        <form action="/tutorial32.php" method="POST">
  <div class="form-group">
    <input type="hidden" id="snoedit" name="snoedit">
    <label for="modeltitle">Title</label>
    <input type="text" class="form-control" name="modeltitle" id="modeltitle" aria-describedby="emailHelp" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="modeldescription">Description</label>
    <textarea type="text" class="form-control" rows="3" name="modeldescription" id="modeldescription" placeholder="Enter Description"></textarea>
  </div>
  <button type="submit"  class="btn btn-primary">Submit</button>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    <!-- NAV  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">iNotes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact us</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input  class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- FORM  -->

<?php 
    if($insert){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>congratulations</strong> Your data has been inserted;
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
?>

<div class="container my-4">
<form action="/tutorial32.php" method="POST">
  <div class="form-group">
    <label for="title">Name</label>
    <input required type="text" class="form-control" name="title" id="title"  placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="desc">Description</label>
    <textarea required class="form-control" name="desc" id="desc"  placeholder="Enter Description" rows="3"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Add Notes</button>
</form>
</div>

<div class="container">
    <?php


    ?>

<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
         $sql = "SELECT * FROM `inotesdata`";
         $result = mysqli_query($connection , $sql);
         $sno = 0;
        while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
      <th scope='row'>" . $sno . "</th>
      <td>" . $row['title'] . "</td>
      <td> " . $row['concern'] . " </td>
      <td> <button type='button' class='edit btn btn-primary'  data-toggle='modal'  data-target='#editmodel' id=".$row['sno']." >Edit</button> </td>
    </tr>";
        }
    ?>

  </tbody>
</table>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
     <script>
        let table = new DataTable('#myTable');
     </script>

     <script>
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) =>{
            element.addEventListener("click" , (e)=>{
                console.log("Hello World");
                tr = e.target.parentNode.parentNode;
                title = tr.getElementsByTagName('td')[0].innerText;
                description = tr.getElementsByTagName('td')[1].innerText;
                console.log(title , description)
                document.getElementById('modeltitle').value = title;
                document.getElementById('modeldescription').value = description;
                console.log(e.target.id);
            })
        })
     </script>
  </body>
</html>