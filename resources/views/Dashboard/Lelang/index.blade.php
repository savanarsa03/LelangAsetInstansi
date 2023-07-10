@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Lelang</h1>
    </div>

    
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12 alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <a href="/dashboard/tambah-lelang/create" class="btn btn-success mb-4">Tambah Lelang</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Image</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Lelang as $men)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $men->nama_barang }}</td>
                        <td>{!! $men->deskripsi !!}</td>
                        <td>{!! $men->alamat!!}</td>
                        <td>{!! $men->kategori !!}</td>
                        <td>{!! $men->image !!}
                            
                        </td>

                        <td>
                            <a href="/dashboard/materi/{{ $men->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/materi/{{ $men->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/kategoribus/{{ $men->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')"><span
                                        data-feather="trash-2"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
