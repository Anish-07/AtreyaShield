<?php include('sidebar.php');
$user_id=$_SESSION['id'];
// echo $username;
?>

<?php
// Include the database configuration file
#include 'db-config.php';
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "atreyashield";

// Create database connection
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
#if ($db->connect_error) {
#die("Connection failed: " . $db->connect_error);
#}
#$sql2 = 0;
$sql2 = "SELECT * from files WHERE `owner_id`='$user_id'";
$result = mysqli_query($db, $sql2);

    if (mysqli_query($db, $sql2)) {
        //echo $result;
    } else {
        echo "Hello";
    }

if (isset($_POST["submit"])) {
    #$title = $_POST["title"]
    $pname = rand(1000, 1000) . "-" . $_FILES["file"]["name"];
    $t_name = $_FILES["file"]["tmp_name"];

    $uploads_dir = 'uploads/';

    move_uploaded_file($t_name, $uploads_dir . '/' . $pname);

}

?><br>
<!--<a href = "/images-->

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body{
            background: #252525;
            margin-left: 50px;
            margin-top: 15px;
        }

        .form_float {
            float: right;
        }

        .form-control:focus {
            border-color: #F4DA02;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }

        #form_bgcolor {
            background-image: linear-gradient(to bottom right, red, pink);
        }

        #fnt1 {
            font-family: 'Inconsolata', serif;
            font-size: 50px;
        }
    </style>
</head>
<body>
<div class="container emp-profile col-lg-8">
<div>
    <table class="table" style="margin-left: 170px; margin-top: 50px">
        <thead class="thead-dark bg-dark text-white">
            <tr>
                <!-- <th scope="col">Sr No.</th> -->
                <th scope="col">Owner</th>
                <th scope="col">File Name</th>
                <th scope="col">Download</th>
            </tr>
        </thead>
        <tbody class="text-white">
            <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['Owner']; ?></td>
                        <td><?php echo $row['image']; ?></td>
                        <td><a href= uploads/<?php echo $row['image']; ?> download>Download</a></td>
                    <tr>
            <?php } ?>
        </tbody>
    </table>
            
            <!-- /Wrapper -->

            <!-- JQuery -->
            <script src="assets/js/jquery-1.10.2.min.js"></script>

            <!-- Dropzone JS -->
            <script src="assets/js/dropzone.min.js"></script>

            <!-- Main JS file -->
            <script src="assets/js/scripts.js"></script>

        </div>
    </div>
</div>
</body>

</html>

</html>