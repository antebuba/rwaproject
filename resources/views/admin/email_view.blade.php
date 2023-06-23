<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style>
        label
        {
            display:inline-block;
            width:200px;
        }   
        .klik
        {
            background-color: green;
            width: 90px;
            height: 40px;
            text-align: center;
            border-radius: 5px;
            color:white;
        } 
        .ika
        {
            background-color: white;
            width: 60%;
            height: 100%;
            border-radius: 20px;
            color:black;
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

           
        <div class = "container" align="center" style="padding-top: 100px;">

            @if(session()->has('message'))
            <div class = "alert alert-success">
                <button type="button" class = "close" data-dismiss="alert"></button>
                {{session()->get('message')}}
            </div>
        @endif
            <div class="ika">
            <form action="{{url('sendemail',$data->id)}}" method="POST" >
                    @csrf

                <div style="padding:15px;">
                    <label>Pozdrav</label>
                    <input type="text" style="color:black;" name = "greeting" required="">
                </div>

                <div style="padding:15px;">
                    <label>Tijelo</label>
                    <input type="text" style="color:black;" name = "body" required="">
                </div>

                
                <div style="padding:15px;">
                    <label>Akcijski Tekst</label>
                    <input type="number" style="color:black;" name = "actiontext" required="">
                </div>

                <div style="padding:15px;">
                    <label>Akcijski Url</label>
                    <input type="text" style="color:black;" name = "actionurl" required="">
                </div>

                <div style="padding:15px;">
                    <label>Završni Dio</label>
                    <input type="number" style="color:black;" name = "endpart" required="">
                </div>


                <div class="klik">
                    <input style="padding-top:7px;" type="submit" name = "btn">
                </div>
            </form>
        </div>

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