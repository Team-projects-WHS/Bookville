<header class="header mb-4 mt-1">
    <div class="row">
      <nav class="navbar navbar-expand-lg">
        <div class="container-xl d-flex justify-content-between align-items-end header-border-bottom p-left-0 p-right-0">
          <a class="col-4 d-flex text-grey-1 text-decoration-none" href="tel:+7 999 140 00 00">
            <span class="d-block header-tel-icon d-inline-block align-top me-2 my-auto"></span>
            +7 999 140 00 00</a>
          <a class="col-4 d-flex justify-content-center" href="#"><img src="img/header/header-logo.png" alt="logo"></a>
          <div class="col-4 collapse navbar-collapse justify-content-end">
            <button class="btn header-icon header-btn-search me-4" type="button"
              onclick="openbox('search'); return false"></button>
            <a class="header-icon header-btn-favorites me-4" href="#"></a>
            <a class="header-icon header-btn-cart" href="#"></a>
          </div>
        </div>
      </nav>
    </div>
    <div class="row">
      <nav class="navbar navbar-expand-lg">
        <div class="container-xl p-left-0 p-right-0">
          <div class="collapse navbar-collapse">
            <div class="dropdown dropdown-section me-3">
            <div class="d-flex dropdown-btn-inner">
              <span class="d-block header-menu-icon d-inline-block align-top my-auto"></span>
                <a class="dropdown__btn btn dropdown-toggle d-flex text-brown-1 p-left-0" type="button" id="dropdownSection"
                  data-bs-toggle="dropdown" aria-expanded="false"> Подразделы
                </a>
            </div>
              <div class="dropdown-menu dropdown-section-menu" aria-labelledby="dropdownSection">
                <div class="d-flex justify-content-between">
                  <div class="col-4 me-3">
                    <p class="dropdown-item dropdown-section-item">Книги</p>
                    <ul class="dropdown-section-inner">
                      <li><a href="#" class="dropdown-section-link">Художественная литература</a></li>
                      <li><a href="#" class="dropdown-section-link">Саморазвитие</a></li>
                      <li><a href="#" class="dropdown-section-link">Психология</a></li>
                      <li><a href="#" class="dropdown-section-link">Философия</a></li>
                      <li><a href="#" class="dropdown-section-link">Здоровье</a></li>
                      <li><a href="#" class="dropdown-section-link mb-0">Книги для детей
                          <ul class="dropdown-subsection-inner">
                            <li><a href="#" class="dropdown-subsection-link">– для 0 - 3 лет</a></li>
                            <li><a href="#" class="dropdown-subsection-link">– для 3 - 7 лет</a></li>
                            <li><a href="#" class="dropdown-subsection-link">– для 7 - 10 лет</a></li>
                          </ul>
                        </a></li>
                      <li><a href="#" class="dropdown-section-link">Книги для подростков</a></li>
                      <li><a href="#" class="dropdown-section-link">Эксклюзивные издания</a></li>
                    </ul>
                  </div>
                  <div class="col-4 me-3">
                    <p class="dropdown-item dropdown-section-item">Игры</p>
                    <ul class="dropdown-section-inner col-4">
                      <li><a href="#" class="dropdown-section-link">Детские</a></li>
                      <li><a href="#" class="dropdown-section-link">Взрослые</a></li>
                    </ul>
                    <p class="dropdown-item dropdown-section-item">Канцеляркие товары</p>
                    <ul class="dropdown-section-inner">
                      <li><a href="#" class="dropdown-section-link">Блокноты</a></li>
                      <li><a href="#" class="dropdown-section-link">Тетради</a></li>
                      <li><a href="#" class="dropdown-section-link">Планеры и трекеры</a></li>
                      <li><a href="#" class="dropdown-section-link">Ручки</a></li>
                      <li><a href="#" class="dropdown-section-link">Карандаши и фломастеры</a></li>
                    </ul>
                    <p class="dropdown-item dropdown-section-item">Сертификаты</p>
                    <p class="dropdown-item dropdown-section-item">Подарочные наборы</p>
                  </div>
                  <div class="col-4">
                    <p class="dropdown-item dropdown-section-item col-4">Упаковка</p>
                    <ul class="dropdown-section-inner">
                      <li><a href="#" class="dropdown-section-link">Упаковочная бумага</a></li>
                      <li><a href="#" class="dropdown-section-link">Коробки</a></li>
                      <li><a href="#" class="dropdown-section-link">Ленты</a></li>
                      <li><a href="#" class="dropdown-section-link">Конверты</a></li>
                      <li><a href="#" class="dropdown-section-link">Открытки</a></li>
                      <li><a href="#" class="dropdown-section-link">Пакеты</a></li>
                      <li><a href="#" class="dropdown-section-link">Подарочный декор</a></li>
                    </ul>
                  </div>



                </div>
              </div>

            </div>
            
            <?php include 'nav.php'?>

          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
              <li class="nav-item me-3">
                <a class="header-facebook">
                  <img src="img/header/facebook.svg" alt="facebook">
                </a>
              </li>
              <li class="nav-item me-3">
                <a class="header-instagram">
                  <img src="img/header/instagram.svg" alt="instagram">
                </a>
              </li>
              <li class="nav-item dropdown p-right-0">
                <button class="btn btn-menu-local dropdown-toggle text-grey-2" type="button" id="lang"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Lang
                </button>
                <ul class="dropdown-menu" aria-labelledby="lang">
                  <li><a class="dropdown-item" href="#">RU</a></li>
                  <li><a class="dropdown-item" href="#">EN</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="container-xl">
      <div class="row">
        <form class="header-form col-3" id="search" style="display: none;">
          <input class="header-form-input form-control mr-2" type="search" placeholder="Поиск" aria-label="Search">
          <button class="btn header-btn-search header-btn-search-small" type="submit"></button>
        </form>
      </div>
    </div>
  </header>