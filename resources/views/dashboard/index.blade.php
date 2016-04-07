@extends('app') @section('content') @include('dashboard.navbar')

<div class="ui page grid main">
    <div class="row">
        <div class="column padding-reset">
            {{$user}}
            <div class="ui link cards">
                @foreach($immigrant as $i)
                <div class="ui card">
                    <div class="content">
                       <div class="ui top right attached label">{{$i->match}} %</div>
                        <div class="header">{{$i->first_name}} {{$i->last_name}}</div>
                        <div class="meta">{{$i->email}}</div>
                        <div class="description">
                            <p>{{$i->language}}</p>
                            <p>{{$i->intrests}}</p>
                        </div>
                    </div>
                </div>
                @endforeach @foreach($friend as $f)
                <div class="ui card">
                    <div class="content">
                        <div class="header">{{$f->first_name}} {{$f->last_name}}</div>
                        <div class="meta">{{$f->email}}</div>
                        <div class="description">
                            <p>{{$f->language}}</p>
                            <p>{{$f->intrests}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
