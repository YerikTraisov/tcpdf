<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PDF Generation') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('/')}}/favicon.ico" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/common/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/common/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/common/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/common/jquery.dataTables.min.css">

    <link href="{{url('/')}}/css/common/custom.css" rel="stylesheet">
  </head>

  @php
    $action = app('request')->route()->getAction();
    $controller = class_basename($action['controller']);
    list($controller, $action) = explode('@', $controller);

    $controller = str_replace('Controller', '', $controller);
    $controller = strtolower($controller);    
  @endphp
  <body class="{{$controller}}">
    <div id="app">
      <nav class="navbar header">
        <div class="app-title">{{ config('app.name', 'PDF Generation') }}</div>
      </nav>

      <main class="py-4">
        @if(count($errors))
          <div class="alert alert-danger" id="error_message">
            <ul style="list-style: none;"
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif
        @yield('content')
      </main>

      <nav class="navbar footer">
        <div class="footer-wrapper">
          <a href="mailto:admin@pdfgen.com">{{__('Send to Admin')}}</a>
        </div>
      </nav>
    </div>

    <script src="{{ url('/') }}/js/common/jquery-3.3.1.min.js"></script>
    <script src="{{ url('/') }}/js/common/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/js/common/bootstrap-datepicker.min.js"></script>
    <script src="{{ url('/') }}/js/common/jquery.dataTables.min.js"></script>    
    <script src="{{ url('/') }}/js/common/custom.js"></script>

    @yield('scripts')
  </body>
</html>
