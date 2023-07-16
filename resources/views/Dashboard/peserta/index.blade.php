@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Peserta</h1>
    </div>

    
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12 alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-10">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Address</th>
                    <th scope="col">Jenis Rekening</th>
                    <th scope="col">Nomor Rekening</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peserta as $pes)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pes->inputnama4 }}</td>
                        <td>{{ $pes->inputNIK }}</td>
                        <td>{{ $pes->inputEmail4 }}</td>
                        <td>{{ $pes->nomor-hp }}</td>
                        <td>{{ $pes->inputAddress }}</td> 
                        <td>{{ $pes->jenis-rekening }}</td>
                        <td>{{ $pes->nomor-rekening }}</td>
                        <td>
                            {{-- <a href="/dashboard/peserta/{{ $pes->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/peserta/{{ $pes->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a> --}}
                            <form action="/dashboard/peserta/{{ $pes->slug }}" method="post" class="d-inline">
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