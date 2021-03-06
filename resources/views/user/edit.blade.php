@extends('layouts.default')
@section('content')
    <form action="{{route('user.update', $user)}}" method="post">
        {{--防止伪造表单--}}
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header">
                用户注册
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">昵称</label>
                    <input type="text" class="form-control" name="name" value="{{$user['name']}}" autocomplete="off" />
                </div>
                <div class="form-group">
                    <label for="">密码</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="">确认密码</label>
                    <input type="password" class="form-control" name="password_confirmation">
                    <small id="helpId" class="text-muted">两次密码必须一致</small>
                </div>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-success">确定修改</button>
            </div>
        </div>
    </form>
@endsection
