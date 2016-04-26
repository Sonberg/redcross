@extends('app') @section('content') @include('dashboard.navbar')
  <div class="container transition hidden" id="toAnimate">
    @foreach($matches as $m)
      @include('components.matched', ['master' => $m])
    @endforeach
    <div class="center-table">
      {!! $matches->render() !!}
    </div>
  </div>
@endsection
