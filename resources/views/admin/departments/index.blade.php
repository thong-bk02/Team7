@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Stt</th>
                    <th scope="col">Tên phòng ban</th>
                    <th scope="col">Số lượng nhân viên</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                    <tr class="border-bottom border-dark">
                        <th scope="row">{{ $department->id }}</th>
                        <td>
                            {{ $department->room_name }}
                        </td>
                        <td>
                            {{ $department->employee }}
                        </td>
                        <td>
                            {{ $department->created_at }}
                        </td>
                        <td>
                            <a href="#" class="mx-1"><i class="fa-solid fa-eye"></i></a>
                            <a href="#" class="mx-1"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
