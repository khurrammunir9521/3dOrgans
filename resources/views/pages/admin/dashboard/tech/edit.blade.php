@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>صفحة تقنية الـ 3D</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">صفحات الموقع</a></li>
            <li><a href="{{ route('tech.index') }}">صفحة تقنية الـ 3D</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
<form method="POST" action="{{ route('tech.update', $tech->id) }}">
    @csrf
    @method('put')
    <div class="row">

    <div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputEmail1">Heading </label>
        <input type="text" class="form-control" name="heading" value="{{ $tech->heading }}" id="" aria-describedby="emailHelp" placeholder="Enterheading">
        <small id="" class="form-text text-muted"></small>
    </div>
    </div>

    <div class="col-md-6">

    <div class="form-group">
        <label for="exampleInputEmail1">Sub Heading </label>
        <input type="text" class="form-control" name="subheading" value="{{ $tech->subheading }}" id="" aria-describedby="" placeholder="Enter sub heading">
        <small id="" class="form-text text-muted"></small>
    </div>
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Body text </label>
        <textarea id="" name="bodytext" placeholder="Enter body text"rows="4" cols="50" class="ckeditor form-control">
            {{$tech->bodytext}}
        </textarea>
    
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
