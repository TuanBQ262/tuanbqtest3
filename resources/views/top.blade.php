
@extends('component.master')
@section('content')

<div class="content_top row">
  <div class="col-12 carouse">
    <div id="carouselId" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active text-center">
          <a href="/"><img src="../vendor/img/carou1.jpg" alt="First slide"></a>
        </div>
        <div class="carousel-item text-center">
          <a href="/"><img src="../vendor/img/carou2.jpg" alt="Second slide"></a>
        </div>
        <div class="carousel-item text-center">
          <a href="/"> <img src="../vendor/img/carou3_1.jpg" alt="Third slide"></a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-12 top_content_main">
    <div class="container">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-7">
          <div class="top_title"><a href="">NEWS一覧</a></div>
          <div class="top_new">
            <ul>
              <?php foreach ($top_posts as $single_post): ?>
              <li class="single_new">
                <span class="new_label">{{ $single_post->post_label }}</span>
                <span class="new_date">{{ $single_post->post_date }} </span>
                <a href="" class="new_title">{{ $single_post->post_title }}</a>
              </li>
            <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <div class="col-3 top_sidebar_right">
          <a href="/form_ipps_2021"><img src="../vendor/img/2021_shiryoumoushikomi.png" alt=""></a>
          <a href="/form_ipps_2021"><img src="../vendor/img/2021_shuttentoiawase.png" alt=""></a>
          <a href="/ganbaru"><img src="../vendor/img/ba-gan2.jpg" alt=""></a>
        </div>
        <div class="col-1"></div>
      </div>
    </div>
  </div>
  <div class="col-12  text-right">
    <div class="container">
      <div class="row">
        <div class="col-11 top_contact">
          IPPS運営協議会（事務局：公益社団法人中央畜産会内）　TEL:03-6206-0846（直通） FAX:03-5289-0890
        </div>
        <div class="col-1"></div>
      </div>
    </div>
  </div>
</div>

@endsection