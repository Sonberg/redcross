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
        <button class="ui button immigrant-btn active">Nyanlända</button>
        <button class="ui button friend-btn">Etablerade</button>
      </div>
      <script type="text/javascript">
      var delay = 270;

        $(document).on('click', '.buttons.flip-button button', function() {
          if ($(this).hasClass('friend-btn')) {
            if(!$('.active').hasClass('friend-btn')) {
              $('.immigrant').transition('scale');
              setTimeout(function() {
                $('.friend').transition('scale');
              }, delay);
            }
          } else {
            if(!$('.active').hasClass('immigrant-btn')) {
              $('.friend').transition('scale');
              $('.friend').height(0);
              setTimeout(function() {
                $('.immigrant').transition('scale');
              }, delay);
            }
          }
          $('.buttons.flip-button button').removeClass('active');
          $(this).addClass('active');
        });
      </script>
  
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
