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
        padding: 25px;
        padding-inline: 35px;
    }

    tr
    {
     border: 3px solid white;
    }

    td
    {
        padding: 7px;
        border: 1px solid white;
    }

   </style>


  </head>
  <body >


    @include('admin.header')



    @include('admin.sidebar')
     <div  class="page-content">

          <div  class="page-header">
              <div  class="container-fluid">



                  <table  class="table_deg">
                    <tr>
                  <th class="th_deg">Room_data</th>

                  <th class="th_deg" >Customer_data</th>

                  <th class="th_deg">Arrival_date</th>


                  <th class="th_deg">Room image</th>
                  <th class="th_deg">Delete</th>
                  <th class="th_deg">Approve</th>




                </tr>

                @foreach ( $datas as $data )

                    <tr>
                     <td>Id:{{ $data->room_id }}
                        <br>Title:{{ $data->room->room_title }}
                        <br>price:{{ $data->room->price }}$

                    </td>

                     <td>NAME&nbsp:&nbsp{{ $data->name }}
                        <br>email:{{ $data->email }}
                         <br>phone:{{ $data->phone }}
                    </td>


                     <td>start:{{ $data->start_date }}
                        <br>end:{{ $data->end_date }}
                        <br>status:

                        @if($data->status=='Approve')

                        <samp style="color: #3bff3b"> approve  </samp>

                        @endif

                        @if($data->status=='rejected')

                        <samp style="color: rgb(255, 0, 0)"> rejected  </samp>

                        @endif

                        @if($data->status=='waiting')

                        <samp style="color: rgb(255, 238, 0)">  waiting </samp>

                        @endif

                     </td>



                     <td>

                        <img style="width: 100%"  src="/room/{{ $data->room->image }}" alt="">
                     </td>

                     <td>
                        <a  onclick="return confirm('Are you sure to delete this ');"   class="btn btn-danger"  href="{{ url('delete_booking',$data->id) }}">Delete</a>
                     </td>


                     <td>
                        <span style="padding-bottom: 10px">
                         <a class="btn btn-success"  href="{{ url('approve_book',$data->id) }}">Approve</a>

                        </span>
                        <a class="btn btn-warning"  href="{{ url('reject_book',$data->id) }}">Rejected</a>
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
