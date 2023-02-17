<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="">
    <style>
        html {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    grid-auto-flow: column;
}

.admin-container {
    display: grid;
    grid-template: 0.5fr 4fr / 0.5fr 1.5fr 1.5fr 1fr;
}

/* SIDEBAR ITEMS SIDEBAR ITEMS SIDEBAR ITEMS SIDEBAR ITEMS SIDEBAR ITEMS SIDEBAR ITEMS SIDEBAR ITEMS SIDEBAR ITEMS SIDEBAR ITEMS */

.sidebar {
    display: grid;
    grid-template-rows: 1fr 1fr / 1fr; 
    background-color: #38bdf8;
    color: #fafaf9;
    grid-column: 1;
    grid-row: 1/ 4;
    width: minmax(300px, 1fr);
    justify-content: start;
    align-items: start;
    padding: 15px;
}

.sidebar-top {
    grid-row: 1;
    grid-column: 1;
    display: grid;
    grid-template-rows: repeat(8, 1fr);
}

.sidebar-bottom {
    grid-row: 2;
    grid-column: 1;
    display: grid;
    grid-template-rows: repeat(3, 1fr);
}

.svg-icon {
    width: 25px;
    height: 25px;
    display: grid;
    grid-row: 1;
    grid-column: 1;
    justify-items: start;
    padding-left: 5px;
}

.sidebar-text {
    grid-row: 1;
    grid-column: 1;
    display: grid;
    width: 120px;
    justify-items: end;
    padding-left: 15px;
    padding-right: 15px;
}

.dashboard, .home-page, .profile-page, .messages-page, .history-page, .tasks-page, .communities-page {
    display: grid;
    height: 40px;
    align-items: center;
}

.settings-page, .support-page, .privacy-page {
    display: grid;
    height: 40px;
    align-items: center;
}

/* ICON IMGS ICON IMGS ICON IMGS ICON IMGS ICON IMGS ICON IMGS ICON IMGS ICON IMGS ICON IMGS ICON IMGS ICON IMGS ICON IMGS ICON IMGS */

.svg-icon {
    filter: invert(91%) sepia(0%) saturate(4216%) hue-rotate(130deg) brightness(107%) contrast(105%);
}

.star-it, .watch-it, .share-it {
    filter: invert(76%) sepia(27%) saturate(246%) hue-rotate(176deg) brightness(83%) contrast(79%);
}

/* TOP BANNER ITEMS TOP BANNER ITEMS TOP BANNER ITEMS TOP BANNER ITEMS TOP BANNER ITEMS TOP BANNER ITEMS TOP BANNER ITEMS TOP BANNER ITEMS */

.header {
    background-color: #fafaf9;
    grid-row: 1 / 2;
    grid-column: 2 / 5;
    height: 165px;
}

.header-top {
    display: grid;
    grid-template: 1fr / 1fr 1fr 3fr 1fr 1fr;
    padding: 10px;
}

.header-top-imgs {
    width: 25px;
    height: 25px;
}

#search-icon {
    grid-column: 1;
    justify-self: end;
    align-self: center;
    padding-right: 15px;
}

.search-bar {
    grid-column: 2 / 4;
    height: 20px;
    justify-self: stretch;
    align-self: center;
    border-radius: 10px;
    box-shadow: 0.5px 0.5px 0.5px #292524;
    background-color: #e2e8f0;
}

#notification-icon {
    grid-column: 4;
    justify-self: end;
    align-self: center;
    padding-left: 50px;
}

.profile-img-header-top {
    grid-column: 5;
    width: 60px;
    height: 60px;
    justify-self: center;
    align-self: center;
    border-radius: 50%;
}

.profile-name-header-top {
    grid-column: 6;
    justify-self: start;
    align-self: center;
    padding-right: 50px;
    color: #292524;
}

/* BOTTOM BANNER ITEMS BOTTOM BANNER ITEMS BOTTOM BANNER ITEMS BOTTOM BANNER ITEMS BOTTOM BANNER ITEMS BOTTOM BANNER ITEMS */

