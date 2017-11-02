<div class="col-md-3 hidden-sm hidden-xs">
      @include( $social . '.partials.left_info')
</div>
<div class="col-md-6 middle">
   <ul  class="nav nav-pills">
   @foreach( $types as $key => $type)
      <li @if($key === 0 )class="active" @endif >
            <a  href="#{{$type -> slug}}" data-toggle="tab">{{Lang::get('account.publications.' . $type -> slug)}} 
            <span>{{$user -> new_publications( $type -> id ) -> count()}}</span></a>
      </li>
   @endforeach
       <li><a href="#votes" data-toggle="tab">{{Lang::get('account.votes')}} <span>5</span></a></li>
       <li><a href="#tenders" data-toggle="tab">{{Lang::get('account.tenders')}} <span>5</span></a></li>
   </ul>
   <div class="tab-content clearfix">
   @foreach( $types as $key => $type)
      <div class="tab-pane @if($key === 0 ) active  @endif" id="{{$type -> slug}}">
               @include( $social . '.partials.publications.' . $type -> slug )
      </div>
   @endforeach
       <div class="tab-pane" id="votes">
           @include( $social . '.partials.votes')
       </div>
       <div class="tab-pane" id="tenders">
           @include( $social . '.partials.tenders')
       </div>
   </div>
</div>
<div class="col-md-3 hidden-sm hidden-xs">
@include($social . '.partials.status')
@include($social . '.partials.followers')
</div>