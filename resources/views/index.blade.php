@extends('app') @section('content') @include('components.navbar')
<div style="padding-top: 160px;" class="ui container">
  <div class="row">
    <div class="columns col-lg-12">

        <!-- New in Sweden -->
        <div class="columns col-lg-6 col-sm-6 margin-top-bottom">

          <div class="content">
            <h2 class="header big-header center-text aligned">{{trans('basic.immigant-title')}}</h2>
            <div class="description center-text aligned">
              {{trans('basic.immigant-body')}}
            </div>
          </div>

           <!-- Button -->
          <a href="{{ LaravelLocalization::getCurrentLocale() }}/immigrant/" class="ui button black center">
            {{trans('basic.immigant-button')}}
          </a>

        </div>

        <!-- Language Friend -->
        <div class="columns col-lg-6 col-sm-6 margin-top-bottom">
          <div class="content">
            <h2 class="header big-header center-text aligned">{{trans('basic.established-title')}}</h2>
            <div class="description center-text aligned">
              {{trans('basic.established-body')}}
            </div>
          </div>

          <!-- Button -->
          <a href=" {{ LaravelLocalization::getCurrentLocale() }}/friend/ " class="ui button black center">
            {{trans('basic.established-button')}}
          </a>

        </div>
    </div>
    <div class="center">
      @include('components.language-change-index', ["class" => "large"])
    </div>
</div>
<script src="/js/cb/classie.js"></script>
<script src="/js/cb/modernizr.custom.js"></script>


@endsection
