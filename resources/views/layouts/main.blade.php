<!DOCTYPE html>
<html lang="en">
<head>
  @include("blocks.head")
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      @include("blocks.sidebar")
    </div>

    <div class="col-sm-9">
      @yield("content")
    </div>
  </div>
</div>

<footer class="container-fluid">
  @include("blocks.footer")
</footer>

</body>
</html>
