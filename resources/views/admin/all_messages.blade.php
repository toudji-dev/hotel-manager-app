<!DOCTYPE html>
<html>
  <head>
  @include('admin.css')

  <style type="text/css">
    .table_deg
    {
        border: 2px solid rgb(255, 247, 247);
        margin: auto;
        width: 100%;
        text-align: center;
        margin-top: 40px;

    }

    .th_deg
    {
        background: rgb(219, 218, 218);
        padding: 15px;
    }

    tr
    {
     border: 3px solid white;
    }

    td
    {
        padding: 20px;
    }
   </style>
  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


            <table class="table_deg">
                <tr>
                  <th class="th_deg">name</th>
                  <th class="th_deg">email</th>
                  <th class="th_deg" >phone</th>
                  <th class="th_deg">message</th>
                  <th class="th_deg">Send Email</th>


                </tr>


                @foreach ($datas as $data)

                <tr>
                  <td>{{ $data->name}}</td>
                  <td>{{$data->email}}</td>
                  <td>{{ $data->phone }}DA</td>
                  <td>{{ $data->message }}</td>
                  <td>
                    <a class="btn btn-success" href="{{ url('send_mail',$data->id) }}">send mail</a>
                  </td>

                </tr>

                @endforeach




               </table>



          </div>
         </div>
        </div>

    @include('admin.footer')
  </body>
</html>
