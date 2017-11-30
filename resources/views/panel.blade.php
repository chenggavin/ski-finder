@extends('layouts.app')

@section('content')

<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:700" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">

    <div class="container">

    @if (empty($resorts))
    Add your first resort!
    @else
        @foreach ($resorts->chunk(4) as $resorts)
            <div class="row">
                @foreach ($resorts as $resort)
                    <div class="col-md-3">
                        <div class="thumbnail">

                        <form method="post" action="/resort/{{ $resort->id }}/delete">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="delete btn btn-xs btn-primary x"><i class="fa fa-times" aria-hidden="true"></i></button>
                        </form>

                            <div class="caption text-center">
                                <a href="{{ url('resort', [$resort->slug]) }}"><img src="{{ asset('img/' . $resort->img) }}" alt="image" class="img-responsive"></a>
                                <a href="{{ url('resort', [$resort->slug]) }}"><h3>{{ $resort->name }}</h3>
                                <p>{{ $resort->location }}</p>
                                </a>
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->

                @endforeach
            </div> <!-- end row -->
            
        @endforeach
        

    </div> <!-- end container -->
    @endif
<h3><a class="addmore" href="/resort/search">Add Resort</a></h3>

@endsection
