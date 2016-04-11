<div class="ui item dropdown language">
  <input type="hidden" name="site-lang" class="site-lang">
    Language <i class="dropdown icon"></i>
    <div class="menu">
      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
      <div class="item" data-value="{{LaravelLocalization::getLocalizedURL($localeCode) }}"  hreflang="{{$localeCode}}"><i class="@if($localeCode == 'sv') se @elseif($localeCode == 'en') us @elseif($localeCode == 'ar') iq  @endif flag"></i>{{{ $properties['native'] }}}</div>
      @endforeach
    </div>
  </div>

  <script>
    $(document).on('change', '.site-lang', function() {
      window.location.replace($('.site-lang').val());
    });
  </script>
