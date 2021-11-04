<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <title>BOOKVILLE Blog</title>
  <link rel="stylesheet" href="css/fonts.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'?>

  <main class="blog">
    <div class="container-xxl">
      <div class="section-nav mb-4">
        <div class="nav">
            <div class="nav1"><a class="text-grey-3" href="main.php">Главная</a></div>
            <img src="img/blog/arrow.png" alt="">
            <div class="nav2"><a class="text-grey-3" href="blog.php">Блог</a></div>
        </div>
      </div>
      <div class="section-blog">
        <h2 class="page-title mb-4 text-black-2">Блог</h2>
        <div class="row mb-4">
          <a class="col">
            <div class="blog-item blog-item01 mb-3"></div>
            <h5 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </h5>
            <p class="blog-date">15.09.2020</p>
          </a>
          <a class="col">
            <div class="blog-item blog-item02 mb-3"></div>
            <h5 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </h5>
            <p class="blog-date">15.09.2020</p>
          </a>
          <a class="col">
            <div class="blog-item blog-item03 mb-3"></div>
            <h5 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </h5>
            <p class="blog-date">15.09.2020</p>
          </a>
        </div>
        <div class="row mb-4">
          <div class="col">
            <a class="card">
              <div class="blog-item blog-item04 mt-3 mb-3"></div>
              <h5 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </h5>
              <p class="blog-date mb-5">15.09.2020</p>
            </a>
            <a class="card">
              <div class="blog-item blog-item07 mb-3"></div>
              <h5 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </h5>
              <p class="blog-date">15.09.2020</p>
            </a>
          </div>
          <div class="col">
            <a class="card">
              <div class="blog-item blog-item05 mt-3 mb-3"></div>
              <h5 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </h5>
              <p class="blog-date mb-5">15.09.2020</p>
            </a>
            <a class="card">
              <div class="blog-item blog-item08 mb-3"></div>
              <h5 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </h5>
              <p class="blog-date pb-1 mb-5">15.09.2020</p>
            </a>
            <a class="card">
              <div class="blog-item blog-item09 mb-3"></div>
              <h5 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </h5>
              <p class="blog-date">15.09.2020</p>
            </a>
          </div>
          <div class="col">
            <a class="card">
              <div class="blog-item blog-item06 mt-3 mb-3"></div>
              <h5 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </h5>
              <p class="blog-date mb-5">15.09.2020</p>
            </a>
            <a class="card">
              <div class="blog-item blog-item10 mb-3"></div>
              <h5 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </h5>
              <p class="blog-date">15.09.2020</p>
            </a>
          </div>
        </div>
      </div>
      <div class="section-link mb-5">
        <a class="btn btn-outline text-brown-1" href="#" role="button">СЛЕДУЮЩАЯ СТРАНИЦА</a>
      </div>
    </div>
  </main>

  <?php include 'footer.php'?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>