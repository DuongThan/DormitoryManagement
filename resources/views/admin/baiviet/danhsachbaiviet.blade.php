@extends('admin.template')
@section("content")
<section class="content">
    <div class="header">
        <div class="col-md-12">
            <h3 class="header-title">Danh sách bài viết</h3>
        </div>
    </div>
    <div class="main-content">
        <table id="datatable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width:30px">Mã</th>
                    <th>Loại phòng</th>
                    <th>Số phòng</th>
                    <th>Họ tên</th>
                    <th>Ngày đến</th>
                    <th>Ngày đi</th>
                    <th>Số khách</th>
                    <th>Email</th>
                    <th>Giá phòng (₫)</th>
                    <th>Ngày đặt</th>
                    <th>Trạng thái</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</section>
<script>
    $("#li_baiviet").addClass('active')
</script>
@endsection
