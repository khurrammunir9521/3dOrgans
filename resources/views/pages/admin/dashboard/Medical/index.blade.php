@extends('layouts.admin.app')
@section('content')


<div class="content-main">
<h3>طلبات الخدمات الطبية </h3>

    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">طلبات الخدمات الطبية</a></li>

        </ol>
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="#"> جديد +</a>
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%" id="basic-2">

                                <thead>
                                    <tr>
                                        <th> رقم الطلب</th>
                                        <th> اسم المريض</th>
                                        <th> اسم الطبيب</th>
                                        <th>التخصص</th>
                                        <th> ايميل الطبيب</th>
                                        <th> المستشفى</th>
                                        <th>المطلوب</th>
                                        <th>التاريخ</th>
                                        <th></th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($medical as $medi)
                                    @if($medi->seen == 0)
                                    <tr>
                                        <td><b>{{ $medi->id }}</b></td>
                                        <td><b>{{ $medi->pa_name}}</b></td>
                                        <td><b>{{ $medi->dr_name }}</b></td>
                                        <td><b>{{ $medi->dr_spec}}</b></td>
                                        <td><b>{{ $medi->dr_email }}</b></td>
                                        <td><b>{{ $medi->hospital }}</b></td>
                                        <td><b>{{ $medi->procedure }}</b></td>
                                        <td><b>{{ $medi->created_at->format('Y-m-d')
                                                }}</b></td>
                                        <td>
                                            <a class="btn btn-primary" href="{{
                                                route('medi.show', $medi->id)
                                                }}">View</a>
                                        </td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td>{{ $medi->pa_name}}</td>
                                        <td>{{ $medi->dr_name }}</td>
                                        <td>{{ $medi->dr_spec}}</td>
                                        <td>{{ $medi->dr_email }}</td>
                                        <td>{{ $medi->hospital }}</td>
                                        <td>{{ $medi->procedure }}</td>
                                        <td><b>{{ $medi->id }}</b></td>
                                        <td><b>{{ $medi->created_at->format('Y-m-d')
                                                }}</b></td>
                                        <td>
                                            <a class="btn btn-primary" href="{{
                                                route('medi.show', $medi->id)
                                                }}">View</a>
                                        </td>

                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection



