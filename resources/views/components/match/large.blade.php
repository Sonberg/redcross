<div class="col-xs-12 col-sm-12 col-md-6 paddingcols">
<div class="ui page grid main card-full" id="matchview">

    <div class="ui card">
    <div class="content">
      <i class="fa {{$master->gender == 'man' ? 'fa-mars' : 'fa-venus'}} fa-2x float-right" aria-hidden="true"></i>
      <div class="float-left">
        @if($master->match)
          <div class="ui label huge float-left margin-right">{{$master->match}} %</div>
        @endif
      </div>
        <div class="header margin-top" >{{$master->first_name}} {{$master->last_name}}</div>
        <div class="country">{{$master->country}}</div>

    </div>
    <div class="content">
        <h4 class="ui sub header">   </h4>
        <div class="ui small feed">
            <div class="event">
                <div class="content">
                    <div class="ui fluid labeled input age">
                        <div class="ui label">
                            Ålder
                        </div>
                        <input type="text" value="{{$master->age}}" disabled="">
                    </div>
                    <div class="ui fluid labeled input work">
                        <div class="ui label">
                            Yrke
                        </div>
                        <input type="text" disabled="" value="{{$master->profession}}">
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

       @if($master->result)

        <!-- Loop out matches parameters -->
        <div class="event">
            <div class="content">
        @foreach ($master['result']['matches'] as $m)
              <div class="ui large label interest center-text">
                {{$m}}
              </div>
        @endforeach
      </div>
    </div>

       @else
        <div class="event">
            <div class="content">
              <div class="ui right pointing large label float-left" style="">
                Intressen
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
                Språk
              </div>

              @foreach($master->language as $l)
                <div class="ui large label interest center-text">
                  {{$l}}
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <div class="ui divider"></div>
        @if($master->result)
          @if($master->meet_gender == $second->gender && $master->gender != '0' && $second->gender != '0' )
          <div class="ui label">Jag vill möte en {{$master->meet_gender == 'kvinna' ? "kvinna" : "man"}} </div>
          @endif

          @if($master->meet_family > count($second->family_members))
          <div class="ui label">  Jag vill möte en familj </div>
          @endif

          @if($master->meet_profession == 1 && $master->profession == $second->profession)
          <div class="ui label">Jag vill möte någon i samma branch</div>
          @endif
        @else
          @if($master->meet_gender)
          <div class="ui label">Jag vill möte en {{$master->meet_gender}}</div>
          @endif

          @if($master->meet_family != 0)
          <div class="ui label">  Jag vill möte en familj </div>
          @endif

          @if($master->meet_profession)
          <div class="ui label">Jag vill möte någon i samma branch</div>
          @endif
        @endif
        </div>
        </div>
    </div>
</div>
</div>