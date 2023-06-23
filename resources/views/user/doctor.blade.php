<div class="page-section">
    <div class="container">
      <h1 id="doc" class="text-center mb-5 wow fadeInUp">Naši doktori</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        
        @foreach($doctor as $doctors)

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img style="height:300px !important" src="doctorimage/{{$doctors->image}}" alt="">
              
            </div>
            <div class="body">
                <p class="text-xl mb-0">{{$doctors->name}}</p>
                <span class="text-sm text-grey">{{$doctors->speciality}}</span>
            </div>
          </div>
        </div>

        @endforeach
        
      </div>
    </div>
  </div>