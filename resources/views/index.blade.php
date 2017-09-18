<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vue App</title>
  <link rel="stylesheet" href="css/app.css"/>
  <script type="text/javascript">
    window.Laravel = window.Laravel || {};
    window.Laravel.csrfToken = "{{ csrf_token() }}";
  </script>
</head>
<body>
  <div id="app">
    <main-contents></main-contents>
  </div>

  <script src="js/app.js"></script>
</body>
</html>
