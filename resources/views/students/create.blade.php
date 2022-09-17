@extends('layouts.main')
@section('title')
Welcome To Create Siswa
@endsection

{{-- Valentinus Moreno --}}

@section('content')
<div class="card">
    <div class="card-header">
        <h3>
            Tambah Siswa
        </h3>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('/students/store') }}" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" required autofocus>
                        </div>
                        <div class="mb-2">
                            <label for="gender" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" name="gender" aria-label="Default select example">
                                <option value="" selected>--Pilih--</option>
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="bp" class="form-label">Tempat Lahir</label>
                            <input type="text" name="bp" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label for="dob" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="dob" class="form-control" required>
                        </div>
                        <div>
                            <input type="reset" class="btn btn-md btn-warning">
                            <button type="submit" name="simpan" class="btn btn-md btn-primary">Simpan</button>
                        </div>
                     </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

</div>
</div>
</div>
@endsection