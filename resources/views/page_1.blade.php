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
                    <p class="single-news-date">27.09.2022</p>
                    <h2 class="single-news-title">Что такое Lorem Ipsum?</h2>
                    <div class="single-news-row">
                        <div class="single-news-pic col">
                            <img src="img/news.jpg" />
                        </div>
                        <div class="single-news-text col">
                           <p> Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.
                            </p>
                            <p> Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
                            </p>
                            <p> Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад.
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <h2>Читайте другие новости</h2>

                <div class="row-news">
                    
                    <!--Новость-->
                    <div class="news-wrap col">
                        <div class="news-item">

                            <div class="news-img-wrap">
                                <a href="news-single.html"><img src="img/news.jpg" /></a>
                            </div>

                                <div class="news-item-text">
                                    <p class="news-item-date">27.09.2022</p>
                                    <h2 class="news-item-title">Что такое Lorem Ipsum?</h2>
                                    <p class="news-item-excerpt">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                                    <p><a href="news-single.html">Подробнее...</a></p>
                                </div>
                        </div>
                    </div>
                    <!--/Новость-->

                    <!--Новость-->
                    <div class="news-wrap col">
                        <div class="news-item">
                            <div class="news-img-wrap">
                                <a href="news-single.html"><img src="img/news.jpg" /></a>
                            </div>
                                <div class="news-item-text">
                                    <p class="news-item-date">27.09.2022</p>
                                    <h2 class="news-item-title">Что такое Lorem Ipsum?</h2>
                                    <p class="news-item-excerpt">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                                    <p><a href="news-single.html">Подробнее...</a></p>
                                </div>
                        </div>
                    </div>
                    <!--/Новость-->

                    <!--Новость-->
                    <div class="news-wrap col">
                        <div class="news-item">
                            <div class="news-img-wrap">
                                <a href="news-single.html"><img src="img/news.jpg" /></a>
                            </div>
                                <div class="news-item-text">
                                    <p class="news-item-date">27.09.2022</p>
                                    <h2 class="news-item-title">Что такое Lorem Ipsum?</h2>
                                    <p class="news-item-excerpt">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                                    <p><a href="news-single.html">Подробнее...</a></p>
                                </div>
                        </div>
                    </div>
                    <!--/Новость-->

                    <div class="clear"></div>

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