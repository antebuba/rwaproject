<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;

        }
    </style>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding:100px">
                @if(session()->has('message'))
            <div class = "alert alert-success">
                <button type="button" class = "close" data-dismiss="alert"></button>
                {{session()->get('message')}}
            </div>
        @endif
                <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding:15px;">
                        <label>Ime doktora</label>
                        <input type="text" style="color:black" name="name" value="{{$data->name}}">
                    </div>

                    <div style="padding:15px;">
                        <label>Broj Doktora</label>
                        <input type="text" style="color:black" name="phone" value="{{$data->phone}}">
                    </div>

                    

                    <div style="padding:15px;">
                        <label>Specijalizacija</label>
                        <input type="text" style="color:black" name="speciality" value="{{$data->speciality}}">
                    </div>

                    <div style="padding:15px;">
                        <label>Broj sobe</label>
                        <input type="text" style="color:black" name="room" value="{{$data->room}}">
                    </div>

                    <div style="padding:15px";>
                        <label>Stara slika</label>
                        <img height="150" width="150" src="doctorimage/{{$data->image}}">    
                    </div>

                    <div  style="padding:15px;">
                        <label>Promijeniti sliku</label>

                        <input type="file" name = "file">
                    </div>

                    <div  style="padding:15px;">
                        
                        <input type="submit" class = "btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>