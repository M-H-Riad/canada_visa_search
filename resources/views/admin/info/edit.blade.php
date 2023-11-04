@extends('layouts.admin')

@section('content')
<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Update Basic Information</h5>

        <!-- Vertical Form -->
        <form method="POST" action="{{route('information.update', $info->id)}}" class="row g-3" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-6 form-group">
                <label for="first_name">First Name <span class="required">*</span></label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $info->first_name }}" required>
            </div>
    
            <div class="col-6 form-group">
                <label for="last_name">Last Name <span class="required">*</span></label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $info->last_name }}" required>
            </div>
    
            <div class="col-6 form-group">
                <label for="passport">Passport <span class="required">*</span></label>
                <input type="text" name="passport" id="passport" class="form-control" value="{{ $info->passport }}" required>
            </div>
    
            <div class="col-6 form-group">
                <label for="pass_exp_date">Passport Expiry Date</label>
                <input type="date" name="pass_exp_date" id="pass_exp_date" class="form-control" value="{{ $info->pass_exp_date }}">
            </div>
    
            <div class="col-6 form-group">
                <label for="lmia">LMIA</label>
                <input type="text" name="lmia" id="lmia" class="form-control" value="{{ $info->lmia }}">
            </div>
    
            <div class="col-6 form-group">
                <label for="lmia_active">LMIA Active</label>
                <input type="date" name="lmia_active" id="lmia_active" class="form-control" value="{{ $info->lmia_active }}">
            </div>
    
            <div class="col-6 form-group">
                <label for="document_id">Document ID</label>
                <input type="text" name="document_id" id="document_id" class="form-control" value="{{ $info->document_id }}">
            </div>
    
            <div class="col-6 form-group">
                <label for="document_valid">Document Valid</label>
                <input type="date" name="document_valid" id="document_valid" class="form-control" value="{{ $info->document_valid }}">
            </div>
            
            <div class="col-6 float-right">
                <a href="{{route('information.index')}}" class="btn btm-md btn-warning">Cancel</a>
                <button type="submit" class="btn btm-md btn-primary">Save</button>
            </div>
        </form>
        

      </div>
    </div>
</div>

@endsection