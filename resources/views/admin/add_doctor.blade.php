<!DOCTYPE html>
<html lang="en">
  <head>
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
            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                <div style="padding:15px;">
                    <label>Ime Doktora</label>
                    <input type="text" style="color:black;" name = "name" placeholder="Upisi ime" required="">
                </div>

                <div style="padding:15px;">
                    <label>Telefon</label>
                    <input type="number" style="color:black;" name = "number" placeholder="Unesi broj" required="">
                </div>

                <div style="padding:15px;">
                    <label>Specijalizacija</label>
                    <select nema="speciality" style="color:black; width: 200px;" required="">
                        <option>--Odaberi--</option>
                        <option value="skin">Za kožu</option>
                        <option value="heart">Za srce</option>
                        <option value="eye">Za oči</option>
                        <option value="nose">Za nos</option>
                    </select>
                </div>
                <div style="padding:15px;">
                    <label>Broj sobe</label>
                    <input type="number" style="color:black;" name = "room" placeholder="Unesi broj sobe" required="">
                </div>

                <div style="padding:15px;">
                    <label>Slika</label>
                    <input type="file" name = "file" required="">
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