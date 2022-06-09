@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="border border-2 mt-3">
                <div class="m-lg-3 m-0">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Họ và tên">
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select w-100 text-center py-1" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Phòng ban</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select w-100 text-center py-1" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Loại phạt</option>
                            <option value="0">Quên chấm công</option>
                            <option value="1">làm muộn</option>
                            <option value="2">Trễ deadline</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="fine_date" class="w-100 text-center">Ngày phạt</label>
                        <input type="date" class="form-control" name="fine_date" id="fine_date" placeholder="Ngày phạt">
                    </div>
                    <div class="text-center">
                        <label for="total_fine" class="w-100 text-center">Tổng tiền phạt</label> 
                        <input type="text" placeholder="000.000.000" name="total_fine"></div>
                    <div class="text-center my-3">
                        <button class="btn btn-primary px-5"> Lưu </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="border border-2 d-flex justify-content-center mt-3">
                <div class="my-5">
                    LIST USER
                </div>
            </div>
        </div>
    </div>
@endsection
