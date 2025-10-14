@extends('layouts.app')

@section('content')
<form action="{{ route('karyawan.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6>Formulir Tambah Karyawan</h6>
                </div>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="nip">NIP</label>
                        <input type="number" class="form-control" id="nip" name="nip" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama_karyawan">Nama Karyawan</label>
                        <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="gaji_karyawan">Gaji Karyawan</label>
                        <input type="number" class="form-control" id="gaji_karyawan" name="gaji_karyawan" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="" selected disabled hidden>--Pilih Jenis Kelamin--</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="foto">Upload Foto Karyawan</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
