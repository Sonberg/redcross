<button class="circular ui icon center matchbtn button" style="margin-top: 10px !important">
  <i class="icon help"></i>
</button>

<div class="ui basic modal">
  <button class="ui basic button inverted center">
    <i class="close icon"></i>
    {{trans('basic.close')}}
  </button>
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

<script type="text/javascript">
  $(document).ready(function() {
    $(document).on('click', '.circular.ui.icon.center.matchbtn.button', function() {
      $('.ui.basic.modal').modal('show');
    });
  });
</script>
