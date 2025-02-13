<!DOCTYPE >
<html lang="ru">
  <head>
    <title>Дебют - о бренде</title>
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
        <h1><span class="Sloop">O</span> бренде</h1>
        <p>Наши коллекции: начало твоего нового пути Каждая коллекция Debut — это возможность показать себя, выразить внутренний свет и выделиться. Мы делаем одежду для тех, кто готов меняться и стремиться к лучшему.</p>
      </section>
      <section class="PhotosSection">
        <div class="PhotoContainer-1">
          <img src="img/Brand1.png">
          <p>Работаем напрямую с фабриками, уделяем внимание каждой детали и используем только лучшие ткани. Вся наша команда — это эксперты, которые знают, как создавать одежду высочайшего уровня</p>
        </div>
        <div class="PhotoContainer-2">
          <img src="img/Brand2.png">
        </div>
        <div class="PhotoContainer-3">
          <img src="img/Brand3.png">
          <p>Каждая коллекция Debut — это возможность показать себя, выразить внутренний свет и выделиться. Мы делаем одежду для тех, кто готов меняться и стремиться к лучшему</p>
        </div>
      </section>
    </main>
    <?php include "include/footer.html" ?>
  </body>
  <style>
    .PhotoContainer-1 p{
        width: 400px;
    }

    .PhotoContainer-2{
        padding-top: 350px;
    }

    .PhotoContainer-3 p{
        width: 300px;
    }

    .Decorate{
        justify-content: end;
        gap: 600px;
    }

    .Decorate let:first-child{
        padding-top: 250px;
    }

    header > nav li:last-child a{
      text-decoration: underline;
    }

  @media (max-width:1550px){
    .PhotoContainer-1 img{
        width: 480px;
    }

    .PhotoContainer-2 img{
        width: 250px;
    }

    .PhotoContainer-3 img{
        width: 250px;
    }

    .PhotoContainer-3 p {
        width: 240px;
    }
  }

  @media (max-width:1300px){
    .PhotoContainer-1 img{
        width: 380px;
    }

    .PhotoContainer-2 img{
        width: 220px;
    }

    .PhotoContainer-3 img{
        width: 220px;
    }

    .PhotoContainer-3 p {
        width: 210px;
    }

    .PhotoContainer-1 p {
        width: 360px;
    }
  }

  @media (max-width:980px){
    .PhotoContainer-2 {
        padding-top: 0px;
    }
  }


  </style>
</html>
