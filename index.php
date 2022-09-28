<?php

   // echo "<h1>Hallo Welt!</h1>";

?>
<!DOCTYPE html>
<html lang="de" data-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/diashow.css">
    <link rel="stylesheet" href="css/elements.css" />
    <link rel="preload" as="image" href="important.png">
    <script src="js/main.js"></script>
    <title>MyLife: Storytime</title>
  </head>

  <body>
    <nav class="navbar">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Themen</a></li>
        <li><a href="#">Artikelsuche</a></li>
        <li id="right-element"><a href="#">Login</a></li>
        <li id="right-element">
          <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </li>
      </ul>
    </nav>
    <main>
      <div class="slideshow">
         <div class="slide fade">
          <img src="diashow/1.jpg" alt="Failed to load" style="width: 100%" />
        </div> 
        <div class="slide fade">
        <img src="diashow/2.png" alt="Failed to load"/>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <br />
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
         <!-- <span class="dot" onclick="currentSlide(3)"></span> -->
        </div>
     </div>
      <hr />
      <section class="article-overview">
        <article>
          <img
            src="https://www.gesundheit.gv.at/dam/jcr:5f666be1-206b-4550-a64d-eb42886debd0/MeinCoronatest_Hilfe_V3_161887938.JPG"
            alt="Bild konnte nicht geladen werden"
          />
          <p>Ich bin ein cooler Text!</p>
        </article>
        <article>
          <img
            src="https://www.gesundheit.gv.at/dam/jcr:5f666be1-206b-4550-a64d-eb42886debd0/MeinCoronatest_Hilfe_V3_161887938.JPG"
            alt="Bild konnte nicht geladen werden"
          />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore,
            exercitationem.
          </p>
        </article>
      </section>
    </main>
  </body>
</html>
