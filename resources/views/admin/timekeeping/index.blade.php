@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="">
            <div class="row border border-2 mt-3 rounded">
                <div class="col-md-4">
                    <select class="form-select text-center w-100 h-100" aria-label="Default select example">
                        <option selected>phòng ban</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="họ và tên nhân viên" class="w-100 text-center h-100">
                </div>
                <div class="col-md-2">
                    <input type="month" name="month" class="w-100 h-100">
                </div>
                <div class="col-md-2">
                    <input type="submit" class="btn btn-outline-primary mx-md-3 mx-1" value="Tìm kiếm">
                </div>
            </div>
        </form>
        <div class="mt-md-3 mt-2 usersList">
            <table class="table table-sm table-secondary table-bordered table-hover">
                <thead>
                    <tr class="bg-dark text-center">
                        <th>Id</th>
                        <th>Mã Nv</th>
                        <th>Họ tên</th>
                        <th>Phòng</th>
                        <th>Ngày công</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->code }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->room_name }}</td>
                            <td>{{ $user->total_days }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.user.show', $user->id) }}" class="mx-1">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
