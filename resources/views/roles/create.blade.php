@extends ('layouts.app')
@section('konten')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Formulir Role</h1>
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
                Tambah Role
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        {!! Form::open(array('route' => 'roles.store','method'=>'POST', 'role'=>'form')) !!}
                            <div class="form-group">
                                <label>Nama Role: </label>
                                {!! Form::text('name', null, array('placeholder' => 'Nama Role','class' => 'form-control' , 'required' => 'required')) !!}
                                <p class="help-block">Masukkan Nama Role</p>
                            </div>
                            <div class="form-group">
                                <label>Izin Akses: </label><br />
                                @foreach($permission as $value)
                                <label>
                                    {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                    {{ $value->name }}
                                </label>
                                <br/>
                                @endforeach
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