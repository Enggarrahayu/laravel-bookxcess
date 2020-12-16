@extends('layouts.masterpub')
@section('title','Publish Book')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Publish Book Bookxcess</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="{{ asset('form/css/main.css') }}" rel="stylesheet" media="all">
</head>

<body>
    <div class="Page" style="padding-top: 30px; padding-bottom: 30px;">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title" style="color: black;">Publish Book</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('upload')}}" enctype="multipart/form-data" method="POST">
                    	@csrf
                        <div class="form-row">
                            <div class="name">Book Title</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="ebook_title">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Book Category</div>
                            <div class="value">
                                <select name="ebook_category" class="input--style-6" >
											<option value="novel">Novel</option>
											<option value="comic">Comic</option>
											<option value="horor">Horor</option>
											<option value="education">Education</option>
										</select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">File Type</div>
                            <div class="value">
                                <select name="ebook_type" class="input--style-6" >
											<option value="pdf">PDF</option>
											<option value="word">Word</option>
										</select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Downloadable</div>
                            <div class="value">
                                <select name="ebook_downloadable" class="input--style-6" >
											<option value="yes">Yes</option>
											<option value="no">No</option>
										</select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Book Price</div>
                            <div class="value">
                                <input class="input--style-6" type="number" name="ebook_price">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Short Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="short_desc" placeholder="Short Description of Book"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload Book Image</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="ebook_image" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your Book Image or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload Book File</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="ebook_file" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your Book File or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
                          <div class="card-footer">
                    				<input class="button" type="submit" value="Publish Book">
                		  </div>
                    </form>
                  
                </div>
                
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('form/vendor/jquery/jquery.min.js')}}"></script>


    <!-- Main JS-->
    <script src="{{ asset('form/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
@endsection