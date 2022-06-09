@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">
            Thông tin nhân viên:
        </h2>
        <form action="" method="">
            <div class="row mx-lg-5 mx-2">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name">Tên nhân viên</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Họ tên"
                            value="{{ $users->name }}">
                    </div>
                    <div class="form-group">
                        <label for="code">Mã nhân viên</label>
                        <input type="text" class="form-control" name="code" id="code" placeholder="Mã nhân viên"
                            value="{{ $users->code }}">
                    </div>
                    <div class="form-group">
                        <label for="birthday">Ngày sinh</label>
                        <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Họ tên"
                            value="{{ $users->birthday }}">
                    </div>
                    <div class="form-group">
                        <label for="hometown">Quê quán</label>
                        <input type="text" class="form-control" name="hometown" id="hometown" placeholder="Quê quán"
                            value="{{ $users->hometown }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Số điện thoại"
                            value="{{ $users->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email@example.com"
                            value="{{ $users->email }}">
                    </div>
                    <div class="form-group">
                        <label for="position">Chức vụ</label>
                        <input type="text" class="form-control" name="position" id="position" placeholder="Chức vụ"
                            value="{{ $users->position }}">
                    </div>
                    <div class="form-group">
                        <label for="personnel">Phòng ban</label>
                        <input type="text" class="form-control" name="personnel" id="personnel" placeholder="Phòng ban"
                            value="{{ $users->department }}">
                    </div>
                </div>
            </div>

            <div class="mx-lg-5 mx-2">
                <input type="submit" class="btn btn-primary mx-3" value="Lưu">
                <a href="{{ route('admin.user') }}" class="btn btn-secondary mx-3">Thoát</a>
            </div>

        </form>
    </div>
@endsection
