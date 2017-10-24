@extends('layouts.account')
@section('account')
    <div class="top-tab"><span class="uicon crinnovation"></span>Создать Инновацию</div>
    <div class="tab-pane" id="create">
        <div class="crete_bock col-xs-12 no-pad">
            <ul class="list-unstyled col-md-3 col-sm-3 col-xs-12 no-pad create_left">
                <li><span class="create_icon cr_num"></span>28 852 256</li>
                <li>
                    <div data-toggle="collapse" class="li_title" data-target="#geo"><span class="create_icon geo"></span>География  </div>
                    <div id="geo" class="collapse in li_info">
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
                                        <label for="сс" class="wid50">
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
                <div class="col-md-3 col-sm-6 col-xs-6 cr_top">
                    <div class="cr_top_title"><span class="create_icon newsic"></span>Новостная категория</div>
                    <div>
                        <div class="col-md-6 col-sm-6 col-xs-6 no-pad pad-right">
                            <select class="select">
                                <option>тендер</option>
                                <option>тендер</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 no-pad">
                            <select class="select">
                                <option>транспортные услуги</option>
                                <option>тендер</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 cr_top">
                    <div class="cr_top_title"><span class="create_icon stat"></span>Статус Инновации</div>
                    <select class="select">
                        <option></option>
                        <option></option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 cr_top">
                    <div class="cr_top_title"><span class="create_icon srok"></span>Срок Доработки</div>
                    <div>
                        <div class="col-md-6 col-sm-6 col-xs-6 no-pad pad-right">
                            <select class="select">
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 no-pad">
                            <div class="cr_days">7-60 дней</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 cr_top">
                    <div class="cr_top_title"><span class="create_icon levelr"></span>Уровень Готовности</div>
                    <select class="select">
                        <option>3 Готовое производство</option>
                        <option></option>
                    </select>
                </div>
                <div class="col-xs-12 no-pad cr_questions">
                    <div id="carousel-main" class="carousel slide" data-ride="carousel" data-interval="false">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                Напишите название Вашего тендера
                            </div>
                            <div class="item">
                                Напишите название Вашего тендера Напишите название Вашего тендера
                            </div>
                            <div class="item">
                                Напишите название Вашего тендера Напишите название Вашего тендера Напишите название Вашего тендера
                            </div>
                            <div class="item">
                                Напишите название Вашего тендера Напишите название Вашего тендера Напишите название Вашего тендера1
                            </div>
                        </div>
                    </div>
                    <div class="sel_shablon col-md-4">
                        <span class="create_icon selsh"></span>
                        <select class="select">
                            <option></option>
                        </select>
                        <a href=""> <span class="create_icon pdfsh"></span></a>
                    </div>
                    <!-- Controls -->
                    <a class="slide_button prev" href="#carousel-main" role="button" data-slide="prev">Предыдущий</a>
                    <div class="num_txt">Пункт <span id="slidetext"></span></div>
                    <a class="slide_button next" href="#carousel-main" role="button" data-slide="next">Следующий</a>
                </div>
                <div class="col-xs-12 no-pad">
                    <textarea class="create_page"></textarea>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-6 upl_file pers100">
                    <label for="upload_file">
                        <span class="create_icon upload_file"></span> Добавить файл
                    </label>
                    <input type="file" id="upload_file" class=""/>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 text-center rbtblock pers100">
                    <label for="addlink"><span class="create_icon addlink"></span> Добавить силку GitHub</label>
                    <input type="text" id="addlink" class="form-control"/>
                    <button class="save_button w80" type="">Добавить</button>
                    <div class="bt_group btn_bottom crinn">
                        <button class="save_button w80" type="">пред просмотр</button>
                        <button class="save_button w80" type="">сохранить черновик</button>
                        <button class="reset_button whbut w80 " type="">Очистить все</button>
                        <button class="save_button w80" type="">опубликовать</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop