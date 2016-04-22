<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 margin-top-large">
    <div class="column padding-reset">
        <div class="card">
            <div class="content">
                <div class="description">

                    <div class="ui horizontal segments">
                        <div class="ui segment">
                        <p>{{$master->first_name}} {{$master->last_name}}</p>
                    </div>
                    <div class="ui segment cap">
                        <p>{{$master->gender}}</p>
                    </div>
                    <div class="ui segment">
                        <p>{{$master->country}}</p>
                    </div>
                    <div class="ui segment">
                        @if($master->created_at != null)
                          <p>{{$master->human}}</p>
                        @endif
                    </div>
                </div>
            </div>


        </div>

        <div class="ui buttons bottom attached button">
            <button class="ui button matchbtn"><div>Matcha nu<div class="circle-base circle-front">{{$master->count}}</div></div></button>
            <button class="ui button">Mer info</button>
        </div>
    </div>
  </div>
</div>
