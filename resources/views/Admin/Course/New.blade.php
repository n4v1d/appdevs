@extends('Admin.Master')
@section('title')
     دوره جدید
@endsection
@section('content')


    <!-- Main content -->
    <form action="" method="post">

        <section class="content">
            <div class="container-fluid">




                <div class="card" style="padding: 10px">
                    <div class="card-header border-transparent">
                        <h3 class="card-title"> دوره جدید</h3>


                    </div>
                    <!-- /.card-header -->
                    <div class="card-body ">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> عنوان دوره</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" >
                        </div>

                        <div class="row text-center">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">slug دوره</label>
                                    <input type="text" class="form-control" name="slug" >
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>نوع دوره</label>
                                    <select name="type" class="form-control " >
                                        <option value="0">رایگان</option>
                                        <option value="1">کاربر ویژه</option>
                                        <option value="2">نقدی</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>قیمت (0 برای رایگان) </label>
                                    <input type="text" name="price" class="form-control input-lg" value="0">
                                </div>
                            </div>

                        </div>





                        <div class="col-md-12">
                            <div class="form-group">
                                <label> توضیجات دوره </label>
                                <body>
                                <textarea name="desc" id="desc" class="form-control input-lg"></textarea>

                            </div>
                            {{ @csrf_field() }}
                            <input name="image" value="0" type="hidden"></div>

                    </div>

                    <button type="submit" class="btn btn-info" style="margin-bottom: 0px">ارسال</button>


                </div>



            </div>

            </div>


        </section>

    </form>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection
