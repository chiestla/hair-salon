<?php
$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){
  $nom = mysqli_real_escape_string($conn,$_POST['nom']);
  $email = mysqli_real_escape_string($conn,$_POST('email'));
  $telephone = $_POST['telephone'];
  $jour = $_POST['jour'];

  $insert = mysqli_query($conn,"INSERT INTO 'contact_form'(nom,email,telephone,jour)VALUES('$nom','$email','$telephone','$jour')") or die ('query failed');

  if($insert){
    $message[]='Réservation enregistrée avec succès!';
  }else{
    $message[]='Erreur';
  }
}





?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Bleu coiffeurs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

</head>

<body>
  <header class="header" id="navigation-menu">
    <div class="container">
      <nav>
        <a href="#" class="logo"> bleu <span>.</span> </a>

        <ul class="nav-menu">
          <li> <a href="#home" class="nav-link">Accueil</a> </li>
          <li> <a href="#about" class="nav-link">À propos</a> </li>
          <li> <a href="#service" class="nav-link">Nos services</a> </li>
          <li> <a href="#equipe" class="nav-link">Notre équipe</a> </li>
          <li> <a href="#gallery" class="nav-link">Notre Salon</a> </li>
          <li> <a href="#contact" class="nav-link">Contact</a> </li>
        </ul>

        <div class="hambuger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>

        </div>
      </nav>
    </div>
  </header>

  <script>
    const hambuger = document.querySelector('.hambuger');
    const navMenu = document.querySelector('.nav-menu');

    hambuger.addEventListener("click", mobileMenu);

    function mobileMenu() {
      hambuger.classList.toggle("active");
      navMenu.classList.toggle("active");
    }

    const navLink = document.querySelectorAll('.nav-link');
    navLink.forEach((n) => n.addEventListener("click", closeMenu));

    function closeMenu() {
      hambuger.classList.remove("active");
      navMenu.classList.remove("active");
    }
  </script>

  <section class="home" id="home">
    <div class="head_container">
      <div class="box">
        <div class="text">
          <h1>BLEU COIFFEURS</h1>
          <p>Le salon de coiffure coréen à Paris</p>
          <button>PRENDRE RDV</button>
        </div>
      </div>
      <div class="image">
        <img src="image/home.jpg" class="slide">
      </div>
    </div>
  </section>

  <!-----------------------BOOKING------------------>



  <section class="book">
    <div class="container flex">
        <div class="input grid">
            <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
              <?php
                if(isset($message)){
                 foreach($message as $message){
                  echo '<p>'.$message.'</p>';
                 }                
                }
              
              ?>
                <div class="box">
                    <label>Nom:</label>
                    <input type="text" name="nom" placeholder="Votre nom">
                </div>
                <div class="box">
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="Votre email">
                </div>
                <div class="box">
                    <label>Tél:</label> <br>
                    <input type="tel" name="telephone" placeholder="Votre numéro de téléphone">
                </div>  
                <div class="box">
                    <label>Jour:</label> <br>
                    <input type="datetime-local" name="jour">
                </div>
                <div class="search">
                    <input type="submit" name="submit" value="VALIDE">
                </div>
            </form>
        </div>
    </div>
</section>


