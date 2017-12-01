@extends('layouts.app')

@section('content')

<div id="resort">
<button class="back btn-secondary"><a href="/resort">Back</a></button>
<link href="/css/style.css" rel="stylesheet">
<link href="/css/mimic.css-master/mimic.min.css">
<h1 style="color:#30A9DE">{{ $resort->name }}</h1>
<h5>{{ $resort->location }}</h3>



<div class="tableDiv">
	<table class="table resortTable">

	    </thead>
	    <tbody>
	      	<tr>
		        <td><span class="attribute">Open Status:</span></td>
			@if ( $resort->open === true) 
			
		        <td><span style="color:green;">Open </span>
			@else 
				<td><span style="color:red;">Closed </span></td>
			@endif
	      	</tr>
	      	<tr>
		        <td><span class="attribute">Temperature:</span></td>
		        <td>{{ $tempF }}&deg;F</td>
	      	</tr>
	      	<tr>
		        <td><span class="attribute">Condition:</span></td>
		        <td>{{ $description }}</td>
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
		        <td>{{ $resort->new_snow_in }}</td>
	      	</tr>
	      	<tr>
		        <td><span class="attribute">Upper Snow(in)</span></td>
		        <td>{{ $resort->upper_snow }}</td>
	      	</tr>
	      	<tr>
		        <td><span class="attribute">Lower Snow(in)</span></td>
		        <td>{{ $resort->lower_snow }}</td>
	      	</tr>
	    </tbody>
	</table>

</div>

<iframe width="300" height="250" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:{{ $resort->map }}&key=AIzaSyDQ3zG49Y7wgcBOK1fUDDRCVF_TuRXSH9I" allowfullscreen>
</iframe>





@endsection