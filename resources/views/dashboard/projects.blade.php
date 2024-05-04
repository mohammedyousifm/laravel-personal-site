@extends('companies.dashboard')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4>المشاريع</h4>
                <div class="modl-body">
                    <div>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-praimery">{{ session('error') }}</div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="d-flex mb-3">
                        <div class="search_input m-2">
                            <input type="text" class="search form-control"placeholder="ما الذي تبحث عنه؟">
                        </div>
                        <div class="m-2">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adddproject">إضافة مشروع
                                جديد</button>
                        </div>
                    </div>
                    <div class="table-responsive table-show-data">
                        <table
                            class="table table-hover table-bordered results  project-list-table table-nowrap align-middle table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">الاسم</th>
                                    <th scope="col">الوصف</th>
                                    <th scope="col">الرابط</th>
                                    <th scope="col">الصورة</th>
                                    <th scope="col">تم الإنشاء في</th>
                                    <th scope="col">آخر تحديث</th>
                                    <th scope="col">تعديل</th>
                                    <th scope="col">حذف</th>
                                </tr>

                                <tr class="warning no-result">
                                    <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($projects->isEmpty())
                                    <td colspan="9">
                                        <h5 class=" text-center p-5 primary">no data to show <br> <br>
                                            <img style="width: 100px" src="{{ asset('img/empty-18.png') }}" alt="">
                                        </h5>
                                    </td>
                                @else
                                    @foreach ($projects as $project)
                                        <tr>
                                            <td style="color:black">{{ $project->id }}</td>
                                            <td>{{ $project->project_name }}</td>
                                            <td class="description">
                                                <span class="short-text">{{ $project->description }}</span>
                                                <span class="full-text">{{ $project->description }}</span>
                                            </td>
                                            <td><a href="{{ $project->link }}">link</a></td>
                                            <td><img class="show_image" src="{{ asset($project->image) }}" alt="img">
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($project->created_at)->format('Y-M') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($project->updated_at)->format('Y-M') }}</td>
                                            <td>
                                                <div>
                                                    <button data-bs-toggle="modal" data-bs-target="#showModalToEdite"
                                                        value="{{ $project->id }}"
                                                        style="border-radius: 10px; cursor: pointer;"
                                                        class="editProject btn-primary"><i style="font-size: 15px;"
                                                            class="fa p-1  fa-edit"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <div style="margin-top: 1px">
                                                    {{-- <form id="deleteForm" method="POST"
                                                        action="{{ route('deleteProject.auth', $project->id) }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button style="border-radius: 10px; cursor: pointer;"
                                                            class="Confirm btn-danger">
                                                            <i style="font-size: 15px;" class="fa p-1 fa-trash"></i>
                                                        </button>
                                                    </form> --}}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Modal to insert -->
                <div class="modal fade" id="adddproject" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title fs-5" id="exampleModalLabel">إضافة مشروع جديد</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive">
                                    <form action="{{ route('add_projects.index') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="description" class="form-control"
                                                id="description"placeholder="description">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="link" class="form-control" id="link"
                                                placeholder="link">
                                        </div>
                                        <div class="mb-3">
                                            <input type="file" name="image" accept="image/*" class="form-control"
                                                id="image" placeholder="image">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">يلغي</button>
                                            <button type="submit" class="btn btn-primary">إضافة مشروع </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
