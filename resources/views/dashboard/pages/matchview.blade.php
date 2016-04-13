@extends('app') @section('content') @include('components.navbar')
<div class="col-xs-12 col-sm-12 col-md-6 paddingcols">
<div class="ui page grid main" id="matchview">

    <div class="ui card">
    <div class="content">
        <img class="right floated mini ui image" src="GenderIcon">
        <div class="header">Namn Namnsson</div>

        <div class="country">Irak</div>

    </div>
    <div class="content">
        <h4 class="ui sub header">   </h4>
        <div class="ui small feed">
            <div class="event">
                <div class="content">

                    <div class="ui fluid labeled input">
                        <div class="ui label">
                            E-mail
                        </div>
                        <input type="text" placeholder="mysite.com">
                    </div>

                    </div>
                </div>

            <div class="event">
                <div class="content">
                    <div class="ui fluid labeled input">
                        <div class="ui label">
                            Telefon
                        </div>
                        <input type="text" placeholder="mysite.com">
                    </div>
                </div>
            </div>
            <div class="event">
                <div class="content">
                    <div class="ui fluid labeled input age">
                        <div class="ui label">
                            Ålder
                        </div>
                        <input type="text" placeholder="mysite.com">
                    </div>
                    <div class="ui fluid labeled input work">
                        <div class="ui label">
                            Yrke
                        </div>
                        <input type="text" placeholder="mysite.com">
                    </div>


                </div>
            </div>

        <div class="event">
            <div class="content">
                <div class="ui fluid labeled input">
                    <div class="ui label">
                        Familj
                    </div>
                    <input type="text" placeholder="mysite.com">
                </div>
            </div>
        </div>

            <div class="event">
                <div class="content">
                    <div class="ui fluid labeled input interest">
                        <div class="ui label">
                            4
                        </div>
                        <input type="text" placeholder="Fika">
                    </div>
                    <div class="ui fluid labeled input interest">
                        <div class="ui label">
                            2
                        </div>
                        <input type="text" placeholder="Shopping">
                    </div>
                    <div class="ui fluid labeled input interest">
                        <div class="ui label">
                            5
                        </div>
                        <input type="text" placeholder="Fotboll">
                    </div>

                </div>
            </div>

        </div>



        </div>
    </div>
</div>

</div>

@endsection