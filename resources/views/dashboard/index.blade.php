@extends('app') @section('content') @include('dashboard.navbar')

<div class="ui page grid main" id="dashboard">

    <div class="ui statistics center">
        <div class="statistic">
            <div class="value">
                22
            </div>
            <div class="label">
                Faves
            </div>
        </div>
        <div class="statistic">
            <div class="value">
                31,200
            </div>
            <div class="label">
                Views
            </div>
        </div>
        <div class="statistic">
            <div class="value">
                22
            </div>
            <div class="label">
                Members
            </div>
        </div>
        <div class="statistic">
            <div class="value">
                22
            </div>
            <div class="label">
                Members
            </div>
        </div>
    </div>

    <div class="row center">
      <div class="ui buttons center flip-button">
        <button class="ui button active">Nyanlända</button>
        <button class="ui button friend-btn">Etablerade</button>
      </div>
      <script type="text/javascript">
      var delay = 270;

        $(document).on('click', '.buttons.flip-button button', function() {
          $('.buttons.flip-button button').removeClass('active');
          $(this).addClass('active');
          if ($(this).hasClass('friend-btn')) {
            $('.immigrant').transition('scale');
            setTimeout(function() {
              $('.friend').transition('scale');
            }, delay);
          } else {
            $('.friend').transition('scale');
            $('.friend').height(0);
            setTimeout(function() {
              $('.immigrant').transition('scale');
            }, delay);
          }
        });
      </script>
      <div class="col-lg-7 col-lg-offset-2 container left-text">
        <b>
        <div class="col-lg-5" style="padding-left: 60px;">
          Namn
        </div>
        <div class="col-lg-3">
            Kön
        </div>

        <div class="col-lg-3">
          Land
        </div>
        <div class="col-lg-1">
          Registrerads
        </div>
      </b>
      </div>
      <div class="immigrant">
        @foreach($immigrant as $i)
          @include('components.index-detail', ['master' => $i])
        @endforeach
      </div>

      <div class="friend transition hidden">
        @foreach($friend as $f)
          @include('components.index-detail', ['master' => $f])
        @endforeach
      </div>
</div>





</div>




</div>




</div>


        </div>
    </div>
</div>
@endsection
