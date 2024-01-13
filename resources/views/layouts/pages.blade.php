<!DOCTYPE html>
<html>

<head>
 @include('includes.head')
</head>

<body>

 @include('includes.header')


  @yield('content')

 @include('includes.info_section')

  @include('includes.footer')

  
</body>

</html>