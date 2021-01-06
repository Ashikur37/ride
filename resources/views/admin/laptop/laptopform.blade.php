@extends('layouts.app')
@section('title','Laptop')
@section('content')


<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<h5 class="card-header">Laptop</h5>
		<div class="card-body">




 @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))

  <div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif




	<form action="{{route('laptopinput')}}" method="post"  enctype="multipart/form-data" id="basicform" data-parsley-validate="">
	{{csrf_field()}}

			<div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control"  placeholder="Name" id="name" name="name">
    </div>

  <div class="form-group">
      <label for="brand">Brand</label>
      <input type="text" class="form-control"  placeholder="Brand" id="brand" name="brand">
    </div>

     <div class="form-group">
      <label for="features">Features</label>
      <textarea name="features"></textarea> 
    </div>






    <div class="form-group">
      <label for="code">Product Code</label>
      <input type="text" class="form-control"  placeholder="Product Code" id="code" name="code">
    </div>


     <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control"  placeholder="Price" id="price" name="price">
    </div>

     <div class="form-group">
      <label for="image">image</label>
      <input type="file" class="form-control"  placeholder="image" id="image" name="image">
    </div>



    <button type="Submit" class="btn btn-primary">Submit</button>
	 
			</form>


    <script>
       CKEDITOR.replace( 'features' );
   </script>

		</div>
	</div>
</div>


@endsection