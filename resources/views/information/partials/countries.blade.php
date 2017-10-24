@foreach( App\Models\Country::get_ids()  as $country )
<option value="{{$country -> id}}">{{Lang::get('countries.' . $country -> id )}}</option>
@endforeach 