@extends('landingpage.index')
@section('content')
<div class="container">
    <h2>DETAIL PEMESANAN</h2>
	<div class="row">
		<div class="col-md-8">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah Barang</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
		</div>
		<div class="col-md-4">
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="namaLengkap" type="text" placeholder="Nama Lengkap" data-sb-validations="required" />
                        <label for="namaLengkap">Nama Lengkap</label>
                        <div class="invalid-feedback" data-sb-feedback="namaLengkap:required">Nama Lengkap is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="alamat" type="text" placeholder="Alamat" style="height: 10rem;" data-sb-validations="required"></textarea>
                        <label for="alamat">Alamat</label>
                        <div class="invalid-feedback" data-sb-feedback="alamat:required">Alamat is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="Email" data-sb-validations="email" />
                        <label for="email">Email</label>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email Email is not valid.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nomorHandphone" type="text" placeholder="Nomor Handphone" data-sb-validations="required" />
                        <label for="nomorHandphone">Nomor Handphone</label>
                        <div class="invalid-feedback" data-sb-feedback="nomorHandphone:required">Nomor Handphone is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="pilihMetodePembayaran" aria-label="Pilih Metode Pembayaran">
                            <option value="--- Pilih Metode Pembayaran ---">--- Pilih Metode Pembayaran ---</option>
                            <option value="COD">COD</option>
                            <option value="M-Banking">M-Banking</option>
                            <option value="E-Wallet">E-Wallet</option>
                        </select>
                        <label for="pilihMetodePembayaran">Pilih Metode Pembayaran</label>
                    </div>
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            <p>To activate this form, sign up at</p>
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
                    </div>
                </form>
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
		</div>
	</div>
</div>
@endsection
