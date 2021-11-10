<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOOKVILLE</title>
  <link rel="stylesheet" href="css/fonts.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include 'header.php'?>

  <main class="main">
    <section class="hero mb-5">
      <div class="container-xl">
        <div class="row mb-4">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/main/hero/hero-1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/main/hero/hero-2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/main/hero/hero-3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <ol class="list-group list-group-horizontal d-flex justify-content-between hero-list-group">
              <li class="col-3 list-group-item hero-list-item text-grey-3 d-flex align-items-center me-2">
                <span class="hero-list-number text-brown-1 me-1">1</span> Консультация
                книжного сомелье
              </li>
              <li class=" col-3 list-group-item hero-list-item text-grey-3 d-flex align-items-center me-2"><span
                  class="hero-list-number text-brown-1 me-1">2</span>
                Доставка 1-2
                дня</li>
              <li class="col-3 list-group-item hero-list-item text-grey-3 d-flex align-items-center me-2"><span
                  class="hero-list-number text-brown-1 me-1">3</span>
                Уникальные
                подборки книг</li>
              <li class="col-3 list-group-item hero-list-item text-grey-3 d-flex align-items-center"><span
                  class="hero-list-number text-brown-1 me-1">4</span>
                Эстетическая
                упаковка</li>
            </ol>
          </div>

        </div>
      </div>

    </section>

    <section class="about bg-decoration p-50 mb-5">
      <div class="container-xl">
        <div class="row">
          <span class="mb-2 text-brown-1">BOOKVILLE</span>
          <h2 class="mb-4 section-title">О нашей компании</h2>
        </div>
        <div class="row">
          <p class="col p-left-40 me-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor
            incididunt
            ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat incididunt ut laboret.</p>
          <p class="col p-left-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt
            ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat incididunt ut laboret.</p>
        </div>
      </div>

    </section>

    <section class="popular mb-5 p-top-20">
      <div class="container-xl">
        <h2 class="mb-3 section-title text-center mb-3">Популярные товары</h2>
        <div class="row">
          <div id="carouselPopularControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active d-flex justify-content-between">
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="carousel-item active d-flex justify-content-between">
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselPopularControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselPopularControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="discount mb-5 p-top-20">
      <div class="container-xl">
        <h2 class="mb-3 section-title text-center mb-3">Скидки</h2>
        <div class="row">
          <div id="carouselDiscountControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active d-flex justify-content-between">
                <div class="card me-3 card-local card-popular">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local card-popular">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local card-popular">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local card-popular">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="carousel-item active d-flex justify-content-between">
                <div class="card me-3 card-local card-popular">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local card-popular">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local card-popular">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local card-popular">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselDiscountControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselDiscountControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="recomendation mb-5 p-top-20">
      <div class="container-xl">
        <h2 class="mb-3 section-title text-center mb-3">BOOKVILLE рекомендует</h2>
        <div class="row">
          <div id="carouselRecomendationControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active d-flex justify-content-between">
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="carousel-item active d-flex justify-content-between">
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
                <div class="card me-3 card-local">
                  <div class="card-img" href="#">
                    <a href="#"><img src="img/main/book.jpg" class="card-img-top card-local-img" alt="book"></a>
                    <button class="btn btn-favorites d-flex justify-content-center align-items-center" type="button">
                      <span class="btn-favorites-icon"></span>
                    </button>
                  </div>
                  <div class="card-body card-local-body justify-self-end d-flex flex-column justify-content-end">
                    <p class="card-text-local">Ольга Примаченко</p>
                    <h5 class="card-title card-title-local">К себе нежно</h5>
                    <p class="card-price d-flex justify-content-between"><span class="card-price-text d-block">790
                        ₽</span><span class="card-price-cart d-block"></span>
                    </p>
                  </div>
                </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselRecomendationControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselRecomendationControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="activity mb-5 p-top-20">
      <div class="container-xl">
        <div class="row align-items-center">
          <div class="col">
            <img src="img/main/activity/content.jpg" alt="activity">
          </div>
          <div class="col">
            <h2 class="mb-3 section-title">О наших мероприятиях</h2>
            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut
              labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat incididunt ut laboret.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
              do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
              exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat incididunt ut laboret.</p>
            <button type="button" class="btn text-uppercase btn-local btn-activity text-brown-1">Подробнее</button>
          </div>
        </div>
      </div>
    </section>

    <section class="selection mb-5 p-top-20">
      <div class="container-xl">
        <div class="row">
          <h2 class="mb-4 text-center section-title">Подборка книг</h2>
        </div>
        <div class="row align-items-stretch">
          <div class="col-sm-4 col mb-3 d-flex align-self-stretch">
            <div class="card selection-card align-self-stretch">
              <div class="card-body">
                <a class="card-title text-black-1 text-decoration-none selection-card-title">Для уютного вечера</a>
                <p class="card-text text-grey-4 selection-card-text">15 книг</p>
              </div>
              <img src="img/main/selection/back-1.jpg" alt="">
            </div>
          </div>
          <div class="col-sm-4 col mb-3 d-flex align-self-stretch">
            <div class="card selection-card align-self-stretch">
              <div class="card-body">
                <a class="card-title text-black-1 text-decoration-none selection-card-title">Для проактивных
                  родителей</a>
                <p class="card-text text-grey-4 selection-card-text">15 книг</p>
              </div>
              <img src="img/main/selection/back-2.jpg" alt="">
            </div>
          </div>
          <div class="col-sm-4 col mb-3 d-flex align-self-stretch">
            <div class="card selection-card align-self-stretch">
              <div class="card-body">
                <a class="card-title text-black-1 text-decoration-none selection-card-title">О психологии</a>
                <p class="card-text text-grey-4 selection-card-text">15 книг</p>
              </div>
              <img src="img/main/selection/back-3.jpg" alt="">
            </div>
          </div>
          <div class="col-sm-4 col mb-3 d-flex align-self-stretch">
            <div class="card selection-card align-self-stretch">
              <div class="card-body">
                <a class="card-title text-black-1 text-decoration-none selection-card-title">Для руководителя</a>
                <p class="card-text text-grey-4 selection-card-text">15 книг</p>
              </div>
              <img src="img/main/selection/back-4.jpg" alt="">
            </div>
          </div>
          <div class="col-sm-4 col mb-3 d-flex align-self-stretch">
            <div class="card selection-card align-self-stretch">
              <div class="card-body">
                <a class="card-title text-black-1 text-decoration-none selection-card-title">О здоровье</a>
                <p class="card-text text-grey-4 selection-card-text">15 книг</p>
              </div>
              <img src="img/main/selection/back-5.jpg" alt="">
            </div>
          </div>
          <div class="col-sm-4 col mb-3 d-flex align-self-stretch">
            <div class="card selection-card align-self-stretch">
              <div class="card-body">
                <a class="card-title text-black-1 text-decoration-none selection-card-title">Для любознаек</a>
                <p class="card-text text-grey-4 selection-card-text">15 книг</p>
              </div>
              <img src="img/main/selection/back-6.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include 'form.php'?>
    <?php include 'footer.php'?>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
</body>

</html>