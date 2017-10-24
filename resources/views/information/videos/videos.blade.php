@foreach( $block as $key => $element )

                            @if( $key % 2  == 0)

                                <div class="vid-block">
            
                                    <div class="col-sm-5 col-xs-12 custom-float padding-left">

                                        <h1 class="into-h1 videos-h1">

                                            <span class="big">{{$element -> title}}</span>

                                            <span class="zagolovok">{{$element -> title}}</span>

                                        </h1>

                                        <h3>{{$element -> short_story}}</h3>

                                        <p class="span-med hidden-xs font-16 ">{{ $element -> full_story }}</p>
            
                                    </div>
            
                                    <div class="col-sm-7 col-xs-12 ">

                                    <div class="img-wrapper videos-img">

                                        <a href="{{$element -> link}}" target="_blank">

                                            <img class="v-play" src="{{ asset( 'img/videos/vid-play.png') }}" />

                                        </a>
                   
                                        <img class="img-responsive" src="{{ asset( 'img/videos/' . $element -> picture -> name)}}" />
                   
                                        <span class="v-time span-med">{{$element -> time}}</span>
                
                                    </div>
              
                                    <p class="span-med hidden-sm hidden-md hidden-lg font-16">{{$element -> full_story }}</p>
            
                                    </div> 
                   
                                    <div class="clearfix"></div>
                                
                                </div> 
      
                                    @else

                                <div class="vid-block sec">
            
                                    <div class="col-sm-5 col-xs-12 align-right ">

                                        <h1 class="into-h1 videos-h1">

                                            <span class="big line">{{$element -> title}}</span>

                                            <span class="zagolovok">{{$element -> title}}</span>

                                        </h1> 

                                        <h3>{{$element -> short_story}}</h3>

                                    <p class="span-med hidden-xs font-16">{!! htmlspecialchars_decode( $element -> full_story) !!}</p>
                
                                    </div>
            
            
                                    <div class="col-sm-7">
                
                                        <div class="img-wrapper videos-img">
                
                                            <a target="_blank" href="{{$element -> link}}">

                                                <img class="v-play" src="{{ asset( 'img/videos/vid-play.png') }}" />

                                            </a>
                        
                                            <img class="img-responsive" src="{{ asset( 'img/videos/' . $element -> picture -> name)}}"/>
                    
                                            <span class="v-time span-med">{{$element -> time}}</span>
                
                                        </div>

                                        <p class="span-med hidden-sm hidden-md hidden-lg font-16">{!! htmlspecialchars_decode( $element -> full_story ) !!}</p>

                                    </div>
            
            
                                    <div class="clearfix"></div>
                                
                                </div>

                                    @endif

@endforeach
