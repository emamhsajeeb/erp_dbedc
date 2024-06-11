<?php $page = 'activities'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Activities
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Activities
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="activity">
                <div class="activity-box">
                    <ul class="activity-list">
                        <li>
                            <div class="activity-user">
                                <a href="{{ url('profile') }}" title="Lesley Grauer" data-bs-toggle="tooltip" class="avatar">
                                    <img src="{{ URL::asset('assets/img/profiles/avatar-01.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="{{ url('profile') }}" class="name">Lesley Grauer</a> added new task <a
                                        href="#">Hospital Administration</a>
                                    <span class="time">4 mins ago</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="activity-user">
                                <a href="{{ url('profile') }}" class="avatar" title="Jeffery Lalor"
                                    data-bs-toggle="tooltip">
                                    <img src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="{{ url('profile') }}" class="name">Jeffery Lalor</a> added <a
                                        href="{{ url('profile') }}" class="name">Loren Gatlin</a> and <a
                                        href="{{ url('profile') }}" class="name">Tarah Shropshire</a> to project <a
                                        href="#">Patient appointment booking</a>
                                    <span class="time">6 mins ago</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="activity-user">
                                <a href="{{ url('profile') }}" title="Catherine Manseau" data-bs-toggle="tooltip"
                                    class="avatar">
                                    <img src="{{ URL::asset('assets/img/profiles/avatar-08.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="{{ url('profile') }}" class="name">Catherine Manseau</a> completed task <a
                                        href="#">Appointment booking with payment gateway</a>
                                    <span class="time">12 mins ago</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="activity-user">
                                <a href="#" title="Bernardo Galaviz" data-bs-toggle="tooltip" class="avatar">
                                    <img src="{{ URL::asset('assets/img/profiles/avatar-13.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="{{ url('profile') }}" class="name">Bernardo Galaviz</a> changed the task
                                    name <a href="#">Doctor available module</a>
                                    <span class="time">1 day ago</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="activity-user">
                                <a href="{{ url('profile') }}" title="Mike Litorus" data-bs-toggle="tooltip"
                                    class="avatar">
                                    <img src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="{{ url('profile') }}" class="name">Mike Litorus</a> added new task <a
                                        href="#">Patient and Doctor video conferencing</a>
                                    <span class="time">2 days ago</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="activity-user">
                                <a href="{{ url('profile') }}" title="Jeffery Lalor" data-bs-toggle="tooltip"
                                    class="avatar">
                                    <img src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="{{ url('profile') }}" class="name">Jeffery Lalor</a> added <a
                                        href="{{ url('profile') }}" class="name">Jeffrey Warden</a> and <a
                                        href="{{ url('profile') }}" class="name">Bernardo Galaviz</a> to the task of <a
                                        href="#">Private chat module</a>
                                    <span class="time">7 days ago</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
