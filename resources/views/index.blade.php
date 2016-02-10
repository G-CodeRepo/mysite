@extends('layouts.template')
<!-- site name -->
@section('site_name')
home
@endsection

<!-- sidebar -->
@section('sidebar')
<!-- this content will be injected into the blade template -->
<!-- NO SIDE BAR FOR HOME PAGE -->	
@endsection

<!-- main content -->
@section('content')
<!-- this content will be injected into the blade template -->
<div class="background"><img id="background_img" src="images/i1.jpg"/></div>
@endsection


<!--scripts-->
@section('script')
<script src="javascript/background_images.js"></script>
@endsection