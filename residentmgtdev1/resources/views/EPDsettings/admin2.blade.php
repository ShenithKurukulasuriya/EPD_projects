@extends('layout')
		
		@section('content')
		<div class="center-container">
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>User Role</th>
          <th>Status</th>
          <th class="edit"></th>
          <th class="delete"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Admin</td>
          <td class="status">Active</td>
          <td class="edit"></td>
          <td class="delete"></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Staff</td>
          <td class="status">Active</td>
          <td class="edit"></td>
          <td class="delete"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection


@push('styles')
		<link rel="stylesheet" href="{{ asset('css/EPDsettings/admin1.css') }}">
		@endpush