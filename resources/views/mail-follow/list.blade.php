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
            <!--     <nav aria-label="breadcrumb">
                                                                                                                                <ol class="breadcrumb">
                                                                                                                                    <li class="breadcrumb-item">
                                                                                                                                        <a href="#">Dashboard</a>
                                                                                                                                    </li>
                                                                                                                                    <li class="breadcrumb-item">
                                                                                                                                        <a href="#">Tables</a>
                                                                                                                                    </li>
                                                                                                                                    <li class="breadcrumb-item active" aria-current="page">Responsive Tables</li>
                                                                                                                                </ol>
                                                                                                                            </nav>-->
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
                        <h6 class="card-title">Basic</h6>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>رقم المراسلة</th>
                                        <th>المصدر</th>
                                        <th>المصلحة</th>
                                        <th>عنوان المراسلة</th>
                                        <th>اجال التنفيذ</th>
                                        <th>الملاحطات</th>
                                        <th>الحالة</th>
                                        <th> </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($mailFollows->count())
                                        @foreach ($mailFollows as $mailFollow)
                                            <tr>
                                                <td>{{ $mailFollow->number }}</td>
                                                <td>{{ $mailFollow->source }}</td>
                                                <td>{{ $mailFollow->sourceTarget }}</td>
                                                <td>{{ $mailFollow->title }}</td>
                                                <td>{{ $mailFollow->date }}</td>
                                                <td>{{ $mailFollow->note }}</td>
                                                @if ($mailFollow->status)
                                                    <td>
                                                        <span class="donne">
                                                            تمت
                                                        </span>
                                                    </td>
                                                @else
                                                    <td>
                                                        <span class="in-progress">
                                                            يتم معالجته
                                                        </span>

                                                    </td>
                                                @endif
                                                </td>
                                                <td>
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
