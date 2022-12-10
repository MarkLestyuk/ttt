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
        @foreach($comics as $com)
          <!-- Новость -->
         
          <div class="news-wrap col">
            <div class="news-item">
              <div class="news-img-item">
            <img src="/public{{$com->image}}" />
          </div>
              <div class="news-item-text">
                {{$com->release_date}}
                <h2 class="news-item-title"> {{$com->name}}</h2>
                <p>{{$com->short_description}}</p> 
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

  </div>
</body>
</html>