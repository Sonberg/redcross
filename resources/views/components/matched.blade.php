<div class="margin-top-large col-lg-6 col-sm-12">
  <div class="ui page main" id="matchview">

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
                    <div class="ui divider float-left"></div>
                    <div class="col-lg-12">
                      @foreach($master->parameters as $p)
                        <div class="ui large label cap interest center-text">
                          {{$p}}
                        </div>
                      @endforeach
                    </div>
                  </div>
              </div>
          </div>
          </div>
          <div class="extra content">
            <i class="checkmark icon"></i>
            Matched {{$master["created_at"]}}
          </div>
          <form class="" action="" method="post">
            {!! csrf_field() !!}
            <input type="hidden" name="friend" value="{{$master['friend']['id']}}">
            <input type="hidden" name="immigrant" value="{{$master['immigrant']['id']}}">
            <input type="hidden" name="id" value="{{$master['id']}}">
            <button type="submit" class="ui bottom attached button">
              <i class="remove circle icon"></i>
              Ta bort matchning
            </button>
          </form>
      </div>
  </div>
</div>
