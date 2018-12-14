@extends('admin.template')
@section("content")
<section class="content">
    <div class="header">
        <div class="col-md-12">
            <h3 class="header-title">Danh mục bài viết</h3>
            <button class="btn btn-primary">Thêm danh mục</button>
        </div>
    </div>
    <div class="main-content">
        <table id="datatable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width:30px">#</th>
                    <th class="text-center" style="width:150px"></th>
                    <th>Tên danh mục</th>
                    <th>Thứ tự</th>
                </tr>
            </thead>
            <tbody>
                @foreach($danhmucs as $danhmuc)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td class="text-center">
                        <a href="/admin/baiviet/suadanhmuc/{{$danhmuc->id}}" class="btn btn-sm btn-info">Chỉnh sửa</a>
                        <button onclick="xoadanhmuc({{$danhmuc->id}})" class="btn btn-sm btn-danger">Xóa</button>
                    </td>
                    <td>{{$danhmuc->tendanhmuc}}</td>
                    <td>{{$danhmuc->thutu}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
<div class="modal fade" id="Popup" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Xác nhận</h4>
                </div>
                <div class="modal-body">
                    <span>Bạn có chắc chắn muốn xóa?</span>
                </div>
                <div class="modal-footer">
                    <a id="xoa" type="button" class="btn btn-danger">Xóa</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                </div>
            </div>

        </div>
    </div>
<script>
    $("#li_baiviet").addClass('active')
    function xoadanhmuc(id){
        $("#Popup").modal()
        $("#xoa").attr("href",'/admin/baiviet/xoadanhmuc/'+id)
    }
</script>
@endsection
