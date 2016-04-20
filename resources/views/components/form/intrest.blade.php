<div class="field margin-field {{ $errors->has('intrest') ? ' has-error error' : '' }}">
  <div class="ui fluid selection dropdown multiple search">
      <input type="hidden" name="intrest" value="{{ old('intrest') }}">
      <i class="dropdown icon"></i>
      <span class="default text">{{trans('form.intrest-placeholder')}}</span>
      <div class="menu">
          @foreach($intrests as $i)
          <div class="item" data-text="{{$i->category}}">
            {{$i->category}}
          </div>
          @endforeach
      </div>
  </div>
  @if ($errors->has('intrest'))<span class="help-block ui pointing red basic label center"><strong>{{ $errors->first('intrest') }}</strong></span> @endif
</div>
