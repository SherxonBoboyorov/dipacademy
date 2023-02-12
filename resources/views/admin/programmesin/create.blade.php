@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Programmes_In</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('programmesin.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            {{-- <label for="title_uz">Title [Uzbek]</label> --}}
                            <input type="text" id="title_uz" class="form-control" placeholder="Title UZ" name="title_uz">
                            @if($errors->has('title_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('title_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            {{-- <label for="title_en">Title [Russian]</label> --}}
                            <input type="text" id="title_ru" class="form-control"  placeholder="Title RU" name="title_ru">
                            @if($errors->has('title_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('title_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            {{-- <label for="title_en">Title [English]</label> --}}
                            <input type="text" id="title_en" class="form-control" placeholder="Title En" name="title_en">
                            @if($errors->has('title_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('title_en') }}
                            </div>
                            @endif
                        </div>
                     </div>
                     <br>

                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            {{-- <label for="course_type_uz">Course type [Uzbek]</label> --}}
                            <input type="text" id="course_type_uz" class="form-control" placeholder="Course type UZ" name="course_type_uz">
                            @if($errors->has('course_type_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('course_type_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            {{-- <label for="course_type_ru">Course type [Uzbek]</label> --}}
                            <input type="text" id="course_type_ru" class="form-control"  placeholder="Course type RU" name="course_type_ru">
                            @if($errors->has('course_type_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('course_type_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            {{-- <label for="course_type_en">Course type [Uzbek]</label> --}}
                            <input type="text" id="course_type_en" class="form-control" placeholder="Course type En" name="course_type_en">
                            @if($errors->has('course_type_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('course_type_en') }}
                            </div>
                            @endif
                        </div>
                     </div><br>

                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            {{-- <label for="delivery_mode_uz">Delivery mode [Uzbek]</label> --}}
                            <input type="text" id="delivery_mode_uz" class="form-control" placeholder="Delivery mode UZ" name="delivery_mode_uz">
                            @if($errors->has('delivery_mode_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('delivery_mode_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            {{-- <label for="delivery_mode_ru">Delivery mode [Uzbek]</label> --}}
                            <input type="text" id="delivery_mode_ru" class="form-control"  placeholder="Delivery mode RU" name="delivery_mode_ru">
                            @if($errors->has('delivery_mode_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('delivery_mode_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            {{-- <label for="delivery_mode_en">Delivery mode [Uzbek]</label> --}}
                            <input type="text" id="delivery_mode_en" class="form-control" placeholder="Delivery mode En" name="delivery_mode_en">
                            @if($errors->has('delivery_mode_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('delivery_mode_en') }}
                            </div>
                            @endif
                        </div>
                     </div><br>

                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            {{-- <label for="study_mode_uz">Study mode [Uzbek]</label> --}}
                            <input type="text" id="study_mode_uz" class="form-control" placeholder="Study mode UZ" name="study_mode_uz">
                            @if($errors->has('study_mode_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('study_mode_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            {{-- <label for="study_mode_ru">Study mode [Uzbek]</label> --}}
                            <input type="text" id="study_mode_ru" class="form-control"  placeholder="Study mode RU" name="study_mode_ru">
                            @if($errors->has('study_mode_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('study_mode_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            {{-- <label for="study_mode_en">Study mode [Uzbek]</label> --}}
                            <input type="text" id="study_mode_en" class="form-control" placeholder="Study mode En" name="study_mode_en">
                            @if($errors->has('study_mode_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('study_mode_en') }}
                            </div>
                            @endif
                        </div>
                     </div><br>

                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            {{-- <label for="duration_uz">Duration [Uzbek]</label> --}}
                            <input type="text" id="duration_uz" class="form-control" placeholder="Duration UZ" name="duration_uz">
                            @if($errors->has('duration_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('duration_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            {{-- <label for="duration_ru">Duration [Uzbek]</label> --}}
                            <input type="text" id="duration_ru" class="form-control"  placeholder="Duration RU" name="duration_ru">
                            @if($errors->has('duration_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('duration_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            {{-- <label for="duration_en">Duration [Uzbek]</label> --}}
                            <input type="text" id="duration_en" class="form-control" placeholder="Duration En" name="duration_en">
                            @if($errors->has('duration_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('duration_en') }}
                            </div>
                            @endif
                        </div>
                     </div><br>

                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            {{-- <label for="start_date_uz">Start date [Uzbek]</label> --}}
                            <input type="text" id="start_date_uz" class="form-control" placeholder="Start date UZ" name="start_date_uz">
                            @if($errors->has('start_date_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('start_date_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            {{-- <label for="start_date_ru">Start date [Uzbek]</label> --}}
                            <input type="text" id="start_date_ru" class="form-control"  placeholder="Start date RU" name="start_date_ru">
                            @if($errors->has('start_date_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('start_date_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            {{-- <label for="start_date_en">Start date [Uzbek]</label> --}}
                            <input type="text" id="start_date_en" class="form-control" placeholder="Start date En" name="start_date_en">
                            @if($errors->has('start_date_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('start_date_en') }}
                            </div>
                            @endif
                        </div>
                     </div><br>

                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            {{-- <label for="application_deadline_uz">Application deadlinee [Uzbek]</label> --}}
                            <input type="text" id="application_deadline_uz" class="form-control" placeholder="Application deadline UZ" name="application_deadline_uz">
                            @if($errors->has('application_deadline_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('application_deadline_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            {{-- <label for="application_deadline_ru">Application deadline [Uzbek]</label> --}}
                            <input type="text" id="application_deadline_ru" class="form-control"  placeholder="Application deadline RU" name="application_deadline_ru">
                            @if($errors->has('application_deadline_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('application_deadline_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            {{-- <label for="application_deadline_en">Application deadline [Uzbek]</label> --}}
                            <input type="text" id="application_deadline_en" class="form-control" placeholder="Application deadline En" name="application_deadline_en">
                            @if($errors->has('application_deadline_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('application_deadline_en') }}
                            </div>
                            @endif
                        </div>
                     </div><br>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            <label for="content_uz">COURSE DESCRIPTION [Uzbek]</label>
                            <textarea name="content_uz" class="my-editor" id="content_uz" placeholder="COURSE DESCRIPTION UZ" cols="30" rows="10"></textarea>
                            @if($errors->has('content_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('content_uz') }}
                            </div>
                            @endif
                        </div>


                        <div class="col-md-4">
                            <label for="content_ru">COURSE DESCRIPTION [Russian]</label>
                            <textarea name="content_ru" class="my-editor" id="content_ru" placeholder="COURSE DESCRIPTION RU" cols="30" rows="10"></textarea>
                            @if($errors->has('content_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('content_ru') }}
                            </div>
                            @endif
                        </div>



                        <div class="col-md-4">
                            <label for="content_en">COURSE DESCRIPTION [English]</label>
                            <textarea name="content_en" class="my-editor" id="content_en" placeholder="COURSE DESCRIPTION EN" cols="30" rows="10"></textarea>
                            @if($errors->has('content_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('content_en') }}
                            </div>
                            @endif
                        </div>
                    </div><br><br>

                      <div class="row" style="margin-top: 15px">
                          <div class="col-md-6">
                              <label for="meta_title_ru">Meta Title RU</label>
                              <textarea name="meta_title_ru" class="form-control" id="meta_title_ru" cols="30" rows="5"></textarea>
                              @if($errors->has('meta_title_ru'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  {{ $errors->first('meta_title_ru') }}
                              </div>
                              @endif
                          </div>
                          <div class="col-md-6">
                              <label for="meta_description_ru">Meta Description RU</label>
                              <textarea name="meta_description_ru" class="form-control" id="meta_description_ru" cols="30" rows="5"></textarea>
                              @if($errors->has('meta_description_ru'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  {{ $errors->first('meta_description_ru') }}
                              </div>
                              @endif
                          </div>
                      </div>

                      <div class="row" style="margin-top: 15px">
                          <div class="col-md-6">
                              <label for="meta_title_uz">Meta Title UZ</label>
                              <textarea name="meta_title_uz" class="form-control" id="meta_title_uz" cols="30" rows="5"></textarea>
                              @if($errors->has('meta_title_uz'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  {{ $errors->first('meta_title_uz') }}
                              </div>
                              @endif
                          </div>
                          <div class="col-md-6">
                              <label for="meta_description_uz">Meta Description UZ</label>
                              <textarea name="meta_description_uz" class="form-control" id="meta_description_uz" cols="30" rows="5"></textarea>
                              @if($errors->has('meta_description_uz'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  {{ $errors->first('meta_description_uz') }}
                              </div>
                              @endif
                          </div>
                      </div>

                      <div class="row" style="margin-top: 15px">
                          <div class="col-md-6">
                              <label for="meta_title_en">Meta Title EN</label>
                              <textarea name="meta_title_en" class="form-control" id="meta_title_en" cols="30" rows="5"></textarea>
                              @if($errors->has('meta_title_en'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  {{ $errors->first('meta_title_en') }}
                              </div>
                              @endif
                          </div>
                          <div class="col-md-6">
                              <label for="meta_description_en">Meta Description EN</label>
                              <textarea name="meta_description_en" class="form-control" id="meta_description_en" cols="30" rows="5"></textarea>
                              @if($errors->has('meta_description_en'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  {{ $errors->first('meta_description_en') }}
                              </div>
                              @endif
                          </div>
                      </div><br>




                      <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control-file">
                            @if($errors->has('image'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>
                    </div><br>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-block">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div><!-- container -->

</div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection

