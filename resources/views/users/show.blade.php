@extends ('layouts.app')
@section('konten')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Detail Pengguna</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            {{ $user->name }}
        </div>
        <div class="panel-body">
            <div class="panel-group" id="accordion">
                <h4>Nama : {{ $user->name }}</h4>
            </div>
            <div class="panel-group" id="accordion">
                <h4>Email : {{ $user->email }}</h4>
            </div>
            <div class="panel-group" id="accordion">
                <h4>Roles :</h4>
                <p>
                    @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
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