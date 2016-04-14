@extends('app') @section('content')
<div class="container">
  <h1 class="center-text">PLAYGROUND</h1>
  {{$immigrants}}
  <p>
    @foreach($friends as $i)
      {{$i}}
    @endforeach
  </p>
</div>
@endsection
