@extends('layout');
@section('content');
    <div class="container">
        <div class="col-md-3"></div>
        <div class="panel panel-color panel-primary col-md-6">
            <div class="panel-heading">
                <h3 class="text-center m-t-2" style="color: #ffffff;">Daftar Akun&nbsp;<strong>Ikan Koi</strong> </h3>
            </div>
            @if(Session::has('success'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    </div>
                </div>
                @endif
            <div class="panel-body">
                <form method="POST" action="register_akun">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
                    </div>
                    @if($errors->has('nama'))<p>{{$errors->first('nama')}}</p>@endif
                    <div class="form-group">
                        <label for="no">No_Telp/HP</label>
                        <input type="number" class="form-control" name="No_Telp" placeholder="Masukkan Nomer Hp Anda">
                    </div>
                    @if($errors->has('No_Telp'))<p>{{$errors->first('No_Telp')}}</p>@endif
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="Alamat"></textarea>
                    </div>
                    @if($errors->has('Alamat'))<p>{{$errors->first('Alamat')}}</p>@endif
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="user">
                    </div>
                    @if($errors->has('user'))<p>{{$errors->first('user')}}</p>@endif
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    @if($errors->has('password'))<p>{{$errors->first('password')}}</p>@endif
                    <div class="form-group text-right">
                        <div class="col-xs-12">
                            <a href="../" class="btn btn-success w-lg">Kembali kehalaman awal</a>
                            <button name="save" class="btn btn-info w-lg" type="submit">Masuk</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
