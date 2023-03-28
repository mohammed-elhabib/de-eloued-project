@extends('layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
    <style>
        .view-btn {
            color: orange !important;
            font-weight: 700;
            border: 1px solid orange;
            padding: 6px;
            border-radius: 5px;
        }

        .donne {
            font-weight: 600;
            border: 1px solid green;
            padding: 6px;
            border-radius: 11px;
            background: #efffef;
            color: green;
        }

        .mail-donne {
            color: green;
        }

        .in-progress {
            font-weight: 600;
            border: 1px solid red;
            padding: 6px;
            border-radius: 11px;
            background: #fff4f4;
            color: red;
        }
    </style>
@endsection

@section('content')

    <!-- begin::page-header -->
    <div class="page-header">
        <div class="container-fluid d-sm-flex justify-content-between">
            <h4>البريد المتابعة</h4>
            <a href="{{ route('mail-follow-add') }}" type="button" class="btn btn-success" style="color: white;">إضافة
                مراسلة</a>

        </div>
    </div>
    <!-- end::page-header -->

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" aria-describedby="emailHelp"
                                        placeholder="إبحث . . . . . .">
                                </div>

                                <div class="col-6"></div>
                            </div>

                        </h6>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered"
                                style="    font-size: 12px;                            ">
                                <thead>
                                    <tr>
                                        <th>الرقم </th>
                                        <th>المصدر</th>
                                        <th>العنوان </th>
                                        <th>الأجل</th>
                                        <th>الملاحطات</th>
                                        <th>الحالة</th>
                                        <th> </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($mailFollows->count())
                                        @foreach ($mailFollows as $mailFollow)
                                            <tr @class(['mail-donne'=>$mailFollow->status])>
                                                <td>{{ $mailFollow->number }}</td>
                                                <td>{{ $mailFollow->source }} -> {{ $mailFollow->sourceTarget }}</td>
                                                <td>{{ $mailFollow->title }}</td>
                                                <td style="    width: 100px;  "">{{ $mailFollow->date }}</td>
                                                <td>{{ $mailFollow->note }}</td>
                                                @if ($mailFollow->status)
                                                    <td>
                                                        <span class="donne">
                                                            تمت
                                                        </span>
                                                    </td>
                                                @else
                                                    <td
                                                        style="    width: 107px;                                                    ">
                                                        <span class="in-progress">
                                                            يتم معالجته
                                                        </span>

                                                    </td>
                                                @endif
                                                </td>
                                                <td
                                                    style="    width: 95px;                                                ">
                                                    <a class="view-btn"
                                                        href="{{ route('mail-follow-view', $mailFollow->id) }}"
                                                        target="_black">
                                                        تفاصيل
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7"> لا يوجد مراسلات</td>

                                        </tr>
                                    @endif


                                </tbody>

                            </table>
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
@endsection
