@extends('layouts.account')
@section('account')
            <div class="personal_data" id="persdata">
                <div class="top-tab"><span class="uicon pers"></span>{{$meta -> title}}</div>
                <div class="tab-cont-block">
                    <ul class="nav nav-pills col-md-3 col-xs-12 tab-cont_nav ">
                        <li class="active"><a href="#data" data-toggle="tab" aria-expanded="true"><span class="nav_icons data"></span>{{Lang::get('account_nav.general_info')}}</a></li>
                        <li class=""><a href="#contact" data-toggle="tab" aria-expanded="false"><span class="nav_icons contact"></span>{{Lang::get('account_nav.contact')}}</a></li>
                        <li class=""><a href="#sobstv" data-toggle="tab" aria-expanded="false"><span class="nav_icons sobstv"></span>{{Lang::get('account_nav.sobstv')}}</a></li>
                        <li id="potrebnost_link" class=""><a class="" href="#potrebnost" data-toggle="tab" aria-expanded="false"><span class="nav_icons potrebnost"></span>{{Lang::get('account_nav.potrebnost')}}</a></li>
                        <li class=""><a href="#server" data-toggle="tab" aria-expanded="false"><span class="nav_icons server"></span>{{Lang::get('account_nav.server')}}</a></li>
                    </ul>
                    <div class="col-md-9 col-xs-12 tab-content clearfix tab-cont-bl no-pad">
                        <div class="tab-pane active" id="data">
                            <!--pers data content nav-->
                            <!--<ul class="nav nav-pills tab-cont_nav_inside perscontnav">
                                <li class="active"><a href="#dataold" data-toggle="tab" aria-expanded="true">11.03.2017</a></li>
                                <li><a href="#addata" data-toggle="tab" aria-expanded="true"><span class="nav_icons newdata"></span>Данные</a></li>
                            </ul> -->
                            <!--pers data content nav-->
                            <!--pers data content info-->
                            <div class="tab-content clearfix tab-cont-info">
                                <div class="tab-pane active dataold" id="dataold">
                                    <div class="qrcode_block">
                                        <img class="img-responsive" src="/social/img/qr.png">
                                        <div><span>#</span> {{$user -> id}}</div>
                                        <!--<div><span class="nav_icons qricon"></span> 511 000</div> -->
                                    </div>
                                    <form method="" action="">
                                        <div class="form-group row biomphoto">
                                            <label for="ex1" class="col-md-4 col-sm-4 col-xs-4 col-form-label pers100">{{Lang::get('user.bio_photo')}}</label>
                                            <div class="col-md-4 col-sm-4 col-xs-4 biom no-pad">
                                                <img class="img-responsive" src="{{asset( $user -> picture -> thumb())}}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ex1" class="col-md-4 col-sm-4 col-xs-4 col-form-label pers100">{{Lang::get('user.lang')}}</label>
                                            <div class="col-md-3 col-sm-3 col-xs-8 pers100 col-form-input no-pad">
                                                <select class="select edit-account-field" name="language_id">
                                                     @foreach(\App\Models\Language::all() as $lang )
                                                        <option value="{{$lang -> id}}" {{ $lang -> id == $user -> language_id ? 'selected' : '' }} >{{$lang -> title}}</option>
                                                     @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ex1" class="col-md-4 col-sm-4 col-xs-4 pers100 col-form-label">{{Lang::get('user.nationality')}}</label>
                                            <div class="col-md-3 col-sm-3 col-xs-8 pers100 col-form-input no-pad">
                                                <select class="select edit-account-field" name="nationality">
                                                    @foreach(\App\Models\Country::all() as $country )
                                                        <option value="{{$country -> id}}" {{ $country -> id == $user -> nationality ? 'selected' : '' }} >{{$country -> country}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ex1" class="col-md-4 col-sm-4 col-xs-4 pers100 col-form-label">{{Lang::get('user.country')}}</label>
                                            <div class="col-md-3 col-sm-3 col-xs-8 pers100 col-form-input no-pad">
                                                <select class="select edit-account-field" name="country">
                                                    @foreach(\App\Models\Country::all() as $country )
                                                        <option value="{{$country -> id}}" {{ $country -> id == $user -> country ? 'selected' : '' }} >{{$country -> country}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ex1" class="col-md-4 col-sm-4 col-xs-4 pers100 col-form-label">{{Lang::get('user.birthday')}}</label>
                                            <div class="col-md-3 col-sm-3 col-xs-8 pers100 col-form-input no-pad">
                                                <div class="col-md-3 col-sm-3 col-xs-3 no-pad pad-right">
                                                    <input class="form-control edit-account-field" name="birthday" type="number" value="{{$user -> birthday}}" id="ex1">
                                                </div>
                                                <div class="col-md-5 col-sm-5 col-xs-5 no-pad pad-right">
                                                    <input class="form-control edit-account-field" name="birthmonth" type="number" value="{{$user -> birthmonth}}" id="ex1">
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4 no-pad">
                                                    <input class="form-control edit-account-field" name="birthyear" type="number" value="{{$user -> birthyear}}" id="ex1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row surname-block">
                                            <label for="ex1" class="col-md-4 col-sm-4 col-xs-4 pers100 col-form-label">{{Lang::get('user.lastname')}}</label>
                                            <div class="col-md-3 col-sm-3 col-xs-4 pers100 col-form-input no-pad pad-right">
                                                <div class="langbl">{{Lang::get('user.from_u_lang')}}</div>
                                                <input class="form-control edit-account-field" type="text" name="lastname" value="{{$user -> lastname}}" id="ex1">
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-4 pers100 col-form-input no-pad">
                                                <div class="langbl">{{Lang::get('user.from_lat')}}</div>
                                                <input class="form-control edit-account-field" type="text" name="lastname_en" value="{{$user -> lastname_en}}" id="ex1">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ex1" class="col-md-4 col-sm-4 col-xs-4 pers100 col-form-label">{{Lang::get('user.firstname')}}</label>
                                            <div class="col-md-3 col-sm-3 col-xs-4 pers100 col-form-input no-pad pad-right">
                                                <div class="langbl hide-big show-600">{{Lang::get('user.from_u_lang')}}</div>
                                                <input class="form-control edit-account-field" type="text" name="firstname" value="{{$user -> firstname}}" id="ex1">
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-4 pers100 col-form-input no-pad">
                                                <div class="langbl hide-big show-600">{{Lang::get('user.from_lat')}}</div>
                                                <input class="form-control edit-account-field" type="text" name="firstname_en" value="{{$user -> firstname_en}}" id="ex1">
                                            </div>
                                        </div>
                                        <!--<div class="form-group row">
                                            <label for="ex1" class="col-md-4 col-sm-4 col-xs-4 pers100 col-form-label">Отчество:</label>
                                            <div class="col-md-3 col-sm-3 col-xs-8 pers100 col-form-input no-pad">
                                                <input class="form-control" type="text" value="Русский" id="ex1">
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label for="ex1" class="col-md-4 col-sm-4 col-xs-4 pers100 col-form-label">{{Lang::get('user.sex')}}</label>
                                            <div class="col-md-3 col-sm-3 col-xs-8 pers100 col-form-input no-pad">
                                                <select class="select edit-account-field" name="sex">
                                                        @for( $i = 1; $i < 3; $i++)
                                                            <option value="{{$i}}" {{ $i == $user -> sex ? 'selected' : '' }} >{{Lang::get('app.sex.' . $i)}}</option>
                                                        @endfor
                                                </select>
                                            </div>
                                        </div>
                                       <!-- <div class="form-group row">
                                            <label for="ex1" class="col-md-4 col-sm-4 col-xs-4 pers100 col-form-label">Идентификационный код:</label>
                                            <div class="col-md-3 col-sm-3 col-xs-8 pers100 col-form-input no-pad">
                                                <input class="form-control" type="text" value="Русский" id="ex1">
                                            </div>
                                        </div> -->

                                        <div class="form-group row">
                                            <label for="ex1" class="col-md-4 col-sm-4 col-xs-6 pers100 col-form-label">{{Lang::get('user.document')}}</label>
                                            <div class="col-md-3 col-sm-3 col-xs-6 pers100 col-form-input no-pad">
                                                <select class="select edit-account-field" name="document_id">
                                                    @foreach(\App\Models\Document::get_ids() as $doc)
                                                        <option value="{{$doc -> id}}" {{ $doc -> id == $user -> document_id ? 'selected' : '' }} >{{Lang::get('documents.' . $doc -> id )}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ex1" class="col-md-4 col-sm-4 col-xs-4 pers100 col-form-label">{{Lang::get('user.doc_number')}}</label>
                                            <div class="col-md-3 col-sm-3 col-xs-8 pers100 col-form-input no-pad">
                                                <input class="form-control edit-account-field" type="text" name="document" value="{{$user -> document}}" id="ex1">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ex1" class="col-md-4 col-sm-4 col-xs-4 pers100 col-form-label">{{Lang::get('user.doc_date')}}</label>
                                            <div class="col-md-3 col-sm-3 col-xs-8 pers100 col-form-input no-pad">
                                                <div class="col-md-3 col-sm-3 col-xs-3 no-pad pad-right">
                                                    <input class="form-control edit-account-field" type="number" name="dateday" value="{{$user -> dateday}}" id="ex1">
                                                </div>
                                                <div class="col-md-5 col-sm-5 col-xs-5 no-pad pad-right">
                                                    <input class="form-control edit-account-field" type="number" name="datemonth" value="{{$user -> datemonth}}" id="ex1">
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4 no-pad">
                                                    <input class="form-control edit-account-field" type="number" name="dateyear" value="{{$user -> dateyear}}" id="ex1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_buttons">
                                            <button type="button" onclick="user.edit(this)" class="">{{Lang::get('account.save')}}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--pers data content info-->
                            <!--pers data content nav-->
                         <!--   <ul class="nav nav-pills tab-cont_nav_inside persxsnav">
                                <li class="active"><a href="#family" data-toggle="tab" aria-expanded="true">Семя</a></li>
                                <li><a href="#garantee" data-toggle="tab" aria-expanded="true">Гаранты</a></li>
                                <li><a href="#gragdanstvo" data-toggle="tab" aria-expanded="true">Гражданство</a></li>
                            </ul> -->
                            <!--pers data content nav-->
                            <!--pers data content info-->
                           <!-- <div class="tab-content clearfix tab-cont-info">
                                <div class="tab-pane active" id="family">
                                    <div class="addperson_block">
                                        <a class="addperson"><span></span> Добавить члена семьи</a>
                                        <div class="add_form">
                                            <form method="" action="">
                                                <div class="form_head">
                                                    <label>Родство:</label>
                                                    <select class="select" id="ui-id-5" style="display: none;">
                                                        <option></option>
                                                        <option></option>
                                                        <option></option>
                                                    </select>
                                                    <span tabindex="0" id="ui-id-5-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-5-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">&nbsp;</span></span>
                                                    <button type="" class="save_button">Сохранить</button>
                                                    <span class="close_form">×</span>
                                                </div>
                                                <div class="form_tabs">
                                                    <ul class="nav nav-pills tab-cont_nav_inside">
                                                        <li class="active"><a href="#manually" data-toggle="tab" aria-expanded="true">Вручную</a></li>
                                                        <li><a href="#request" data-toggle="tab" aria-expanded="true">По запросу</a></li>
                                                    </ul>
                                                    <div class="tab-content clearfix tab-cont-info">
                                                        <div class="tab-pane active" id="manually">
                                                            <div class="row">
                                                                <div class="col-md-3 col-sm-3 col-xs-3 form_photo">
                                                                    <div class="img-wrap">
                                                                        <div class="upload_photo">
                                                                            <label for="file2">
                                                                                <img class="img-responsive" src="/social/img/cam.png">
                                                                            </label>
                                                                            <input type="file" id="file2" class="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9 col-sm-9 col-xs-9 persform100">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Фамилия:</label>
                                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Имя:</label>
                                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Дата рождения:</label>
                                                                        <div>
                                                                            <div class="col-md-3 col-sm-3 col-xs-3 no-pad pad-right"><input class="form-control" type="text" value="День" id="ex1"></div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6 no-pad pad-right"><input class="form-control" type="text" value="Месяц" id="ex1"></div>
                                                                            <div class="col-md-3 col-sm-3 col-xs-3 no-pad"><input class="form-control" type="text" value="Год" id="ex1"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 active_part no-pad disabled ">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-2 col-sm-2 col-xs-3 no-pad perspad" for="exampleInputEmail1">Родитель:</label>
                                                                        <div class="col-md-10 col-sm-10 col-xs-9 persform100">
                                                                            <div class="col-md-4 col-sm-4 col-xs-4 no-pad pad-right persform100 custfmar">
                                                                                <select class="select" disabled="" id="ui-id-6" style="display: none;">
                                                                                    <option></option>
                                                                                    <option></option>
                                                                                    <option></option>
                                                                                </select>
                                                                                <span tabindex="-1" id="ui-id-6-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-6-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget ui-selectmenu-disabled ui-state-disabled" aria-disabled="true"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">&nbsp;</span></span>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6 no-pad pad-right"><input class="form-control" type="text" value="# XXXXXXX" id="ex1" disabled="disabled"></div>
                                                                            <div class="col-md-2 col-sm-2 col-xs-2 butf50 no-pad"><button class="send_button" disabled="disabled"></button></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-2 col-sm-2 col-xs-3 no-pad perspad" for="exampleInputEmail1">Фамилия:</label>
                                                                        <div class="col-md-10 col-sm-10 col-xs-9 persform100">
                                                                            <input class="form-control" type="text" value="" id="ex1" disabled="disabled">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-md-2 col-sm-2 col-xs-3 no-pad perspad" for="exampleInputEmail1">Имя:</label>
                                                                        <div class="col-md-10 col-sm-10 col-xs-9 persform100">
                                                                            <input class="form-control" type="text" value="" id="ex1" disabled="disabled">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="request">
                                                            <div class="col-xs-12 no-pad req_bl">
                                                                <div class="col-md-3 col-sm-3 col-xs-3 form_photo no-pad req_bl_left">
                                                                    <div class="img-wrap">
                                                                        <div class="upload_photo">
                                                                            <label for="file2">
                                                                                <img class="img-responsive" src="/social/img/cam.png">
                                                                            </label>
                                                                            <input type="file" id="file2" class="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9 col-sm-9 col-xs-9 no-pad req_bl_right persform100">
                                                                    <div class="form-group">
                                                                        <div class="col-md-9 col-sm-9 col-xs-9 no-pad pad-right"><input class="form-control" type="text" value="# XXXXXXX" id="ex1"></div>
                                                                        <div class="col-md-3 col-sm-3 col-xs-3 no-pad"><button class="send_button req"></button></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 addperson-block">
                                        <div class="img-wrap"><img class="img-responsive" src="/social/img/fam.png"></div>
                                        <div class="addperson-inf">
                                            <div class="">Анастасия Герасимова</div>
                                            <div>Дочь (29.06.2013 года рождения)</div>
                                            <div>Отец Сергей Герасимов <span>(подтверждено)</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 addperson-block">
                                        <div class="img-wrap"><img class="img-responsive" src="/social/img/fam.png"></div>
                                        <div class="addperson-inf">
                                            <div class="">Анастасия Герасимова</div>
                                            <div>Дочь (29.06.2013 года рождения)</div>
                                            <div>Отец Сергей Герасимов <span>(подтверждено)</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 addperson-block">
                                        <div class="img-wrap"><img class="img-responsive" src="/social/img/fam.png"></div>
                                        <div class="addperson-inf">
                                            <div class="">Анастасия Герасимова</div>
                                            <div>Дочь (29.06.2013 года рождения)</div>
                                            <div>Отец Сергей Герасимов <span>(подтверждено)</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 addperson-block">
                                        <div class="img-wrap"><img class="img-responsive" src="/social/img/fam.png"></div>
                                        <div class="addperson-inf">
                                            <div class="">Анастасия Герасимова</div>
                                            <div>Дочь (29.06.2013 года рождения)</div>
                                            <div>Отец Сергей Герасимов <span>(подтверждено)</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane garantee" id="garantee">
                                    <div class="garan_top col-md-11 col-sm-12">
                                        <form action="" method="">
                                            <div class="col-md-8 col-sm-8 col-xs-12 no-pad garan_bl">
                                                <div class="col-md-3 col-sm-3 col-xs-3 form_photo no-pad req_bl_left">
                                                    <div class="img-wrap">
                                                    </div>
                                                </div>
                                                <div class="col-md-9  col-sm-9 col-xs-9 no-pad req_bl_right col-form-input persform100">
                                                    <div class="form-group">
                                                        <div class="col-md-8 col-sm-8 col-xs-8 no-pad pad-right">
                                                            <input class="form-control" type="text" value="" id="ex1">
                                                            <div class="bottom_input"># XXXXXXXXX</div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-4 no-pad"><button class="send_button gar"></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12 status">
                                                <div>Статус<br>Подтвержден</div>
                                                <span>100%</span>
                                            </div>
                                        </form>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-xs-12 no-pad">
                                        <div class="garant_pers">
                                            <div class="img-wrap">
                                                <div class="checked_person"></div>
                                                <span class="garant_name">Ольга<br>Бильская</span>
                                            </div>
                                        </div>
                                        <div class="garant_pers">
                                            <div class="img-wrap">
                                                <div class="checked_person"></div>
                                                <span class="garant_name">Ольга<br>Бильская</span>
                                            </div>
                                        </div>
                                        <div class="garant_pers">
                                            <div class="img-wrap">
                                                <div class="checked_person"></div>
                                                <span class="garant_name">Ольга<br>Бильская</span>
                                            </div>
                                        </div>
                                        <div class="garant_pers">
                                            <div class="img-wrap">
                                                <div class="checked_person"></div>
                                                <span class="garant_name">Ольга<br>Бильская</span>
                                            </div>
                                        </div>
                                        <div class="garant_pers">
                                            <div class="img-wrap">
                                                <div class="checked_person"></div>
                                                <span class="garant_name">Ольга<br>Бильская</span>
                                            </div>
                                        </div>
                                        <div class="garant_pers">
                                            <div class="img-wrap">
                                                <div class="checked_person"></div>
                                                <span class="garant_name">Ольга<br>Бильская</span>
                                            </div>
                                        </div>
                                        <div class="garant_pers">
                                            <div class="img-wrap">
                                                <div class="checked_person"></div>
                                                <span class="garant_name">Ольга<br>Бильская</span>
                                            </div>
                                        </div>
                                        <div class="garant_pers">
                                            <div class="img-wrap">
                                                <div class="checked_person"></div>
                                                <span class="garant_name">Ольга<br>Бильская</span>
                                            </div>
                                        </div>
                                        <div class="garant_pers">
                                            <div class="img-wrap">
                                                <div class="checked_person"></div>
                                                <span class="garant_name">Ольга<br>Бильская</span>
                                            </div>
                                        </div>
                                        <div class="garant_pers">
                                            <div class="img-wrap">
                                                <div class="checked_person"></div>
                                                <span class="garant_name">Ольга<br>Бильская</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="gragdanstvo">
                                    <div class="form-group gragd">
                                        <label for="ex1" class="col-form-label">Добавить гражданство:</label>
                                        <select class="select " id="ui-id-7" style="display: none;">
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                        <span tabindex="0" id="ui-id-7-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-7-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">&nbsp;</span></span>
                                    </div>
                                </div>
                            </div> -->
                            <!--pers data content info-->
                        </div>
                        <div class="tab-pane" id="contact">
                            <div class="contact_tab">
                                <div class="col-md-4 col-sm-4 col-xs-12  left_cont">
                                    <div class="">
                                        <div class="cont_title">
                                            <div class="ico-txt"><span class="cont_title_icon tel_num"></span></div>
                                            <div class="tl-txt">Добавить номер телефона</div>
                                        </div>
                                        <div class="form-group">
                                            <select class="select" id="ui-id-8" style="display: none;">
                                                <option>Мобильный</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-8-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-8-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget">
                                                <span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span>
                                                <span class="ui-selectmenu-text">Мобильный</span>
                                            </span>
                                            <select class="select cust_width" id="ui-id-9" style="display: none;">
                                                <option>Украина (+380)</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-9-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-9-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget">
                                                <span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span>
                                                <span class="ui-selectmenu-text">Украина (+380)</span>
                                            </span>
                                            <div class="dropdown drop_settings">
                                                <input class="form-control cust_width" type="text">
                                                <div class="drop_privacy" data-toggle="dropdown" aria-hidden="true">
                                                    <span class="mini-icon libra"></span>
                                                    <i class="fa fa-chevron-down"></i>
                                                </div>
                                                <ul class="dropdown-menu  dropdown-menu-right">
                                                    <li><a href="#"><span class="mini-icon earth"></span> Доступно всем</a></li>
                                                    <li><a href="#"><span class="mini-icon lock"></span> Только я</a></li>
                                                    <li><a href="#"><span class="mini-icon home"></span> Семья</a></li>
                                                    <li><a href="#"><span class="mini-icon garan"></span> Гаранты</a></li>
                                                    <li><a href="#"><span class="mini-icon subscr"></span> Подписчики</a></li>
                                                    <li><a class="active" href="#"><span class="mini-icon libra"></span> Равний доступ</a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="bt_group">
                                                <button type="button" class="save_button">Сохранить</button>
                                                <button type="reset" class="reset_button">Отмена</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="cont_title">
                                            <div class="ico-txt"><span class="cont_title_icon em_icon"></span></div>
                                            <div class="tl-txt">Добавить Email</div>
                                        </div>
                                        <div class="form-group">
                                            <div class="dropdown drop_settings">
                                                <input class="form-control cust_width" type="text">
                                                <div class="drop_privacy" data-toggle="dropdown" aria-hidden="true">
                                                    <span class="mini-icon subscr"></span>
                                                    <i class="fa fa-chevron-down"></i>
                                                </div>
                                                <ul class="dropdown-menu  dropdown-menu-right">
                                                    <li><a href="#"><span class="mini-icon earth"></span> Доступно всем</a></li>
                                                    <li><a href="#"><span class="mini-icon lock"></span> Только я</a></li>
                                                    <li><a href="#"><span class="mini-icon home"></span> Семья</a></li>
                                                    <li><a href="#"><span class="mini-icon garan"></span> Гаранты</a></li>
                                                    <li><a href="#"><span class="mini-icon subscr"></span> Подписчики</a></li>
                                                    <li><a class="active" href="#"><span class="mini-icon libra"></span> Равний доступ</a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="bt_group">
                                                <button type="button" class="save_button">Сохранить</button>
                                                <button type="reset" class="reset_button">Отмена</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="cont_title">
                                            <div class="ico-txt"><span class="cont_title_icon web_icon"></span></div>
                                            <div class="tl-txt">Добавить личный Веб сайт</div>
                                        </div>
                                        <div class="form-group">
                                            <div class="dropdown drop_settings">
                                                <input class="form-control cust_width" type="text">
                                                <div class="drop_privacy" data-toggle="dropdown" aria-hidden="true">
                                                    <span class="mini-icon earth"></span>
                                                    <i class="fa fa-chevron-down"></i>
                                                </div>
                                                <ul class="dropdown-menu  dropdown-menu-right">
                                                    <li><a href="#"><span class="mini-icon earth"></span> Доступно всем</a></li>
                                                    <li><a href="#"><span class="mini-icon lock"></span> Только я</a></li>
                                                    <li><a href="#"><span class="mini-icon home"></span> Семья</a></li>
                                                    <li><a href="#"><span class="mini-icon garan"></span> Гаранты</a></li>
                                                    <li><a href="#"><span class="mini-icon subscr"></span> Подписчики</a></li>
                                                    <li><a class="active" href="#"><span class="mini-icon libra"></span> Равний доступ</a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="bt_group">
                                                <button type="button" class="save_button">Сохранить</button>
                                                <button type="reset" class="reset_button">Отмена</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" add_adress">
                                        <div class="cont_title">
                                            <div class="ico-txt"><span class="cont_title_icon adress_icon"></span></div>
                                            <div class="tl-txt">Добавить адрес</div>
                                        </div>
                                        <div class="form-group addadress">
                                            <select class="select" id="ui-id-10" style="display: none;">
                                                <option>Страна</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-10-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-10-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Страна</span></span>
                                            <select class="select" id="ui-id-11" style="display: none;">
                                                <option>Индекс</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-11-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-11-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Индекс</span></span>
                                            <select class="select cust_width" id="ui-id-12" style="display: none;">
                                                <option>Город / Область</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-12-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-12-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Город / Область</span></span>
                                            <select class="select cust_width" id="ui-id-13" style="display: none;">
                                                <option>Город / Район</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-13-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-13-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Город / Район</span></span>
                                            <select class="select cust_width" id="ui-id-14" style="display: none;">
                                                <option>Тип Нас-го пункта</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-14-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-14-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Тип Нас-го пункта</span></span>
                                            <select class="select cust_width" id="ui-id-15" style="display: none;">
                                                <option>Название Нас-го пункта</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-15-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-15-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Название Нас-го пункта</span></span>
                                            <select class="select cust_width" id="ui-id-16" style="display: none;">
                                                <option>Тип улицы</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-16-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-16-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Тип улицы</span></span>
                                            <select class="select cust_width" id="ui-id-17" style="display: none;">
                                                <option>Название улицы</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-17-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-17-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Название улицы</span></span>
                                            <input class="form-control inp_sm" type="text" placeholder="№ Дома">
                                            <input class="form-control inp_mid" type="text" placeholder="№ Подьезда">
                                            <div class="dropdown drop_settings">
                                                <input class="form-control inp_sm" type="text" placeholder="№ Дома">
                                                <input class="form-control inp_mid" type="text" placeholder="№ Подьезда">
                                                <div class="drop_privacy" data-toggle="dropdown" aria-hidden="true">
                                                    <span class="mini-icon lock"></span>
                                                    <i class="fa fa-chevron-down"></i>
                                                </div>
                                                <ul class="dropdown-menu  dropdown-menu-right">
                                                    <li><a href="#"><span class="mini-icon earth"></span> Доступно всем</a></li>
                                                    <li><a href="#"><span class="mini-icon lock"></span> Только я</a></li>
                                                    <li><a href="#"><span class="mini-icon home"></span> Семья</a></li>
                                                    <li><a href="#"><span class="mini-icon garan"></span> Гаранты</a></li>
                                                    <li><a href="#"><span class="mini-icon subscr"></span> Подписчики</a></li>
                                                    <li><a class="active" href="#"><span class="mini-icon libra"></span> Равний доступ</a></li>
                                                </ul>
                                                <div class="clerafix"></div>
                                            </div>
                                            <div class="bt_group">
                                                <button type="button" class="save_button">Сохранить</button>
                                                <button type="reset" class="reset_button">Отмена</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8  col-xs-12 right_cont">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th colspan="5">Телефоны</th>
                                            </tr>
                                            <tr class="phone_numbers">
                                                <td>Мобильный:</td>
                                                <td>+380 67 274 82 05</td>
                                                <td><span class="mini-icon lock"></span></td>
                                                <td><a class="tab_link" href=""><span class="table_icon edit"></span> Редактировать</a></td>
                                                <td><a class="tab_link" href=""><span class="table_icon del"></span> Удалить</a></td>
                                            </tr>
                                            <tr class="phone_numbers pn_pad">
                                                <td>Домашний:</td>
                                                <td>+380 67 274 82 05</td>
                                                <td><span class="mini-icon lock"></span></td>
                                                <td><a class="tab_link" href=""><span class="table_icon edit"></span> Редактировать</a></td>
                                                <td><a class="tab_link" href=""><span class="table_icon del"></span> Удалить</a></td>
                                            </tr>
                                            <tr class="phone_numbers pn_pad">
                                                <td>Рабочий:</td>
                                                <td>+380 67 274 82 05</td>
                                                <td><span class="mini-icon lock"></span></td>
                                                <td><a class="tab_link" href=""><span class="table_icon edit"></span> Редактировать</a></td>
                                                <td><a class="tab_link" href=""><span class="table_icon del"></span> Удалить</a></td>
                                            </tr>
                                            <tr>
                                                <th colspan="5">Email</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2">gerasimova@gmail.com</td>
                                                <td><span class="mini-icon lock"></span></td>
                                                <td><a class="tab_link" href=""><span class="table_icon edit"></span> Редактировать</a></td>
                                                <td><a class="tab_link" href=""><span class="table_icon del"></span> Удалить</a></td>
                                            </tr>
                                            <tr>
                                                <th colspan="5">Веб Сайт</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2">krasotaspasetmir.org</td>
                                                <td><span class="mini-icon lock"></span></td>
                                                <td><a class="tab_link" href=""><span class="table_icon edit"></span> Редактировать</a></td>
                                                <td><a class="tab_link" href=""><span class="table_icon del"></span> Удалить</a></td>
                                            </tr>
                                            <tr>
                                                <th colspan="5">Адрес</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Украина 21021 г.Винница<br>пр-т Космонавтов <br>
                                                    дом 31  подъезд 3 <br> этаж 5   кв 72
                                                </td>
                                                <td><span class="mini-icon lock"></span></td>
                                                <td><a class="tab_link" href=""><span class="table_icon edit"></span> Редактировать</a></td>
                                                <td><a class="tab_link" href=""><span class="table_icon del"></span> Удалить</a></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Украина 22791 Винницкая обл.<br>
                                                    Ильинецкий район г. Ильинцы<br>
                                                    ул. Европейская  дом 31
                                                </td>
                                                <td><span class="mini-icon lock"></span></td>
                                                <td><a class="tab_link" href=""><span class="table_icon edit"></span> Редактировать</a></td>
                                                <td><a class="tab_link" href=""><span class="table_icon del"></span> Удалить</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane sobstv" id="sobstv">
                            <div class="contact_tab">
                                <div class="col-md-4 left_cont">
                                    <div class=" add_adress">
                                        <div class="cont_title">
                                            <div class="ico-txt"><span class="cont_title_icon sobstv_icon"></span></div>
                                            <div class="tl-txt">Добавить Недвижимость</div>
                                        </div>
                                        <div class="form-group">
                                            <select class="select" id="ui-id-18" style="display: none;">
                                                <option>Украина</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-18-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-18-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Украина</span></span>
                                            <div class="sobstv_desc_block">
                                                <div>РЕЕСТР ПРАВ СОБСТВЕННОСТИ НА НЕДВИЖИМОЕ ИМУЩЕСТВО</div>
                                                <a href="">https://rrp.minjust.gov.ua/</a>
                                            </div>
                                            <input class="form-control cust_width" type="text" value="Регистр-ый № имущества">
                                            <select class="select cust_width" id="ui-id-19" style="display: none;">
                                                <option>Регистр-ый № имущества</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-19-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-19-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Регистр-ый № имущества</span></span>
                                            <select class="select cust_width" id="ui-id-20" style="display: none;">
                                                <option>Тип имущества</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-20-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-20-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Тип имущества</span></span>
                                            <select class="select cust_width" id="ui-id-21" style="display: none;">
                                                <option>Город / Область</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-21-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-21-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Город / Область</span></span>
                                            <select class="select cust_width" id="ui-id-22" style="display: none;">
                                                <option>Город / Район</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-22-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-22-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Город / Район</span></span>
                                            <select class="select cust_width" id="ui-id-23" style="display: none;">
                                                <option>Тип Нас-го пункта</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-23-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-23-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Тип Нас-го пункта</span></span>
                                            <select class="select cust_width" id="ui-id-24" style="display: none;">
                                                <option>Название Нас-го пункта</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-24-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-24-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Название Нас-го пункта</span></span>
                                            <select class="select cust_width" id="ui-id-25" style="display: none;">
                                                <option>Тип улицы</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-25-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-25-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Тип улицы</span></span>
                                            <select class="select cust_width" id="ui-id-26" style="display: none;">
                                                <option>Название улицы</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-26-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-26-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Название улицы</span></span>
                                            <input class="form-control inp_sm" type="text" placeholder="№ Дома">
                                            <input class="form-control inp_mid" type="text" placeholder="№ Квартиры">
                                            <input class="form-control cust_width" type="text" value="Площадь зем. уч-ка (кв.м)">
                                            <div class="sobstv_desc_block">
                                                Дата принятия решения о государственной регистрации:
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="min_sel">
                                                <select class="select" id="ui-id-27" style="display: none;">
                                                    <option>День</option>
                                                </select>
                                                <span tabindex="0" id="ui-id-27-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-27-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">День</span></span>
                                            </div>
                                            <div class="min_sel">
                                                <select class="select" id="ui-id-28" style="display: none;">
                                                    <option>Месяц</option>
                                                </select>
                                                <span tabindex="0" id="ui-id-28-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-28-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Месяц</span></span>
                                            </div>
                                            <div class="min_sel">
                                                <select class="select" id="ui-id-29" style="display: none;">
                                                    <option>Год</option>
                                                </select>
                                                <span tabindex="0" id="ui-id-29-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-29-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Год</span></span>
                                            </div>
                                            <div class="sobstv_desc_block">
                                                Дата внесения записи:
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="min_sel">
                                                <select class="select" id="ui-id-30" style="display: none;">
                                                    <option>День</option>
                                                </select>
                                                <span tabindex="0" id="ui-id-30-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-30-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">День</span></span>
                                            </div>
                                            <div class="min_sel">
                                                <select class="select" id="ui-id-31" style="display: none;">
                                                    <option>Месяц</option>
                                                </select>
                                                <span tabindex="0" id="ui-id-31-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-31-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Месяц</span></span>
                                            </div>
                                            <div class="min_sel">
                                                <select class="select" id="ui-id-32" style="display: none;">
                                                    <option>Год</option>
                                                </select>
                                                <span tabindex="0" id="ui-id-32-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-32-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Год</span></span>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="cust_width">
                                                <select class="select " id="ui-id-33" style="display: none;">
                                                    <option>Форма собственности</option>
                                                </select>
                                                <span tabindex="0" id="ui-id-33-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-33-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Форма собственности</span></span>
                                            </div>
                                            <input class="form-control cust_width" type="text" value="Доля собственности">
                                            <div class="sobstv_desc_block"> Основания возникновения права собственности</div>
                                            <div class="cust_width">
                                                <select class="select" id="ui-id-34" style="display: none;">
                                                    <option>Тип документа</option>
                                                </select>
                                                <span tabindex="0" id="ui-id-34-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-34-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Тип документа</span></span>
                                            </div>
                                            <input class="form-control cust_width" type="text" value="Номер документа">
                                            <div class="sobstv_desc_block"> Дата подписания</div>
                                            <div class="clearfix"></div>
                                            <div class="min_sel">
                                                <select class="select " id="ui-id-35" style="display: none;">
                                                    <option>День</option>
                                                </select>
                                                <span tabindex="0" id="ui-id-35-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-35-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">День</span></span>
                                            </div>
                                            <div class="min_sel">
                                                <select class="select" id="ui-id-36" style="display: none;">
                                                    <option>Месяц</option>
                                                </select>
                                                <span tabindex="0" id="ui-id-36-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-36-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Месяц</span></span>
                                            </div>
                                            <div class="min_sel">
                                                <select class="select" id="ui-id-37" style="display: none;">
                                                    <option>Год</option>
                                                </select>
                                                <span tabindex="0" id="ui-id-37-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-37-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Год</span></span>
                                            </div>
                                            <div class="dropdown drop_settings sobstvennost">
                                                <span class="mini-icon lock"></span>
                                                <i class="fa fa-chevron-down" data-toggle="dropdown" aria-hidden="true"></i>
                                                <ul class="dropdown-menu  dropdown-menu-right">
                                                    <li><a href="#"><span class="mini-icon earth"></span> Доступно всем</a></li>
                                                    <li><a href="#"><span class="mini-icon lock"></span> Только я</a></li>
                                                    <li><a href="#"><span class="mini-icon home"></span> Семья</a></li>
                                                    <li><a href="#"><span class="mini-icon garan"></span> Гаранты</a></li>
                                                    <li><a href="#"><span class="mini-icon subscr"></span> Подписчики</a></li>
                                                    <li><a class="active" href="#"><span class="mini-icon libra"></span> Равний доступ</a></li>
                                                </ul>
                                            </div>
                                            <div class="bt_group">
                                                <button type="button" class="save_button">Сохранить</button>
                                                <button type="reset" class="reset_button">Отмена</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 right_cont">
                                    <div class="sobstv_title">Недвижимость</div>
                                    <div class="sobstv_info">
                                        <div><span>Страна:</span> Украина</div>
                                        <div><span>Сведения из:</span> РЕЕСТР ПРАВ СОБСТВЕННОСТИ НА
                                            НЕДВИЖИМОЕ ИМУЩЕСТВО
                                        </div>
                                        <div><span>Регистрационный номер имущества:</span> 9724098</div>
                                        <div><span>Тип имущества:</span> нежилое здание</div>
                                        <div><span>Адрес недвижимого имущества:</span> Виницкая обл., г.Винница
                                            пр-т Космонавтов дом 25
                                        </div>
                                        <div><span>Площадь земельного участка (кв.м):</span> 1227,9</div>
                                        <div><span>Дата принятия решения о государственной регистрации:</span>
                                            21.03.2007
                                        </div>
                                        <div><span>Дата внесения записи:</span> 21.03.2007</div>
                                        <div><span>Форма собственности:</span> частная</div>
                                        <div><span>Доля собственности:</span> 1/1</div>
                                        <div><span>Основание возникновения права собственности:</span>
                                            договор купли-продажи, 361, 17.03.2007
                                        </div>
                                        <div class="text-right">
                                            <span class="mini-icon lock"></span>
                                            <a class="tab_link cust_marg" href=""><span class="table_icon edit"></span> Редактировать</a>
                                            <a class="tab_link" href=""><span class="table_icon del"></span> Удалить</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="potrebnost">
                            <div class="potrebnost_info col-xs-12 no-pad">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="cont_title">
                                        <div class="ico-txt">
                                            <div class="cont_title_icon ierarh_icon"></div>
                                        </div>
                                        <div class="tl-txt">Иерархия<br>основных потребностей</div>
                                    </div>
                                    <ul class="potr_ul list-unstyled">
                                        <li>
                                            <select class="select" id="ui-id-38" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-38-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-38-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-39" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-39-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-39-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-40" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-40-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-40-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-41" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-41-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-41-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-42" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-42-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-42-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-43" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-43-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-43-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-44" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-44-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-44-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-45" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-45-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-45-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-46" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-46-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-46-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-47" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-47-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-47-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4  col-sm-4 col-xs-12 middle_board">
                                    <div class="cont_title">
                                        <div class="ico-txt">
                                            <div class="cont_title_icon ierarh_icon"></div>
                                        </div>
                                        <div class="tl-txt">Иерархия первого уровня<br><span>(детализация основных потребностей)</span></div>
                                    </div>
                                    <ul class="potr_ul list-unstyled">
                                        <li>
                                            <select class="select" id="ui-id-48" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-48-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-48-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-49" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-49-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-49-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-50" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-50-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-50-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-51" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-51-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-51-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-52" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-52-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-52-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-53" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-53-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-53-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-54" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-54-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-54-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-55" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-55-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-55-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-56" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-56-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-56-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-57" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-57-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-57-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="cont_title">
                                        <div class="ico-txt">
                                            <div class="cont_title_icon ierarh_icon"></div>
                                        </div>
                                        <div class="tl-txt">Иерархия второго уровня<br><span>(детализация первого уровня)</span></div>
                                    </div>
                                    <ul class="potr_ul list-unstyled">
                                        <li>
                                            <select class="select" id="ui-id-58" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-58-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-58-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-59" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-59-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-59-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-60" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-60-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-60-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-61" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-61-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-61-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-62" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-62-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-62-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-63" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-63-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-63-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-64" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-64-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-64-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-65" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-65-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-65-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-66" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-66-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-66-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                        <li>
                                            <select class="select" id="ui-id-67" style="display: none;">
                                                <option>Физиологические потребности</option>
                                            </select>
                                            <span tabindex="0" id="ui-id-67-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-67-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Физиологические потребности</span></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 text-right pinf_bot">
                                    <div class="dropdown drop_settings">
                                        <span class="mini-icon lock"></span>
                                        <i class="fa fa-chevron-down" data-toggle="dropdown" aria-hidden="true" aria-expanded="false"></i>
                                        <ul class="dropdown-menu  dropdown-menu-right">
                                            <li><a href="#"><span class="mini-icon earth"></span> Доступно всем</a></li>
                                            <li><a href="#"><span class="mini-icon lock"></span> Только я</a></li>
                                            <li><a href="#"><span class="mini-icon home"></span> Семья</a></li>
                                            <li><a href="#"><span class="mini-icon garan"></span> Гаранты</a></li>
                                            <li><a href="#"><span class="mini-icon subscr"></span> Подписчики</a></li>
                                            <li><a class="active" href="#"><span class="mini-icon libra"></span> Равний доступ</a></li>
                                        </ul>
                                    </div>
                                    <div class="bt_group">
                                        <button type="button" class="save_button">Сохранить</button>
                                        <button type="reset" class="reset_button">Отмена</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="server">
                            <div class="contact_tab">
                                <div class="col-md-4 left_cont">
                                    <div class="">
                                        <div class="cont_title"><span class="cont_title_icon serv_icon"></span> Зарегистрировать сервер</div>
                                        <div class="form-gr">
                                            <div class="col-md-1 no-pad">
                                                <label for="">IP:</label>
                                            </div>
                                            <div class="col-md-5 no-pad">
                                                <input type="text" class="form-control ip">
                                            </div>
                                            <div class="col-md-2 no-pad port" style="padding-left: 5px;">
                                                <label class="lastlab" for="">Port:</label>
                                            </div>
                                            <div class="col-md-4 no-pad">
                                                <input type="text" class="form-control port">
                                            </div>
                                        </div>
                                        <div class="bt_group text-right">
                                            <button type="button" class="save_button servreg">Зарегистрировать</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 right_cont">
                                    <div class="serv_title">
                                        <div class="serv_num">1</div>
                                        <img class="img-responsive" src="/social/img/icons/serv.png"> IP 5.189.23.25   <a class="tab_link" href=""><span class="table_icon del"></span> Удалить</a>
                                    </div>
                                    <div class="server_info">
                                        <div><span>Статус:</span> Активен</div>
                                        <div><span>Дата регистрации:</span> <b>26.02. 2017  18:32</b></div>
                                        <div><span>Общее количество блоков
                              с момента регистрации:</span> <b>244</b> блока
                                        </div>
                                        <div><span>Сервер Активен:</span> <b>192</b> блока</div>
                                        <div><span>Начислено за Сервер:</span> <b>15 743</b> enebra</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="potrebnost_info bl_bot col-xs-12 no-pad potr_show">
                        <div class="col-xs-12 text-center p_inf_title">Создать новую, заменить или дополнить список потребностей</div>
                        <div class="col-md-4 col-sm-4 col-xs-12 choose_potrebn">
                            <div class="form-group row active">
                                <div class="ch_p_title text-center">Выбрать основную потребность:</div>
                                <div class="col-md-2 col-sm-2 col-xs-2 no-pad inplab">
                                    <input type="radio" name="osn_potr" class="" id="potr1" checked="">
                                    <label for="potr1"></label>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 pad-left">
                                    <select class="select" id="ui-id-68" style="display: none;">
                                        <option></option>
                                    </select>
                                    <span tabindex="0" id="ui-id-68-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-68-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">&nbsp;</span></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="ch_p_title text-center">Создать основную потребность:</div>
                                <div class="col-md-2 col-sm-2 col-xs-2 no-pad inplab">
                                    <input type="radio" name="osn_potr" class="" id="potr2">
                                    <label for="potr2"></label>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 pad-left">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 choose_potrebn">
                            <div class="form-group row active">
                                <div class="ch_p_title text-center">Выбрать потребность 1-го уровня:</div>
                                <div class="col-md-2 col-sm-2 col-xs-2 no-pad inplab">
                                    <input type="radio" name="potr_2" class="" id="potr3" checked="">
                                    <label for="potr3"></label>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 pad-left">
                                    <select class="select" id="ui-id-69" style="display: none;">
                                        <option></option>
                                    </select>
                                    <span tabindex="0" id="ui-id-69-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-69-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">&nbsp;</span></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="ch_p_title text-center">Создать потребность 1-го уровня:</div>
                                <div class="col-md-2 col-sm-2 col-xs-2 no-pad inplab">
                                    <input type="radio" name="potr_2" class="" id="potr4">
                                    <label for="potr4"></label>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 pad-left">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 choose_potrebn">
                            <div class="form-group row active">
                                <div class="ch_p_title text-center">Выбрать потребность 2-го уровня:</div>
                                <div class="col-md-2 col-sm-2 col-xs-2 no-pad inplab">
                                    <input type="radio" name="potr_3" class="" id="potr5" checked="">
                                    <label for="potr5"></label>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 pad-left">
                                    <select class="select" id="ui-id-70" style="display: none;">
                                        <option></option>
                                    </select>
                                    <span tabindex="0" id="ui-id-70-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-70-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">&nbsp;</span></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="ch_p_title text-center">Создать потребность 2-го уровня:</div>
                                <div class="col-md-2 col-sm-2 col-xs-2 no-pad inplab">
                                    <input type="radio" name="potr_3" class="" id="potr6">
                                    <label for="potr6"></label>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 pad-left">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 text-center p_inf_title">Написать обоснование к желаемым изменениям, дополнениям:</div>
                        <div class="col-xs-12 user_textarea_bl">
                            <div id="mceu_15" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width: 1px;">
                                <div id="mceu_15-body" class="mce-container-body mce-stack-layout">
                                    <div id="mceu_16" class="mce-toolbar-grp mce-container mce-panel mce-stack-layout-item mce-first" hidefocus="1" tabindex="-1" role="group">
                                        <div id="mceu_16-body" class="mce-container-body mce-stack-layout">
                                            <div id="mceu_17" class="mce-container mce-toolbar mce-stack-layout-item mce-first mce-last" role="toolbar">
                                                <div id="mceu_17-body" class="mce-container-body mce-flow-layout">
                                                    <div id="mceu_18" class="mce-container mce-flow-layout-item mce-first mce-btn-group" role="group">
                                                        <div id="mceu_18-body">
                                                            <div id="mceu_0" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_0" role="button" aria-label="Bold"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div>
                                                            <div id="mceu_1" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_1" role="button" aria-label="Italic"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div>
                                                            <div id="mceu_2" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_2" role="button" aria-label="Underline"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button></div>
                                                        </div>
                                                    </div>
                                                    <div id="mceu_19" class="mce-container mce-flow-layout-item mce-btn-group" role="group">
                                                        <div id="mceu_19-body">
                                                            <div id="mceu_3" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_3" role="button" aria-label="Align left"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div>
                                                            <div id="mceu_4" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_4" role="button" aria-label="Align center"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div>
                                                            <div id="mceu_5" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_5" role="button" aria-label="Align right"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div>
                                                            <div id="mceu_6" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_6" role="button" aria-label="Justify"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div>
                                                        </div>
                                                    </div>
                                                    <div id="mceu_20" class="mce-container mce-flow-layout-item mce-btn-group" role="group">
                                                        <div id="mceu_20-body">
                                                            <div id="mceu_7" class="mce-widget mce-btn mce-splitbtn mce-menubtn mce-first" role="button" tabindex="-1" aria-label="Bullet list" aria-haspopup="true"><button type="button" hidefocus="1" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div>
                                                            <div id="mceu_8" class="mce-widget mce-btn mce-splitbtn mce-menubtn" role="button" tabindex="-1" aria-label="Numbered list" aria-haspopup="true"><button type="button" hidefocus="1" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div>
                                                            <div id="mceu_9" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_9" role="button" aria-label="Decrease indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div>
                                                            <div id="mceu_10" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_10" role="button" aria-label="Increase indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div>
                                                            <div id="mceu_11" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_11" role="button" aria-label="Blockquote"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-blockquote"></i></button></div>
                                                        </div>
                                                    </div>
                                                    <div id="mceu_21" class="mce-container mce-flow-layout-item mce-btn-group" role="group">
                                                        <div id="mceu_21-body">
                                                            <div id="mceu_12" class="mce-widget mce-btn mce-first mce-last" tabindex="-1" aria-labelledby="mceu_12" role="button" aria-label="Clear formatting"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-removeformat"></i></button></div>
                                                        </div>
                                                    </div>
                                                    <div id="mceu_22" class="mce-container mce-flow-layout-item mce-last mce-btn-group" role="group">
                                                        <div id="mceu_22-body">
                                                            <div id="mceu_13" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_13" role="button" aria-label="Insert/edit image"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i></button></div>
                                                            <div id="mceu_14" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_14" role="button" aria-label="Insert/edit video"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-media"></i></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="mceu_23" class="mce-edit-area mce-container mce-panel mce-stack-layout-item mce-last" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px; position: relative;"><iframe id="mce_0_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help" src='javascript:""' style="width: 100%; height: 360px; display: block;"></iframe><label style="position: absolute; top: 5px; left: 0px; color: rgb(153, 153, 156); padding: 1%; width: 98%; overflow: hidden; white-space: pre-wrap;"></label></div>
                                </div>
                            </div>
                            <textarea class="user_textarea" id="mce_0" style="display: none;" aria-hidden="true"></textarea>
                            <div class="bt_group btn_bottom flright lentabutton">
                                <button class="save_button" type="">пред просмотр</button>
                                <button class="save_button" type="">опубликовать</button>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
@stop