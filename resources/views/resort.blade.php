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
	      	<tr>
		        <td>Website</a></td>
		        <td><a href="{{ $resort->website }}">{{ $resort->website }}</td>
	      	</tr>
	      	<tr>
		        <td>SlopeCast User Rating (out of 5)</a></td>
		        <td>
		        	@if (!empty($avgStar))
			        	@for ($i = 0; $i < $avgStar; $i++)
						<i class="fa fa-star" aria-hidden="true"></i>
						@endfor
					@else 
						No Current Reviews
					@endif
				</td>
	      	</tr>
	    </tbody>
	</table>
</div>
<br>
<hr width="60%">
<div class="row iframeReview">
	<div class="col-lg-6" align="center">
		<iframe frame src="https://www.google.com/maps/embed/v1/place?q=place_id:{{ $resort->map }}&key=AIzaSyDQ3zG49Y7wgcBOK1fUDDRCVF_TuRXSH9I" allowfullscreen>
		</iframe>
	</div>
	<!-- User Resort Reviews -->
	<div class="reviewDiv col-lg-4 col-md-12">
		<h4 class="reviewTitle">User Reviews</h4>
		<ul>
			@foreach ($reviews as $review)
				<li class="postName">{{ $review->name}}
					@for ($i = 0; $i < ($review->stars); $i++)
					<i class="fa fa-star" aria-hidden="true"></i>
					@endfor
					</li>
				<li class="postBody">"{{ $review->body }}"</li>
			@endforeach
		</ul>
		<hr>

		<form method="post" action="/review/{{ $resort->slug}}">
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	      	<div class="col-sm-10 col-md-10 col-lg-10">
		        <textarea class="form-control" rows="4" required name="body" placeholder="What did you think?"></textarea>
		    </div>
			<div class="col-sm-2 col-md-2 col-lg-2" align="center">
				<div class="row">
		        	<select name="rating" class="form-control rating" required>
		        		<option disabled selected value style="display:none">Select</option>
						<option value="1">&#9733;</option>
						<option value="2">&#9733;&#9733;</option>
						<option value="3">&#9733;&#9733;&#9733;</option>
						<option value="4">&#9733;&#9733;&#9733;&#9733;</option>
						<option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
		        	</select>
		        <div class="row">
	        		<button type="submit" class="form-control btn btn-primary postButton">POST</button>
	        	</div>
	        	</div>
		    </div>
		</form>
	</div>
</div>




@endsection