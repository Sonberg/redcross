@extends('app') @section('content')
<div class="ui container immigration transition hidden">
    <h1 class="center-text">Formulär för nyanlända</h1>
    <div class="column">
        <div class="language center-text">
            <div class="ui floating dropdown labeled search icon button">
                <i class="world icon"></i>
                <span class="text">Select Language</span>
                <div class="menu">
                    <div class="item">Arabic</div>
                    <div class="item">Chinese</div>
                    <div class="item">Danish</div>
                    <div class="item">Dutch</div>
                    <div class="item">English</div>
                    <div class="item">French</div>
                    <div class="item">German</div>
                    <div class="item">Greek</div>
                    <div class="item">Hungarian</div>
                    <div class="item">Italian</div>
                    <div class="item">Japanese</div>
                    <div class="item">Korean</div>
                    <div class="item">Lithuanian</div>
                    <div class="item">Persian</div>
                    <div class="item">Polish</div>
                    <div class="item">Portuguese</div>
                    <div class="item">Russian</div>
                    <div class="item">Spanish</div>
                    <div class="item">Swedish</div>
                    <div class="item">Turkish</div>
                    <div class="item">Vietnamese</div>
                </div>
            </div>
        </div>
        <div class="">
            <form action="/" method="post" class="ui form">
                {!! csrf_field() !!}






                <!-- Accommodation -->
                <div class="field margin-field">
                    <label for="accommodation">Current Accommodation</label>
                    <select name="accommodation" id="accommodation" value="{{ old('accommodation') }}">
                        @foreach($accommodations as $a)
                        <option value="{{$a->id}}">{{$a->title}}</option>
                        @endforeach
                    </select>

                </div>





                <div class="preferences">
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
                                <input type="radio" name="meet_gender" value="women" class="hidden" tabindex="0">
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