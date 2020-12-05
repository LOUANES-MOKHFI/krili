<!DOCTYPE html>
<html>
<head>
	<title>KRILI -  Facture location</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
/*
 * See it in action here: http://jsfiddle.net/seydoggy/6s92p51a/
 */
.panel-table {
    display:table;
}
.panel-table > .panel-heading {
    display: table-header-group;
    background: transparent;
}
.panel-table > .panel-body {
    display: table-row-group;
}
.panel-table > .panel-body:before,
.panel-table > .panel-body:after {
    content:none;
}
.panel-table > .panel-footer {
    display: table-footer-group;
    background: transparent;
}
.panel-table > div > .tr {
    display: table-row;
}
.panel-table > div:last-child > .tr:last-child > .td {
    border-bottom: none;
}
.panel-table .td {
    display: table-cell;
    padding: 15px;
    border: 1px solid #ddd;
    border-top: none;
    border-left: none;
}
.panel-table .td:last-child {
    border-right: none;
}
.panel-table > .panel-heading > .tr > .td,
.panel-table > .panel-footer > .tr > .td {
    background-color: #f5f5f5;
}
.panel-table > .panel-heading > .tr > .td:first-child {
    border-radius: 4px 0 0 0;
}
.panel-table > .panel-heading > .tr > .td:last-child {
    border-radius: 0 4px 0 0;
}
.panel-table > .panel-footer > .tr > .td:first-child {
    border-radius: 0 0 0 4px;
}
.panel-table > .panel-footer > .tr > .td:last-child {
    border-radius: 0 0 4px 0;
}
</style>

</head>
<body>
  <div class="container row">
    <div class="col-md-6 col-lg-6">
      <div class="container">
        <h4>{{$first_name}}-{{$last_name}}</h4>
        <p>{{$email}}</p>
        <p>{{$num_tlfn}}</p>
      </div>
    </div>
    <div class="col-md-6 col-lg-6">
      <div>
       <h4>Devis N°: {{$num_reservation}}</h4>
      </div>
    </div>
  </div>
  
<div class="container" style="margin-top:40px"><div class="row"><div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
<div class="panel panel-default panel-table">
    <div class="panel-heading">
        <div class="tr">
            <div class="td" style="width: 150px">Date de reservation</div>
            <div class="td" style="width: 150px">Date de fin de reservation</div>
             @if($marque == null)
             <div class="td" style="width: 150px">Appartement</div>
             @else
             <div class="td" style="width: 150px">Vehicule</div>
             @endif
            <div class="td" style="width: 150px">Prix</div>
        </div>
    </div>
    <div class="panel-body">
        <div class="tr">
            <div class="td">{{$date_reservation}}</div>
            <div class="td">{{$date_fin_reservation}}</div>
             @if($marque == null)
            <div class="td">{{$type_appartement}} à {{$ville}}</div>
            @else
            <div class="td">{{$marque}}-{{$cars}}</div>
            @endif
            <div class="td">{{$prix}}</div>
        </div>
    </div>
    <div class="panel-footer">
        <div class="tr">
            <div class="td"></div>
            <div class="td"></div>
            <div class="td">Total</div>
            <div class="td">{{$prix}}</div>
        </div>
    </div>
</div>

</div>
</div>
</div>

</body>
</html>