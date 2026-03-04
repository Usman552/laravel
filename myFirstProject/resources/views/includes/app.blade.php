
@include('includes.header')
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-100 bg-dark position-absolute w-100"></div>
 @include('includes.sidebar')
  <main class="main-content position-relative border-radius-lg ">
 @include('includes.nav')
 @yield('content')
    
  </main>
  @include('includes.script')
  

<script src="{{ asset('assets/js/argon-dashboard.min.js?v=2.1.0') }}"></script>
</body>

</html>