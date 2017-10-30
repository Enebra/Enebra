   <div class="block right">
      <div class="block-inf">
         <div class="h5">{{Lang::get('account.my_status')}}</div>
         <div>
         @if( strtotime( \Carbon\Carbon::parse( $user -> active_to) -> addMonth() ->toDateTimeString()) > time() )
         <img class="iconz" src="{{ asset('img/icons/active-status.png')}}"/> {{Lang::get('account.active_by')}} {{
         substr( \Carbon\Carbon::parse( $user -> active_to) -> addMonth()->toDateTimeString(), 0, 10)}} 
         @else 
         <img class="iconz" src="{{ asset('img/icons/inactive-status.png')}}"/>
         {{Lang::get('account.inactive')}}
         @endif
         </div>
      </div>
      <div class="block-inf">
         <div class="h5">{{Lang::get('account.my_wallet')}}</div>
         <div style="color: red"><img class="iconz" src="{{ asset('img/icons/coins.png')}}"/> 3 476, 487 463 77</div>
      </div>
      <div class="block-inf">
         <div class="h5">{{Lang::get('account.my_rating')}}</div>
         <table>
            <tr>
               <td></td>
                  @foreach( $types as $key => $type)
                  <td>{{Lang::get('account.publications.' . $type -> slug)}} </td>
                  @endforeach
            </tr>
            <tr>
               <td>{{Lang::get('account.count')}}</td>
                  @foreach( $types as $key => $type)
                  <td>{{$user -> publications( $type -> id ) -> count()}}</td>
                  @endforeach
            </tr>
            <tr>
               <td>{{Lang::get('account.scores')}}</td>
                  @foreach( $types as $key => $type)
                  <td>{{$user -> publications_scores( $type -> id )}}</td>
                  @endforeach
            </tr>
         </table>
      </div>
      <div class="block-inf">
         <div class="h5">{{Lang::get('account.my_server')}}</div>
         <div>
            @if( $user -> server )
               <img class="img-responsive" src="{{ asset( 'img/icons/serv.png' )}}"/>
               @if($user -> server -> active === 1)
               {{Lang::get('account.active_ip')}} 
               @else 
               {{Lang::get('account.no_active_ip')}} 
               @endif {{$user -> server -> ip}}
            @else
            {{Lang::get('account.no_server')}}
            @endif
         </div>
      </div>
   </div>