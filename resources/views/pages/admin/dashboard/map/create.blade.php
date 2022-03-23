@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>صورة الخريطة</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="{{ route('map.index') }}">صورة الخريطة</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
<form method="POST" action="{{ route('map.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
    <div class="col-md-6">

    <div class="form-group">
        <label for="exampleInputEmail1">Map </label>
        <input type="file" class="form-control" name="map_image" id="" accept="image/*" type="file" id="download-cv-file-name" name="map_image" id="map_image" aria-describedby="" placeholder="Enter sub heading">
        <small id="" class="form-text text-muted"> </small>
    </div>
    </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
    @endsection