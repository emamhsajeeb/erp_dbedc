<?php $page = 'leads'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Leads
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Leads
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-nowrap custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Lead Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Project</th>
                            <th>Assigned Staff</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="#" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}" alt="User Image"></a>
                                    <a href="#">Wilmer Deluna</a>
                                </h2>
                            </td>
                            <td>wilmerdeluna@example.com</td>
                            <td>9876543210</td>
                            <td><a href="'{{url('project-view')}}">Hospital Administration</a></td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li class="dropdown avatar-dropdown">
                                        <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="avatar-group">
                                                <a class="avatar avatar-xs" href="#">
                                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="User Image">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" alt="User Image">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" alt="User Image">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}" alt="User Image">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg')}}" alt="User Image">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}" alt="User Image">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}" alt="User Image">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}" alt="User Image">
                                                </a>
                                            </div>
                                            <div class="avatar-pagination">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true">«</span>
                                                            <span class="visually-hidden">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true">»</span>
                                                        <span class="visually-hidden">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li> 
                                </ul>
                            </td>
                            <td><span class="badge bg-inverse-success">Working</span></td>
                            <td>10 hours ago</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="#" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}" alt="User Image"></a>
                                    <a href="#">Lesley Grauer</a>
                                </h2>
                            </td>
                            <td>lesleygrauer@example.com</td>
                            <td>9876543210</td>
                            <td><a href="'{{url('project-view')}}">Video Calling App</a></td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td><span class="badge bg-inverse-success">Working</span></td>
                            <td>5 Mar 2019</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="#" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}" alt="User Image"></a>
                                    <a href="#">Jeffery Lalor</a>
                                </h2>
                            </td>
                            <td>jefferylalor@example.com</td>
                            <td>9876543210</td>
                            <td><a href="'{{url('project-view')}}">Office Management</a></td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td><span class="badge bg-inverse-success">Working</span></td>
                            <td>27 Feb 2019</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="#" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}" alt="User Image"></a>
                                    <a href="#">Wilmer Deluna</a>
                                </h2>
                            </td>
                            <td>wilmerdeluna@example.com</td>
                            <td>9876543210</td>
                            <td><a href="'{{url('project-view')}}">Hospital Administration</a></td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td><span class="badge bg-inverse-success">Working</span></td>
                            <td>10 hours ago</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="#" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}" alt="User Image"></a>
                                    <a href="#">Lesley Grauer</a>
                                </h2>
                            </td>
                            <td>lesleygrauer@example.com</td>
                            <td>9876543210</td>
                            <td><a href="'{{url('project-view')}}">Video Calling App</a></td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td><span class="badge bg-inverse-success">Working</span></td>
                            <td>5 Mar 2019</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="#" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}" alt="User Image"></a>
                                    <a href="#">Jeffery Lalor</a>
                                </h2>
                            </td>
                            <td>jefferylalor@example.com</td>
                            <td>9876543210</td>
                            <td><a href="'{{url('project-view')}}">Office Management</a></td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td><span class="badge bg-inverse-success">Working</span></td>
                            <td>27 Feb 2019</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="#" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}" alt="User Image"></a>
                                    <a href="#">Wilmer Deluna</a>
                                </h2>
                            </td>
                            <td>wilmerdeluna@example.com</td>
                            <td>9876543210</td>
                            <td><a href="'{{url('project-view')}}">Hospital Administration</a></td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td><span class="badge bg-inverse-success">Working</span></td>
                            <td>10 hours ago</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="#" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}" alt="User Image"></a>
                                    <a href="#">Lesley Grauer</a>
                                </h2>
                            </td>
                            <td>lesleygrauer@example.com</td>
                            <td>9876543210</td>
                            <td><a href="'{{url('project-view')}}">Video Calling App</a></td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td><span class="badge bg-inverse-success">Working</span></td>
                            <td>5 Mar 2019</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="#" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}" alt="User Image"></a>
                                    <a href="#">Jeffery Lalor</a>
                                </h2>
                            </td>
                            <td>jefferylalor@example.com</td>
                            <td>9876543210</td>
                            <td><a href="'{{url('project-view')}}">Office Management</a></td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td><span class="badge bg-inverse-success">Working</span></td>
                            <td>27 Feb 2019</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
