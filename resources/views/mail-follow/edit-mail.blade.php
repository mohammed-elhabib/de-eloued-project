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
                        <form method="post" action="{{ route('mail-follow-edit-store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden"" name="id" value="{{ $mailFollow->id }}" />
                            <div class="form-group">
                                <label class="label">رقم المراسلة</label>
                                <input type="text" class="form-control" name="number" required
                                    aria-describedby="emailHelp" placeholder="رقم المراسلة"
                                    value="{{ $mailFollow->number }}">

                            </div>
                            <div class="form-group">
                                <label class="label">المصدر</label>
                                <input type="text" class="form-control" name="source" required placeholder="المصدر"
                                    value="{{ $mailFollow->source }}">
                            </div>
                            <div class="form-group">
                                <label class="label">المصلحة</label>
                                <input type="text" class="form-control" name="sourceTarget" required
                                    value="{{ $mailFollow->sourceTarget }}" placeholder="المصلحة">
                            </div>
                            <div class="form-group">
                                <label class="label">عنوان المراسلة</label>
                                <textarea class="form-control" name="title" required placeholder="عنوان المراسلة">{{ $mailFollow->title }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="label">اجال التنفيذ</label>
                                <input type="date" class="form-control" name="date" required
                                    value="{{ $mailFollow->date }}" placeholder="اجال التنفيذ">
                            </div>

                            <div class="form-group">
                                <label class="label">مصالح والمكاتب المعنية</label>
                                <select class="select2-example" name="targets[]" multiple>
                                    @foreach ($actors as $actor)
                                        <option value="{{ $actor->id }}" @selected($mailFollow->actors->contains($actor->id))>
                                            {{ $actor->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="label">ملاحظات</label>
                                <textarea class="form-control" name="note" required placeholder="ملاحظات" >{{ $mailFollow->note }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="label">الملف المراسلة</label>
                                <input type="file" class="form-control" name="file" />
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
            multiple: true
        });
    </script>
@endsection
