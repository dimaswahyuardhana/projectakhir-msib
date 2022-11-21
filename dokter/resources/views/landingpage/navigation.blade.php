<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="{{('/home')}}">
				<img src="{{url('images/logobaru.png')}}" alt="" class="img-fluid">
			</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
				aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icofont-navigation-menu"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarmain">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="{{('/home')}}">Beranda</a></li>
					<li class="nav-item"><a class="nav-link" href="{{('/about')}}">Tentang</a></li>
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Layanan<i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown02">
							<li><a class="dropdown-item" href="{{('/info')}}">Informasi Kesehatan</a></li>
							<li><a class="dropdown-item" href="{{('/obat')}}">Informasi Obat-obatan</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="{{('/contact')}}">Kontak</a></li>
					<li class="nav-item"><a class="nav-link" href="{{('/login')}}">Masuk</a></li>
				</ul>
			</div>
		</div>
	</nav>