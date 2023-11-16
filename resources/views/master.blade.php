<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Eravel</title>
</head>
<body>
  {{View::make('header') }}  
  @yield('content')
  {{View::make('footer') }} 
</body>
</html>

<style>
  .custom-login{
      height: 500px;
      padding-top: 100px;
  }
  img.slider-img{
      height: 400px !important
  }
  .custom-product{
      height: 600px
  }
  .slider-text{
      background-color: #35443585 !important;
  }
  .trending-image{
      height: 100px;
  }
  .trening-item{
      float: left;
      width: 20%;
  }
  .trending-wrapper{
      margin: 30px;
  }
  .detail-img{
      height: 200px;
  }
  .search-box{
      width: 500px !important
  }
  .cart-list-devider{
      border-bottom: 1px solid #ccc;
      margin-bottom: 20px;
      padding-bottom: 20px
  }
</style>