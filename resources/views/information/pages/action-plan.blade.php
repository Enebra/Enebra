@extends('layouts.information')

@section('content')
        
            @include( $information . '.common.nav')

            @include( $information . '.partials.breadcrumb' )

            <div class="col-md-12 col-sm-12 actionpl"> 
                <div class="const-txt">
                        <div class="h2">{!! htmlspecialchars_decode( $page -> topdescription ) !!}</div>
                </div>
            </div>

            <table class="full-equal constitution action">
                
                <tbody>
                    
                    @foreach( $page -> phases -> chunk( 2 ) as $ph => $phase)
                        
                        <tr>

                        @foreach( $phase as $key => $element)

                            <td class="equal-blocks bl-{{$key}}" id="plan-scroll-{{$key}}">

                            <div class="h3">{{$element  -> title}}</div>

                            <div class="bord-hidden"> 
                                
                                <div class="border-left">   

                                        @foreach( App\Models\Actionsection::all() as $k => $section)

                                            <div class="acc-full">
                                            
                                                <div class="accord-block inf-section section-background-{{$section -> id}}">
                                                
                                                    <h4>{{Lang::get('pages.sections.' . $section -> id )}} </h4>
                                                    
                                                    <div class="panel-group" id="accordion{{($key + 1) + ( $k + 1) }}">

                                            @foreach( $element -> sectionpuncts( $section -> id ) as $p => $punkt )
                                               
                                        <div class="panel panel-default @if($punkt -> description == null) empty @endif">
                                                    
                                                    <div class="panel-heading">
                                                            
                                                            <h4 class="panel-title">
                                                                
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionaccordion{{($key + 1) + ( $k + 1)}}" href="#collapse{{ $punkt -> id}}">
                                                                 {{$punkt -> title}}    
                                                                </a>
                                                            
                                                            </h4>
                                                    
                                                    </div>

                                            @if($punkt -> description != null)
                                                    
                                            <div id="collapse{{$punkt -> id}}" class="panel-collapse collapse in">
                                                        
                                                <div class="panel-body">{!! htmlspecialchars_decode( $punkt -> description ) !!}</div>

                                            </div>

                                            @else

                                            <div id="collapse{{$punkt -> id}}" class="panel-collapse collapse">
                                                        
                                                <div class="panel-body">{!! htmlspecialchars_decode( $punkt -> description ) !!}</div>

                                            </div>
                                    
                                            @endif

                                        </div>

                                            @endforeach

                                                    </div>

                                                </div>  
                                            
                                            </div>

                                        @endforeach         
                                        
                                </div>    

                            </div> 

                    
                            
                    <div class="next-block">
    <a href="#"onclick="scroll_to('plan-scroll-{{$key + 1}}')" class="next @if( $key % 2 != 0) sec @endif">{{Lang::get('app.next')}}</a>
                    </div>

                            </td>

                        @endforeach

                        </tr>

                    @endforeach
               
                </tbody>
            
            </table>

            @include( $information . '.partials.shared' )

@stop
