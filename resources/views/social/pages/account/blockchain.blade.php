@extends('layouts.account')
@section('account')
    <div class="tab-pane" id="blockchain">
        <div class="top-tab"><span class="uicon ballance"></span>Blockchain</div>
        <div class="blockchain_block col-xs-12 no-pad">
            <div class="blockchain_top col-xs-12">
                <div class="input-bl">
                    <label for=""><span class="blchainicon numbl"></span>Введите номер блока</label>
                    <div class="blockchain_enter_num">
                        <input type="text" class=""/>
                        <button class="blockchain_enter" type=""><span class="blchainicon enteric"></span></button>
                    </div>
                </div>
                <div class="blnum">Блок: 10379</div>
                <div class="blnum">Создается в данный момент: 548796</div>
                <div class="bt_group flright">
                    <button type="reset" class="whbut">Сверка</button>
                    <button type="button" class="save_button">Синхронизация</button>
                </div>
            </div>
            <div class="blockchain_middle col-xs-12 no-pad">
                <div id="blockchaincarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="blockchain_item  col-xs-12 no-pad">
                                <div class="table_wrap">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td><span class="blchainicon blocki"></span>Блок</td>
                                            <td>109973</td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon creattime"></span>Время Создания: </td>
                                            <td>2017-03-15 18:01:09</td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon sumpbl"></span>Хеш-Сумма предыдущего блока: </td>
                                            <td>185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon sumpbl"></span>Хеш-Сумма текущего блока: </td>
                                            <td>185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon usicon"></span>Пользователи (Всего: Актив/Неактив/Новые): </td>
                                            <td><span class="rreg">5 364 573 461:</span> 4 961 779 379 <span class="rreg">/ 402 794 082 / 3</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon servicon"></span>Сервера (Всего: Активные/Неактивные/Новые): </td>
                                            <td><span class="rreg">7 691 021:</span> 7 152 379 <span class="rreg">/ 538 642 / 1</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon enebicon"></span>Всего Энебра: </td>
                                            <td>450 823 657 128,000 000 00</td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon particon"></span>Доля "Человек" 50%: </td>
                                            <td>450 823 657 128,000 000 00</td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon particon"></span>Доля "ПРС" 31%: </td>
                                            <td>450 823 657 128,000 000 00</td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon particon"></span>Доля "ФМП" 19%:  </td>
                                            <td>450 823 657 128,000 000 00</td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon crinn"></span>Создано Инноваций:   </td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon crinficon"></span>Создано Информаций:   </td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon resvotes"></span>Получено Результатов Голосования:  </td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon tendicon"></span>Открыто /Завершено Тендеров:  </td>
                                            <td>0 / 0</td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon fondicon"></span>Средства Фонда (Всего; Получено/Потрачено):  </td>
                                            <td>3 856 751 862: 156 367 / 84 981</td>
                                        </tr>
                                        <tr>
                                            <td><span class="blchainicon blsize"></span>Размер Блока:   </td>
                                            <td>21.58 kB</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="blockchain_bottom col-xs-12 no-pad">
                                    <ul class="nav nav-pills tab-cont_nav_inside">
                                        <li class="first_tab_custom  active"><a href="#users_chain" data-toggle="tab"><span class="blchainicon navchic usnav"></span>Пользователи</a></li>
                                        <li><a href="#innov_chain" data-toggle="tab"><span class="blchainicon navchic innav"></span>Иновации</a></li>
                                        <li><a href="#inf_chain" data-toggle="tab"><span class="blchainicon navchic infnav"></span>Информация</a></li>
                                        <li><a href="#serv_chain" data-toggle="tab"><span class="blchainicon navchic servnav"></span>Сервера</a></li>
                                        <li><a href="#fond_chain" data-toggle="tab"><span class="blchainicon navchic fondnav"></span>Фонд</a></li>
                                    </ul>
                                    <div class="tab_search col-xs-12">
                                        <div class="deleg_search col-md-offset-1 col-md-3">
                                            <input type="search" class="form-control"/>
                                            <button type="submit" class="btn deleg_search_btn"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                    </div>
                                    <div class="tab-content clearfix tab-cont-info">
                                        <div class="tab-pane active col-xs-12 no-pad" id="users_chain">
                                            <ul class="nav nav-pills col-md-2 tab-cont_nav bltab_custom">
                                                <li class="active">
                                                    <a href="#usnew" data-toggle="tab">
                                                        <span class="blchainicon navchic new"></span>
                                                        <div>Новые</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#usaddings" data-toggle="tab">
                                                        <span class="blchainicon navchic add"></span>
                                                        <div>Внесли дополнения</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#activeus" data-toggle="tab">
                                                        <span class="blchainicon navchic act"></span>
                                                        <div>Активные</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="noactiveus" href="#potrebnost" data-toggle="tab">
                                                        <span class="blchainicon navchic noact"></span>
                                                        <div>Неактивные</div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content clearfix tab-cont-info tab_custom">
                                                <div class="tab-pane active" id="usnew">
                                                    <div class="blockchain_tab_content clearfix">
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="user-name col-md-4 no-pad"><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                            <div class="blockchain_tab_content_item_info col-md-8 no-pad">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                        </div>
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="user-name col-md-4 no-pad"><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                            <div class="blockchain_tab_content_item_info col-md-8 no-pad">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                        </div>
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="user-name col-md-4 no-pad"><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                            <div class="blockchain_tab_content_item_info col-md-8 no-pad">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="usaddings">
                                                    <div class="blockchain_tab_content clearfix">
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="user-name col-md-4 no-pad"><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                            <div class="blockchain_tab_content_item_info col-md-8 no-pad">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                        </div>
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="user-name col-md-4 no-pad"><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                            <div class="blockchain_tab_content_item_info col-md-8 no-pad">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="activeus">
                                                    <div class="blockchain_tab_content clearfix">
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="user-name col-md-4 no-pad"><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                            <div class="blockchain_tab_content_item_info col-md-8 no-pad">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="noactiveus">
                                                    <div class="blockchain_tab_content clearfix">
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="user-name col-md-4 no-pad"><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                            <div class="blockchain_tab_content_item_info col-md-8 no-pad">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane col-xs-12 no-pad" id="innov_chain">
                                            <ul class="nav nav-pills col-md-2 tab-cont_nav bltab_custom">
                                                <li class="active">
                                                    <a href="#innnew" data-toggle="tab">
                                                        <span class="blchainicon navchic new"></span>
                                                        <div>Новые</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#innaddings" data-toggle="tab">
                                                        <span class="blchainicon navchic add"></span>
                                                        <div>Внесены улучшения</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#innchstat" data-toggle="tab">
                                                        <span class="blchainicon navchic chstat"></span>
                                                        <div>Изменили статус</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="#activeinn" href="#potrebnost" data-toggle="tab">
                                                        <span class="blchainicon navchic act"></span>
                                                        <div>Принятые</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="#noactiveinn" href="#potrebnost" data-toggle="tab">
                                                        <span class="blchainicon navchic noact"></span>
                                                        <div>Непринятые</div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content clearfix tab-cont-info tab_custom">
                                                <div class="tab-pane active" id="innnew">
                                                    <div class="blockchain_tab_content clearfix">
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="blcharr collapsed"></div>
                                                            <div class="table_cont">
                                                                <div class="user-name "><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                                <div class="blockchain_tab_content_item_info">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                            </div>
                                                            <div class="collapse block-collapse col-xs-12 no-pad">
                                                                <div class="user-name"></div>
                                                                <div class="blockchain_tab_content_item_info">Дополнения к интерфейсу для увеличения возможностей настройки </div>
                                                            </div>
                                                        </div>
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="blcharr collapsed"></div>
                                                            <div class="table_cont">
                                                                <div class="user-name "><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                                <div class="blockchain_tab_content_item_info">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                            </div>
                                                            <div class="collapse block-collapse col-xs-12 no-pad">
                                                                <div class="user-name"></div>
                                                                <div class="blockchain_tab_content_item_info">Дополнения к интерфейсу для увеличения возможностей настройки </div>
                                                            </div>
                                                        </div>
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="blcharr collapsed"></div>
                                                            <div class="table_cont">
                                                                <div class="user-name "><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                                <div class="blockchain_tab_content_item_info">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                            </div>
                                                            <div class="collapse block-collapse col-xs-12 no-pad">
                                                                <div class="user-name"></div>
                                                                <div class="blockchain_tab_content_item_info">Дополнения к интерфейсу для увеличения возможностей настройки </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="innaddings">
                                                    <div class="blockchain_tab_content clearfix">
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="blcharr collapsed"></div>
                                                            <div class="table_cont">
                                                                <div class="user-name">
                                                                    <img class="img-responsive" src="/social/img/user.png"/>
                                                                    <div class="usdesc">Автор</div>
                                                                    Валентина Голушко
                                                                </div>
                                                                <div class="blockchain_tab_content_item_info">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                            </div>
                                                            <div class="collapse block-collapse col-xs-12 no-pad">
                                                                <div class="user-name">
                                                                    <img class="img-responsive" src="/social/img/user.png"/>
                                                                    <div class="usdesc">Соавтор</div>
                                                                    Валентина Голушко
                                                                </div>
                                                                <div class="blockchain_tab_content_item_info">Дополнения к интерфейсу для увеличения возможностей настройки 185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                            </div>
                                                        </div>
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="user-name"><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                            <div class="blockchain_tab_content_item_info">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="innchstat">
                                                    <div class="blockchain_tab_content clearfix">
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="blcharr collapsed"></div>
                                                            <div class="table_cont">
                                                                <div class="user-name"><img class="img-responsive" src="/social/img/user.png"/>Валентина Голушко</div>
                                                                <div class="blockchain_tab_content_item_info">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                            </div>
                                                            <div class="collapse block-collapse col-xs-12 no-pad">
                                                                <div class="user-name cust_txt"><span class="blchainicon navchic chstat"></span> Голосование</div>
                                                                <div class="blockchain_tab_content_item_info">85c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="activeinn">
                                                    <div class="blockchain_tab_content clearfix">
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="user-name col-md-4 no-pad"><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                            <div class="blockchain_tab_content_item_info col-md-8 no-pad">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="noactiveinn">
                                                    <div class="blockchain_tab_content clearfix">
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="user-name col-md-4 no-pad"><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                            <div class="blockchain_tab_content_item_info col-md-8 no-pad">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane col-xs-12 no-pad" id="inf_chain">
                                            <ul class="nav nav-pills col-md-2 tab-cont_nav bltab_custom">
                                                <li class="active">
                                                    <a href="#infnew" data-toggle="tab">
                                                        <span class="blchainicon navchic new"></span>
                                                        <div>Новые</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#inffake" data-toggle="tab">
                                                        <span class="blchainicon navchic fake"></span>
                                                        <div>Фейковая информация</div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content clearfix tab-cont-info tab_custom">
                                                <div class="tab-pane active" id="infnew">
                                                    <div class="blockchain_tab_content clearfix">
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="blcharr collapsed"></div>
                                                            <div class="table_cont">
                                                                <div class="user-name "><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                                <div class="blockchain_tab_content_item_info">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                            </div>
                                                            <div class="collapse block-collapse col-xs-12 no-pad">
                                                                <div class="user-name"></div>
                                                                <div class="blockchain_tab_content_item_info">Дополнения к интерфейсу для увеличения возможностей настройки </div>
                                                            </div>
                                                        </div>
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="blcharr collapsed"></div>
                                                            <div class="table_cont">
                                                                <div class="user-name "><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                                <div class="blockchain_tab_content_item_info">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                            </div>
                                                            <div class="collapse block-collapse col-xs-12 no-pad">
                                                                <div class="user-name"></div>
                                                                <div class="blockchain_tab_content_item_info">Дополнения к интерфейсу для увеличения возможностей настройки </div>
                                                            </div>
                                                        </div>
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="blcharr collapsed"></div>
                                                            <div class="table_cont">
                                                                <div class="user-name "><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                                <div class="blockchain_tab_content_item_info">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                            </div>
                                                            <div class="collapse block-collapse col-xs-12 no-pad">
                                                                <div class="user-name"></div>
                                                                <div class="blockchain_tab_content_item_info">Дополнения к интерфейсу для увеличения возможностей настройки </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="inffake">
                                                    <div class="blockchain_tab_content clearfix">
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="blcharr collapsed"></div>
                                                            <div class="table_cont">
                                                                <div class="user-name">
                                                                    <img class="img-responsive" src="/social/img/user.png"/>
                                                                    <div class="usdesc">Автор</div>
                                                                    Валентина Голушко
                                                                </div>
                                                                <div class="blockchain_tab_content_item_info">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                            </div>
                                                            <div class="collapse block-collapse col-xs-12 no-pad">
                                                                <div class="user-name">
                                                                    <img class="img-responsive" src="/social/img/user.png"/>
                                                                    <div class="usdesc">Соавтор</div>
                                                                    Валентина Голушко
                                                                </div>
                                                                <div class="blockchain_tab_content_item_info">Дополнения к интерфейсу для увеличения возможностей настройки 185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                            </div>
                                                        </div>
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="user-name"><img class="img-responsive" src="/social/img/user.png"/> Валентина Голушко</div>
                                                            <div class="blockchain_tab_content_item_info">185c3aa465bd6b44f728f11c881965e8f45045f2270e8b753f8b15e80f801e38</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane col-xs-12 no-pad" id="serv_chain">
                                            <ul class="nav nav-pills col-md-2 tab-cont_nav bltab_custom">
                                                <li class="active">
                                                    <a href="#servnew" data-toggle="tab">
                                                        <span class="blchainicon navchic new"></span>
                                                        <div>Новые</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#servact" data-toggle="tab">
                                                        <span class="blchainicon navchic act"></span>
                                                        <div>Активные</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#servnoact" data-toggle="tab">
                                                        <span class="blchainicon navchic noact"></span>
                                                        <div>Неактивные</div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content clearfix tab-cont-info tab_custom">
                                                <div class="tab-pane active" id="servnew">
                                                    <div class="blockchain_tab_content clearfix">
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="table_cont">
                                                                <div class="user-name ">
                                                                    <img class="img-responsive" src="/social/img/user.png"/>
                                                                    <div class="usdesc ip">IP: 192.153.171.97 </div>
                                                                    Валентина Голушко
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="servact">
                                                    <div class="blockchain_tab_content clearfix">
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="table_cont">
                                                                <div class="user-name ">
                                                                    <img class="img-responsive" src="/social/img/user.png"/>
                                                                    <div class="usdesc ip">IP: 192.153.171.97 </div>
                                                                    Валентина Голушко
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="servnoact">
                                                    <div class="blockchain_tab_content clearfix">
                                                        <div class="blockchain_tab_content_item col-xs-12 no-pad">
                                                            <div class="table_cont">
                                                                <div class="user-name ">
                                                                    <img class="img-responsive" src="/social/img/user.png"/>
                                                                    <div class="usdesc ip">IP: 192.153.171.97 </div>
                                                                    Валентина Голушко
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane col-xs-12 no-pad" id="fond_chain">
                                            fond
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="blchainarr left" href="#blockchaincarousel" data-slide="prev">
                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                        <div class="arrinfo">
                            <div>пред.блок</div>
                            10658
                        </div>
                    </a>
                    <a class="blchainarr right" href="#blockchaincarousel" data-slide="next">
                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                        <div class="arrinfo">
                            <div>след.блок</div>
                            10658
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop