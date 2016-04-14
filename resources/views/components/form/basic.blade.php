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
    <select name="gender" class="gender dropdown" id="gender">
        <option value="" disabled <?php if(old( 'gender')=="" ) { echo 'selected="selected"'; } ?>>{{trans('form.gender-placeholder')}}</option>
        <option value="man" <?php if(old( 'gender')=="man" ) { echo 'selected="selected"'; } ?>>{{trans('form.man')}}</option>
        <option value="woman" <?php if(old( 'gender')=="woman" ) { echo 'selected="selected"'; } ?>>{{trans('form.woman')}}</option>
        <option value="no" <?php if(old( 'gender')=="no" ) { echo 'selected="selected"'; } ?>>{{trans('form.unknown')}}</option>
    </select>
</div>

<div class="grouped fields margin-field preferences">
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
    <select name="age" id="age" class="age dropdown">
        <option value="" disabled <?php if(old( 'age')=="" ) { echo 'selected="selected"'; } ?>>{{trans('form.age-placeholder')}}</option>
        <option value="16-20" <?php if(old( 'age')=="18-24" ) { echo 'selected="selected"'; } ?>>18-24</option>
        <option value="26-35" <?php if(old( 'age')=="25-35" ) { echo 'selected="selected"'; } ?>>25-35</option>
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

<div class="grouped fields margin-field preferences">
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
