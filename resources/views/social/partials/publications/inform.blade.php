    @foreach( $user -> new_publications( $type -> id ) -> get() as $publication )
         <div class="block">
            <div class="col-lg-8 col-md-12 no-pad left-block">
               <div class="worldwide"><a href="#" data-toggle="tooltip" data-placement="bottom"  title="География"><img class="img-responsive" src="/social/img/icons/earth.png"/></a> Общемировая</div>
               <img class="us-photo" src="{{ $publication -> publication -> user -> picture -> thumb() }}"/>
               <div class="sub-info">
                  <div class="name">{{ $publication -> publication -> user -> firstname }} {{ $publication -> publication -> user -> lastname}}</div>
                  <ul class="specialization">
                     <li>Веб Дизайн;</li>
                     <li>Архитектура</li>
                  </ul>
                  <div class="date"><img class="img-responsive" src="/social/img/icons/mini-cal.png"/> 28 августа 2016 в 22:45  <span><img class="img-responsive" src="/social/img/icons/number-part.png"/> 7 567 453 567</span></div>
                  <div class="open-revision"><img class="img-responsive" src="/social/img/icons/status.png"/> <span>Открытая Доработка</span> до 22:44 09 сентября 2016</div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 right-block">
               <ul>
                  <li><img class="img-responsive" src="/social/img/icons/level.png"/> 4</li>
                  <li><img class="img-responsive" src="/social/img/icons/git.png"/> GitHub</li>
                  <li><img class="img-responsive" src="/social/img/icons/downl.png"/> 2 342 456 777</li>
               </ul>
               <ul> 
                  <li><img class="img-responsive" src="/social/img/icons/set1.png"/> Все</li>
                  <li><img class="img-responsive" src="/social/img/icons/set2.png"/> Все</li>
                  <li><img class="img-responsive" src="/social/img/icons/set3.png"/> Все</li>
               </ul>
            </div>
            <div class="col-xs-12 att-title">{{$publication -> publication -> title}}</div>
            <div class="clearfix"></div>
            <div class="row">
               <div class="slide">
                  <div class="col-lg-7 col-md-7 col-sm-7">
                     <img class="img-responsive" src="{{$publication -> publication -> picture -> publication()}}"/>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-5">{{$publication -> publication -> description}}</div>
               </div>
            </div>
            <div class="col-xs-12 block-bottom-full">
               <div class="row">
                  <div class="block-bottom">
                     <ul>
                        <li  class="co-auth"><img class="img-responsive" src="/social/img/icons/co-auth.png"/> <span>1</span></li>
                        <li><img class="img-responsive" src="/social/img/icons/chat.png"/> 127</li>
                        <li><img class="img-responsive" src="/social/img/icons/rew.png"/> 7</li>
                     </ul>
                     <ul>
                        <li><img class="img-responsive" src="/social/img/icons/views.png"/> 126 854 756</li>
                        <li><img class="img-responsive" src="/social/img/icons/thanks.png"/> 12 874 425</li>
                        <li><img class="img-responsive" src="/social/img/icons/useless.png"/> 0</li>
                     </ul>
                     <div class="bottom-buttons">
                        <div class="buttons-block">  
                           <a href="">Некомпетентен</a>
                           <a href="">Сказать "Бесполезно"</a>
                        </div>
                        <div class="buttons-block">  
                           <a href="">Сказать "Благодарю"</a>
                           <a href="">Улучшить</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
      @endforeach