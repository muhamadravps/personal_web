<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
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
    <style>
        .header{
                width: 100%;
                height: 50px;
                background: #5000ca;
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
        .swiper{
        width: 950px;
        }

        .card{
        position: relative;
        background: #fff;
        border-radius: 20px;
        margin: 20px 0;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .card::before{
        content: "";
        position: absolute;
        height: 40%;
        width: 100%;
        background: #7d2ae8;
        border-radius: 20px 20px 0 0;
        }

        .card .card-content{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px;
        position: relative;
        z-index: 100;
        }

        section .card .image{
        height: 140px;
        width: 140px;
        border-radius: 50%;
        padding: 3px;
        background: #7d2ae8;
        }

        section .card .image img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #fff;
        }

        .card .media-icons{
        position: absolute;
        top: 10px;
        right: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        }

        .card .media-icons i{
        color: #fff;
        opacity: 0.6;
        margin-top: 10px;
        transition: all 0.3s ease;
        cursor: pointer;
        }

        .card .media-icons i:hover{
        opacity: 1;
        }

        .card .name-profession{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 10px;
        } 

        .name-profession .name{
        font-size: 20px;
        font-weight: 600;
        }

        .name-profession .profession{
        font-size:15px;
        font-weight: 500;
        }

        .card .rating{
        display: flex;
        align-items: center;
        margin-top: 18px;
        }

        .card .rating i{
        font-size: 18px;
        margin: 0 2px;
        color: #7d2ae8;
        }

        .card .button{
        width: 100%;
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
        }

        .card .button button{
        background: #7d2ae8;
        outline: none;
        border: none;
        color: #fff;
        padding: 8px 22px;
        border-radius: 20px;
        font-size: 14px;
        transition: all 0.3s ease;
        cursor: pointer;
        }

        .button button:hover{
        background: #6616d0;
        }

        .swiper-pagination{
        position: absolute;
        }

        .swiper-pagination-bullet{
        height: 7px;
        width: 26px;
        border-radius: 25px;
        background: #7d2ae8;
        }

        .swiper-button-next, .swiper-button-prev{
        opacity: 0.7;
        color: #7d2ae8;
        transition: all 0.3s ease;
        }
        .swiper-button-next:hover, .swiper-button-prev:hover{
        opacity: 1;
        color: #7d2ae8;
        }

    </style>
    <section class="home">
        <div class="text"></div>
        <div class="header">My Project</div>
        <div class="swiper mySwiper container">
      <div class="swiper-wrapper content">

        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
            <a href="https://github.com/ravoffc"><img src="assets/img/Online-shop.jpg" alt=""></a>
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <a href="https://api.whatsapp.com/send?phone=6285607225563"><i class="fab fa-whatsapp"></i></a>
              <a href="https://github.com/ravoffc"><i class="fab fa-github"></i></a>
            </div>

            <div class="name-profession">
              <span class="name">Online Shop</span>
              <span class="profession">Software Engineering</span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>

            <div class="button">
            <a href="index.php"><button class="aboutMe">About Me</button></a>
            <a href="contact.php"><button class="hireMe">Contact Me</button></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
            <a href="https://github.com/ravoffc"><img src="assets/img/fb.png" alt=""></a>
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <a href="https://api.whatsapp.com/send?phone=6285607225563"><i class="fab fa-whatsapp"></i></a>
              <a href="https://github.com/ravoffc"><i class="fab fa-github"></i></a>
            </div>

            <div class="name-profession">
              <span class="name">Style Facebook</span>
              <span class="profession">Web Designer</span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>

            <div class="button">
            <a href="index.php"><button class="aboutMe">About Me</button></a>
            <a href="contact.php"><button class="hireMe">Contact Me</button></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
            <a href="https://github.com/ravoffc"><img src="assets/img/lg.png" alt=""></a>
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <a href="https://api.whatsapp.com/send?phone=6285607225563"><i class="fab fa-whatsapp"></i></a>
              <a href="https://github.com/ravoffc"><i class="fab fa-github"></i></a>
            </div>

            <div class="name-profession">
              <span class="name">Form Login</span>
              <span class="profession">Software Engineering</span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>

            <div class="button">
            <a href="index.php"><button class="aboutMe">About Me</button></a>
            <a href="contact.php"><button class="hireMe">Contact Me</button></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
            <a href="https://github.com/ravoffc"><img src="assets/img/ci.png" alt=""></a>
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <a href="https://api.whatsapp.com/send?phone=6285607225563"><i class="fab fa-whatsapp"></i></a>
              <a href="https://github.com/ravoffc"><i class="fab fa-github"></i></a>
            </div>

            <div class="name-profession">
              <span class="name">Code Igniter</span>
              <span class="profession">Software Engineering</span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>

            <div class="button">
            <a href="index.php"><button class="aboutMe">About Me</button></a>
            <a href="contact.php"><button class="hireMe">Contact Me</button></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
            <a href="https://github.com/ravoffc"><img src="assets/img/fr.png" alt=""></a>
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <a href="https://api.whatsapp.com/send?phone=6285607225563"><i class="fab fa-whatsapp"></i></a>
              <a href="https://github.com/ravoffc"><i class="fab fa-github"></i></a>
            </div>

            <div class="name-profession">
              <span class="name">Crud Firebase</span>
              <span class="profession">Software Engineering</span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>

            <div class="button">
            <a href="index.php"><button class="aboutMe">About Me</button></a>
            <a href="contact.php"><button class="hireMe">Contact Me</button></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
            <a href="https://github.com/ravoffc"><img src="assets/img/rs.jpg" alt=""></a>
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <a href="https://api.whatsapp.com/send?phone=6285607225563"><i class="fab fa-whatsapp"></i></a>
              <a href="https://github.com/ravoffc"><i class="fab fa-github"></i></a>
            </div>

            <div class="name-profession">
              <span class="name">Rest Api</span>
              <span class="profession">Software Engineering</span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>

            <div class="button">
            <a href="index.php"><button class="aboutMe">About Me</button></a>
            <a href="contact.php"><button class="hireMe">Contact Me</button></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="assets/img/dp.webp" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <a href="https://api.whatsapp.com/send?phone=6285607225563"><i class="fab fa-whatsapp"></i></a>
              <a href="https://github.com/ravoffc"><i class="fab fa-github"></i></a>
            </div>

            <div class="name-profession">
              <span class="name">Deployments</span>
              <span class="profession">Web Developer</span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>

            <div class="button">
            <a href="index.php"><button class="aboutMe">About Me</button></a>
            <a href="contact.php"><button class="hireMe">Contact Me</button></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <a href="https://github.com/ravoffc"><img src="assets/img/wp.jpg" alt=""></a>
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <a href="https://api.whatsapp.com/send?phone=6285607225563"><i class="fab fa-whatsapp"></i></a>
              <a href="https://github.com/ravoffc"><i class="fab fa-github"></i></a>
            </div>

            <div class="name-profession">
              <span class="name">Novel</span>
              <span class="profession">Novelis</span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>

            <div class="button">
            <a href="index.php"><button class="aboutMe">About Me</button></a>
            <a href="contact.php"><button class="hireMe">Contact Me</button></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <a href="https://github.com/ravoffc"><img src="assets/img/at.png" alt=""></a>
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <a href="https://api.whatsapp.com/send?phone=6285607225563"><i class="fab fa-whatsapp"></i></a>
              <a href="https://github.com/ravoffc"><i class="fab fa-github"></i></a>
            </div>

            <div class="name-profession">
              <span class="name">Sketsa & design</span>
              <span class="profession">artistic</span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>

            <div class="button">
              <a href="index.php"><button class="aboutMe">About Me</button></a>
              <a href="contact.php"><button class="hireMe">Contact Me</button></a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#5000ca" fill-opacity="1" d="M0,128L48,128C96,128,192,128,288,138.7C384,149,480,171,576,192C672,213,768,235,864,224C960,213,1056,171,1152,176C1248,181,1344,235,1392,261.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
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
