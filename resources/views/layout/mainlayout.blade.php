<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    @if (Route::is(['activities']))
        <title>Activities - DBEDC ERP</title>
    @endif
    @if (Route::is(['admin-dashboard']))
        <title>Dashboard - DBEDC ERP</title>
    @endif
    @if (Route::is(['applied-jobs']))
        <title>Applied Jobs - DBEDC ERP</title>
    @endif
    @if (Route::is(['approval-setting']))
        <title>Approval Setting - DBEDC ERP</title>
    @endif
    @if (Route::is(['apptitude-result']))
        <title>Shortlist Candidates - DBEDC ERP</title>
    @endif
    @if (Route::is(['archived-jobs']))
        <title>Archived Jobs - DBEDC ERP</title>
    @endif
    @if (Route::is(['assets-category', 'assets-details', 'assets-new', 'assets-reports', 'assets1']))
        <title>Assets - DBEDC ERP</title>
    @endif
    @if (Route::is(['attance-reports']))
        <title>Attendance Report - DBEDC ERP</title>
    @endif
    @if (Route::is([
            'attend-reports',
            'attendance-reports',
            'payments-reports',
            'payslip-reports',
            'project-reports',
            'task-reports',
            'user-reports',
        ]))
        <title>Reports - DBEDC ERP</title>
    @endif
    @if (Route::is(['attendance-employee', 'attendance']))
        <title>Attendance - DBEDC ERP</title>
    @endif
    @if (Route::is(['blank-page']))
        <title>Blank Page - DBEDC ERP</title>
    @endif
    @if (Route::is(['budget-expenses', 'budget-revenues', 'categories', 'sub-category']))
        <title>Categories - DBEDC ERP</title>
    @endif
    @if (Route::is(['budgets']))
        <title>Budgets - DBEDC ERP</title>
    @endif
    @if (Route::is(['events']))
        <title>Events - DBEDC ERP</title>
    @endif
    @if (Route::is(['candidates']))
        <title>Candidates - DBEDC ERP</title>
    @endif
    @if (Route::is(['change-password']))
        <title>Change Password - DBEDC ERP</title>
    @endif
    @if (Route::is(['chat']))
        <title>Chat - DBEDC ERP</title>
    @endif
    @if (Route::is(['client-profile']))
        <title>Client Profile - DBEDC ERP</title>
    @endif
    @if (Route::is(['clients-list', 'clients']))
        <title>Clients - DBEDC ERP</title>
    @endif
    @if (Route::is(['components']))
        <title>Components - DBEDC ERP</title>
    @endif
    @if (Route::is(['compose']))
        <title>Compose - DBEDC ERP</title>
    @endif
    @if (Route::is(['contacts']))
        <title>Contacts - DBEDC ERP</title>
    @endif
    @if (Route::is(['create-estimate']))
        <title>Create Estimate - DBEDC ERP</title>
    @endif
    @if (Route::is(['create-invoice']))
        <title>Create Invoice - DBEDC ERP</title>
    @endif
    @if (Route::is(['cron-setting']))
        <title>Cron Setting - DBEDC ERP</title>
    @endif
    @if (Route::is(['daily-reports']))
        <title>Daily Report - DBEDC ERP</title>
    @endif
    @if (Route::is(['data-tables']))
        <title>Data Tables - DBEDC ERP</title>
    @endif
    @if (Route::is(['departments']))
        <title>Departments - DBEDC ERP</title>
    @endif
    @if (Route::is(['designations']))
        <title>Designations - DBEDC ERP</title>
    @endif
    @if (Route::is(['edit-estimate']))
        <title>Edit Estimate - DBEDC ERP</title>
    @endif
    @if (Route::is(['edit-invoice']))
        <title>Edit Invoice - DBEDC ERP</title>
    @endif
    @if (Route::is(['email-settings']))
        <title>Email Settings - DBEDC ERP</title>
    @endif
    @if (Route::is(['employee-dashboard']))
        <title>Employee Dashboard - DBEDC ERP</title>
    @endif
    @if (Route::is(['employee-reports']))
        <title>Employee Report - DBEDC ERP</title>
    @endif
    @if (Route::is(['employees-list', 'employees']))
        <title>Employees - DBEDC ERP</title>
    @endif
    @if (Route::is(['error-404']))
        <title>Error 404 - DBEDC ERP</title>
    @endif
    @if (Route::is(['error-500']))
        <title>Error 500 - DBEDC ERP</title>
    @endif
    @if (Route::is(['estimate-view', 'estimates']))
        <title>Estimates - DBEDC ERP</title>
    @endif
    @if (Route::is(['events']))
        <title>Events - DBEDC ERP</title>
    @endif
    @if (Route::is(['expense-reports']))
        <title>Expense Report - DBEDC ERP</title>
    @endif
    @if (Route::is(['expenses']))
        <title>Expenses - DBEDC ERP</title>
    @endif
    @if (Route::is(['experiance-level']))
        <title>Experiance Level - DBEDC ERP</title>
    @endif
    @if (Route::is(['faq']))
        <title>FAQ - DBEDC ERP</title>
    @endif
    @if (Route::is(['file-manager']))
        <title>File Manager - DBEDC ERP</title>
    @endif
    @if (Route::is(['forgot-password']))
        <title>Forgot Password - DBEDC ERP</title>
    @endif
    @if (Route::is(['form-basic-inputs']))
        <title>Form Basic Input - DBEDC ERP</title>
    @endif
    @if (Route::is(['form-horizontal']))
        <title>Horizontal Form - DBEDC ERP</title>
    @endif
    @if (Route::is(['form-input-groups']))
        <title>Form Input Groups - DBEDC ERP</title>
    @endif
    @if (Route::is(['form-mask']))
        <title>Form Mask - DBEDC ERP</title>
    @endif
    @if (Route::is(['form-validation']))
        <title>Form Validation - DBEDC ERP</title>
    @endif
    @if (Route::is(['form-vertical']))
        <title>Form Vertical - DBEDC ERP</title>
    @endif
    @if (Route::is(['goal-tracking', 'goal-type']))
        <title>Goal - DBEDC ERP</title>
    @endif
    @if (Route::is(['holidays']))
        <title>Holidays - DBEDC ERP</title>
    @endif
    @if (Route::is(['inbox']))
        <title>Inbox - DBEDC ERP</title>
    @endif
    @if (Route::is(['incoming-call']))
        <title>Incoming Call - DBEDC ERP</title>
    @endif
    @if (Route::is(['login']))
        <title>Login - DBEDC ERP</title>
    @endif
    @if (Route::is(['interview-questions']))
        <title>Interview Questions - DBEDC ERP</title>
    @endif
    @if (Route::is(['interviewing']))
        <title>Interviewing Page - DBEDC ERP</title>
    @endif
    @if (Route::is(['invoice-reports']))
        <title>Invoice Report - DBEDC ERP</title>
    @endif
    @if (Route::is(['invoice-settings']))
        <title>Invoice Settings - DBEDC ERP</title>
    @endif
    @if (Route::is(['invoice-view']))
        <title>Invoice - DBEDC ERP</title>
    @endif
    @if (Route::is(['invoices']))
        <title>Invoices - DBEDC ERP</title>
    @endif
    @if (Route::is(['job-applicants']))
        <title>Job Applicants - DBEDC ERP</title>
    @endif
    @if (Route::is(['jobs-aptitude']))
        <title>Aptitude - DBEDC ERP</title>
    @endif
    @if (Route::is(['job-details', 'job-list', 'job-view', 'jobs']))
        <title>Jobs - DBEDC ERP</title>
    @endif
    @if (Route::is(['jobs-dashboard']))
        <title>Job Dashboard - DBEDC ERP</title>
    @endif
    @if (Route::is(['knowledgebase', 'knowledgebase-view']))
        <title>Knowledgebase - DBEDC ERP</title>
    @endif
    @if (Route::is(['leads']))
        <title>Leads - DBEDC ERP</title>
    @endif
    @if (Route::is(['leave-reports']))
        <title>Leave Report - DBEDC ERP</title>
    @endif
    @if (Route::is(['leave-settings']))
        <title>Leave Settings - DBEDC ERP</title>
    @endif
    @if (Route::is(['leave-type']))
        <title>Leave Type - DBEDC ERP</title>
    @endif
    @if (Route::is(['leaves', 'leaves-employee']))
        <title>Leaves - DBEDC ERP</title>
    @endif
    @if (Route::is(['localization']))
        <title>Localization - DBEDC ERP</title>
    @endif
    @if (Route::is(['lock-screen']))
        <title>Lock Screen - DBEDC ERP</title>
    @endif
    @if (Route::is(['mail-view']))
        <title>Mail view - DBEDC ERP</title>
    @endif
    @if (Route::is(['manage-resumes']))
        <title>Manage Resumes - DBEDC ERP</title>
    @endif
    @if (Route::is(['notifications-settings']))
        <title>Notifications Settings - DBEDC ERP</title>
    @endif
    @if (Route::is(['offer_approvals']))
        <title>Offer Approvals - DBEDC ERP</title>
    @endif
    @if (Route::is(['offered-jobs']))
        <title>Offered Jobs - DBEDC ERP</title>
    @endif
    @if (Route::is(['otp']))
        <title>OTP - DBEDC ERP</title>
    @endif
    @if (Route::is(['outgoing-call']))
        <title>Outgoing Call - DBEDC ERP</title>
    @endif
    @if (Route::is(['overtime']))
        <title>Overtime - DBEDC ERP</title>
    @endif
    @if (Route::is(['payments']))
        <title>Payments - DBEDC ERP</title>
    @endif
    @if (Route::is(['payroll-items']))
        <title>Payroll Items - DBEDC ERP</title>
    @endif
    @if (Route::is(['performance-appraisal']))
        <title>Performance Appraisal - DBEDC ERP</title>
    @endif
    @if (Route::is(['performance-indicator']))
        <title>Performance Indicator - DBEDC ERP</title>
    @endif
    @if (Route::is(['performance-setting']))
        <title>Performance Setting - DBEDC ERP</title>
    @endif
    @if (Route::is(['performance']))
        <title>Performance Review - DBEDC ERP</title>
    @endif
    @if (Route::is(['policies']))
        <title>Policies - DBEDC ERP</title>
    @endif
    @if (Route::is(['privacy-policy']))
        <title>Privacy Policy - DBEDC ERP</title>
    @endif
    @if (Route::is(['user-asset-details', 'profile']))
        <title>Employee Profile - DBEDC ERP</title>
    @endif
    @if (Route::is(['projects', 'project-list']))
        <title>Projects - DBEDC ERP</title>
    @endif
    @if (Route::is(['project-view']))
        <title>Project View - DBEDC ERP</title>
    @endif
    @if (Route::is(['promotion']))
        <title>Promotion - DBEDC ERP</title>
    @endif
    @if (Route::is(['provident-fund']))
        <title>Provident Fund - DBEDC ERP</title>
    @endif
    @if (Route::is(['questions']))
        <title>Aptitude - DBEDC ERP</title>
    @endif
    @if (Route::is(['register']))
        <title>Register - DBEDC ERP</title>
    @endif
    @if (Route::is(['resignation']))
        <title>Resignation - DBEDC ERP</title>
    @endif
    @if (Route::is(['roles-permissions']))
        <title>Roles & Permission - DBEDC ERP</title>
    @endif
    @if (Route::is(['salary-settings']))
        <title>Salary Settings - DBEDC ERP</title>
    @endif
    @if (Route::is(['salary', 'salary-view']))
        <title>Salary - DBEDC ERP</title>
    @endif
    @if (Route::is(['saved-jobs']))
        <title>Saved Jobs - DBEDC ERP</title>
    @endif
    @if (Route::is(['schedule-timing']))
        <title>Schedule timing - DBEDC ERP</title>
    @endif
    @if (Route::is(['search']))
        <title>Search Results - DBEDC ERP</title>
    @endif
    @if (Route::is(['settings']))
        <title>Settings - DBEDC ERP</title>
    @endif
    @if (Route::is(['shift-list']))
        <title>Shift List - DBEDC ERP</title>
    @endif
    @if (Route::is(['shift-scheduling']))
        <title>Shift & Schedule - DBEDC ERP</title>
    @endif
    @if (Route::is(['shortlist-candidates']))
        <title>Shortlist Candidates - DBEDC ERP</title>
    @endif
    @if (Route::is(['subscribed-companies', 'subscriptions-company', 'subscriptions']))
        <title>Subscriptions - DBEDC ERP</title>
    @endif
    @if (Route::is(['tables-basic']))
        <title>Basic Tables - DBEDC ERP</title>
    @endif
    @if (Route::is(['task-board']))
        <title>Task Board - DBEDC ERP</title>
    @endif
    @if (Route::is(['tasks']))
        <title>Tasks - DBEDC ERP</title>
    @endif
    @if (Route::is(['taxes']))
        <title>Taxes - DBEDC ERP</title>
    @endif
    @if (Route::is(['termination']))
        <title>Termination - DBEDC ERP</title>
    @endif
    @if (Route::is(['terms']))
        <title>Terms - DBEDC ERP</title>
    @endif
    @if (Route::is(['theme-settings']))
        <title>Theme Settings - DBEDC ERP</title>
    @endif
    @if (Route::is(['tickets', 'ticket-view']))
        <title>Tickets - DBEDC ERP</title>
    @endif
    @if (Route::is(['toxbox-setting']))
        <title>Toxbox Settings- DBEDC ERP</title>
    @endif
    @if (Route::is(['trainers']))
        <title>Trainers - DBEDC ERP</title>
    @endif
    @if (Route::is(['training', 'training-type']))
        <title>Training - DBEDC ERP</title>
    @endif
    @if (Route::is(['user-all-jobs']))
        <title>All Jobs - DBEDC ERP</title>
    @endif
    @if (Route::is(['user-dashboard']))
        <title>User Dashboard - DBEDC ERP</title>
    @endif
    @if (Route::is(['users']))
        <title>Users - DBEDC ERP</title>
    @endif
    @if (Route::is(['video-call']))
        <title>Video Call - DBEDC ERP</title>
    @endif
    @if (Route::is(['visited-jobs']))
        <title>Visited Jobs - DBEDC ERP</title>
    @endif
    @if (Route::is(['voice-call']))
        <title>Voice Call - DBEDC ERP</title>
    @endif
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('/assets/img/favicon.png') }}">
    @include('layout.partials.head')
