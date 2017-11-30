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
    $resort = \App\Resort::where('slug', $slug)->firstOrFail();
    // return $item;
    return view('resort', compact('resort'));
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
        // Guzzle Request for Arosa, Switzerland
        // require '/vender/autoload.php';
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://api.weatherunlocked.com/api/snowreport/13003?app_id=50e5bb49&app_key=78cb7c5c0856518f78e1647e12788647');

        echo $res->getStatusCode();
        // 200
        echo $res->getHeaderLine('content-type');
        // 'application/json; charset=utf8'
        $apiResult = json_decode($res->getBody(), true);

        echo $pleaseWork['resortid'];

        return;
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








