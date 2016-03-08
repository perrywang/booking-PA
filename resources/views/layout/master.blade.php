<!DOCTYPE html>
<html lang="{{App::getLocale()}}" style="height:100%!important;width:90%">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Site Properties -->
    <title>@yield('title')</title>
    @section('styles')
    <link rel="stylesheet" type="text/css" href="/css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    @show
</head>
<body>
<div id="container" class="ui grid">
    <div class="ui row">
      <div class="ui column">
        <div class="ui grid">
           <div id="header" class="ui row">
             <div class="ui column">
                 <h1 class="ui red header">header area</h1>
             </div>
           </div>
        </div>
      </div>
    </div>
    <div id="content" class="ui row">
        <div class="ui column">
            @yield('content')
        </div>
    </div>
</div>
@include('partial.footer_'.App::getLocale())
@section('scripts')
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/semantic.min.js"></script>
@show
</body>
