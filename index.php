<?php

$conn = mysqli_connect('localhost', 'root','','contact_db') or die('Connection failed');

if (isset($_POST['send'])) {
   
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name'
    AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already!';
    }else{
        mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES
        ('$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}

 ?>

<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Portfolio</title>  

    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- aos css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

 </head>
 <body>

 <?php

if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message" data-aos="zoom-out">
          <span>'.$message.'</span>
          <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}

?>


<!-- header start-->
<header class="header">

<div id="menu-btn" class="fas fa-bars"></div>

<a href="#home" class="logo">Porfolio</a>

<nav class="navbar">
    <a href="#home" class="active">home</a>
    <a href="#about">about</a>
    <a href="#services">services</a>
    <a href="#portfolio">portfolio</a>
    <a href="#contact">contact</a>
</nav>

<div class="follow">
    <a href="#" class="fab fa-facebook-f"></a>
    <a href="#" class="fab fa-instagram"></a>
    <a href="#" class="fab fa-twitter"></a>
</div>

</header>
<!-- header ends-->

<!-- home starts -->
<section class="home" id="home">

    <div class="image" data-aos="fade-right">
       <img src="images/user.jpg" alt="">
    </div>

    <div class="content">
        <h3 data-aos="fade-up">HI, I AM JONNAH MAE TURIAO</h3>
        <span data-aos="fade-up">Web developer</span>
        <p data-aos="fade-up">A dedicated web development student specializing in HTML, CSS, JavaScript, and PHP. With a solid foundation in both front-end and back-end technologies, I am committed to crafting responsive, user-friendly websites. My problem-solving abilities and continuous drive for improvement make me a reliable and innovative developer. I look forward to collaborating with clients to deliver high-quality web solutions that meet their needs and exceed their expectations.

</p>
        <a data-aos="fade-up" href="#about" class="btn">About me</a>
    </div>

</section>
<!-- home ends -->

<!-- about starts -->
<section class="about" id="about">
    <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

    <div class="biography" data-aos="fade-up">
        <p data-aos="fade-up">A web development student proficient in HTML, CSS, JavaScript, and PHP. Passionate about creating user-friendly websites, I'm committed to continuous learning and innovation. Let's build something amazing together!</p>

        <div class="bio">
            <h3 data-aos="zoom-in"> <span>name : </span> Jonnah Mae Turiao </h3>
            <h3 data-aos="zoom-in"> <span>email : </span> jonnahmaeturiao@gmail.com </h3>
            <h3 data-aos="zoom-in"> <span>address : </span> Mankilam, Tagum City</h3>
            <h3 data-aos="zoom-in"> <span>phone : </span> 09460509903</h3>
            <h3 data-aos="zoom-in"> <span>age : </span> 19 years </h3>
            <h3 data-aos="zoom-in"> <span>experience : </span> 1 years</h3>
        </div>

        <a href="projects/resume.html" class="btn" data-aos="fade-up"> See Resume</a>

    </div>

    <div class="skills" data-aos="fade-up">

       <h1 class="heading"> <span>skills</span> </h1>

       <div class="progress">
        <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>100%</span></h3> </div>
        <div class="bar" data-aos="fade-right"> <h3></head><span>CSS</span> <span>90%</span></h3> </div>
        <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>60%</span></h3> </div>
        <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>65%</span></h3> </div>
       </div>
    
    </div>

    <div class="edu-exp">

        <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>
        
        <div class="row">

           <div class="box-container">
              <h3 class="title" data-aos="fade-right">education</h3>

              <div class="box" data-aos="fade-right">
                <span>( 2022 - 2023 )</span>
                <h3>web developer</h3>
                <p>Studied web development at UMTC, learning HTML, CSS, JavaScript, and PHP. Developed several projects, including a personal portfolio website and a dynamic web application.</p>
              </div>
          

           <div class="box" data-aos="fade-right">
                <span>( 2022 - 2023 )</span>
                <h3>web designer</h3>
                <p>Expanded skills in web design through online courses and practical projects. Developed expertise in UI/UX design principles, responsive design, and Adobe Creative Suite.</p>
              </div>

           </div>

           <div class="box-container">
              <h3 class="title"  data-aos="fade-left">experience</h3>

              <div class="box" data-aos="fade-left">
                <span>( 2022 - 2023 )</span>
                <h3>front-end developer</h3>
                <p>Worked as a front-end developer intern at XYZ Tech, collaborating with a team to build and maintain client websites. Implemented responsive designs and optimized website performance.</p>
              </div>
         

           <div class="box" data-aos="fade-left">
                <span>( 2022 - 2023 )</span>
                <h3>back-end developer</h3>
                <p>Gained experience in back-end development as a freelance developer, building custom web applications using PHP and MySQL. Designed and implemented database structures and APIs.</p>
              </div>
              
           </div>

        </div>

    </div>

</section>
<!-- about ends -->

<!-- services starts -->
<section class="services" id="services">

   <h1 class="heading" data-aos="zoom-in"> <span>services</span> </h1>

   <div class="box-container">

     <div class="box" data-aos="zoom-in">
       <i class="fas fa-code"></i>
       <h3>web development</h3>
       <p>From simple landing pages to complex web applications, I specialize in creating dynamic and responsive websites tailored to your needs. Using the latest technologies like HTML5, CSS3, JavaScript, and PHP, I ensure your website is fast, secure, and user-friendly.</p>
     </div>

     <div class="box" data-aos="zoom-in">
       <i class="fas fa-paint-brush"></i>
       <h3>Graphic Design</h3>
       <p>Elevate your brand with eye-catching visuals and compelling graphic designs. Whether it's designing logos, creating infographics, a report presentations, banners, or social media graphics, I combine creativity with strategic thinking to create designs that captivate and engage your audience.</p>
     </div>

     <div class="box" data-aos="zoom-in">
       <i class="fas fa-bootstrap"></i>
       <h3>bootstrap</h3>
       <p>Utilize the power of Bootstrap to create responsive and mobile-first websites with ease. I leverage Bootstrap's extensive library of CSS and JavaScript components to build modern and visually appealing interfaces that adapt seamlessly to different screen sizes and devices.</p>
     </div>

     <div class="box" data-aos="zoom-in">
       <i class="fas fa-chart-line"></i>
       <h3>seo marketing</h3>
       <p>Improve your website's visibility and ranking on search engine results pages (SERPs) with effective SEO strategies. From keyword research to on-page optimization, I employ proven techniques to attract organic traffic and enhance your online presence.</p>
     </div>

     <div class="box" data-aos="zoom-in">
       <i class="fas fa-bullhorn"></i>
       <h3>digital marketing</h3>
       <p>Reach your target audience and drive conversions with targeted digital marketing campaigns. From social media advertising to email marketing, I help businesses connect with their customers and achieve their marketing goals through strategic digital initiatives.</p>
     </div>

     <div class="box" data-aos="zoom-in">
       <i class="fas fa-wordpress"></i>
       <h3>wordpress</h3>
       <p>Unlock the power of WordPress to create stunning and functional websites with ease. Whether you need a blog, e-commerce site, I leverage WordPress's flexibility and scalability to deliver customized solutions that meet your specific requirements.</p>
     </div>

   </div>

</section>
<!-- services ends -->


<!-- porfolio starts -->
<section class="portfolio" id="portfolio">

<h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

<div class="box-container">

    <div class="box" data-aos="zoom-in">
        <a href="projects/Pacific">
           <img src="images/one.png" alt="">
        </a>

           <h3>Pacific Trail Resort</h3>

        <span>( 2022-2023 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="projects/Silver_Castle">
           <img src="images/two.png" alt="">
        </a>

        <h3>Silver Castle Resort</h3>

        <span>( 2022-2023 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="projects/printing">
          <img src="images/three.jpg" alt="">
        </a>

        <h3>Printing Xpress Shop</h3>

        <span>( 2023-2024 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="projects/Dice_Game">
          <img src="images/four.jpg" alt="">
        </a>

        <h3>Dice Game</h3>

        <span>( 2023-2024 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="projects/resume.html">
          <img src="images/resume.png" alt="">
        </a>

        <h3>Resume</h3>

        <span>( 2022-2023 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="projects/ShoppingCart/cart.html">
          <img src="images/cart.jpg" alt="">
        </a>

        <h3>Shop Cart</h3>

        <span>( 2023-2024 )</span>
    </div>



</div>
</section>
<!-- porfolio ends -->


<!-- contact starts -->
<section class="contact" id="contact">

    <h1 class="heading" data-aos="fade-up"> <span> Contact me</span> </h1>

    <form action="" method="post">
        <div class="flex">
            <input data-aos="fade-right" type="text" name="name" placeholder="Enter your name" class="box" required>
            <input data-aos="fade-left" type="email" name="email" placeholder="Enter your email" class="box" required>
        </div>
        <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Enter your number" class="box" required>
        <textarea data-aos="fade-up" name="message"  class="box" required placeholder="Enter your message" cols="30" rows="10"></textarea>
        <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
    </form>

    <div class="box-container">
       
      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>09460509903</p>
        </div>

        <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>jonnahmaeturiao@gmail.com</p>
        </div>

        <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Mankilam, Tagum City - 8100</p>
        </div>

     </div>

</section>
<!-- contact ends -->

<div class="credit"> &copy; copyright <?php echo date('Y'); ?> by <span> Ms. Jonnah</span></div>











<!-- custom js file link -->
<script src="js/script.js"></script>

<!-- aos js link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        delay: 300
    })
</script>
    
</body>
</html>