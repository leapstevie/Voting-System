@extends('admin.layouts.app')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid my-2">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Users</h1>
      </div>
      <div class="col-sm-6 text-right">
        <a href="create-user.html" class="btn btn-primary">New User</a>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <div class="card-tools">
          <div class="input-group input-group" style="width: 250px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>Entry_No</th>
              <th>EmployeeID</th>
              <th>PPWSA_Code</th>
              <th>EmployeeName_KH</th>
              <th>EmployeeName_EN</th>
              <th>Department</th>
              <th>Office</th>
              <th>Section</th>
              <th>D_Level</th>
              <th>Gender</th>
              <th>Status</th>
              <th>Remark</th>
            </tr>
          </thead>
          <tbody>
            @foreach($employees as $emp)
            <tr>
              <td>{{ $emp->Entry_No }}</td>
              <td>{{ $emp->EmployeeID }}</td>
              <td>{{ $emp->PPWSA_Code }}</td>
              <td>{{ $emp->EmployeeName_KH }}</td>
              <td>{{ $emp->EmployeeName_EN }}</td>
              <td>{{ $emp->Department }}</td>
              <td>{{ $emp->Office }}</td>
              <td>{{ $emp->Section }}</td>
              <td>{{ $emp->D_Level }}</td>
              <td>{{ $emp->Gender }}</td>
              <td>{{ $emp->Status }}</td>
              <td>{{ $emp->Remark }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>
  <!-- /.card -->
</section>
<!-- /.content -->
@endsection

@section('customerJS')
<script>

</script>
@endsection