
@extends ('layout')
@section ('content')

<div class="clearfix"></div>
    <div class="container content">
      <h2>Create A Product</h2><br/>

      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif

      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif

      <form method="post" action="/products" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Price:</label>
              <input type="text" class="form-control" name="price">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Upload Image</label>
              <input type="file" class="form-control" name="image_name" accept = "image/*" multiple>
            </div>
        </div>
       
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Add Product</button>
          </div>
        </div>
      </form>
    </div>
  <div class="container">
      <br/><br/>
      <br/><br/><br/><br/>
      
<!--       @if(\Session::has('success'))
        <div class="alert alert-success">
          <p>{{\Session::get('success')}}</p>
        </div>
      @endif -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
            <tr>
              <td>{{$product ['id'] }}</td>
              <td>{{$product ['name'] }}</td>
              <td>{{$product ['price'] }}</td>
              <td><a href="{{action('ProductController@edit',$product['id'])}}" class="btn btn-warning">Edit</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

@endsection