<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallary;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use  App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Mail;
use Notifications;

use Illuminate\Support\Facades\Notification;


class AdminController extends Controller
{
    //



    public function index()
    {

        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user') {

                $rooms = Room::all();
                $gallarys = Gallary::all();
                return view('admin.user', compact('rooms', 'gallarys'));
            } else if ($usertype == 'admin') {

                return view('admin.index');
            }
        } else {
            return redirect()->back();
        }
    }

    public function home()
    {
        $rooms = Room::all();

        $gallarys = Gallary::all();

        return view('home.index', compact('rooms', 'gallarys'));
    }

    public function create_room()
    {
        return view('admin.create_room');
    }

    public function add_room(Request $request)
    {
        $data = new Room();

        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price  = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;


        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('room', $imagename);
            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function view_room()
    {
        $datas = Room::all();
        return view('admin.view_room', compact('datas'));
    }

    public function room_delete($id)
    {

        $data = Room::find($id);

        $data->delete();
        return redirect()->back();
    }

    public function room_update($id)
    {


        $data = Room::find($id);
        return view('admin.room_update', compact('data'));
    }


    public function  idit_room(Request $request, $id)
    {

        $data = Room::find($id);

        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price  = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;


        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('room', $imagename);
            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();
    }


    public function  bookings()
    {

        $datas = Booking::all();
        return view('admin.booking', compact('datas'));
    }



    public function delete_booking($id)

    {
        $data = Booking::find($id);
        $data->delete();

        return redirect()->back();
    }



    public function approve_book($id)
    {

        $booking = Booking::find($id);

        $booking->status = 'Approve';

        $booking->save();

        return redirect()->back();
    }

    public function reject_book($id)
    {

        $booking = Booking::find($id);

        $booking->status = 'rejected';

        $booking->save();

        return redirect()->back();
    }



    public function view_gallary()
    {

        $gallarys = Gallary::all();
        return view('admin.gallary', compact('gallarys'));
    }


    public function upload_gallary(Request $request)
    {

        $data =  new Gallary;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('gallary', $imagename);
            $data->image = $imagename;

            $data->save();
            return redirect()->back();
        }
    }


    public function delete_gallary($id)
    {

        $data = Gallary::find($id);

        $data->delete();
        return redirect()->back();
    }

    public function all_messages()
    {

        $datas = Contact::all();

        return view('admin.all_messages', compact('datas'));
    }


    public function send_mail($id)
    {
        $data = Contact::find($id);
        return view('admin.send_mail',compact('data'));
    }

    public function mail(Request $request, $id)
    {

        $data = Contact::find($id);
        $details = [

            'greeting' => $request->greeting,
            'body' => $request->body,
            'action_text' => $request->action_text,
            'action_url' => $request->action_url,
            'endline' => $request->endline,


        ];

        Notification::send($data,new SendEmailNotification($details));



        return redirect()->back();

    }
}