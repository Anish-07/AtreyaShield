<?php include('session_manager.php');
include('sidebar.php');
$user_id = $_SESSION['id'];
?>

<?php
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "atreyashield";

// Create database connection
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
$sql2 = "SELECT * from files WHERE `owner_id`='$user_id'";
$result = mysqli_query($db, $sql2);

if (mysqli_query($db, $sql2)) {
  //echo $result;
} else {
  echo "Sorry Please reload and try again!";
}

if (isset($_POST["submit"])) {
  #$title = $_POST["title"]
  $pname = rand(1000, 1000) . "-" . $_FILES["file"]["name"];
  $t_name = $_FILES["file"]["tmp_name"];
  $uploads_dir = 'serverupload/';
  move_uploaded_file($t_name, $uploads_dir . '/' . $pname);
}

?><br>
<!--<a href = "/images-->

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
    body {
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


    .openBtn {
      display: flex;
      justify-content: left;
    }

    .openButton {
      border: none;
      background-color: #CCFF00;
      cursor: pointer;
      position: fixed;
    }

    .loginPopup {
      position: relative;
      text-align: center;
      width: 100%;
    }

    .formPopup {
      display: none;
      position: fixed;
      left: 45%;
      top: 5%;
      transform: translate(-50%, 5%);
      border: 3px solid #999999;
      z-index: 9;
    }

    .formContainer {
      max-width: 300px;
      padding: 20px;
      background-color: #252525;
    }

    .formContainer input[type=text],
    .formContainer input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 20px 0;
      border: none;
      background: #eee;
    }

    .formContainer input[type=text]:focus,
    .formContainer input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    .formContainer .btn {
      padding: 12px 20px;
      border: none;
      background-color: #8ebf42;
      color: #fff;
      cursor: pointer;
      width: 100%;
      margin-bottom: 15px;
      opacity: 0.8;
    }

    .formContainer .cancel {
      background-color: #cc0000;
    }

    .formContainer .btn:hover,
    .openButton:hover {
      opacity: 1;
    }
  </style>
</head>

<body>
  <div class="container emp-profile col-lg-8">
    <div>
      <table class="table table-success border border-warning table-bordered rounded-0" style="margin-left: 120px;">
        <thead class="thead-dark text-dark">
          <tr>
            <!-- <th scope="col">Sr No.</th> -->
            <th scope="col">File Name</th>
            <th scope="col">Upload Time</th>
            <th scope="col">Upload Date</th>
            <th scope="col">Download</th>
          </tr>
        </thead>
        <tbody class="text-dark">
          <?php
          while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
              <td><?php echo $row['image']; ?></td>
              <td><?php echo $row['uploadTime']; ?></td>
              <td><?php echo $row['uploadDate']; ?></td>
              <td><button class="openButton" onclick="openForm(<?php echo $row['id']; ?>)" id="<?php echo $row['id']; ?>">Download</button></td>
            <tr>
            <?php } ?>
        </tbody>
      </table>
      <div class="loginPopup">
        <div class="formPopup" id="popupForm">
          <form action="#" class="formContainer" method="GET">
            <label for="key">
              <strong style="color: #CCFF00">Enter Key to Decrypt</strong>
            </label>
            <input type="password" placeholder="Enter key" id="key" required>
            <button type="submit" class="btn" onclick="sendKey()">Decrypt and Download</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
        </div>
      </div>
      <script>
        var uid;

        function openForm(id) {
          document.getElementById("popupForm").style.display = "block";
          uid = id;

        }

        function closeForm() {
          document.getElementById("popupForm").style.display = "none";
        }

        function sendKey() {
          $.ajax({
            type: "GET",
            url: 'verification.php',
            data: {
              userID: uid,
              key: document.getElementById('key').value
            },
            success: function(data) {
              document.getElementById("download").innerHTML = data;
              document.getElementById("link").click();
              closeForm();
            }
          });
        }
      </script>


      <!-- /Wrapper -->

      <!-- JQuery -->
      <script src="assets/js/jquery-1.10.2.min.js"></script>

      <!-- Dropzone JS -->
      <script src="assets/js/dropzone.min.js"></script>

      <!-- Main JS file -->
      <script src="assets/js/scripts.js"></script>

    </div>
  </div>
  <div id="download" style="display: none">
  </div>
  </div>
</body>

</html>