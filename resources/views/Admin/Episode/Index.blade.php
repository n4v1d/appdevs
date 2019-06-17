@extends('Admin.Master')
@section('title')
   {{ $course->name }}
@endsection
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">آخرین دوره ها</h3>

                    <div class="card-tools">
                         <a href="/admin/course/{{ $course->id }}/newEpisode" class="btn btn-sm btn-info"><span style="margin: 10px"> اپیزود جدید </span></a>

                            <a href="/admin/course/search" class="btn btn-sm btn--round btn-info "> جستوجو </a>

                        </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                            <tr>
                                <th>شماره</th>
                                <th>عنوان اپیزود</th>
                                <th>تعداد بازدید</th>
                                <th>نوع اپیزود</th>
                                <th>مدیریت</th>
                            </tr>
                            @foreach($course->episode as $episode)
                                <tr>
                                    <th>{{ $episode->number }}</th>
                                    <th>{{ $episode->name }}</th>
                                    <th>{{ $episode->visit }} </th>
                                    <td>
                                        @if ($episode->type == 0)
                                            <span class="badge badge-info"> رایگان</span>

                                        @endif

                                        @if ($episode->type == 1)
                                            <span class="badge badge-success">بسته به نوع دوره</span>

                                        @endif
                                    </td>
                                    <td>
                                        <a href="/admin/course/{{$course->id}}/episode/{{$episode->id}}" class="badge badge-info"> ویرایش</a>
                                        <a href="/admin/course/episode/delete/{{$episode->id}}" class="badge badge-danger">حذف</a>

                                    </td>
                                </tr>
                            @endforeach
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
            </div>


        </div>

        </div>
    </section>
    <!-- /.content -->

    <!-- /.content-wrapper -->


@endsection
