<!DOCTYPE html>
<html>
  <head>

  <base href="/public">

   @include('admin.css')

   <style type="text/css">
    label
    {
        display: inline-block;
        width: 100px;

    }

    .div_deg
    {
        padding-top: 30px;



    }

    .div_center
    {
        text-align:left;
        padding-top: 30px;
        padding-left: 200px;

    }

    form div > input, form div > select , form div >textarea {

        width: 400px;
        padding-left: 10px;
      }


   </style>
  </head>
  <body>

    @include('admin.header')


    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


          <div class="div_center">

                 <h1 style="font-size: 30px; font-weight: bold;">Update Rooms</h1>

                    <form action="{{ url('idit_room',$data->id) }}" method="Post" enctype="multipart/form-data">
                       @csrf

                      <div class="div_deg">
                      <label for="" style="width: 16%" >Update Room Title</label>
                       <input type="text"    name="title" value="{{$data->room_title}}" >
                      </div>

                      <div class="div_deg">
                      <label  style="width: 16% ;"   for="">Update Description</label>
                      <textarea name="description" id="" cols="0" rows="1">{{$data->description}}</textarea>
                      </div>

                        <div class="div_deg">
                       <label   style="width: 16%" for="">Update Price</label>
                           <input type="number" size="40" name="price" value="{{ $data->price }}" >
                           </div>


            <div class="div_deg">
                <label  style="width: 16%" for="">Update Room Type</label>
                <select name="type"  id="">

                    <option selected style="width: 16%" value="{{ $data->room_type }}">{{ $data->room_type }}</option>

                    <option  value="regular">Regular</option>
                    <option value="Premium">Premium</option>
                    <option value="Deluxe">Deluxe</option>

                </select>
            </div>


            <div class="div_deg">
                <label style="width: 16%"  for="">Update Free Wifi</label>
                <select name="wifi" id="">
                    <option  selected  value="{{ $data->wifi }}">{{ $data->wifi }}</option>
                    <option  value="Yes">Yes</option>
                    <option value="No">No</option>

                </select>

            </div>

            <div   class="div_deg">
                <label style="margin-left: 30%" for="">Current Image</label>
                 <img  style="margin-left:20%"   width="300"  src="/room/{{ $data->image }}" alt="">
            </div>



            <div class="div_deg">
                <label  style="margin-left: 13%" for="">Update Image</label>
                <input type="file" name="image"  >
            </div>

            <div class="div_deg">
                <input class="btn btn-primary"  style="margin-left: 13%"  type="submit" value="Update Room">
            </div>


           </form>



          </div>
          </div>
        </div>
    </div>
       @include('admin.footer')
  </body>
</html>