<!-------------ABOUT-------------------->


  <section class="about top" id="about">
    <div class="container flex">
      <div class="left">
        <div class="img">
          <img src="image/a1.jpg" alt="" class="image1">
        </div>
      </div>
      
      <div class="right">
        <div class="heading">
          <h5>BIENVENUE</h5>
          <h2>Votre salon de coiffure coréen depuis 2004</h2>
          <p>Crée en 2004, notre salon est composé d'une équipe de coiffeurs coréens professionnels et spécialisés. Nous avons eu de cesse de perfectionner nos techniques depuis pour vous proposer le meilleur de la coiffure coréenne. Nous sommes fiers du talent de nos stylistes et utilisons les meilleurs produits pour mieux vous servir, Balmain, Milbon, L'Oréal ou ATS. </p>
          <p>Au courant de toutes les dernières tendances coréenne, notre équipe à travaillé avec de nombreuses célébrités de la mode ou de la Kpop.</p>
          <button class="btn1">PRENDRE RDV</button>
        </div>
      </div>
    </div>
  </section>

  <!-----------NOS SERVICES--------------->

  <section class="campus" id="service">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>PROPOSER UNE LARGE GAMME DE PRESTATION POUR TOUS LES TYPES DE CHEVEUX</h5>
          <h2>Nos services</h2>
        </div>
        <div class="button">
          <button class="btn1">PRENDRE RDV</button>
        </div>
      </div>

      <div class="row">
        <div class="campus-col">
            <img src="image/toc1.jpg" alt="">
            <div class="layer">
                <h3>COUPE CHEVEUX LONGS</h3>
            </div>
        </div>    

        <div class="campus-col">
            <img src="image/toc2.jpg" alt="">
            <div class="layer">
                <h3>COUPE CHEVEUX MI LONGS</h3>
            </div>    
        </div>

        <div class="campus-col">
            <img src="image/toc3.jpg" alt="">
            <div class="layer">
                <h3>COUPE CHEVEUX COURTS</h3>
            </div>
        </div>    

        <div class="campus-col">
          <img src="image/toc4.jpg" alt="">
          <div class="layer">
              <h3>COUPE À LA TONDEUSE</h3>
          </div>
      </div>

      <div class="campus-col">
        <img src="image/toc5.jpg" alt="">
        <div class="layer">
            <h3>COUPE CHEVEUX BOUCLES</h3>
        </div>
    </div>

    <div class="campus-col">
      <img src="image/toc6.jpg" alt="">
      <div class="layer">
          <h3>PERMANENTE DIGITALE</h3>
      </div>
  </div>

  <div class="campus-col">
    <img src="image/toc7.jpg" alt="">
    <div class="layer">
        <h3>PERMANENTE SIMPLE</h3>
    </div>
</div>

<div class="campus-col">
  <img src="image/toc8.jpg" alt="">
  <div class="layer">
      <h3>LISSAGE</h3>
  </div>
</div>

<div class="campus-col">
  <img src="image/toc9.jpg" alt="">
  <div class="layer">
      <h3>COULEUR</h3>
  </div>
</div>

    </div>
  </section>

<!-------------EQUIPE--------------->

  <section class="room top" id="equipe">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>ÉLEVER LE CONFORT AU PLUS HAUT NIVEAU</h5>
          <h2>L'équipe Bleu Coiffure</h2>
        </div>
        <div class="button">
          <button class="btn1">PRENDRE RDV</button>
        </div>
      </div>

      <div class="content grid">
        <div class="box">
          <div class="img">
            <img src="image/r1.jpg" alt="">
          </div>

          <div class="text">
            <h3>Saerom 새롬원장</h3>
            <p> <span>Styliste senior</span></p><br>
            <p>A collaboré avec L'Oréal sur la ligne de produits Kérastase.</p><br>
            <p>A travaillé avec des célébrités: Jeje, Sung Jin Cho, Minji, Wang Feifei,...</p><br>
            <p>A animé des conférences sur les cosmétiques et styles coréens.</p><br>
            <p>Fondatrice de Bleu Coiffure et Hair Studio Greet.</p><br>
          </div>
      </div>

        <div class="box">
          <div class="img">
            <img src="image/r2.jpg" alt="">
          </div>
          <div class="text">
            <h3>Nayeong 나영</h3>
            <p> <span>Styliste</span></p><br>
            <p> A été formée dans un grand salon de coiffure en Corée. </p><br>
            <p>A suivi une formation de coloration avec SHISEIDO. </p><br>
            <p>Très recommandée pour notre forfait de décoloration - coloration.</p><br>
            <p> Spécialités : Décoloration - coloration, lissage, Permanente, soin lissant (Lissage brésilien).</p><br>
          </div>
        </div>

        <div class="box">
          <div class="img">
            <img src="image/r3.jpg" alt="">
          </div>
          <div class="text">
            <h3>Teddy 테디</h3>
            <p> <span>Styliste</span></p><br>
            <p>A été formé depuis 3 ans a Bleu Coiffure. </p><br>
            <p>Spécialité : Permanentes, Lissage, down perm (Forme et stylisme des cheveux masculins).</p><br>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!------------------AVIS----------------->

  <section class="avis" id="avis">
    <div class="container">
        <div class="heading_top flex1">
          <div class="heading">
            <h5>NOTRE SALON VOUS REMERCI</h5>
            <h2>Les avis de clients</h2>
          </div>
          <div class="button">
            <button class="btn1">PRENDRE RDV</button>
          </div>
        </div>

        <div class="row">
          <div class="avis-col">
              <img src="image/cl1.jpg" alt="">
              <div>
                  <p>Tout est parfait, ma coiffeuse était adorable et j’ai beaucoup aimé ma permanente classique Je recommande fortement, le salon est adorable et chaleureux !</p>
                  <h3>Linda An</h3>
                  
              </div>
          </div>
      
      <div class="avis-col">
              <img src="image/cl2.jpg" alt="">
              <div>
                  <p>Le salon est très chaleureux. L'équipe est très accueillante et j'ai adoré l'ambiance générale qui contribue à nous mettre à l'aise (décoration végétale, musique d'ambiance instrumentale relaxante, fauteuil massant, diffusion d'odeurs apaisantes). Bravo pour votre travail. Je suis venue pour une shampoing et une coupe de cheveux et la prestation était nickel. On prend le temps de bien s'occuper de vous.</p>
                  <h3>Morgane Charcellay</h3>
              </div>
          </div>
      </div>
  </section>


  
