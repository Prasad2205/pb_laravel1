
@extends ('layout')

@section('content')
	<div class="content container">
		<div class="row">
			<h1>Create Posts </h1>
		</div>
		<div class="col-sm-8">
			<form class="form-horizontal" method="post" action="/posts">
			{{csrf_field()}}
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="Title">Title:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="post-title" name="post-title" placeholder="Enter Post Title">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="Content">Content:</label>
			    <div class="col-sm-10"> 
			      <textarea class="form-control" id="post-content" name="post-content" placeholder="Enter Content"> </textarea> 
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary">Submit</button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
@endsection