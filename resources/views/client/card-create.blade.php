<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
  <title>Document</title>
</head>

<body>
  <main class="redact">
    <div class="container">

      <h2 class="main-title">Настройка дизайна</h2>
    </div>
    <div class="background">
      <div class="container">
        <form action="#" class="main__form">
          <h3 class="sub-title">Название карты</h3>
          <div class="input-text">
            <label for="">
              <input class="card-input" type="text" placeholder="Например: моя первая карта">
            </label>
          </div>
          <h5 class="background-hat">Логотип</h5>
          <div class="insert-inner">
            <div class="drop-zone">

              <input type="file" name="myFile" class="drop-zone__input">
              <div class="logo-inner">
                <img src="" alt="">
                <span>Перетяните файл</span>
              </div>
              <label for="drop-zone__input" class="input__file-button">
                <p class="input__file-button-text">Выбрать</p>
              </label>
            </div>
            <ul class="bulleted-list">
              <li>Файл должен быть иметь формат png</li>
              <li>Рекомендованный размер: 480х150 пикселей.<br> Минимальная высота 150 пикселей.<br> Максимальная высота
                должна быть равна<br> пропорции (высота х 3.2).</li>
            </ul>
          </div>
          <h3 class="sub-title">Цвет карты</h3>
          <div class="background2">
            <div class="back">
              <p class="background-hat">Фон "шапки"</p>
              <div class="input-colorr">
                <input type="color" class="input-color" value="#1100ff" />
                <input type="text" class="input-color-text1">
              </div>
            </div>
            <div class="back">
              <p class="background-hat">Фон страницы</p>
              <div class="input-colorr">
                <input type="color" class="input-color2" value="#ffffff" />
                <input type="text" class="input-color-text2">
              </div>
            </div>
          </div>
          <h3 class="sub-title">Количество штампов</h3>
          <div class="stamp">
            <p class="background-hat">Выберите сколько всего штампов<br> будет размещено на карте (от 1 до 30)</p>
          </div>
          <div class="number-stamp">
            <div class="number">1</div>
            <div class="number">2</div>
            <div class="number">3</div>
            <div class="number">4</div>
            <div class="number">5</div>
            <div class="number">6</div>
            <div class="number">7</div>
            <div class="number">8</div>
            <div class="number">9</div>
            <div class="number">10</div>
            <div class="number">11</div>
            <div class="number">12</div>
            <div class="number">13</div>
            <div class="number">14</div>
            <div class="number">15</div>
            <div class="number">16</div>
            <div class="number">17</div>
            <div class="number">18</div>
            <div class="number">19</div>
            <div class="number">20</div>
            <div class="number">21</div>
            <div class="number">22</div>
            <div class="number">23</div>
            <div class="number">24</div>
            <div class="number">25</div>
            <div class="number">26</div>
            <div class="number">27</div>
            <div class="number">28</div>
            <div class="number">29</div>
            <div class="number">30</div>
          </div>
          <div class="appearance">
            <h3 class="sub-title">Внешний вид штампов</h3>
            <p class="background-hat">Изображение активного штампа</p>
            <div class="form__tab-inner">
              <div class="form__tab">
                <div class="form__tab-img">
                  <img src="img/icons/3.png" alt="water">
                </div>
                <div class="form__tab-name-inenr">

                </div>
                <div class="form__tab-arrow">
                  <img src="" alt="arrow">
                </div>
              </div>
              <div class="form__tab-content">
                <img src="img/icons/1.png" alt="">
                <img src="img/icons/2.png" alt="">
                <img src="img/icons/3.png" alt="">
                <img src="img/icons/4.png" alt="">
                <img src="img/icons/5.png" alt="">
                <img src="img/icons/6.png" alt="">
                <img src="img/icons/7.png" alt="">
                <img src="img/icons/8.png" alt="">
                <img src="img/icons/9.png" alt="">
                <img src="img/icons/10.png" alt="">
                <img src="img/icons/11.png" alt="">
                <img src="img/icons/12.png" alt="">
                <img src="img/icons/13.png" alt="">
                <img src="img/icons/14.png" alt="">
                <img src="img/icons/15.png" alt="">
              </div>
            </div>
            <div class="appearance-of-stamps">
            </div>

          </div>
          <div class="form__botton-inner">
            <div class="form__button">
              <a href="#" class="form__but">Назад</a>
            </div>
            <div class="form__button">
              <a href="next.html" class="form__but">Следующий шаг</a>
            </div>
          </div>
        </form>

      </div>
    </div>
  </main>


</body>

</html>

