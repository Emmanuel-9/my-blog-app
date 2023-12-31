@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn=sm"> Go Back </a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4"> Create a New Post </h1>
                    <p> Fill and Submit this form to create a post </p>
                    <hr>
                    <form method="POST">
                        @csrf
                
                            <div class="row">
                                <div class="control-group col-12">
                                    <label for="title"> Post Title </label>
                                    <input type="text" id="title" class="form-control" name="title" placeholder="Enter Post Title" required>


                                </div>
                                <div class="control-group col-12 mt-2">
                                    <label for="body"> Post Body</label>
                                    <textarea name="body" id="body" rows="5" class="form-control" placeholder="Enter Post Body" required></textarea>

                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="control-group col-12 text-center">
                                    <button id="btn-submit" class="btn btn-primary">
                                        Create Post 
                                    </button>

                                </div>

                            </div>

                    

                    </form>


                </div>

            </div>

        </div>

    </div>
@endsection    