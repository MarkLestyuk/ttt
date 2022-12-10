<!DOCTYPE html>
<html>
<head>
    <title>Новость в развёрнутом виде - project4</title>
    <link rel="stylesheet" type="text/css" href="/public/style.css">
</head>
<body>
      @include("menu")
        <div class="content"> 
            <div class="main-text col">
                <h1>Новость в развёрнутом виде</h1>
                <div class="single-news">
                    <p class="single-news-date"></p>
                    <h2 class="single-news-title"></h2>
                    <div class="single-news-row">
                        <div class="single-news-pic col">
                            <img src="img/news.jpg" />
                        </div>
                        <div class="single-news-text col">
                           <p></p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <h2>Читайте другие новости</h2>

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