   <div class="block left">
      <div class="user-name">
          <a href="javascript:void(0)">
            <img class="img-responsive" src="{{$user -> picture -> thumb() }}"/>
          </a>
          <a href="javascript:void(0)">{{$user -> firstname}} {{$user -> lastname}}</a>
      </div>
      <div class="user-ballance block-inf">
            <img class="iconz" src="{{asset( 'img/map-icon.png' )}}"/>
            <a href="{{asset( $account . '/balance')}}"> {{Lang::get('account.balance')}}</a>
      </div>
      <div class="block-inf">
         <div class="h5">{{Lang::get('account.settings')}}</div>
         <div>
             <img class="iconz" src="{{asset( 'img/icons/edit.png' )}}"/>
             <a href="{{asset( $account . '/edit')}}">{{Lang::get('account.edit')}}</a>
         </div>
         <div>
             <img class="iconz" src="{{asset( 'img/icons/set.png' )}}"/>
             <a href="{{asset('feed/edit')}}">{{Lang::get('account.edit_feed')}}</a>
         </div>
      </div>
      <div class="block-inf">
         <div class="h5">{{Lang::get('account.create_publication')}}</div>
         <div>
             <img class="iconz" src="{{asset( 'img/icons/info.png' )}}"/>
             <a href="{{asset( $account . '/create/information')}}">{{Lang::get('account.create_information')}}</a>
         </div>
         <div>
             <img class="iconz" src="{{asset( 'img/icons/innov.png' )}}"/>
             <a href="{{asset( $account . '/create/innovation')}}">{{Lang::get('account.create_innovation')}}</a>
         </div>
      </div>
      <div class="block-inf">
         <div class="h5">{{Lang::get('account.events')}}</div>
         <div>
             <img class="iconz" src="{{asset( 'img/icons/cal.png' )}}"/>
             <a href="{{asset('events/list')}}">{{Lang::get('account.events_list')}}</a>
         </div>
         <div>
             <img class="iconz" src="{{asset( 'img/icons/crcal.png' )}}"/>
             <a href="{{asset('events/create')}}">{{Lang::get('account.event_create')}}</a>
         </div>
      </div>
   </div>