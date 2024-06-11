<?php $page = 'toxbox-setting'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">ToxBox Setting</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <form>
                <div class="input-block mb-3">
                    <label class="col-form-label">ApiKey <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="xxxxxxxx" readonly="">
                </div>
                <div class="input-block mb-3">
                    <label class="col-form-label">ApiSecret <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="xxxxxxxxxxxxxxxxxxxxxxxxxx" readonly="">
                </div>

                <div class="submit-section">
                    <button class="btn btn-primary submit-btn">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection
