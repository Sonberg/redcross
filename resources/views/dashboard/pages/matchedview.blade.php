@extends('app') @section('content') @include('dashboard.navbar')
  <div class="container">
    @foreach($matches as $m)
      {{$m}}
    @endforeach
    {!! $matches->render() !!}
  </div>
@endsection
