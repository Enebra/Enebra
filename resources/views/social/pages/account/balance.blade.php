@extends('layouts.account')
@section('account')
    <div class="tab-pane" id="balance">
        <div class="top-tab"><span class="uicon ballance"></span>Баланс</div>
    </div>
    <div class="ballance_block col-xs-12 no-pad">
        <div class="ballance_block_left col-md-6 col-sm-12 col-xs-12">
            <div class="ballance_block_title">Общая Информация</div>
            <div class="ballance_ul">
                <ul class="list-unstyled">
                    <li class="bicon balic1">
                        Общее количество всех выпущенных энебра
                        <div class="eneb_num">
                            450 823 657 128 enebra
                            <div class="eneb_percent">100<small>%</small></div>
                        </div>
                        <ul class="list-unstyled">
                            <li class="bicon balic2">
                                Общее количество всех распределенных энебра
                                в долю «Человек»
                                <div class="eneb_num">
                                    225 411 828 564 enebra
                                    <div class="eneb_percent">50<small>%</small></div>
                                </div>
                            </li>
                            <li class="bicon balic3">
                                Общее количество всех распределенных энебра
                                в долю «Поддержание работоспособности системы»
                                <div class="eneb_num">
                                    139 755 333 709,68 enebra
                                    <div class="eneb_percent">31<small>%</small></div>
                                </div>
                            </li>
                            <li class="bicon balic4">
                                Общее количество всех распределенных энебра
                                в долю «Финансирование мировых проектов»
                                <div class="eneb_num">
                                    85 636 494 854,32 enebra
                                    <div class="eneb_percent">19<small>%</small></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="ballance_ul">
                <ul class="list-unstyled">
                    <li class="bicon balic5">
                        Общее количество всех созданных блоков
                        с момента старта системы
                        <div class="eneb_num">525 600 блоков </div>
                    </li>
                    <li class="bicon balic6">
                        Общее количество участников проекта
                        <div class="eneb_num">
                            4 873 761 987 участников
                            <div class="eneb_percent">100<small>%</small></div>
                        </div>
                        <ul class="list-unstyled">
                            <li class="bicon balic7">
                                Общее количество участников проекта
                                имеющих статус "Активный"
                                <div class="eneb_num">
                                    4 727 549 127 участников
                                    <div class="eneb_percent">97<small>%</small></div>
                                </div>
                            </li>
                            <li class="bicon balic8">
                                Общее количество участников проекта
                                имеющих статус "Неактивный"
                                <div class="eneb_num">
                                    146 212 860 участников
                                    <div class="eneb_percent">3<small>%</small></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="bicon balic9">
                        Общее количество зарегистрированных серверов
                        <div class="eneb_num">
                            56 735 854 серверов
                            <div class="eneb_percent">100<small>%</small></div>
                        </div>
                        <ul class="list-unstyled">
                            <li class="bicon balic10">
                                Общее количество зарегистрированных
                                серверов имеющих статус "Активный"
                                <div class="eneb_num">
                                    48 225 476 серверов
                                    <div class="eneb_percent">85<small>%</small></div>
                                </div>
                            </li>
                            <li class="bicon balic11">
                                Общее количество зарегистрированных
                                серверов имеющих статус "Неактивный"
                                <div class="eneb_num">
                                    8 510 378 серверов
                                    <div class="eneb_percent">15<small>%</small></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ballance_block_right col-md-6 col-sm-12 col-xs-12">
            <div class="ballance_block_title">Личная Информация</div>
            <div class="ballance_ul">
                <ul class="list-unstyled">
                    <li class="bicon balic12">
                        Общее количество энебра на вашем счете
                        <div class="eneb_num">26 595 enebra  </div>
                        <ul class="list-unstyled">
                            <li class="bicon balic13">
                                Начислено энебра на вашем счете
                                <div class="eneb_num">27 325 enebra  </div>
                                <ul class="list-unstyled">
                                    <li class="bicon balic2">
                                        Начислено энебра доля «Человек»
                                        <div class="eneb_num">7 200 enebra   </div>
                                    </li>
                                    <li class="bicon balic9">
                                        Начислено энебра доля «Поддержание
                                        работоспособности системы»
                                        <div class="eneb_num">15 743 enebra  </div>
                                    </li>
                                    <li class="bicon balic14">
                                        Начислено энебра от рефералов
                                        <div class="eneb_num">4 382 enebra </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="bicon balic15">
                                Удержано энебра на вашем счете
                                <div class="eneb_num">730 enebra </div>
                                <ul class="list-unstyled">
                                    <li class="bicon balic14">
                                        Перечислено энебра вашему рефералу
                                        <div class="eneb_num">730 enebra   </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="ballance_ul">
                <ul class="list-unstyled">
                    <li class="bicon balic16">
                        Количество энебра начислено на ваших
                        несовершеннолетних детей
                        <div class="eneb_num">14 400 enebra  </div>
                        <ul class="list-unstyled kids">
                            <li>
                                <div class="addperson-block">
                                    <div class="img-wrap"><img class="img-responsive" src="/social/img/fam.png"></div>
                                    <div class="addperson-inf">
                                        <div class="name">Анастасия Герасимова</div>
                                        <div>Дочь (29.06.2013 года рождения)</div>
                                        <div class="bal_info">Начислено 7 200 enebra</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@stop