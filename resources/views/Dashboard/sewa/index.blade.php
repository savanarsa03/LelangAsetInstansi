@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Sewa</h1>
    </div>

    
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12 alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <a href="/dashboard/tambah-sewa/create" class="btn btn-success mb-4">Tambah Sewa</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Image</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dashsewa as $sew)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sew->nama_barang}}</td>
                        <td>{!! $sew->deskripsi !!}</td>
                        <td>{!! $sew->alamat !!}</td>
                        <td>{!! $sew->image !!}
                            
                        </td>

                        <td>
                            <a href="/dashboard/sewa/{{ $sew->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/sewa/{{ $sew->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/sewa/{{ $sew->slug }}" method="post" class="d-inline">
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
