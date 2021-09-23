@extends ('layouts.app')
@section('konten')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Detail Role</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            {{ $role->name }}
        </div>
        <div class="panel-body">
            <div class="panel-group" id="accordion">
                <h4>Ijin Akses :</h4>
                <p>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)
                        <label class="label label-success">{{ $v->name }}</label>
                    @endforeach
                @endif
                </p>
            </div>
        </div>
    </div>
    <div class="pull-left">
        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
    </div>
</div>
@endsection