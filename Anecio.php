<html><head>
<meta charset=utf-8>
<title>Activity 2 - SET C: Expansion Project</title>
<style type="text/css">
body,td{
	font-family: Arial, Helvetica, sans-serif;
	color:rgb(0, 237, 245);
	font-size: 12px;
}
.style1 {color:rgb(0, 146, 172)}
.style2 {
	color:rgb(0, 149, 168);
	font-weight: bold;
}
.style3 {color:rgba(0, 72, 167, 0.76);
        font-weight: bold;}
.style7 {color:rgb(0, 204, 255); font-style: italic; }
body {
	background-color:rgb(0, 0, 0);
}
.style8 {color:rgba(0, 240, 220, 0.87)}

.style9,th {
  color:rgb(0, 255, 242);
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
}


</style></head>

<body>
<p>&nbsp;</p>
<table width="90%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#87CEEB">
  <tbody><tr>
    <td><h1 align="center">&nbsp;</h1>
      <h1 align="center" class="style8">Public Library Expansion Project</h1>
      <h2 align="center" class="style1">Cost Estimates</h2>
      <table width="82%" border="0" align="center" cellpadding="5" cellspacing="0" bordercolor="#808080">
        <tbody><tr>
          <th width="23%" height="31" bgcolor="#808080" scope="col">Expenditures</th>
          <th width="18%" align="right" bgcolor="#808080" scope="col">Estimated Cost</th>
          <th width="19%" align="right" bgcolor="#808080" scope="col">10% Increase</th>
          <th width="19%" align="right" bgcolor="#808080" scope="col">15% Increase</th>
          <th width="21%" align="right" bgcolor="#808080" scope="col">20% Increase</th>
        </tr>
        <tr bgcolor="#FF0000">
          <td align="center" bgcolor="#FF0000">Lumber</td>
          <td align="right" bgcolor="#FF0000">$ 150,000.00</td>
          <td align="right"><span class="style7"><?php
            $cost = 150000.00;
            $total_cost = $cost + $cost * 0.10;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 150000.00;
            $total_cost = $cost + $cost * 0.15;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 150000.00;
            $total_cost = $cost + $cost * 0.20;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
        </tr>
        <tr bgcolor="#0000FF">
          <td align="center" bgcolor="#0000FF">Concrete</td>
          <td align="right" bgcolor="#0000FF">$ 78,000.00</td>
          <td align="right"><span class="style7"><?php
            $cost = 78000.00;
            $total_cost = $cost + $cost * 0.10;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 78000.00;
            $total_cost = $cost + $cost * 0.15;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 78000.00;
            $total_cost = $cost + $cost * 0.20;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
        </tr>
        <tr bgcolor="#FF0000">
          <td align="center" bgcolor="#FF0000">Drywall</td>
          <td align="right" bgcolor="#FF0000">$ 69,000.00</td>
          <td align="right"><span class="style7"><?php
            $cost = 69000.00;
            $total_cost = $cost + $cost * 0.10;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 69000.00;
            $total_cost = $cost + $cost * 0.15;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 69000.00;
            $total_cost = $cost + $cost * 0.20;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
        </tr>
        <tr bgcolor="#0000FF">
          <td align="center" bgcolor="#0000FF">Paint</td>
          <td align="right" bgcolor="#0000FF">$ 12,000.00</td>
          <td align="right"><span class="style7"><?php
            $cost = 12000.00;
            $total_cost = $cost + $cost * 0.10;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 12000.00;
            $total_cost = $cost + $cost * 0.15;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 12000.00;
            $total_cost = $cost + $cost * 0.20;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
        </tr>
        <tr bgcolor="#FF0000">
          <td align="center" bgcolor="#FF0000">Miscellaneous</td>
          <td align="right" bgcolor="#FF0000">$ 20,000.00</td>
          <td align="right"><span class="style7"><?php
            $cost = 20000.00;
            $total_cost = $cost + $cost * 0.10;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 20000.00;
            $total_cost = $cost + $cost * 0.10;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 20000.00;
            $total_cost = $cost + $cost * 0.10;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
        </tr>
        
          <td align="right">&nbsp;</td>
          <td align="right">&nbsp;</td>
          <td align="right">&nbsp;</td>
          <td align="right">&nbsp;</td>
          <td align="right">&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><strong>Total Expenditures:</strong></td>
          <td align="right"><span class="style3"><?php
			$a = 150000.00;
            $b = 78000.00;
            $c = 69000.00;
            $d = 12000.00;
            $e = 20000.00;
			$total_cost = $a + $b + $c + $d + $e;
			echo "$ " . number_format($total_cost, 2);
		?></span></td>
          <td align="right"><span class="style3"><?php
			$a = 165000.00;
            $b = 85800.00;
            $c = 75900.00;
            $d = 13200.00;
            $e = 22000.00;
			$total_cost = $a + $b + $c + $d + $e;
			echo "$ " . number_format($total_cost, 2);
		?></span></span></td>
          <td align="right"><span class="style3"><?php
			$a = 172500.00;
            $b = 89700.00;
            $c = 79350.00;
            $d = 13800.00;
            $e = 23000.00;
			$total_cost = $a + $b + $c + $d + $e;
			echo "$ " . number_format($total_cost, 2);
		?></span></span></td>
          <td align="right"><span class="style3"><?php
			$a = 180000.00;
            $b = 93600.00;
            $c = 82800.00;
            $d = 14400.00;
            $e = 24000.00;
			$total_cost = $a + $b + $c + $d + $e;
			echo "$ " . number_format($total_cost, 2);
		?></span></span></td>
        </tr>
        
        <tr>
          <td colspan="5" align="right" class="style1"><h4>Created by: &lt;<em>Justin C. Anecio</em>&gt;</h4></td>
        </tr>
      </tbody></table>      
      <p align="center" class="style1">&nbsp;</p></td>
  </tr>
</tbody></table>
</body></html>
