@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">List Alumni reviews</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="card">
                <div class="card-body">

                    @if(session('message'))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ session('message') }}
                        </div>

                    @endif

                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 2%;">#</th>
                            <th>Image</th>
                            <th>Programmes_Master_IN</th>
                            <th>Name [Uzbek]</th>
                            <th>Name [Russian]</th>
                            <th>Name [English]</th>
                            <th colspan="2" style="width: 2%;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($programin_reviws as $programinreviw)
                            <tr>
                                <td>{{ $programinreviw->id }}</td>
                                <td>
                                    <img src="{{ asset($programinreviw->image) }}" alt="" width="35" height="35">
                                </td>
                                <td>{{ $programinreviw->programmesmasterin->title_en ?? "" }}</td>
                                <td>{{ $programinreviw->name_uz }}</td>
                                <td>{{ $programinreviw->name_ru }}</td>
                                <td>{{ $programinreviw->name_en }}</td>
                                <td>
                                    <a href="{{ route('programinreviw.edit', $programinreviw->id) }}" class="btn btn-info btn-icon">
                                        <i class="fa fa-edit">Edit</i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('programinreviw.destroy', $programinreviw->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-warning btn-icon">
                                            <i class="fa fa-trash">Delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $programin_reviws->links() !!}

                </div>
            </div>

        </div>
    </div>
@endsection
