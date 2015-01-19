<html>
<head>

<title> Risk analytics</title>

<style>
table, th, td {
    border: 1px solid black;
}
</style>


<style>
#chartdiv {
	width		: 50%;
	height		: 300px;
	font-size	: 10px;
}
</style>

<style>
#chartdiv1 {
	width		: 50%;
	height		: 300px;
	font-size	: 10px;
}
</style>

<style>
#chartdiv2 {
	width		: 50%;
	height		: 300px;
	font-size	: 10px;
}
</style>
<style>
#chartdiv3{
	width		: 50%;
	height		: 300px;
	font-size	: 10px;
}
</style>
<style>
#chartdiv4 {
	width		: 50%;
	height		: 300px;
	font-size	: 10px;
}
</style>

<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/pie.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/themes/none.js"></script>


<script type="text/javascript">

var chart = AmCharts.makeChart("chartdiv", {
    "type": "pie",
	"theme": "none",
    "dataProvider": [
{
        "product": "Hero",
        "weight": <?php echo $_POST["points1"];?>
    },
{
        "product": "TATA",
        "weight": <?php echo $_POST["points2"];?>
    }, {
        "product": "MARUTI",
        "weight": <?php echo $_POST["points3"];?>
    }],
	
    "valueField": "weight",
    "titleField": "product",
	"exportConfig":{	
      menuItems: [{
      icon: '/lib/3/images/export.png',
      format: 'png'	  
      }]  
	}
});

function updateChart () {
    chart.dataProvider = [];
    for (var i = 1; i <= 3; i++) {
        if (Number(document.getElementById('outty'+i).value)) {
            chart.dataProvider.push({
                "product":+i,
                "weight": Number(document.getElementById('outty'+i).value)
            })
        }
    }
    console.log(chart.dataProvider);
    chart.validateData();
}
</script>



<script type="text/javascript">
// CHART 2
var chart1 = AmCharts.makeChart("chartdiv1", {
    "type": "pie",
	"theme": "none",
    "dataProvider": [
{
        "product": "ICICI",
        "weight": <?php echo $_POST["points4"];?>
    },
{
        "product": "IDBI",
        "weight": <?php echo $_POST["points5"];?>
    }, {
        "product": "SBI",
        "weight": <?php echo $_POST["points6"];?>
    }],
	
    "valueField": "weight",
    "titleField": "product",
	"exportConfig":{	
      menuItems: [{
      icon: '/lib/3/images/export.png',
      format: 'png'	  
      }]  
	}
});

function updateChart1 () {
    chart1.dataProvider = [];
    for (var i = 4; i <= 6; i++) {
        if (Number(document.getElementById('outty'+i).value)) {
            chart1.dataProvider.push({
                "product":+i,
                "weight": Number(document.getElementById('outty'+i).value)
            })
        }
    }
    console.log(chart1.dataProvider);
    chart1.validateData();
}

// CHART 3
var chart2 = AmCharts.makeChart("chartdiv2", {
    "type": "pie",
	"theme": "none",
    "dataProvider": [
{
        "product": "BRITTANIA",
        "weight": <?php echo $_POST["points7"];?>
    },
{
        "product": "DABUR",
        "weight": <?php echo $_POST["points8"];?>
    }, {
        "product": "GILETTE",
        "weight": <?php echo $_POST["points9"];?>
    }],
	
    "valueField": "weight",
    "titleField": "product",
	"exportConfig":{	
      menuItems: [{
      icon: '/lib/3/images/export.png',
      format: 'png'	  
      }]  
	}
});

function updateChart2 () {
    chart2.dataProvider = [];
    for (var i = 7; i <= 9; i++) {
        if (Number(document.getElementById('outty'+i).value)) {
            chart2.dataProvider.push({
                "product":+i,
                "weight": Number(document.getElementById('outty'+i).value)
            })
        }
    }
    console.log(chart2.dataProvider);
    chart2.validateData();
}


// CHART 4
var chart3 = AmCharts.makeChart("chartdiv3", {
    "type": "pie",
	"theme": "none",
    "dataProvider": [
{
        "product": "HCL",
        "weight": <?php echo $_POST["points10"];?>
    },
{
        "product": "INFOSYS",
        "weight": <?php echo $_POST["points11"];?>
    }, {
        "product": "TCS",
        "weight": <?php echo $_POST["points12"];?>
    }],
	
    "valueField": "weight",
    "titleField": "product",
	"exportConfig":{	
      menuItems: [{
      icon: '/lib/3/images/export.png',
      format: 'png'	  
      }]  
	}
});

function updateChart3 () {
    chart3.dataProvider = [];
    for (var i = 10; i <= 12; i++) {
        if (Number(document.getElementById('outty'+i).value)) {
            chart3.dataProvider.push({
                "product":+i,
                "weight": Number(document.getElementById('outty'+i).value)
            })
        }
    }
    console.log(chart3.dataProvider);
    chart3.validateData();
}

//CHART 4
var chart4 = AmCharts.makeChart("chartdiv4", {
    "type": "pie",
	"theme": "none",
    "dataProvider": [
{
        "product": "NTPC",
        "weight": <?php echo $_POST["points13"];?>
    },
{
        "product": "RELIANCE",
        "weight": <?php echo $_POST["points14"];?>
    }, {
        "product": "TATAPOWER",
        "weight": <?php echo $_POST["points15"];?>
    }],
	
    "valueField": "weight",
    "titleField": "product",
	"exportConfig":{	
      menuItems: [{
      icon: '/lib/3/images/export.png',
      format: 'png'	  
      }]  
	}
});

function updateChart4 () {
    chart4.dataProvider = [];
    for (var i = 13; i <= 15; i++) {
        if (Number(document.getElementById('outty'+i).value)) {
            chart4.dataProvider.push({
                "product":+i,
                "weight": Number(document.getElementById('outty'+i).value)
            })
        }
    }
    console.log(chart4.dataProvider);
    chart4.validateData();
}
</script>







 <script type="text/javascript">
 
x =50;
y= 50;
z= 50;

function element(val1,val2,val3) 
{



	if ((val2 == 0) &(val3 == 0)){
	x= val1;
    document.getElementById("outty1").value= 100*Number(x)/(Number(x)+Number(y)+Number(z));
	document.getElementById("outty2").value= 100*Number(y)/(Number(x)+Number(y)+Number(z));
	document.getElementById("outty3").value= 100* Number(z)/(Number(x)+Number(y)+Number(z));
	}
	if ((val1 == 0) &(val3 == 0)){
	y= val2;
     document.getElementById("outty1").value= 100*Number(x)/(Number(x)+Number(y)+Number(z));
	document.getElementById("outty2").value= 100*Number(y)/(Number(x)+Number(y)+Number(z));
	document.getElementById("outty3").value= 100* Number(z)/(Number(x)+Number(y)+Number(z));
	}
	if ((val1 == 0) &(val2 == 0)){
	z= val3;
     document.getElementById("outty1").value= 100*Number(x)/(Number(x)+Number(y)+Number(z));
	document.getElementById("outty2").value= 100*Number(y)/(Number(x)+Number(y)+Number(z));
	document.getElementById("outty3").value= 100* Number(z)/(Number(x)+Number(y)+Number(z));
	}
	
	updateChart ();
 }
 
 
 
x1 =50;
y1= 50;
z1= 50;

function element1(val1,val2,val3) 
{

	if ((val2 == 0) &(val3 == 0)){
	x1= val1;
    document.getElementById("outty4").value= 100*Number(x1)/(Number(x1)+Number(y1)+Number(z1));
	document.getElementById("outty5").value= 100*Number(y1)/(Number(x1)+Number(y1)+Number(z1));
	document.getElementById("outty6").value= 100* Number(z1)/(Number(x1)+Number(y1)+Number(z1));
	}
	if ((val1 == 0) &(val3 == 0)){
	y1= val2;
     document.getElementById("outty4").value= 100*Number(x1)/(Number(x1)+Number(y1)+Number(z1));
	document.getElementById("outty5").value= 100*Number(y1)/(Number(x1)+Number(y1)+Number(z1));
	document.getElementById("outty6").value= 100* Number(z1)/(Number(x1)+Number(y1)+Number(z1));
	}
	if ((val1 == 0) &(val2 == 0)){
	z1= val3;
     document.getElementById("outty4").value= 100*Number(x1)/(Number(x1)+Number(y1)+Number(z1));
	document.getElementById("outty5").value= 100*Number(y1)/(Number(x1)+Number(y1)+Number(z1));
	document.getElementById("outty6").value= 100* Number(z1)/(Number(x1)+Number(y1)+Number(z1));
	}
	
	updateChart1 ();
}
 

 x2 =50;
y2= 50;
z2= 50;

 
 function element2(val1,val2,val3) 
{

	if ((val2 == 0) &(val3 == 0)){
	x2= val1;
    document.getElementById("outty7").value= 100*Number(x2)/(Number(x2)+Number(y2)+Number(z2));
	document.getElementById("outty8").value= 100*Number(y2)/(Number(x2)+Number(y2)+Number(z2));
	document.getElementById("outty9").value= 100* Number(z2)/(Number(x2)+Number(y2)+Number(z2));
	}
	if ((val1 == 0) &(val3 == 0)){
	y2= val2;
   document.getElementById("outty7").value= 100*Number(x2)/(Number(x2)+Number(y2)+Number(z2));
	document.getElementById("outty8").value= 100*Number(y2)/(Number(x2)+Number(y2)+Number(z2));
	document.getElementById("outty9").value= 100* Number(z2)/(Number(x2)+Number(y2)+Number(z2));
	}
	if ((val1 == 0) &(val2 == 0)){
	z2= val3;
    document.getElementById("outty7").value= 100*Number(x2)/(Number(x2)+Number(y2)+Number(z2));
	document.getElementById("outty8").value= 100*Number(y2)/(Number(x2)+Number(y2)+Number(z2));
	document.getElementById("outty9").value= 100* Number(z2)/(Number(x2)+Number(y2)+Number(z2));
	}
		updateChart2 ();
}

x3 =50;
y3= 50;
z3= 50;


function element3(val1,val2,val3) 
{

	if ((val2 == 0) &(val3 == 0)){
	x3= val1;
    document.getElementById("outty10").value= 100*Number(x3)/(Number(x3)+Number(y3)+Number(z3));
	document.getElementById("outty11").value= 100*Number(y3)/(Number(x3)+Number(y3)+Number(z3));
	document.getElementById("outty12").value= 100* Number(z3)/(Number(x3)+Number(y3)+Number(z3));
	}
	if ((val1 == 0) &(val3 == 0)){
	y3= val2;
    document.getElementById("outty10").value= 100*Number(x3)/(Number(x3)+Number(y3)+Number(z3));
	document.getElementById("outty11").value= 100*Number(y3)/(Number(x3)+Number(y3)+Number(z3));
	document.getElementById("outty12").value= 100* Number(z3)/(Number(x3)+Number(y3)+Number(z3));
	}
	if ((val1 == 0) &(val2 == 0)){
	z3= val3;
    document.getElementById("outty10").value= 100*Number(x3)/(Number(x3)+Number(y3)+Number(z3));
	document.getElementById("outty11").value= 100*Number(y3)/(Number(x3)+Number(y3)+Number(z3));
	document.getElementById("outty12").value= 100* Number(z3)/(Number(x3)+Number(y3)+Number(z3));
	}
	updateChart3 ();
 }
 
 
x4 =50;
y4= 50;
z4= 50;
 
 function element4(val1,val2,val3) 
{

	if ((val2 == 0) &(val3 == 0)){
	x4= val1;
    document.getElementById("outty13").value= 100*Number(x4)/(Number(x4)+Number(y4)+Number(z4));
	document.getElementById("outty14").value= 100*Number(y4)/(Number(x4)+Number(y4)+Number(z4));
	document.getElementById("outty15").value= 100* Number(z4)/(Number(x4)+Number(y4)+Number(z4));
	}
	if ((val1 == 0) &(val3 == 0)){
	y4= val2;
    document.getElementById("outty13").value= 100*Number(x4)/(Number(x4)+Number(y4)+Number(z4));
	document.getElementById("outty14").value= 100*Number(y4)/(Number(x4)+Number(y4)+Number(z4));
	document.getElementById("outty15").value= 100* Number(z4)/(Number(x4)+Number(y4)+Number(z4));
	}
	if ((val1 == 0) &(val2 == 0)){
	z4= val3;
    document.getElementById("outty13").value= 100*Number(x4)/(Number(x4)+Number(y4)+Number(z4));
	document.getElementById("outty14").value= 100*Number(y4)/(Number(x4)+Number(y4)+Number(z4));
	document.getElementById("outty15").value= 100* Number(z4)/(Number(x4)+Number(y4)+Number(z4));
	}
	updateChart4();
 }
 
 
 
	function minmax(value, min, max) 
	{
    if(parseInt(value) < 0 || isNaN(value)) 
        return 0; 
    else if(parseInt(value) > 100) 
        return 100; 
    else return value;
	}
	
	function minmax1(value, min, max) 
	{
    if(parseInt(value) < 0 || isNaN(value)) 
        return 0; 
    else if(parseInt(value) > 108) 
        return 108; 
    else return value;
	}
	
	function minmax2(value, min, max) 
	{
    if(parseInt(value) < 0 || isNaN(value)) 
        return 0; 
    else if(parseInt(value) > 1000000000000000) 
        return 1000000000000000; 
    else return value;
	}
	
	
    function updateTextInput(val) {
      document.getElementById('textInput').value=val; 
    }
	function updateTextInput1(val) {
      document.getElementById('textInput1').value=val; 
    }
	function updateTextInput2(val) {
      document.getElementById('textInput2').value=val; 
    }
	function updateTextInput3(val) {
      document.getElementById('textInput3').value=val; 
    }
	function updateTextInput4(val) {
      document.getElementById('textInput4').value=val; 
    }
	function updateTextInput5(val) {
      document.getElementById('textInput5').value=val; 
    }
	
	function updateTextInput6(val) {
      document.getElementById('textInput6').value=val; 
    }
	function updateTextInput7(val) {
      document.getElementById('textInput7').value=val; 
    }
	function updateTextInput8(val) {
      document.getElementById('textInput8').value=val; 
    }
	
	
	function updateTextInput9(val) {
      document.getElementById('textInput9').value=val; 
    }
	function updateTextInput10(val) {
      document.getElementById('textInput10').value=val; 
    }
	function updateTextInput11(val) {
      document.getElementById('textInput11').value=val; 
    }
	
	function updateTextInput12(val) {
      document.getElementById('textInput12').value=val; 
    }
	function updateTextInput13(val) {
      document.getElementById('textInput13').value=val; 
    }
	function updateTextInput14(val) {
      document.getElementById('textInput14').value=val; 
    }
	
	function updateTextInput15(val) {
      document.getElementById('textInput15').value=val; 
    }
	
	m1=1;
	m2= 3582;
	
	check= m2-m1;
	
	function show1(val1,val2,val){
	// First we split the values to arrays date1[0] is the year, [1] the month and [2] the day
	
	vall1= 2005-03-01;
	vall2= 2014-10-24;
	
	vall1= val1;
	date11 = vall1.split('-');
	date11 = new Date(date11[0], date11[1], date11[2]);
	date1_unixtime = parseInt(date1.getTime() / 1000);
	
	vall2= val2;
	date21 = vall2.split('-');
	date21 = new Date(date21[0], date21[1], date21[2]);
	date2_unixtime = parseInt(date2.getTime() / 1000);
	
	// This is the calculated difference in seconds
    timeDifference = date2_unixtime - date1_unixtime;
	
    // in Hours
    timeDifferenceInHours = timeDifference / 60 / 60;

    // and finaly, in days :)
    check = timeDifferenceInHours  / 24;
	if ((val == 0) &(val1 == 0)){
	document.getElementById('outty16').value= val2 ;
		}
	}
	
	function show(val1,val2,val){
	
	if ((val1 == 0) &(val2 == 0)){
	document.getElementById('outty16').value= val/3 ;
	}
	}
	
	
  </script>

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>



<?php //echo $_POST["startdate"];
$parts = explode("-","2005-03-01");
$from = "$parts[2]/$parts[1]/$parts[0]";
//echo $from;
$date1 =  strtotime("2005-03-01"); ?><br>
<?php //echo $_POST["enddate"];
$parts2 = explode("-","2014-10-24");
$to = "$parts2[2]/$parts2[1]/$parts2[0]";
$date2 = strtotime("2014-10-24");
//echo $to ;
 ?><br>


<?php $sel1= "Y"; ?>
<?php $sel2= "Y"; ?>
<?php $sel3= "Y"; ?>
<?php $sel4= "Y"; ?>
<?php $sel5= "Y";

$money = 100 ;
$rebalance = 5;

 ?>

<?php $prod1 = 33.33; ?>
<?php $prod2 = 33.33; ?>
<?php $prod3 = 33.33; ?>
<?php $wt1 = 25; ?>

<?php $prod4 = 33.33; ?>
<?php $prod5 = 33.33; ?>
<?php $prod6 = 33.33; ?>
<?php $wt2 = 25; ?>

<?php $prod7 = 33.33; ?>
<?php $prod8 = 33.33; ?>
<?php $prod9 = 33.33; ?>
<?php $wt3 = 25; ?>

<?php $prod10 = 33.33; ?>
<?php $prod11 = 33.33; ?>
<?php $prod12 = 33.33; ?>
<?php $wt4 = 25; ?>

<?php $prod13 = 33.33; ?>
<?php $prod14 = 33.33; ?>
<?php $prod15 = 33.33; ?>
<?php $wt5 = 25; ?>
From <?php //echo $_POST["startdate"];
$parts = explode("-",$_POST["startdate"]);
$from = "$parts[2]/$parts[1]/$parts[0]";
echo $from;
$date1 =  strtotime($_POST["startdate"]); ?><br>
To: <?php //echo $_POST["enddate"];
$parts2 = explode("-",$_POST["enddate"]);
$to = "$parts2[2]/$parts2[1]/$parts2[0]";
$date2 = strtotime($_POST["enddate"]);
echo $to ;
 ?><br>


<?php $sel1= $_POST["Automobile"]; ?>
<?php $sel2= $_POST["Banking"]; ?>
<?php $sel3= $_POST["FMCG"]; ?>
<?php $sel4= $_POST["IT"]; ?>
<?php $sel5= $_POST["Power"];

$money =  $_POST["money"];
$rebalance = $_POST["rebalance"]/3;

 ?>

<?php $prod1 = $_POST["points1"]; ?>
<?php $prod2 = $_POST["points2"]; ?>
<?php $prod3 = $_POST["points3"]; ?>
<?php $wt1 = $_POST["weight1"]; ?>

<?php $prod4 = $_POST["points4"]; ?>
<?php $prod5 = $_POST["points5"]; ?>
<?php $prod6 = $_POST["points6"]; ?>
<?php $wt2 = $_POST["weight2"]; ?>

<?php $prod7 = $_POST["points7"]; ?>
<?php $prod8 = $_POST["points8"]; ?>
<?php $prod9 = $_POST["points9"]; ?>
<?php $wt3 = $_POST["weight3"]; ?>

<?php $prod10 = $_POST["points10"]; ?>
<?php $prod11 = $_POST["points11"]; ?>
<?php $prod12 = $_POST["points12"]; ?>
<?php $wt4 = $_POST["weight4"]; ?>

<?php $prod13 = $_POST["points13"]; ?>
<?php $prod14 = $_POST["points14"]; ?>
<?php $prod15 = $_POST["points15"]; ?>
<?php $wt5 = $_POST["weight5"]; ?>








<?php
		
		// Get the text file
		$formattedArr11 = array();
		$filename = "dates.txt";

		if (($handle = fopen($filename, "r")) !== FALSE) {
		$key = 0;    // Set the array key.
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$count = count($data);  //get the total keys in row
			//insert data to our array
				for ($i=0; $i < $count; $i++) {
					$formattedArr11[$key][$i] = $data[$i];
				}
			$key++;
		}
		fclose($handle);    //close file handle
		}
	
		//print_r( $formattedArr) ;
		//print_r( $formattedArr) ;
		
		
		//echo $formattedArr11[0][0];
		
		
$convdates= array();

for ($i=0; $i <= 3581; $i++){
$convdates[$i]=$formattedArr11[$i][0];
//echo $convdates[$i];
//echo "</br>";

}		

$d = "3/30/2005";

$from = "$parts[1]/$parts[2]/$parts[0]";
$to = "$parts2[1]/$parts2[2]/$parts2[0]";


/*
for ($i=0; $i <= 3585; $i++){
if ($convdates[$i]== $d){
echo $i;
}
//echo $convdates[$i];
//echo "</br>";

}
*/		
?>












