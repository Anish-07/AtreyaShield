<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        :after {
            content: "";
        }


        body {
            padding: 100px 0;
            background: #252525;
            color: white;
            max-width: 1000px;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            line-height: 1.4;
            margin-left: 30px;
            margin-top: 4 0px;
        }

        nav {
            float: left;
            position: relative;
            top: 0;
            left: 0;
            background: transparent;
        }

        nav ul {
            text-align: center;
        }

        nav ul li {
            position: relative;
            width: 70px;
            cursor: pointer;
            background: #252525;
            text-transform: uppercase;
            transition: all .4s ease-out;
        }

        nav ul li:after {
            position: absolute;
            background: #CCFF00;
            color: black;
            top: 0;
            left: 70px;
            width: 180px;
            height: 100%;
            opacity: .5;
            transform: perspective(400px) rotateY(90deg);
            transform-origin: 0 100%;
            transition: all .4s ease-out;
        }

        nav ul li:nth-child(1):after {
            content: "Home";
            line-height: 88px;
        }

        nav ul li:nth-child(2):after {
            content: "Myfile";
            line-height: 88px;
        }

        nav ul li:nth-child(3):after {
            content: "Shared withme";
            line-height: 88px;
        }

        nav ul li:nth-child(4):after {
            content: "File Request";
            line-height: 77px;
        }

        nav ul li:nth-child(5):after {
            content: "Profile";
            line-height: 73px;
        }

        nav ul li:nth-child(6):after {
            content: "Sign out";
            line-height: 73px;
        }

        nav ul li:hover {
            transform: translateX(-70px);
        }

        nav ul li:hover:after {
            opacity: 1;
            transform: perspective(400px) rotateY(0deg) scale(1);
        }


        nav ul li>div {
            display: inline-block;
            padding: 25px 0;
            background: transparent;
        }

        nav ul li div {
            position: relative;
        }

        .roof {
            width: 0;
            height: 0;
            top: 2px;
            border-style: solid;
            border-width: 0 21px 15px 21px;
            border-color: transparent transparent #CCFF00 transparent;
        }

        .roof-edge {
            position: absolute;
            z-index: 20;
            left: -17px;
            top: 3px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 17px 12px 17px;
            border-color: transparent transparent crimson transparent;
        }

        /*white triangle over red triangle*/
        .roof-edge:after {
            position: absolute;
            left: -14.5px;
            top: 3px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 14.5px 10px 14.5px;
            border-color: transparent transparent #CCFF00 transparent;
        }

        .front {
            position: relative;
            top: 3px;
            width: 28.5px;
            height: 20px;
            margin: 0 auto;
            background: white;
        }

        /*door*/
        .front:after {
            position: absolute;
            background: crimson;
            width: 11px;
            height: 13px;
            bottom: 0;
            left: 9px;
        }

        /*/// About me ////*/

        .head {
            width: 32px;
            height: 35px;
            background: white;
            border-radius: 8px;
        }

        /*mouth*/
        .head:after {
            width: 4px;
            height: 10px;
            background: white;
            position: absolute;
            border-radius: 4px 0 0 4px;
            top: 21px;
            left: 14px;
            transform: rotate(270deg);
        }

        .eyes {
            width: 8px;
            height: 5px;
            border-radius: 50%;
            position: absolute;
            top: 10px;
            left: 5px;
            background: crimson;
        }

        /*right eye*/
        .eyes:after {
            width: 8px;
            height: 5px;
            border-radius: 50%;
            position: absolute;
            top: 0;
            left: 14px;
            background: crimson;
        }

        .beard {
            width: 32px;
            height: 17px;
            background: crimson;
            border: 2px solid white;
            position: absolute;
            bottom: 0;
            left: 0;
            border-radius: 0 0 8px 8px;
        }

        /*nose*/
        .beard:after {
            position: absolute;
            top: -2px;
            left: 11px;
            background: white;
            width: 6px;
            height: 4px;
            border-left: 1px solid crimson;
            border-right: 1px solid crimson;
        }

        /*//work//*/

        .paper {
            position: relative;
            height: 32px;
            width: 29px;
            background: white;
            border: 2px solid white;
        }

        /*window*/
        .paper:after {
            position: absolute;
            top: 1px;
            left: 0;
            width: 25px;
            height: 29px;
            background: white;
            border-top: 4px solid crimson;
        }

        .lines {
            position: absolute;
            top: 36px;
            left: 5px;
            width: 11px;
            box-shadow: 0 0 0 1px crimson;
        }

        .lines:after {
            position: absolute;
            top: 4px;
            left: 3px;
            width: 14px;
            box-shadow: 0 0 0 1px crimson;
        }

        .lines:nth-child(2) {
            position: absolute;
            top: 44px;
            left: 8px;
            width: 11px;
        }

        .lines:nth-child(2):after {
            position: absolute;
            top: 4px;
            left: -3px;
            width: 11px;
        }

        .lines:nth-child(3) {
            position: absolute;
            top: 52px;
            left: 8px;
            width: 14px;
        }

        .lines:nth-child(3):after {
            display: none;
        }

        /*//mail //*/

        .mail-base {
            position: relative;
            width: 32px;
            height: 18px;
            background: white;
        }

        .mail-top {
            position: absolute;
            z-index: 20;
            left: 0;
            top: 0;
            width: 0;
            height: 0;
            transform: rotate(180deg);
            border-style: solid;
            border-width: 0 16px 11px 16px;
            border-color: transparent transparent crimson transparent;
        }

        .mail-top:after {
            position: absolute;
            z-index: 20;
            left: -16px;
            top: 3px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 16px 9px 16px;
            border-color: transparent transparent white transparent;
        }

        .gg-profile,
        .gg-profile::after,
        .gg-profile::before {
            display: block;
            box-sizing: border-box;
            border: 2px solid;
            border-radius: 100px
        }

        .gg-profile {
            overflow: hidden;
            transform: scale(var(--ggs, 1));
            width: 22px;
            height: 22px;
            position: relative
        }

        .gg-profile::after,
        .gg-profile::before {
            content: "";
            position: absolute;
            top: 2px;
            left: 5px;
            width: 8px;
            height: 8px
        }

        .gg-profile::after {
            border-radius: 200px;
            top: 11px;
            left: 0px;
            width: 18px;
            height: 18px
        }

        .gg-log-out {
            box-sizing: border-box;
            position: relative;
            display: block;
            width: 6px;
            height: 16px;
            border: 2px solid;
            transform: scale(var(--ggs, 1));
            border-right: 0;
            border-top-left-radius: 2px;
            border-bottom-left-radius: 2px;
            margin-left: -10px
        }

        .gg-log-out::after,
        .gg-log-out::before {
            content: "";
            display: block;
            box-sizing: border-box;
            position: absolute
        }

        .gg-log-out::after {
            border-top: 2px solid;
            border-left: 2px solid;
            transform: rotate(-45deg);
            width: 8px;
            height: 8px;
            left: 4px;
            bottom: 2px
        }

        .gg-log-out::before {
            border-radius: 3px;
            width: 10px;
            height: 2px;
            background: currentColor;
            left: 5px;
            bottom: 5px
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li>
                <div class="home-icon">
                    <div class="roof">
                        <div class="roof-edge"></div>
                    </div>
                    <div class="front"></div>
                </div>
            </li>
            <li>
                <div class="work-icon">
                    <div class="paper"></div>
                    <div class="lines"></div>
                    <div class="lines"></div>
                    <div class="lines"></div>
                </div>
            </li>
            <li>
                <div class="about-icon">
                    <div class="head">
                        <div class="eyes"></div>
                        <div class="beard"></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="mail-icon">
                    <div class="mail-base">
                        <div class="mail-top"></div>
                    </div>
                </div>
            </li>
            <li>
                <div><i class="gg-profile"></i></div>
                </div>
                </div>
            </li>
            <li>
                <div><i class="gg-log-out"></i></div>
                </div>
                </div>
            </li>
        </ul>
    </nav>
</body>

</html>