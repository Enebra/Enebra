@extends('layouts.information')

@section('content')
        
            @include( $information . '.common.nav')

<div class="container-fluid">
  
            @include( $information . '.partials.map')
   
<div class="full-partcipant">
 
            @include( $information . '.partials.left_info_block')
   
  <div class="col-md-9 col-sm-12 partic-bottom part-block">
    <div class="equal-blocks">
        <div class="participants-table">
          <table class="top">  
                <tbody>
                    <tr>
                        <td class="" style="width: 16.12%;">{{Lang::get('participants.photo')}}</td>
                        <td class="border" style="width: 16%;">{{Lang::get('participants.name')}}</td>
                        <td class="border" style="width: 18.3%;">{{Lang::get('participants.date_register')}}</td>
                        <td class="border" style="width: 18.3%;">{{Lang::get('participants.server')}}</td>
                        <td class=""> </td>
                        <td class="rating">{{Lang::get('participants.rating')}}
                                    <div>@foreach( $types as $key => $type)
                                            <span>{{Lang::get('account.publications.' . $type -> slug)}}</span>
                                         @endforeach
                                    </div>
                        </td>
                    </tr>
                </tbody>
            </table>     
            <table class="bottom">   
                <tbody class="tbody">
                    @foreach( \App\Models\User::participants() as $participant )
                        @include( $information . '.partials.participant')
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>    
  </div>
   <div class="clearfix"></div>
</div>
  </div>

  <input type="hidden" value="{{Lang::get('participants.all_members')}}" id="members" />
  <input type="hidden" value="{{Lang::get('participants.exchange')}}" id="exchange" />
  <input type="hidden" value="{{Lang::get('participants.one_member')}}" id="one_member" />

    <script src="https://maps.googleapis.com/maps/api/js?v=3.21&key=AIzaSyDuobmu5uxO3e-AsgdFVa2LoDA32fPagks&language={{$locale -> slug}}" type="text/javascript"></script>
    
    <script src="https://code.highcharts.com/highcharts.js"></script>
    
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <script type="text/javascript" src="{{asset('js/chart.js')}}" ></script>

    <script type="text/javascript" src="{{asset('js/google.js')}}"></script>


            @include( $information . '.partials.shared' )

@stop
