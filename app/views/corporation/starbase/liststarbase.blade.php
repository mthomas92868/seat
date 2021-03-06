@extends('layouts.masterLayout')

@section('html_title', 'All Corporation Startbases')

@section('page_content')

@foreach ($corporations as $corp)
	<div class="small-box bg-blue col-md-4">
	    <div class="inner">
	        <h3>
	            {{ $corp->corporationName }}
	        </h3>
	        <p>
	            From character: {{ $corp->characterName }}
	        </p>
	    </div>
	    <a href="{{ action('CorporationController@getStarBase', array('corporationID' => $corp->corporationID)) }}" class="small-box-footer">
	        View Corporation Starbases <i class="fa fa-arrow-circle-right"></i>
	    </a>
	</div>
@endforeach

@stop
