<?php 

$user= $_SESSION['faculty'];
$q=mysqli_query($conn,"select * from feedback where faculty_id='".$_SESSION['faculty_login']."'");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>



<div class="row">
	<div class="col-sm-12" style="color:black; margin-top:50px">
		<h3 align="left">Feedback for <?php echo $users['programme'];?></h3>
	</div>
</div>


<div class="row">
<div class="col-sm-12">
<table class="table table-bordered">
<thead>
	<tr class="success">
		<th style="color:red">Sr.No</th>
		<th>Course outline </th>
		<th>Course objectiv</th>
		<th>Course integration</th>
		<th>Punctuality</th>
		<th>simulation interest</th>
		<th>Explain Well</th>
		<th>Presention</th>
		<th>Inovative methods
		</th>
		<th> Helpful</th>
		<th>Completes course</th>
		<th>Fair and impartial</th>
		<th>Assesment</th>
		<th>Student like</th>
		<th>Student dislike</th>
		</tr>
</thead>
		
		<?php
		$i=1;
	while($row=mysqli_fetch_array($q))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row[3]."</td>";
			echo "<td>".$row[4]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
			echo "<td>".$row[7]."</td>";
			echo "<td>".$row[8]."</td>";
			echo "<td>".$row[9]."</td>";
			echo "<td>".$row[10]."</td>";
			echo "<td>".$row[11]."</td>";
			echo "<td>".$row[12]."</td>";
			echo "<td>".$row[13]."</td>";
			echo "<td>".$row[14]."</td>";
			echo "<td>".$row[15]."</td>";
			echo "<td>".$row[16]."</td>";
			echo "</tr>";

		$i++;
		}
		
		?>
		
	
		
</table>
</div>
	</div>
<?php }?>