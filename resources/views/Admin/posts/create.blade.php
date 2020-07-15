@extends('layouts.master')

@section('content')
<main class="mt-4">
    <div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Add Posts
            
        </div>
        <div class="card-body">

        <form method="POST" action="{{url('posts/store')}}" enctype="multipart/form-data" id="add-posts">
                @csrf
                <div class="form-group col-md-6">
                    <label for="">Post Title</label> <span style="color:red"> *</span>
                    <input type="text" value="{{ old('title') }}"  name="title" class="form-control" placeholder="Posts Title">
                </div>
                
                <div class="form-group col-md-6">
                    <label for=""> Image</label> <span style="color:red"> *</span>
                    <input type="file" value="{{ old('featured_image') }}" name="featured_image" class="form-control" placeholder="Image">
                </div>

                <div class="form-group col-md-6">
                    <label>Description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5" >  </textarea>
                </div>
                
                <div class="row">
                    <div class="col-xs-12"></div>

                    <div class="col-xs-3 ml-4">
                        <a class="btn btn-danger btn-close" href="{{URL::previous()}}">Cancel</a>
                    </div>
                    <div class="col-xs-3 ml-4 pull-right">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                    </div>
                </div>
              
            </form>  
            {!! JsValidator::formRequest('App\Http\Requests\AddPostsRequest','#add-posts') !!}
        </div>
    </div>

    </div>
</main>
@endsection