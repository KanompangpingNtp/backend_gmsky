@extends('admin.layout.layout')
@section('admin_content')

<h3 class="text-center">จัดการเมนูแต่ละระบบ</h3><br>

<div class="d-flex justify-content-center align-items-center">
    <div class="col-md-6">
        <table class="table table-bordered mt-4">
            <thead class="text-center">
                <tr>
                    <th>#</th>
                    <th>ชื่อระบบงาน</th>
                    <th>จำนวนเมนู</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($EachAgencySystem as $agency)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $agency->project_name }}</td>
                    <td class="text-center">
                        @if($agency->menu_types_count)
                            {{ $agency->menu_types_count }} เมนู
                        @else
                            ยังไม่มีเมนู
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{route('ManageSystemMenuDetails',$agency->id)}}" class="btn btn-primary btn-sm">รายละเอียด</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
