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

                <h1 style="font-size: 30px; font-weight: bold;">Mail Send to {{ $data->name }}</h1>

                   <form action="{{ url('mail',$data->id) }}" method="Post" >
                      @csrf

                     <div class="div_deg">
                     <label for="" >Greeting</label>
                      <input type="text"    name="greeting" >
                     </div>

                     <div class="div_deg">
                     <label for="">Mail Body</label>
                     <textarea name="body"  cols="40" rows="2"></textarea>
                     </div>

                      


           <div class="div_deg">
               <label for="">Action Text</label>
               <input type="text"  name="action_text" >

           </div>

           <div class="div_deg">
            <label for="">Action Url</label>
            <input type="text"  name="action_url" >

        </div>

           <div class="div_deg">
            <label for="">End Line</label>
            <input type="text"  name="endline" >

        </div>


           

           <div class="div_deg">
               <input class="btn btn-success"    type="submit" value="Send Mail">
           </div>


          </form>



         </div>




          </div>
        </div>
    </div>

    @include('admin.footer')
  </body>
</html>