</head>
@if (!Route::is('index', 'register', 'forgot-password', 'otp', 'lock-screen'))

    <body>
@endif
@if (Route::is('login', 'register', 'forgot-password', 'otp', 'lock-screen'))

    <body class="account-page">
@endif
<!-- Main Wrapper -->
<div class="main-wrapper">
    @if (
        !Route::is([
            'error-404',
            'error-500',
            'lock-screen',
            'otp',
            'forgot-password',
            'login',
            'register',
            'change-password',
        ]))
        @include('layout.partials.header')
        @if (!Route::is(['error-404', 'job-list', 'job-view']))
            @include('layout.partials.nav')
        @endif
        @if (!Route::is(['error-404', 'job-list', 'job-view', 'login', 'register', 'change-password']))
            @include('layout.partials.twocolumnsidebar')
        @endif
        @if (
            !Route::is([
                'chat',
                'contacts',
                'ticket-view',
                'incoming-call',
                'job-list',
                'job-view',
                'outgoing-call',
                'tasks',
                'ticket-view',
                'video-call',
                'voice-call',
            ]))
            <!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

                    @yield('content')
                </div>
            </div>
        @endif
        <!-- /Page Wrapper -->
        @if (Route::is(['chat', 'tasks', 'ticket-view', 'video-call', 'voice-call']))
            <!-- Page Wrapper -->
            <div class="page-wrapper">

                <!-- Chat Main Row -->
                <div class="chat-main-row">

                    <!-- Chat Main Wrapper -->
                    <div class="chat-main-wrapper">
                        @yield('content')
                    </div>
                </div>
            </div>
        @endif
        @if (Route::is(['contacts']))
            <!-- Page Wrapper -->
            <div class="page-wrapper">

                <!-- Contact Main Row -->
                <div class="chat-main-row">
                    @yield('content')
                </div>
            </div>
        @endif
        @if (Route::is(['incoming-call']))
            <!-- Page Wrapper -->
            <div class="page-wrapper">

                <!-- Incoming Call -->
                <div class="call-box incoming-box">
                    @yield('content')
                </div>
            </div>
        @endif
        @if (Route::is(['outgoing-call']))
            <!-- Page Wrapper -->
            <div class="page-wrapper">

                <!-- Outgoing Call -->
                <div class="call-box outgoing-box">
                    @yield('content')
                </div>
            </div>
        @endif

        @if (Route::is(['job-list', 'job-view']))
            <!-- Page Wrapper -->
            <div class="page-wrapper job-wrapper">

                <!-- Page Content -->
                <div class="content container">
                    @yield('content')
                </div>
            </div>
        @endif
    @endif
    @if (Route::is([
            'error-404',
            'error-500',
            'lock-screen',
            'otp',
            'forgot-password',
            'login',
            'register',
            'change-password',
        ]))
        @yield('content')
    @endif

</div>
<!-- /Main Wrapper -->
@if(Route::is(['incoming-call','outgoing-call']))
@component('components.model-popup')
@endcomponent
@endif
@if (
    !Route::is([
        'error-404',
        'error-500',
        'lock-screen',
        'otp',
        'forgot-password',
        'login',
        'register',
        'change-password',
        'job-list',
        'job-view'
    ]))
    @component('components.theme-setting')
    @endcomponent
@endif
@include('layout.partials.footer-scripts')
</body>

</html>
