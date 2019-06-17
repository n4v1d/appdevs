@extends('Admin.Master')
@section('title')
     اپیزود جدید
@endsection
@section('content')


    <!-- Main content -->
    <form action="" method="post">

        <section class="content">
            <div class="container-fluid">




                <div class="card" style="padding: 10px">
                    <div class="card-header border-transparent">
                        <h3 class="card-title"> اپیزود جدید</h3>


                    </div>
                    <!-- /.card-header -->
                    <div class="card-body ">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> عنوان اپیزود</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" >
                        </div>

                        <diw class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>نوع اپیزود</label>
                                    <select name="type" class="form-control " >
                                        <option value="0">رایگان</option>
                                        <option value="1">بسته به دوره </option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>شماره</label>
                                    <input  type="text" name="number" class="form-control input-lg" value="{{$course->episode->count()}}">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>لینک ویدیو</label>
                                    <input  type="text" name="video_url" class="form-control input-lg" >
                                </div>
                            </div>

                    </div>
                        </diw>

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
