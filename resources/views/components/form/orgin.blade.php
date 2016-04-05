<!-- Select Country -->
<div class="field margin-field">
    <label>Country of orgin</label>
    <div class="ui fluid search selection dropdown">
        <input type="hidden" name="country" value="{{ old('country') }}">
        <i class="dropdown icon"></i>
        <div class="default text">Select Country</div>
        <div class="menu">
            @foreach($countries as $country)
            <div class="item" data-value="{{$country->short}}"><i class="{{$country->shortSmall}} flag"></i>{{$country->name}}</div>
            @endforeach
        </div>
    </div>

</div>

<div class="field margin-field">
    <label>Language (Select muliple)</label>
    <div class="ui fluid selection dropdown multiple search">
        <input type="hidden" name="language" value="{{ old('language') }}">
        <i class="dropdown icon"></i>
        <span class="default text">Select known languages</span>
        <div class="menu">
            @foreach($languages as $l)
            <div class="item" data-text="{{$l['eng']}}">
                <i class="right floated">{{$l['native']}}</i> {{$l["eng"]}}
            </div>
            @endforeach
        </div>
    </div>
</div>