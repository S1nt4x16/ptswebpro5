@extends('layouts.main')
@section('title')
Welcome To Edit Siswa
@endsection

{{-- Valentinus Moreno --}}

@section('content')
<div class="card">
    <div class="card-header">
        <h3>
            Edit Siswa
        </h3>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('/students/update') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" value="{{ $s->name }}" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" name="gender" aria-label="Default select example" required>
                                <option value="">--Pilih--</option>
                                <option value="Laki-Laki" {{ $s->gender=='Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="Perempuan" {{ $s->gender=='Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="bp" value="{{ $s->bp }}" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="dob" value="{{ $s->dob }}" id="exampleInputPassword1">
                        </div>
                        <div>
                            <input type="reset" class="btn btn-md btn-warning">
                            <button type="submit" name="update" class="btn btn-md btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>    
        </div>   
    </div>
</div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
                        crossorigin="anonymous"></script>
@endsection