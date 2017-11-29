@extends('layouts.app')

@section('content')




    <div class="container">


        @foreach ($resorts->chunk(4) as $resorts)
            <div class="row">
                @foreach ($resorts as $resort)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption text-center">
                                <a href="{{ url('menu', [$resort->slug]) }}"><img src="{{ asset('img/' . $resort->image) }}" alt="image" class="img-responsive"></a>
                                <a href="{{ url('menu', [$resort->slug]) }}"><h3>{{ $resort->resortname }}</h3>
                                <p>{{ $resort->resortname }}</p>
                                </a>
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->
                @endforeach
            </div> <!-- end row -->
        @endforeach

    </div> <!-- end container -->







			<!-- Api Call for Arosa, Switzerland -->
<script src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
	$.ajax({  
		url: "https://api.weatherunlocked.com/api/snowreport/13003?app_id=50e5bb49&app_key=78cb7c5c0856518f78e1647e12788647",   
	  	headers: {          
	    Accept: "application/json; charset=utf-8" 
	  },     
	  data: "data",    
	  type: "GET",
    	success: function (parsedResponse, statusText, jqXhr) {

        console.log(parsedResponse);
        console.log(parsedResponse.resortname);
        console.log(parsedResponse.resortcountry);

    	},
	    
	  
	  error : function() {
	  	alert('dang it');
	  }
	});
</script>




@endsection