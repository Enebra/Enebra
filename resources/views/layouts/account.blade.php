@extends('layouts.social')

@section('content')

    <div class="col-xs-12">
        <div class="user_photo">
            <div class="img-wrap"> <img class="img-responsive" src="{{asset( $user -> background -> bg() )}}"></div>
            <!--<div class="upload_photo">
               <label for="file1">
                   <img class="img-responsive" src="/social/img/cam.png">
               </label>
               <input type="file" id="file1" class="">
               </div> -->
            <div class="small_photo">
                <div class="img_wrap">
                    <img class="img-responsive" src="{{asset( $user -> picture -> thumb() )}}">
                    <!-- <div class="upload_photo">
                       <label for="file2">
                           <img class="img-responsive" src="/social/img/cam.png">
                       </label>
                       <input type="file" id="file2" class="">
                       </div> -->
                </div>
                <div class="user_name">{{$user -> firstname}} {{$user -> lastname}}</div>
            </div>
        </div>
        <div class="nav_bl">
            <ul class="nav nav-pills uspage_nav">
                <li><a href="{{asset('account/chron')}}">{{Lang::get('account_nav.chron')}}</a></li>
                <li><a class="active" href="{{asset('account/edit')}}">{{Lang::get('account_nav.info')}}</a></li>
                <li><a href="{{asset('account/balance')}}">{{Lang::get('account_nav.balance')}}</a></li>
                <li><a href="{{asset('account/feed-settings')}}">{{Lang::get('account_nav.feed_setting')}}</a></li>
                <li class="create">
                    <div>{{Lang::get('account_nav.create')}}</div>
                    <a href="{{asset('account/create/innovation')}}">{{Lang::get('account_nav.innovation')}}</a>
                    <a href="{{asset('account/create/information')}}">{{Lang::get('account_nav.information')}}</a>
                </li>
                <li><a href="{{asset('account/blockchain')}}">{{Lang::get('account_nav.blockchain')}}</a></li>
            </ul>
        </div>

        <div class="clearfix uspage_cont">
            @yield('account')
        </div>
    </div>

@stop