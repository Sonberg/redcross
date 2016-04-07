<div class="language center-text">
    <ul class="language_bar_chooser">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <a rel="alternate" class="popup-flag" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}" data-content="{{{ $properties['native'] }}}" data-variation="inverted" data-position="bottom center">
            <i class="@if($localeCode == 'sv') se @elseif($localeCode == 'en') us @elseif($localeCode == 'ar') iq  @endif flag"></i>
        </a>
        @endforeach
    </ul>
</div>

<script>
    $(document).ready(function () {
        $('.popup-flag')
            .popup({
                inline: true
            });
    });
</script>