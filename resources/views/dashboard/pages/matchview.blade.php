@extends('app') @section('content') @include('dashboard.navbar')
@include('components.match.large', ['master' => $master, 'class' => 'paddingcols center container' ])

<div class="ui horizontal divider">
    OCH
  </div>

<div class="slider col-lg-10 col-lg-offset-1">
  @foreach($second as $s)
    <div class="slider-card">@include('components.match.large', ['master' => $s, 'second' => $master, 'class' => 'slider-card'])</div>
  @endforeach
</div>
<button class="ui button matchbtn huge fixed-bottom">Matcha</button>

<script type="text/javascript">
  $('.slider').slick({
    centerMode: true,
    centerPadding: '260px',
    focusOnSelect: true,
    infinite: false,
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
</script>
@endsection
