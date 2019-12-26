

<template>
  <div id="app">
    <header>
      <div id="carousel" class="carousel vert slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
          <li data-target="#carousel" data-slide-to="3"></li>
          <li data-target="#carousel" data-slide-to="4"></li>
        </ol>


        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <a href="#"><img src="./assets/img/header-cover-1.png"></a>

            <!-- <div class="carousel-caption d-none d-md-block">
              <h5>Восхождение героя щита</h5>
              <div class="link_cat">
                <a href="#" title="Жанр дзёсэй">дзёсэй</a> /
                <a href="#" title="Жанр дзёсэй">дзёсэй</a> /
                <a href="#" title="Жанр дзёсэй">дзёсэй</a>
              </div>
              <p>Gambar pemandangan sungai.</p>
            </div> -->

          </div>
          <div class="carousel-item">
            <a href="#"><img src="./assets/img/header-cover-2.jpg"></a>
          </div>
          <div class="carousel-item">
            <a href="#"><img src="./assets/img/header-cover-3.jpg"></a>
          </div>
          <div class="carousel-item">
            <a href="#"><img src="./assets/img/header-cover-4.png"></a>
          </div>
          <div class="carousel-item">
            <a href="#"><img src="./assets/img/header-cover-5.jpg"></a>
          </div>
        </div>
      </div>
      <div class="main-header">
        <div class="left-line">
          <div class="animation">
            <div class="link-animation">a</div>
            <div class="link-animation">n</div>
            <div class="link-animation">i</div>
            <div class="link-animation">m</div>
            <div class="link-animation">a</div>
            <div class="link-animation">t</div>
            <div class="link-animation">i</div>
            <div class="link-animation">o</div>
            <div class="link-animation">n</div>
            <img src="./assets/img/logo-left.svg" alt="gtfo" />
          </div>

        </div>

        <div class="logo">
          <a href="#/"><img alt="logo" src="./assets/img/logo.svg"/></a>
        </div>
        <nav class="navigation">

          <div class="nav-category">
            <div class="button-rand">
              <a href="#" class="button-icon"><i class="fa fa-random" aria-hidden="true"></i></a>
            </div>
            <div class="button-category" id="c1">
              <a href="#" class="button-icon">Мультфильмы</a>
            </div>
            <div class="button-category" id="c2">
              <a href="#" class="button-icon">Аниме</a>
            </div>
            <div class="button-category" id="c3">
              <a href="#" class="button-icon">Сериалы</a>
            </div>
            <div class="button-category" id="c4">
              <a href="#" class="button-icon">Фильмы</a>
            </div>
          </div>
          <div class="nav-user">
            <div class="nav-search">
              <a href="#" class="button-search"><img src="./assets/img/search.svg" alt="gtfo" /></a>
              <input placeholder="поиск..." class="search-line"/>
            </div>
            <div class="nav-status">
              <div class="button-user">
                <img src="./assets/img/shield-2.svg" alt="gtfo">
                <div class="user-icon fa-layers fa-fw ">
                  <i class="user-icon-static fas fa-circle fa-2x" style="color:black; font-size: 1.9rem"></i>
                  <i class="user-icon-light fas fa-circle fa-lg"></i>
                  <i class="fas fa-user-circle fa-2x" style="font-size: 1.8rem"></i>
                  <i class="user-icon-light far fa-circle fa-lg"></i>
                </div>
              </div>
              <div class="user-name"><a href="#">Гость</a></div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <router-view/>

    <footer id="myFooter" style="padding: 60px 0px 0px">
      <div class="container-fluid" style="padding: 0px;">
        <div class="row text-center" style="margin: 0;">
          <div class="col footer-social" style="background-color: rgb(255,98,13);">
            <a class="social-icons" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="social-icons" href="#"><i class="fab fa-google-plus-g"></i></a>
            <a class="social-icons" href="#"><i class="fab fa-twitter"></i></a>
            <a class="social-icons" href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <div class="col-12">
            <ul class="list-unstyled">
              <li><a href="#">О нас</a></li>
              <li><a href="#">Обратная связь</a></li>
              <li><a href="#">Правила</a></li>
              <li><a href="#">Ссылки</a></li>
            </ul>
            <p class="footer-copyright">Copyright © 2019 GTFO Animation ~ Designed By &nbsp;<a href="#">GTFO Team</a></p>
          </div>
        </div>
      </div>
    </footer>

    <div align="center" class="fond">
      <div id="myfond_gris"></div>
      <div class="form-wrapper" id="wrapper-login">
        <img src='assets/img/f.png' alt='bg1' />
        <div class="content-wrapper" id="content-login">
          <h1>С возвращением!</h1>
          <form class="form-login">
            <input type="text" name="username" placeholder="Username" class="input-username" required pattern="[0-9A-Za-z]{6,30}"/>
            <input type="password" name="password" placeholder="Password" class="input-password" required pattern="[0-9A-Za-z]{6,30}"/>
            <button type="submit" class="btn-login">Вход</button>
          </form>
          <p>Нету аккаунта? <a href="#wrapper-signup">Регистрация</a></p>
        </div>
      </div>
      <div class="form-wrapper" id="wrapper-signup">
        <img src='assets/img/f.png ' alt='bg2' />
        <div class="content-wrapper" id="content-signin">
          <h1>Добро Пожаловать!</h1>
          <form class="form-login">
            <input type="email" name="email" placeholder="Email address" class="input-email" required="required"/>
            <input type="text" name="username" placeholder="Username" class="input-username" required pattern="[0-9A-Za-z]{6,30}"/>
            <input type="password" name="password" placeholder="Password" class="input-password" required pattern="[0-9A-Za-z]{6,30}"/>
            <button type="submit" class="btn-login">Регистрация</button>
          </form>
          <p>Есть аккаунт? <a href="#wrapper-login">Вход</a></p>
        </div>
      </div>
    </div>

    <link rel="stylesheet" type="text/css" link href="https://db.onlinewebfonts.com/c/0d78b12d6be09203d1fbeb76871a369a?family=Century+Gothic" />
    <link rel="stylesheet" type="text/css" href="https://db.onlinewebfonts.com/c/89d11a443c316da80dcb8f5e1f63c86e?family=Bauhaus+93">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link href="http://allfont.ru/allfont.css?fonts=aniron-bold" rel="stylesheet" type="text/css">
  </div>

