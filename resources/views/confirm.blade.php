@extends('app') @section('content') @include('components.navbar')
  <h1 class="center absolut-center">{{trans('basic.confirm-title')}}</h1>
  <h2 class="ui sub header center absolut-center">
    {{trans('basic.confirm-subtitle')}}
  </h2>
@endsection