<?php


 //echo " </br>";
 //echo "Net Returns are as follows. These values are across every rebalance date";
 //echo " </br>";
// Get the text file
		$formattedArr = array();
		$filename = "tabulations.csv";

		if (($handle = fopen($filename, "r")) !== FALSE) {
		$key = 0;    // Set the array key.
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$count = count($data);  //get the total keys in row
			//insert data to our array
				for ($i=0; $i < $count; $i++) {
					$formattedArr[$key][$i] = $data[$i];
				}
			$key++;
		}
		fclose($handle);    //close file handle
		}
	
//print_r( $formattedArr) ; //Print the array of the input file selected.
		//echo $formattedArr[0][1];
		//echo "\n";
		

// Convert the dates to a readable format.
		$datetemp1= (($date1-1109631600)/86400);
		//echo "\n";
		$datetemp2= (($date2-1109631600)/86400);
		//echo "\n";
		//echo (($date1-$date2)/86400);	
		//echo $datetemp2;
		//echo $formattedArr[$datetemp1][1];
		//echo "\n<br />";
		//echo $formattedArr[$datetemp2][1];
		//echo "\n<br />";
		
		
		
		
		
	
// Update the counter for selected products and sectors		
		//echo "\n<br />";
		$ct1 = 0;
		
		if(isset($sel1) && 
				$sel1 == 'Y') 
		{
			$ct1++;
			$p1 = $prod1/($prod1+$prod2+$prod3);
			$p2 = $prod2/($prod1+$prod2+$prod3);
			$p3 = $prod3/($prod1+$prod2+$prod3);	
		
		}
		else
		{
		//echo "Unchecked";
		$wt1 = 0;
		$prod1 = 0;
		$prod2 = 0;
		$prod3 = 0;
		$p1 = 0;
		$p2 = 0;
		$p3 = 0;	
		}
		
		
		if(isset($sel2) && 
				$sel2 == 'Y') 
		{
			$ct1++;
			
		$p4 = $prod4/($prod4+$prod5+$prod6);
		$p5 = $prod5/($prod4+$prod5+$prod6);
		$p6 = $prod6/($prod4+$prod5+$prod6);
		}
		else
		{
		//echo "Unchecked";
		$wt2 = 0;
		$prod4 = 0;
		$prod5 = 0;
		$prod6 = 0;
		$p4 = 0;
		$p5 = 0;
		$p6 = 0;
		}
		
		
		if(isset($sel3) && 
				$sel3 == 'Y') 
		{
			$ct1++;
				$p7 = $prod7/($prod7+$prod8+$prod9);
				$p8 = $prod8/($prod7+$prod8+$prod9);
				$p9 = $prod9/($prod7+$prod8+$prod9);
		}
		else
		{
		//echo "Unchecked";
		$wt3 = 0;
		$prod7 = 0;
		$prod8 = 0;
		$prod9 = 0;
		$p7 = 0;
		$p8 = 0;
		$p9 = 0;
		}
		
		if(isset($sel4) && 
				$sel4 == 'Y') 
		{
			$ct1++;
			$p10 = $prod10/($prod10+$prod11+$prod12);
			$p11 = $prod11/($prod10+$prod11+$prod12);
			$p12 = $prod12/($prod10+$prod11+$prod12);
		}
		else
		{
		//echo "Unchecked";
		$wt4 = 0;
		$prod10 = 0;
		$prod11 = 0;
		$prod12 = 0;
		
		$p10 = 0;
		$p11 = 0;
		$p12 = 0;
		}
		
		if(isset($sel5) && 
				$sel5 == 'Y') 
		{
			$ct1++;
			$p13 = $prod13/($prod13+$prod14+$prod15);
			$p14 = $prod14/($prod13+$prod14+$prod15);
			$p15 = $prod15/($prod13+$prod14+$prod15);
		}
		else
		{
		//echo "Unchecked";
		$wt5 = 0;
		$prod13 = 0;
		$prod14 = 0;
		$prod15 = 0;
		$p13 = 0;
		$p14 = 0;
		$p15 = 0;
		
		}
		
		//echo $wt1;
		//echo $ct1;
		
		
//Taking the total weights across all sectors
		$totwt = $wt1 + $wt2 +$wt3 +$wt4 +$wt5 ;

//Running some basic tests.
/*
		echo $totwt;
		echo "</br>";
		echo $p1;
		echo "</br>";
		$s1 = ($wt1 * $p1)/ $totwt;
		echo $s1;
		echo "</br>";
		//$w = array($s1);
		//echo $w[0];
		*/
		//echo "</br>";echo "</br>";echo "</br>";echo "</br>";
		//echo $money;
		//echo $rebalance;
		
//Adjust the product weights


	
// final weights across each product. Insert total weight not equals zero.	
		$s1 = ($wt1 * $p1)/ $totwt;
		$s2 = ($wt1 * $p2)/ $totwt;
		$s3 = ($wt1 * $p3)/ $totwt;
		$s4 = ($wt2 * $p4)/ $totwt;
		$s5 = ($wt2 * $p5)/ $totwt;
		$s6 = ($wt2 * $p6)/ $totwt;
		$s7 = ($wt3 * $p7)/ $totwt;
		$s8 = ($wt3 * $p8)/ $totwt;
		$s9 = ($wt3 * $p9)/ $totwt;
		$s10 = ($wt4 * $p10)/ $totwt;
		$s11 = ($wt4 * $p11)/ $totwt;
		$s12 = ($wt4 * $p12)/ $totwt;
		$s13 = ($wt5 * $p13)/ $totwt;
		$s14 = ($wt5 * $p14)/ $totwt;
		$s15 = ($wt5 * $p15)/ $totwt;
		
// The weight array 
		$lolwt=0;
		$w = array( $s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$s10,$s11,$s12,$s13,$s14,$s15);
		
		for($i=0; $i < 15; $i++) {
			//echo $w[$i];echo "</br>";
			$lolwt= $lolwt+ $w[$i];
		}
		
		//to check that the total weight amounts to 1 . It does
		
		
		//echo "</br>";echo "</br>";
		//echo $lolwt;
		//echo "</br>";
		
		
		
		
// Now using the rebalance frequency to find out the days for evaluation. Calculation of Net returns.		
	
$mul = 1;
	
	for ($i=0; $i <= $rebalance; $i++){	
		
	 $mul= ($date2-$date1)/(86400*$rebalance);
	// echo $mul;
	 //echo "</br>";
	 
	 
	 
	 $intervals[$i] = $datetemp1 + $i*$mul;
	 //echo "Interval";
	 //echo $intervals[$i];
	 //echo " ";
	 
	 for ($j=0; $j <= 16; $j++){
	  //echo $formattedArr[$intervals[$i]][$j];
	  //echo " ";
	 }
	 
	  //echo "</br>";
	}	
	
