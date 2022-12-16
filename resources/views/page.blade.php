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
        <h1>Комиксы</h1>
        <div class="row">
        <div class="col">
            <p class="text-center catalog-sort">Сортировать по:</p>
            <div class="row">
            @if ($n == "name" && $nap=="asc")
                <div class="col text-center">
                    <a href="/public/page/release_date/desc">Году производства(убывание)</a>
                </div>
            @else
            <div class="col text-center">
                    <a href="/public/page/release_date/asc">Году производства(возрастание)</a>
            </div>
            @endif
                        
              @if ($n == "name" && $nap=="asc")
                <div class="col text-center">
                    <a href="/public/page/name/desc">Наименованию(убывание)</a>
                </div>
              @else
              <div class="col text-center">
                    <a href="/public/page/name/asc">Наименованию(возрастание)</a>
                </div>
              @endif

                <div class="col text-center">
                    <a href="/public/page/price">Цене</a>
                </div>
            </div>
        </div>
        <div class="col">
            <p class="text-center catalog-filtr">Фильтр по:</p>
            <div class="row">
                <div class="col text-center">
                    <a href="/public/page/1">Marvel</a>
                </div>
                <div class="col text-center">
                    <a href="/public/page/2">DC</a>
                </div>
                <div class="col text-center">
                    <a href="/public/page/3">Другие</a>
                </div>
            </div>
        </div>
    </div>



        @foreach($comics as $com)
          <!-- Комикс --> 
          <div class="comicss">
          <div class="card" style="width: 18rem;">
            <img src="/public{{$com->image}}" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">{{$com->release_date}}</p>
            <p class="card-text">{{$com->name}}</p>
            <p class="card-text">{{$com->price}}</p>
            <p class="card-text"><a href="page_1/{{$com->id}}">Подробнее...</a></p>
            </div>
          </div>
          </div>
          <!-- /Комикс -->
          @endforeach



          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="clear"></div>
        </div>
      </div>
    </div>

  </div>
</body>
</html>