.header-bottom {
    display: grid;
    grid-template: 1fr / 1fr 2fr 1.5fr 1fr 1fr 1fr;
}

.profile-img-header-bottom {
    width: 75px;
    height: 75px; 
    border-radius: 50%;
    grid-row: 1;
    grid-column: 1;
    justify-self: center;
    align-self: center;
}

#welcome-message {
    justify-self: center;
    align-self: center;
    grid-row: 1;
    grid-column: 2;
}

.welcome-text {
    color: #292524;
}

#new-post {
    justify-self: center;
    align-self: center;
    grid-row: 1;
    grid-column: 4;
}

#upload-img {
    justify-self: center;
    align-self: center;
    grid-row: 1;
    grid-column: 5;
}

#share-post {
    justify-self: center;
    align-self: center;
    grid-row: 1;
    grid-column: 6;
}

.header-btn {
    width: 150px;
    height: 40px;
    border-radius: 10px;
    background-color: #38bdf8;
    color: #292524;
    font-size: 1rem;
    border: 1px solid #e2e8f0;
}

/* MAIN DISPLAY ITEMS MAIN DISPLAY ITEMS MAIN DISPLAY ITEMS MAIN DISPLAY ITEMS MAIN DISPLAY ITEMS MAIN DISPLAY ITEMS MAIN DISPLAY ITEMS */

.main-menu {
    background-color: #e2e8f0;
    grid-row: 2;
    grid-column: 2 / 5;
    display: grid;
    grid-template: 10px 1fr/ 1fr 1fr 1fr;
}

.projects {
    grid-row: 1;
    grid-column: span 2;
    display: grid;
    grid-template: 1fr 1fr / 1fr 1fr;
    padding: 15px;
    gap: 15px;
}

.projects-text {
    justify-self: start;
    align-self: start;
    grid-row: 1;
    grid-column: span 2;
    height: 10px;
    color: #292524;
}

