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
                <h2 class="news-item-title"> {{$com->price}}</h2>

          <p><a href="page/{{$com->id}}">Подробнее...</a></p>

                
              </div>
            </div>
          </div>
          <!-- /Новость -->
          @endforeach
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="clear"></div>
        </div>
      </div>
    </div>

  </div>
</body>
</html>