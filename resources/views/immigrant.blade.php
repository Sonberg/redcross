@extends('app') @section('content') @include('components.navbar')
<div class="ui container immigration transition hidden">
      @include('components.information-module', array('type' => 'immigrant'))
    <h1 class="center-text" style="margin-top: 24px; margin-bottom: 0"> {{trans('form.immigrant-title')}} </h1>
    <div class="column">
        <div class="">
            <form action="/immigrant" method="post" class="ui form">
                {!! csrf_field() !!}
                <div class="ui card full-width">
                    <div class="content">
                        <div class="header">{{trans('form.basic-title')}}</div>
                        <div class="meta">{{trans('form.basic-meta')}}</div>
                        <div class="description">
                            @include("components.form.basic")

                            <!-- Accommodation -->
                            <div class="field margin-field">
                                <label for="accommodation">{{trans('form.accommodation')}}</label>
                                <select name="accommodation" id="accommodation" value="{{ old('accommodation') }}">
                                  <option value="" disabled selected>{{trans('form.accommodation-placeholder')}}</option>
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
                        <div class="header">Family</div>
                        <div class="meta"></div>
                        <div class="description">

                            @include("components.form.family")
                        </div>
                    </div>
                </div>

                <div class="ui card full-width">
                    <div class="content">
                        <div class="header">Country</div>
                        <div class="meta"></div>
                        <div class="description">

                            @include("components.form.orgin")
                        </div>
                    </div>
                </div>


                <div class="ui card full-width">
                    <div class="content">
                        <div class="header">{{trans('form.preferences-title')}}</div>
                        <div class="meta">{{trans('form.preferences-meta')}}</div>
                        <div class="description preferences">

                            @include("components.form.intrest")

                        </div>
                    </div>
                </div>

                <div class="ui card full-width no-border">
                    <div class="content">
                        <div class="header">{{trans('form.preferences-title')}}</div>
                        <div class="meta">{{trans('form.preferences-meta')}}</div>
                        <div class="description preferences">

                            <div class="grouped fields margin-field">
                                <div class="field">
                                    <label>{{trans('form.meet-family-title')}}</label>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" value="1" name="meet_family" id="meet_family" class="hidden" tabindex="0">
                                        <label>{{trans('form.meet-yes')}}</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="meet_family" value="0" class="hidden" checked="checked" tabindex="0">
                                        <label>{{trans('form.meet-no')}}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="grouped fields margin-field">
                                <div class="field">
                                    <label>{{trans('form.meet-gender-title')}}</label>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" value="man" name="meet_gender" id="meet_gender" class="hidden" tabindex="0">
                                        <label>{{trans('form.meet-gender-man')}}</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="meet_gender" value="woman" class="hidden" tabindex="0">
                                        <label>{{trans('form.meet-gender-woman')}}</label>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="meet_gender" value="0" class="hidden" checked="checked" tabindex="0">
                                        <label>{{trans('form.meet-no')}}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="grouped fields margin-field">
                                <div class="field">
                                    <label>{{trans('form.meet-profession-title')}}</label>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" value="1" name="meet_profession" id="meet_profession" class="hidden" tabindex="0">
                                        <label>{{trans('form.meet-yes')}}</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="meet_profession" value="0" class="hidden" checked="checked" tabindex="0">
                                        <label>{{trans('form.meet-no')}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <button type="submit" class="ui matchbtn center button huge">Send application</button>
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
