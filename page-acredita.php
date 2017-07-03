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
            <td><?php
            if ($csv[$a]["Documento_Acreditador"] == "Acuerdo") { ?>
                <a href="<?php echo($csv[$a]["Enlace"] )?>"target="_blank"><?php echo($csv[$a]["Documento_Acreditador"])?></a>
                <?php
            }
            if ($csv[$a]["Documento_Acreditador"] == "No Acreditada") {
                echo ($csv[$a]["Documento_Acreditador"]);
            }
            ?></td>

    			</tr>

    			<?php };?>


    		</tbody>
	</table>


<br>


<center><form method="get" action="datos/acreditacion.csv">
     <button type="submit" class="btn btn-info">Descarga esta tabla en formato csv</button>
  </form>
</center>

<br>
<center><div class="col-lg-12"><h5><strong>Fuentes</strong></h5> <br>

<p class="p-quotes"><strong>Mi Futuro</strong><br>
Ministerio de Educación, Gobierno de Chile.
Portal oficial con datos de empleabilidad e ingreso, instituciones, arancel y carreras.
<br><a href="http://www.mifuturo.cl/index.php/donde-y-que-estudiar/buscador-de-instituciones?view=instituciones&tecnico=false&cmbtipos=0&cmbnombres=0&order_field=ins.nombre_institucion&order=DESC">http://www.mifuturo.cl</a></p></center>


<p class="p-quotes"><strong>Comisión Nacional De Acreditación</strong><br>
Comisión Nacional de Acreditación. Verificación y promoción de la calidad de la educación superior.
<br><a href="https://www.cnachile.cl/Paginas/Inicio.aspx">http://www.cnachile.cl</a></p>


<p class="p-quotes"><strong>Agencia Acreditadora De Arquitectura Arte y Diseño</strong><br>
Agencia Acreditadora de Arquitectura, Arte y Diseño de Chile S.A. (AADSA)


<p class="p-quotes"><strong>AcreditAcción</strong><br>
Agencia de acreditación privada, independiente y autónoma, cuyo propósito central es <br>contribuir al aseguramiento de la calidad en instituciones de educación superior
<br><a href="http://www.acreditaccion.cl/resultado_de_acreditacion.php">http://www.acreditaccion.cl</a>


</div>

  </div>
</div><center>



</div>

</section>

<?php include('footer.php');?>
