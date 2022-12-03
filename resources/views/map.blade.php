<!DOCTYPE html>
<html>

<head>
  <title>Контакты – Проект 3</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="contant">
      <div class="main-text col">
      @include("menu")
        <div class="contacts-row">
            <div class="contacts-list">
              <h1>Контакты</h1>
              <ul class="contacts">
                <li class="address-icon icon">Адрес: г. Омск, пр. Комарова, 13</li>
                <li class="phone-icon icon">тел.: <a href="tel:+71234567990">+7 (123) 456-79-90</a></li>
                <li class="mail-icon icon">
                  E-mail:
                  <a href="mailto:info@company.ru?subject=Письмо с сайта" target="_blank">info@company.ru</a>
                </li>
              </ul>
            </div><!-- /contacts-list -->

            <div class="contacts-form">
              <form method="get" action="">
                <p><input type="text" name="user" placeholder="Имя" class="user-field"></p>
                <p><input type="email" name="email" placeholder="E-mail" class="email-field"></p>
                <p><textarea name="text" placeholder="Сообщение" class="text-field"></textarea></p>
                <p><input type="submit" value="Отправить" class="form-btn"></p>
              </form>
            </div>
            <div class="clear"></div>
        </div><!-- /contacts-row -->
          <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A66c1c0b6271104a6ecf47af28c6f5ee02ecb2c998f0e7e4593fc3fe0bbe53521&amp;width=auto&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
          </div>

      </div>
    </div>

    <div class="footer col">
        <p>Клевако Станислав Валентинович</p>
        <p>ИСП 9-7</p>
    </div>
    
  </div>

</body>

</html>
