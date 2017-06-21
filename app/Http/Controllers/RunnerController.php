<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Runner;
use app\User;   
use app\Http\Requests;
use app\Http\Requests\UserRequest;
// use app\Http\Controllers\Auth;
use Session;
class RunnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $runners = Runner::all()->sortBy('event_id');
        return view('runners.index', compact('runners'));
//        return $runners;
    }

 public function update_runner(Request $request, $id)
{

    $users = User::find($id);
    $input = $request->all();
    $users->fill($input)->save();

    return redirect('profile');
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('runners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Runner::create($request->all());
        return redirect('runners');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $runner = Runner::find($id);

        return view('runners.show', compact('runner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $runner = Runner::find($id);
        return view('runners.edit', compact('runner'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $runner = Runner::find($id);
        $input = $request->all();
        $runner->fill($input)->save();

        return redirect('runners');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Runner::find($id)->delete();
        return redirect('runners');
    }

    //Runner ranking

       public function ranking()
    {

        $totalKm = User::all()->sortByDesc('totalKmRunned');
         $totalDonations = User::all()->sortByDesc('totalDonated');
        return view('runners.ranking', compact('totalKm','totalDonations'));
    }

       
}