// Intervals for rebalancing are found in the above process. Calculating the money involved in the transactions.
	
	$difference= array();
	$moneyva= array();
	
	$moneyva[0]= $money;
	
	
	for ($i=0; $i <= $rebalance-1; $i++){
		for ($j=1; $j < 16; $j++){
		$difference[$i][$j] = (($formattedArr[$intervals[$i+1]][$j])- ($formattedArr[$intervals[$i]][$j]))/($formattedArr[$intervals[$i]][$j]);
		//echo $difference[$i][$j] ;
	    //echo " ";
		
		}
		//echo "</br>";
	}
	
		
// Calculating the money matrix which multiplied by the above difference matrix gives the data of transactions across each sector.		
	
$tempmoney = array();	
//echo $from;
//echo $money;
//echo "</br>";

$netreturnarray= array();

for ($k=0; $k <= $rebalance-1; $k++){
    //echo $convdates[$intervals[$k+1]];
	$netreturnarray[$k][0] =$convdates[$intervals[$k+1]];
	
//echo "</br>"
	for ($i=0; $i < 15; $i++){
		$tempmoney[$i] = $money*$w[$i];
		// Display weights
		/*echo $tempmoney[$i];
		echo "</br>";
		*/
 
	}
	
	$moneyva[$k] = 0;
	
	for ($i=0; $i < 15; $i++){		
		$tempmoney[$i] = $tempmoney[$i]+($tempmoney[$i]* $difference[$k][$i+1]) ;
		$moneyva[$k]= $moneyva[$k]+$tempmoney[$i];
		/*Display the money involved
		echo $tempmoney[$i];
		echo "</br>";
		*/
	}
	
	//echo $moneyva[$k];
	$netreturnarray[$k][1] = $moneyva[$k];
	//echo "</br>";
	
	
	
	// Rebalancing now
	
	for ($i=0; $i < 15; $i++){	
		$tempmoney[$i] = $w[$i]*($moneyva[$k]);
		/* Display the type
		echo $tempmoney[$i];
		echo "</br>";
		*/
	}
}


// Calculating the annualized returns
	//echo " Annualized Returns";
	//echo "</br>";
	$power = ($datetemp2-$datetemp1)/365;
	//echo $power;
	//echo "</br>";
	//echo $moneyva[$rebalance-1]/$money;
	//echo "</br>";
	//echo (pow( $moneyva[$rebalance-1]/$money ,1/$power )-1)*100;
	
	//echo " percent";
	//echo "</br>";
	//echo "</br>";echo "</br>";echo "</br>";
	
	
//  Calculate the maximum Drawdown
	//echo " Drawdown percentage :";
	//echo "</br>";
	$peak = array();
	$maxd = array();
	$difference2 = array();
	for ($j=1; $j < 16; $j++){
	$maxd[$j] = 0;
	$peak[$j] = 0;
		for ($i=$datetemp1; $i <= $datetemp2-1; $i++){
		$difference2[$i][$j] = ($peak[$j]- ($formattedArr[$i][$j]));
			if($difference2[$i][$j]>$maxd[$j]){
				$maxd[$j]= (($difference2[$i][$j])*100)/$peak[$j];
			}
			elseif ($formattedArr[$i][$j]> $peak[$j]){
				$peak[$j]= $formattedArr[$i][$j];
			}
			
		}
	//echo $maxd[$j];
	//echo "</br>";
	}
	
	//echo "</br>";echo "</br>";
	
	
	
// Cumulative PnL Graph calculated as per the simulation dates. First computing values

	//echo " Cumulative PnL values";
	//echo "</br>";
 
	$cumulativesum = 0;
	$difference1 = array();
	$arr123= array();
	
	for ($i=$datetemp1; $i <= $datetemp2-1; $i++){
		$cumulativesum= 0;
		for ($j=1; $j < 16; $j++){
		
		//echo $i;
		//echo $formattedArr[$i][$j];
		
		$difference1[$i][$j] = (($formattedArr[$i+1][$j])- ($formattedArr[$i][$j]));
		//echo $difference1[$i][$j];
		$cumulativesum = $cumulativesum + $difference1[$i][$j];
		}
		
		
		$arr123[$i]= $cumulativesum;
		//echo $cumulativesum;
		//echo "  ";
	}

	for ($i=$datetemp1; $i <= $datetemp2-1; $i++){
		$cumulativesum= 0;
		for ($j=1; $j < 16; $j++){	
		//echo $i;
		//echo $formattedArr[$i][$j];	
		$difference1[$i][$j] = (($formattedArr[$i+1][$j])- ($formattedArr[$i][$j]));
		//echo $difference1[$i][$j];
		$cumulativesum = $cumulativesum + $w[$j-1]*$difference1[$i][$j];
		}
		$arr123[$i]= $cumulativesum;
		//echo $cumulativesum;
		//echo "  ";
	}
	
	
	/*
	for ($i=$datetemp1; $i <= $datetemp2-1; $i++){	
		for ($j=1; $j < 16; $j++){
		}
		echo "[";
		echo $i+1;
		echo ", ";
		echo $arr123[$i];
		echo "] ";
		echo ",";
		
	}
	*/

// Calculate the mean and the standard deviation of the data

//echo "This is the mean</br>";
$cumsum1 = array();
$mean = array();
	for ($j=1; $j < 16; $j++){
		$cumsum1[$j]=0;
		for ($i=$datetemp1; $i <= $datetemp2-1; $i++){		
			$cumsum1[$j]= $cumsum1[$j]+ $formattedArr[$i][$j];		
		}
	$mean[$j]= $cumsum1[$j]/($datetemp2-$datetemp1);
	//echo $mean[$j];
	//echo "</br>";
	}
	
//echo "</br>Standard deviation</br>";	
$cumsum2 = array();	
$stdev = array();
	for ($j=1; $j < 16; $j++){
		$cumsum2[$j]=0;
		for ($i=$datetemp1; $i <= $datetemp2-1; $i++){		
			$cumsum2[$j]= $cumsum2[$j]+ ($formattedArr[$i][$j]-$mean[$j])*($formattedArr[$i][$j]-$mean[$j]);		
		}
	$stdev[$j]= $cumsum2[$j]/($datetemp2-$datetemp1);
	//echo sqrt($stdev[$j]);
	//echo "</br>";
	}
	
	
// Calculate the PnL in percentage


//the percentage differential
$difference11= array();

//cumulative PnL percentage
$cumsum21 = 0;
//echo "  </br>";
// This will give the difference percentage matrix

for ($i=$datetemp1; $i <= $datetemp2-1; $i++){
		$cumsum21= 0;
		for ($j=1; $j < 16; $j++){	
		//echo $i;
		//echo $formattedArr[$i][$j];	
		$difference11[$i][$j] = 100*(($formattedArr[$i+1][$j])- ($formattedArr[$i][$j]))/($formattedArr[$i][$j]);	
		$cumsum21 = $cumsum21 + $w[$j-1]*$difference11[$i][$j];	
		//echo $difference11[$i][$j];
		//echo "% ";
		}
		$arr123[$i]= $money*$cumsum21;
		//$arr123[$i]= $cumulativesum;
		//echo $cumulativesum;
		//echo "  </br>";
	}	
	


