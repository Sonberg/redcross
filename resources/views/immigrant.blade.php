@extends('app') @section('content')
<div class="container immigration">
    <div class="content">
        <h3 class="center-align">Formulär för nyanlända</h3>
        <div class="row">
            <div class="col s12">
                <form action="" method="post">
                   {!! csrf_field() !!}
                   
                    <div class="card">
                        <div class="card-content">
                           <span class="card-title">Card Title</span>
                           
                            <!-- First Name -->
                            <div class="input-field col s12">
                                <input type="text" id="first_name" class="validate">
                                <label for="first_name">First Name</label>
                            </div>

                            <!-- Last Name -->
                            <div class="input-field col s12">
                                <input type="text" id="last_name" class="validate">
                                <label for="last_name">Last Name</label>
                            </div>

                            <!-- Phone -->
                            <div class="input-field col s12">
                                <input type="tel" id="phone" class="validate">
                                <label for="phone">Phone Number</label>
                            </div>

                            <!-- Email -->
                            <div class="input-field col s12">
                                <input type="email" id="email" class="validate">
                                <label for="last_name">Email</label>
                            </div>


                            <!-- Select Country -->
                            <div class="input-field col s12">
                                <select class="country">
                                    <option value="" selected disabled>Select country</option>
                                    @foreach($countries as $country)
                                    <option value="{{$country->short}}" data="test">{{$country->name}}</option>
                                    @endforeach

                                </select>
                                <label>Country of orgin</label>
                            </div>

                            <div class="input-field col s12">
                                <select class="language">
                                    <option value="" selected disabled>Select country first</option>
                                </select>
                                <label>Native language</label>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Card Title</span>
                            
                            <!-- Accommodation -->
                            <div class="input-field col s12">
                                <select>
                                    <option value="1">Boende 1</option>
                                    <option value="2">Boende 2</option>
                                    <option value="3">Boende 3</option>
                                    <option value="4">Boende 4</option>
                                </select>
                                <label for="accommodation">Current Accommodation</label>
                            </div>

                            <!-- Profession -->
                            <div class="input-field col s12">
                                <select>
                                    <option value="1">Jobb 1</option>
                                    <option value="2">Jobb 2</option>
                                    <option value="3">Jobb 3</option>
                                    <option value="4">Jobb 4</option>
                                </select>
                                <label for="accommodation">Profession</label>
                            </div>

                            <!-- Time in Sweden -->
                            <div class="input-field col s12">
                                <input type="date" class="datepicker" id="time_sweden">
                                <label for="time_sweden">Arrival date</label>
                            </div>

                            <!-- Family members -->
                            <div class="input-field col s12">
                                <input type="number" id="number_members" value="1">
                                <label for="number_members"> Number of family members</label>
                            </div>
                            <!-- Kids age -->
                            <div class="input-field col s12">
                                <select>
                                    <option value="" disabled selected>Select age range</option>
                                    <option value="0">No kids</option>
                                    <option value="1">0-4</option>
                                    <option value="2">5-8</option>
                                    <option value="3">8-12</option>
                                    <option value="4">13-20</option>
                                    <option value="5">20+</option>
                                </select>
                                <label>Age of the kids</label>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Card Title</span>
                           
                            <div class="input-field col s12">
                                <table class="rating centered highlight col s12">
                                    <thead class="s12">
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
                                    <tbody class="s12">
                                        <tr>
                                            <td class="interest">
                                                Sport
                                            </td>
                                            <td>
                                                <input name="0" type="radio" id="1" />
                                                <label for="1"></label>
                                            </td>
                                            <td>
                                                <input name="0" type="radio" id="2" />
                                                <label for="2"></label>
                                            </td>
                                            <td>
                                                <input name="0" type="radio" id="3" checked/>
                                                <label for="3"></label>
                                            </td>
                                            <td>
                                                <input name="0" type="radio" id="4" />
                                                <label for="4"></label>
                                            </td>
                                            <td>
                                                <input name="0" type="radio" id="5" />
                                                <label for="5"></label>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="waves-effect waves-light btn-large" value="Register">
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.datepicker').pickadate({
            selectMonths: true
        });
        $(document).on('change', 'select.country', function (e) {
            var target = e.currentTarget[e.currentTarget.selectedIndex].value;
            $.get("/language/" + target, function (data) {
                $('select.language').empty();
                for (var i = 0; i < data.length; i++) {
                    var item = "<option value='" + data[i] + "'>" + data[i] + "</option>";
                    $('select.language').append(item);
                }
                $('select').material_select();
            });
        })

        $('select').material_select();
    });
</script>
@endsection