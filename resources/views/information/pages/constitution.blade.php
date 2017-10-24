@extends('layouts.information')

@section('content')
        
            @include( $information . '.common.nav')

            @include( $information . '.partials.breadcrumb' )

            <div class="col-md-12 col-sm-12"> 
                    
                    <div class="const-txt">{!! htmlspecialchars_decode($page -> topdescription)!!}</div>
            
            </div>

            <table class="full-equal constitution">
                
                <tbody>

                @foreach( $page -> sections as $key =>  $section )

                    <tr>
                                
                                <td class=" equal-blocks">

                                <div class="h3">{{Lang::get('app.section')}} {{ ( $key + 1 )}}<span>{{$section -> title}}</span></div>

                            <ul>

                                @for( $i = 0; $i < intval( count( $section -> subsections ) / 2 ) ; $i++)

                                <li>
                                    <span>{{Lang::get('app.article')}} {{$i + 1}}:</span>&emsp;{{$section -> subsections[$i] -> text}}
                                </li>

                                @endfor

                            </ul>

                                </td>
                                
                                <td class=" equal-blocks">
                                    
                            <ul>

                    @for( $i = intval( count( $section -> subsections ) / 2 ) ; $i < intval( count( $section -> subsections ) ) ; $i++)

                                <li>
                                    <span>{{Lang::get('app.article')}} {{$i + 1}}:</span>&emsp;{{$section -> subsections[$i] -> text}}
                                </li>

                    @endfor

                            </ul>

                                </td>
                    
                    </tr>

                @endforeach
        
        </tbody>
    
    </table>




    		@include( $information . '.partials.description')


            @include( $information . '.partials.shared' )

@stop
