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
<style>
    /* Modern CSS additions - Original code remains untouched */
    :root {
        --primary: #4361ee;
        --primary-dark: #3a0ca3;
        --accent: #f72585;
        --light: #f8f9fa;
        --dark: #212529;
    }
    
    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        min-height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: white;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    }
    
    .card .form-control {
        border: 2px solid #e9ecef;
        border-radius: 8px;
        padding: 12px 15px;
        transition: all 0.3s;
    }
    
    .card .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
    }
    
    .card label {
        font-weight: 500;
        margin-bottom: 8px;
        color: #495057;
    }
    
    .card textarea.form-control {
        min-height: 120px;
    }
    
    .btn-dark {
        background-color: var(--primary);
        border: none;
        padding: 12px;
        font-weight: 600;
        letter-spacing: 0.5px;
        border-radius: 8px;
        transition: all 0.3s;
    }
    
    .btn-dark:hover {
        background-color: var(--primary-dark);
        transform: translateY(-2px);
    }
    
    .navbar {
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }
    
    #response {
        animation: fadeIn 0.4s ease-out;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    /* Background elements (keep original functionality) */
    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 75% 50%, rgba(67, 97, 238, 0.08) 0%, transparent 50%);
        z-index: -1;
        pointer-events: none;
    }
</style>

<body>
  


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