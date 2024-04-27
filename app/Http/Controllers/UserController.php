<?php

namespace App\Http\Controllers;


use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function viewGallery(){
        return view('gallery');
    }
    public function viewServices(){
        $services = Service::all();
        return view('services',compact('services'));
    }
    public function viewWedding(){
        $services = Service::all();
        return view('wedding',compact('services'));
    }
    public function viewLogin(){
        return view('login');
    }
    public function viewRegister(){
        return view('register');
    }
    public function verifyLogin(Request $request){
        $credentials = ($request->except('_token'));
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        else{

            return redirect()->route('login');
        }
    }
    public function viewAllServices(){
        $services = Service::orderBy('service_name')->get();
        return view('all_services',compact('services'));
    }
    public function editPrices(Request $request){
        $servid = $request->servid;
        $service = Service::find($servid);
        if(isset($request->nprice)){
            $nprice = $request->nprice;
            $service->price = $nprice;
        }
        if(isset($request->adv)){
            $adv = $request->adv;
            $service->advance = $adv;
        }
        $service->save();
        return redirect()->route('admin.services')->withErrors(['msg'=>'Update Successful']);
    }
    public function editUser(Request $request){
        return view('edit_user');
    }
    public function updateUser(Request $request){
        $userid = Auth::user()->id;
        $user = User::find($userid);
        if (isset($request->password)){
            $user->password = bcrypt($request->password);
        }
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->save();
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');

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
    public function store(Request $request)
    {
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->user = $request->user;
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password);
        $newUser->contact = $request->contact;
        $newUser->save();
        return redirect()->route('user.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
