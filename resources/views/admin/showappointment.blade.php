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
                        <th style="padding: 10px">Ime kupca</th>
                        <th style="padding: 10px">Email</th>
                        <th style="padding: 10px">Telefon</th>
                        <th style="padding: 10px">Ime Doktora</th>
                        <th style="padding: 10px">Datum</th>
                        <th style="padding: 10px">Poruka</th>
                        <th style="padding: 10px">Status</th>

                        <th style="padding: 10px">Odobriti</th>
                        <th style="padding: 10px">Otkazati</th>
                        
                    </tr>
                    @foreach($data as $appoint)
                    <tr align="center" style="background-color: skyblue">
                        <td>{{ $appoint->name}}</td>
                        <td>{{ $appoint->email}}</td>
                        <td>{{ $appoint->phone}}</td>
                        <td>{{ $appoint->doctor}}</td>
                        <td>{{ $appoint->date}}</td>
                        <td>{{ $appoint->message}}</td>
                        <td>{{ $appoint->status}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Odobreno</a>
                        </td>
                        <td>
                            <a class="btn btn-danger "href="{{url('canceled',$appoint->id)}}">Otkazano</a>
                        </td>


                        

                    </tr>

                    @endforeach
                </table>

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