@extends('layouts.information')

@section('content')
        
            @include( $information . '.common.nav')

        <div class="col-md-12 col-sm-12 faq-top"> 
                    
                    <div class="const-txt">

                    &emsp;{{$page -> description}}

                        <div class="next-block create">

                            <a data-toggle="modal" data-target="#myModal" class="next create">{{Lang::get('app.create_question')}}</a>
                       
                        </div>
                    
                    </div>
        </div>

     <div class="col-md-12 col-sm-12 faq-accordion"> 

         <div class="panel-group" id="faq-accordion">
        
        @foreach( $page -> questions as $key => $question )

          <div class="panel panel-default">
            
            <div class="panel-heading">
              
              <h4 class="panel-title">
                
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-collapse{{$key}}">
                    <img class="act-quest-r" src="{{asset('img/active-quest.png')}}" /> {{$question -> question}}
                </a>

              </h4>

            </div>

            <div  id="faq-collapse{{$key}}" class="panel-collapse collapse">
              
              <div class="panel-body">
              
                <div class="wr-answer">               
                   
                  <div class="faq-authors owl-carousel">

                  @if( $key == 1)
                  <div class="owl-item" style="width: 176px;">

                            <div class="block-carousel">
                                    <img class="img focus-img" src="{{asset('img/faq/rustam.png')}}">

                                    <div class="name-auth-carousel">Рустем<br>Аблаев</div>
                            </div>
                  </div>

                  @else
                                      <div class="block-carousel">

                                        <img class="img focus-img" src="{{asset('img/faq/sergey.png')}}" />
                                      
                                        <div class="name-auth-carousel">{{Lang::get('pages.sergey')}}<br />{{Lang::get('pages.chernyshov')}}
                                         </div>
    
                                      </div>
                    @endif

                  </div>

                <div class="answ-but">
                        <a href="#" data-toggle="modal" data-target="#myModal2">
                                    <span>{{Lang::get('app.write')}}</span> <br />{{Lang::get('app.your')}}<br />
                                    {{Lang::get('app.answer')}}
                        </a>
                </div>

                 
                </div>

                <div class="purpose-top">
                        
                        <div class="left-bl col-md-6 ">
@if( $key == 1)

                            <div class="author-block">{{Lang::get('app.by')}} <span>Рустема Аблаева</span></div> 

@else

                            <div class="author-block">{{Lang::get('app.by')}} <span>{{Lang::get('app.sergey')}}</span></div> 

@endif
                            <span class="date"><img src="{{ asset( 'img/calendar.png' )}}"> {{\Carbon\Carbon::createFromFormat($timeformat , $question -> answer -> created_at )}}</span>

                            <span class="views"><img src="{{ asset( 'img/view.png' ) }}"> {{$question -> answer -> views}}</span>

                        </div>

                        <div class="right-bl col-md-6">{{Lang::get('app.view')}} <a href="#">{{Lang::get('app.original')}}</a> 

                            <div class="fl-right">
                            
                                    <span class="pdf-but"><a href=""><img src="{{asset( 'img/pdf.png' ) }}"> {{Lang::get('app.pdf')}}</a></span> 

                                    <span class="print-but"><a href=""><img src="{{ asset( 'img/print.png' )}}"> {{Lang::get('app.print')}}</a></span>
                            </div>

                        </div>
    
                </div>


            
            <div class="row">
                <table class="full-equal purpose">
                    <tbody>
                        <tr>
                            <td class="equal-blocks">
                                  

                                <div>{!! htmlspecialchars_decode( $question -> answer -> answer_left ) !!}</div>                      
                        
                        @if($question -> answer -> next == 1)
                            <div class="next-block">

                                <a href="#" onclick="scroll_to('next-answer-block-{{$key}}')" class="next">{{Lang::get('app.next')}}</a>

                            </div>
                        @endif
                            
                            </td>
                            
                            <td class="equal-blocks" id="next-answer-block-{{$key}}">     
                                
                                <div>{!! htmlspecialchars_decode($question -> answer -> answer_right ) !!}</div>
                            
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
              
              </div>
            </div>
          </div> 

        @endforeach   
    
    </div>

</div>
            @include( $information . '.partials.shared' )

            @include( $information . '.modals.create_question' )

            @include( $information . '.modals.create_answer' )

@stop
