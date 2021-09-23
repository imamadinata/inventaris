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
                Edit Role
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        {!! Form::model($role, ['method'=>'PATCH', 'route'=>['roles.update',$role->id]]) !!}
                            <div class="form-group">
                                <label>Nama : </label>
                                {!! Form::text('name', null, array('placeholder' => 'Nama','class' => 'form-control' , 'required' => 'required')) !!}
                                <p class="help-block">Masukkan Nama</p>
                            </div>
                            <div class="form-group">
                                <label>Ijin Akses : </label> <br />
                                @foreach($permission as $value)
                                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                    {{ $value->name }}</label>
                                <br/>
                                @endforeach
                                <p class="help-block">Pilih Ijin Akses</p>
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