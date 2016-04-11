@extends('app') @section('content') @include('components.navbar')
<div style="padding-top: 60px;" class="ui container">
    <div class="ui two cards stackable">

        <!-- New in Sweden -->
        <div class="card">
          <div class="content">
            <div class="header">{{trans('basic.immigant-title')}}</div>
            <div class="description">
              Elliot Fu is a film-maker from New York.
            </div>
          </div>
          <a href="{{ LaravelLocalization::getCurrentLocale() }}/immigrant/" class="ui bottom attached button positive">
            <i class="add icon"></i>
            {{trans('basic.immigant-button')}}
          </a>
        </div>

        <!-- Language Friend -->
        <div class="card">
          <div class="content">
            <div class="header">{{trans('basic.established-title')}}</div>
            <div class="description">
              Elliot Fu is a film-maker from New York.
            </div>
          </div>
          <a href=" {{ LaravelLocalization::getCurrentLocale() }}/friend/ " class="ui bottom attached button positive">
            <i class="add icon"></i>
            {{trans('basic.established-button')}}
          </a>
        </div>
    </div>
</div>
<script src="/js/fullBackground.js"></script>
<script>
/*
    $(document).ready(function () {
        function centerOnPage() {
            $('.column').css({
                position: 'absolute',
                left: ($(window).width() - $('.column').outerWidth()) / 2,
                top: ($(window).height() - $('.column').outerHeight() - 200) / 2
            });
        };

        $('.dropdown').dropdown();

        centerOnPage();
        $(window).resize(function () {centerOnPage(); });
        $(window).resize();

        $('.column').removeClass('hidden');
*/
    });
</script>
@endsection
