@extends('layouts.admin')
@section('title', ' انواع القضايا')
@section('content')
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-header d-flex justify-content-between mb-3">
            <h3>انواع القضايا</h3>
            @if (auth()->user()->hasPermission('create_Typecourt'))

            <a href="{{route('Typecases.create')}}" class="btn btn-outline-primary" title="اضافة جديد"><i
                    data-feather="plus"></i></a>
            @else
                <a href="#" class="btn btn-outline-primary disabled" title="اضافة جديد"><i
                        data-feather="plus"></i></a>
            @endif

        </div>
        <div class="widget-content widget-content-area br-6">
            <div class="table-responsive mb-4 mt-4">
                <table id="cases" class="table table-hover non-hover" style="width:100%">
                    <thead>
                    <tr>
                        <th></th>
                        <th>النوع</th>
                        <th>تم اضافته</th>


                        <th>اجراء</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($types as $item)
                        <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['name']}}</td>


                            <td>{{ isset($item->created_at) ? $item->created_at->diffForHumans() :''	 }}</td>

                            <td class="d-flex">
                                @if (auth()->user()->hasPermission('update_Typecourt'))

                                <a href="{{route('Typecases.edit', $item)}}" class="text-success mr-3"><i
                                        data-feather="edit"></i></a>
                                @else
                                    <a href="#" class="text-success mr-3 disabled"><i
                                            data-feather="edit"></i></a>
                                @endif
                                    @if (auth()->user()->hasPermission('delete_Typecourt'))

                                    <form action="{{route('Typecases.destroy',$item)}}" method="post"
                                      onsubmit="return confirm('هل انت  متاكد ؟')">
                                    @csrf
                                    @method('DELETE')

                                    <button class="delete-btn text-danger p-0 m-0" type="submit"><i
                                            data-feather="trash"></i></button>

                                    @else
                                        <button class="delete-btn text-danger p-0 m-0 disabled" type="submit"><i
                                                data-feather="trash"></i></button>
                                    @endif
                                </form>
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
    <x-datatables id="cases" mass=""></x-datatables>
@endpush
