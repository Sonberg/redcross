<!-- Family members -->
<div class="field">
    <label for="number_members"> Number of family members</label>
    <input type="number" name="number_members" id="number_members" value="1" value="{{ old('number_members') }}">

</div>
<!-- Kids age -->
<div class="field">
    <label>Age of the kids</label>
    <select name="age_kids">
        <option value="" disabled <?php if(old( 'age_kids')=="" ) { echo 'selected="selected"'; } ?>>Select age range</option>
        <option value="0" <?php if(old( 'age_kids')=="0" ) { echo 'selected="selected"'; } ?>>No kids</option>
        <option value="0-4" <?php if(old( 'age_kids')=="0-4" ) { echo 'selected="selected"'; } ?>>0-4</option>
        <option value="5-8" <?php if(old( 'age_kids')=="5-8" ) { echo 'selected="selected"'; } ?>>5-8</option>
        <option value="8-12" <?php if(old( 'age_kids')=="8-12" ) { echo 'selected="selected"'; } ?>>8-12</option>
        <option value="13-20" <?php if(old( 'age_kids')=="13-20" ) { echo 'selected="selected"'; } ?>>13-20</option>
        <option value="20" <?php if(old( 'age_kids')=="20" ) { echo 'selected="selected"'; } ?>>20+</option>
    </select>

</div>
