<!DOCTYPE html>
<html>

<head>
 @include('includes.head')
</head>

<body>

 @include('includes.header')

 <!-- @include('includes.slider_section') -->

  @yield('content')

 @include('includes.info_section')
  @include('includes.footer')

  
</body>

</html>