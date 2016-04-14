@extends('app') @section('content') @include('components.navbar')
<div class="ui container immigration transition hidden">
      @include('components.information-module', array('type' => 'friend'))
    <h1 class="center-text">{{trans('form.friend-title')}}</h1>
    <div class="column">
        <div class="">
            <form action="/friend" method="post" class="ui form">
                {!! csrf_field() !!}



                <div class="ui card full-width">
                    <div class="content">
                      <div class="header">{{trans('form.basic-title')}}</div>
                      <div class="meta">{{trans('form.basic-meta')}}</div>
                        <div class="description">
                            @include("components.form.basic", ['page' => 'immigrant'])

                            <!-- Accommodation -->
                            <div class="field margin-field">
                                <label for="adress">{{trans('form.adress')}}</label>
                                <input type="text" name="adress" id="adress" class="validate" value="{{ old('adress') }}">
                            </div>

                            <div class="ui grid">

                                <!-- Last Name -->
                                <div class="field ten wide column">
                                    <label for="city">{{trans('form.city')}}</label>
                                    <input type="text" name="city" id="city" class="validate" value="{{ old('city') }}">
                                </div>
                                <!-- Last Name -->
                                <div class="field six wide column">
                                    <label for="zip">{{trans('form.zip')}}</label>
                                    <input type="text" name="zip" id="zip" class="validate" value="{{ old('zip') }}">
                                </div>
                            </div>

                            <!-- Has Car -->
                            <div class="field margin-field preferences">
                                <label for="has_car">{{trans('form.have-car')}}</label>
                                <input type="checkbox" name="has_car" id="has_car" class="validate" value="{{ old('has_car') }}">
                            </div>

                            <!-- Match radius -->
                            <div class="field">
                                <label>{{trans('form.radie-title')}}</label>
                                <select name="radius" class="dropdown">
                                    <option value="else" disabled <?php if(old( 'radius')=="" ) { echo 'selected="selected"'; } ?>>{{trans('form.radie-placeholder')}}</option>
                                    <option value="5" <?php if(old( 'radius')=="0" ) { echo 'selected="selected"'; } ?>>{{trans('form.radie-under')}} 5 km</option>
                                    <option value="10" <?php if(old( 'radius')=="0-4" ) { echo 'selected="selected"'; } ?>>{{trans('form.radie-under')}} 10 km</option>
                                    <option value="20" <?php if(old( 'radius')=="5-8" ) { echo 'selected="selected"'; } ?>>{{trans('form.radie-under')}} 20 km</option>
                                    <option value="else" <?php if(old( 'radius')=="else" ) { echo 'selected="selected"'; } ?>>{{trans('form.radie-over')}} 20 km</option>
                                </select>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="ui card full-width">
                    <div class="content">
                        <div class="header">{{trans('form.family-title')}}</div>
                        <div class="meta">{{trans('form.family-meta')}}</div>
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


                <div class="ui card full-width no-border">
                    <div class="content">
                        <div class="header">{{trans('form.intrests-title')}}</div>
                        <div class="meta">{{trans('form.intrests-meta')}}</div>
                        <div class="description preferences">

                            @include("components.form.intrest")

                        </div>
                    </div>
                </div>

                <button type="submit" class="ui matchbtn center button huge">{{trans('form.apply-button')}}</button>
            </form>
        </div>
    </div>
</div>
<script src="/js/moment.min.js"></script>
<script src="/js/daterangepicker.js"></script>
@include("components.form.script")
@endsection
