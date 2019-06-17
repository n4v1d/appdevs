@extends('Admin.Master')
@section('title')
    نمای کلی
@endsection
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-user"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">تعداد کاربران</span>
                            <span class="info-box-number">
                  <b>{{ $user->count() }}</b>
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-newspaper-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">مطالب</span>
                            <span class="info-box-number">{{ $courses->count()  }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fa fa-comment"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">نظرات</span>
                            <div class="row text-center" >
                                <div class="col-6">
                                    <span class="info-box-number">0</span>

                                </div>
                                <div class="col-6">
                                    <span class="info-box-number" style="color:red"> 0</span>

                                </div>
                            </div>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">تعداد فروش</span>
                            <span class="info-box-number">0</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->



            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">آخرین دوره ها</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-widget="remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                            <tr>
                                <th>عنوان دوره</th>
                                <th>تعداد ویدیو</th>
                                <th>تعداد فروش</th>
                                <th>تعداد ویدیو</th>
                                <th>وضعیت</th>
                                <th>مدیریت</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)

                                <tr>
                                    <td><a href="/course/{{$course->slug}}">{{ $course->name }}</a></td>
                                    <td>{{ $course->episode->count() }}</td>
                                    <td>/</td>
                                    <td>0</td>
                                    <td>
                                        @if ($course->status == 0)
                                            <span class="badge badge-danger">درحال انتشار</span>

                                        @endif

                                        @if ($course->status == 1)
                                            <span class="badge badge-success">تکمیل شده</span>

                                        @endif
                                    </td>

                                    <td>
                                        <a href="/admin/course/edit/{{$course->id}}" class="badge badge-info"> ویرایش</a>
                                        <a href="/admin/course/delete/{{$course->id}}" class="badge badge-danger">حذف</a>

                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <a href="/admin/article" class="btn btn-sm btn-info float-left"> همه مطالب</a>
                </div>
                <!-- /.card-footer -->
            </div>




            <!-- /.card -->
        </div>

        </div>
    </section>
    <!-- /.content -->

    <!-- /.content-wrapper -->


@endsection
