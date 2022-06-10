@extends('layouts.app')

@section('content')
    <form action="" method="">
        <div class="row mt-3 rounded">
            <div class="col-md-5">
                <select class="form-select text-center w-100 h-100" aria-label="Default select example">
                    <option selected>phòng ban</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col-md-5">
                <input type="text" placeholder="họ và tên nhân viên" class="w-100 text-center h-100">
            </div>
            <div class="col-md-2">
                <input type="submit" class="btn btn-outline-primary mx-md-3 mx-1" value="Tìm kiếm">
            </div>
        </div>
    </form>
    <div class="mt-3">
        <table class="table table-sm table-secondary table-bordered table-hover">
            <thead>
                <tr class="bg-dark text-center">
                    <th>Mã Nv</th>
                    <th>Họ tên</th>
                    <th>Phòng</th>
                    <th>Lương cơ bản</th>
                    <th>Trợ cấp</th>
                    <th>ngày công</th>
                    <th>Tổng phạt</th>
                    <th>Tổng thưởng</th>
                    <th>Tổng lương</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->code }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->room_name }}</td>
                        <td>{{ number_format($user->basic_salary) }}</td>
                        <td>{{ number_format($user->subsidize) }}</td>
                        <td>{{ number_format($user->total_days) }}</td>
                        <td>{{ number_format($user->total_fines) }}</td>
                        <td>{{ number_format($user->total_bonus) }}</td>
                        <td>{{ number_format($user->basic_salary * $user->total_days + $user->subsidize + $user->total_bonus - $user->total_fines ) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
