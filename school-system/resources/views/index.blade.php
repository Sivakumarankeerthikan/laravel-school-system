<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('home-button.png') }}">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.dataTables.css">
    <title>@yield('title')</title>
    <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      background-color: #f4f4f4;
    }

    .sidebar {
      width: 250px;
      background-color: #2c3e50;
      color: #fff;
      display: flex;
      flex-direction: column;
      padding: 20px;
      height: 100vh;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 1.5em;
    }

    .sidebar a {
      color: #ecf0f1;
      text-decoration: none;
      padding: 10px 15px;
      margin: 5px 0;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .sidebar a:hover {
      background-color: #34495e;
    }

    .main-content {
      flex: 1;
      background-color: #fff;
      border: none;
    }

    .logout {
      display: flex;
      justify-content: flex-end;
    }

    .top-two {
      top: 62px;
    }

    .top-three {
      top: 123px;
    }
  </style>
</head>
<body>
    <div class="sidebar sticky-top">
        @include('includes.sidebar')
    </div>

  <div class="main-content">
    <div class="py-2 bg-primary sticky-top">
      @include('includes.header')
    </div>
    @yield('content');
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  {{-- <script src="https://cdn.datatables.net/2.3.5/js/dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#mytable').DataTable();
    });
  </script> --}}
</body>
</html>
