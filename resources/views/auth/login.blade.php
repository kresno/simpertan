@extends('layouts.master_login')

@section('content')
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
    <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
      <div class="row w-100">
        <div class="col-lg-4 mx-auto">
          <div class="auto-form-wrapper">
            <div class="form-group">
              <div class="logo">
                <img src="{{ asset('/images/login-logo.png') }}">
                <h4 class="label">SIMPERTAN</h4>
              </div>
            </div>
            <form method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="label">Email</label>
                <div class="input-group">
                  <input type="text" name="email" class="form-control" placeholder="email">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="label">Password</label>
                <div class="input-group">
                  <input type="password" name="password" class="form-control" placeholder="*********">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
@endsection
