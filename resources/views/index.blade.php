@extends('app') @section('content') @include('components.navbar')
<div style="padding-top: 160px;" class="ui container">
  <div class="row">
    <div class="columns col-lg-12">
      <div class="container center">
        @include('components.language-change-index')
      </div>
    </div>
    </div>
  <div class="row">
    <div class="columns col-lg-12">
        <!-- New in Sweden -->
        <div class="columns col-lg-6 col-sm-6">

          <div class="content">
            <h1 class="header big-header center-text aligned">{{trans('basic.immigant-title')}}</h1>
            <div class="description center-text aligned">
              {{trans('basic.immigant-body')}}
            </div>
          </div>

           <!-- Button -->
          <a href="{{ LaravelLocalization::getCurrentLocale() }}/immigrant/" class="ui icon big center grey button">
            {{trans('basic.immigant-button')}}
          </a>

        </div>

        <!-- Language Friend -->
        <div class="columns col-lg-6 col-sm-6">
          <div class="content">
            <h1 class="header big-header center-text aligned">{{trans('basic.established-title')}}</h1>
            <div class="description center-text aligned">
              {{trans('basic.established-body')}}
            </div>
          </div>

          <!-- Button -->
          <a href=" {{ LaravelLocalization::getCurrentLocale() }}/friend/ " class="ui icon center big grey button">
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
</script>


@endsection
