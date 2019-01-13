<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Reynaldo's photography services for every ocassion.">
  <meta name="keywords" content="photography services" "affordable photography" "quality photography">
  <meta name="author" content="codingimages.com">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura|Arvo" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!-- Link custom css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Link fontawesome 5 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
  crossorigin="anonymous">
  <link rel="shortcut icon" type="image/png" href=img/favicon.png>

  <title>Reynaldo's Photography - Quality Affordable Photography</title>
</head>

<body>

  <div class="fixed-action-btn">
    <a class="btn-floating btn-medium purple">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li>
        <a href="#home" class="btn-floating purple">
          <i class="fas fa-home"></i>
        </a>
      </li>
      <li>
        <a href="#wedding" class="btn-floating purple">
          <i class="fas fa-images"></i>
        </a>
      </li>
      <li>
        <a href="#pricing" class="btn-floating purple">
          <i class="fas fa-dollar-sign"></i>
        </a>
      </li>
      <li>
        <a href="#contact" class="btn-floating purple">
          <i class="fas fa-envelope"></i>
        </a>
      </li>
    </ul>
  </div>


  <header>
    <div class="header_background">
      <div class="container header-box">
        <h1 class="header__main-text">Reynaldo's Photography</h1>
        <p class="header__second-text purple-text">Memories for every ocassion.</p>
      </div>
    </div>
  </header>

  <div class="container fa-icon center">
    <a href="#home">
      <i class="fas fa-angle-down"></i>
    </a>
  </div>

  <main>

    <section class = "container-fluid welcome-header" id="home">
      <div class="container center">
        <h1>Great Photography</h1>
        <p class="purple-text">Affordable prices</p>
        <img src="img/logo-alone.png" height="75px" width="auto" alt="">
        <p>Great photography does not have to be expensive, that's how simple my vision is. Excellent photography at the reach of your pocket for any ocassion, period.  Navigate throughout my gallery and contact us if you like what you see.  I guarantee you will be satisfied.</p>
      </div>
    </section>

    <section class="container-fluid weddings" id="wedding">
      <div class="container center">
        <h1>Weddings</h1>
        <p class="purple-text">Loving love memories</p>
        <img src="img/logo-alone.png" height="75px" width="auto" alt="">
        <p>I love doing weddings, make that special moment a forever one.  I can help!</p>
        <!-- CAROUSEL -->
        <div class="carousel">
          <a class="carousel-item" href="#one!">
            <img class="material-boxed" src="img/boda-1.jpg">
          </a>
          <a class="carousel-item" href="#two!">
            <img class="material-boxed" src="img/boda-2.jpg">
          </a>
          <a class="carousel-item" href="#three!">
            <img class="material-boxed" src="img/boda-3.jpg">
          </a>
          <a class="carousel-item" href="#four!">
            <img class="material-boxed" src="img/boda-4.jpg">
          </a>
          <a class="carousel-item" href="#five!">
            <img class="material-boxed" src="img/boda-5.jpg">
          </a>
        </div>
        <a href = "#contact" class="purple waves-effect waves-light btn"><i class="material-icons left">arrow_downward</i>Contact</a>

      </div>
    </section>

    <section class="container-fluid portraits" id="portraits">
      <div class="container center">
        <h1>Portraits</h1>
        <p class="purple-text">See your best</p>
        <img src="img/logo-alone.png" height="75px" width="auto" alt="">
        <p>See yourself at your best.  I do great group, family, couples and personal portraits.</p>
        <div class="carousel">
            <a class="carousel-item" href="#one!">
              <img class="material-boxed" src="img/portrait-1.jpg">
            </a>
            <a class="carousel-item" href="#two!">
              <img class="material-boxed" src="img/portrait-2.jpg">
            </a>
            <a class="carousel-item" href="#three!">
              <img class="material-boxed" src="img/portrait-3.jpg">
            </a>
            <a class="carousel-item" href="#three!">
              <img class="material-boxed" src="img/portrait-4.jpg">
            </a>
            <a class="carousel-item" href="#three!">
              <img class="material-boxed" src="img/portrait-5.jpg">
            </a>
            <a class="carousel-item" href="#three!">
              <img class="material-boxed" src="img/portrait-6.jpg">
            </a>
          </div>
          <a href = "#contact" class="purple waves-effect waves-light btn"><i class="material-icons left">arrow_downward</i>Contact</a>
      </div>
    </section>

    <section class="container-fluid birthdays" id="wedding">
        <div class="container center">
          <h1>Birthdays</h1>
          <p class="purple-text">One more year around the sun</p>
          <img src="img/logo-alone.png" height="75px" width="auto" alt="">
          <p>It deserves unforgetable memories, at any age.  Because you are valuable!</p>
          <!-- CAROUSEL -->
          <div class="carousel">
            <a class="carousel-item" href="#one!">
              <img class="material-boxed" src="img/birthday-1.jpg">
            </a>
            <a class="carousel-item" href="#two!">
              <img class="material-boxed" src="img/birthday-2.jpg">
            </a>
            <a class="carousel-item" href="#three!">
              <img class="material-boxed" src="img/birthday-3.jpg">
            </a>
            <a class="carousel-item" href="#four!">
              <img class="material-boxed" src="img/birthday-4.jpg">
            </a>
            <a class="carousel-item" href="#five!">
              <img class="material-boxed" src="img/birthday-5.jpg">
            </a>
          </div>
          <a href = "#contact" class="purple waves-effect waves-light btn"><i class="material-icons left">arrow_downward</i>Contact</a>
        </div>
      </section>

    <section class="container-fluid pregnancy" id="pregnancy">
      <div class="container center">
        <h1>Pregnancy and Babies</h1>
        <p class="purple-text">Let that aww moment be.</p>
        <img src="img/logo-alone.png" height="75px" width="auto" alt="">
        <p>I know how important is pregnancy and babies in your life.  Make life cycle eternal! </p>
        <div class="carousel">
            <a class="carousel-item" href="#one!">
              <img class="material-boxed" src="img/embarazo-1.jpg">
            </a>
            <a class="carousel-item" href="#two!">
              <img class="material-boxed" src="img/embarazo-2.jpg">
            </a>
            <a class="carousel-item" href="#three!">
              <img class="material-boxed" src="img/embarazo-3.jpg">
            </a>
            <a class="carousel-item" href="#three!">
              <img class="material-boxed" src="img/embarazo-4.jpg">
            </a>
          </div>
          <a href = "#contact" class="purple waves-effect waves-light btn"><i class="material-icons left">arrow_downward</i>Contact</a>
      </div>
    </section>

    <section class="container-fluid aerial" id="aerial">
      <div class="container center">
        <h1>Aerial Photography</h1>
        <p class="purple-text">Add a perspective to your story</p>
        <img src="img/logo-alone.png" height="75px" width="auto" alt="">
        <p>I can do aerial photography by itself or add it to you very own story.  Let's talk about it!</p>
        <div class="carousel">
            <a class="carousel-item" href="#one!">
              <img class="material-boxed" src="img/aerial-1.jpg">
            </a>
            <a class="carousel-item" href="#two!">
              <img class="material-boxed" src="img/aerial-2.jpg">
            </a>
            <a class="carousel-item" href="#three!">
              <img class="material-boxed" src="img/aerial-3.jpg">
            </a>
            <a class="carousel-item" href="#four!">
              <img class="material-boxed" src="img/aerial-4.jpg">
            </a>
            <a class="carousel-item" href="#five!">
              <img class="material-boxed" src="img/aerial-5.jpg">
            </a>
          </div>
          <a href = "#contact" class="purple waves-effect waves-light btn"><i class="material-icons left">arrow_downward</i>Contact</a>
      </div>
    </section>

    <section class="container-fluid pricing" id="pricing">
      <div class="container center">
        <h1>Affordable Photography</h1>
        <p class="purple-text">Affordable does not mean poor quality</p>
        <img src="img/logo-alone.png" height="75px" width="auto" alt="">
        <p class="btn-padding">If you have never meet great quality and affordable photography I want to say hi! Let's talk!</p>
        <a href = "#contact" class="purple waves-effect waves-light btn"><i class="material-icons left">arrow_downward</i>Contact</a>
      </div>
    </section>

    <section class="container-fluid contact" id="contact">
      <div class="container center">
        <h1>Let me know your needs</h1>
        <p class="purple-text">I am here to help!</p>
        <img src="img/logo-alone.png" height="75px" width="auto" alt="">
        <p>Contact me, don't hesistate, I always have offers.  I am able to meet your photography needs!</p>
      </div>
      <style>
          .container {
              max-width: 960px;
          }
  
          span {
              color: #d60000;
          }
  
      </style>
      <div class="container center formadecontacto">
          <div class="row">
              <div class="col-md-12">
                  <div class="input-field">
                      <div class="text-center">
                          <?php
                          
                          if(isset($_SESSION['msg'])){
                              echo $_SESSION['msg'];
                              unset($_SESSION['msg']);
                          } else if(isset($_SESSION['msgFields'])){
                              echo $_SESSION['msgFields'];
                              unset($_SESSION['msgFields']);
                          }
                          
                          ?>
                      </div>
                      <form class = "col s12 m12 l12" action="SendGrid-API/f_process.php" method="post">
                          <div class="row">
                              <div class="input-field col s12 m6 l6">
                                  <i class="material-icons prefix">person</i>
                                  <label for="Name">Name<span>*</span></label>
                                  <input type="text" name="name" class="input-field">
                              </div>
                              <div class="input-field col s12 m6 l6">
                                  <i class="material-icons prefix">phone</i>
                                  <label for="Phone">Phone<span>*</span></label>
                                  <input type="text" name="phone" class="input-field">
                              </div>
                          </div>
                          <div class="row">
                              <div class="input-field col s12 m12">
                                  <i class="material-icons prefix">mail</i>
                                  <label for="Email">Email<span>*</span></label>
                                  <input type="text" name="email" class="input-field">
                              </div>
                          </div>
                          <div class="row">
                              <div class="input-field col s12 m12">
                                  <i class="material-icons prefix">mode_edit</i>
                                  <label for="Name">Message<span>*</span></label>
                                  <textarea class = "materialize-textarea" name="message" id="" cols="30" rows="10" class="input-field text-white"></textarea>
                              </div>
                          </div>
                          <button type="submit" class="purple waves-effect waves-light btn"><i class="material-icons left">send</i>Send</button>
                      </form>
                  </div>
              </div>
              
          </div>
          
      </div>
    </section>



    <footer class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col s12 m6"></div>
          <div class="col s12 m6"></div>
        </div>
      </div>
    </footer>

  </main>



  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script>
    $(document).ready(function (){

      // JAVASCRIPT START HERE //
      $('.carousel').carousel();
      $('.materialboxed').materialbox();

      // $('.carousel-slider').carousel({ fullWidth: true });


    });
  </script>
</body>

</html>