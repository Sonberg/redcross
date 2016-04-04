@extends('app') @section('content')
<div class="ui container immigration transition hidden">
    <h3 class="center-align">Formulär för nyanlända</h3>
    <div class="column">
        <div class="">
            <form action="/" method="post" class="ui form">
                {!! csrf_field() !!}

                <!-- First Name -->
                <div class="field">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="validate">
                </div>

                <!-- Last Name -->
                <div class="field">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="validate" value="{{ old('last_name') }}">
                </div>

                <div class="field">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender">
                        <option value="" disabled <?php if(old( 'gender')=="" ) { echo 'selected="selected"'; } ?>>Select gender</option>
                        <option value="man" <?php if(old( 'gender')=="man" ) { echo 'selected="selected"'; } ?>>Man</option>
                        <option value="woman" <?php if(old( 'gender')=="woman" ) { echo 'selected="selected"'; } ?>>Woman</option>
                        <option value="no" <?php if(old( 'gender')=="no" ) { echo 'selected="selected"'; } ?>>Unknown</option>
                    </select>
                </div>

                <!-- Phone -->
                <div class="field">
                    <label for="phone">Phone Number</label>
                    <input type="tel" name="phone" id="phone" class="validate" value="{{ old('phone') }}">
                </div>

                <!-- Email -->
                <div class="field">
                    <label for="last_name">Email</label>
                    <input type="email" name="email" id="email" class="validate" value="{{ old('email') }}">
                </div>


                <!-- Select Country -->
                <div class="field">
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

                <div class="field">
                    <label>Language (Select muliple)</label>
                    <div class="ui fluid selection dropdown multiple search">
                        <input type="hidden" name="language" value="{{ old('language') }}">
                        <i class="dropdown icon"></i>
                        <span class="default text">Select known languages</span>
                        <div class="menu">
                            @foreach($languages as $l)
                            <div class="item" data-value="{{$l['eng']}}">
                                <i class="right floated">{{$l['native']}}</i> {{$l["eng"]}}
                            </div>

                            @endforeach


                        </div>
                    </div>
                </div>

                <!-- Accommodation -->
                <div class="field">
                    <label for="accommodation">Current Accommodation</label>
                    <select name="accommodation" id="accommodation" value="{{ old('accommodation') }}">
                        <option value="1">Boende 1</option>
                        <option value="2">Boende 2</option>
                        <option value="3">Boende 3</option>
                        <option value="4">Boende 4</option>
                    </select>

                </div>

                <!-- Profession -->
                <div class="field">
                    <label for="profession">Profession</label>
                    <div class="ui fluid selection dropdown search">
                        <input type="hidden" name="profession" value="{{ old('profession') }}">
                        <i class="dropdown icon"></i>
                        <span class="default text">Select your occupation/profession</span>
                        <div class="menu">
                           
                            @foreach($professions as $p)
                            <div class="item">
                                {{$p->title}}
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>

                <!-- Time in Sweden -->
                <div class="field">
                    <label for="time_sweden">Arrival date</label>
                    <input type="date" name="arrived" class="datepicker" id="time_sweden" value="{{ old('arrived') }}">

                </div>

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
                        <option value="1">0-4</option>
                        <option value="2">5-8</option>
                        <option value="3">8-12</option>
                        <option value="4">13-20</option>
                        <option value="5">20+</option>
                    </select>

                </div>

                <div class="preferences">
                    <div class="field">
                        <table class="rate ui very basic unstackable celled table">
                            <thead class="">
                                <tr>
                                    <td class="title">No interest</td>
                                    <td class="number">1</td>
                                    <td class="number">2</td>
                                    <td class="number">3</td>
                                    <td class="number">4</td>
                                    <td class="number">5</td>
                                    <td class="title">Interested</td>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td class="interest">
                                        Sport
                                    </td>
                                    <td>
                                        <input name="sport" type="radio" id="1" class="ui radio checkbox" />
                                        <label for="1"></label>
                                    </td>
                                    <td>
                                        <input name="sport" type="radio" id="2" class="ui radio checkbox" />
                                        <label for="2"></label>
                                    </td>
                                    <td>
                                        <input name="sport" type="radio" id="3" checked class="ui radio checkbox" />
                                        <label for="3"></label>
                                    </td>
                                    <td>
                                        <input name="sport" type="radio" id="4" class="ui radio checkbox" />
                                        <label for="4"></label>
                                    </td>
                                    <td>
                                        <input name="sport" type="radio" id="5" class="ui radio checkbox" />
                                        <label for="5"></label>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="field">
                        <div class="ui one column stackable center aligned page grid">
                            <div class="column twelve wide">
                                <div class="inline fields">
                                    <div class="field">
                                        <label>I want to meet someone with a family:</label>
                                    </div>
                                    <div class="field">
                                        <input type="radio" id="meet_family_yes" class="ui radio checkbox" value="man" name="meet_family">
                                        <label for="meet_family_yes">Yes</label>
                                    </div>
                                    <div class="field">
                                        <input type="radio" id="meet_family_no" class="ui radio checkbox" value="no" name="meet_family" checked>
                                        <label for="meet_family_no">No preferance</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui one column stackable center aligned page grid">
                            <div class="column twelve wide">
                                <div class="inline fields">
                                    <div class="field">
                                        <label>I want to meet a:</label>
                                    </div>
                                    <div class="field">
                                        <input type="radio" id="meet_gender_man" class="ui radio checkbox" value="man" name="meet_gender">
                                        <label for="meet_gender_man">Man</label>
                                    </div>
                                    <div class="field">
                                        <input type="radio" id="meet_gender_woman" class="ui radio checkbox" value="woman" name="meet_gender">
                                        <label for="meet_gender_woman">Woman</label>
                                    </div>
                                    <div class="field">
                                        <input type="radio" id="meet_gender_no" class="ui radio checkbox" value="no" name="meet_gender" checked>
                                        <label for="meet_gender_no">No preferance</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui one column stackable center aligned page grid">
                            <div class="column twelve wide">
                                <div class="inline fields">
                                    <div class="field">
                                        <label>I want to meet someone connected to my profession:</label>
                                    </div>
                                    <div class="field">
                                        <input type="radio" id="meet_profession_yes" class="ui radio checkbox" value="man" name="meet_profession">
                                        <label for="meet_profession_yes">Yes</label>
                                    </div>
                                    <div class="field">
                                        <input type="radio" id="meet_profession_no" class="ui radio checkbox" value="no" name="meet_profession" checked>
                                        <label for="meet_profession_no">No preferance</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="ui green button huge">Register</button>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.immigration').transition('fade left');
        /*
        $(document).on('change', 'input[name=country]', function (e) {
            var target = e.currentTarget.defaultValue;
            $.get("/language/" + target, function (data) {
                $('.language select').empty();
                for (var i = 0; i < data.length; i++) {
                    var item = "<option value='" + data[i] + "'>" + data[i] + "</option>";
                    $('.language select').append(item);
                }
                $('.language select').dropdown();
            });
        })
        */

        $('select').dropdown();
        $('.dropdown').dropdown();
        $("input").checkbox();
    });
</script>
@endsection