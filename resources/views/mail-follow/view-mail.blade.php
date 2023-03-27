@extends('layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('vendors/select2/css/select2.min.css') }}" type="text/css">
    <style>
        .label {
            font-weight: 600;
            border: 1px solid gray;
            border-left: none;
            color: black;
            padding: 5px
        }

        .value {
            border: 1px solid gray;
            padding: 5px
        }

        .row {
            margin: 15px;
            font-size: 16px
        }

        .donne {
            border: 1px solid green;
            color: green;
            border-radius: 5px;
            padding: 2px
        }

        .in-progress {
            border: 1px solid red;
            color: red;
            border-radius: 5px;
            padding: 2px
        }
    </style>
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
                        <div class="row">
                            <div class="col-8">

                                <div class="row">
                                    <a class="ml-1" href="{{ url($mailFollow->path ?? '') }}" target="_blank">
                                        <button type="button" class="btn btn-outline-success btn-sm">معاينة</button>
                                    </a>
                                    <a class="ml-1" href="{{ route('mail-follow-edit', $mailFollow->id) }}">
                                        <button type="button" class="btn btn-outline-warning btn-sm">تعديل</button>
                                    </a>
                                    <a class="ml-1" href="{{ route('mail-follow-delete', $mailFollow->id) }}">
                                        <button type="button" class="btn btn-outline-danger btn-sm ">خذف</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <select @class([
                                        'col',
                                        'in-progress' => !$mailFollow->status,
                                        'donne' => $mailFollow->status,
                                    ]) id="status">
                                        <option value="1" @selected($mailFollow->status)>تمت</option>
                                        <option value="0" @selected(!$mailFollow->status)>يتم معالجته</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-3 label ">الرقم </div>
                                    <div class="col value">{{ $mailFollow->number }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-3 label">المصدر </div>
                                    <div class="col value">{{ $mailFollow->source }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-3 label">المصلحة </div>
                                    <div class="col value">{{ $mailFollow->sourceTarget }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-3 label">العنوان </div>
                                    <div class="col value">{{ $mailFollow->title }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-3 label">الاجل </div>
                                    <div class="col value">{{ $mailFollow->date }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-3 label"
                                        style="    display: flex;
                                    align-items: center;">
                                        المصالح المعنية </div>
                                    <div class=" col value">

                                        <ol>
                                            @foreach ($mailFollow->actors as $actor)
                                                <li>{{ $actor->name }}</li>
                                            @endforeach
                                        </ol>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-3 label">الملاحظة </div>
                                    <div class="col value">{{ $mailFollow->note }}</div>
                                </div>
                            </div>

                        </div>

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
    <script>
        $('#status').on('change', function() {

            $.get('/num/sp/mail-follow/change-status/{{ $mailFollow->id }}/' + this.value, function(data) {
                if (data == "1") {
                    $('#status').removeClass("in-progress");
                    $('#status').addClass("donne");
                    console.log(1);


                } else {
                    $('#status').removeClass("donne");
                    $('#status').addClass("in-progress");
                    console.log(2);

                }

            });



        });
    </script>
@endsection
