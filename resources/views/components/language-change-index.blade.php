<div class="ui icon buttons" style="">
@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
  <a href="{{LaravelLocalization::getLocalizedURL($localeCode) }}" class="ui button"><i class="@if($localeCode == 'sv') se @elseif($localeCode == 'en') us @elseif($localeCode == 'ar') iq  @endif flag"></i></a>
@endforeach
</div>

<script>
    $(document).on('change', '.site-lang', function() {
        window.location.replace($('.site-lang').val());
    });
</script>
