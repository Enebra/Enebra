        <div class="col-md-12 col-sm-12"> 
    					
    			<div class="purpose-top">
        				
        				<div class="left-bl col-md-6 ">

        					<div class="author-block">{{Lang::get('app.by')}} <span>{{Lang::get('app.sergey')}}</span></div> 

        					<span class="date"><img src="{{ asset( 'img/calendar.png' )}}"> {{\Carbon\Carbon::createFromFormat($timeformat , $page -> created_at )}}</span>

        					<span class="views"><img src="{{ asset( 'img/view.png' ) }}"> {{$page -> summ_views( $page -> slug )}}</span>

        				</div>

        				<div class="right-bl col-md-6">

                        @if( $page -> original === 0 )
                                {{Lang::get('app.view')}} <a href="{{ asset('/information/' . $page -> slug . '/original')}}">{{Lang::get('app.original')}}</a> 
                        @endif

        					<div class="fl-right">
        					
        							<span class="pdf-but">

                                            <a href="{{ asset('/information/' . $page -> slug . '/pdf')}}"><img src="{{asset( 'img/pdf.png' ) }}"> {{Lang::get('app.pdf')}}</a>

                                    </span> 

        							<span class="print-but"><a href="#" onclick="print()"><img src="{{ asset( 'img/print.png' )}}"> {{Lang::get('app.print')}}</a></span>
        					</div>

        				</div>
    
    			</div>

    		<div class="clearfix"></div>

   		</div>