// Calculate the average returns for every sector	.Average = average of the difference%(Pnl)

$avgper= array();
$lolsum1= array();
$arr3 = array();
//echo "</br>";
//echo "AVERAGE RETURNS EVERY SECTOR";


//echo "</br>";

	for ($j=1; $j < 16; $j++){
		$lolsum1[$j]=0;
		for ($i=$datetemp1; $i <= $datetemp2-1; $i++){		
			//echo $difference11[$i][$j];;
			
			$lolsum1[$j]= $lolsum1[$j]+ $difference11[$i][$j];		
		}
	$avgper[$j]= $lolsum1[$j]/($datetemp2-$datetemp1);
	//echo $avgper[$j];
    //echo "</br>";
	}
	
	
// Calculate the Standard deviation Pnl for every sector


//echo "</br>";
//echo "Standard deviation PnL for the sector";
//echo "</br>";

$cumbum = array();	
$stdevpnl = array();
	for ($j=1; $j < 16; $j++){
		$cumbum[$j]=0;
		for ($i=$datetemp1; $i <= $datetemp2-1; $i++){		
			$cumbum[$j]= $cumbum[$j]+ ($difference11[$i][$j]-$avgper[$j])*($difference11[$i][$j]-$avgper[$j]);		
		}
	$stdevpnl[$j]= $cumbum[$j]/($datetemp2-$datetemp1)/100;
	//echo $cumbum[$j]/100;
	//echo "%</br>";
	
	//echo ($datetemp2-$datetemp1);
	//echo "%</br>";
	
	//echo sqrt($stdevpnl[$j]);
	//echo "</br>";
	}


// Multiply every sector with their respective weights for the entire portfolio and then get the overall average. 
//echo "weighted averages</br>";
$wavger = array();
$portfolio = 0;
$portfoliostdevpnl= 0;
	for ($j=1; $j < 16; $j++){
		$wavger[$j] =$avgper[$j]*$w[$j-1];
		$portfoliostdevpnl= $portfoliostdevpnl+(sqrt($stdevpnl[$j]))*$w[$j-1];
		$portfolio= $portfolio + $wavger[$j] ;
		//echo $wavger[$j];
		//echo "</br>";
	}
	
	//echo "</br>Portfolio average";
	//echo $portfolio;
	//echo "</br>Portfolio standard deviation";
	//echo $portfoliostdevpnl;
	//echo "</br>";
	
// Sharpe Ratio
//echo "</br>";
//echo "</br>Sharpe";
$avg1122 = 	$portfolio;
$sharpe = array();

	for ($j=1; $j < 16; $j++){
		$sharpe[$j] =($avgper[$j])/sqrt($stdevpnl[$j]);
		
		//echo round( $sharpe[$j], 4, PHP_ROUND_HALF_EVEN);
		//echo "</br>";
	}
	

//echo "</br>";
//echo "</br>Sharpe Ratio";

$shrpratio = 0;

$shrpratio =($avg1122)/$portfoliostdevpnl;
//echo $shrpratio ;
	
// Display the table selected
/*		
		for ($i=0; $i < 3582; $i++) {
			for ($j=0; $j < $count; $j++) {
				echo $formattedArr[$i][$j];
				echo "\n";
			}
			echo "\n<br />";
		}
		
*/		


// Inserting all items into a single table

$tabledata = array();
// weights
for ($i=1; $i < 16; $i++){

	$tabledata[$i][1]= round(floor($w[$i-1] * 1000) / 1000,4);
	//$tabledata[$i][1]= round( $w[$i-1], 4, PHP_ROUND_HALF_EVEN);
	//echo $tabledata[$i][1];
	//echo "<br />";
}
	//echo "<br />";
//Drawdown Percentage

for ($i=1; $i < 16; $i++){

	$tabledata[$i][2]= round(floor($maxd[$i] * 1000) / 1000,4);
	//echo $tabledata[$i][2];
	//echo "<br />";
}

//Mean data
//echo "Mean<br />";
for ($i=1; $i < 16; $i++){

	$tabledata[$i][3]= round(floor($mean[$i] * 1000) / 1000,4);
	//echo $tabledata[$i][3];
	//echo "<br />";
}
	//echo "<br />";
	
//Stdev Data 
//echo "Stdev data<br />";
for ($i=1; $i < 16; $i++){
	$tabledata[$i][4]= round(floor(sqrt($stdev[$i]) * 1000) / 1000,4);
	//echo $tabledata[$i][4];
	//echo "<br />";
}



//Stdev PnL
	//echo "Stdev<br />";

for ($i=1; $i < 16; $i++){
	$tabledata[$i][5]= round(floor(sqrt($stdevpnl[$i]) * 1000) / 1000,4);
	//echo $tabledata[$i][5];
	//echo "<br />";
}
	//echo "Sharpe<br />";
	
	
//  Sharpe Ratio across every sector
for ($i=1; $i < 16; $i++){
	$tabledata[$i][6]= round(floor($sharpe[$i] * 1000) / 1000,4);
	//echo $tabledata[$i][6];
	//echo "<br />";
}

//echo "<br />";echo "<br />";echo "<br />";echo "<br />";


for ($j=1;$j < 16; $j++){
//echo "[";
for ($i=1; $i < 6; $i++){
	//echo $tabledata[$j][$i];
	//echo " , ";
}
//echo $tabledata[$j][6];
//echo "],</br>";

}

/*
for ($k=0; $k <= $rebalance-1; $k++){
    echo "[";
	echo $netreturnarray[$k][0];
	echo " ,";
	echo  $netreturnarray[$k][1];
	echo ",] ,";
	echo "</br>";
}
*/

		
?>





<script type="text/javascript">

                 google.load('visualization', '1', {packages: ['corechart']});
			google.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'PnL values');

      data.addRows([
       <?php
	    for ($i=$datetemp1; $i <= $datetemp2-1; $i++){	
		for ($j=1; $j < 16; $j++){
		}
		echo "[";
		echo $i;
		echo ", ";
		echo $arr123[$i];
		echo "]";
		
		echo ",";
		}		
	?>
      ]);

      var options = {
        width: 1000,
        height: 563,
        hAxis: {
          title: 'Days'
        },
        vAxis: {
          title: 'Daily cumulative PnL values for the given time frame'
        }
      };

      var chart = new google.visualization.LineChart(
        document.getElementById('ex0'));

      chart.draw(data, options);

    }
      

    </script>
	





	
	
	
	
