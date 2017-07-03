<?php include('header.php');?>

<section id="page">

<div class="container">
<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="page-heading">Acreditaciones</h2>
  </div>
  <div class="col-lg-10 col-lg-offset-1">

    <?php
    $csv = array_map('str_getcsv', file('datos/acreditacion.csv'));
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    ?>



    <table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
    		<thead>
    			<tr>
    				<th>Carrera</th>
    				<th>Institución</th>
            <th>Acreditación Institución</th>
    				<th>Periodo Acreditacion Carrera</th>
    				<th>Documento Acreditador</th>

    			</tr>
    		</thead>
    		<tbody>

    			<?php for($a = 0; $a < $total = count($csv); $a++){?>

    			<tr>
    				<td><?php echo($csv[$a]["carrera"])?></td>
    				<td><?php echo($csv[$a]["institucion"])?></td>
            <td><?php echo($csv[$a]["acreditacion_institucion"])?></td>
    				<td><?php echo($csv[$a]["periodo_acreditacion_carrera"])?></td>
    					<td><a href="<?php echo($csv[$a]["Enlace"])?>" target="_blank"><?php echo($csv[$a]["Documento_Acreditador"])?></a></td>

    			</tr>

    			<?php };?>

    		</tbody>
    	</table>


  </div>
</div>
</div>

</section>

<?php include('footer.php');?>
