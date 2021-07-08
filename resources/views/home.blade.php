@extends('layouts.admin')
@section('content')


    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <form action="{{route('search')}}" method="post">
            @csrf


            <div class="row">
            <div class="col-xl-4">
                <div class="card component-card_1">
                    <div class="card-body">
                        <x-input-datetime name="date1" value="{{old('date1')}}" title="تاريخ من"></x-input-datetime>

                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card component-card_1">
                    <div class="card-body">
                        <x-input-datetime name="date2" value="{{old('date2')}}" title="تاريخ الي"></x-input-datetime>

                    </div>
                </div>
            </div>



        <div class="col-xl-4">
            <div class="card component-card_1">
                <div class="card-body">

                    <div class="input-group-append text-center ">

                        <button type="submit" class="btn btn-dark text-decoration-none"  >
                            <i class="fa fa-search"></i>
                            بحث

                        </button>

                    </div>

                    <br>
                    <br>

                </div>
            </div>
        </div>
    </div>
        </form>
    </div>
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="row">
            <div class="col-xl-3">
                <div class="card component-card_1">
                    <div class="card-body">
                        <div class="icon-svg">
                            <i data-feather="droplet"></i>
                        </div>
                        <h5 class="card-title">{{$count}}</h5>
                        <p class="card-text">عدد القضايا المستلمة</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card component-card_1">
                    <div class="card-body">
                        <div class="icon-svg">
                            <i data-feather="droplet"></i>
                        </div>
                        <h5 class="card-title">{{$price}}</h5>
                        <p class="card-text">اتعاب جميع القضايا</p>
                    </div>
                </div>


            </div>

            <div class="col-xl-3">

                <div class="card component-card_1">
                    <div class="card-body">
                        <div class="icon-svg">
                            <i data-feather="droplet"></i>
                        </div>
                        <h5 class="card-title">{{$client}}</h5>
                        <p class="card-text">عدد العملاء</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">

                <div class="card component-card_1">
                    <div class="card-body">
                        <div class="icon-svg">
                            <i data-feather="droplet"></i>
                        </div>
                        <h5 class="card-title">{{\App\Model\Ssesiot::all()->count()}}</h5>
                        <p class="card-text"> الجلسات</p>
                    </div>
                </div>

            </div>




        </div>
       <br>

        <div class="row">
            <div class="col-xl-3">
                <div class="card component-card_1">
                    <div class="card-body">
                        <div class="icon-svg">
                            <i data-feather="droplet"></i>
                        </div>
                        <h5 class="card-title">{{\App\Model\Lawyer::all()->count()}}</h5>
                        <p class="card-text"> المحامين</p>
                    </div>
                </div>
            </div>


            <div class="col-xl-3">
                <div class="card component-card_1">
                    <div class="card-body">
                        <div class="icon-svg">
                            <i data-feather="droplet"></i>
                        </div>
                        <h5 class="card-title">{{\App\Model\Court::all()->count()}}</h5>
                        <p class="card-text">المحاكم</p>
                    </div>
                </div>

            </div>

            <div class="col-xl-3">
                <div class="card component-card_1">
                    <div class="card-body">
                        <div class="icon-svg">
                            <i data-feather="droplet"></i>
                        </div>
                        <h5 class="card-title">{{$pay}}</h5>
                        <p class="card-text">المبالغ المدفوع</p>
                    </div>
                </div>

            </div>

            <div class="col-xl-3">
                <div class="card component-card_1">
                    <div class="card-body">
                        <div class="icon-svg">
                            <i data-feather="droplet"></i>
                        </div>
                        <h5 class="card-title">{{$remain}}</h5>
                        <p class="card-text">المبالغ المتبقية</p>
                    </div>
                </div>
            </div>




        </div>



@endsection
