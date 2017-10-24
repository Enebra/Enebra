@extends('layouts.information')

@section('content')
        
            @include( $information . '.common.index_nav' )   
            
            @include( $information . '.modules.introduction' )   
         
            @include( $information . '.modules.video' )
        
            @include( $information . '.modules.pages' )
          

@stop
