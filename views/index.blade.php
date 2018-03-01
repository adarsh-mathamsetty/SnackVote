@extends('layouts.app')

@section('content')
<html ng-app="mymodule">
<head>
<title> Votes</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<h1 style="color: #d54d7b; font-family: cursive; font-size:50px; margin-left:45%">VOTES</h1>

<style>
table {
    color: #333;
    font-family: Helvetica, Arial, sans-serif;
    width: 640px;
    border-collapse:collapse;
    border-spacing: 0;
    margin-top: 8%;
    margin-left: 170px;
}
td, th {
    border: 1px solid transparent;
    height: 10px;
    transition: all 0.3s;
    text-align: center;
    font-family: cursive;
    font-size: 20px;
}

th {
    background: #fff;
    font-weight: bold;
}

td {
    background: #FAFAFA;
    text-align: center;
}

/* Cells in even rows*/
tr:nth-child(even) td { background: #F1F1F1; }

/* Cells in odd rows  */
tr:nth-child(odd) td { background: #FEFEFE; }

tr td:hover { background: #666; color: #FFF; }
</style>
<!--AngularJS-->
<script src="<?= asset('app/lib/angular/angular.min.js')?>"></script>
<script src="<?= asset('js/jquery.min.js')?>"></script>
<script src="<?= asset('app/app.js')?>"></script>
<script src="<?= asset('app/controllers/food.js')?>"></script>

</head>

<body>
  <div class="container">
      <div class="row justify-content-center", style="padding-left: 20px; width:300px; height:300px; float: left;">
          <div class="col-md-8">
  <div class="design">
          <table ng-controller="foodcont" >
                <tr>
                    <th><img src="https://st2.depositphotos.com/1486923/8490/i/950/depositphotos_84909482-stock-photo-the-word-fruit-cut-out.jpg" height="70px" width="150px"/></th>
                    <th>Your Votes</th>
                </tr>
                <tr ng-repeat= "x in query.data.data">
                  <td><% x.Fruitname %></td>
                  <td><% x.vote %></td>
                </tr>
        </table>
<br/><br/>
       <table ng-controller="foodcont" >
                  <tr>
                    <th><img src="https://st2.depositphotos.com/1486923/8490/i/950/depositphotos_84909482-stock-photo-the-word-fruit-cut-out.jpg" height="70px" width="150px"/></th>
                    <th>Total Votes</th>
                  </tr>
                  <tr ng-repeat= "t in query.data.totalvotes">
                    <td><% t.Fruitname %></td>
                    <td><% t.vote %></td>
                  </tr>
       </table>

     </div>
   </div>
 </div>
</div>

</body>
</html>
@endsection
