<!DOCTYPE html>
<html>
<head>
    <title>Новость в развёрнутом виде - project4</title>
    <link rel="stylesheet" type="text/css" href="/public/style.css">
</head>
<body>
      @include("menu")
      <br><br><br><br><br><br><br>

        <div class="content"> 
            <div class="main-text col">

                <div class="single-news">
                    <p class="single-news-date">{{$com->release_date}}</p>
                    <h2 class="single-news-title">{{$com->name}}</h2>
                    <div class="single-news-row">
                        <div class="single-news-pic col">
                            <img src="/public{{$com->image}}" />
                        </div>
                        <div class="single-news-text col"> 
                           <p></p>
                           <p>Категория: {{$com->categories}}</p>
                           <p>Антоганист: {{$com->antagonist}}</p>
                           <p>Издатель: {{$com->author}}</p>
                           <p>Цена: {{$com->price}}</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div> 
                <div class="row-news">
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>