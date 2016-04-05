

/*
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
                               @foreach($intrests as $i)
                                <tr>
                                    <td class="interest">
                                        {{$i->category}}
                                    </td>
                                    <td>
                                        <input name="{{$i->category}}" type="radio" id="1" class="ui radio checkbox" />
                                        <label for="1"></label>
                                    </td>
                                    <td>
                                        <input name="{{$i->category}}" type="radio" id="2" class="ui radio checkbox" />
                                        <label for="2"></label>
                                    </td>
                                    <td>
                                        <input name="{{$i->category}}" type="radio" id="3" checked class="ui radio checkbox" />
                                        <label for="3"></label>
                                    </td>
                                    <td>
                                        <input name="{{$i->category}}" type="radio" id="4" class="ui radio checkbox" />
                                        <label for="4"></label>
                                    </td>
                                    <td>
                                        <input name="{{$i->category}}" type="radio" id="5" class="ui radio checkbox" />
                                        <label for="5"></label>
                                    </td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
*/