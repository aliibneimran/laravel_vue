@extends('layouts.app')
@section('title','All Jobs')
@section('content')
<div class="content">
    <div class="card card-default">
        <div class="card-header">
          <h2>All Jobs</h2>
          @if(Auth::guard('company')->check())
          <a href="{{route('jobs.create')}}" class="btn btn-primary justify-content-center">Add New</a>@endif
        </div>
        <!-- Success Message -->
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('msg') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
        </div>
        @endif
        <div class="card-body">
          <table id="productsTable" class="table table-product" style="width:100%">
            <thead>
              <tr>
                <th>SI</th>
                <th>Image</th>
                <th>Job Title</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Vacancy</th>
                <th>Location</th>
                <th>Category</th>
                <th>Industry</th>
                <th>Availability</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $no = 1 @endphp
              @foreach ($jobs as $item)
                <tr>
                  <td>{{$no++}}</td>
                  <td>
                    <img src="{{ asset($item->image ? 'uploads/' . $item->image : 'uploads/default_image.jpg') }}" alt="Image" width="50px" height="50px">
                  </td>
                  <td>{{$item->title}}</td>
                  <td>{{$item->position}}</td>
                  <td>{{$item->salary}}</td>
                  <td>{{$item->vacancy}}</td>
                  <td>{{$item->location->name}}</td>
                  <td>{{$item->category->name}}</td>
                  <td>{{$item->industry->name}}</td>
                  <td>@if($item->availability == 1)Available @else Not Available @endif</td>
                  <td>
                  @if(Auth::guard('company')->check())
                    <a href="{{ route('jobs.edit', $item->id) }}" class="m-2">
                        <i class="mdi mdi-square-edit-outline"></i>
                    </a>
                  @elseif(Auth::guard('admin')->check())
                    <form action="{{ route('packages.destroy', $item->id) }}" method="POST" style="display: inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" onclick="return confirm('Are you sure to delete')">
                          <i class="mdi mdi-trash-can-outline"></i>
                      </button>
                    </form>
                  @endif
                  </td>              
                </tr>
              @endforeach
              
            </tbody>
          </table>
      </div>
</div>
@endsection
