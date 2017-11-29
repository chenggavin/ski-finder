@extends('layouts.app')

@section('content')










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