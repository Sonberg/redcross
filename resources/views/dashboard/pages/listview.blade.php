@extends('app') @section('content') @include('components.navbar')

<div class="ui page grid main" id="listview">

    <div class="row center">



                 @foreach($immigrant as $i)

        <div class="col-xs-12 col-sm-12 col-md-6 paddingcols">
            <div class="column padding-reset">
                <div class="card">
                    <div class="content">
                        <div class="description">

                            <div class="ui horizontal segments">
                                <div class="ui segment">
                                    <p>{{$i->first_name}} {{$i->last_name}}</p>
                                </div>
                                <div class="ui segment">
                                    <p>{{ucfirst($i->gender)}}</p>
                                </div>
                                <div class="ui segment">
                                    <p>{{$i->orgin}}</p>
                                </div>
                                <div class="ui segment">
                                    <p>{{ date('d F, Y', strtotime($i->created_at)) }}</p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="ui buttons bottom attached button">
                        <button class="ui button matchbtn"><div>Matcha nu<div class="circle-base circle-front">7</div></div></button>
                        <button class="ui button">Mer info</button>
                    </div>
                </div>
            </div>


        </div>
            @endforeach
    </div>

    </div>

@endsection