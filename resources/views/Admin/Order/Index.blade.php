@extends('Admin.Master')
@section('title')
    لیست سفارشات
@endsection
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">آخرین سفارشات</h3>

                    <div class="card-tools">


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
                                <th> خریدار</th>
                                <th>عنوان دوره</th>
                                <th>مبلغ</th>
                                <th>وضعیت</th>
                                <th>تاریخ</th>
                                <th>مدیریت</th>
                                <th>ریز اطلاعات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <th>{{ $order->id }}</th>
                                    <th><a href="/admin/users/{{ $order->user->id }}">{{ $order->user->name }}</a></th>
                                    <th><a href="/admin/course/{{ $order->course->slug }}">{{ $order->course->name }}</a></th>
                                    <th>{{ number_format($order->price) }} تومان</th>
                                    <td>
                                        @if ($order->status == 0)
                                            <span class="badge badge-info"> پرداخت نشده</span>

                                        @endif

                                        @if ($order->status == 1)
                                            <span class="badge badge-warning">پرداخت انلاین ناموفق</span>
                                        @endif

                                        @if ($order->status == 2)
                                            <span class="badge badge-success">پرداهت شده</span>

                                        @endif
                                    </td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>
                                        <a href="/admin/order/edit/{{$order->id}}" class="badge badge-info"> ویرایش</a>
                                        <a href="/admin/order/delete/{{$order->id}}" class="badge badge-danger">حذف</a>

                                    </td>
                                    <td>
                                        <a href="/admin/order/view/{{$order->id}}" class="badge badge-primary"> مشاهده</a>

                                    </td>
                                </tr>
                            @endforeach

                            <tr>
                                <td colspan="1"><b>تعداد فروش:</b></td>
                                <td colspan="1"><b>{{ number_format($orders->where('status','2')->count()) }} عدد</b></td>

                                <td colspan="1"><b>جمع فروش:</b></td>
                                <td colspan="1"><b>{{ number_format($orders->where('status','2')->sum('price')) }} تومان</b></td>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                {{ $orders->links() }}

            </div>


        </div>
        </div>
    </section>
    <!-- /.content -->

    <!-- /.content-wrapper -->


@endsection
