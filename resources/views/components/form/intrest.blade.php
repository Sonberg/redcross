<div class="field margin-field">
  <div class="ui fluid selection dropdown multiple search intrest">
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
</div>
