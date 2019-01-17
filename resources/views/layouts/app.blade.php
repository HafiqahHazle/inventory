@extends('layouts.base')
@section('body')
<div id="wrapper">
	@include('layouts.partials.nav')
	<div id="page-wrapper">
	@yield('content')
</div>
</div>

@endsection