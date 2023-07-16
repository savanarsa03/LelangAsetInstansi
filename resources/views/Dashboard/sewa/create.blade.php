@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Tambah Sewa</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/tambah-sewa" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="input_sewa" class="form-label">Nama Barang</label>
                <input type="text" class="form-control @error('input_sewa') is-invalid @enderror" id="nama_barang"
                    name="nama_barang" required autofocus value="{{ old('input_sewa') }}">
                @error('input_sewa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sluga" class="form-label">Deskripsi</label>
                <input type="text" class="form-control @error('sluga') is-invalid @enderror" id="deskripsi" name="deskripsi"
                    required value="{{ old('sluga') }}">
                @error('sluga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slugb" class="form-label">Alamat Barang</label>
                <input type="text" class="form-control @error('slugb') is-invalid @enderror" id="alamat" name="alamat"
                    required value="{{ old('slugb') }}">
                @error('slugb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <!-- <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                @error('deskripsi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
                <trix-editor input="deskripsi"></trix-editor>
            </div> -->
            <div class="mb-3">
                <label for="formFile" class="form-label">Gambar</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-5">Tambah</button>
        </form>
    </div>
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            
            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
