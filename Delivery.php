<!DOCTYPE >
<html lang="ru">
  <head>
    <title>Дебют - доставка и оплата</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="fonts/stylesheet.css" />
  </head>

  <body>
    <?php include "include/header.html" ?>
    <div class="Decorate">
      <let>Y</let>
      <let>T</let>
    </div>
    <main>
      <section class="MainSection">
        <h1><span class="Sloop">D</span>оставка и оплата</h1>
        <p>Доставка осуществляется после полной оплаты товара на сайте. Оплата производится картой VISA, Mastercard, МИР или через СПБ. Возврат/обмен осуществляется только в течении 14 дней, при полном товарном виде, со всеми бирками</p>
      </section>
      <section class="PhotosSection">
        <div class="PhotoContainer-1">
          <img src="img/Delivery1.png">
          <p>Забудьте о долгих ожиданиях! Даже если вы заказываете по предзаказу, срок ожидания не превысит двух недель. Мы продумали логистику и пошив</p>
        </div>
        <div class="PhotoContainer-2">
          <img src="img/Delivery2.png">
          <p>Debut — это сообщество, где каждый клиент важен. 
          Мы уделяем внимание упаковке, поддержке, доставке и даже маленьким подаркам. Вы не просто покупаете одежду — вы становитесь частью нашей семьи</p>
        </div>
        <div class="PhotoContainer-3">
          <img src="img/Delivery3.png">
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
        width: 430px;
    }

    .PhotoContainer-3{
        padding-top: 400px;
    }

    .MainSection p{
        width: 880px;
    }

    .Decorate{
        justify-content: start;
        gap: 600px;
    }

    .Decorate let:last-child{
        padding-top: 200px;
    }

    .Header-Right nav li:first-child a{
      text-decoration: underline;
    }

    @media (max-width:1550px){
    .PhotoContainer-1 img{
        width: 250px;
    }

    .PhotoContainer-2 img{
        width: 480px;
    }

    .PhotoContainer-3 img{
        width: 250px;
    }

    .PhotoContainer-1 p {
        width: 240px;
    }
  }

  @media (max-width:1300px){
    .PhotoContainer-1 img{
        width: 220px;
    }

    .PhotoContainer-2 img{
        width: 380px;
    }

    .PhotoContainer-3 img{
        width: 220px;
    }

    .PhotoContainer-1 p {
        width: 210px;
    }

    .PhotoContainer-2 p {
        width: 360px;
    }
  }

  @media (max-width:980px){
    .PhotoContainer-3 {
        padding-top: 0px;
    }
  }
  </style>
</html>
