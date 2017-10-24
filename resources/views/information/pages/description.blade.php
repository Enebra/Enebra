@extends('layouts.information')

@section('content')
        
            @include( $information . '.common.nav')

            @include( $information . '.partials.breadcrumb' )


        <div class="col-md-12 col-sm-12"> 
                    
                    <div class="const-txt txt-descr">
                        
                        <div class="col-md-6 col-sm-12 txt-auth">

                            {!! htmlspecialchars_decode( $page -> topdescription ) !!}
                    
                        </div>      
                        
                        <div class="col-md-6 col-sm-12 photo-foster">

                                <img class="img-responsive" src="{{ asset( 'img/' . $page -> picture -> name) }}">

                        </div>   
                        
                        <div class="clearfix"></div>
                    
                    </div>
      
        </div>

        <table class="full-equal constitution descript">
            
            <tbody>

            @foreach( $page -> blocks -> chunk( 2 ) as $key => $block)
                            
               <tr>

                @foreach( $block as $k => $element)
                
                @if( $k %2 == 0)
                    <td class=" equal-blocks" id="block-{{$k}}"> 

                        {!! htmlspecialchars_decode( $element -> text ) !!}

                        <div class="next-block">

                            <a href="#" onclick="scroll_to('block-{{$k}}')" class="next">{{Lang::get('app.next')}}</a>

                        </div>
                
                    </td> 
                @else
                    
                    <td class=" equal-blocks" id="block-{{$k}}">


                        {!! htmlspecialchars_decode( $element -> text ) !!}

                    @if( ( $key + 1 )  != $page -> blocks -> chunk( 2 ) -> count() )

                        <div class="next-block">

                                <a href="#" onclick="scroll_to('block-{{$k + 1}}')" class="next sec">{{Lang::get('app.next')}}</a>

                        </div>

                    @endif
                
                    </td>

                @endif

                @endforeach
              
              </tr>

              @if( $key === 1 )
              
              <tr>
                    
                    <td colspan="2" class="equal-blocks full-w">{{$page -> subtitle}}</td>
                
              </tr>

              @endif

            @endforeach


            </tbody>
    
        </table>



    		@include( $information . '.partials.description')


            @include( $information . '.partials.shared' )

@stop
