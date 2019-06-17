@extends('Admin.Master')
@section('title')
     لیست دوره ها
@endsection
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">آخرین دوره ها</h3>

                    <div class="card-tools">
                         <a href="/admin/course/new" class="btn btn-sm btn-info"><span style="margin: 10px"> دوره جدید </span></a>

                            <a href="/admin/course/search" class="btn btn-sm btn--round btn-info "> جستوجو </a>

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
                                <th>نوع دوره</th>
                                <th>وضعیت</th>
                                <th>مدیریت</th>
                                <th>اپیزودها</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)

                                <tr>
                                    <td><a href="/course/{{$course->slug}}">{{ $course->name }}</a></td>
                                    <td>{{ $course->episode->count() }}</td>
                                    <td>
                                        @if ($course->type == 0)
                                            0

                                        @endif

                                        @if ($course->type == 1)
                                            0
                                        @endif

                                        @if ($course->type == 2)
                                            /

                                        @endif
                                    </td>
                                    <td>
                                        @if ($course->type == 0)
                                            <span class="badge badge-primary">رایگان </span>

                                        @endif

                                        @if ($course->type == 1)
                                            <span class="badge badge-info">کاربر ویژه</span>

                                        @endif

                                        @if ($course->type == 2)
                                            <span class="badge badge-success"> نقدی</span>

                                        @endif
                                    </td>
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

                                    <td>
                                        <a href="/admin/course/episode/{{$course->id}}" class="badge badge-info">لیست محتوا</a>

                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
            </div>

            {{ $courses->links() }}
            <!-- /.card -->
        </div>

        </div>
    </section>
    <!-- /.content -->

    <!-- /.content-wrapper -->


@endsection
