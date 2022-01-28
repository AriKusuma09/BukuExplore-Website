@extends('main.dashboardMain')

@section('dashboard-page')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 title-dashboard"><a class="text-black text-decoration-none" href="/categories">Add Category</a></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="col-md-12 form-item">
            <button style="margin-top: -10px;" type="submit" class="btn-add-category">Add Category +</button>
        </div>
    </div>
    </div>

    {{-- Form Add Category --}}
    <div class="form-body container">
            <div class="row">
                <div class="col-md-6 form-item mt-5">
                    <label for="">Name</label>
                    <input type="text" class="form-control input-name @error('name') is-invalid @enderror" name="name" placeholder="Name Category..."  autocomplete="off">
                    @error('name')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
                    <label class="mt-4" for="">Slug</label>
                    <input type="text" class="form-control input-slug @error('slug') is-invalid @enderror" name="slug" placeholder="Slug Category..."  autocomplete="off">
                    @error('slug')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
                </div>
                
                <div class="col-md-12 form-item mt-4">
                    <label for="">Description</label>
                    <textarea  name="description" rows="5" class="form-control input-description @error('description') is-invalid @enderror" placeholder="Type Category Description Here..."  autocomplete="off"></textarea>
                    @error('description')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
                </div>
                <div class=" form-item mt-5">
                    <input style="width: 20px; height: 20px;" class="me-1 form-check-input" type="checkbox" id="status" name="status">
                    <label class="me-3" for="status"> Status</label>
                    <input style="width: 20px; height: 20px;" class="me-1 ms-2 form-check-input" id="popular" type="checkbox" name="popular">
                    <label for="popular"> Popular</label>
                </div>
                <div class="col-md-12 form-item mt-5 mb-5">
                    <input type="file" name="image" id="image" class="form-control input-image @error('image') is-invalid @enderror" onchange="previewImage()">
                    <img class="img-preview shadow img-fluid">
                    @error('image')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
                </div>
            </div>
        </form>
    </div>
    
</main>


<script>
    // Image Preview
    function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
    }
</script>


@endsection