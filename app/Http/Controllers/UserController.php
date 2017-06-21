<?php
namespace app\Http\Controllers;

// use app\Http\Controllers\AdminController;
use app\User;
use DB;
use app\Runner;
use app\Organizer;
use app\Http\Requests\runnerRequest;
use app\Http\Requests\Admin\UserRequest;
use Session;

class UserController extends Controller
{
    public function __construst()
    {
        $this->middleware('api.auth');
    }


 public function update(UserRequest $request)
{
    session_start();
   $id = Auth::guard('user')->user()->id;
dd($id);
    $users = Users::find($id);
    $input = $request->all();
    $users->fill($input)->save();

    return redirect('user');
}

    public function index()
    {
        $user = User::all()->sortBy('id');
        return view('user.index', compact('user'));
    }
// Runner
    public function getRunner()
    {
        Runner::all()->sortBy('runnerId');
    }

    public function postRunner(runnerRequest $request)
    {
        $location =  Runner::create($request->all());
//        $location =  DB::table('runner')create($request->all());

        return  $location;
    }
//Runner ranking

       public function ranking()
    {

        $users = User::all()->sortByDesc('totalKmRunned');
        return view('runners.ranking', compact('users'));
    }
     public function ranking2()
    {

        $users = User::all()->sortByDesc('totalDonated');
        return view('runners.ranking', compact('users'));
    }
// runner end
    public function runner()
    {
        $users = User::all()->sortBy('id');
        return view('user.runner', compact('users'));
    }
    public function organizer()
    {
        $users = Organizer::all()->sortBy('id');
        return view('user.organizer', compact('users'));
    }

//    public function validateUser()
//    {
//        $user = app('Dingo\Api\Auth\Auth')->user();
//
//        if(!$user) {
//            $responseArray = [
//                'message' => 'Not authorized. Please login again',
//                'status' => false
//            ];
//            return response(array($responseArray))->setStatusCode(403);
//        }
//        else {
//            $responseArray = [
//                'message' => 'User is authorized',
//                'status' => true
//            ];
//            return response(array($responseArray))->setStatusCode(200);
//        }
//    }
    
    public function validateUser()
    {
        if(Auth::guard('admin')->user()){
            $responseArray = [
                'message' => 'User is authorized',
                'status' => true
            ];
            return response(array($responseArray))->setStatusCode(200);
        }
        else if(Auth::guard('organizer')->user()){
            $responseArray = [
                'message' => 'User is authorized',
                'status' => true
            ];
            return response(array($responseArray))->setStatusCode(200);
        }
        else if(Auth::guard('organizer')->user()){
            $responseArray = [
                'message' => 'User is authorized',
                'status' => true
            ];
            return response(array($responseArray))->setStatusCode(200);
        }else {
            $responseArray = [
                'message' => 'Not authorized. Please login again',
                'status' => false
            ];
            return response(array($responseArray))->setStatusCode(403);
        }

    }

    public function blockOrganizer($id)
    {
        Organizer::find($id)->update(array('block' => 1 ));
        return back();
    }

    public function blockRunner($id)
    {
        User::find($id)->update(array('block' => 1));
        return back();
    }
    public function unblockOrganizer($id)
    {
        User::find($id)->update(array('block' => 0));
        return back();
    }
    public function unblockRunner($id)
    {
        User::find($id)->update(array('block' => 0));
        return back();
    }


    
}

