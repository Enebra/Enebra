<div class="sign-reg register"> 

                <div class="close-form"><span class="glyphicon glyphicon-remove"></span></div>              
                    
                    <form method="post" action="">
                            
                            <h3>{{Lang::get('app.signup')}}</h3>
                         
                        <div class="adaptive"> 

                          <div class="form-group col-xs-12">

                              <select class="form-control reg-field"  id="nationality" name="nationality">

                                  <option value="0">{{Lang::get('signup.select_nationality')}}</option>

                                    @include( $information . '.partials.countries')

                              </select>

                           </div>

                           <div class="form-group col-xs-12">
                              
                              <div class="text-center">
                                    <img src="{{asset('img/uploadphoto.png')}}" id="preview" onclick="auth.trigger_avatar()" />
                                    <input type="file" class="hidden" accept="image/*"  name="upload" id="file" onchange="auth.avatar()" />
                               
                               </div>
                          
                          </div>

                           <div class="form-group col-md-6 col-xs-12">

                              <input type="text" class="form-control reg-field" id="firstname" name="firstname" placeholder="{{Lang::get('signup.firstname')}}"/>
                          
                          </div>

                         <div class="form-group col-md-6 col-xs-12">
                           
                              <input type="text" class="form-control reg-field" id="lastname"  name="lastname" placeholder="{{Lang::get('signup.lastname')}}"/>
                          
                          </div>

                       @if( $locale -> id != 1 )
                           <div class="form-group col-md-6 col-xs-12">

                              <input type="text" class="form-control reg-field" id="firstname_en" name="firstname_en" placeholder="{{Lang::get('signup.firstname_en')}}"/>
                          
                          </div>

                           <div class="form-group col-md-6 col-xs-12">
                           
                              <input type="text" class="form-control reg-field" id="lastname_en"  name="lastname_en" placeholder="{{Lang::get('signup.lastname_en')}}"/>
                          
                          </div>
                       @endif
                          
                          <div class="form-group col-xs-12 select-group">
                          
                             <div class="col-md-4 col-sm-4 col-xs-4 no-pad pad-right">
                          
                              <select class="form-control reg-field" id="sex" name="sex">
                              @for( $i = 0; $i < 3; $i++)
                                  <option value="{{$i}}">{{Lang::get('app.sex.' . $i)}}</option>
                              @endfor
                              </select>
                          
                             </div> 
                               <div class="col-md-8 col-sm-8 col-xs-8 no-pad">
                               <select class="form-control reg-field" id="country" name="country">

                                  <option value="0">{{Lang::get('signup.birth')}}</option>

                                    @include( $information . '.partials.countries')
                                
                              </select>

                              </div> 
                          </div>
                          
                          <div class="form-group col-xs-12 select-group">
                              <div class="col-md-3 col-sm-3 col-xs-3 no-pad  pad-right">
                              <select class="form-control reg-field"  id="birthday" name="birthday">
                                  <option value="0">{{Lang::get('signup.day')}}</option>

                                    @include( $information . '.partials.days')

                              </select>
                              </div>
                              <div class="col-md-5 col-sm-5 col-xs-5 no-pad pad-right">
                               <select onchange="create_date('birth')" class="form-control reg-field" id="birthmonth" name="birthmonth">
                                  <option value="0">{{Lang::get('signup.month')}}</option>

                                  @include( $information . '.partials.months')

                              </select> 
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 no-pad">
                              <select onchange="create_date('birth')"  class="form-control reg-field" id="birthyear" name="birthyear">

                                  <option value="0">{{Lang::get('signup.year')}}</option>
                                  
                                  @include( $information . '.partials.years')

                              </select>
                              </div>
                          </div>
                        </div>  
                        
                        <div class="adaptive"> 

                          <div class="marg-bot">

                          <div class="form-group col-xs-12">

                              <select class="form-control reg-field" id="document_id" name="document_id">

                                  <option value="0">{{Lang::get('signup.document')}}</option>
                                  @foreach(\App\Models\Document::get_ids() as $doc)

                                  <option value="{{$doc -> id}}">{{Lang::get('documents.' . $doc -> id )}}</option>

                                  @endforeach
                              </select>
                          </div>
                          <div class="form-group col-xs-12">

<input type="text" class="form-control reg-field" id="document" name="document" placeholder="{{Lang::get('signup.document_number')}}"/>  
                          
                          </div>
                         
                          <div class="form-group col-xs-12 select-group">
                             
                              <div class="col-md-3 col-sm-3 col-xs-3 no-pad  pad-right">
                              
                              <select class="form-control reg-field" id="dateday" name="dateday" >
                                  <option value="0">{{Lang::get('signup.day')}}</option>
                      
                                    @include( $information . '.partials.days')

                              </select>
                              
                              </div>
                              
                              <div class="col-md-5 col-sm-5 col-xs-5 no-pad pad-right">
                               
                               <select onchange="create_date('date')"  class="form-control reg-field" id="datemonth" name="datemonth" >
                                  <option value="0">{{Lang::get('signup.month')}}</option>

                                  @include( $information . '.partials.months')

                              </select>

                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 no-pad">
                              <select onchange="create_date('date')"  class="form-control reg-field" id="dateyear" name="dateyear">
                                  <option value="0">{{Lang::get('signup.year')}}</option>

                                  @include( $information . '.partials.years')

                              </select>
                              </div>
                          </div>
                          </div> 
                          
                          <div class="marg-bot"> 
                          <div class="form-group col-xs-12">
            
            <input type="text" class="form-control reg-field" id="phone" name="phone" placeholder="{{Lang::get('signup.phone')}}"/>  
            
                          </div>
                          <div class="form-group col-xs-12">

            <input type="text" class="form-control reg-field" id="email" name="email" placeholder="{{Lang::get('signup.email')}}"/>  
                         
                          </div>
                          </div>
                          
                           <div class="form-group col-xs-12">
                        
            <input type="text" class="form-control reg-field" id="login" name="login" placeholder="{{Lang::get('signup.login')}}"/>  
                        
                          </div>

                           <div class="form-group col-xs-12">
                            <input type="password" class="form-control reg-field" id="password" name="password" placeholder="{{Lang::get('signup.password')}}"/>  
                          </div>
                           <div class="form-group col-xs-12">
                        <input type="password" class="form-control reg-field" id="password_confirm" name="confirm" placeholder="{{Lang::get('signup.confirm_password')}}"/>  
                          </div>
                          
                          <div class="clearfix"></div>
                          <div class="checkbox">
                              <label>
                                <input type="checkbox" name="checkboxG1" id="checkboxG1" checked="checked" class="css-checkbox" />
                                
                                <label for="checkboxG1" class="css-label radGroup1">{{Lang::get('signup.i_accept')}} 
                                
                                <a data-toggle="modal" data-target="#myModal3" href="#" onclick="scroll_to_top()" >{{Lang::get('app.terms')}}</a></label>
                              </label>
                          </div>
                        <button type="button" onclick="auth.signup( 'reg-field' )" class="btn btn-default hvr-radial-out right-but">{{Lang::get('app.signup')}}</button>
                        </div>
                    </form>       
                </div>
                