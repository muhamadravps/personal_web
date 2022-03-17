<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>ravoffc</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="assets/img/logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">ravoffc</span>
                    <span class="profession">Software Engineering</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                            <i class='bx bxs-user-circle icon'></i>
                            <span class="text nav-text">About</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="home.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="project.php">
                            <i class='bx bx-code-alt icon'></i>
                            <span class="text nav-text">Project</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="contact.php">
                            <i class='bx bxs-conversation icon'></i>
                            <span class="text nav-text">Contact</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                    <i class='bx bx-log-in icon' ></i>
                        <span class="text nav-text">Login</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
    <div class="text"></div>
        <style>
            .wrapper .header{
                width: 100%;
                height: 50px;
                background: #ff5500;
                color: #fff;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 20px;
                text-transform: uppercase;
                letter-spacing: 5px;
                font-weight: 900;
            }

            .cards_wrap{
                padding: 20px;
                width: 100%;
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }

            .cards_wrap .card_item{
                padding: 15px 25px;
                width: 25%;
            }

            .cards_wrap .card_inner{
                background: #fff;
                border-radius: 5px;
                padding: 35px 20px;
                min-width: 225px;
                min-height: 315px;
                max-height: 370px;
                width: 100%;
            }

            .cards_wrap .card_item img{
                width: 80px;
                height: 80px;
                margin-bottom: 5px;
            }

            .cards_wrap .card_item .role_name{
                color: #e36686;
                font-weight: 900;
                letter-spacing: 2px;
                text-transform: uppercase;
                font-size: 20px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .cards_wrap .card_item .real_name{
                color: #b6c0c2;
                font-size: 12px;
                font-weight: 100;
                margin: 5px 0 10px;
            }

            .cards_wrap .card_item .film{
                font-size: 14px;
                line-height: 24px;
                color: #7b8ca0;
            }

            @media screen and (max-width: 1024px){
                .cards_wrap .card_item{
                    width: 33%;
                }
            }

            @media screen and (max-width: 768px){
                .cards_wrap .card_item{
                    width: 50%;
                }
                .wrapper .header{
                    font-size: 16px;
                    height: 60px;
                }
            }

            @media screen and (max-width: 568px){
                .cards_wrap .card_item{
                    width: 100%;
                }
                .wrapper .header{
                    font-size: 14px;
                }
            }
        </style>
        <div class="wrapper">
            <div class="header">HI, I'm ravoffc</div>

            <div class="cards_wrap">
                <div class="card_item">
                    <div class="card_inner">
                        <img src="assets/img/foto.png">
                        <div class="role_name">Black Panther</div>
                        <div class="real_name">Chadwick Boseman</div>
                        <div class="film">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                </div>
                <div class="card_item">
                    <div class="card_inner">
                        <img src="assets/img/foto.png">
                        <div class="role_name">Doctor Strange</div>
                        <div class="real_name">Benedict Cumberbatch</div>
                        <div class="film">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                </div>
                <div class="card_item">
                    <div class="card_inner">
                        <img src="assets/img/foto.png">
                        <div class="role_name">Doctor Strange</div>
                        <div class="real_name">Benedict Cumberbatch</div>
                        <div class="film">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                </div>
                <div class="card_item">
                    <div class="card_inner">
                        <img src="assets/img/foto.png">
                        <div class="role_name">Doctor Strange</div>
                        <div class="real_name">Benedict Cumberbatch</div>
                        <div class="film">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="footer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ff5500" fill-opacity="1" d="M0,64L48,74.7C96,85,192,107,288,144C384,181,480,235,576,240C672,245,768,203,864,165.3C960,128,1056,96,1152,101.3C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
        </div>
    </section>

    <script>
            const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>
