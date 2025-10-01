@extends('layouts/app')
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
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sisfo Pegawai</h6>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-primary mb-3" href="{{ route('departemen.create') }}">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Departemen</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($departemen as $index => $d)
                                        <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $d->nama_departemen }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary" 
                                                   href="{{ url('departemen/'.$d->kodedepartemen.'/edit') }}">
                                                   Edit
                                                </a>   
                                                <form action="{{ url('departemen/'.$d->kodedepartemen)}}" 
                                                      method="POST" style="display:inline-block">
                                                    @csrf
                                                    @method('Delete')
                                                    <button class="btn btn-sm btn-danger" 
                                                            onclick="return confirm('Apakah Anda Ingin Menghapus Data ?')">
                                                        Delete
                                                    </button>
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

            <!-- Footer -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

</body>
@endsection
