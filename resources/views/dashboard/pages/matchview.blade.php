@extends('app') @section('content') @include('dashboard.navbar')
<div class="container">
  <form class="" action="" method="post">
    {!! csrf_field() !!}

    @include('components.match.large', ['master' => $master, 'class' => 'paddingcols center' ])
    <div class="ui horizontal divider margin-top-large">
        <button type="submit" class="ui button matchbtn">Matcha</button>
    </div>
    <input type="hidden" name="master-type" value="{{$master->type}}">
    <input type="hidden" name="master" value="{{$master->id}}">
    <input type="hidden" id="procent" name="procent" value="">
    <input type="hidden" id="params" name="parameters" value="">
    <input type="hidden" id="second-id" name="second" value="">
  </form>

<div class="slider col-lg-10 col-lg-offset-1">
  @foreach($second as $s)
    <div class="slider-card" id ="{{$s->id}}" procent="{{$s->match}}" params="<?php echo(str_replace('"', '', json_encode($s["result"]["matches"]))) ?>">@include('components.match.large', ['master' => $s, 'second' => $master, 'class' => 'slider-card'])</div>
    <?php $i++; ?>
  @endforeach
</div>

<script type="text/javascript">
$(document).ready(function() {
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
  function setSecond() {
    $('#second-id').val($('.slick-current').attr('id'));
    $('#procent').val($('.slick-current').attr('procent'));
    $('#params').val($('.slick-current').attr('params'));
  }

  setSecond();
  $(document).on('click', '.slider-card, .slider', function() {
    setSecond();
  });
});
</script>
</div>
@endsection
