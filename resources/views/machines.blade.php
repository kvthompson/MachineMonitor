@extends('layouts.master')

@section('title')
Machine Manager
@endsection

@section('content')

<!DOCTYPE html>
<html>
<head>
<style>

dl {
    float: right;
    padding: 0;
    margin: 0;
}



MachineTable {
	   margin:0px;padding:0px;
	   width:100%;
	   box-shadow: 10px 10px 5px #888888;
	   border:1px solid #ffffff;
	   
	   -moz-border-radius-bottomleft:0px;
	   -webkit-border-bottom-left-radius:0px;
	   border-bottom-left-radius:0px;
	   
	   -moz-border-radius-bottomright:0px;
	   -webkit-border-bottom-right-radius:0px;
	   border-bottom-right-radius:0px;
	   
	   -moz-border-radius-topright:0px;
	   -webkit-border-top-right-radius:0px;
	   border-top-right-radius:0px;
	   
	   -moz-border-radius-topleft:0px;
	   -webkit-border-top-left-radius:0px;
	   border-top-left-radius:0px;
}.MachineTable table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.MachineTable tr:last-child td:last-child {
	     -moz-border-radius-bottomright:0px;
	     -webkit-border-bottom-right-radius:0px;
	     border-bottom-right-radius:0px;
}
.MachineTable table tr:first-child td:first-child {
	    -moz-border-radius-topleft:0px;
	    -webkit-border-top-left-radius:0px;
	    border-top-left-radius:0px;
}
.MachineTable table tr:first-child td:last-child {
	    -moz-border-radius-topright:0px;
	    -webkit-border-top-right-radius:0px;
	    border-top-right-radius:0px;
}.MachineTable tr:last-child td:first-child{
	     -moz-border-radius-bottomleft:0px;
	     -webkit-border-bottom-left-radius:0px;
	     border-bottom-left-radius:0px;
}.MachineTable tr:hover td{
	     
}
.MachineTable tr:nth-child(odd){ background-color:#cccccc; }
.MachineTable tr:nth-child(even)    { background-color:#ffffff; }.FaultTable td{
	    vertical-align:middle;
	    
	    
	    border:1px solid #ffffff;
	    border-width:0px 1px 1px 0px;
	    text-align:left;
	    padding:7px;
	    font-size:15px;
	    font-family:Arial;
	    font-weight:normal;
	    color:#000000;
}.MachineTable tr:last-child td{
	     border-width:0px 1px 0px 0px;
}.MachineTable tr td:last-child{
	     border-width:0px 0px 1px 0px;
}.MachineTable tr:last-child td:last-child{
	     border-width:0px 0px 0px 0px;
}
.MachineTable tr:first-child td{
	    		   background:-o-linear-gradient(bottom, #002947 5%, #002947 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #002947), color-stop(1, #002947) );
			   background:-moz-linear-gradient( center top, #002947 5%, #002947 100% );
			   filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#002947", endColorstr="#002947"); background: -o-linear-gradient(top,#002947,002947);

			   background-color:#002947;
			   border:0px solid #ffffff;
			   text-align:center;
			   border-width:0px 0px 1px 1px;
			   font-size:14px;
			   font-family:Arial;
			   font-weight:bold;
			   color:#ffffff;
}
.MachineTable tr:first-child:hover td{
	    background:-o-linear-gradient(bottom, #002947 5%, #002947 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #002947), color-stop(1, #002947) );
	    background:-moz-linear-gradient( center top, #002947 5%, #002947 100% );
	    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#002947", endColorstr="#002947");	background: -o-linear-gradient(top,#002947,002947);

	    background-color:#002947;
}
.MachineTable tr:first-child td:first-child{
	    border-width:0px 0px 1px 0px;
}
.MachineTable tr:first-child td:last-child{
	    border-width:0px 0px 1px 1px;
}

</style>
</head>

<body>

<div class="MachineTable" >
                <table>
                    <tr>
                        <td>
                            Machine
                        </td>
                        <td >
                            Batch Number
                        </td>
                        <td>
                            Part Number
                        </td>
                        <td>
                            Part Type
                        </td>
                        <td>
                            Remaining Quantity
                        </td>
                        <td>
                            Total Quantity
                        </td>
                    </tr>
                    
@foreach($machines as $machine)
		    <tr>
                        <td>
                            {{ $machine->machine }}
                        </td>
                        <td>
                            {{ $machine->batchNo }}
                        </td>
                        <td>
                            {{ $machine->partNo }}
                        </td>
                        <td>
                            {{ $machine->partType }}
                        </td>
                        <td>
                            {{ $machine->remainingQ }}
                        </td>
                        <td>
                            {{ $machine->totalQ }}
                        </td>
                    </tr>
@endforeach
                </table>
            </div>
            





</body>
</html>

@endsection