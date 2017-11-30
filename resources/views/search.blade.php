@extends('layouts.app')

@section('content')

<link href="/css/style.css" rel="stylesheet">
<div class="bigDiv">
	<ul>
	@foreach ($resorts as $resort)

		<div class="searchDiv">
			<form method="post" action="/resort/{{ $resort->id }}" class="form-horizontal">
				{{ csrf_field() }}
			    {{ method_field('POST') }}
						<li class="searchname">{{ $resort->name }}</li>
						<button type="submit" class="btn btn-primary addsearch" name="add" value="add">Add</button>
			</form>
		</div>

	@endforeach
	</ul>
</div>


@endsection