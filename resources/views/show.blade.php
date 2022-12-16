<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="/public/style.css">
</head>

<body>
      @include("menu")
    <div class="contant">
      <div class="main-text col">
          <h1>Lorem ipsum</h1>
      </div>
      <div class="text-1">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam laoreet est quis ullamcorper. Vivamus a justo ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras vitae tempor mi, id aliquam tellus. In iaculis venenatis elit eu facilisis. Nulla facilisi. Aliquam dictum ullamcorper nibh, quis egestas massa hendrerit et. Vivamus euismod fermentum blandit. Nulla vitae mi eget nunc bibendum ultrices. Suspendisse semper nec lorem quis interdum
          </p>
          <img scr="">
          
      </div>
    </div>
    <section class="5-com">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach
    @if($loop->first)
    <div class="carousel-item active">
      <img src="/public{{$com->image}}" class="d-block w-100" alt="{{$com->id}}">
    </div>
    @else
    <div class="carousel-item">
      <img src="/public{{$com->image}" class="d-block w-100" alt="{{$com->id}}">
    </div>
    @endif
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

  </div>
</body>
</html>