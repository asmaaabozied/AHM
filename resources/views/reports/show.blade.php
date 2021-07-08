@extends('layouts.admin')
@section('title', 'تقارير الجلسات')
@section('content')

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <form action="{{route('reports.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-xl-3">
                    <div class="card component-card_1">
                        <div class="card-body">
                            <x-input-datetime name="date1" value="{{old('date1')}}" title="تاريخ من"></x-input-datetime>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="card component-card_1">
                        <div class="card-body">
                            <x-input-datetime name="date2" value="{{old('date2')}}"
                                              title="تاريخ الي"></x-input-datetime>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3">

                    <div class="card component-card_1">
                        <div class="card-body">

                            <label>المحامين</label>

                            <select class="form-control select2" name="lawyer_id" id="parent" required>
                                <option selected disabled>please select</option>
                                @foreach(\App\Model\Lawyer::get()->pluck('name','id') as $id => $item)
                                    <option value="{{$id}}">{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                </div>

                <div class="col-xl-3">

                    <div class="card component-card_1">
                        <div class="card-body">

                            <label>نوع المحكمه</label>

                            <select class="form-control select2" name="lawyer_id" id="parent" required>
                                <option selected disabled>please select</option>
                                @foreach(\App\Model\Typecourt::get()->pluck('name','id') as $id => $item)
                                    <option value="{{$id}}">{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                </div>


            </div>
            <div class="row">

                <div class="col-xl-2" style="float: right">
                </div>
                <div class="col-xl-2" style="float: right">
                </div>
                <div class="col-xl-2" style="float: right">
                </div>
                <div class="col-xl-2" style="float: right">
                </div>
                <div class="col-xl-2" style="float: right">
                </div>

                <div class="col-xl-1" style="float: right">
                </div>

                <div class="col-xl-1" style="float: right">


                    <button type="submit" class="btn btn-dark text-decoration-none">
                        <i class="fa fa-search"></i>
                        بحث

                    </button>


                </div>


            </div>
        </form>
    </div>

    <div class="col-xl-12 col-lg-11 col-sm-11  layout-spacing">

        <div class="widget-content widget-content-area br-6">
            <div class="table-responsive mb-4 mt-4">
                <table id="clients" class="table table-hover non-hover" style="width:100%">
                    <thead>
                    <tr>
                        <th></th>

                        <th>
                            اسم المحكمه


                        </th>

                        <th>التاريخ</th>

                        <th>المحامي</th>


                    </tr>

                    </thead>
                    <tbody>

                    @foreach($lawyers as $item)

                        <tr>
                            <td>{{$item['id']}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-6">
                                        نوع القضيه
                                        {{$item->cases->type->name ?? ''}}
                                        <br>
                                        المدعي :
                                        <br>
                                        المدعي عليه :
                                    </div>
                                    <div class="col-6">

                                        رقم القضيه:
                                        {{$item->cases->number ?? ''}}
                                        <br>
                                        صفه الموكل :
                                        {{$item->cases->cc3 ?? ''}}
                                    </div>
                                </div>

                            </td>

                            <td>
                                <div class="row">

                                    <div class="col-6">


                                        حاله الدعوه:
                                        {{$item->cases->statuscase->name ?? ''}}
                                        <br>
                                        رقم الدور
                                        {{$item->type->typecourt->number ?? ''}}
                                        <br>
                                        رقم القاعه
                                        {{$item->type->typecourt->role_value ?? ''}}

                                    </div>

                                    <div class="col-6">

                                        ملاحظات:
                                        <br>
                                        {{Str::limit($item['notes'], 10)}}
                                    </div>
                                </div>
                            </td>


                            <td>
                                <div class="row">
                                    <div class="col-6">

                                        تاريخ الجلسه الاخيره:
                                        {{$item->date?? ''}}
                                        <br>
                                        القرار :
                                        {{$item->decision->decision ?? ''}}


                                        <br>
                                        تاريخ الجلسه الحاليه:
                                        {{$item->date2?? ''}}
                                        <br>
                                        القرار :
                                        {{$item->decision ?? ''}}

                                    </div>


                                    <div class="col-6">

                                        رقم القضيه :
                                        {{$item->cases->number  ?? ''}}
                                    </div>
                                </div>
                            </td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>

@endsection
@push('javascript')
    <x-datatables id="clients" mass=""></x-datatables>
@endpush
