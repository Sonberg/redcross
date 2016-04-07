@extends('app') @section('content')
<div class="ui container">
    <div class="column hidden">
        <img src="/img/logo.png" alt="" class="center logo"> @include('components.language-select')
        <div class="center-text margin-field">
            <a href=" {{ LaravelLocalization::getCurrentLocale() }}/immigrant/" class="ui button basic huge">{{trans('basic.immigant-button')}}</a>
            <a href=" {{ LaravelLocalization::getCurrentLocale() }}/friend/ " class="ui button basic huge">{{trans('basic.established-button')}}</a>
        </div>
    </div>
</div>
<script src="/js/fullBackground.js"></script>
<script>
    $(document).ready(function () {
        function centerOnPage() {
            $('.column').css({
                position: 'absolute',
                left: ($(window).width() - $('.column').outerWidth()) / 2,
                top: ($(window).height() - $('.column').outerHeight() - 200) / 2
            });
        };

        $('.dropdown').dropdown();

        centerOnPage();
        $(window).resize(function () {centerOnPage(); });
        $(window).resize();
        
        $('.column').removeClass('hidden');

    });
</script>
@endsection