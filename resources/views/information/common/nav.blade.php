            <div class="img-block pages">

                @include( $information . '.common.header' )

                <div class="f-block pages-title">   
                       
                       <h1>{{$meta -> title}}</h1>

                    </div>

                @include( $information . '.modules.signin' )

                @include( $information . '.modules.signup' )    

            </div>