<?php

$insert = false;
$update = false;
$delete = false;

$localserver = "localhost";
$username = "root";
$password = "";
$database = "inotesdemo";

$connection = mysqli_connect($localserver, $username, $password, $database);

if(isset($_GET['delete'])){
    $deleteData = $_GET['delete'];
    $sql = "DELETE FROM `inotesdemotable` WHERE `inotesdemotable`.`sno` = $deleteData;";
    $result = mysqli_query($connection , $sql);
    if($result){
        $delete = true;
    }
    else{
        echo "Not DELETED";
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['edit-form'])){
        $editForm = $_POST['edit-form'];
        $editTitle = $_POST['edittitle'];
        $editDescription = $_POST['editdescription'];

        $sql = "UPDATE `inotesdemotable` SET `title` = '$editTitle', `description` = '$editDescription' WHERE `inotesdemotable`.`sno` = '$editForm'";

        $result = mysqli_query($connection , $sql);
        if($result){
            $update = true;
        }
        else{
            "Not Updated";
        }
    }
    else{
        $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `inotesdemotable` (`title`, `description`, `datetime`) VALUES ('$title', '$description', CURRENT_TIMESTAMP)";

    $result = mysqli_query($connection, $sql);
    if ($result) {
        $insert = true;
    } else {
        echo "not inserted";
    }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous" />

    <!-- DATA TABLE  -->
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">



    <title>Hello, world!</title>

    <style>
        table.dataTable th.dt-type-numeric,
        table.dataTable th.dt-type-date,
        table.dataTable td.dt-type-numeric,
        table.dataTable td.dt-type-date {
            text-align: left !important;
        }
    </style>
</head>

<body>

    <!-- Button trigger modal -->


    <!-- Modal -->
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
                    <!-- EDIT FORM  -->
                    <form action="/crudinotes.php" method="POST">
                        <input type="hidden" id="edit-form" name="edit-form">
                        <div class="form-group">
                            <label for="edittitle">Title</label>
                            <input type="text" class="form-control" id="edittitle" aria-describedby="emailHelp" name="edittitle">
                        </div>
                        <div class="form-group">
                            <label for="editdescription">Password</label>
                            <textarea class="form-control" id="editdescription" name="editdescription" rows="3"></textarea>
                        </div>
                        
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                
                    </form>
                    <!-- EDIT FORM  -->
                </div>
                
            </div>
        </div>
    </div>

    <!-- NAVBAR  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/crudinotes.php">InotesCRUD</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input
                    class="form-control mr-sm-2"
                    type="search"
                    placeholder="Search"
                    aria-label="Search" />
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    Search
                </button>
            </form>
        </div>
    </nav>

    <?php

    if ($insert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>congratulations!</strong> Your data has been inserted;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                 </button>
                </div>';
    }
    if ($update) {
        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>congratulations!</strong> Your data has been Updated;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                 </button>
                </div>';
    }
    if ($delete) {
        echo '<div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>congratulations!</strong> Your data has been Deleted;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                 </button>
                </div>';
    }
    
    ?>

    <!-- ADD NOTE FORM -->
    <div class="container my-4">
        <form action="crudinotes.php" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title"
                    required
                    placeholder="Enter Title" />
            </div>
            <div class="form-group">
                <label for="title">Description</label>
                <textarea class="form-control"
                    name="description"
                    id="description"
                    rows="3"
                    required
                    placeholder="Enter Title"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
    </div>

    <!-- TABLE  -->
    <div class="container">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">sno</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "SELECT * FROM `inotesdemotable`";
                $result = mysqli_query($connection, $sql);
                $sno = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $sno = $sno + 1;
                    echo '<tr>
                        <th scope="row"> ' . $sno . ' </th>
                        <td> ' . $row['title'] . ' </td>
                        <td> ' . $row['description'] . ' </td>
                        <td> <button type="button" id= '. $row['sno'] . ' class="editbtn btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Edit</button>
                        <button type="button" id= '. $row['sno'] .' class="deletebtn btn btn-primary btn-sm">Delete</button> </td>
                        </tr>';
                }

                ?>

            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
        src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>

    <!-- EDIT  -->
     <script>
        let editBtn = document.getElementsByClassName('editbtn');
        Array.from(editBtn).forEach((element) => {
            element.addEventListener("click" , (e) => {
                tr = e.target.parentNode.parentNode;
                editTitleText = tr.getElementsByTagName('td')[0];
                editDescriptionText = tr.getElementsByTagName('td')[1];
                document.getElementById('edittitle').value = editTitleText.innerText;
                document.getElementById('editdescription').value = editDescriptionText.innerText;
                document.getElementById('edit-form').value = e.target.id;
            });
        });
     </script>

     <!-- DELETE  -->
      <script>
        let deleteBtn = document.getElementsByClassName('deletebtn');
        Array.from(deleteBtn).forEach((element) => {
            element.addEventListener("click" , (e)=> {
                if(confirm("Are you sure you want  to delete this data")){
                    window.location.href = `crudinotes.php?delete=${e.target.id}`;
                }
            })
        })
      </script>

</body>

</html>