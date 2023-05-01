<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD App Laravel 10 & Ajax</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

</head>
{{-- add new employee modal start --}}
@include('components.add_employee_modal')
{{-- add new employee modal end --}}

{{-- edit employee modal start --}}
@include('components.edit_employee_modal')
{{-- edit employee modal end --}}

<body class="bg-light">
  <div class="container">
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header bg-info d-flex justify-content-between align-items-center">
            <h3 class="text-light">Manage Employee</h3>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                class="bi-plus-circle me-2"></i>Add New Employee</button>
          </div>
          <div class="card-body">
            {{-- table start --}}
            @include('components.table')
            {{-- table end --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- script start --}}
  @include('components.script')
  {{-- script end --}}
</body>

</html>