<?php // API for the table?>	

	<script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['table','corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawTable);

	  
	  function drawTable() {
  var data = new google.visualization.DataTable();
  
  var data = google.visualization.arrayToDataTable([
          ['Sector', 'Weights', 'Drawdown Percentage', 'Mean-Data', 'Standard deviaton-data', 'Standard Deviation Pnl', 'Sharpe Ratio'],
          
		  
		 <?php  
		 
		 
		 
		 for ($j=1;$j <16; $j++){
		 echo "[";
		 echo $j;
echo " , ";
for ($i=1; $i <= 6; $i++){

	echo $tabledata[$j][$i];
	echo " , ";
}
echo "],";

}
		 
		 
		 
		 ?>

		  
		  
		  ]);

  var table = new google.visualization.Table(document.getElementById('table_div'));
  table.draw(data, {showRowNumber: true});

  google.visualization.events.addListener(table, 'select', function() {
    var row = table.getSelection()[0].row;
    alert('You selected ' + data.getValue(row, 0));
  });
}
	  
	  
 </script>
		
		
	 <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['table','corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawTable);

	  
	  function drawTable() {
  var data = new google.visualization.DataTable();
    var data = google.visualization.arrayToDataTable([
          ['Rebalance date', 'Your money '],
          
		  <?php
	echo "['";
	echo $from;echo "', ";
	echo $money;
	echo "], ";
	$netreturnarray[$rebalance-1][0]= $to ; 
	for ($k=0; $k <= $rebalance-1; $k++){
    echo "['";
	echo $netreturnarray[$k][0];
	echo "', ";
	
	echo  round(floor($netreturnarray[$k][1] * 1000) / 1000,4);
	echo "], ";
	}

		  ?>
		  
		  
		  ]);

  var table = new google.visualization.Table(document.getElementById('table_div1'));
  table.draw(data, {showRowNumber: true});

  google.visualization.events.addListener(table, 'select', function() {
    var row = table.getSelection()[0].row;
    alert('You selected ' + data.getValue(row, 0));
  });
}
	  
	  
	    </script>


		<script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['table','corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawTable);

	  
	  function drawTable() {
  var data = new google.visualization.DataTable();
    var data = google.visualization.arrayToDataTable([
          ['Attributes', 'Values'],
		  
		
		  
		  ['You invested', <?php echo round(floor($money * 1000) / 1000,4); ?>],
          ['Annualized Returns(%)', <?php echo round(floor((pow( $moneyva[$rebalance-1]/$money ,1/$power )-1)*100 * 1000) / 1000,4);  ?>],
          ['Portfolio PnL average(ratio)', <?php echo round(floor($portfolio * 1000) / 1000,4); ?>],
          ['Portfolio PnL standard deviation(ratio)', <?php echo round(floor($portfoliostdevpnl * 1000) / 1000,4); ?>],
		  ['Portfolio Sharpe Ratio', <?php echo round(floor($shrpratio * 1000) / 1000,4); ?>],
		  ['Net Returns', <?php echo round(floor($netreturnarray[$rebalance-1][1] * 1000) / 1000,4); ?>]			  
		  ]);

  var table = new google.visualization.Table(document.getElementById('table_div2'));
  table.draw(data, {showRowNumber: true});

  google.visualization.events.addListener(table, 'select', function() {
    var row = table.getSelection()[0].row;
    alert('You selected ' + data.getValue(row, 0));
  });
}
	  
	  
	    </script>
		


<style>
body {
    margin: 0;
    padding: 0;
}

.container {
    position: relative;
    width: 100%;
}

.right {
    position: absolute;
	top: 150px;
    left: 380px;
    width: 200px;
   
}

.right2 {
    position: absolute;
	top: 115px;
    left: 900px;
    width: 200px;
   
}
</style>

<style>
body {
    margin: 0;
    padding: 0;
}

.container1 {
    position: relative;
    width: 100%;
}

.right1 {
    position: absolute;
	top: 750px;
    left: 710px;
    width: 100px;
   
}

.right3 {
    position: absolute;
	top: 1760px;
    left: 710px;
    width: 1200px;
   
}
</style>
  
  
</head>


  <body>
  
  <h1>RISK ANALYTICS BACKEND TEST(Pritesh Kanani)</h1>
    <form action="finappresp1.php" method="post">
	   <br><br><br><br><br><br><br>
	   <b> <a href="https://sites.google.com/site/priteshkanani/">PERSONAL PAGE</a> </b>
	  <br><br> <br><br><br><br><br><br>
	 <b> Enter your money amount: </b>
	  <input type="text" name="money" onkeyup="this.value = minmax2(this.value, 0, 1000000000000000)" value ='<?php echo $_POST["money"];?>' />
	  
	  <br><br><br>
	  <b>Enter a date after 2005-03-01:</b>
	 
	  
      <input type="date" name="startdate" min="2005-01-03" max="2014-10-24" value=  <?php echo "'";echo $_POST["startdate"];echo "'";?> onchange ="show1(this.value,0,0)" ><br>
     <b> Enter a date before 2014-10-24:</b>
      <input type="date" name="enddate" min="2005-01-03" max="2014-10-24" value= <?php echo "'";echo $_POST["enddate"];echo "'";?> onchange ="show1(0,this.value,0)"><br>
      <br><br><br>
	  <br><br><br><br><br><br><br><br><br><br>
 
	  Enter Weights 
	  Points (from 1 to 100) . Weights will be considered only when checked:
	  <br><br>
	  <input type= "checkbox" name = "Automobile" value = "Y" checked> <b>Automobiles</b>
	  <br>
	  <br>
	  HERO (%)
	  <br>
	  <input type="range" name="points1" min="1" max="100" value=<?php echo "'";echo $_POST["points1"];echo "'";?>  onchange="element(this.value,0,0);">                                                       
    <input type="text" id="outty1" value=<?php echo "'";echo $_POST["points1"];echo "'";?>><br>
     	  
	  MARUTI(%)<br>
	  <input type="range" name="points2" min="1" max="100" value=<?php echo "'";echo $_POST["points2"];echo "'";?> onchange="element(0,this.value,0);">                                                       
   <input type="text" id="outty2" value=<?php echo "'";echo $_POST["points2"];echo "'";?>>
	
	Weight of Sector(0-100):
	<input type="text" name="weight1"  value=<?php echo "'";echo $_POST["weight1"];echo "'";?> onkeyup="this.value = minmax(this.value, 0, 100)" value="25" />
	<br>
 
	   
	  TATA(%)<br>
	  <input type="range" name="points3" min="1" max="100" value=<?php echo "'";echo $_POST["points3"];echo "'";?> onchange="element(0,0,this.value);">                                                       
    <input type="text" id="outty3" value=<?php echo "'";echo $_POST["points3"];echo "'";?>><br>
	
	<div id="chartdiv"></div>
	<br><br>
	 <input type= "checkbox" name = "Banking" value = "Y"checked> <b>Banking</b>
	  <br>
	  <br> 
	ICICI(%)
	  <br>
	  <input type="range" name="points4" min="1" max="100" value=<?php echo "'";echo $_POST["points4"];echo "'";?> onchange="element1(this.value,0,0);">                                                       
    <input type="text" id="outty4" value=<?php echo "'";echo $_POST["points4"];echo "'";?>><br>
     	  
	  IDBI(%)<br>
	  <input type="range" name="points5" min="1" max="100" value=<?php echo "'";echo $_POST["points5"];echo "'";?> onchange="element1(0,this.value,0);">                                                       
   <input type="text" id="outty5" value=<?php echo "'";echo $_POST["points5"];echo "'";?>>
	
	Weight of Sector(0-100):
	<input type="text" name="weight2" value=<?php echo "'";echo $_POST["weight2"];echo "'";?> onkeyup="this.value = minmax(this.value, 0, 100)" value="25" />
	<br>
 
	   
	  SBI(%)<br>
	  <input type="range" name="points6" min="1" max="100" value=<?php echo "'";echo $_POST["points6"];echo "'";?> onchange="element1(0,0,this.value);">                                                       
    <input type="text" id="outty6" value=<?php echo "'";echo $_POST["points6"];echo "'";?>><br>
	
	<div id="chartdiv1"></div>
	
	
	
	  
	  
	  
	  
	  <input type= "checkbox" name = "FMCG" value = "Y"checked> <b>FMCG</b>
	  <br>
	  <br><br>
	 
	BRITTANIA(%)
	  <br>
	  <input type="range" name="points7" min="1" max="100" value=<?php echo "'";echo $_POST["points7"];echo "'";?> onchange="element2(this.value,0,0);">                                                       
    <input type="text" id="outty7" value=<?php echo "'";echo $_POST["points7"];echo "'";?>><br>
     	  
	  DABUR(%)<br>
	  <input type="range" name="points8" min="1" max="100" value=<?php echo "'";echo $_POST["points8"];echo "'";?> onchange="element2(0,this.value,0);">                                                       
   <input type="text" id="outty8" value=<?php echo "'";echo $_POST["points8"];echo "'";?>>
	
	Weight of Sector(0-100):
	<input type="text" name="weight3" value=<?php echo "'";echo $_POST["weight3"];echo "'";?> onkeyup="this.value = minmax(this.value, 0, 100)" value="25" />
	<br>
 
	   
	  GILETTE(%)<br>
	  <input type="range" name="points9" min="1" max="100" value=<?php echo "'";echo $_POST["points9"];echo "'";?> onchange="element2(0,0,this.value);">                                                       
    <input type="text" id="outty9" value=<?php echo "'";echo $_POST["points9"];echo "'";?>><br>
	 <div id="chartdiv2"></div>
	  
   
    <input type= "checkbox" name = "IT" value = "Y"checked> <b>IT</b>
	  <br> 
	  <br>
	  HCL(%)
	  <br>
	  <input type="range" name="points10" min="1" max="100" value=<?php echo "'";echo $_POST["points10"];echo "'";?> onchange="element3(this.value,0,0);">                                                       
    <input type="text" id="outty10" value=<?php echo "'";echo $_POST["points10"];echo "'";?>><br>
     	  
	  INFOSYS(%)<br>
	  <input type="range" name="points11" min="1" max="100" value=<?php echo "'";echo $_POST["points11"];echo "'";?> onchange="element3(0,this.value,0);">                                                       
   <input type="text" id="outty11" value=<?php echo "'";echo $_POST["points11"];echo "'";?> value="33.33">
	
	Weight of Sector(0-100):
	<input type="text" name="weight4" value=<?php echo "'";echo $_POST["weight4"];echo "'";?> onkeyup="this.value = minmax(this.value, 0, 100)" value="25" />
	<br>
 
	   
	  TCS(%)<br>
	  <input type="range" name="points12" min="1" max="100" value=<?php echo "'";echo $_POST["points12"];echo "'";?> onchange="element3(0,0,this.value);">                                                       
    <input type="text" id="outty12" value=<?php echo "'";echo $_POST["points12"];echo "'";?>><br>
	  
	  <div id="chartdiv3"></div>
	  
	   <br>	   <br>	   <br>
	   <div class="right3">
	  <input type= "checkbox" name = "Power" value = "Y"checked> <b>Power</b>
	 <br><br> <br> 
	 NTPC(%)
	  <br>
	  <input type="range" name="points13" min="1" max="100" value=<?php echo "'";echo $_POST["points13"];echo "'";?> onchange="element4(this.value,0,0);">                                                       
    <input type="text" id="outty13" value=<?php echo "'";echo $_POST["points13"];echo "'";?>><br>
     	  
	  RELIANCE(%)<br>
	  <input type="range" name="points14" min="1" max="100" value=<?php echo "'";echo $_POST["points14"];echo "'";?> onchange="element4(0,this.value,0);">                                                       
   <input type="text" id="outty14" value=<?php echo "'";echo $_POST["points14"];echo "'";?>>
	
	Weight of Sector(0-100):
	<input type="text" name="weight5" value=<?php echo "'";echo $_POST["weight5"];echo "'";?> onkeyup="this.value = minmax(this.value, 0, 100)" value="25" />
	<br>
 
	   
	  TATA POWER(%)<br>
	  <input type="range" name="points15" min="1" max="100" value=<?php echo "'";echo $_POST["points15"];echo "'";?> onchange="element4(0,0,this.value);">                                                       
    <input type="text" id="outty15" value=<?php echo "'";echo $_POST["points15"];echo "'";?>><br>
	  
	   <div id="chartdiv4"></div>
   
	  <br><br><br><br>
	  
	  Rebalance frequency (Note: this is the number of times rebalancing occurs through the tenure) <br>
	                                                   
      <input type="range" min= "3" max = "300" name="rebalance"  value=<?php echo "'";echo $_POST["rebalance"];echo "'";?> onchange="show(0,0,this.value)"/>
	  <input type="text" id="outty16" value=<?php echo "'";echo $_POST["rebalance"];echo "'";?>><br>
	  <br> 
	  
      <div><input type="submit" value="SUBMIT"></div>
	  <br><br><br><br>
	  
	    </div>
			
		<?php
		
		// Get the text file
		$formattedArr = array();
		$filename = "tabulations.csv";

		if (($handle = fopen($filename, "r")) !== FALSE) {
		$key = 0;    // Set the array key.
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$count = count($data);  //get the total keys in row
			//insert data to our array
				for ($i=0; $i < $count; $i++) {
					$formattedArr[$key][$i] = $data[$i];
				}
			$key++;
		}
		fclose($handle);    //close file handle
		}
	
		//print_r( $formattedArr) ;
		
		
		//echo $formattedArr[0][1];
		
?>
	  
	  
	
    </form>
	
	<body>
<div class="right2">
From :<?php echo $from;
 ?><br>
To: <?php //echo $_POST["enddate"];
echo $to ;
 ?><br>
</div>

<div class="right">



	<div id="ex0"style="width:400; height:600"></div>
</div>
    <!--Div that will hold the pie chart-->'
	
	<div class="right1">
   <div id="table_div2" style="width:600; height:180"></div>
   
   <div id="table_div" style="width:600; height:400"></div>
   <div id="table_div1" style="width:600; height:200"></div>
   <form action="finalapp1.php" method="post">
   
	<div><input type="submit" value="Reset to default"></div>
	</form>
   
   </div>
   
  </body>
	
	
  </body>
</html>




