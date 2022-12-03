<!DOCTYPE html>
<html>

<head>
  <title>Новости – Проект 3</title>
  <link rel="stylesheet" type="text/css" href="/public/style.css">
</head>

<body>
      @include("menu")
    <div class="contant">
      <div class="main-text col">
        <h1>Новости</h1>

        <div class="row-news">
        @foreach($comic as $com)
          <!-- Новость -->
         
          <div class="news-wrap col">
            <div class="news-item">
              <div class="news-img-item">
            <img src="img/news.jpg" />
          </div>
              <div class="news-item-text">
                <p>{{$com["release_date"]}}</p>
                <h2 class="news-item-title">Что такое Lorem Ipsum?</h2>
                <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p> 
                
                <p><a href="page_1">Подробнее...</a></p>
              </div>
            </div>
          </div>
          <!-- /Новость -->
          @endforeach
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <div class="footer col">
        <p></p>
        <p>ИСП 9-7</p>
    </div>
  </div>
</body>
</html>