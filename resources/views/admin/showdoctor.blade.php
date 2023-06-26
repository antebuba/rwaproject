<!DOCTYPE html>
<html lang="en">
  <head>
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
            <div align="center" style="padding-top:100px">
                <table>
                    <tr style="background-color: black;">
                        <th style="padding: 10px">Ime Doktora</th>
                        <th style="padding: 10px">Telefon</th>
                        <th style="padding: 10px">Specijalizacija</th>
                        <th style="padding: 10px">Broj sobe</th>
                        <th style="padding: 10px">Slika</th>

                        <th style="padding: 10px">Izbrisi</th>
                        <th style="padding: 10px">Ažuriraj</th>
                        
                    </tr>

                    @foreach($data as $doctor)
                    <tr align="center" style="background-color:white; color:black">
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room}}</td>
                        <td><img height="100" width="100"src="doctorimage/{{$doctor->image}}"></td>
                        
                        <td><a onclick="return confirm('Jeste li sigurni da zelite izbrisati')"class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Izbrisi</td>
                        <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Ažuriraj</td>
                    </tr>
                    @endforeach
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