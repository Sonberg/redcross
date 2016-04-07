@extends('app') @section('content')
<div class="ui container immigration transition hidden">
    <h1 class="center-text">Formulär för nyanlända</h1>
    <div class="column">
        @include("components.language-select")
        <div class="">
            <form action="/immigrant" method="post" class="ui form">
                {!! csrf_field() !!}



                <div class="ui card full-width">
                    <div class="content">
                        <div class="header">Cute Dog</div>
                        <div class="meta">2 days ago</div>
                        <div class="description">
                            @include("components.form.basic")

                            <!-- Accommodation -->
                            <div class="field margin-field">
                                <label for="accommodation">Current Accommodation</label>
                                <select name="accommodation" id="accommodation" value="{{ old('accommodation') }}">
                                    @foreach($accommodations as $a)
                                    <option value="{{$a->id}}">{{$a->title}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="ui card full-width">
                    <div class="content">
                        <div class="header">Cute Dog</div>
                        <div class="meta">2 days ago</div>
                        <div class="description">

                            @include("components.form.family")
                        </div>
                    </div>
                </div>

                <div class="ui card full-width">
                    <div class="content">
                        <div class="header">Cute Dog</div>
                        <div class="meta">2 days ago</div>
                        <div class="description">

                            @include("components.form.orgin")
                        </div>
                    </div>
                </div>


                <div class="ui card full-width">
                    <div class="content">
                        <div class="header">Cute Dog</div>
                        <div class="meta">2 days ago</div>
                        <div class="description preferences">

                            @include("components.form.intrest")

                        </div>
                    </div>
                </div>

                <div class="ui card full-width no-border">
                    <div class="content">
                        <div class="header">Cute Dog</div>
                        <div class="meta">2 days ago</div>
                        <div class="description preferences">

                            <div class="grouped fields margin-field">
                                <div class="field">
                                    <label>I want to meet someone with a family:</label>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" value="1" name="meet_family" id="meet_family" class="hidden" tabindex="0">
                                        <label>Yes</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="meet_family" value="0" class="hidden" checked="checked" tabindex="0">
                                        <label>Do not matter</label>
                                    </div>
                                </div>
                            </div>

                            <div class="grouped fields margin-field">
                                <div class="field">
                                    <label>I want to meet a:</label>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" value="man" name="meet_gender" id="meet_gender" class="hidden" tabindex="0">
                                        <label>Man</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="meet_gender" value="woman" class="hidden" tabindex="0">
                                        <label>Women</label>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="meet_gender" value="0" class="hidden" checked="checked" tabindex="0">
                                        <label>Do not matter</label>
                                    </div>
                                </div>
                            </div>

                            <div class="grouped fields margin-field">
                                <div class="field">
                                    <label>I want to someone connected to my profession:</label>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" value="1" name="meet_profession" id="meet_profession" class="hidden" tabindex="0">
                                        <label>Yes</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="meet_profession" value="0" class="hidden" checked="checked" tabindex="0">
                                        <label>Do not matter</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <button type="submit" class="ui green button huge">Register</button>
            </form>
        </div>
    </div>
</div>
<script src="/js/moment.min.js"></script>
<script src="/js/daterangepicker.js"></script>
<script>
    $(document).ready(function () {
        $('.immigration').transition('fade left');
        $('select').dropdown();
        $('.dropdown').dropdown();
        $(".radio").checkbox();
    });
</script>
@endsection