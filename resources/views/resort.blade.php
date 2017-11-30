@extends('layouts.app')

@section('content')

<div id="resort">
<link href="/css/style.css" rel="stylesheet">
<h1 style="color:#30A9DE">{{ $resort->name }}</h1>
<h5>{{ $resort->location }}</h3>


<div class="tableDiv">
	<table class="table resortTable">

	    </thead>
	    <tbody>
	      	<tr>
		        <td><span class="attribute">Open Status:</span> 
			@if ( $resort->open === true) 
			</td>
		        <td><span style="color:green;">Open </span>
			@else <span style="color:red;">Closed </span>
			@endif</td>
	      	</tr>
	      	<tr>
		        <td><span class="attribute">Condition:</span></td>
		        <td>{{ $resort->conditions }}</td>
	      	</tr>
	      	<tr>
		        <td><span class="attribute">Percentage Open:</span></td>
		        <td>{{ $resort->pct_open }}%</td>
	      	</tr>
	      	<tr>
		        <td><span class="attribute">Lifts Open:</span></td>
		        <td>{{ $resort->lifts_open }}</td>
	      	</tr>
	      	<tr>
		        <td><span class="attribute">Last Snowfall:</span></td>
		        <td>{{ $resort->last_snow }}</td>
	      	</tr>
	      	<tr>
		        <td><span class="attribute">New Snow last 24hrs(in)</span></td>
		        <td>{{ $resort->upper_snow }}</td>
	      	</tr>
	      	<tr>
		        <td><span class="attribute">Upper Snow(in)</span></td>
		        <td>{{ $resort->lower_snow }}</td>
	      	</tr>

	    </tbody>
	</table>


</div>








@endsection