@extends('layouts.app')

@section('content')

<link href="/css/style.css" rel="stylesheet">
<p class="siteNav"><a href="{{ url('resort') }}">Home</a> / Add Resort</p>


<table class="table searchTable">
	    <tbody>
			@foreach ($resorts as $resort)
			<form method="post" action="/resort/{{ $resort->id }}" class="form-horizontal">
				{{ csrf_field() }}
			    {{ method_field('POST') }}
		      	<tr class="welcomeLi">
			        <td>{{ $resort->name }}</td>
			        <td><button type="submit" class="addsearch" name="add" value="add"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
		      	</tr>
	      	</form>
	      	@endforeach
	    </tbody>
	</table>
@endsection