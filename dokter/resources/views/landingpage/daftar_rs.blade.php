@extends('landingpage.index')
@section('content')

<section class="section service-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Daftar Rumah Sakit</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Anda dapat melakukan pendafataran Rumah Sakit secara mandiri di seluruh Rumah Sakit yang tersebar di Indonesia</p>
					<form class="form-inline d-flex justify-content-center">
						<div class="form-group mx-sm-3 mb-2">
						  <input type="text" class="form-control" placeholder="Masukkan Nama RS">
						</div>
						<button type="submit" class="btn btn-danger mb-2">Cari Rumah Sakit</button>
					  </form>
				</div>
				
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-sm-6 ngezoom">
				<a href="{{('/hospital')}}">
				<div class="department-block mb-4 shadow bg-white rounded p-3">
					<img src="images/service/adammalik.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">RSUP H. Adam Malik</h4>
						<p class="mb-4">Kota Medan, Sumatera Utara</p>
					</div>
				</div>
				</a>
			</div>
			
			<div class="col-lg-3 col-sm-6 ngezoom">
				<a href="{{('/hospital')}}">
				<div class="department-block mb-4 shadow bg-white rounded p-3">
					<img src="images/service/adammalik.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">RSUP H. Adam Malik</h4>
						<p class="mb-4">Kota Medan, Sumatera Utara</p>
					</div>
				</div>
				</a>
			</div>

			<div class="col-lg-3 col-sm-6 ngezoom">
				<a href="{{('/hospital')}}">
				<div class="department-block mb-4 shadow bg-white rounded p-3">
					<img src="images/service/adammalik.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">RSUP H. Adam Malik</h4>
						<p class="mb-4">Kota Medan, Sumatera Utara</p>
					</div>
				</div>
				</a>
			</div>

			<div class="col-lg-3 col-sm-6 ngezoom">
				<a href="{{('/hospital')}}" class="linku">
				<div class="department-block mb-4 shadow bg-white rounded p-3">
					<img src="images/service/adammalik.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">RSUP H. Adam Malik</h4>
						<p class="mb-4">Kota Medan, Sumatera Utara</p>
					</div>
				</div>
				</a>
			</div>

			<div class="col-lg-3 col-sm-6 ngezoom">
				<a href="{{('/hospital')}}">
				<div class="department-block mb-4 shadow bg-white rounded p-3">
					<img src="images/service/adammalik.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">RSUP H. Adam Malik</h4>
						<p class="mb-4">Kota Medan, Sumatera Utara</p>
					</div>
				</div>
				</a>
			</div>
		</div>
	</div>
</section>

@endsection