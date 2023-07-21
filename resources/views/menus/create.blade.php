@extends('adminlte::page')

@section('title', 'Menu Add')

@section('content_header')
    <h1>Menu Add</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="card border-0 shadow rounded">
          <div class="card-body">
              <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
              
                  @csrf
  
                  <div class="d-flex">
  
                    <!-- Rest of the left column form fields -->
                    <div class="col-md-6">

                          
                        <div class="form-group">
                            <label class="font-weight-bold">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Insert name">
                        
                            <!-- error message untuk title -->
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                      <div class="form-group">
                          <label class="font-weight-bold">Select Category</label>
                            {{-- <select type="text" class="form-control @error('category') is-invalid @enderror" name="category_id" class="custom-select form-control-border" id="category_id" >
                            <option value="" hidden> -- Select Category --</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                          </select> --}}
                          
                            <!-- error message untuk title -->
                            @error('category_id')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                      </div>

  
                      <div class="form-group">
                          <label class="font-weight-bold">Image</label>
                          <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="selectImage">
                      
                          <!-- error message untuk title -->
                          @error('image')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
  
                      <div class="form-group rounded mx-auto d-block img-fluid" >
                          <img id="preview" src="#" alt="your image" class="rounded" style="width: 150px"/>
                      </div>
  
                      <!-- Rest of the left column form fields -->
  
                      <div class="form-group">
                        <label class="font-weight-bold">Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="Insert price">
                        
                            <!-- error message untuk title -->
                            @error('price')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                      </div>
  
                    </div>
  
                    <div class="col-md-6">
                      
                      <div class="form-group">
                          <label class="font-weight-bold">Description</label>
                              <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" placeholder="Insert description"></textarea>
                          
                              <!-- error message untuk title -->
                              @error('description')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                      </div>
      
                      <button type="submit" class="btn btn-md btn-primary">Save</button>
                      <button type="reset" class="btn btn-md btn-warning">Reset</button>
                    </div>
                  </div>
  
              </form>
          </div>
      </div>

    </div>
  </div>
@stop

@section('css')

@stop

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    selectImage.onchange = evt => {
        preview = document.getElementById('preview');
        preview.style.display = 'block';
        const [file] = selectImage.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }
    }
</script>

<script>
  $(document).ready(function() {
      // Function to clear the form inputs
      function clearFormInputs() {
          // Get all form elements by their names
          const formElements = ['category_id', 'name', 'image', 'price', 'stock', 'discount', 'status', 'rating', 'slug', 'description'];

          // Loop through each form element and set their values to empty
          formElements.forEach(function(elementName) {
              $(`[name="${elementName}"]`).val('');
          });

          // Reset the preview image
          $('#preview').attr('src', '#');
      }

      // Call the clearFormInputs function on page load or refresh
      clearFormInputs();
  });
</script>


@stop