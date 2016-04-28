@extends('app') @section('content') @include('dashboard.navbar')
<div class="container transition hidden" id="toAnimate">
  <div class="paddingcols center">

  <div class="row" id="view">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="ui page grid main">
              <div class="two ui buttons center btn-max-width">
                  <a href="/dashboard" class="ui button left">Stäng</a>
                  <a href="/dashboard/match/{{ $master->adress ? 'friend' : 'immigrant' }}/{{$master->id}}" class="ui button right matchbtn">Matcha nu</a>
                  </div>
              </div>
          </div>
      </div>
  <div class="row margin-top-large" id="view">

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="page" id="matchview">
              <div class="ui card center">
                  <div class="content">
                    <i class="fa fa-mars fa-2x float-right" aria-hidden="true"></i>
                      <div class="ui label large float-right margin-right"> Potentiella matchningar <div class="detail">{{$count}}</div></div>
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
                                      <input type="text" placeholder="Adress" value="{{$master->adress}}" disabled="">
                                  </div>

                              </div>
                          </div>
                          <div class="event">
                              <div class="content">

                                  <div class="ui fluid labeled input">
                                      <div class="ui label">
                                          E-mail
                                      </div>
                                      <input type="text" placeholder="E-Mail" value="{{$master->email}}" disabled="">
                                  </div>

                              </div>
                          </div>
                          <div class="event">
                              <div class="content">
                                  <div class="ui fluid labeled input">
                                      <div class="ui label">
                                          Telefon
                                      </div>
                                      <input type="text" placeholder="Phone Number" value="{{$master->phone}}" disabled="">
                                  </div>
                              </div>
                          </div>
                          <div class="event">
                              <div class="content">
                                  <div class="ui fluid labeled input age">
                                      <div class="ui label">
                                          Ålder
                                      </div>
                                      <input type="text" placeholder="Age" value="{{$master->age}}" disabled="">
                                  </div>
                                  <div class="ui fluid labeled input work">
                                      <div class="ui label">
                                          Yrke
                                      </div>
                                      <input type="text" placeholder="Profession" value="{{$master->profession}}" disabled="">
                                  </div>
                              </div>
                          </div>
                          <div class="event">
                              <div class="content">
                                  <div class="ui fluid labeled input">
                                      <div class="ui label">
                                          Familj
                                      </div>
                                      <input type="text" value="{{$master->family_members}} members/member, age of kids/kid: {{$master->kids_age}}" disabled="">
                                  </div>
                              </div>
                          </div>
                          <div class="ui divider"></div>
                          <div class="event">
                              <div class="content">
                                <div class="ui right pointing large label float-left" style="">
                                  Intrests
                                </div>

                                @foreach($master->intrests as $i)
                                  <div class="ui large label interest center-text">
                                    {{$i}}
                                  </div>
                                  @endforeach
                              </div>
                          </div>
                          <div class="event">
                              <div class="content">
                                <div class="ui right pointing large label float-left" style="">
                                  Languages
                                </div>

                                @foreach($master->language as $l)
                                  <div class="ui large label interest center-text">
                                    {{$l}}
                                  </div>
                                  @endforeach
                              </div>
                          </div>
                          <div class="ui divider"></div>

                          @if($master->meet_gender)
                          <div class="ui label">Jag vill möta en {{$master->meet_gender == 'woman' ? "kvinna" : "man"}}</div>
                          @endif

                          @if($master->meet_family != 0)
                          <div class="ui label">  Jag vill möta en familj </div>
                          @endif

                          @if($master->meet_profession)
                          <div class="ui label">Jag vill möta någon i samma branch</div>
                          @endif
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="row" id="view">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="page"></div>
          <div class="ui form center margin-bottom">
              <form method="POST" class="field">
                  {!! csrf_field() !!}
                  <label class="labelleft margin-top-large">Kommentar</label>
                  <input type="hidden" name="person" value="{{$master->id}}">
                  <input type="hidden" name="type" value="{{ $master->adress ? 'friend' : 'immigrant' }}">
                  <textarea class="btn-max-width" name="notes">{{$master->notes}}</textarea>
                  <button type="submit" class="ui bottom attached button btn-max-width col-lg-12 col-sm-12" tabindex="0">Spara</button>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
