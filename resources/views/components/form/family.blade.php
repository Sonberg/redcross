
<div class="grouped fields margin-field preferences">
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
<hr>
<div class="grouped fields margin-field preferences">
    <div class="field">
        <label>{{trans('form.have-family-title')}}</label>
    </div>

    <div class="field">
        <div class="ui radio checkbox have_family" value="0">
            <input type="radio" value="0" name="have_family" id="have_family" class="hidden have_family" checked="checked" tabindex="0">
            <label>{{trans('form.have-family-no')}}</label>
        </div>
    </div>

    <div class="field">
        <div class="ui radio checkbox have_family" value="1">
            <input type="radio" value="1" name="have_family" id="have_family" class="hidden have_family" tabindex="0">
            <label>{{trans('form.have-family-yes-in')}}</label>
        </div>
    </div>
    <div class="field">
        <div class="ui radio checkbox have_family" value="0">
            <input type="radio" name="have_family" value="0" class="hidden " tabindex="0">
            <label>{{trans('form.have-family-yes-out')}}</label>
        </div>
    </div>
</div>
<div class="family" style="display:none">

  <!-- Family members -->
  <div class="field">
      <label for="number_members"> {{trans('form.family-number')}}</label>
      <input type="number" name="number_members" id="number_members" value="1" value="{{ old('number_members') }}">

  </div>
  <!-- Kids age -->
  <div class="field {{ $errors->has('age_kids') ? ' has-error error' : '' }}">
      <label>{{trans('form.family-kids')}}</label>
      <select name="age_kids" class="dropdown">
          <option value="" disabled <?php if(old( 'age_kids')=="" ) { echo 'selected="selected"'; } ?>>{{trans('form.kids-placeholder')}}</option>
          <option value="0" <?php if(old( 'age_kids')=="0" ) { echo 'selected="selected"'; } ?>>{{trans('form.no-kids')}}</option>
          <option value="0-4" <?php if(old( 'age_kids')=="0-4" ) { echo 'selected="selected"'; } ?>>0-4</option>
          <option value="5-8" <?php if(old( 'age_kids')=="5-8" ) { echo 'selected="selected"'; } ?>>5-8</option>
          <option value="8-12" <?php if(old( 'age_kids')=="8-12" ) { echo 'selected="selected"'; } ?>>8-12</option>
          <option value="13-20" <?php if(old( 'age_kids')=="13-20" ) { echo 'selected="selected"'; } ?>>13-20</option>
          <option value="20" <?php if(old( 'age_kids')=="20" ) { echo 'selected="selected"'; } ?>>20+</option>
      </select>
      @if ($errors->has('age_kids'))<span class="help-block ui pointing red basic label center">{{ $errors->first('age_kids') }}</span> @endif
  </div>

</div>
<script type="text/javascript">
  $(document).on('click', '.have_family', function() {
    var value = $(this).attr("value");
    if(value == 1) {
      $('.family').slideDown();
    } else {
      $('.family').slideUp();
    }
  });
</script>
