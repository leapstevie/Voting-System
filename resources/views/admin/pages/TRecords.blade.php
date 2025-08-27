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
              <th>Vote_ID</th>
              <th>EmployeeID</th>
              <th>EmployeeCode</th>
              <th>EmployeeName_KH</th>
              <th>Department</th>
              <th>Office</th>
              <th>Vote_Type</th>
              <th>Candidate</th>
              <th>Vote_Option</th>
              <th>Year</th>
              <th>Time</th>
              <th>Status</th>
              <th>Vote_Date</th>
              <th>Vote_Code</th>
              <th>Can_ID</th>
              <th>Vote_Time</th>
            </tr>
          </thead>
          <tbody>
            @foreach($records as $rec)
            <tr>
              <td>{{ $rec->Vote_ID }}</td>
              <td>{{ $rec->EmployeeID }}</td>
              <td>{{ $rec->EmployeeCode }}</td>
              <td>{{ $rec->EmployeeName_KH }}</td>
              <td>{{ $rec->Department }}</td>
              <td>{{ $rec->Office }}</td>
              <td>{{ $rec->Vote_Type }}</td>
              <td>{{ $rec->Candidate }}</td>
              <td>{{ $rec->Vote_Option }}</td>
              <td>{{ $rec->Year }}</td>
              <td>{{ $rec->Time }}</td>
              <td>{{ $rec->Status }}</td>
              <td>{{ $rec->Vote_Date }}</td>
              <td>{{ $rec->Vote_Code }}</td>
              <td>{{ $rec->Can_ID }}</td>
              <td>{{ $rec->Vote_Time }}</td>
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