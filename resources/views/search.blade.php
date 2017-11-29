@extends('layouts.app')

@section('content')
<link href="/css/style.css" rel="stylesheet">

<ul>




@foreach ($resorts as $resort)

<form method="post" action="/resort/{{ $resort->id }}" class="form=horizontal">
	{{ csrf_field() }}
    {{ method_field('POST') }}
    <div class="row">
	    <div class="form-group add">
			<li>{{ $resort->name }}</li>
			<button type="submit" class="btn btn-primary" name="add" value="add">Add</button>
		</div>
	</div>


</form>
@endforeach




</ul>



@endsection