<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Expense Tracker</title>

		<!-- Admin LTE -->
		<link rel="stylesheet" href="{{ asset('/css/adminlte/adminlte.min.css') }}">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('/css/adminlte/fontawesomeall.css') }}">
		<!-- Chart.js -->
		<link rel="stylesheet" href="{{ asset('/css/adminlte/Chart.min.css') }}">
		<!-- Sweet Alert -->
		<link rel="stylesheet" href="{{ asset('/css/adminlte/sweetalert2.min.css') }}">
	</head>
	<body class="dark-mode sidebar-mini layout-fixed layout-navbar-fixed control-sidebar-slide-open layout-footer-fixed">
		<div class="wrapper">
			{{-- Navigation --}}
			@include('include/nav')

			{{-- Sidebar --}}
			@include('include/sidebar')

