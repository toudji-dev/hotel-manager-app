<!DOCTYPE html>
<html>

<head>







    @include('admin.css')
</head>

<body>


    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <center>
                    <h1 style="font-size: 40px; font-weight: bolder;color: white">Gallary</h1>

                    <div class="row">
                        @foreach ($gallarys as $gallary)
                            <div class="col-md-4">
                                <img style="height: 200px; width: 300px;" src="/gallary/{{ $gallary->image }}">

                                <a href="{{ url('delete_gallary', $gallary->id) }}" class="btn btn-danger">Delete</a>

                            </div>
                        @endforeach
                    </div>
                    <form action="{{ url('upload_gallary') }}" method="Post" enctype="multipart/form-data">
                        @csrf

                        <div style="padding: 30px">

                            <label style="color: white; font-weight:bold" for="">Upload Image</label>
                            <input type="file" name="image" required>


                            <input class="btn btn-primary" type="submit" value="Add Image">
                        </div>
                            
                        

                    </form>
                </center>

            </div>
        </div>
    </div>

    @include('admin.footer')
</body>

</html>
