   <div class="col-md-3 col-sm-12 partic-top part-block">
   <div class=" equal-blocks">
       <div class="filter-block span-med">
            <div class="form-group country">
              <label class="control-label">{{Lang::get('participants.country')}} </label>
              <select class="form-control black" name="country_id" onchange="create_participants_request()"  >
                    <option value="">{{Lang::get('participants.select_country')}}</option>
                @foreach( App\Models\Country::all()  as $country )
                    <option value="{{$country -> id}}" data-place='{{$country -> place_id}}'>{{Lang::get('countries.' . $country -> id )}}</option>
                @endforeach 
              </select> 
        </div> 
          <div class="form-group">
             <p>{{Lang::get('participants.sorting_by')}}</p>
             <div class="check-block">
                <div class="col-md-12 col-sm-6 form-group-item check-form-group">
                <p class="big-pad">{{Lang::get('participants.rating')}}</p>
                @foreach( $types as $key => $type)
                <div class="filt-check">
                    <input type="checkbox" name="publications" id="{{$type -> slug}}" value="{{$type -> slug}}" class="css-checkbox">  
                    <label for="{{$type -> slug}}" class="css-label">{{Lang::get('account.publications.' . $type -> slug)}}</label>     
                </div>
                @endforeach
                </div>
                
               <div class="col-md-12 col-sm-6 form-group-item check-form-group"> 
               <p class="med-pad">{{Lang::get('participants.last_name')}}</p>
                <div class="filt-check">
                    <input type="checkbox" name="lastname" value="asc" id="lastn1" class="css-checkbox">  
                    <label for="lastn1" class="css-label">{{Lang::get('participants.a_z')}}</label>     
                </div>
                <div class="filt-check">
                    <input type="checkbox" name="lastname" value="desc" id="lastn2" class="css-checkbox">   
                    <label for="lastn2" class="css-label">{{Lang::get('participants.z_a')}}</label>                     
                </div>
                </div>
                
                <div class="col-md-12 col-sm-6 form-group-item check-form-group">
                <p class="min-pad">{{Lang::get('participants.date_of_registration')}}</p>
                <div class="filt-check">
                    <input type="checkbox" name="created_at" id="desc" value="desc" class="css-checkbox">  
                    <label for="desc" class="css-label">{{Lang::get('participants.descending')}}</label>     
                </div>
                <div class="filt-check">
                    <input type="checkbox" name="created_at" id="asc" value="asc" class="css-checkbox">   
                    <label for="asc" class="css-label">{{Lang::get('participants.ascending')}}</label>                     
                </div>
                </div>
                
                <div class="col-md-12 col-sm-6 form-group-item check-form-group">
               <p class="med-pad">{{Lang::get('participants.have_server')}}</p>
                <div class="filt-check">
                    <input type="checkbox" name="has_server" id="yes" value="1" class="css-checkbox">  
                    <label for="yes" class="css-label">{{Lang::get('participants.yes')}}</label>     
                </div>
                <div class="filt-check">
                    <input type="checkbox" name="has_server" id="no" value="0" class="css-checkbox">   
                    <label for="no" class="css-label">{{Lang::get('participants.no')}}</label>                     
                </div>
                </div>
             </div>
        
       <div class="name-bock">
           <label class="input-group-label"><img src="{{asset('img/filter-photo.png')}}"></label>
         <div class="input-group">
           <input type="text" name="q" autocomplete="off" onkeyup="create_participants_request()" class="form-control" placeholder="{{Lang::get('participants.search')}}">
   
        </div>
       </div>
        </div>
       </div>  

        <div id="container" style="min-width: 220px; height: 250px; margin: 30px auto"></div>
    </div> 

   </div>