<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallary;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function room_details($id)
    {

        $room = Room::find($id);
        return view('home.room_details', compact('room'));
    }

    public function add_booking(Request $request, $id)
    {

        $request->validate([

            'startDate' => 'required|date',
            'endDate' => 'date|after:startDate'

        ]);


        $data = new Booking;

        $data->room_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $isBooked= Booking::where('room_id',$id)
        ->where('start_date','<=',$endDate)
        ->where('end_date','>=',$startDate)->exists();


       if ($isBooked) {

        return redirect()->back()->with('message','Room is already booked please try different date');


       } else {
        $data->start_date = $request->startDate;
        $data->end_date = $request->endDate;



        $data->save();

        return redirect()->back()->with('message','Room Booked Successfully');
       }



    }

    public function contact(Request $request){

        $data=new Contact;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->message=$request->message;

        $data->save();

        return redirect()->back()->with('message','Your message has been sent successfully');

    }

    public function our_rooms(){
        $rooms=Room::all();

        return view('home.our_rooms',compact('rooms'));

    }


    public function hotel_gallary(){
        $gallarys=Gallary::all();

        return view('home.hotel_gallary',compact('gallarys'));

    }

    public function contact_us(){


        return view('home.contact_us');


       

    }


}