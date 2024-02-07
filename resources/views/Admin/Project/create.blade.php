@extends('layouts.admin')

    <!--contenitore-->
   <div class="container">

    <!--form-->
        <form class="form" action="{{route('project.store')}}" method="POST">
        <h1 class="text-center">Create new comic</h1>    
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Title:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="formGroupExampleInput" placeholder="insert Title" name="title" required>
          
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Price:</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="formGroupExampleInput2" placeholder="insert price" name="price" required>

            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Description:</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="formGroupExampleInput" placeholder="insert description" name="description" required>
          
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Sale Date:</label>
            <input type="text" class="form-control @error('Sale_date') is-invalid @enderror" id="formGroupExampleInput2" placeholder="insert Sale Date" name="sale_date" required>
          
            @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Series:</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="formGroupExampleInput2" placeholder="insert series" name="series" required>
          
            @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Type:</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="formGroupExampleInput2" placeholder="insert type" name="type" required>
          
            @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Thumb:</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="formGroupExampleInput2" placeholder="insert name img" name="thumb" required>
          
            @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          
          </div>

          <input type="submit">
    </form>
    <!--/form-->

   </div>
   <!--/contenitore-->
