@extends('layouts.account')
@section('account')
    <div class="top-tab"><span class="uicon crinf"></span>Создать Информацию</div>
    <div class="tab-pane" id="create">
        <div class="crete_bock col-xs-12 no-pad">
            <ul class="list-unstyled col-md-3 col-sm-3 col-xs-12 no-pad create_left">
                <li><span class="create_icon cr_num"></span>28 852 256</li>
                <li>
                    <div data-toggle="collapse" class="li_title collapsed" data-target="#geo"><span class="create_icon geo"></span>География  </div>
                    <div id="geo" class="collapse li_info">
                        <ul class="list-unstyled">
                            <li>
                                <input id="wwide" type="radio" class=""/>
                                <label for="wwide"> Общемировая</label>
                            </li>
                            <li>
                                <input id="target" type="radio" class="" checked="checked"/>
                                <label for="target"> Целевая</label>
                                <ul class="list-unstyled">
                                    <li>
                                        <input id="сс" type="radio" class="" checked="checked"/>
                                        <label for="сс " class="wid50">
                                            <select class="select ">
                                                <option>Страна</option>
                                                <option></option>
                                            </select>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">
                                            <select class="select">
                                                <option>Город / Область</option>
                                                <option></option>
                                            </select>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">
                                            <select class="select">
                                                <option>Город / Район</option>
                                                <option></option>
                                            </select>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">
                                            <select class="select">
                                                <option>Тип Нас-го пункта</option>
                                                <option></option>
                                            </select>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">
                                            <select class="select">
                                                <option>Название Нас-го пункта</option>
                                                <option></option>
                                            </select>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">
                                            <select class="select">
                                                <option>Тип улицы</option>
                                                <option></option>
                                            </select>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">
                                            <select class="select">
                                                <option>Название улицы</option>
                                                <option></option>
                                            </select>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">
                                            <input id="сс" type="text" class="form-control" placeholder="№ Дома"/>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">
                                            <input id="сс" type="text" class="form-control" placeholder="№ Подъезда"/>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">
                                            <input id="сс" type="text" class="form-control" placeholder="Этаж"/>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">
                                            <input id="сс" type="text" class="form-control" placeholder="№ Квартиры"/>
                                        </label>
                                    </li>
                                    <li class="li_pad">
                                        <select class="select">
                                            <option>Все</option>
                                            <option></option>
                                        </select>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="bt_group text-center">
                            <button type="button" class="save_button">Подтвердить</button>
                            <button type="reset" class="reset_button">Очистить</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div data-toggle="collapse" class="li_title collapsed" data-target="#work"><span class="create_icon work"></span>Деятельность</div>
                    <div id="work" class="collapse li_info">
                        <ul class="list-unstyled">
                            <li>
                                <input id="wwide" type="radio" class=""/>
                                <label for="wwide"> Все</label>
                            </li>
                            <li>
                                <input id="target" type="radio" class="" checked="checked"/>
                                <label for="target"> Целевая</label>
                                <ul class="list-unstyled">
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">
                                            <select class="select">
                                                <option>Отрасль</option>
                                                <option></option>
                                            </select>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">
                                            <select class="select">
                                                <option>Подотрасль</option>
                                                <option></option>
                                            </select>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">
                                            <select class="select">
                                                <option>Специализация</option>
                                                <option></option>
                                            </select>
                                        </label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="bt_group text-center">
                            <button type="button" class="save_button">Подтвердить</button>
                            <button type="reset" class="reset_button">Очистить</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div data-toggle="collapse" class="li_title collapsed" data-target="#group"><span class="create_icon group"></span>Группа</div>
                    <div id="group" class="collapse li_info pad8">
                        <ul class="list-unstyled">
                            <li>
                                <a data-toggle="modal" data-target="#crmod" class=""><span class="create_icon crgroup"></span>Создать группу</a>
                                <ul class="list-unstyled">
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">Друзья</label>
                                    </li>
                                    <li>
                                        <input id="сс" type="radio" class=""/>
                                        <label for="сс">Соседи</label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="bt_group text-center">
                            <button type="button" class="save_button">Подтвердить</button>
                            <button type="reset" class="reset_button">Очистить</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div data-toggle="collapse" class="li_title collapsed" data-target="#chern"><span class="create_icon chern"></span>Черновики</div>
                    <div id="chern" class="collapse li_info pad8">
                        <ul class="list-unstyled chernovik">
                            <li>
                                <a href="">Свободная энергия</a>
                                <div class="create_icon delete_chern"></div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="col-md-9 col-sm-9 col-xs-12 no-pad create_right">
                <div class="col-xs-12 cr_top">
                    <div class="cr_top_title inf_inline"><span class="create_icon newsic"></span>Новостная категория:</div>
                    <div class="inf_inline">
                        <div class="col-md-6 col-sm-6 col-xs-6 no-pad pad-right">
                            <select class="select">
                                <option>техно новости</option>
                                <option>тендер</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 no-pad">
                            <select class="select">
                                <option>энергетика</option>
                                <option>тендер</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-pad">
                    <textarea class="create_page"></textarea>
                </div>
                <div class="col-xs-12 no-pad infbotbtn">
                    <div class="col-md-3 col-sm-6 col-xs-6 btn_bottom"><button class="save_button " type="">пред просмотр</button></div>
                    <div class="col-md-3 col-sm-6 col-xs-6  btn_bottom"><button class="save_button " type="">сохранить черновик</button></div>
                    <div class="col-md-3 col-sm-6 col-xs-6 btn_bottom"><button class="save_button whbut  " type="">Очистить все</button></div>
                    <div class="col-md-3 col-sm-6 col-xs-6 btn_bottom"><button class="save_button " type="">опубликовать</button></div>
                </div>
            </div>
        </div>
    </div>
@stop