<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{ url('/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ url('/assets/plugins/fontawesome/css/all.min.css') }}">

@if (!Route::is(['otp', 'register']))
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/material.css') }}">
@endif

@if (Route::is(['admin-dashboard', 'assets-category', 'assets-new']))
    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/morris/morris.css') }}">
@endif

@if (Route::is([
        'applied-jobs',
        'apptitude-result',
        'archived-jobs',
        'assets-category',
        'assets-details',
        'assets-new',
        'assets-reports',
        'assets1',
        'attance-reports',
        'attendance-reports',
        'candidates',
        'clients-list',
        'daily-reports',
        'data-tables',
        'departments',
        'designations',
        'employee-reports',
        'employees-list',
        'expense-reports',
        'expenses',
        'experiance-level',
        'goal-tracking',
        'goal-type',
        'interview-questions',
        'interviewing',
        'invoice-reports',
        'job-applicants',
        'job-aptitude',
        'job-details',
        'job-list',
        'job-view',
        'jobs',
        'leads',
        'leave-reports',
        'leave-type',
        'leaves-employee',
        'leaves',
        'manage-resumes',
        'offer_approvals',
        'offered-jobs',
        'overtime',
        'payments-reports',
        'payments',
        'payroll-items',
        'payslip-reports',
        'performance-appraisal',
        'performance-indicator',
        'policies',
        'profile',
        'project-list',
        'project-reports',
        'promotion',
        'provident-fund',
        'questions',
        'resignation',
        'salary',
        'saved-jobs',
        'schedule-timing',
        'shift-list',
        'shift-scheduling',
        'shortlist-candidates',
        'subscribed-companies',
        'task-reports',
        'termination',
        'tickets',
        'timesheet',
        'trainers',
        'training-type',
        'training',
        'user-all-jobs',
        'user-reports',
        'users',
        'visited-jobs',
    ]))
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css/dataTables.bootstrap4.min.css') }}">
@endif
<!-- Datatables CSS -->
<link rel="stylesheet" href="{{ url('assets/plugins/datatables/datatables.min.css') }}">
@if (Route::is([
        'applied-jobs',
        'approval-setting',
        'apptitude-result',
        'archived-jobs',
        'assets-details',
        'assets-new',
        'assets-reports',
        'assets1',
        'attance-reports',
        'attend-reports',
        'attendance-employee',
        'attendance-reports',
        'attendance',
        'calendar',
        'candidates',
        'clients-list',
        'clients',
        'components',
        'compose',
        'create-estimate',
        'create-invoice',
        'daily-reports',
        'designations',
        'edit-estimate',
        'edit-invoice',
        'email-settings',
        'employee-reports',
        'employees-list',
        'employees',
        'estimates',
        'events',
        'expense-reports',
        'expenses',
        'experiance-level',
        'form-horizontal',
        'form-vertical',
        'goal-tracking',
        'goal-type',
        'interview-questions',
        'invoice-reports',
        'invoices',
        'job-applicants',
        'job-aptitude',
        'job-details',
        'job-list',
        'job-view',
        'jobs',
        'jobs-dashboard',
        'leave-reports',
        'leave-settings',
        'leaves-employee',
        'leaves',
        'localization',
        'manage-resumes',
        'offer_approvals',
        'offered-jobs',
        'overtime',
        'payments-reports',
        'payroll-items',
        'payslip-reports',
        'performance-appraisal',
        'performance-indicator',
        'performance',
        'policies',
        'profile',
        'project-list',
        'project-reports',
        'project-view',
        'projects',
        'promotion',
        'provident-fund',
        'questions',
        'resignation',
        'salary',
        'saved-jobs',
        'schedule-timing',
        'settings',
        'shift-list',
        'shift-scheduling',
        'shortlist-candidates',
        'sub-category',
        'subscribed-companies',
        'subscriptions',
        'task-board',
        'task-reports',
        'tasks',
        'taxes',
        'termination',
        'ticket-view',
        'tickets',
        'timesheet',
        'trainers',
        'training-type',
        'training',
        'user-all-jobs',
        'user-asset-details',
        'user-reports',
        'users',
        'visited-jobs',
        'client-profile',
        'search',
        'budget-expenses','budget-revenues','interviewing'
    ]))
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css/select2.min.css') }}">
@endif
@if(Route::is(['leave-settings']))
<!-- Lineawesome CSS -->
<link rel="stylesheet" href="{{ url('/assets/css/line-awesome.min.css')}}">
@endif
@if (Route::is([
        'apptitude-result',
        'assets-category',
        'assets-new',
        'assets-reports',
        'assets1',
        'attance-reports',
        'attendance-employee',
        'attendance',
        'budget-expenses',
        'budget-revenues',
        'budgets',
        'calendar',
        'candidates',
        'categories',
        'components',
        'create-estimate',
        'create-invoice',
        'daily-reports',
        'edit-estimate',
        'edit-invoice',
        'employee-reports',
        'employees-list',
        'employees',
        'estimates',
        'events',
        'expense-reports',
        'expenses',
        'experiance-level',
        'goal-tracking',
        'holidays',
        'interview-questions',
        'invoice-reports',
        'invoices',
        'job-applicants',
        'job-details',
        'job-list',
        'job-view',
        'jobs',
        'jobs-dashboard',
        'leave-reports',
        'leave-settings',
        'leaves-employee',
        'leaves',
        'manage-resumes',
        'offer_approvals',
        'overtime',
        'payments-reports',
        'payroll-items',
        'performance-appraisal',
        'performance-indicator',
        'profile',
        'project-list',
        'project-view',
        'projects',
        'promotion',
        'resignation',
        'salary',
        'schedule-timing',
        'shift-list',
        'shift-scheduling',
        'shortlist-candidates',
        'sub-category',
        'subscribed-companies',
        'task-board',
        'tasks',
        'termination',
        'tickets',
        'timesheet',
        'training',
        'user-asset-details',
        'users',
        'client-profile',
        'search'
    ]))
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap-datetimepicker.min.css') }}">
@endif

@if (Route::is(['assets-category', 'assets-details', 'assets-new']))
    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/daterangepicker/daterangepicker.css') }}">
@endif

@if (Route::is(['calendar', 'events']))
    <!-- Calendar CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css/fullcalendar.min.css') }}">
@endif

@if (Route::is(['compose', 'projects', 'tasks']))
    <!-- Ck Editor -->
    <link rel="stylesheet" href="{{ url('/assets/css/ckeditor.css') }}">
@endif

@if (Route::is(['components', 'leave-settings', 'user-asset-details']))
    <!-- Tagsinput CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endif
<!-- Main CSS -->
<link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
