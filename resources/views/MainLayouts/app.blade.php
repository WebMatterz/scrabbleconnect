<!DOCTYPE html>
<html>
<head>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
 <meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Scrabble Connect, info@scrabbleconnect.com" />

<meta name="keywords" content="Scrabble, connect, Scrabble Connect, wespa, English words" />
<title>{{ config('app.name', 'Scrabble') }} | {{$title}}</title>
<link href="{{asset('css/fonts.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
 <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <link href="{{asset('css/myglyphicons2.css')}}" rel="stylesheet" />
<link href="{{asset('css/jquery-ui-1.8.18.custom.css')}}" rel="stylesheet" type="text/css"/>
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<link href=" {{asset('css/main.css') }}" rel="stylesheet" media="screen, projection">

</head>

<body>


@include('MainInc.header')
	 @yield('content')
@include('MainInc.footer')


</body>


	<script type="text/javascript" src="{{asset('js/jquery-1.10.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-ui-1.8.18.custom.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</html>
