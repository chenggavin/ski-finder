@extends('layouts.app')

@section('content')

<link href="/css/style.css" rel="stylesheet">
<div class="bigDiv" align="center">
	<ul>
	@foreach ($resorts as $resort)

		<div class="searchDiv">
			<form method="post" action="/resort/{{ $resort->id }}" class="form-horizontal">
				{{ csrf_field() }}
			    {{ method_field('POST') }}
			    <div class="row">
			    	
						<li class="searchname">{{ $resort->name }}</li>
						<button type="submit" class="addsearch" name="add" value="add"><i class="fa fa-plus" aria-hidden="true"></i></button>
					
					
				</div>
			</form>
		</div>

	@endforeach
	</ul>
</div>


@endsection