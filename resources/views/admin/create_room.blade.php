<!DOCTYPE html>
<html>
  <head>
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
        padding-top: 40px;
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

                 <h1 style="font-size: 30px; font-weight: bold;">Add Rooms</h1>

                    <form action="{{ url('add_room') }}" method="Post" enctype="multipart/form-data">
                       @csrf

                      <div class="div_deg">
                      <label for="" >Room Title</label>
                       <input type="text"    name="title" >
                      </div>

                      <div class="div_deg">
                      <label for="">Description</label>
                      <textarea name="description" id="" cols="40" rows="2"></textarea>
                      </div>

                        <div class="div_deg">
                       <label for="">Price</label>
                           <input type="number" size="40" name="price"  >
                           </div>


            <div class="div_deg">
                <label for="">Room Type</label>
                <select name="type"  id="">

                    <option selected value="regular">Regular</option>
                    <option value="Premium">Premium</option>
                    <option value="Deluxe">Deluxe</option>

                </select>
            </div>

            <div class="div_deg">
                <label for="">Free Wifi</label>
                <select name="wifi" id="">

                    <option selected value="Yes">Yes</option>
                    <option value="No">No</option>

                </select>

            </div>


            <div class="div_deg">
                <label for="">Upload Image</label>
                <input type="file" name="image"  >
            </div>

            <div class="div_deg">
                <input class="btn btn-primary"    type="submit" value="Add Room">
            </div>


           </form>



          </div>
          </div>
        </div>
    </div>
       @include('admin.footer')
  </body>
</html>
