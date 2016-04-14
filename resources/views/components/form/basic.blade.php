<!-- First Name -->
<div class="field">
    <label for="first_name">{{trans('form.first-name')}}</label>
    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="validate">
</div>

<!-- Last Name -->
<div class="field">
    <label for="last_name">{{trans('form.last-name')}}</label>
    <input type="text" name="last_name" id="last_name" class="validate" value="{{ old('last_name') }}">
</div>

<div class="field margin-field">
    <label for="gender">{{trans('form.gender')}}</label>
    <select name="gender" id="gender">
        <option value="" disabled <?php if(old( 'gender')=="" ) { echo 'selected="selected"'; } ?>>{{trans('form.gender-placeholder')}}</option>
        <option value="man" <?php if(old( 'gender')=="man" ) { echo 'selected="selected"'; } ?>>{{trans('form.man')}}</option>
        <option value="woman" <?php if(old( 'gender')=="woman" ) { echo 'selected="selected"'; } ?>>{{trans('form.woman')}}</option>
        <option value="no" <?php if(old( 'gender')=="no" ) { echo 'selected="selected"'; } ?>>{{trans('form.unknown')}}</option>
    </select>
</div>


<!-- Phone -->
<div class="field">
    <label for="phone">{{trans('form.phone-number')}}</label>
    <input type="tel" name="phone" id="phone" class="validate" value="{{ old('phone') }}">
</div>

<!-- Email -->
<div class="field">
    <label for="last_name">{{trans('form.email')}}</label>
    <input type="email" name="email" id="email" class="validate" value="{{ old('email') }}">
</div>

<div class="field">
    <label for="age">{{trans('form.age')}}</label>
    <select name="age" id="age">
        <option value="" disabled <?php if(old( 'age')=="" ) { echo 'selected="selected"'; } ?>>{{trans('form.age-placeholder')}}</option>
        <option value="10-15" <?php if(old( 'age')=="10-15" ) { echo 'selected="selected"'; } ?>>10-15</option>
        <option value="16-20" <?php if(old( 'age')=="16-20" ) { echo 'selected="selected"'; } ?>>16-20</option>
        <option value="21-25" <?php if(old( 'age')=="21-25" ) { echo 'selected="selected"'; } ?>>21-25</option>
        <option value="26-35" <?php if(old( 'age')=="26-35" ) { echo 'selected="selected"'; } ?>>26-35</option>
        <option value="36-" <?php if(old( 'age')=="36-" ) { echo 'selected="selected"'; } ?>>36-</option>
    </select>
</div>


<!-- Profession -->
<div class="field margin-field">
    <label for="profession">{{trans('form.profession')}}</label>
    <div class="ui fluid selection dropdown search">
        <input type="hidden" name="profession" value="{{ old('profession') }}">
        <i class="dropdown icon"></i>
        <span class="default text">{{trans('form.profession-placeholder')}}</span>
        <div class="menu">

            @foreach($professions as $p)
            <div class="item" data-text="{{$p->title}}">
                <i class="right floated">{{$p->info}}</i> {{$p->title}}
            </div>
            @endforeach


        </div>
    </div>
</div>
