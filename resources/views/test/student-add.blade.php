@extends('Layouts.main')
@section('title', 'student-add')

@section('content')
    <h1>Tambah Data Siswa</h1>

    @if ($errors->any())
    <div class="alert alert-danger" id="validate">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="mt-5 col-8">
        <form action="student" method="POST" enctype="multipart/form-data"> 
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="nama_siswa" class="form-control" id="name" >
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" >
                    <option value="">Select One</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nis">NIS</label>
                <input type="text" name="nis" class="form-control" id="nis" >
            </div>

            <div class="mb-3">
                <label for="class-id">Class</label>
                <select name="class_id" id="class" class="form-control" >
                    <option value="">Select One</option>
                    @foreach ($kelas as $data)
                    <option value="{{$data->id}}">{{$data->nama_kelas}}</option>
                    @endforeach
                    
                </select>
            </div>

            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="nis" >
            </div>

            <div class="my-3">
                <label for="photo">Foto</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="photo" name="photo">
                  </div>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>

       
        </form>
    </div>
@endsection

{{-- <script>
    setTimeout(() => {
  const validate = document.getElementById('validate');
  validate.style.visibility = 'hidden';
}, 5000);
</script> --}}