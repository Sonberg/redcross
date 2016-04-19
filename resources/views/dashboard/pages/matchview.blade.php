@extends('app') @section('content') @include('dashboard.navbar')
@include('components.match.large', ['master' => $master])
@include('components.match.large', ['master' => $secondMaster, 'second' => $master])

@endsection
