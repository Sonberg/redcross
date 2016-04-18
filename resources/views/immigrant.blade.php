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
                            @include("components.form.basic", ['page' => 'immigrant'])

                            <!-- Accommodation -->
                            <div class="field margin-field {{ $errors->has('area') ? ' has-error' : '' }}">
                              <label for="area">{{trans('form.area')}}</label>
                              <div class="ui fluid selection dropdown search">
                                  <input type="hidden" name="area" value="{{ old('area') }}">
                                  <i class="dropdown icon"></i>
                                  <span class="default text">{{trans('form.area-placeholder')}}</span>
                                  <div class="menu">

                                      @foreach($areas as $a)
                                      <div class="item" data-text="{{$a->title}}">
                                          <i class="right floated">{{$a->desc}}</i> {{$a->title}}
                                      </div>
                                      @endforeach
                                  </div>
                              </div>
                              @if ($errors->has('area'))<span class="help-block ui pointing red basic label"><strong>{{ $errors->first('area') }}</strong></span> @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ui card full-width">
                    <div class="content">
                        <div class="header">{{trans('form.family-title')}}</div>
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
                <button type="submit" class="ui matchbtn center button huge">Send application</button>
            </form>
        </div>
    </div>
</div>
<script src="/js/moment.min.js"></script>
<script src="/js/daterangepicker.js"></script>
@include("components.form.script")
@endsection
