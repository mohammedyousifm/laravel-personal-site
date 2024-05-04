@extends('companies.dashboard')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">لوحة القيادة</h4>

                <div class="row text-center">

                    <div class="col-md-6  mt-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title text-center"> عدد الزائرين <i class="fa fa-user"
                                        style="font-size: 25px"></i>
                                </h5>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h4 class="card-title">{{ $count_visits }}</h4>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6  mt-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title text-center">تاريخ الاستضافة <i class="fa-solid fa-calendar-days"
                                        style="font-size: 25px"></i>
                                </h5>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h4 class="card-title">
                                        {{ $hosting_date ? \Carbon\Carbon::parse($hosting_date->hosting_date)->format('Y-M') : 'No date set' }}
                                    </h4>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6  mt-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title text-center">روابط سريعة</h5>
                            </div>
                            <div class="card-body">
                                <div>
                                    <a href="" class="btn btn-primary m-1"><i class="fa fa-plus"></i> إضافة
                                        المشاريع</a>
                                    <a href="" class="btn btn-success m-1"><i class="fa fa-plus"></i> إضافة
                                        الخدمات</a>
                                    <a href="" class="btn btn-secondary m-1"><i class="fa fa-plus"></i> إضافة
                                        مدونة</a>
                                    <a href="" class="btn btn-info m-1"><i class="fa fa-plus"></i> إضافة المهارات</a>
                                    <a href="" class="btn btn-danger m-1"><i class="fa fa-plus"></i> إضافة
                                        تعليقات</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
