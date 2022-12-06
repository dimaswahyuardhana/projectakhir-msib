@extends('landingpage.index')
@section('content')
<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="{{url('images/about/cekin.png')}}" alt="" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg">RSUP H. Adam Malik</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Check-In Rumah Sakit</h2>
					<p class="mb-4">Silahkan Lengkapi Data Diri Anda Agar Permintaan Anda Dapat Diproses</p>
					     <form id="#" class="appoinment-form" method="post" action="#">
                    <div class="row">
                    <div class="col-lg-6">
                            <div class="form-group">
                                <label>Rumah Sakit</label>
                                <input name="hospital" id="hospital" type="text" class="form-control" placeholder="RSUP H. Adam Malik" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nomor Rekam Medis</label>
                                <input name="rekam" id="rekam" type="Number" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Dokter</label>
                                <select class="form-control" id="dokter">
                                  <option>-- Pilih Dokter --</option>
                                  <option>Fadli</option>
                                  <option>Dimas</option>
                                  <option>Syahrizal</option>
                                  <option>Nana</option>
                                  <option>Rakay</option>
                                  <option>Izhar</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Kamar</label>
                                <select class="form-control" id="kamar">
                                  <option>-- Pilih Kamar --</option>
                                  <option>Rawat Jalan (Rp. 0)</option>
                                  <option>Kelas III (Rp. 500.000 / Malam)</option>
                                  <option>Kelas II (Rp. 1.000.000 / Malam)</option>
                                  <option>Kelas I (Rp. 1.500.000 / Malam)</option>
                                  <option>VIP (Rp. 2.000.000 / Malam)</option>
                                  <option>VVIP (Rp. 3.000.000 / Malam)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="name" id="name" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nomor HP/WA</label>
                                <input name="phone" id="phone" type="Number" class="form-control" >
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input name="tgl_lahir" id="tgl_lahir" type="date" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tanggal Check-In di RS</label>
                                <input name="tgl_checkin" id="tgl_checkin" type="date" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Waktu Check-In di RS</label>
                                <input name="time" id="time" type="text" class="form-control" placeholder="Waktu Check-In di RS">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Pembayaran</label>
                                <select class="form-control" id="kamar">
                                  <option>-- Pilih Metode Pembayaran --</option>
                                  <option>Saat Check-in Ulang di RS</option>
                                  <option>BNI (109812485 - A.N RSUP H. Adam Malik)</option>
                                  <option>BCA (109812485 - A.N RSUP H. Adam Malik)</option>
                                  <option>BRI (109812485 - A.N RSUP H. Adam Malik)</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <h4>Total</h4>
                            <div class="alert alert-success" role="alert">
                                <h3>Rp. 0</h3>
                              </div>
                        </div>

                    </div>

                    <a class="btn btn-md btn-danger btn-round-full float-right" href="{{('appoinment')}}" >Check-In<i class="icofont-simple-right ml-2  "></i></a>
                </form>
            </div>
			</div>
		</div>
	</div>
</section>
@endsection
