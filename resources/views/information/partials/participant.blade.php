             <tr class="participant-item">
                <td class=" photo-partic"><img class="img-responsive" src="{{$participant -> picture -> thumb()}}"></td>

                @if( ( $locale -> id === $participant -> language_id ) || ( isset( $user ) && $participant -> language_id === $user -> language_id ) )
                <td class="twidth border">{{$participant -> firstname}}<br>{{$participant -> lastname}}</td>
                @else
                <td class="twidth border">{{$participant -> firstname_en}}<br>{{$participant -> lastname_en}}</td>
                @endif
                <td class=" border date" style="width: 18.3%;">{{$participant -> created_at -> format( $register_format )  }}</td>
                <td class=" border date"  style="width: 18.3%;" >
                    <div class="next-button">
                    @if( $participant -> has_server === 1 )
                    <input type="checkbox" disabled="" name="server-1" id="server-1" class="css-checkbox" checked="checked" />
                    @else
                    <input type="checkbox" disabled="" name="server-1" id="server-1" class="css-checkbox"  />
                    @endif
                    <label for="server-1" class="css-label"></label>
                    </div>    
                </td>
                <td class="count">{{Lang::get('participants.counts')}} <span class="count-pad">{{Lang::get('participants.points')}}</span></td>
                @foreach( $types as $type )
                <td class="innov">{{$participant -> publications( $type -> id ) -> count()}} <span class="count-pad">{{$participant -> publications_scores( $type -> id )}}</span></td>
                @endforeach
              </tr>