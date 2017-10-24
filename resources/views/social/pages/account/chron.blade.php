@extends('layouts.account')
@section('account')
    <div class="tab-pane" id="chronic">
        <div class="top-tab"><span class="uicon chronic"></span>Хроника</div>
        <div class="tab-cont-block">
            <ul class="nav nav-pills col-md-3 col-sm-12 col-xs-12 tab-cont_nav ">
                <li class="active"><a href="#innovauth" data-toggle="tab"><span class="chron_icons inauthmini"></span>Инновации (Автор)</a></li>
                <li><a href="#innovcoauth" data-toggle="tab"><span class="chron_icons incoauthmini"></span>Инновации (Соавтор)</a></li>
                <li><a href="#infotab" data-toggle="tab"><span class="chron_icons infomini"></span>Информация</a></li>
                <li><a href="#votes" data-toggle="tab"><span class="chron_icons votesmini"></span>Голосования</a></li>
            </ul>
            <div class="col-md-9 col-sm-12 col-xs-12 tab-content clearfix tab-cont-bl no-pad">
                <div class="tab-pane active" id="innovauth">
                    <div class="chron-tab-top col-xs-12 no-pad">
                        <div class="sorting-but">
                            <img class="" src="/img/sortingicon.png">
                        </div>
                        <div class="chron_tab_top_right_content">
                            <div class="col-md-2 no-pad">
                                Сумма <br>
                                Количество 12
                            </div>
                            <ul class="no-pad list-unstyled col-md-10">
                                <li><img class="chicon" src="/social/img/icons/rew.png"> 63</li>
                                <li><img src="/social/img/icons/number-part.png"> 463 456 667</li>
                                <li><img class="chicon" src="/social/img/icons/thanks.png"> 463 456 667</li>
                                <li><img class="chicon" src="/social/img/icons/useless.png"> 463 456 667</li>
                                <li><img src="/social/img/icons/downl.png"> 463 456 667</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 no-pad chrblock">
                        <div class="col-md-6 no-pad rreg">
                            <div class="chr_img_wrap">
                                <div class="chrblock_num">12</div>
                                <img class="img-responsive block-big-img" src="/social/img/im.png">
                                <div class="chrblock_info">
                                    <div class="col-md-7  col-sm-7 no-pad pad-right">
                                        <div class="rlight">
                                            <img class="chicon" src="/social/img/calw.png"> 28 августа 2016 в 22:45
                                            <img class="" src="/social/img/icons/numw.png"> 7 567
                                        </div>
                                        <div class="open-revision"><img class="" src="/social/img/icons/statw.png"> <span>Открытая Доработка</span> до 22:44 09 сентября 2016</div>
                                        <a href="#"><img class="" src="/social/img/icons/earthw.png"></a>  Общемировая
                                    </div>
                                    <div class="col-md-5  col-sm-5 no-pad">
                                        <ul class="list-unstyled">
                                            <li><img class="" src="/social/img/icons/set1w.png"> Здравоохранение</li>
                                            <li><img class="" src="/social/img/icons/set2w.png"> Все</li>
                                            <li><img class="" src="/social/img/icons/set3w.png"> Все</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 rreg chr_block_txt">
                            <div class="h3">МЕТОДИКА иЗУЧЕНИЯ ИНОСТРАННОГО ЯЗЫКА</div>
                            Цель данной методики – научить человека взаимодействовать с другими людьми на изучаемом языке, что подразумевает все формы общения: речь, письмо (как чтение, так и навыки написания текстов), умение слушать и понимать сказанное собеседником. Этого проще всего достичь, обучая человека в естественных условиях - естественных, прежде всего, с точки зрения здравого смысла. Например, вопрос преподавателя «Что это?» с указанием на стул, может считаться естественным только в том случае, если преподаватель на самом деле не знает, что же это такое и т.д.
                            Современный коммуникативный метод представляет сочетание многих способов обучения иностранным языкам. На сегодняшний день это вершина эволюционной пирамиды различных образовательных методик.
                            Коммуникативный метод подходит большинству людей, позволяет быстрее и более осознанно выучить иностранный язык.
                        </div>
                        <div class="col-xs-12 text-center"><a class="bl_more_link" href=""><span></span><span></span><span></span></a></div>
                        <div class="col-xs-12 no-pad chrblock_bottom">
                            <ul class="list-unstyled col-md-2 col-sm-12 col-xs-12 no-pad active_info ">
                                <li class="co-auth active">
                                    <a class="show_block"><img class="chicon" src="/social/img/icons/co-auth.png"> <span class="co-auth-span">3</span></a>
                                    <div class="add_form soc_authors_block">
                                        <form method="" action="">
                                            <div class="form_head col-xs-12 no-pad">
                                                <div class="col-xs-4 rmed"><img class="chicon" src="/social/img/icons/co-auth.png"> Соавторы</div>
                                                <div class="deleg_search col-xs-7">
                                                    <input type="search" class="form-control">
                                                    <button type="submit" class="btn deleg_search_btn"><span class="glyphicon glyphicon-search"></span></button>
                                                </div>
                                                <span class="close_form">×</span>
                                            </div>
                                            <div class="form_tabs col-xs-12 no-pad rmed">
                                                <ul class="nav nav-pills tab-cont_nav_inside">
                                                    <li class="active"><a href="#alternative" data-toggle="tab" aria-expanded="true">Альтернатива</a></li>
                                                    <li><a href="#changes" data-toggle="tab" aria-expanded="true">Изменения</a></li>
                                                    <li><a href="#adding" data-toggle="tab" aria-expanded="true">Дополнения</a></li>
                                                </ul>
                                                <div class="tab-content clearfix tab-cont-info">
                                                    <div class="tab-pane active" id="alternative">
                                                        <div class="col-md-4 col-sm-6 col-xs-6 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 col-xs-6 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 col-xs-6 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 col-xs-6 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="changes">
                                                        <div class="col-md-4 col-sm-6 col-xs-6 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 col-xs-6 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="adding">
                                                        <div class="col-md-4 col-sm-6 col-xs-6 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="active"><img class="chicon" src="/social/img/icons/chat.png"> 127</li>
                                <li class="active"><img class="chicon" src="/social/img/icons/level.png"> 4</li>
                            </ul>
                            <ul class="no-pad list-unstyled col-md-8 col-sm-12 col-xs-12 chblock_bottom_ul">
                                <li><img class="chicon" src="/social/img/icons/rew.png"> 63</li>
                                <li><img src="/social/img/icons/number-part.png"> 463 456 667</li>
                                <li><img class="chicon" src="/social/img/icons/thanks.png"> 463 456 667</li>
                                <li><img class="chicon" src="/social/img/icons/useless.png"> 463 456 667</li>
                                <li><img src="/social/img/icons/downl.png"> 463 456 667</li>
                            </ul>
                            <a class="block_bottom_btn rmed flright" href="/social/better-innovation.php">Улучшить</a>
                        </div>
                    </div>
                    <div class="col-xs-12 no-pad chrblock">
                        <div class="col-md-6 no-pad rreg">
                            <div class="chr_img_wrap">
                                <div class="chrblock_num">11</div>
                                <img class="img-responsive block-big-img" src="/social/img/im.png">
                                <div class="chrblock_info">
                                    <div class="col-md-7 col-sm-7 no-pad pad-right">
                                        <div class="rlight">
                                            <img class="chicon" src="/social/img/calw.png"> 28 августа 2016 в 22:45
                                            <img class="" src="/social/img/icons/numw.png"> 7 567
                                        </div>
                                        <div class="open-revision"><img class="" src="/social/img/icons/statw.png"> <span>Решение принято</span> 22:44 09 сентября 2016</div>
                                        <a href="#"><img class="" src="/social/img/icons/earthw.png"></a>  Общемировая
                                    </div>
                                    <div class="col-md-5 col-sm-5 no-pad">
                                        <ul class="list-unstyled">
                                            <li><img class="" src="/social/img/icons/set1w.png"> Здравоохранение</li>
                                            <li><img class="" src="/social/img/icons/set2w.png"> Все</li>
                                            <li><img class="" src="/social/img/icons/set3w.png"> Все</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 rreg chr_block_txt">
                            <div class="h3">МЕТОДИКА иЗУЧЕНИЯ ИНОСТРАННОГО ЯЗЫКА</div>
                            Цель данной методики – научить человека взаимодействовать с другими людьми на изучаемом языке, что подразумевает все формы общения: речь, письмо (как чтение, так и навыки написания текстов), умение слушать и понимать сказанное собеседником. Этого проще всего достичь, обучая человека в естественных условиях - естественных, прежде всего, с точки зрения здравого смысла. Например, вопрос преподавателя «Что это?» с указанием на стул, может считаться естественным только в том случае, если преподаватель на самом деле не знает, что же это такое и т.д.
                            Современный коммуникативный метод представляет сочетание многих способов обучения иностранным языкам. На сегодняшний день это вершина эволюционной пирамиды различных образовательных методик.
                            Коммуникативный метод подходит большинству людей, позволяет быстрее и более осознанно выучить иностранный язык.
                        </div>
                        <div class="col-xs-12 text-center"><a class="bl_more_link" href=""><span></span><span></span><span></span></a></div>
                        <div class="col-xs-12 no-pad chrblock_bottom">
                            <ul class="list-unstyled col-md-2 col-sm-12 col-xs-12 no-pad active_info ">
                                <li class="co-auth active">
                                    <a class="show_block"><img class="chicon" src="/social/img/icons/co-auth.png"> <span class="co-auth-span">3</span></a>
                                    <div class="add_form soc_authors_block">
                                        <form method="" action="">
                                            <div class="form_head col-xs-12 no-pad">
                                                <div class="col-xs-4 rmed"><img class="chicon" src="/social/img/icons/co-auth.png"> Соавторы</div>
                                                <div class="deleg_search col-xs-7">
                                                    <input type="search" class="form-control">
                                                    <button type="submit" class="btn deleg_search_btn"><span class="glyphicon glyphicon-search"></span></button>
                                                </div>
                                                <span class="close_form">×</span>
                                            </div>
                                            <div class="form_tabs col-xs-12 no-pad rmed">
                                                <ul class="nav nav-pills tab-cont_nav_inside">
                                                    <li class="active"><a href="#alternative" data-toggle="tab" aria-expanded="true">Альтернатива</a></li>
                                                    <li><a href="#changes" data-toggle="tab" aria-expanded="true">Изменения</a></li>
                                                    <li><a href="#adding" data-toggle="tab" aria-expanded="true">Дополнения</a></li>
                                                </ul>
                                                <div class="tab-content clearfix tab-cont-info">
                                                    <div class="tab-pane active" id="alternative">
                                                        <div class="col-xs-4 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="changes">
                                                        <div class="col-xs-4 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="adding">
                                                        <div class="col-xs-4 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="active"><img class="chicon" src="/social/img/icons/chat.png"> 127</li>
                                <li class="active"><img class="chicon" src="/social/img/icons/level.png"> 4</li>
                            </ul>
                            <ul class="no-pad list-unstyled col-md-8 col-sm-12 col-xs-12 chblock_bottom_ul">
                                <li><img class="chicon" src="/social/img/icons/rew.png"> 63</li>
                                <li><img src="/social/img/icons/number-part.png"> 463 456 667</li>
                                <li><img class="chicon" src="/social/img/icons/thanks.png"> 463 456 667</li>
                                <li><img class="chicon" src="/social/img/icons/useless.png"> 463 456 667</li>
                                <li><img src="/social/img/icons/downl.png"> 463 456 667</li>
                            </ul>
                            <a class="show_block_chron block_bottom_btn rmed flright">Уведомления </a>
                            <div class="clearfix"></div>
                            <div class="chron_form">
                                <form method="" action="">
                                    <span class="close_form chron_form_close">×</span>
                                    <div class="col-xs-12 no-pad chron_form_content">
                                        <div class="col-md-3 col-sm-3 col-xs-12 no-pad pad-right text-center">
                                            <label for="">Дата</label>
                                            <input type="text" class="">
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 no-pad pad-right text-center">
                                            <label for="">Имя Фамилия</label>
                                            <input type="text" class="">
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-xs-12 no-pad text-center">
                                            <label for="">Должность</label>
                                            <input type="text" class="">
                                        </div>
                                        <div class="col-xs-12 no-pad text-right">
                                            <button type="button" class="save_button">Добавить</button>
                                        </div>
                                        <div class="col-xs-12 no-pad  chron_form_area">
                                        </div>
                                        <div class="bt_group col-xs-12 no-pad text-right">
                                            <button type="reset" class="reset_button">Очистить</button>
                                            <button type="button" class="save_button">Подтвердить</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--innovation author-->
                <div class="tab-pane" id="innovcoauth">
                    <div class="chron-tab-top col-xs-12 no-pad">
                        <div class="sorting-but">
                            <img class="" src="/img/sortingicon.png">
                        </div>
                        <div class="chron_tab_top_right_content">
                            <div class="col-md-2 no-pad">
                                Сумма <br>
                                Количество 3
                            </div>
                            <ul class="no-pad list-unstyled col-md-10">
                                <li><img class="chicon" src="/social/img/icons/rew.png"> 63</li>
                                <li><img src="/social/img/icons/number-part.png"> 463 456 667</li>
                                <li><img class="chicon" src="/social/img/icons/thanks.png"> 463 456 667</li>
                                <li><img class="chicon" src="/social/img/icons/useless.png"> 463 456 667</li>
                                <li><img src="/social/img/icons/downl.png"> 463 456 667</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 no-pad chrblock">
                        <div class="col-md-6 no-pad rreg">
                            <div class="chr_img_wrap">
                                <div class="chrblock_num">3</div>
                                <img class="img-responsive block-big-img" src="/social/img/im.png">
                                <div class="chrblock_info">
                                    <div class="col-md-8  no-pad pad-right">
                                        <div class="rlight">
                                            <img class="chicon" src="/social/img/calw.png"> 28 августа 2016 в 22:45
                                            <img class="" src="/social/img/icons/numw.png"> 7 567
                                        </div>
                                        <div class="open-revision"><img class="" src="/social/img/icons/statw.png"> <span>Открытая Доработка</span> до 22:44 09 сентября 2016</div>
                                        <a href="#"><img class="" src="/social/img/icons/earthw.png"></a>  Общемировая
                                        <a href="#"><span class=" changes_icon"></span></a>  Изменения
                                    </div>
                                    <div class="col-md-4  no-pad">
                                        <ul class="list-unstyled">
                                            <li><img class="" src="/social/img/icons/set1w.png"> Здравоохранение</li>
                                            <li><img class="" src="/social/img/icons/set2w.png"> Все</li>
                                            <li><img class="" src="/social/img/icons/set3w.png"> Все</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 chr_block_txt">
                            <div class="col-md-3 no-pad">
                                <div class="img-wrap user_wrap_image">
                                    <img src="/social/img/fam.png">
                                    <div class="chron_user_wr_name">Рустем Аблаев</div>
                                </div>
                            </div>
                            <div class="col-md-9 title_innovcoauth">Мобильное приложение “ВОЛНА ЛЮБВИ” </div>
                            <div class="col-xs-12 rreg">
                                <div class="h4 rmed">Ваши Улучшения:</div>
                                <div class="text-center rreg sub_title">Перевод интерфейса приложения на английский язык</div>
                                The mobile app designed to clean energy-field of the earth. Removing blocks consciousness, creating a positive and synergistic mood of people for joint constructive work aimed at improving the quality of life of people and the planet's ecosystems.
                            </div>
                        </div>
                        <div class="col-xs-12 text-center"><a class="bl_more_link" href=""><span></span><span></span><span></span></a></div>
                        <div class="col-xs-12 no-pad chrblock_bottom">
                            <ul class="list-unstyled col-md-2 col-sm-12 col-xs-12 no-pad active_info ">
                                <li class="co-auth active">
                                    <a class="show_block"><img class="chicon" src="/social/img/icons/co-auth.png"> <span class="co-auth-span">3</span></a>
                                    <div class="add_form soc_authors_block">
                                        <form method="" action="">
                                            <div class="form_head col-xs-12 no-pad">
                                                <div class="col-xs-4 rmed"><img class="chicon" src="/social/img/icons/co-auth.png"> Соавторы</div>
                                                <div class="deleg_search col-xs-7">
                                                    <input type="search" class="form-control">
                                                    <button type="submit" class="btn deleg_search_btn"><span class="glyphicon glyphicon-search"></span></button>
                                                </div>
                                                <span class="close_form">×</span>
                                            </div>
                                            <div class="form_tabs col-xs-12 no-pad rmed">
                                                <ul class="nav nav-pills tab-cont_nav_inside">
                                                    <li class="active"><a href="#alternative" data-toggle="tab" aria-expanded="true">Альтернатива</a></li>
                                                    <li><a href="#changes" data-toggle="tab" aria-expanded="true">Изменения</a></li>
                                                    <li><a href="#adding" data-toggle="tab" aria-expanded="true">Дополнения</a></li>
                                                </ul>
                                                <div class="tab-content clearfix tab-cont-info">
                                                    <div class="tab-pane active" id="alternative">
                                                        <div class="col-xs-4 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="changes">
                                                        <div class="col-xs-4 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="adding">
                                                        <div class="col-xs-4 no-pad user_block">
                                                            <img class="us-photo" src="/social/img/user.png">
                                                            <div class="us-photo-name"><span class="">Тарас Лищенко</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="active"><img class="chicon" src="/social/img/icons/chat.png"> 127</li>
                                <li class="active"><img class="chicon" src="/social/img/icons/level.png"> 4</li>
                            </ul>
                            <ul class="no-pad list-unstyled col-md-8 col-sm-12 col-xs-12 chblock_bottom_ul">
                                <li><img class="chicon" src="/social/img/icons/rew.png"> 63</li>
                                <li><img src="/social/img/icons/number-part.png"> 463 456 667</li>
                                <li><img class="chicon" src="/social/img/icons/thanks.png"> 463 456 667</li>
                                <li><img class="chicon" src="/social/img/icons/useless.png"> 463 456 667</li>
                                <li><img src="/social/img/icons/downl.png"> 463 456 667</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--innovation coauthor-->
                <div class="tab-pane" id="infotab">
                    <div class="chron-tab-top col-xs-12 no-pad">
                        <div class="sorting-but">
                            <img class="" src="/img/sortingicon.png">
                        </div>
                        <div class="chron_tab_top_right_content">
                            <div class="col-md-2 no-pad">
                                Сумма <br>
                                Количество 3
                            </div>
                            <ul class="no-pad list-unstyled col-md-10">
                                <li><img class="chicon" src="/social/img/icons/rew.png"> 63</li>
                                <li><img class="chicon" src="/social/img/icons/thanks.png"> 463 456 667</li>
                                <li><img class="chicon" src="/social/img/icons/useless.png"> 463 456 667</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 no-pad chrblock">
                        <div class="col-md-6 no-pad rreg">
                            <div class="chr_img_wrap">
                                <div class="chrblock_num">3</div>
                                <img class="img-responsive block-big-img" src="/social/img/im.png">
                                <div class="chrblock_info">
                                    <div class="col-md-6  no-pad pad-right">
                                        <div class="rlight">
                                            <img class="chicon" src="/social/img/calw.png"> 28 августа 2016 в 22:45<br>
                                            <img class="" src="/social/img/icons/numw.png"> 7 567
                                        </div>
                                        <a href="#"><img class="" src="/social/img/icons/earthw.png"></a> Целевая
                                    </div>
                                    <div class="col-md-6  no-pad">
                                        <ul class="list-unstyled">
                                            <li><img class="" src="/social/img/icons/set1w.png"> Здравоохранение</li>
                                            <li><img class="" src="/social/img/icons/set2w.png"> Все</li>
                                            <li><img class="" src="/social/img/icons/set3w.png"> Все</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 rreg chr_block_txt">
                            <div class="h3">МЕТОДИКА иЗУЧЕНИЯ ИНОСТРАННОГО ЯЗЫКА</div>
                            Цель данной методики – научить человека взаимодействовать с другими людьми на изучаемом языке, что подразумевает все формы общения: речь, письмо (как чтение, так и навыки написания текстов), умение слушать и понимать сказанное собеседником. Этого проще всего достичь, обучая человека в естественных условиях - естественных, прежде всего, с точки зрения здравого смысла. Например, вопрос преподавателя «Что это?» с указанием на стул, может считаться естественным только в том случае, если преподаватель на самом деле не знает, что же это такое и т.д.
                            Современный коммуникативный метод представляет сочетание многих способов обучения иностранным языкам. На сегодняшний день это вершина эволюционной пирамиды различных образовательных методик.
                            Коммуникативный метод подходит большинству людей, позволяет быстрее и более осознанно выучить иностранный язык.
                        </div>
                        <div class="col-xs-12 text-center"><a class="bl_more_link" href=""><span></span><span></span><span></span></a></div>
                        <div class="col-xs-12 no-pad chrblock_bottom">
                            <ul class="no-pad list-unstyled chblock_bottom_ul chr_inform_ul text-center">
                                <li><img class="chicon" src="/social/img/icons/thanks.png"> 463 456 667</li>
                                <li><img class="chicon" src="/social/img/icons/useless.png"> 463 456 667</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--information-->
                <div class="tab-pane" id="votes">
                    <div class="chron-tab-top col-xs-12 no-pad votes_top">
                        <div class="sorting-but">
                            <img class="" src="/img/sortingicon.png">
                        </div>
                        <div class="chron_tab_top_right_content">
                            <div class="col-md-3 no-pad">
                                <br>
                                Количество 361
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-pad chrblock votes_block">
                        <div class="table-responsive chrblock_table">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th><img class="" src="/social/img/icons/mini-cal.png"> Дата</th>
                                    <th class="table_w20"><span class="table_chron_icons inauthmini"></span> Название</th>
                                    <th class="custfs"><span class="table_chron_icons inauthmini"></span> Авторы<br>Соавторы</th>
                                    <th class="custfs"><span class="table_chron_icons desmini"></span> Ваше<br>Решение</th>
                                    <th class="custfs"><img class="" src="/social/img/icons/number-part.png"> Принявших<br>Участие</th>
                                    <th class="custfs"><img class="chicon" src="/social/img/icons/thanks.png"> Поддержавших</th>
                                    <th><span class="table_chron_icons datahmini"></span> Дата</th>
                                    <th><span class="table_chron_icons statmini"></span> Статус</th>
                                </tr>
                                <tr>
                                    <td>17:35<br>23.05.2017</td>
                                    <td>Мобильное приложение “ВОЛНА ЛЮБВИ”</td>
                                    <td class="no-pad">
                                        <div class="dropdown dropdown_auth">
                                            <button class="drop-auth" type="button" data-toggle="dropdown">
                                                Рустем<br>Аблаев
                                                <div class="drop-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>Валентина<br>Торова</li>
                                                <li>Владимир<br>Панченко</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><img class="chicon" src="/social/img/icons/thanks.png"></td>
                                    <td>3 254</td>
                                    <td>325 (100%)</td>
                                    <td>17:35<br>23.05.2017</td>
                                    <td class="font25 red"><i class="fa fa-times" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>17:35<br>23.05.2017</td>
                                    <td>Мобильное приложение “ВОЛНА ЛЮБВИ”</td>
                                    <td class="no-pad">
                                        <div class="dropdown dropdown_auth">
                                            <button class="drop-auth" type="button" data-toggle="dropdown">
                                                Рустем<br>Аблаев
                                                <div class="drop-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>Валентина<br>Торова</li>
                                                <li>Владимир<br>Панченко</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><img class="chicon" src="/social/img/icons/useless.png"></td>
                                    <td>3 254</td>
                                    <td>325 (100%)</td>
                                    <td>17:35<br>23.05.2017</td>
                                    <td class="font25"><i class="fa fa-check" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>17:35<br>23.05.2017</td>
                                    <td>Мобильное приложение “ВОЛНА ЛЮБВИ”</td>
                                    <td class="no-pad">
                                        <div class="dropdown dropdown_auth">
                                            <button class="drop-auth" type="button" data-toggle="dropdown">
                                                Рустем<br>Аблаев
                                                <div class="drop-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>Валентина<br>Торова</li>
                                                <li>Владимир<br>Панченко</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><img class="chicon" src="/social/img/icons/thanks.png"></td>
                                    <td>3 254</td>
                                    <td>325 (100%)</td>
                                    <td>17:35<br>23.05.2017</td>
                                    <td class="font25"><i class="fa fa-refresh" aria-hidden="true"></i></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--votes-->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@stop