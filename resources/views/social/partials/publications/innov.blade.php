    @foreach( $user -> new_publications( $type -> id ) -> get() as $publication )
         <div class="block">
            <div class="col-lg-8 col-md-12 no-pad left-block">
               <div class="worldwide" >
               		<a href="#" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.geography')}}">
               				<img class="img-responsive" src="{{asset('img/icons/earth.png')}}"/>
               		</a>
                     @if( $publication -> publication -> country === null ) 
                     {{Lang::get('account.the_wideworld')}}
                     @else
                        {{Lang::get('countries.' . $publication -> publication -> country -> id ) }}
                     @endif
                     </div>
               <img class="us-photo" src="{{ $publication -> publication -> user -> picture -> thumb() }}"/>
               <div class="sub-info">
                  <div class="name">
               @if( $publication -> publication -> user -> locale_id === $user -> locale_id)
                  {{ $publication -> publication -> user -> firstname }} {{ $publication -> publication -> user -> lastname}}
               @else
                  {{ $publication -> publication -> user -> firstname_en }} {{ $publication -> publication -> user -> lastname_en}}
               @endif
                  </div>
                  <ul class="specialization">
                        @foreach( $publication -> publication -> user -> specializations as $specialization )
                           <li>{{Lang::get('specializations.' . $specialization -> id )}};</li>
                        @endforeach
                  </ul>
                  <div class="date">
                  	<img class="img-responsive" src="{{asset('img/icons/mini-cal.png')}}" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.publication_date')}}"/> {{$publication -> publication -> created_at}}
                  	 <span>  <img class="img-responsive" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.participants')}}" src="{{asset('img/icons/number-part.png')}}"/> {{ $publication -> publication -> members -> count()}}</span>
                  </div>
                  <div class="open-revision" >
                  	<img class="img-responsive" src="{{asset('img/icons/status.png')}}" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.status')}}"/> 
                        @if( $publication -> publication -> open_to === null )
                           <span>{{Lang::get('account.product_finished')}}</span>
                        @else     
                           <span>{{Lang::get('account.open_to')}}</span>{{$publication -> publication -> open_to}}
                        @endif
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 right-block">
               <ul>
                  <li><img class="img-responsive" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.readiness_levels')}}" src="{{asset('img/icons/level.png')}}"/> {{$publication -> publication -> level}}</li>
                  <li><img class="img-responsive" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.github')}}" src="{{asset('img/icons/git.png')}}"/> <a href="{{$publication -> publication -> link}}">{{Lang::get('account.the_source')}}</a></li>
                  <li><img class="img-responsive" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.get_downloads')}}" src="{{asset('img/icons/downl.png')}}"/> {{ $publication -> publication -> downloads }}</li>
               </ul>
               <ul> 
                  <li>
                     <img class="img-responsive" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.section')}}" src="{{asset('img/icons/set1.png')}}"/> @if($publication -> publication -> specialization_id !== null) 
                     {{$publication -> publication -> specialization -> subsector -> sector -> title}}
                      @else {{lang::get('account.all')}} @endif
                  </li>
                  <li>
                  <img class="img-responsive" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.subsection')}}" src="{{asset('img/icons/set2.png')}}"/> @if($publication -> publication -> specialization_id !== null) 
                                           {{$publication -> publication -> specialization -> subsector -> title}}
                                           @else {{lang::get('account.all')}} @endif
                  </li>
                  <li>
                  <img class="img-responsive" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.specialization')}}" src="{{asset('img/icons/set3.png')}}"/> @if($publication -> publication -> specialization_id !== null)
                                                      {{$publication -> publication -> specialization -> title}}
                                                      @else {{lang::get('account.all')}} @endif
                  </li>
               </ul>
            </div>
            <div class="col-xs-12 att-title">{{$publication -> publication -> title}}</div>
            <div class="clearfix"></div>
            <div class="row block_txt">
               <div class="slide">
                  <div class="col-lg-7 col-md-7 col-sm-7">
                     <img class="img-responsive" src="{{$publication -> publication -> picture -> publication()}}"/>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-5">{{$publication -> publication -> description}}</div>
               </div>
               <div class="col-xs-12 text-center"><a class="bl_more_link" href=""><span></span><span></span><span></span></a></div>
            </div>
            <div class="col-xs-12 block-bottom-full">
               <div class="row">
                  <div class="block-bottom">
                  @if($publication -> publication -> user_id !== $user -> id )


                        <ul class="active_info">
                           <li class="co-auth">
                              <img class="img-responsive" src="{{asset('social/img/icons/co-auth.png')}}">
                              <span class="co-auth-span">0</span>
                           </li>
                           <li class="active">
                              <img class="img-responsive" src="{{asset('social/img/icons/chat.png')}}"> 127</li>
                        </ul>
                        <a class="block_bottom_btn rmed" href="/social/better-innovation.php">Улучшить</a>
                  @endif
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
      @endforeach