</template>

<style>
  @import "assets/css/main_header.css";
  @import "assets/css/Bold-BS4-Footer-Simple.css";
  @import "assets/css/login-sign-form.css";

  .link-animation {
    font-family: "Bauhaus 93";
    font-weight: bold;
    font-size: 25px;
    color: black;
    text-decoration: none !important;
    margin-left: 2px;
  }

  .button-icon {
    font-family: "Comfortaa";
    font-weight: bold;
    font-size: 16px;
    color: black;
    text-decoration: none !important;
  }

  .search-line {
    font-family: "Comfortaa";
    font-weight: normal;
    font-size: 16px;
    color: white;
    text-decoration: none !important;
  }

  .user-name a {
    font-family: "Comfortaa";
    font-weight: bold;
    font-size: 16px;
    color: white;
    text-decoration: none !important;
    font-style: normal;
  }

  .video-category a {
    width: inherit;
    font-family: "Comfortaa";
    text-align: center;
    word-wrap: break-word;
    font-weight: bold;
    font-size: 17px;
    text-transform: uppercase;
    color: white !important;
    text-decoration: none !important;

    background-repeat: no-repeat;
    background-image: linear-gradient(to top, transparent, rgba(0, 0, 0, 1) 10%, rgba(0, 0, 0, 1) 90%, transparent);

    padding-top: 100%;
    padding-bottom: 100%;
  }

  .info-popular-name a {
    font-family: "Comfortaa";
    font-weight: bold;
    font-size: 16px;
    color: white !important;
    text-decoration: none !important;
    text-align: center;

    background-repeat: no-repeat;
    background-image: linear-gradient(to left, transparent, rgba(0, 0, 0, 1) 10%, rgba(0, 0, 0, 1) 90%, transparent);

    padding-left: 15px;
    padding-right: 15px;

    margin-left: 15px;
    margin-right: 15px;
  }

  .info-popular-title p {
    font-family: "Comfortaa";
    font-weight: normal;
    font-size: 14px;
    color: white;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
  }
</style>


<script>
// export default {
//   mounted() {
//     let fontawesomeScript = document.createElement('script');
//     fontawesomeScript.setAttribute('src', 'https://kit.fontawesome.com/9feb37905a.js');
//     document.head.appendChild(fontawesomeScript);
//   }
// }
</script>