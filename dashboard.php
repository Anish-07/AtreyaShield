<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Julee">
    <title>Dashboard-AtreyaShield</title>
    <style>
        .img1 {
            float: left;
            width: 600px;
            margin-top: 5px;
            margin-left: 120px;
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
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 622px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <img src="/home/mihir/Sem 6/DSS/AtryehaShield/AtreyaShield-logos/AtreyaShield-1.png" height="40px" width="40px">
            <span class="fs-4">AtreyaShield</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page"
                    style="background-color: #F4DA02; color: black;">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    My Files
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#table"></use>
                    </svg>
                    Shared With Me
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#grid"></use>
                    </svg>
                    File Requests
                </a>
            </li>
        </ul>
        <hr>
        <div>
            <ul class="nav nav-pills flex-column mb-auto">
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        My Profile
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Log Out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>