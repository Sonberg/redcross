@extends('app') @section('content') @include('components.navbar')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="ui page grid main"></div>
        <div class="ui buttons center">
            <button class="ui button fluid">Stäng</button>
            <button class="ui positive button fluid">Matcha nu!</button>
        </div>
    </div></div></div>
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="page" id="matchview">

        <div class="ui card center">
            <div class="content">
                <img class="right floated mini ui image" src="GenderIcon">
                <i class="fa fa-mars fa-5x" aria-hidden="true"></i>
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
                                    Adress
                                </div>
                                <input type="text" placeholder="mysite.com">
                            </div>

                        </div>
                    </div>

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

</div></div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="page"></div>
        <div class="ui form center">
            <div class="field">
                <label class="labelleft">Kommentar från kordinator</label>
                <textarea></textarea>
            </div>
    </div></div></div>
@endsection


