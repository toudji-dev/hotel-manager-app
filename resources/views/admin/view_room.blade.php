<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        .table_deg {
            border: 2px solid rgb(255, 247, 247);
            margin: auto;
            width: 100%;
            text-align: center;
            margin-top: 40px;

        }

        .th_deg {
            background: rgb(219, 218, 218);
            padding: 15px;
        }

        tr {
            border: 3px solid white;
        }

        td {
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
                        <th class="th_deg">Room Title</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Wifi</th>
                        <th class="th_deg">Room</th>
                        <th class="th_deg">Image</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Update</th>





                    </tr>


                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->room_title }}</td>
                            <td>{!! Str::limit($data->description, 150) !!}</td>
                            <td>{{ $data->price }}DA</td>
                            <td>{{ $data->wifi }}</td>
                            <td>{{ $data->room_type }}</td>

                            <td>
                                <img width="120" src="room/{{ $data->image }}" </td>

                            <td>
                                <a onclick="return confirm('Are you sure to delete this room')" class="btn btn-danger"
                                    href="{{ url('room_delete', $data->id) }}">Delete</a>

                            </td>

                            <td>
                                <a class="btn btn-warning" href="{{ url('room_update', $data->id) }}">Update</a>

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
