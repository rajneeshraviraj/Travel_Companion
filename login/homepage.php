<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Companion</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <header>
        <a href="" class="logo"><span>T</span>ravel</a>
        
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="main.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Log-in</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Travel Companion
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/Mini Project/website/weather/weather.html">Weather</a></li>
                      <li><a class="dropdown-item" href="/Mini Project/website/Language Translator/lang.html">Language Translator</a></li>
                      <li><a class="dropdown-item" href="/Mini Project/website/Expense/expense.html">Expense Tracker</a></li>
                      <li><a class="dropdown-item" href="/Mini Project/website/To-Do List/to-do.html">To-Do List</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
        </nav>
    </header>

    <section class="home">
        <video class="video-slide active" src="1.mp4" autoplay muted loop></video>
        <video class="video-slide" src="2.mp4" autoplay muted loop></video>
        <video class="video-slide" src="3.mp4" autoplay muted loop></video>
        <video class="video-slide" src="4.mp4" autoplay muted loop></video>
        <video class="video-slide" src="5.mp4" autoplay muted loop></video>
        <div class="content active">
            <h1>Wonderful<br><span>Island</span></h1>
            <p>Lakshadweep, the group of 36 islands is known for its exotic and sun-kissed beaches and lush green landscape. The name Lakshadweep in Malayalam and Sanskrit means "a hundred thousand islands". India's smallest Union Territory Lakshadweep is an archipelago consisting of 36 islands with an area of 32 sq km. </p>
            <a href="">Read More</a>
        </div>

        <div class="content">
          <h1>Wonderful<br><span>Roads</span></h1>
          <p>Lakshadweep, the group of 36 islands is known for its exotic and sun-kissed beaches and lush green landscape. The name Lakshadweep in Malayalam and Sanskrit means "a hundred thousand islands". India's smallest Union Territory Lakshadweep is an archipelago consisting of 36 islands with an area of 32 sq km. </p>
          <a href="">Read More</a>
      </div>

      <div class="content">
        <h1>Wonderful<br><span>Woods</span></h1>
        <p>Lakshadweep, the group of 36 islands is known for its exotic and sun-kissed beaches and lush green landscape. The name Lakshadweep in Malayalam and Sanskrit means "a hundred thousand islands". India's smallest Union Territory Lakshadweep is an archipelago consisting of 36 islands with an area of 32 sq km. </p>
        <a href="">Read More</a>
    </div>

    <div class="content">
      <h1>Wonderful<br><span>Forest</span></h1>
      <p>Lakshadweep, the group of 36 islands is known for its exotic and sun-kissed beaches and lush green landscape. The name Lakshadweep in Malayalam and Sanskrit means "a hundred thousand islands". India's smallest Union Territory Lakshadweep is an archipelago consisting of 36 islands with an area of 32 sq km. </p>
      <a href="">Read More</a>
  </div>

  <div class="content">
    <h1>Wonderful<br><span>beaches</span></h1>
    <p>Lakshadweep, the group of 36 islands is known for its exotic and sun-kissed beaches and lush green landscape. The name Lakshadweep in Malayalam and Sanskrit means "a hundred thousand islands". India's smallest Union Territory Lakshadweep is an archipelago consisting of 36 islands with an area of 32 sq km. </p>
    <a href="">Read More</a>
</div>

        <div class="media-icons">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
        </div>

        <div class="slider-navigation">
          <div class="nav-btn active"></div>
          <div class="nav-btn"></div>
          <div class="nav-btn"></div>
          <div class="nav-btn"></div>
          <div class="nav-btn"></div>
        </div>


        <script>
          //JavaScript for video slider navigation
          const btns=document.querySelectorAll(".nav-btn");
          const slides=document.querySelectorAll(".video-slide");
          const contents=document.querySelectorAll(".content");

          var sliderNav= function(manual){
            btns.forEach((btn) => {
              btn.classList.remove("active");
            });

            slides.forEach((slide) => {
              slide.classList.remove("active");
            });

            contents.forEach((content) => {
              content.classList.remove("active");
            })


            btns[manual].classList.add("active");
            slides[manual].classList.add("active");
            contents[manual].classList.add("active");
          }

          btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
              sliderNav(i)
            });
          });

        </script>

    </section>

    <div class="weather">
      <section id="section1">
        <h1>section1</h1>
      </section>
    </div>

    
























    
</body>
</html>