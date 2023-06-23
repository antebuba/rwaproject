<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Naruči se na pregled</h1>

        <form class="main-form" action="{{url('appointment')}}" method="POST">

            @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="name" class="form-control" placeholder="Ime i prezime">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="Korisničko ime...">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" name="date" class="form-control">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor" id="departement" class="custom-select">
                        <option value="Opće zdravlje">Opće zdravlje</option>
                        <option value="Kardiologija">Kardiologija</option>
                        <option value="Zubar">Zubar</option>
                        <option value="Neurologija">Neurologija</option>
                        <option value="ortopedija">Ortopedija</option>
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="number" class="form-control" placeholder="Telefon..">
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Ostavi poruku..."></textarea>
                </div>
            </div>

            <button class="btn btn-primary" type="submit" style="color:black;">Podnesi zahtjev</button>
        </form>
    </div>
</div>