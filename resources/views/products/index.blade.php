@extends ('layout')
@section ('content')
		<div class="container content">
			<br />
			@if(\Session::has('success'))
				<div class="alert alert-success">
					<p>{{\Session::get('success')}}</p>
				</div>
			@endif


    			<div class="row">
					@foreach($products as $product)				
          				<div class="card well text-center">
          					<img src = "{{asset('tmp/'.$product ['image_name'])}}" style="width:100%;height:auto;">
          					<p class="card-text">{{$product ['name'] }}</p><p>Rs: {{$product ['price'] }}</p>
          				</div>
          			@endforeach
          		</div>

			<!-- <table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>NAME</th>
						<th>PRICE</th>
						<th>IMAGE</th>

						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
					
						<tr>
							<td>{{$product ['id'] }}</td>
							<td>{{$product ['name'] }}</td>
							<td>{{$product ['price'] }}</td>
							<td><a href = "{{asset('tmp/'.$product ['image_name'])}}" target="_blank"><img src = "{{asset('tmp/'.$product ['image_name'])}}" style="width:80px;height:40px;"></a></td>
							<td><a href="{{action('ProductController@edit',$product['id'])}}" class="btn btn-warning">Edit</a></td>
							<td><form action="{{action('ProductController@destroy',$product['id'])}}" method="post">
								 {{csrf_field()}}
									<input type="hidden" value="DELETE" name="_method">
									<button class="btn btn-danger" type="submit">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table> -->
		</div>
@endsection