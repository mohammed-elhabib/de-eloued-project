@extends('layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('vendors/select2/css/select2.min.css') }}" type="text/css">
@endsection

@section('content')
    <!-- begin::page-header -->
    <div class="page-header">
        <div class="container-fluid d-sm-flex justify-content-between">
            <h4>إضافة مراسلة جديدة</h4>
        </div>
    </div>
    <!-- end::page-header -->

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('mail-follow-store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>رقم المراسلة</label>
                                <input type="text" class="form-control" name="number" required
                                    aria-describedby="emailHelp" placeholder="رقم المراسلة">

                            </div>
                            <div class="form-group">
                                <label>المصدر</label>
                                <input type="text" class="form-control" name="source" required placeholder="المصدر">
                            </div>
                            <div class="form-group">
                                <label>المصلحة</label>
                                <input type="text" class="form-control" name="sourceTarget" required
                                    placeholder="المصلحة">
                            </div>
                            <div class="form-group">
                                <label>عنوان المراسلة</label>
                                <textarea class="form-control" name="title" required placeholder="عنوان المراسلة"></textarea>
                            </div>
                            <div class="form-group">
                                <label>اجال التنفيذ</label>
                                <input type="date" class="form-control" name="date" required
                                    placeholder="اجال التنفيذ">
                            </div>

                            <div class="form-group">
                                <label>مصالح والمكاتب المعنية</label>
                                <select class="select2-example"  name="targets[]">
                                    @foreach ($actors as $actor)
                                        <option value="{{ $actor->id }}">{{ $actor->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label>ملاحظات</label>
                                <textarea class="form-control" name="note" required placeholder="ملاحظات"></textarea>
                            </div>
                            <div class="form-group">
                                <label>الملف المراسلة</label>
                                <input type="file" class="form-control" name="file"  />
                            </div>
                            <button type="submit" class="btn btn-primary">حفظ</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection

@section('script')
    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
    <script src="{{ url('vendors/select2/js/select2.min.js') }}"></script>
    <script>
        $('.select2-example').select2({
            placeholder: 'مصالح والمكاتب المعنية',
            multiple:true
        });
    </script>
@endsection
