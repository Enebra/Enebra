<header>
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
         <div class="navbar-header">
            <a class="navbar-brand" href="/"><img src="{{asset('img/logo.png')}}" /></a>
            <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left">
            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
         </div>
         <div class="side-collapse in">
            <div class="navbar-collapse">
               <div class="col-md-3 hidden-sm hidden-xs">
                  <form method="" action="" class="">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{Lang::get('account.search')}}"/>
                     </div>
                     <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
                  </form>
               </div>
               <ul class="nav navbar-nav center  hidden-sm hidden-xs">
                  <li class="home"><a href="#"><span></span></a></li>
                  <li><img class="img-responsive user" src="{{asset( $user -> picture -> thumb())}}"/> {{$user -> firstname}}</li>
                  <li>
                     <a href="{{asset('/account/feed')}}">{{Lang::get('account.home')}}
                     @if($user -> new_publications -> count() !== 0)<span class="main_num">{{$user -> new_publications -> count()}}</span>@endif</a>
                  </li>
               </ul>
               <ul class="nav navbar-nav  hidden-lg hidden-md">
                  <li class="user-name"><img class="img-responsive" src="{{asset( $user -> picture -> thumb())}}"/> {{$user -> firstname}} {{$user -> lastname}}</li>
                  <li><a href="{{asset('account/feed')}}">{{Lang::get('account.home')}} <span>7</span></a></li>
                  <li>
                      @if( strtotime( \Carbon\Carbon::parse( $user -> active_to) -> addMonth() ->toDateTimeString()) > time() )
                        <img class="img-responsive" src="{{ asset('img/icons/active-status.png')}}"/> {{Lang::get('account.active_by')}}
                        {{substr( \Carbon\Carbon::parse( $user -> active_to) -> addMonth()->toDateTimeString(), 0, 10)}}
                      @else
                        <img class="img-responsive" src="{{ asset('img/icons/inactive-status.png')}}"/> {{Lang::get('account.inactive')}}
                      @endif

                  </li>
                  <li><img class="ballance" src="{{asset( 'img/icons/coins.png' )}}"/> 3 476, 487 463 77</li>
                  <li><a href="{{asset( $account . '/edit')}}"><img src="{{asset('img/icons/edit.png')}}"/> {{Lang::get('account.edit')}}</a></li>
                  <li><a href="{{asset( $account . '/feed/edit')}}"><img src="{{asset('img/icons/set.png')}}"/> {{Lang::get('account.edit_feed')}}</a></li>
                  <li class="h5">{{Lang::get('account.create_publication')}}</li>
                  <li><a href="{{asset($account . '/publications/create/information')}}"><img src="{{asset( 'img/icons/info.png')}}"/> {{Lang::get('account.create_information')}}</a></li>
                  <li><a href="{{asset($account . '/publications/create/innovation')}}"><img src="{{asset( 'img/icons/innov.png')}}"/> {{Lang::get('account.create_innovation')}}</a></li>
                  <li><a href="{{asset($account . '/events')}}"><img src="{{asset( 'img/icons/cal.png')}}"/> {{Lang::get('account.events_list')}}</a></li>
                  <li><a href="{{asset($account . '/events/create')}}"><img src="{{asset( 'img/icons/crcal.png')}}"/> {{Lang::get('account.event_create')}}</a></li>
               </ul>
               <div class="col-xs-12 hidden-lg hidden-md">
                  <form method="" action="" class="">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{Lang::get('account.search')}}"/>
                     </div>
                     <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
                  </form>
               </div>
               <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
                  <li>
                     <a href="{{asset($account . '/im')}}" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.messages')}}">
                        <div class="img-wrap">
                           <img class="img-responsive" src="{{asset( 'img/sms.png')}}"/>
                           <div class="num">3</div>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="{{asset($account . '/notifications')}}" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.notice')}}">
                        <div class="img-wrap">
                           <img class="img-responsive" src="{{asset( 'img/notif.png')}}"/>
                           <div class="num">2</div>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="{{asset($account . '/polls')}}" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.polls')}}">
                        <div class="img-wrap">
                           <img class="img-responsive" src="{{asset( 'img/votes.png')}}"/>
                           <div class="num">1</div>
                        </div>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <ul class="nav navbar-nav navbar-right hidden-lg hidden-md">
            <li>
               <a href="{{asset($account . '/im')}}" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.messages')}}">
                  <div class="img-wrap">
                     <img class="img-responsive" src="{{asset( 'img/sms.png')}}"/>
                     <div class="num">3</div>
                  </div>
               </a>
            </li>
            <li>
               <a href="{{asset($account . '/notifications')}}" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.notice')}}">
                  <div class="img-wrap">
                     <img class="img-responsive" src="{{asset( 'img/notif.png')}}"/>
                     <div class="num">2</div>
                  </div>
               </a>
            </li>
            <li>
               <a href="{{asset($account . '/polls')}}" data-toggle="tooltip" data-placement="bottom"  title="{{Lang::get('account.polls')}}">
                  <div class="img-wrap">
                     <img class="img-responsive" src="{{asset( 'img/votes.png')}}"/>
                     <div class="num">1</div>
                  </div>
               </a>
            </li>
         </ul>
      </div>
   </nav>
</header>