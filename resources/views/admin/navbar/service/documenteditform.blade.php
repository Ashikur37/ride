@extends('layouts.app')
@section('title','Document Edit Form')
@section('content')


<form action="/documentedit" method="post"  enctype="multipart/form-data" class="col-md-10 mx-auto">
        {{csrf_field()}}

         @foreach($document as $document)

                    <div class="form-group">
                      <label for="id">ID</label>
                      <div>
                        <input type="text" class="form-control" id="id"
                        name="id" placeholder="id" readonly="" value="{{$document->id}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="product_type">Product Type</label>
                      <div>
                        <input type="text" class="form-control" id="product_type"
                        name="product_type" readonly="" placeholder="Product Type" value="{{$document->product_type}}"/>
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="name">name</label>
                      <div>
                        <input type="text" class="form-control" id="name"
                        name="name" placeholder="name" value="{{$document->name}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="mobile">Mobile</label>
                      <div>
                        <input type="text" class="form-control" id="mobile"
                        name="mobile" placeholder="Mobile" value="{{$document->mobile}}"/>
                      </div>
                    </div>
 

                    <div class="form-group">
                      <label for="address">Address</label>
                      <div>
                        <input type="text" class="form-control" id="address"
                        name="address" placeholder="Address" value="{{$document->address}}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="weight">weight</label>
                      <div>
                        <input type="text" class="form-control" id="weight"
                        name="weight" placeholder="weight" value="{{$document->weight}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="order_date">Order Date</label>
                      <div>
                        <input type="text" class="form-control" id="order_date"
                        name="order_date" placeholder="Order Date" value="{{$document->order_date}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="order_type">Order Type</label>
                      <div>
                        <input type="text" class="form-control" id="order_type"
                        name="order_type" placeholder="Order Type" value="{{$document->order_type}}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="starting_place">Starting Place</label>
                      <div>
                        <input type="text" class="form-control" id="starting_place"
                        name="starting_place" placeholder="Starting Place" value="{{$document->starting_place}}"/>
                      </div>
                    </div>

            

                    <div class="form-group">
                      <label for="order_status">Order Status</label>
                      <div>
                        <input type="text" class="form-control" id="order_status"
                        name="order_status" placeholder="Order Status" value="{{$document->order_status}}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="product_id">Product ID</label>
                      <div>
                        <input type="text" class="form-control" id="product_id"
                        name="product_id" readonly="" placeholder="Product ID" value="{{$document->product_id}}"/>
                      </div>
                    </div>

                      <div class="form-group">
                      <label for="image">image</label>
                      <div>
                        <input type="file" class="form-control" id="image"
                        name="image" placeholder="image" value="{{$document->image}}"/>
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