.boxes {
    display: grid;
    background-color: #fbbf24;
    color: #292524;
    border-radius: 10px;
    box-shadow: 2px 2px 2px #292524;
    padding-left: 15px;
    background-image: linear-gradient(-90deg, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #fafaf9, #38bdf8);
    background-clip: border-box, padding-box, content-box;
}

.box-icons {
    justify-self: end;
    padding-right: 10px;
}

/* SOCIALS BAR ITEMS SOCIALS BAR ITEMS SOCIALS BAR ITEMS SOCIALS BAR ITEMS SOCIALS BAR ITEMS SOCIALS BAR ITEMS SOCIALS BAR ITEMS */

.socials-bar {
    display: grid;
    grid-template: 5px 1fr 1fr / 1fr;
    padding: 15px;
    width: minmax(200px, 1fr);
    background-color: #e2e8f0;
}

.announcements {
    display: grid;
    grid-template-rows: 0.2fr 0.2fr 0.2fr;
    grid-row: 2;
    grid-column: 1;
    gap: 15px;
}

.announcements-text {
    justify-self: start;
    align-self: start;
    grid-row: 1;
    grid-column: 1;
    color: #292524;
    height: 5px;
}

.announcements-paragraphs-text {
    display: grid;
    line-height: 15px;
    align-items: center;
    justify-items: center;
    height: 5px;
    padding-top: 5px;
    margin: 6px;
}

.annoucements-boxes {
    color: #292524;
    background-color: #fafaf9;
    color: #292524;
    border-radius: 10px;
    width: 2fr;
    height: 50px;
    font-size: 12px;
    font-weight: 700;
    box-shadow: 1.5px 1.5px 1.5px #292524;
}

.trending {
    display: grid;
    grid-row: 3;
    grid-column: 1;
    grid-template-rows: repeat(6, 0.2fr);
}

.trending-text {
    color: #292524;
}

.trending-profiles {
    color: #292524;
    display: grid;
    grid-template: 1fr / 0.3fr 1fr;
    align-items: center;
    justify-items: start;
    justify-content: start;
    background-color: #fafaf9;
    width: minmax(150px, auto);
    padding-left: 15px;
}

.profile-img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="sidebar">
            <div class="sidebar-top">
                <div class="dashboard">
                    <img class="svg-icon" src="./SVGs/dashboard.svg">
                    <p class="sidebar-text">Dashboard</p>
                </div>

                <div class="home-page">
                    <img class="svg-icon" src="./SVGs/home.svg">
                    <p class="sidebar-text">Home</p>
                </div>

                <div class="profile-page">
                    <img class="svg-icon" src="./SVGs/account.svg">
                    <p class="sidebar-text">Profile</p>
                </div>

                <div class="messages-page">
                    <img class="svg-icon" src="./SVGs/messages.svg">
                    <p class="sidebar-text">Messages</p>
                </div>

                <div class="history-page">
                    <img class="svg-icon" src="./SVGs/history.svg">
                    <p class="sidebar-text">History</p>
                </div>

                <div class="tasks-page">
                    <img class="svg-icon" src="./SVGs/tasks.svg">
                    <p class="sidebar-text">Tasks</p>
                </div>

                <div class="communities-page">
                    <img class="svg-icon" src="./SVGs/communities.svg">
                    <p class="sidebar-text">Communities</p>
                </div>
            </div>

            <div class="sidebar-bottom">
                <div class="settings-page">
                    <img class="svg-icon" src="./SVGs/settings.svg">
                    <p class="sidebar-text">Settings</p>
                </div>

                <div class="support-page">
                    <img class="svg-icon" src="./SVGs/help.svg">
                    <p class="sidebar-text">Support</p>
                </div>

                <div class="privacy-page">
                    <img class="svg-icon" src="./SVGs/security.svg">
                    <p class="sidebar-text">Privacy</p>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-top">
                <img class="header-top-imgs" id="search-icon" src="./SVGs/seach-icon-img.svg">
                <input type="text" class="search-bar">
                <img class="header-top-imgs" id="notification-icon" src="./SVGs/notification-bell-img.svg">
                <img class="profile-img-header-top" src="./profile-template-imgs/profile-img-header-top.jpg">
                <p class="profile-name-header-top">Andrew Dutson</p>
            </div>

            <div class="header-bottom">
                <img class="profile-img-header-bottom" src="./profile-template-imgs/profile-img-header-top.jpg">
                <div id="welcome-message">
                    <p class="welcome-text">Hi there,</p>
                    <p class="welcome-text">Andrew Dutson (@DutsAndrew)</p>
                </div>
                <button id="new-post" class="header-btn">New</button>
                <button id="upload-img" class="header-btn">Upload</button>
                <button id="share-post" class="header-btn">Share</button>
            </div>
        </div>

        <div class="main-menu">
            <div class="projects">
                <p class="projects-text"><strong>Your Projects</strong></p>

                <div id="box1" class="boxes">
                    <p class="box1-header"><strong>Website Landing Page</strong></p>
                    <p class="box1-text">TOP project to display CSS and HTML skills in designing a landing page</p>
                    <div class="box-icons">
                        <img class="star-it" src="./SVGs/star-it.svg">
                        <img class="watch-it" src="./SVGs/eye-it.svg">
                        <img class="share-it" src="./SVGs/share-variant.svg">
                    </div>
                </div>

                <div id="box2" class="boxes">
                    <p class="box2-header"><strong>Odin Recipes</strong></p>
                    <p class="box2-text">TOP project to display HTML attribute, img, and linking to items</p>
                    <div class="box-icons">
                        <img class="star-it" src="./SVGs/star-it.svg">
                        <img class="watch-it" src="./SVGs/eye-it.svg">
                        <img class="share-it" src="./SVGs/share-variant.svg">
                    </div>
                </div>

                <div id="box3" class="boxes">
                    <p class="box3-header"><strong>Rock-Paper-Scissors Game</strong></p>
                    <p class="box3-text">TOP project to display a basic understanding of JavaScript</p>
                    <div class="box-icons">
                        <img class="star-it" src="./SVGs/star-it.svg">
                        <img class="watch-it" src="./SVGs/eye-it.svg">
                        <img class="share-it" src="./SVGs/share-variant.svg">
                    </div>
                </div>

                <div id="box4" class="boxes">
                    <p class="box4-header"><strong>Etch-a-Sketch</strong></p>
                    <p class="box4-text">TOP project to demonstrate a intermediate level of understanding of JavaScript and practice manipulating elements in the DOM</p>
                    <div class="box-icons">
                        <img class="star-it" src="./SVGs/star-it.svg">
                        <img class="watch-it" src="./SVGs/eye-it.svg">
                        <img class="share-it" src="./SVGs/share-variant.svg">
                    </div>
                </div>

                <div id="box5" class="boxes">
                    <p class="box5-header"><strong>Calculator</strong></p>
                    <p class="box5-text">An intermediate level TOP project to demonstrate a well rounded approach to creating an application with HTML, CSS, and JavaScript.</p>
                    <div class="box-icons">
                        <img class="star-it" src="./SVGs/star-it.svg">
                        <img class="watch-it" src="./SVGs/eye-it.svg">
                        <img class="share-it" src="./SVGs/share-variant.svg">
                    </div>
                </div>

                <div id="box6" class="boxes">
                    <p class="box6-header"><strong>Sign-up Form</strong></p>
                    <p class="box6-text">An intermediate project to using input tags in HTML and brushing up on some CSS at the same time.</p>
                    <div class="box-icons">
                        <img class="star-it" src="./SVGs/star-it.svg">
                        <img class="watch-it" src="./SVGs/eye-it.svg">
                        <img class="share-it" src="./SVGs/share-variant.svg">
                    </div>
                </div>
            </div>

            <div class="socials-bar">
                <div class="announcements">
                        <p class="announcements-text"><strong>Announcements</strong></p>

                        <div class="announcements-box">
                            <div id="site-maintenance-box" class="annoucements-boxes">
                                <p id="site-maintenance-header" class="announcements-paragraphs-text"><strong>Site Maintenance</strong></p>
                                <p id="site-maintenance-text" class="announcements-paragraphs-text">The site will be undergoing maintenance from 13:00-17:00 EST</p>
                            </div>

                            <div id="patch-updates-box" class="annoucements-boxes">
                                <p id="patch-updates-header" class="announcements-paragraphs-text"><strong>Patch Updates</strong></p>
                                <p id="patch-updates-text" class="announcements-paragraphs-text">Update 3.0.1 is now live, read the patch notes here.</p>
                            </div>

                            <div id="privacy-policy-box" class="annoucements-boxes">
                                <p id="privacy-policy-header" class="announcements-paragraphs-text"><strong>Privacy Policy</strong></p>
                                <p id="privacy-policy-text" class="announcements-paragraphs-text">Updated security measures have been added.</p>
                            </div>
                        </div>
                

                <div class="trending">
                    <p class="trending-text"><strong>Trending</strong></p>

                        <div id="profile-1" class="trending-profiles">
                            <img class="profile-img" src="./profile-template-imgs/profile-template-img-1.jpg">
                            <div class="profile-text">
                                <p class="profile-handle">@Megan</p>
                                <p class="profile-name">Photographer</p>
                            </div>
                        </div>

                        <div id="profile-2" class="trending-profiles">
                            <img class="profile-img" src="./profile-template-imgs/profile-template-img-2.jpg">
                            <div class="profile-text">
                                <p class="profile-handle">@Jonathan</p>
                                <p class="profile-name">Baker</p>
                            </div>
                        </div>

                        <div id="profile-3" class="trending-profiles">
                            <img class="profile-img" src="./profile-template-imgs/profile-template-img-3.jpg">
                            <div class="profile-text">
                                <p class="profile-handle">@Alicia</p>
                                <p class="profile-name">Civil Engineer</p>
                            </div>
                        </div>

                        <div id="profile-4" class="trending-profiles">
                            <img class="profile-img" src="./profile-template-imgs/profile-template-img-4.jpg">
                            <div class="profile-text">
                                <p class="profile-handle">@Bob</p>
                                <p class="profile-name">Warehouse Manager</p>
                            </div>
                        </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>