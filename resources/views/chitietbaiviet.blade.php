@extends('home')
@section("content")
<style>
    .tenbaiviet{
        text-align: center;
        margin: 20px 0;
    }
    .mota{
        text-align: center;
        font-size: 15px;
    }
    .noidung{
        font-size: 14px;
    }
</style>
<div class="row">
    <div class="col-md-12">
    <h4 class='tenbaiviet'> {!!$baiviet->tenbaiviet!!}</h4>
    <h5 class='mota'> {!!$baiviet->mota!!}</h5>
    <h5 class='noidung'> {!!$baiviet->noidung!!}</h5>
       
    </div>
</div>

@endsection
