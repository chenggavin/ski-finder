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
	    </tbody>
	</table>
</div>
	<br>
	<hr width="60%">
	<div class="row iframeReview">
		<div class="col-sm-6">
			<iframe width="600" height="250" frame border="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:{{ $resort->map }}&key=AIzaSyDQ3zG49Y7wgcBOK1fUDDRCVF_TuRXSH9I" allowfullscreen>
			</iframe>
		</div>
		<!-- User Resort Reviews -->
		<div class="reviewDiv col-sm-6">
			<h4 class="reviewTitle">User Reviews</h4>
			<ul>
				@foreach ($reviews as $review)
					
					
					<li class="postLi" style="margin-top:5%">{{ $review->name}}

						@for ($i = 0; $i < ($review->stars); $i++)
						<?php echo '<i class="fa fa-star" aria-hidden="true"></i>' ?>
						@endfor
						</li>
					<li class="postLi" style="margin-left:10px">"{{ $review->body }}"</li>
				@endforeach
			</ul>
			<hr>

			<form class="" method="post" action="/review/{{ $resort->slug}}">
			    <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
			      <div class="col-sm-8">
			        <textarea class="form-control" required rows="3" cols="200" width="450px" name="body" placeholder="What did you think?"></textarea>
			      </div>
			    </div>
			    <button type="submit" class="btn btn-primary">Post!</button>
			</form>
		</div>
	</div>




@endsection