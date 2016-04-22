@extends('app') @section('content') @include('dashboard.navbar')
<div class="container">
@include('components.match.large', ['master' => $master, 'class' => 'paddingcols center' ])
<div class="ui horizontal divider margin-top-large">
    <button class="ui button matchbtn">Matcha</button>
  </div>

<div class="slider col-lg-10 col-lg-offset-1">
  @foreach($second as $s)
    <div class="slider-card">@include('components.match.large', ['master' => $s, 'second' => $master, 'class' => 'slider-card'])</div>
    <?php $i++; ?>
  @endforeach
</div>

<script type="text/javascript">
  $('.slider').slick({
    centerMode: true,
    centerPadding: '150px',
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
</div>
@endsection
