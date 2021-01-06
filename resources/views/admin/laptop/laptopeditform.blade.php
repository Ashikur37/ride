@extends('layouts.app')
@section('title','Laptop Edit Form')
@section('content')


<form action="/laptopedit" method="post"  enctype="multipart/form-data" class="col-md-10 mx-auto">
        {{csrf_field()}}

         @foreach($laptop as $laptop)

                    <div class="form-group">
                      <label for="id">ID</label>
                      <div>
                        <input type="text" class="form-control" id="id"
                        name="id" placeholder="id" readonly="" value="{{$laptop->id}}"/>
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="name">name</label>
                      <div>
                        <input type="text" class="form-control" id="name"
                        name="name" placeholder="name" value="{{$laptop->name}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="brand">Brand</label>
                      <div>
                        <input type="text" class="form-control" id="brand"
                        name="brand" placeholder="Brand" value="{{$laptop->brand}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="features">Features</label>
                      <div>
                        <textarea name="features"></textarea> 
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="code">Code</label>
                      <div>
                        <input type="text" class="form-control" id="code"
                        name="code" placeholder="code" value="{{$laptop->code}}"/>
                      </div>
                    </div>

            

                      <div class="form-group">
                      <label for="price">Price</label>
                      <div>
                        <input type="text" class="form-control" id="price"
                        name="price" placeholder="price" value="{{$laptop->price}}"/>
                      </div>
                    </div>

                      <div class="form-group">
                      <label for="image">image</label>
                      <div>
                        <input type="file" class="form-control" id="image"
                        name="image" placeholder="image" value="{{$laptop->image}}"/>
                      </div>
                    </div>





                    <div class="form-group">
                      <button type="submit" id="" name="" value="" class="btn btn-primary">Save</button>
                  </div>
 @endforeach
 
                </form>

                 <script>
                  CKEDITOR.replace( 'features' );
                 </script>

@endsection