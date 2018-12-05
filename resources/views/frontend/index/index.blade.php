@extends('frontend.layouts.main')

@section('title', 'Tiêu đề Website')

@section('sidebar')

   @parent


    <p>Nội dung của View sẽ thêm vào master layout sidebar</p>
@endsection

@section('content')
    <p>NỘI DUNG BODY CỦA WEBSITE</p>
@endsection