<!DOCTYPE >
<html lang="ru">
  <head>
    <title>Дебют - контакты</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="fonts/stylesheet.css" />
  </head>

  <body>
    <?php include "include/header.html" ?>
    <div class="Decorate">
      <let>H</let>
      <let>P</let>
    </div>
    <main>
      <section class="MainSection">
        <h1><span class="Sloop">K</span>онтакты</h1>
        <p>Следите за новыми коллекциями в социальных сетях</p>
        <div class="Contacts">
          <div><a href="">INSTAGRAM</a><span>*</span></div>
          <a href="">ВКОНТАКТЕ</a>
          <a href="">TELEGRAM</a>
        </div>
      </section>
      <section class="PhotosSection">
        <div class="PhotoContainer-1">
          <img src="img/Contact1.png">
          <p>Забудьте о долгих ожиданиях! Даже если вы заказываете по предзаказу, срок ожидания не превысит двух недель. Мы продумали логистику и пошив</p>
        </div>
        <div class="PhotoContainer-2">
          <img src="img/Contact2.png">
          <p>Debut — это твой шаг в будущее
          Не просто стиль. Не просто одежда. Это ваш личный дебют в новый стиль</p>
        </div>
        <div class="PhotoContainer-3">
          <img src="img/Contact3.png">
        </div>
      </section>
    </main>
    <?php include "include/footer.html" ?>
  </body>
  <style>
    .PhotosSection {
        align-items: center;
    }
    .PhotoContainer-1 p{
        width: 300px;
    }

    .PhotoContainer-2 p{
        width: 238px;
    }

    .PhotoContainer-3{
        padding-top: 400px;
    }

    .MainSection p{
        width: 880px;
    }

    .Contacts a{
      color:rgba(23, 23, 23, 1);
        font-size: 14px;
        font-weight: 500;
        text-decoration-line: underline;
    }

    .Contacts{
        margin: 30px 0px;
        display: flex;
        gap:30px;
        justify-content: center;
        align-items: center;
    }

    .Contacts span{
      color: rgba(23, 23, 23, 1);
        opacity: 0.5;
    }

    .Decorate{
        justify-content: end;
        gap: 600px;
    }

    .Decorate let:first-child{
        padding-top: 250px;
    }

    .Header-Right nav li:last-child a{
      text-decoration: underline;
    }
  </style>
</html>
