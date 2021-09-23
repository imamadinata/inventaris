@extends ('layouts.app')
@section('konten')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Formulir Pengguna</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Pengguna
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        {!! Form::open(array('route' => 'users.store','method'=>'POST', 'role'=>'form')) !!}
                            <div class="form-group">
                                <label>Nama : </label>
                                {!! Form::text('name', null, array('placeholder' => 'Nama','class' => 'form-control' , 'required' => 'required')) !!}
                                <p class="help-block">Masukkan Nama</p>
                            </div>
                            <div class="form-group">
                                <label>Nama : </label>
                                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control' , 'required' => 'required')) !!}
                                <p class="help-block">Masukkan Alamat Email</p>
                            </div>
                            <div class="form-group">
                                <label>Password : </label>
                                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control' , 'required' => 'required')) !!}
                                <p class="help-block">Masukkan Password</p>
                            </div>
                            <div class="form-group">
                                <label>Password : </label>
                                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control', 'required' => 'required')) !!}
                                <p class="help-block">Masukkan Password Lagi</p>
                            </div>
                            <div class="form-group">
                                <label>Password : </label>
                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                <p class="help-block">Pilih Role</p>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        {!! Form::close() !!}
                    </di>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection