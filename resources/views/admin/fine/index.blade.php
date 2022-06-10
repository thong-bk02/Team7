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
    <div class="row border-top border-dark border-3 mt-3">
        <div class="col-md-3">
            <div class="border border-2">
                <div class="m-lg-3 m-0">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Họ và tên" name="name">
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select w-100 text-center py-1" id="floatingSelect"
                            aria-label="Floating label select example">
                            <option selected>Phòng ban</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Lí do phạt" name="penalty_reason">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="fine_date" class="w-100 text-center">Ngày phạt</label>
                        <input type="date" class="form-control" name="fine_date" id="fine_date" placeholder="Ngày phạt">
                    </div>
                    <div class="text-center">
                        <label for="total_fine" class="w-100 text-center">Tổng tiền phạt</label>
                        <input type="text" placeholder="000.000.000" name="total_fine">
                    </div>
                    <div class="text-center my-3">
                        <button type="submit" class="btn btn-primary px-5"> Lưu </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <table class="table table-sm table-secondary table-bordered table-hover">
                <thead>
                    <tr class="bg-dark text-center">
                        <th>Mã Nv</th>
                        <th>Họ tên</th>
                        <th>Phòng</th>
                        <th>Ngày phạt</th>
                        <th>Lí do</th>
                        <th>Tổng phạt</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->code }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->room_name }}</td>
                            <td>{{ $user->penalty_day }}</td>
                            <td>{{ $user->penalty_reason }}</td>
                            <td>{{ number_format($user->total_fines) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
