@extends('app') @section('content') @include('components.navbar')

<div class="ui page grid main" id="listview">

    @foreach($immigrants as $i)
      {{$i}}
    @endforeach

</div>

@endsection
