@extends('main.dashboardMain')

@section('dashboard-page')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 title-dashboard">All Categories</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a style="margin-top: -10px;" href="/add-category" type="button" role="button" class="button-add-category"><i class="bi bi-plus-lg me-2"></i> Create Category</a>
      </div>
    </div>
    </div>

    <div class="table-responsive">
        <table class="table align-middle">
            <thead class="text-center">
              <tr>
                <th></th>
                <th scope="col">No</th>
                <th></th>
                <th scope="col">Name</th>
                <th></th>
                <th scope="col">Id</th>
                <th></th>
                <th></th>
                <th scope="col">Description</th>
                <th></th>
                <th></th>
                <th scope="col">Image</th>
                <th></th>
                <th scope="col">Action</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

              @foreach($category as $item)
                <tr>
                  <td></td>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td></td>
                  <td class="text-center" style="font-weight: 500">{{ $item->name }}</td>
                  <td></td>
                  <td class="text-center">{{ $item->id }}</td>
                  <td></td>
                  <td></td>
                  <td class="description-td w-50">{{ $item->description }}</td>
                  <td></td>
                  <td></td>
                  <td class="d-flex justify-content-center">
                    <img class="category-image" src="{{ asset('assets/upload/category/'.$item->image) }}" alt="Image Category">
                  </td>
                  <td></td>
                  <td class="text-center">
                    <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                    <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                  </td>
                  <td></td>
                </tr>
              @endforeach
              
            </tbody>
          </table>
      </div>
    
</main>
    


@endsection