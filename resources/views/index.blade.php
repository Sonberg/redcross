@extends('app') @section('content')
<div class="ui container transition hidden">
    <h1 class="center-text">Formulär för nyanlända</h1>
    <div class="column">
        <div class="language center-text">
            <div class="ui floating dropdown labeled search icon button">
                <i class="world icon"></i>
                <span class="text">Select Language</span>
                <div class="menu">
                    <div class="item">Arabic</div>
                    <div class="item">English</div>
                    <div class="item">Swedish</div>
                </div>
            </div>
        </div>
        <div class="center-text margin-field">
            <button type="submit" class="ui button basic huge">{{trans('basic.immigant-button')}}</button>
            <button type="submit" class="ui button basic huge">{{trans('basic.established-button')}}</button>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.transition').transition('fade down');
        $('.dropdown').dropdown();
    });
</script>
@endsection