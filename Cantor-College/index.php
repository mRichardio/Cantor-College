<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cantor College | Home</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link
    rel="stylesheet"
    href="css/desktop.css"
    media="only screen and (min-width : 720px)"
    />
</head>
<body>
<?php
include("includes/header.php");
?>
<div class="mainContainer">
    <main>
        <section>
            <div class ="page">
                <div class="carousel-container">
                        <img src="" alt="Carousel of images" id="myImages" />
                        <button class="apply-button">Apply Now</button>
                </div>
                <div class="featured-content">
                    <h2>Featured Content</h2>
                    <div class="content-item">
                        <img src="images/featured-computing-two.webp" alt="Featured Content One">
                        <div class="featured-info">
                            <h2>Computing Courses</h2>
                            <p> The College offers a range of courses to suit applicants with varying backgrounds and educational abilities.
                                At undergraduate level, there are single BSc Honours Degree courses in Computing, Computer Networks,
                                Software Engineering and Cyber Security with Forensics amongst others.</p>
                            <p>The College teaches undergraduate and postgraduate courses in a wide range of specialisms,
                                including computer science, software development, information systems, networking and software engineering.
                                It is at the heart of a passionate computing community, including student societies devoted to games
                                development, digital forensics and programming.</p>
                            <p>The courses are British Computer Society accredited and are highly relevant to modern industry.
                                They are designed to prepare students for professional occupations in Computing and related fields.
                                Many graduates continue their studies to pursue a higher degree such as an MSc. or PhD.</p>
                        </div>
                    </div>
                    <div class="content-item">
                        <img src="images/featured-design.webp" alt="Featured Content Two">
                        <div class="featured-info">
                            <h2>Design Courses</h2>
                            <p>The College is an internationally connected creative community of diverse disciplines housed under one roof.
                                We shape our students' futures, preparing them to shape the world through applied knowledge and creativity.</p>
                            <p>The College's art and design courses don't just train you, they promote alternative ways of thinking,
                                making and communicating; they provide you with space, tools and inspiration to develop your creative
                                practice and a clear career path. You'll get expert teaching from active practitioners and researchers
                                who will encourage you to adopt innovative and resourceful approaches that both perceive and create opportunities for better lives.</p>
                            <p>You’ll develop your creative practice whilst interacting with your peers in well-equipped studios, making and digital workshops.
                                At the same time, you'll learn professional skills by working on applied briefs facilitated through our links with commercial clients,
                                cultural institutions, businesses and organisations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<?php 
include("includes/footer.php");
?>
<script src="javascript/main.js"></script>
</body>
</html>
