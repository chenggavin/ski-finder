<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resorts = \Auth::user()->resorts()->get();
        // return \auth::user();
        
        return view('panel', compact('resorts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $resort_id)
    {
        $user = \Auth::user();
        
        $user->resorts()->attach($resort_id);

        return redirect('/resort');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
    // Display specified resort
    $resort = \App\Resort::where('slug', $slug)->firstOrFail();
    
    // Api call for Open Weather API
    $client = new \GuzzleHttp\Client();
    $res = $client->request('GET', 'https://api.openweathermap.org/data/2.5/weather?zip='.$resort->zip.'&us&appid=ef6a94dab254dc386b931af4d5ca58c7');
    $weather = json_decode($res->getBody(), true);
    $tempK = $weather['main']['temp'];
    $tempF = round(9/5 * ($tempK - 273) + 32);
    $description = $weather['weather'][0]['description'];

    // Display reviews from users
    $reviews = \App\Review::
        select('reviews.user_id', 'reviews.resort_slug', 'reviews.stars', 'reviews.body', 'users.name')->
        join('users', 'users.id', '=', 'reviews.user_id')->where('resort_slug', $slug)->
        get();

    

    return view('resort', compact('resort', 'tempF', 'description', 'reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Guzzle Request for Val Thorens, France
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://api.weatherunlocked.com/api/snowreport/333020?app_id=50e5bb49&app_key=78cb7c5c0856518f78e1647e12788647');
        $apiResult = json_decode($res->getBody(), true);
        $resortId = $apiResult['resortid'];
        $resortConditions = $apiResult['conditions'];
        $resortNewSnow = $apiResult['newsnow_in'];
        $resortLowerSnow = $apiResult['lowersnow_in'];
        $resortUpperSnow = $apiResult['uppersnow_in'];
        $resortPctOpen = $apiResult['pctopen'];
        $resortLastSnow = $apiResult['lastsnow'];
        $valThorens = \App\Resort::where('id', 7)->update([
            'conditions' => $resortConditions, 
            'new_snow_in' => $resortNewSnow,
            'pct_open' => $resortPctOpen,
            'upper_snow' => $resortUpperSnow,
            'lower_snow' => $resortLowerSnow,
            'last_snow' => $resortLastSnow
        ]);

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($resort_id)
    {
        $user = \Auth::user();
        $user->resorts()->detach($resort_id);

        return redirect('/resort');
    }

    public function search() {

    
        $userResorts = \Auth::user()->resorts()->get();
        $currentResortsIds=[];

        foreach ($userResorts as $ids) {
            array_push($currentResortsIds, $ids->id);
        }

        $resorts = \App\Resort::whereNotIn('id', $currentResortsIds)->orderBy('name', 'asc')->get();
        
        return view('search', compact('resorts'));
    }

}








