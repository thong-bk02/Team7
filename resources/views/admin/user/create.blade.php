@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">
            Thêm nhân viên
        </h2>
        <form action="{{ route('admin.user.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="row mx-lg-5 mx-2">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name">Tên nhân viên</label>
                        <input type="text" class="form-control " name="name" id="name" placeholder="Họ tên" required>
                        <div class="invalid-feedback">
                            Tên nhân viên không được để trống !
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="code">Mã nhân viên</label>
                        <input type="text" class="form-control" name="code" id="code" placeholder="Mã nhân viên" required>
                        <div class="invalid-feedback">
                            Mã nhân viên không được để trống !
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthday">Ngày sinh</label>
                        <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Họ tên"
                            required>
                        <div class="invalid-feedback">
                            Ngày sinh không được để trống !
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hometown">Quê quán</label>
                        <input type="text" class="form-control" name="hometown" id="hometown" placeholder="Quê quán"
                            required>
                        <div class="invalid-feedback">
                            Quê quán không được để trống !
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Số điện thoại"
                            required>
                        <div class="invalid-feedback">
                            Số điện thoại không được để trống !
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email@example.com"
                            required>
                        <div class="invalid-feedback">
                            Email không được để trống !
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="department">Phòng ban</label>
                        <input type="text" class="form-control" name="department" id="department" placeholder="Phòng ban"
                            required>
                        <div class="invalid-feedback">
                            Phòng ban không được để trống !
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="position">chức vụ</label>
                        <select class="custom-select" name="position">
                            <option value="Trainee">Thực tập sinh</option>
                            <option value="Employee">Nhân viên</option>
                            <option value="Project Manager">Quản lí dự án</option>
                            <option value="Leader">Trưởng Phòng</option>
                            <option value="CEO">CEO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="datestart">Ngày vào làm</label>
                        <input type="date" class="form-control" name="datestart" id="datestart" placeholder="" required>
                        <div class="invalid-feedback">
                            Ngày vào làm không được để trống !
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="" required>
                        <div class="invalid-feedback">
                            Mật khẩu không được để trống !
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-lg-5 mx-2">
                <button type="submit" class="btn btn-primary mx-3" value="Lưu">Lưu</button>
                <a href="{{ route('admin.user') }}" class="btn btn-secondary mx-3">Thoát</a>
            </div>

        </form>
    </div>
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection
