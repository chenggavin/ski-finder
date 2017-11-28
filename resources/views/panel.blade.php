@extends('layouts.app')

@section('content')








<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
	console.log('h/i');

    $.ajax({
        url: "https://api.weatherunlocked.com/api/snowreport/13003?app_id=50e5bb49&app_key=78cb7c5c0856518f78e1647e12788647",
        type: "GET",
        success: function (parsedResponse, statusText, jqXhr) {

            console.log(parsedResponse, statusText);


        },
        error: function (error) {

            console.log(error);
        }

    });


</script>



@endsection