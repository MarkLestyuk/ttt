@foreach($comics as $com)
        <div class="content"> 
            <div class="main-text col">
                <h1>Комикс в развёрнутом виде</h1>
                <div class="single-news">
                    <p class="single-news-date"> {{$com->release_date}}</p>
                    <h2 class="single-news-title"></h2>
                    <div class="single-news-row">
                        <div class="single-news-pic col">
                            <img src="/public{{$com->image}}" />
                        </div>
                        <div class="single-news-text col">
                           <p></p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                @endforeach 