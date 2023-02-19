<?php include('sidebar.php');
$user_id=$_SESSION['id'];
// include('session_manager.php');
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
$sql2 = "SELECT * from users WHERE `owner_id`='$user_id'";
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



<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <Style>
        html {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-shadow: rgba(0, 0, 0, 0.01) 0 0 1px;
            text-rendering: optimizeLegibility;
        }
        
        body {
            background: #252525;
            margin-left: 50px;
            margin-top: 15px;
        }

        .emp-profile {
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
            margin-left: 400px;
        }

        .profile-img {
            text-align: center;
        }

        .profile-img img {
            width: 70%;
            height: 100%;
        }

        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #252525;
        }

        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }

        .profile-head h5 {
            color: #333;
        }

        .profile-head h6 {
            color: #0062cc;
        }

        .profile-edit-btn {
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }

        .proile-rating {
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }

        .proile-rating span {
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }

        .profile-head .nav-tabs {
            margin-bottom: 5%;
        }

        .profile-head .nav-tabs .nav-link {
            font-weight: 600;
            border: none;
        }

        .profile-head .nav-tabs .nav-link.active {
            border: none;
            border-bottom: 2px solid #0062cc;
        }

        .profile-work {
            padding: 14%;
            margin-top: -15%;
        }

        .profile-work p {
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }

        .profile-work a {
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }

        .profile-work ul {
            list-style: none;
        }

        .profile-tab label {
            font-weight: 600;
        }

        .profile-tab p {
            font-weight: 600;
            color: #0062cc;
        }
    </Style>
</head>
<div class="container emp-profile col-lg-8">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" style="border-radius: 70%" />
                    <!-- <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file" />
                    </div> -->
                </div>
            </div>
            <div class="row col-md-8">
                <table class="table table-info table-striped">
                    <tr>
                        <th scope="row">User ID</th>
                        <td>Kshiti123</td>
                    </tr>
                    <tr>
                        <th scope="row">Name</th>
                        <td>Kshiti Ghelani</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>kshitighelani123@gmail.com</td>
                    </tr>
                    <tr>
                        <th scope="row">Profession</th>
                        <td>Web Developer and Designer</td>
                    </tr>
                </table>  
            </div>
            
        </div><br>
        
    </form>
</div>
</body>

</html>