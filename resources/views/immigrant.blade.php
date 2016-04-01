@extends('app') @section('content')
<div class="ui container immigration">
    <h3 class="center-align">Formulär för nyanlända</h3>
    <div class="column">
        <div class="">
            <form action="" method="post" class="ui form">
                {!! csrf_field() !!}

                <!-- First Name -->
                <div class="field">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" class="validate">
                </div>

                <!-- Last Name -->
                <div class="field">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" class="validate">
                </div>

                <!-- Phone -->
                <div class="field">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" class="validate">
                </div>

                <!-- Email -->
                <div class="field">
                    <label for="last_name">Email</label>
                    <input type="email" id="email" class="validate">
                </div>


                <!-- Select Country -->
                <div class="field">
                    <label>Country of orgin</label>
                    <select class="country">
                        <option value="" selected disabled>Select country</option>
                        @foreach($countries as $country)
                        <option value="{{$country->short}}" data="test">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="field">
                    <label>Native language</label>
                    <select class="language">
                        <option value="" selected disabled>Select country first</option>
                    </select>
                </div>

                <div class="ui divider"></div>

                <!-- Accommodation -->
                <div class="field">
                   <label for="accommodation">Current Accommodation</label>
                    <select>
                        <option value="1">Boende 1</option>
                        <option value="2">Boende 2</option>
                        <option value="3">Boende 3</option>
                        <option value="4">Boende 4</option>
                    </select>
                    
                </div>

                <!-- Profession -->
                <div class="field">
                   <label for="accommodation">Profession</label>
                    <select>
                        <option value="1">Jobb 1</option>
                        <option value="2">Jobb 2</option>
                        <option value="3">Jobb 3</option>
                        <option value="4">Jobb 4</option>
                    </select>
                    
                </div>

                <!-- Time in Sweden -->
                <div class="field">
                   <label for="time_sweden">Arrival date</label>
                    <input type="date" class="datepicker" id="time_sweden">
                    
                </div>

                <!-- Family members -->
                <div class="field">
                   <label for="number_members"> Number of family members</label>
                    <input type="number" id="number_members" value="1">
                    
                </div>
                <!-- Kids age -->
                <div class="field">
                   <label>Age of the kids</label>
                    <select>
                        <option value="" disabled selected>Select age range</option>
                        <option value="0">No kids</option>
                        <option value="1">0-4</option>
                        <option value="2">5-8</option>
                        <option value="3">8-12</option>
                        <option value="4">13-20</option>
                        <option value="5">20+</option>
                    </select>

                </div>

                <div class="ui divider"></div>

                <div class="field">
                    <table class="rate ui very basic celled table">
                        <thead class="">
                            <tr>
                                <td class="title">No interest</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td class="title">Interested</td>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr>
                                <td class="interest">
                                    Sport
                                </td>
                                <td>
                                    <input name="0" type="radio" id="1" class="ui radio checkbox" />
                                    <label for="1"></label>
                                </td>
                                <td>
                                    <input name="0" type="radio" id="2" class="ui radio checkbox" />
                                    <label for="2"></label>
                                </td>
                                <td>
                                    <input name="0" type="radio" id="3" checked class="ui radio checkbox" />
                                    <label for="3"></label>
                                </td>
                                <td>
                                    <input name="0" type="radio" id="4" class="ui radio checkbox" />
                                    <label for="4"></label>
                                </td>
                                <td>
                                    <input name="0" type="radio" id="5" class="ui radio checkbox" />
                                    <label for="5"></label>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <input type="submit" class="" value="Register">
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(document).on('change', '.country select', function (e) {
            var target = e.currentTarget[e.currentTarget.selectedIndex].value;
            $.get("/language/" + target, function (data) {
                $('.language select').empty();
                for (var i = 0; i < data.length; i++) {
                    console.log(data[i]);
                    var item = "<option value='" + data[i] + "'>" + data[i] + "</option>";
                    $('.language select').append(item);
                }
                $('.language select').dropdown();
            });
        })

        $('select').dropdown();
        $('.ui.checkbox').checkbox();
    });
</script>
@endsection