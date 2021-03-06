@extends('layouts.admin.master_admin')

@section('content')
  <div class="content-wrapper">
    <div class="row">
      <form class="col-md-12" action="{{ route('admin_satuan.update', ['id' => $satuan->id]) }}" method="POST">
        {{ method_field('PUT')}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Perbarui Satuan</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Satuan</label>
                    <div class="col-sm-9">
                      <input type="text" name="nama" class="form-control" placeholder="misal : Kilogram" value="{{ $satuan->nama }}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-success mr-2">Simpan</button>
                  <a href="{{ route('admin_satuan.index') }}" class="btn btn-secondary mr-2">Batal</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection