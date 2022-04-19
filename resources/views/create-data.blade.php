<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Buat Data Siswa</title>
</head>
<body>
<center>
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h1 class="mt-3">Tambah Siswa Baru</h1>
                        <br>
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('wrongUsername'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        <form id="form-login" action="{{ route('siswa.buat-data') }}" method="post">
                            @csrf
                            <div>
                                <input class="mt-3 form-control form-control-lg @error('nama') is-invalid @enderror" name="nama[]" type="text"
                                       placeholder="Nama" value="{{ old('nama') }}" required>
                            </div>

                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('alamat') is-invalid @enderror" name="alamat[]" type="text"
                                       placeholder="Alamat" value="{{ old('alamat') }}" required>
                            </div>

                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
							
							<div>
                                <input class="mt-3 form-control form-control-lg @error('ortu') is-invalid @enderror" name="ortu[]" type="text"
                                       placeholder="Orang Tua" value="{{ old('ortu') }}" required>
                            </div>

                            @error('ortu')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
							
							<br>
							<div class="form-group row">
									<label class="col-sm-2 col-form-label"></label>
									<div class="col-sm-10">
										<a href="#" class="addsiswa btn btn-primary" style=" float: right">Tambah Jumlah Data</a>
									</div>
								</div>
							<div class="siswa"></div>
                        </form>
                        
						
                        <div class="mt-4 text-center submit-btn">
                            <button type="submit" class="btn btn-primary" form="form-login">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">
	$('.addsiswa').on('click', function(){
		addsiswa();
	});
	function addsiswa(){
		//backup
		//var siswa = '<div><div><input class="mt-3 form-control form-control-lg @error('nama') is-invalid @enderror" name="nama[]" type="text" placeholder="Nama" value="{{ old('nama') }}" required></div>@error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror<div><input class="mt-3 form-control form-control-lg @error('alamat') is-invalid @enderror" name="alamat[]" type="text" placeholder="Alamat" value="{{ old('alamat') }}" required></div>@error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror<div><input class="mt-3 form-control form-control-lg @error('ortu') is-invalid @enderror" name="ortu[]" type="text" placeholder="Orang Tua" value="{{ old('ortu') }}" required></div>@error('ortu')<div class="invalid-feedback">{{ $message }}</div>@enderror<br><div class="form-group row"><label class="col-sm-2 col-form-label"></label><div class="col-sm-10"><a href="#" class="remove btn btn-danger" style=" float: right">Kurangi Jumlah Data</a></div></div></div>';
		
		var siswa = '<div><div><input class="mt-3 form-control form-control-lg @error('nama') is-invalid @enderror" name="nama[]" type="text" placeholder="Nama" value="{{ old('nama') }}" required></div>@error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror<div><input class="mt-3 form-control form-control-lg @error('alamat') is-invalid @enderror" name="alamat[]" type="text" placeholder="Alamat" value="{{ old('alamat') }}" required></div>@error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror<div><input class="mt-3 form-control form-control-lg @error('ortu') is-invalid @enderror" name="ortu[]" type="text" placeholder="Orang Tua" value="{{ old('ortu') }}" required></div>@error('ortu')<div class="invalid-feedback">{{ $message }}</div>@enderror<br><div class="form-group row"><label class="col-sm-2 col-form-label"></label><div class="col-sm-10"><a href="#" class="remove btn btn-danger" style=" float: right">Kurangi Jumlah Data</a></div></div></div>';
		
		//var siswa = '<div></div>';
		$('.siswa').append(siswa);
	};
	$('.remove').live('click', function(){
		$(this).parent().parent().parent().remove();
	});
</script>



</body>
</html>
