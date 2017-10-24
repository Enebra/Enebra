   <div class="block subscribers">
      <ul  class="nav nav-pills">
         <li class="active"><a  href="#" onclick="return false;" >{{Lang::get('account.my_followers')}}</a></li>
         <li><a href="#all" onclick=" return false;" >{{Lang::get('account.all')}}</a></li>
      </ul>
      <div class="tab-content clearfix">
         <div class="tab-pane active" id="ownsubscr">
            <ul>
            @foreach( $user -> module_followers() as $follower )
               <li>
                  <img class="us-photo" src="{{$follower -> follower -> picture -> thumb()}}"/>
                  <div class="sub-info" id="follower-{{$follower -> follower -> id}}">
                                    @if( $follower -> follower -> locale_id === $user -> locale_id)
                  {{ $follower -> follower -> firstname }} {{ $follower -> follower -> lastname}}
               @else
                  {{ $follower -> follower -> firstname_en }} {{ $follower -> follower -> user -> lastname_en}}
               @endif
               @if( $follower -> follower -> specializations -> count() > 0 )
                     <ul class="specialization">
                        @foreach(  $follower -> follower -> specializations as $specialization )
                           <li>{{Lang::get('specializations.' . $specialization -> id )}};</li>
                        @endforeach
                     </ul>
               @endif
                  @if( $follower -> follower -> is_follower( $user -> id) === 1) 
                  <a href="#" onclick="return user.unfollow( '{{$follower -> follower -> id}}', this)" class="unsubscr-button">{{Lang::get('account.unsubscribe')}}</a>
                     <a href="#" class="subscr-button hidden" onclick=" return user.follow( '{{$follower -> follower -> id}}', this)">{{Lang::get('account.subscribe')}}</a>
                  @else           
                     <a href="#" class="unsubscr-button hidden" onclick="return user.unfollow( '{{$follower -> follower -> id}}', this)">{{Lang::get('account.unsubscribe')}}</a>
                     <a href="#" class="subscr-button" onclick="return user.follow( '{{$follower -> follower -> id}}', this)">{{Lang::get('account.subscribe')}}</a>
                  @endif
                  </div>
               </li>
            @endforeach
            </ul>
         </div>
      </div>
   </div>