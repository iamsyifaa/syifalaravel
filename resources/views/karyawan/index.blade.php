@extends('layouts.app')
@section('content')

@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Karyawan</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sisfo Pegawai</h6>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-primary mb-3" href="{{ route('karyawan.create') }}">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>NIP</th>
                                            <th>Nama Karyawan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Gaji Karyawan</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach ($karyawan as $k)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td> <!-- No -->

                                                <!-- Foto -->
                                                <td>
                                                    @if($k->foto)
                                                        <img src="{{ asset('foto/' . $k->foto) }}" width="80">
                                                    @endif
                                                </td>

                                                <td>{{ $k->nip }}</td> <!-- NIP -->
                                                <td>{{ $k->nama_karyawan }}</td> <!-- Nama Karyawan -->
                                                <td>{{ $k->jenis_kelamin }}</td> <!-- Jenis Kelamin -->
                                                <td>{{ $k->gaji_karyawan }}</td> <!-- Gaji -->
                                                <td>{{ $k->alamat }}</td> <!-- Alamat -->

                                                <td> <!-- Aksi -->
                                                    <a href="{{ url('karyawan/'.$k->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                                                    <form onsubmit="return confirm('Yakin ingin menghapus data?')" 
                                                        action="{{ url('karyawan/'.$k->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

</body>
@endsection
