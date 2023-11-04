@extends('layouts.admin')

@section('content')
<style>
  .hgt{
    display: flex;
    justify-content: space-between;
  }
  .input{
    display: flex;
    justify-content: space-between;
  }
  .datatable-top {
    /* display: none; */
  }
</style>
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <div class="hgt">
                <h5 class="card-title">Basic Information List</h5>
              
              <div class="bt mt-2"><a href="{{ route('information.create')}}" class="btn btn-sm btn-primary">Create</a></div>
            </div>

            {{-- <div class="col-12 row">
              <form class="input" id="search-form" action="" method="GET">
                <div class="col-2">
                  <label class="mb-0 opacity-50">Divisions</label>
                  <select class="form-control form-control-sm" data-live-search="true" name="division_id" onchange="filter()">
                      <option value="">All Division</option>
                      @foreach ($divisions as $division)
                          <option value="{{$division->id}}" @isset($division_id) @if ($division_id == $division->id) selected @endif @endisset>{{$division->name}}</option>
                      @endforeach
                  </select>
                </div>
              </form>
            </div> --}}
            <hr>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                    <th scope="col">Sl.</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Passport </th>
                    <th scope="col">Passport Expiry Date </th>
                    <th scope="col">LMIA</th>
                    <th scope="col">LMIA Active</th>
                    <th scope="col">Document ID</th>
                    <th scope="col">Document Validity</th>
                    <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($infos as $key => $info)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $info->last_name }}</td>
                        <td>{{ $info->first_name }}</td>
                        <td>{{ $info->passport }}</td>
                        <td>{{ $info->pass_exp_date }}</td>
                        <td>{{ $info->lmia }}</td>
                        <td>{{ $info->lmia_active }}</td>
                        <td>{{ $info->document_id }}</td>
                        <td>{{ $info->document_valid }}</td>
                        <td>
                            <a href="{{ route('information.show', $info->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                            <a href="{{ route('information.edit', $info->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                            <form action="{{ route('information.destroy', $info->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this center?')"><i class="bi bi-trash"></i></button>
                            </form>
                            <a href="{{ route('infostatus.edit', $info->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>Status</a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
</section>

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">

        function filter(){
            setTimeout(function() { 
                $('#search-form').submit();
            }, 100);
            
        }
    </script>
@endsection


@endsection