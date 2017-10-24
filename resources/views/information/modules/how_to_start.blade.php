    
    <div class="f-block">   

        @include( $information . '.modules.timer')
            
            <div class="navbar-header">
                    
                    <a class="navbar-brand hidden-1920 show-820" href="/">
                        
                        <img class="img-responsive" src="img/logo.png"/>
                            
                            <div class="logo-text">
                                    
                                    <div class="big-txt"><img src="{{ asset( 'img/the.png') }}"/></div>
                                    
                                    <div class="small-txt">
                                        
                                        <div class="med-small-txt"><span>{{Lang::get('app.enebra')}}</span> {{Lang::get('app.project')}}</div>
                                        
                                        <hr class="bord-txt"/>
                                        
                                        <div class="min-small-txt">{{Lang::get('app.key_to_prosperity')}}<span> {{Lang::get('app.human')}}</span></div>
                                    
                                    </div>
                               
                                </div>
                    </a>

            </div>  
                    
                    <h2><span class="blue">{{Lang::get('index.free')}}</span> {{Lang::get('index.community')}}</h2>
                    
                    <h3>{{Lang::get('index.citizens')}} <span class="blue">{{Lang::get('index.of_earth_planet')}}</span></h3>
                    
                    <a class="how_start hvr-radial-out" href="#" onclick="scroll_to('scroll-introduction')">{{Lang::get('index.how_to_start')}}</a>
    </div>
                