<!---GALLARY-->

  <section class="gallary mtop " id="gallary">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>BIENVENUE DANS NOTRE GALLERIE DE PHOTO</h5>
          <h2>Notre salon</h2>
        </div>
        <div class="button">
          <button class="btn1">PRENDRE RDV</button>
        </div>
      </div>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="image/g1.png" alt="">
        </div>
        <div class="item">
          <img src="image/g2.png" alt="">
        </div>
        <div class="item">
          <img src="image/g3.png" alt="">
        </div>
        <div class="item">
          <img src="image/g4.png" alt="">
        </div>
        <div class="item">
          <img src="image/g5.png" alt="">
        </div>
        <div class="item">
          <img src="image/g6.png" alt="">
        </div>
        <div class="item">
          <img src="image/g7.png" alt="">
        </div>
        <div class="item">
          <img src="image/g8.png" alt="">
        </div>
        <div class="item">
          <img src="image/g9.png" alt="">
        </div>
        <div class="item">
          <img src="image/g10.png" alt="">
        </div>
      </div>

    </div>
  </section>

  

  <script>
    var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionIHeading');

    for (i = 0; i < accHD.length; i++) {
      accHD[i].addEventListener('click', toggleItem, false);
    }

    function toggleItem() {
      var itemClass = this.parentNode.className;
      for (var i = 0; i < accItem.length; i++) {
        accItem[i].className = 'accordionItem close';
      }
      if (itemClass == 'accordionItem close') {
        this.parentNode.className = 'accordionItem open';
      }
    }
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })
  </script>

  <!------------------CONTACT-------------->
<section class="cta">
  <h1>BLEU COIFFEURS</h1>
  <h3>Le salon de coiffure coréen à Paris 15e.</h3><br>
  <h3>Prenez rendez-vous dès maintenant avec le meilleur de la coiffure coréenne.</h3><br>
  <p>파리 15구 블루헤어에서 서비스를 원하시는 분들은 아래 버튼을 클릭하시면 예약 화면으로 이동합니다. </p><br>
  <div class="button">
    <button class="btn1">PRENDRE RDV</button>
  </div>
</section>

<!---------------------FOOTER--------------------->

<footer>
    <div class="container grid top">
      <div class="box">
        <h1>BLEU COIFFEURS</h1>
      </div>
    </div>

    <div class="add">
      <ul>
        <li>16 Rue d'Ouessant, 75015 Paris</li>
        <li>Lundi - Samedi (Sauf jeudi) : 10h - 19h30 </li>
        <li> 01 40 60 08 64 </li>
        <li>contact@bleucoiffure.com </li>
      </ul>
    </div>

  </footer>
</body>

</html>