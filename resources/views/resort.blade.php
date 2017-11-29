@extends('layouts.app')

@section('content')

<div id="resort">
<link href="/css/style.css" rel="stylesheet">
<h1>{{ $resort->name }}</h1>
<h5>{{ $resort->location }}</h3>

<ul>
	<li><span class="attribute">Open Status:</span> 
		@if ( $resort->open === true) 
		<span style="color:green;">Open </span>
		@else <span style="color:red;">Closed </span>
		@endif
	</li>
	<li><span class="attribute">Condition:</span> {{ $resort->conditions }}</li>
	<li><span class="attribute">Percentage Open:</span>  {{ $resort->pct_open }} %</li>
	<li><span class="attribute">Lifts Open:</span>  {{ $resort->lifts_open }}</li>
	<li><span class="attribute">Last Snowfall:</span>  {{ $resort->last_snow }}</li>
	<li><span class="attribute">New Snow last 24hrs(in):</span>  {{ $resort->new_snow_in }}"</li>
	<li><span class="attribute">Upper Snow(in):</span>  {{ $resort->upper_snow }}</li>
	<li><span class="attribute">Upper Snow(in):</span>  {{ $resort->lower_snow }}</li>
</ul>








@endsection