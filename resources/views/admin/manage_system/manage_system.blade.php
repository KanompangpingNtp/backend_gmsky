@extends('admin.layout.layout')
@section('admin_content')

<h3 class="text-center">จัดการระบบงาน</h3><br>

<div class="d-flex justify-content-center align-items-center">
    <div class="col-md-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            สร้างชื่อระบบงาน
        </button>

        <table class="table table-bordered mt-4">
            <thead class="text-center">
                <tr>
                    <th>#</th>
                    <th>ชื่อระบบงาน</th>
                    <th>การจัดการ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($EachAgencySystem as $agency)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $agency->project_name }}</td>
                    <td class="text-center">
                        <a href="" class="btn btn-warning btn-sm">แก้ไข</a>
                        <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">ปิดการใช้งานระบบ</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin-top:5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างชื่อระบบงาน</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('CreateNewSystem') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="project_name" class="form-label">ชื่อระบบงาน</label>
                        <input type="text" class="form-control" id="project_name" name="project_name" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
            </form>
        </div>
    </div>
</div>



@endsection
