<div id="myModal3" class="modal fade que-answ terms" role="dialog">
  
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">

          <h4 class="modal-title">{!! htmlspecialchars_decode ( $locale -> term -> title ) !!}</h4>
      
      </div>
      
         <div class="modal-body">
           
            <div class="col-md-12 col-sm-12"> 
           
                <div class="purpose-top">

                    <div class="left-bl col-md-6 col-sm-12">

                        <div class="author-block">{{Lang::get('app.by')}} <span>{{Lang::get('app.sergey')}}</span></div> 
                        <span class="date"><img src="{{asset( 'img/calendar.png' )}}">{{$locale -> term -> created_at}}</span>
                        <span class="views"><img src="{{asset( 'img/view.png')}}"> {{$locale -> term -> summ_views()}}</span>

                    </div>

                    <div class="right-bl col-md-6 col-sm-12"> 

                        <div class="fl-right">

                        <span class="pdf-but"><a href=""><img src="{{asset( 'img/pdf.png')}}"> {{Lang::get('app.pdf')}}</a></span> 
                            
                        <span class="print-but"><a href="#" onclick="print()" ><img src="{{asset( 'img/print.png')}}"> {{Lang::get('app.print')}}</a></span>
                        
                        </div>

                    </div>
            </div>  
            </div>
    <table class="full-equal">
        <tbody>
            <tr>
                <td class="equal-blocks">
                    
                    {!! htmlspecialchars_decode ( $locale -> term -> left_description ) !!}   
              
                <div class="next-block"><a class="next" href="#" onclick="scroll_to_top()">{{Lang::get('app.next')}}</a></div>
                </td>    
                <td class="equal-blocks">
                    
                    {!! htmlspecialchars_decode ( $locale -> term -> right_description ) !!}
                
                </td>
            </tr>    
        </tbody>
    </table>
   <div class="col-md-12 col-sm-12"> 
    <div class="purpose-txt">{!! htmlspecialchars_decode ( $locale -> term -> bottom_description ) !!}</div>
   </div> 
    
   <button type="button" class="button span-med" data-dismiss="modal">{{Lang::get('app.close')}}</button> 
   
 
     <div class="clearfix"></div>  

 </div>


     
  </div>
</div>