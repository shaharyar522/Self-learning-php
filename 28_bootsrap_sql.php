<?php

$server_name =  "localhost";
$user_name = "root";
$password = "";
$database_name = "shari_phptut";


$conn =  mysqli_connect($server_name, $user_name, $password, $database_name);

if (!$conn) {
    die("sorry  we  failed  the conntion " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `data_form` (`name`, `email`, `description`) VALUES ('$name', '$email', '$description')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success!</strong> Your Record Has been successfully!.
           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Error!</strong> Your data has been failed to insert.
           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
    }
    exit; // Important to prevent further execution
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- this is jqeury  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <!-- this is navabar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <!--  now this is form  -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4 rounded" style="width: 100%; max-width: 500px;">
            <h3 class="text-center mb-4">Login Form</h3>
            <form id="myForm" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="name" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="4" placeholder="Enter your description here..."></textarea>
                </div>

                <button type="submit" class="btn btn-dark w-100" name="submit" value="sub" id="WOPR">Submit</button>
            </form>
            <div id="response"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $("#myForm").on("submit", function(e) {
                e.preventDefault(); // Prevent the default form submission
                
                // Get form data
                var formData = {
                    name: $("#name").val(),
                    email: $("#email").val(),
                    description: $("#description").val()
                };
                
                $.ajax({
                    url: window.location.href, // Submit to the same page
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        // Show the response message
                        $("#response").html(response);
                        // Clear the form if successful
                        $("#myForm")[0].reset();
                    },
                    error: function(xhr, status, error) {
                        $("#response").html("<div class='alert alert-danger'>An error occurred: " + error + "</div>");
                    }
                });
            });
        });
    </script>
</body>
</html>