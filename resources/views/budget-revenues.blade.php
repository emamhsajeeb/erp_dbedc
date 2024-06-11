<?php $page = 'budget-revenues'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Budgets Revenues
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Accounts
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0" id="budget_revenues_data">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Notes</th>
                            <th>Category Name</th>
                            <th>SubCategory Name</th>
                            <th>Amount</th>
                            <th>Revenue Date</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                   <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- /Page Content -->

    @component('components.model-popup')
    @endcomponent
@endsection
