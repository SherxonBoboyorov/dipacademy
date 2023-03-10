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
                            <th>Programmes_IN</th>
                            <th>Name [Uzbek]</th>
                            <th>Name [Russian]</th>
                            <th>Name [English]</th>
                            <th colspan="2" style="width: 2%;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($program_reviws as $programreviw)
                            <tr>
                                <td>{{ $programreviw->id }}</td>
                                <td>
                                    <img src="{{ asset($programreviw->image) }}" alt="" width="35" height="35">
                                </td>
                                <td>{{ $programreviw->programmesin->title_en ?? "" }}</td>
                                <td>{{ $programreviw->name_uz }}</td>
                                <td>{{ $programreviw->name_ru }}</td>
                                <td>{{ $programreviw->name_en }}</td>
                                <td>
                                    <a href="{{ route('programreviw.edit', $programreviw->id) }}" class="btn btn-info btn-icon">
                                        <i class="fa fa-edit">Edit</i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('programreviw.destroy', $programreviw->id) }}" method="POST">
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
                    {!! $program_reviws->links() !!}

                </div>
            </div>

        </div>
    </div>
@endsection
