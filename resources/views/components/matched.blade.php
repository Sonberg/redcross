<div class="margin-top-large">
  <div class="ui page grid main" id="matchview">

      <div class="ui card center">
      <div class="content">
        <div class="float-left">
          @if($master->procent)
            <div class="ui label huge float-left margin-right">{{$master->procent}} %</div>
          @endif
        </div>
          <div class="header margin-top left-text"> {{ $master["immigrant"]["first_name"] }} {{ $master["immigrant"]["last_name"] }} & {{ $master["friend"]["first_name"] }} {{ $master["friend"]["last_name"] }} </div>
            <div class="country left-text">{{$master["immigrant"]["country"]}} & {{$master["friend"]["country"]}}</div>
      </div>
      <div class="content">
          <h4 class="ui sub header">   </h4>
          <div class="ui small feed">
              <div class="event visible-lg-*">
                  <div class="content row">

                    <div class="col-lg-6">
                      <h5 class="ui header float-left margin-top">{{ $master["immigrant"]["first_name"] }}</h5>
                      <div class="ui label float-right pig-pink margin-right">
                        Nyanländ
                      </div>

                      <!-- Phone -->
                      <div class="ui fluid input full-width margin-top no-border">
                          <input type="text" value="{{ $master['immigrant']['phone'] }}" disabled="">
                      </div>

                      <!-- Email -->
                      <div class="ui fluid input full-width margin-top no-border">
                          <input type="text" value="{{ $master['immigrant']['email'] }}" disabled="">
                      </div>


                    </div>
                    <div class="col-lg-6">
                      <h5 class="ui header float-left margin-top">{{ $master["friend"]["first_name"] }}</h5>
                      <div class="ui label float-right pig-pink margin-right">
                        Etablerad
                      </div>

                      <!-- Phone -->
                      <div class="ui fluid input full-width margin-top no-border">
                          <input type="text" value="{{ $master['friend']['phone'] }}" disabled="">
                      </div>

                      <!-- Email -->
                      <div class="ui fluid input full-width margin-top no-border">
                          <input type="text" value="{{ $master['friend']['email'] }}" disabled="">
                      </div>

                    </div>
                    <div class="divider"></div>
                    
                  </div>
              </div>
          </div>
          </div>
          <div class="ui bottom attached button">
            <i class="remove circle icon"></i>
            Remove match
          </div>
      </div>
  </div>
</div>
