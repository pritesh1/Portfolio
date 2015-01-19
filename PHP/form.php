<html>
<head>

</head>


<body>
<?php $a= array();
$a[0]= 1;
$a[1]= 2;
?>


 <script type="text/javascript">

for (i=0;i<2;i++){

<?php
for ($i=0; $i <= 1; $i++){
echo $a[$i];
}
?><br>
}
</script>
 
</body>
</html>