<!-- Select Country -->
<div class="field {{ $errors->has('country') ? ' has-error error' : '' }}">
    <label>{{trans('form.country-title')}}</label>
    <div class="ui fluid search selection dropdown">
        <input type="hidden" name="country" value="{{ old('country') }}">
        <i class="dropdown icon"></i>
        <div class="default text">{{trans('form.country-placeholder')}}</div>
        <div class="menu">
            @foreach($countries as $country)
            <div class="item" data-value="{{$country->short}}"><i class="{{$country->shortSmall}} flag"></i>{{$country->name}}</div>
            @endforeach
        </div>
    </div>
    @if ($errors->has('country'))<span class="help-block ui pointing red basic label center">{{ $errors->first('country') }}</span> @endif
</div>

<div class="field {{ $errors->has('language') ? ' has-error error' : '' }}">
    <label>{{trans('form.language-title')}}</label>
    <div class="ui fluid selection dropdown multiple search language">
        <input type="hidden" name="language" value="{{ old('language') }}">
        <i class="dropdown icon"></i>
        <span class="default text">{{trans('form.language-placeholder')}}</span>
        <div class="menu">
            @foreach($languages as $l)
            <div class="item" data-text="{{$l['eng']}}">
                <i class="right floated">{{$l['native']}}</i> {{$l["eng"]}}
            </div>
            @endforeach
        </div>
    </div>
    @if ($errors->has('language'))<span class="help-block ui pointing red basic label center">{{ $errors->first('language') }}</span> @endif
</div>
