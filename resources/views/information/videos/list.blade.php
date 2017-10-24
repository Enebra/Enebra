@extends('layouts.information')

@section('content')
        
            @include( @information . '.common.nav') 


    <div class="span-medit video-top-txt">{!! htmlspecialchars_decode ( $video_group -> description ) !!}</div>

    @if( $video_group -> subvideogroups -> count() > 0)

            @foreach( $video_group -> subvideogroups as $separator => $group)

                    <div class="vid-full-block top">

                    
                    @if( $separator % 2  !== 0)<div class="bottom-shadow-block infov">@endif

                        <h2 class="h2-inf container">{{$group -> title}}</h2>

                    
                        @foreach( $group -> videos -> chunk(2) as $block )

                            @include( $information . '.videos.videos' )

                        @endforeach


     
                    @if( $separator % 2  !== 0) </div> @endif 

                    </div>

            @endforeach

    @else
    
        <div class="vid-full-block top">

                @foreach( $video_group -> videos -> chunk(2) as $block )

                            @include( $information . '.videos.videos' )

                @endforeach  
     
        </div> 

    @endif
      

      

@stop
