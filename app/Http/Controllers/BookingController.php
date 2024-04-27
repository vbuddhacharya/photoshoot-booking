<?php

namespace App\Http\Controllers;

use App\Models\User;
use Date;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
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
        $button = $request->action;
        switch ($button){
            case 'confirm':
                $servicename = $request->event;
                $package = $request->package;
                $serv = Service::where('service_name',$servicename)->where('package',$package)->first();
                $booking = new Booking();
                $booking->cust_name = $request->name;
                $booking->user_id = $request->user;
                $booking->location = $request->loc;
                $booking->cust_contact = $request->con;
                $booking->no_of_people = $request->num;
                $booking->service_id = $serv->id;
                $booking->all_day = $request->wholeday;
                $booking->status = "Pending";
                $date = date('Y-m-d',strtotime($request->date));
                $booking->date = $date;
                $booking->time = $request->time;
                $booking->save();
                return view('finish',compact('booking'));
            case 'cancel':
                return redirect()->route('booking.date');
        }
        

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
    public function update(Request $request)
    {
        $bookingid = $request->bookingid;
        $button = $request->change;
        $book = Booking::find($bookingid);
        switch ($button){
            case 'confirm':
                $book->status = "Confirmed";
                $book->save();
                return redirect()->route('admin.bookings')->withErrors(['msg'=>'Confirmed.']);
            case 'delete':
                $book->delete();
                return redirect()->route('admin.bookings')->withErrors(['msg'=>'Deleted.']);
            case 'complete':
                $book->status = "Completed";
                $book->save();
                return redirect()->route('admin.bookings')->withErrors(['msg'=>'Completed.']);
        }
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
    public function checkDate(){
        return view('checkdate');
    }
    public function checkAvailable(Request $request){
        if($request->avail == "available"){
            $date = $request->date;
            $reqdate = date('Y-m-d',strtotime($date));
            $booking = Booking::where('date',$reqdate)->count();
            
            $values = ($request->except('_token'));
            $status= "Busy";
            
            if($booking<3){
                $status = "Available";
                return redirect()->back()->withInput()->withErrors(['status'=>'Available']);
            }
            else{
                $status = "Unavailable";
                return redirect()->back()->withInput()->withErrors(['status'=>'Unavailable']);
            }
       }
        else{
            $values = ($request->except('_token'));
            $services = Service::all();
            return view('book',compact('values','services'));
        }

    }
    
    public function validateBooking(Request $request){
        $validated = $request->validate([
            'event' => 'required|string',
            'con'=>['required', 'regex:/^((98)|(97))[0-9]{8}/'],
            'loc'=>'required|string',
            'num'=>'required|numeric',
            'time' => ['required','regex:/^(1|2|3|4|5|6|7|8|9|10|11|12)+ (AM|PM)/'],
        ]);
        $values = $request->except('_token');
        $date = date('Y-m-d', strtotime($request->date));
        $type = $request->event;
        $package=$request->package;
        $st="";
        $et="";
        $wholeday = isset($request->wholeday) ? $request->wholeday : 0 ;
        if($type == "none"){
            return back()->withInput()->withErrors("Invalid Event Type");
        }
            
        if ($type == 'Wedding' && $package==0){
                return back()->withInput()->withErrors("Please Choose a Package");
        }
        $condition = ['service_name'=>$request->event,'package'=>$package];
        $serv = Service::where($condition)->first();
        
        $values['advance']=$serv->advance;
        $values['total']=$serv->price;
        $values['wholeday']=$wholeday;

        return view('confirm',compact('values'));

    }
    public function viewUserBookings(){
        $userid = Auth::user()->id;
        $bookings = Booking::where('user_id',$userid)->orderBy('date')->get();
        // dd($bookings);
        return view('view_bookings',compact('bookings'));
    }
    public function viewAllBookings(){
        $bookings = Booking::orderBy('date','asc')->get();
        $service = Service::all();
        $book = Booking::find(1);
        $serv = $book->service->price;
        return view('admin',compact('bookings','service'));

    }

}
