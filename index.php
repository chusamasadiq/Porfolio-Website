<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usama Sadiq | Personal Portfolio </title>

    <link rel="icon" href="images/Logo.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/style.css">



</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="images/Usama.png" alt="">
        <h3 class="name">Usama Sadiq</h3>
        <p class="post">Software Engineer</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#education">education</a></li>
            <li><a href="#portfolio">portfolio</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span>USAMA SADIQ</span></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio deserunt aspernatur fugiat minus enim ullam repudiandae sint sed magnam tenetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, at.
    </p>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>about</span> me </h1>

<div class="row">

    <div class="info">
        <h3> <span> name : </span> Usama Sadiq </h3>
        <h3> <span> age : </span> 22 </h3>
        <h3> <span> qualification : </span> BS Software Engineering </h3>
        <h3> <span> post : </span> Software Engineer &nbsp/&nbsp Web Developer </h3>
        <h3> <span> language : </span> English / Urdu </h3>
        <a href="https://drive.google.com/uc?export=download&id=1AcKSmd_BaS7k6DOpBCy4AiAup23B8sf5"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
    </div>

    <div class="counter">

        <div class="box">
            <span>2+</span>
            <h3>years of experience</h3>
        </div>

        <div class="box">
            <span>25+</span>
            <h3>porject completed</h3>
        </div>

        <div class="box">
            <span>100+</span>
            <h3>happy clients</h3>
        </div>

        <div class="box">
            <span>12+</span>
            <h3>awards won</h3>
        </div>

    </div>

</div>

</section>

<!-- about section ends -->

<!-- education section starts  -->

<section class="education" id="education">

<h1 class="heading"> my <span>education</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2022</span>
        <h3>BS Software Engineering</h3>
        <p>
            National Textile University, Faisalabad
        </p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2021</span>
        <h3>Full Stack Web Development</h3>
        <p>National Freelance Training Program</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2020</span>
        <h3>Microsoft Office Specialist</h3>
        <p>Microsoft Corporation Technology Company</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2019</span>
        <h3>Graphics Designing</h3>
        <p>Graphics Art & Science Academy, Faisalabad </p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2018</span>
        <h3>F.SC Pre - Engineering</h3>
        <p>Govt. PST Postgraduate College, Kamalia</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2016</span>
        <h3>Matric</h3>
        <p>Al Furqan Public High School, Kamalia </p>
    </div>

</div>

</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

<h1 class="heading"> my <span>portfolio</span> </h1>

<div class="box-container">

    <div class="box">
       <a href="https://shoppyzone.pk/" target="_blank"> <img src="images/Shoppyzone.png" alt=""> </a>
    </div>

    <div class="box">
        <img src="images/HMS.png" alt="">
    </div>

    <div class="box">
        <img src="images/MSMS.png" alt="">
    </div>

    <div class="box">
        <img src="images/GD.png" alt="">
    </div>

    <div class="box">
        <img src="images/Desktop.png" alt="">
    </div>

    <div class="box">
        <img src="images/Website Development.png" alt="">
    </div>

</div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> usamasadiq163@gmail.com </h3>
            <h3> <i class="fas fa-phone"></i> +92 334 6994830 </h3>
            <h3> <i class="fas fa-phone"></i> +92 314 6243829 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> kamalia, Pakistan - 36350. </h3>
        </div>

    </div>

    <form action="mail.php" method="POST">

        <input type="text" placeholder="name" class="box" name="name">
        <input type="email" placeholder="email" class="box" name="email">
        <input type="text" placeholder="project" class="box" name="project">
        <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message" name="message"></textarea>
        <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>

    </form>

</div>

</section>

<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>





<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="assets/script.js"></script>


</body>
</html>