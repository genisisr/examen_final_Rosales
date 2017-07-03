<?php include('header.php');?>

<section id="page">

<div class="container">
<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="page-heading">Proyecciones</h2>
  </div>
  <div class="col-lg-10 col-lg-offset-1">

    <?php
    $csv = array_map('str_getcsv', file('datos/futuro.csv'));
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    ?>

                        <table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
                      		<thead>
                      			<tr>
                              <th>Carrera</th>
                      				<th>Institución</th>
                      				<th>Título Profesional</th>
                      				<th>Empleabilidad</th>
                      				<th>Ingreso promedio al cuarto año</th>
                      				</tr>
                      		</thead>
                      		<tbody>

                      			<?php for($a = 0; $a < $total = count($csv); $a++){?>

                      			<tr>
                              <td><?php echo($csv[$a]["carrera"])?></td>
                      				<td><?php echo($csv[$a]["institucion"])?></td>
                      				<td><?php echo($csv[$a]["titulo_profesional"])?></td>
                      				<td><?php echo($csv[$a]["empleabilidad"]);?></td>
                      				<td><?php echo($csv[$a]["ingreso_promedio_4to_año"])?></td>
                      			</tr>

                      			<?php };?>

                      		</tbody>
                      	</table>

                        <br>
                                          <center><form method="get" action="datos/futuro.csv">
                                                     <button type="submit" class="btn btn-info">Descarga esta tabla en formato csv</button>
                                                  </form>
                                                </center>


                                                <br>
                                                <center><div class="col-lg-12"><h5><strong>Fuentes</strong></h5> 
                        <br>
                        <p class="p-quotes"><strong>Mi Futuro</strong><br>
                        Ministerio de Educación, Gobierno de Chile.
                        Portal oficial con datos de empleabilidad e ingreso, instituciones, arancel y carreras.
                        <br><a href="http://www.mifuturo.cl/index.php/donde-y-que-estudiar/buscador-de-instituciones?view=instituciones&tecnico=false&cmbtipos=0&cmbnombres=0&order_field=ins.nombre_institucion&order=DESC">http://www.mifuturo.cl</a></p></center>

                        </div>

                          </div>
                        </div><center>







  </div>
</div>
</div>

</section>

<?php include('footer.php');?>
