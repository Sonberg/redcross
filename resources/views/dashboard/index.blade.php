@extends('app') @section('content') @include('dashboard.navbar')

<div class="ui page grid main">
    <div class="row">
        <div class="column padding-reset">

       {{--   <div class="ui link cards">
                @foreach($immigrant as $i)
                <div class="ui card">
                    <div class="content">
                       <div class="ui top right attached label">{{$i->match}} %</div>
                        <div class="header">{{$i->first_name}} {{$i->last_name}}</div>
                        <div class="meta">{{$i->email}}</div>
                        <div class="description">
                            <p>{{$i->result}}</p>
                        </div>
                    </div>
                </div>
                @endforeach @foreach($friend as $f)
                <div class="ui card">
                    <div class="content">
                        <div class="header">{{$friend->first_name}} {{$friend->last_name}}</div>
                        <div class="meta">{{$friend->email}}</div>
                        <div class="description">
                            <p>{{$friend->language}}</p>
                            <p>{{$friend->intrests}}</p>
                        </div>

                    </div>
                </div>
                <!-- @endforeach -->--}}


<div class="ui container">
                        <div class="ui three stackable cards">
                            <div class="card">
                                <div class="content">
                                    <div class="description">

                                        <div class="ui horizontal segments">
                                            <div class="ui segment"
                                                 <p>Namn Namnsson</p>
                                            </div>
                                        <div class="ui segment">
                                        <p>Kon</p>
                                    </div>
                                    <div class="ui segment">
                                    <p>Land</p>
                                </div>
                                <div class="ui segment">
                                <p>dagar</p>
                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="ui buttons bottom attached button">
                                    <button class="ui button matchbtn">Matcha nu(xx)</button>
                                    <button class="ui button">Mer info</button>
                                </div>
                            </div>


    </div>


        </div>
    </div>
</div>
@endsection
