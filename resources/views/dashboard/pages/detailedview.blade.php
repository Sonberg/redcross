@extends('app') @section('content') @include('dashboard.navbar')
<div class="row" id="view">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="ui page grid main">
            <div class="two ui buttons center btn-max-width">
                <button class="ui button left">Stäng</button>
                <button class="ui button right matchbtn">Matcha nu</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="page" id="matchview">
            <div class="ui card center">
                <div class="content">
                    <i class="fa fa-mars fa-2x float-right" aria-hidden="true"></i>
                    <div class="header labelleft"id="matchview" style="text-align: left!important; padding-top:5px;">{{$master->first_name}} {{$master->last_name}}</div>
                    <div class="country labelleft" id="matchview" style="text-align: left!important;">{{$master->country}}</div>
                </div>
                <div class="content">
                    <h4 class="ui sub header"></h4>
                    <div class="ui small feed">
                        <div class="event">
                            <div class="content">

                                <div class="ui fluid labeled input">
                                    <div class="ui label">
                                        Adress
                                    </div>
                                    <input type="text" placeholder="Adress" value="{{$master->adress}}">
                                </div>

                            </div>
                        </div>
                        <div class="event">
                            <div class="content">

                                <div class="ui fluid labeled input">
                                    <div class="ui label">
                                        E-mail
                                    </div>
                                    <input type="text" placeholder="E-Mail" value="{{$master->email}}">
                                </div>

                            </div>
                        </div>
                        <div class="event">
                            <div class="content">
                                <div class="ui fluid labeled input">
                                    <div class="ui label">
                                        Telefon
                                    </div>
                                    <input type="text" placeholder="Phone Number" value="{{$master->phone}}">
                                </div>
                            </div>
                        </div>
                        <div class="event">
                            <div class="content">
                                <div class="ui fluid labeled input age">
                                    <div class="ui label">
                                        Ålder
                                    </div>
                                    <input type="text" placeholder="Age" value="{{$master->age}}">
                                </div>
                                <div class="ui fluid labeled input work">
                                    <div class="ui label">
                                        Yrke
                                    </div>
                                    <input type="text" placeholder="Profession" value="{{$master->profession}}">
                                </div>
                            </div>
                        </div>
                        <div class="event">
                            <div class="content">
                                <div class="ui fluid labeled input">
                                    <div class="ui label">
                                        Familj
                                    </div>
                                    <input type="text" placeholder="mysite.com">
                                </div>
                            </div>
                        </div>
                        <div class="event">
                            <div class="content">
                                <div class="ui large label interest center-text">
                                  Fika
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" id="view">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="page"></div>
        <div class="ui form center">
            <div class="field">
                <label class="labelleft">Kommentar</label>
                <textarea class="btn-max-width"></textarea>
                <div class="ui bottom attached button btn-max-width" tabindex="0">Spara</div>
            </div>
        </div>
    </div>
</div>
@endsection
