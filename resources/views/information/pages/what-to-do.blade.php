@extends('layouts.information')

@section('content')
        
            @include( $information . '.common.nav')

            @include( $information . '.partials.breadcrumb' )

            <table class="full-equal what-do-full">
                
                <tbody>
                    
                    <tr>
                        
                        <td class=" equal-blocks top" >
                    
                            <ul>
                            
                            @foreach( $page -> left_punkts as $key =>  $punkt)
                                <li><span>{!! htmlspecialchars_decode( $punkt -> text) !!}</span></li>

                                @if( $key === 2 )
                                        <div class="inside-block">{!! htmlspecialchars_decode( $page -> left_description) !!}</div>
                                @endif
                            @endforeach
                        
                            </ul> 

                            <div class="next-block"><a href="#" onclick="scroll_to('scroll-to-do')" class="next">{{Lang::get('app.next')}}</a></div>

                        </td>

                <td class="equal-blocks top what-do" id="scroll-to-do">

                    <div class="inside-block right">{!! htmlspecialchars_decode( $page -> right_description) !!}</div>
     
                <ul>
                        @foreach( $page -> right_punkts as $key =>  $punkt) 
                                <li><span></span>{!! htmlspecialchars_decode( $punkt -> text) !!}</li>
                        @endforeach
         
                </ul>

                </td>

                </tr>
        </tbody>
    </table>


    		@include( $information . '.partials.description')


            @include( $information . '.partials.shared' )

@stop
