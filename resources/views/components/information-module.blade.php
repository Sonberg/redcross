<div class="ui basic modal">
  <i class="close icon"></i>
  <div class="header center-text">
    @if($type == "immigrant")
      {{trans('form.immigrant-popup-title')}}
    @else
      {{trans('form.friend-popup-title')}}
    @endif
  </div>
  <div class="center-text">
    <div class="description">
      <p>
        @if($type == "immigrant")
          {{trans('form.immigrant-popup-text')}}
        @else
          {{trans('form.friend-popup-text')}}
        @endif
      </p>
    </div>
  </div>
</div>
