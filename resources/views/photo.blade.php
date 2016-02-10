@extends('layouts.template')
<!-- site name -->
@section('site_name')
photo
@endsection

<!-- sidebar -->
@section('sidebar')
<!-- this content will be injected into the blade template -->
<ul>
<li>Hawaii Islands</li>
	<ul>
	<li>Maui</li>
	<li>Molokai</li>
	<li>Oahu</li>
	<li>Hawaii</li>
	<li>Kauai</li>
	<li>Lanai</li>
	</ul>
<li>Music
	<ul>
	<li>Artists/Bands</li>
	<li>Guitars</li>
	<li>Drums</li>
	<li>Bass</li>
	<li>Other</li>
	</ul>
</li>
<li>Basketball</li>
<li>Cars</li>
<li>Artwork</li>
<ul>	
@endsection

<!-- main content -->
@section('content')
<div><h1>Photos page</h1></div>

<!-- thumbnails -->
<div class="thumbnail" onmouseover="preview()">
	<a class="pic" href="{{ asset('images/i1.jpg') }}">
	<img src="{{ asset('images/i1.jpg') }}"/>
	</a>
</div>
<div class="thumbnail">
	<a class="pic" href="{{ asset('images/i2.jpg') }}">
	<img src="{{ asset('images/i2.jpg') }}"/>
	</a>
</div>
<div class="thumbnail">
	<a class="pic" href="{{ asset('images/i3.jpg') }}">
	<img src="{{ asset('images/i3.jpg') }}"/>
	</a>
</div>
<div class="thumbnail">
	<a class="pic" href="images/i4.jpg">
	<img src="{{ asset('images/i4.jpg') }}"/>
	</a>
</div>
<div class="thumbnail">
<a class="pic" href="http://d2118lkw40i39g.cloudfront.net/wp-content/uploads/2015/06/cd0ymzcznguwzdbhnduynddiytjhm2yyzthlmtjjotqwyyznpwu1nja1yjkzmjy1mjq4nwmwowmxmji2mgmxzmnjzguz.jpeg">
<img src="http://d2118lkw40i39g.cloudfront.net/wp-content/uploads/2015/06/cd0ymzcznguwzdbhnduynddiytjhm2yyzthlmtjjotqwyyznpwu1nja1yjkzmjy1mjq4nwmwowmxmji2mgmxzmnjzguz.jpeg"/>
</a>
</div>
<div class="thumbnail">
<a class="pic" href="http://images-cdn.moviepilot.com/images/c_fill,h_720,w_1280/t_mp_quality/wnjzz466m2aigwvldo3p/dragon-ball-super-episode-4-predictions-must-read-for-dragon-ball-z-fans-spoilers-supe-530313.jpg">
<img src="http://images-cdn.moviepilot.com/images/c_fill,h_720,w_1280/t_mp_quality/wnjzz466m2aigwvldo3p/dragon-ball-super-episode-4-predictions-must-read-for-dragon-ball-z-fans-spoilers-supe-530313.jpg" />
</a>
</div>
<div class="thumbnail">
<a class="pic" href="http://images.gibson.com.s3.amazonaws.com/Products/Electric-Guitars/2015-Custom/True_Historic_1957_Les_Paul_Custom_Black_Beauty/LPB7TVEBGH1_MAIN_HERO_01.jpg">
<img src="http://images.gibson.com.s3.amazonaws.com/Products/Electric-Guitars/2015-Custom/True_Historic_1957_Les_Paul_Custom_Black_Beauty/LPB7TVEBGH1_MAIN_HERO_01.jpg" />
</a>
</div>
<div class="thumbnail">
<a class="pic" href="http://www.guitarworld.com/files/Chapman_Joe_Satriani_0880-Photo-Credit-Chapman-Baehler.jpg">
<img src="http://www.guitarworld.com/files/Chapman_Joe_Satriani_0880-Photo-Credit-Chapman-Baehler.jpg" />
</a>
</div>
@endsection

<!-- javascript for opacity and preview effect -->
@section('script')
<script src="{{ asset('/external_libraries/Magnific-Popup-master/dist/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('/javascript/preview_image.js') }}"></script>
@endsection


