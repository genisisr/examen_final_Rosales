<section class="no-padding" id="viz">

<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<hr>
<h2>Visualizaciones</h2>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row no-gutter popup-gallery">

  <!--\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/-->

  <div class="col-lg-4 col-sm-6">
  <a href="#portfolioModal3"  class="portfolio-box" data-toggle="modal">
  <img src="img/f_01.png" class="img-responsive" alt="Fachada de un edificio universitario">
  <div class="portfolio-box-caption">
  <div class="portfolio-box-caption-content">
  <div class="project-category text-faded">
Ubicación
  </div>
  <div class="project-name">
  Porcentaje de sedes en regiones
  </div>
  </div>
  </div>
  </a>
  </div>


  <!--\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/-->

  <div class="col-lg-4 col-sm-6">
<a href="#portfolioModal1"  class="portfolio-box" data-toggle="modal">
<img src="img/f_02.png" class="img-responsive" alt="Biblioteca universitaria">
<div class="portfolio-box-caption">
<div class="portfolio-box-caption-content">
<div class="project-category text-faded">
Acreditación
</div>
<div class="project-name">
Periodo de acreditatión carreras de diseño en Chile por institución
</div>
</div>
</div>
</a>
</div>

  <!--\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/-->

  <div class="col-lg-4 col-sm-6">
  <a href="#portfolioModal5"  class="portfolio-box" data-toggle="modal">
  <img src="img/f_03.png" class="img-responsive" alt="Agencia creativa en la que se ven unos stands de trabajo">
  <div class="portfolio-box-caption">
  <div class="portfolio-box-caption-content">
  <div class="project-category text-faded">
  Proyecciones
  </div>
  <div class="project-name">
  Ingreso promedio al cuarto año de egreso
  </div>
  </div>
  </div>
  </a>
  </div>
  <!--\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/-->


  <div class="col-lg-4 col-sm-6">
  <a href="#portfolioModal2"  class="portfolio-box" data-toggle="modal">
  <img src="img/f_04.png" class="img-responsive" alt="Alumnos de diseño trabajando en al universidad">
  <div class="portfolio-box-caption">
  <div class="portfolio-box-caption-content">
  <div class="project-category text-faded">
  Acreditación
  </div>
  <div class="project-name">
  Años y cantidad de carreras acreditadas por institución en Chile.
  </div>
  </div>
  </div>
  </a>
  </div>


  <!--\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/-->


    <div class="col-lg-4 col-sm-6">
    <a href="#portfolioModal6"  class="portfolio-box" data-toggle="modal">
    <img src="img/f_05.png" class="img-responsive" alt="Profesionales compartiendo ideas entorno a un proyecto">
    <div class="portfolio-box-caption">
    <div class="portfolio-box-caption-content">
    <div class="project-category text-faded">
    Aranceles
    </div>
    <div class="project-name">
    Duración formal de las carreras de diseño en Chile
    </div>
    </div>
    </div>
    </a>
    </div>

  <!--\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/-->

  <div class="col-lg-4 col-sm-6">
    <a href="#portfolioModal4"  class="portfolio-box" data-toggle="modal">
    <img src="img/f_06.png" class="img-responsive" alt="Diseñador trabajando en un boceto">
    <div class="portfolio-box-caption">
    <div class="portfolio-box-caption-content">
    <div class="project-category text-faded">
    Acreditación
    </div>
    <div class="project-name">
Tipología de instituciones y estado de acreditación
    </div>
    </div>
    </div>
    </a>
    </div>
  <!--\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/-->

</div>
</div>
</section>

<!--\/\/\/\/\/\/\/\/\/\/\/\ M O D A L E S \/\/\/\/\/\/\/\/\/\/\/\-->

<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-content">
<div class="close-modal" data-dismiss="modal">
<div class="lr">
<div class="rl">
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<div class="modal-body">
<h2>Periodo de acreditatión carreras de diseño en Chile por institución</h2>
<hr class="star-primary">
<img src="img/viz_2.png" class="img-responsive img-centered" alt="Gráfico en el cual se visualizan los años en que se acredito cada carrera y su fecha de término">

<p>Se observa en el gráfico el año en que comienza la acreditación de las instituciones y el año de término
de la acreditación conseguida. En el gráfico se presenta Duoc UC como la institución con la acreditación
más antigua, pero entre una de las mas extendidas, 7 años, al contrario de IP Los Leones de tan solo 3 años para su carrera.
</p>

<p><strong>Gantt Chart</strong>
<br>
El gráfico anterior está representado con una visualización llamada
<a href="http://www.datavizcatalogue.com/methods/gantt_chart.html">Gantt Chart</a>, este tipo de
visualizaciones nos permite crear gráficos de tiempo, procesos, métodos y duración de ciertas actividades, entre otras. A través de los colores podemos ir diferenciando
actividades y etapas dentro del gráfico lo cuál nos permite ordenar visualmente un proyecto presentado mediante este método.
</p>

<p><strong>Creación del gráfico</strong>
<br>
Para la generación del gráfico se crearon tres columnas: "Instituciones", "Desde" y "Hasta". En la
columna de "Instituciones" se establecieron los nombres de las instituciones que ofrecen la carrera de diseño, en "Desde" y "Hasta" el año
en que comenzó el periodo de acreditación y su fecha de término. Estos datos fueron introducidos a una
tabla de excel que se usó para crear un archivo csv.
Este archivo se subió a <a href="http://app.rawgraphs.io/">rawgraphs</a> la cual generó el gráfico presentado.<br>
Siguiendo los criterios que se muestran en la imagen podemos llegar a la visualización observada
mas arriba. Es importante tener en cuenta que para generar este gráfico los datos de inicio y término
deben ser en formatos soportados por rawgraphs, como se menciona en su categoría de <a href="http://rawgraphs.io/learning/how-to-make-a-gantt-chart/">How to make a Gantt chart</a>.
<br>
<br>
<img src="img/cap_2.png" class="img-responsive img-centered" alt="Pasos a seguir para generar el gráfico de gantt chart a través de datos.">

<pre>
  <code>
  institucion,acreditacion_carrera,Desde,Hasta
  CFT INACAP,5 años,01/01/2014,01/01/2019
  IP AIEP,5 años,01/01/2015,01/01/2020
  IP DUOC UC,6 años,01/01/2011,01/01/2017
  IP DUOC UC,7 años,01/01/2010,01/01/2017
  IP INACAP,6 años,01/01/2016,01/01/2022
  IP LOS LEONES,3 años,01/01/2016,01/01/2019
  IP SANTO TOMAS,5 años,01/01/2013,01/01/2018
  IP SANTO TOMAS,4 años,01/01/2016,01/01/2020
  PONTIFICIA UNIVERSIDAD CATÓLICA DE CHILE,7 años,01/01/2015,01/01/2022
  PONTIFICIA UNIVERSIDAD CATOLICA DE VALPARAISO,5 años,01/01/2013,01/01/2018
  UNIVERSIDAD CATOLICA DE TEMUCO,4 años,01/01/2016,01/01/2020
  UNIVERSIDAD DE CHILE,5 años,01/01/2012,01/01/2017
  UNIVERSIDAD DE LA SERENA,4 años,01/01/2016,01/01/2020
  UNIVERSIDAD DE TALCA,5 años,01/01/2014,01/01/2019
  UNIVERSIDAD DE TARAPACA,5 años,01/01/2015,01/01/2020
  UNIVERSIDAD DE VALPARAISO,5 años,01/01/2015,01/01/2020
  UNIVERSIDAD DE VIÑA DEL MAR,3 años,01/01/2015,01/01/2018
  UNIVERSIDAD DEL BIO-BIO,6 años,01/01/2013,01/01/2019
  UNIVERSIDAD DEL DESARROLLO,6 años,01/01/2012,01/01/2018
  UNIVERSIDAD DEL PACIFICO,5 años,01/01/2014,01/01/2018
  UNIVERSIDAD DIEGO PORTALES,6 años,01/01/2016,01/01/2022
  UNIVERSIDAD TECNOLOGICA METROPOLITANA,6 años,01/01/2016,01/01/2022
  UNIVERSIDAD TECNOLOGICA METROPOLITANA,5 años,01/01/2016,01/01/2021

</pre>
    </code>


<p>Copia y pega los datos en <a href="http://app.rawgraphs.io/">rawgraphs</a> o descarga el csv y crea tu propio gráfico
  con los datos <br> utilizados para generar la visualización!</p>

<center><form method="get" action="datos/tablas_csv/tabla_2.csv">
     <button type="submit" class="btn btn-info">Datos en formato csv</button>
  </form>
</center>

</p>



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
Agencia Acreditadora de Arquitectura, Arte y Diseño de Chile S.A. (AADSA)</p>

<p class="p-quotes"><strong>rawgraphs</strong><br>
Open source data visualization.<br>
<a href="http://app.rawgraphs.io/">http://www.rawgraphs.io</a></p>


<p class="p-quotes"><strong>datavizcatalogue</strong><br>
Data visualisatiion catalogue. A library off different information visualisation types.<br>
<a href="http://www.datavizcatalogue.com">http://www.datavizcatalogue.com</a>

<p class="p-quotes"><strong>AcreditAcción</strong><br>
Agencia de acreditación privada, independiente y autónoma, cuyo propósito central es <br>contribuir al aseguramiento de la calidad en instituciones de educación superior
<br><a href="http://www.acreditaccion.cl/resultado_de_acreditacion.php">http://www.acreditaccion.cl</a>
<br>
<br>



<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
</div>
</div>
</div>
</div>
</div>
</div>

<!--\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/-->

<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-content">
<div class="close-modal" data-dismiss="modal">
<div class="lr">
<div class="rl">
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<div class="modal-body">
<h2>Años y cantidad de carreras acreditadas por institución en Chile.</h2>
<hr class="star-primary">
<img src="img/viz_4.png" class="img-responsive img-centered" alt="Se entrega información acerca de los años de acreditación de las carreras de diseño y la cantidad de instituciones que obtuvieron una determinada suma de años por acreditación.">

<p>Mediante este gráfico se puede establecer la cantidad de años de acreditación que se han asignado durante
el ultimo tiempo. Estos periodos de acreditación varian desde 3 años el mínimo a 7 el máximo, siendo solamente 2 instituciones las que
estarían acreditadas por el periodo máximo de tiempo Duoc UC y Pontificia Universidad Católica de Chile respectivamente. Además se puede observar
que existen una gran cantidad de instituciones que imparten la carrera de diseño sin acreditación.</p>

<p><strong>Treemap</strong>
<br>
El gráfico anterior está representado con una visualización llamada
<a href="http://www.datavizcatalogue.com/methods/treemap.html">Treemap</a>, este tipo de
visualizaciones nos permite ver como funcionan las cosas, procesos, flujos y proporciones. A través de los colores podemos ir diferenciando
categorías y elementos dentro del gráfico lo cuál proporciona una mejor comprensión de la información que nos muestra la visualización.
</p>

<p><strong>Creación del gráfico</strong>
<br>
Para la generación del gráfico se crearon cuatro columnas: "años_label", "instituciones_label","instituciones" y "años".
En la columna de "años_label" se generan los textos en los cuales se indican los números acompañados
años en texto, esto es porque en la parte de "size" de rawgraphs solo se permiten números,
siendo los textos inválidos y repercutiendo en la generación del gráfico, lo mismo para "instituciones_label"
que se crea por la misma razón. Las columnas de "instituciones" y "años" son solo numéricas, permitiendo
generar tamaños dentro del gráfico con más facilidad.


Estos datos fueron introducidos a una tabla de excel que se usó para crear un archivo csv.
Este archivo se subió a <a href="http://app.rawgraphs.io/">rawgraphs</a> la cual generó el gráfico presentado.<br>
Siguiendo los criterios que se muestran en la imagen podemos llegar a la visualización observada
mas arriba, recuerda que si tienes dudas puede ver la sección de <a href="http://rawgraphs.io/learning/how-to-make-a-treemap/">How to make a treemap</a>
de rawgraphs.
<br>
<br>
<img src="img/cap_4.png" class="img-responsive img-centered" alt="Pasos a seguir para generar el gráfico de los años de acreditación de las carreras de diseño y la cantidad de instituciones acreditadasz.">

<pre>
  <code>
  años_label,instituciones_label,instituciones,años
  7 años,2 Instituciones,2,7
  3 años,2 Instituciones,2,3
  6 años,4 Instituciones,4,6
  4  años,4 Instituciones,4,4
  5 años,10 Instituciones,10,5
  No acreditada,13 Instituciones,13,13
</pre>
    </code>


<p>Copia y pega los datos en <a href="http://app.rawgraphs.io/">rawgraphs</a> o descarga el csv y crea tu propio gráfico
  con los datos <br> utilizados para generar la visualización!</p>

<center><form method="get" action="datos/tablas_csv/tabla_4.csv">
     <button type="submit" class="btn btn-info">Datos en formato csv</button>
  </form>
</center>

</p>

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

<p class="p-quotes"><strong>rawgraphs</strong><br>
Open source data visualization.<br>
<a href="http://app.rawgraphs.io/">http://www.rawgraphs.io</a></p>


<p class="p-quotes"><strong>datavizcatalogue</strong><br>
Data visualisatiion catalogue. A library off different information visualisation types.<br>
<a href="http://www.datavizcatalogue.com">http://www.datavizcatalogue.com</a>


<p class="p-quotes"><strong>AcreditAcción</strong><br>
Agencia de acreditación privada, independiente y autónoma, cuyo propósito central es <br>contribuir al aseguramiento de la calidad en instituciones de educación superior
<br><a href="http://www.acreditaccion.cl/resultado_de_acreditacion.php">http://www.acreditaccion.cl</a>
<br>
<br>

<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
</div>
</div>
</div>
</div>
</div>
</div>

<!--\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/-->

<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-content">
<div class="close-modal" data-dismiss="modal">
<div class="lr">
<div class="rl">
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<div class="modal-body">
<h2>Porcentaje de sedes en regiones</h2>
<hr class="star-primary">
<img src="img/viz_1.png" class="img-responsive img-centered" alt="Se observa el porcentaje de sedes en regiones que ofrecen la carrera de diseño.">

<p>El gráfico nos muestra la concentración de instituciones por regiones, se observa que el <strong> 52,2% </strong>  de
las instituciones que ofrecen la carrera de diseño se encuentran en la Región Metropolitana, seguida
por la Región de Valparaíso con un <strong> 7,8%</strong>  y el Bío-Bío con un <strong> 6,7%.</strong>  Un poco más de la mitad de las
instituciones y sedes existentes se encuentran en Santiago de Chile.</p>

<p><strong>Circle Packing</strong>
<br>
El gráfico anterior está representado con una visualización llamada
<a href="http://www.datavizcatalogue.com/methods/circle_packing.html">Circle Packing</a>, este tipo de
visualizaciones nos permite crear jerarquías y proporciones. A través de los colores podemos ir diferenciando
categorías y elementos dentro del gráfico lo cuál proporciona una mejor comprensión de la información que nos muestra la visualización.
</p>

<p><strong>Creación del gráfico</strong>
<br>
Para la generación del gráfico se crearon tres columnas: Ciudades, número de sedes y porcentajes.En la
columna de regiones se establecieron los datos de las regiones que cuentan con instituciones que ofrecen la carrera de diseño,
en número de sedes cuántas sedes se encuentran en cada región, y en porcentajes cuál es el promedio de
cada región con respecto a las sedes de enseñanza que posee. Estos datos fueron introducidos a una
tabla de excel que se usó para crear un archivo csv.
Este archivo se subió a <a href="http://app.rawgraphs.io/">rawgraphs</a> la cual generó el gráfico presentado.<br>
Siguiendo los criterios que se muestran en la imagen podemos llegar a la visualización observada
mas arriba, recuerda que si tienes dudas puede ver la sección de <a href="http://rawgraphs.io/learning/">Learning</a>
de rawgraphs.
<br>
<br>
<img src="img/cap_1.png" class="img-responsive img-centered" alt="Pasos a seguir para generar el gráfico de porcentaje de instituciones en regiones.">


<pre>
  <code>
regiones,numero_cedes,porcentajes,porcentaje,label_porcentaje
Arica y Parinacota,3,"3,3",%,"3,3%"
Bio bio,6,"6,7",%,"6,7%"
Atacama,1,"1,1",%,"1,1%"
Maule,4,"4,4",%,"4,4%"
Tarapacá,2,"2,2",%,"2,2%"
Coquimbo,5,"5,6",%,"5,6%"
Los lagos,4,"4,4",%,"4,4%"
Magallanes,2,"2,2",%,"2,2%"
O'higgins,4,"4,4",%,"4,4%"
Los Ríos,1,"1,1",%,"1,1%"
Valparaíso,7,"7,8",%,"7,8%"
Araucanía,4,"4,4",%,"4,4%"
Metropolitana,47,"52,2",%,"52,2%"

</code>
  </pre>


<p>Copia y pega los datos en <a href="http://app.rawgraphs.io/">rawgraphs</a> o descarga el csv y crea tu propio gráfico
  con los datos <br> utilizados para generar la visualización!</p>

<center><form method="get" action="datos/tablas_csv/tabla_1.csv">
     <button type="submit" class="btn btn-info">Datos en formato csv</button>
  </form>
</center>

</p>

<br>
<center><div class="col-lg-12"><h5><strong>Fuentes</strong></h5> <br>

<p class="p-quotes"><strong>Mi Futuro</strong><br>
Ministerio de Educación, Gobierno de Chile.
Portal oficial con datos de empleabilidad e ingreso, instituciones, arancel y carreras.
<br><a href="http://www.mifuturo.cl/index.php/donde-y-que-estudiar/buscador-de-instituciones?view=instituciones&tecnico=false&cmbtipos=0&cmbnombres=0&order_field=ins.nombre_institucion&order=DESC">http://www.mifuturo.cl</a></p></center>


<p class="p-quotes"><strong>rawgraphs</strong><br>
Open source data visualization.<br>
<a href="http://app.rawgraphs.io/">http://www.rawgraphs.io</a></p>


<p class="p-quotes"><strong>datavizcatalogue</strong><br>
Data visualisatiion catalogue. A library off different information visualisation types.<br>
<a href="http://www.datavizcatalogue.com">http://www.datavizcatalogue.com</a>

<br>
<br>


<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
</div>
</div>
</div>
</div>
</div>
</div>

<!--\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/-->

<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-content">
<div class="close-modal" data-dismiss="modal">
<div class="lr">
<div class="rl">
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<div class="modal-body">
<h2>Tipología de instituciones y estado de acreditación</h2>
<hr class="star-primary">
<img src="img/viz_6.png" class="img-responsive img-centered" alt="Tipología de instituciones y se estado de acreditación">


<p>Según la visualización que nos muestra la tabla anterior la mayor cantidad de instituciones acreditadas
  pertenecen a institutos profesionales, también dado por la mayor cantidad de esta tipología de institución
  en comparación a las universidades o centros de formación técnica.</p>

  <p><strong>Alluvial Diagram o Sankey Diagram</strong>
  <br>
  El gráfico anterior está representado con una visualización llamada <a href="http://rawgraphs.io/learning/how-to-make-an-alluvial-diagram/">Alluvial Diagram </a>
  o <a href="http://www.datavizcatalogue.com/methods/sankey_diagram.html">Sankey Diagram</a>, este tipo de
  visualizaciones nos permite ver como funcionan las cosas, procesos, flujos y proporciones. A través de los colores podemos ir diferenciando
  categorías y elementos dentro del gráfico lo cuál proporciona una mejor comprensión de la información que nos muestra la visualización.
  </p>
</p>

<p><strong>Creación del gráfico</strong>
<br>
Para la generación del gráfico se utilizaron tres columnas: "institucion", "tipo_institucion" y "documento_acreditador".
En la columna de "institucion" se generan los nombres de las instituciones, en "tipo_institucion" se van clasificando
las instituciones seleccionas, por último en "documento_acreditador" nos encontramos si la institución esta acreditada
o no por una agencia especializada.


Estos datos fueron introducidos a una tabla de excel que se usó para crear un archivo csv.
Este archivo se subió a <a href="http://app.rawgraphs.io/">rawgraphs</a> la cual generó el gráfico presentado.<br>
Siguiendo los criterios que se muestran en la imagen podemos llegar a la visualización observada
mas arriba, recuerda que si tienes dudas puede ver la sección de <a href="http://rawgraphs.io/learning/how-to-make-an-alluvial-diagram/">How to make an alluvial diagram</a>
de rawgraphs.
<br>
<br>
<img src="img/cap_6.png" class="img-responsive img-centered" alt="Pasos a seguir para generar el gráfico de tipologías de instituciones y sus estados de acreditación.">

<pre>
  <code>
tipo_institucion,carrera,institucion,acreditacion_institucion,acreditacion_carrera,periodo_acreditacion_carrera,Desde,Hasta,Enlace,Documento_Acreditador
Universidad,Diseño,UNIVERSIDAD DE VIÑA DEL MAR,4 años,3 años,2015 - 2018,2015,2018,http://www.aadsa.cl/convenios/Acreditada%20de%20Acreditacion%20N40%20Diseno%20Grafico%20U%20Vina%20del%20Mar.pdf,Acreditada
Instituto Profesional,Diseño Gráfico Publicitario,IP LOS LEONES,No Acreditada,3 años,2016 -  2019,2016,2019,S/I,No Acreditada
Instituto Profesional,Diseño Gráfico,IP SANTO TOMAS,3 años,4 años,2016 - 2020,2016,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acreditada-N%C2%BA214-Dise%C3%B1o-Gr%C3%A1fico-IPST.pdf,Acreditada
Instituto Profesional,Diseño Gráfico,IP SANTO TOMAS,3 años,4 años,2016 - 2020,2016,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acreditada-N%C2%BA214-Dise%C3%B1o-Gr%C3%A1fico-IPST.pdf,Acreditada
Instituto Profesional,Diseño Gráfico,IP SANTO TOMAS,3 años,4 años,2016 - 2020,2016,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acreditada-N%C2%BA214-Dise%C3%B1o-Gr%C3%A1fico-IPST.pdf,Acreditada
Instituto Profesional,Diseño Gráfico,IP SANTO TOMAS,3 años,4 años,2016 - 2020,2016,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acreditada-N%C2%BA214-Dise%C3%B1o-Gr%C3%A1fico-IPST.pdf,Acreditada
Instituto Profesional,Diseño Gráfico,IP SANTO TOMAS,3 años,4 años,2016 - 2020,2016,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acreditada-N%C2%BA214-Dise%C3%B1o-Gr%C3%A1fico-IPST.pdf,Acreditada
Instituto Profesional,Diseño Gráfico,IP SANTO TOMAS,3 años,4 años,2016 - 2020,2016,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acreditada-N%C2%BA214-Dise%C3%B1o-Gr%C3%A1fico-IPST.pdf,Acreditada
Universidad,Diseño Mención Comunicación/Equipamiento,UNIVERSIDAD DE LA SERENA,4 años,4 años,2016 - 2020,2016,2020,http://www.acreditaccion.cl/dictamenes/Resolucion_de_Acreditacion_N583_Diseno_ULS.pdf,Acreditada
Universidad,Diseño Gráfico,UNIVERSIDAD CATOLICA DE TEMUCO,4 años,4 años,2016 - 2020,2016,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2017/03/Acreditada-N%C2%BA464.pdf,Acreditada
Universidad,Diseño de Interiores,UNIVERSIDAD DEL PACIFICO,No Acreditada,4 años,2014 - 2018,2014,2018,S/I,No Acreditada
Instituto Profesional,Diseño Gráfico,IP AIEP,3 años,5 años,2015 - 2020,2015,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2016/03/Acreditada-N%C2%BA404.pdf,Acreditada
Instituto Profesional,Diseño de Vestuario Profesional Mención Alta Costura,IP AIEP,3 años,5 años,2013 - 2018,2013,2018,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acreditada-N%C2%BA231-Dise%C3%B1o-de-Vestuario-AIEP.pdf,Acreditada
Instituto Profesional,Diseño Gráfico Profesional,IP AIEP,3 años,5 años,2015 - 2020,2015,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2016/03/Acreditada-N%C2%BA404.pdf,Acreditada
Instituto Profesional,Técnico en Diseño Publicitario Multimedial,IP SANTO TOMAS,3 años,5 años,2013 - 2018,2013,2018,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acreditada-N%C2%BA214-Dise%C3%B1o-Gr%C3%A1fico-IPST.pdf,Acreditada
Universidad,Diseño en Comunicación Visual,UNIVERSIDAD TECNOLOGICA METROPOLITANA,4 años,5 años,2016 - 2021,2016,2021,http://www.acreditadoradechile.cl/wp-content/uploads/2016/03/Acreditada-N%C2%BA421.pdf,Acreditada
Universidad,Diseño,UNIVERSIDAD DE TALCA,5 años,5 años,2014 - 2019,2014,2019,http://www.aadsa.cl/convenios/Acreditada%20de%20Acreditacion%20N35%20Diseno%20U%20de%20Talca.pdf,Acreditada
Universidad,Diseño,UNIVERSIDAD DE VALPARAISO,5 años,5 años,2015 - 2020,2015,2020,http://www.aadsa.cl/convenios/Acreditada%20de%20Acreditacion%20N42%20Diseno%20U%20de%20Valparaiso.pdf,Acreditada
</pre>
  </code>

<p>Copia y pega los datos en <a href="http://app.rawgraphs.io/">rawgraphs</a> o descarga el csv y crea tu propio gráfico
  con los datos <br> utilizados para generar la visualización!</p>

<center><form method="get" action="datos/tablas_csv/tabla_4.csv">
     <button type="submit" class="btn btn-info">Datos en formato csv</button>
  </form>
</center>

</p>

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

<p class="p-quotes"><strong>rawgraphs</strong><br>
Open source data visualization.<br>
<a href="http://app.rawgraphs.io/">http://www.rawgraphs.io</a></p>


<p class="p-quotes"><strong>datavizcatalogue</strong><br>
Data visualisatiion catalogue. A library off different information visualisation types.<br>
<a href="http://www.datavizcatalogue.com">http://www.datavizcatalogue.com</a>



<p class="p-quotes"><strong>AcreditAcción</strong><br>
Agencia de acreditación privada, independiente y autónoma, cuyo propósito central es <br>contribuir al aseguramiento de la calidad en instituciones de educación superior
<br><a href="http://www.acreditaccion.cl/resultado_de_acreditacion.php">http://www.acreditaccion.cl</a>
<br>
<br>










<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
</div>
</div>
</div>
</div>
</div>
</div>

<!--\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/-->

<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-content">
<div class="close-modal" data-dismiss="modal">
<div class="lr">
<div class="rl">
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<div class="modal-body">
<h2>Ingreso promedio al cuarto año de egreso</h2>
<hr class="star-primary">
<img src="img/viz_3.png" class="img-responsive img-centered" alt="Ingreso promedio al cuarto año de egresados, se pueden observar diferencias por tipología de institución de egreso.">

<p>Se puede observar rápidamente
como se van distribuyendo los valores salariales dependiendo de la institución por la cual se egresa.
Los ingresos más altos se dan en las instituciones universitarias, siendo los institutos profesionales los
que le siguen en cantidad de ingresos, siendo finalmente los centros de formación técnica las instituciones
con más desventaja en el mercado.</p>

<p><strong>Alluvial Diagram o Sankey Diagram</strong>
<br>
El gráfico anterior está representado con una visualización llamada <a href="http://rawgraphs.io/learning/how-to-make-an-alluvial-diagram/">Alluvial Diagram </a>
o <a href="http://www.datavizcatalogue.com/methods/sankey_diagram.html">Sankey Diagram</a>, este tipo de
visualizaciones nos permite ver como funcionan las cosas, procesos, flujos y proporciones. A través de los colores podemos ir diferenciando
categorías y elementos dentro del gráfico lo cuál proporciona una mejor comprensión de la información que nos muestra la visualización.
</p>

<p><strong>Creación del gráfico</strong>
<br>
Para la generación del gráfico se crearon tres columnas: "tipos de institución", "institución" y "sueldo promedio al cuarto año de egreso". En la
columna de "tipos de institución" se establecieron los datos de los distintos tipos de instituciones que existen en el país,o al menos 3 de de
los principales: universidad, instituto profesional y centro de formación técnica. En "institución" los nombres de
las instituciones que imparten la carrera de diseño en Chile, y finalmente el sueldo promedio de los egresados al cuarto años
. Estos datos fueron introducidos a una tabla de excel que se usó para crear un archivo csv.
Este archivo se subió a <a href="http://app.rawgraphs.io/">rawgraphs</a> la cual generó el gráfico presentado.<br>
Siguiendo los criterios que se muestran en la imagen podemos llegar a la visualización observada
mas arriba, recuerda que si tienes dudas puede ver la sección de <a href="http://rawgraphs.io/learning/how-to-make-an-alluvial-diagram/">How to make an alluvial diagram</a>
de rawgraphs.
<br>
<br>
<img src="img/cap_3.png" class="img-responsive img-centered" alt="Pasos a seguir para generar el gráfico de porcentaje de ingreso promedio al cuarto año de egreso.">

<p>Descarga y crea tu propio gráfico con los datos utilizados para generar la visualización!</p>

<center><form method="get" action="datos/tablas_csv/tabla_3.csv">

  <pre>
    <code>
Tipo de institución,institucion,empleabilidad,,ingreso_promedio_4to_año
Centro de Formación Técnica,CFT DE ENSEÑANZA DE ALTA COSTURA PAULINA DIARD,S/I,,S/I
Centro de Formación Técnica,CFT ICEL,S/I,,S/I
Centro de Formación Técnica,CFT INACAP,S/I,,S/I
Centro de Formación Técnica,CFT INACAP,S/I,,S/I
Instituto Profesional,IP AIEP,"42,00%",,S/I
Instituto Profesional,IP AIEP,S/I,,$500-600 mil
Instituto Profesional,IP AIEP,S/I,,$500 - $600 mil
Instituto Profesional,IP DE CHILE,"79,00%",,S/I
Instituto Profesional,IP DUOC UC,"59,40%",,$700 - $800 mil
Instituto Profesional,IP DUOC UC,"70,10%",,$700 - $800 mil
Instituto Profesional,IP DUOC UC,"63,10%",,$600 - $700 mil
Instituto Profesional,IP DUOC UC,"58,70%",,$600 - $700 mil
Instituto Profesional,IP INACAP,"59,00%",,S/I
Instituto Profesional,IP INACAP,S/I,,$500 - $600 mil
Instituto Profesional,IP LOS LEONES,S/I,,$500-600 mil
Instituto Profesional,IP SANTO TOMAS,S/I,,S/I
Instituto Profesional,IP SANTO TOMAS,"55,70%",,$500 - $600 mil
Universidad,PONTIFICIA UNIVERSIDAD CATÓLICA DE CHILE,"79,80%",,S/I
Universidad,PONTIFICIA UNIVERSIDAD CATOLICA DE VALPARAISO,"56,80%",,S/I
Universidad,PONTIFICIA UNIVERSIDAD CATOLICA DE VALPARAISO,"56,80%",,S/I
Universidad,UNIVERSIDAD ADOLFO IBAÑEZ,S/I,,S/I
Universidad,UNIVERSIDAD ANDRES BELLO,S/I,,S/I
Universidad,UNIVERSIDAD ANDRES BELLO,"52,00%",,S/I
Universidad,UNIVERSIDAD ANDRES BELLO,S/I,,S/I
Universidad,UNIVERSIDAD ANDRES BELLO,"52,00%",,$700 - $800 mil
Universidad,UNIVERSIDAD CATOLICA DE TEMUCO,"55,00%",,S/I
Universidad,UNIVERSIDAD CATOLICA DE TEMUCO,"55,00%",,S/I
Universidad,UNIVERSIDAD DE ANTOFAGASTA,"65,00%",,$600-700 mil
Universidad,"UNIVERSIDAD DE ARTES, CIENCIAS Y COMUNICACION","47,90%",,S/I
Universidad,"UNIVERSIDAD DE ARTES, CIENCIAS Y COMUNICACION","47,90%",,S/I
Universidad,UNIVERSIDAD DE CHILE,S/I,,S/I
Universidad,UNIVERSIDAD DE CHILE,"77,60%",,$800 - $900 mil
Universidad,UNIVERSIDAD DE CHILE,"77,60%",,$800 - $900 mil
Universidad,UNIVERSIDAD DE LA SERENA,"51,60%",,S/I
Universidad,UNIVERSIDAD DE LAS AMERICAS,S/I,,S/I
Universidad,UNIVERSIDAD DE LAS AMERICAS,S/I,,S/I
Universidad,UNIVERSIDAD DE LAS AMERICAS,S/I,,S/I
Universidad,UNIVERSIDAD DE SANTIAGO DE CHILE,"66,70%",,$700 - $800 mil
Universidad,UNIVERSIDAD DE TALCA,"53,80%",,S/I
Universidad,UNIVERSIDAD DE TARAPACA,S/I,,S/I
Universidad,UNIVERSIDAD DE VALPARAISO,S/I,,$600 - $700 mil
Universidad,UNIVERSIDAD DEL BIO-BIO,"60,60%",,$600 - $700 mil
Universidad,UNIVERSIDAD DEL BIO-BIO,"57,60%",,$600 - $700 mil
Universidad,UNIVERSIDAD DEL DESARROLLO,"72,60%",,$800 - $900 mil
Universidad,UNIVERSIDAD DEL DESARROLLO,"72,60%",,$800 - $900 mil
Universidad,UNIVERSIDAD DEL DESARROLLO,"72,60%",,$800 - $900 mil
Universidad,UNIVERSIDAD DEL PACIFICO,"57,70%",,$900 mil - $1 millón
Universidad,UNIVERSIDAD DEL PACIFICO,"67,40%",,$800 - $900 mil
Universidad,UNIVERSIDAD DEL PACIFICO,"56,30%",,$700 - $800 mil
Universidad,UNIVERSIDAD DIEGO PORTALES,"72,70%",,$800 - $900 mil
Universidad,UNIVERSIDAD DIEGO PORTALES,"72,70%",,$800 - $900 mil
Universidad,UNIVERSIDAD FINIS TERRAE,"53,60%",,$800 - $900 mil
Universidad,UNIVERSIDAD FINIS TERRAE,"53,60%",,$800 - $900 mil
Universidad,UNIVERSIDAD GABRIELA MISTRAL,S/I,,S/I
Universidad,UNIVERSIDAD MAYOR,"64,60%",,$800 - $900 mil
Universidad,UNIVERSIDAD TECNOLOGICA METROPOLITANA,"76,80%",,$800 - $900 mil
Universidad,UNIVERSIDAD TECNOLOGICA METROPOLITANA,"68,20%",,$800 - $900 mil
</pre>
  </code>

<br>
<br>

  <p>Copia y pega los datos en <a href="http://app.rawgraphs.io/">rawgraphs</a> o descarga el csv y crea tu propio gráfico
    con los datos <br> utilizados para generar la visualización!</p>

  <center><form method="get" action="datos/tablas_csv/tabla_3.csv">
       <button type="submit" class="btn btn-info">Datos en formato csv</button>
    </form>
  </center>

  </p>

  <br>
  <center><div class="col-lg-12"><h5><strong>Fuentes</strong></h5> <br>
    <p class="p-quotes"><strong>Mi Futuro</strong><br>
    Ministerio de Educación, Gobierno de Chile.
    Portal oficial con datos de empleabilidad e ingreso, instituciones, arancel y carreras.
    <br><a href="http://www.mifuturo.cl/index.php/donde-y-que-estudiar/buscador-de-instituciones?view=instituciones&tecnico=false&cmbtipos=0&cmbnombres=0&order_field=ins.nombre_institucion&order=DESC">http://www.mifuturo.cl</a></p></center>

    <p class="p-quotes"><strong>rawgraphs</strong><br>
    Open source data visualization.<br>
    <a href="http://app.rawgraphs.io/">http://www.rawgraphs.io</a></p>


    <p class="p-quotes"><strong>datavizcatalogue</strong><br>
    Data visualisatiion catalogue. A library off different information visualisation types.<br>
    <a href="http://www.datavizcatalogue.com">http://www.datavizcatalogue.com</a>
<br>
<br>


<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
</div>
</div>
</div>
</div>
</div>
</div>

<!--\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/-->

<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-content">
<div class="close-modal" data-dismiss="modal">
<div class="lr">
<div class="rl">
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<div class="modal-body">
<h2>Duración formal de las carreras de diseño en Chile</h2>
<hr class="star-primary">
<img src="img/viz_5.png" class="img-responsive img-centered" alt="Duración semestral de las carreras de diseño por institución.">

<p>La visualización del gráfico de barras nos entrega la información sobre la duración semestral
  de las carreras de diseño por institución en Chile. Observamos que la carrera de mayor duración
  corresponde a 10 semestres y la carrera con menos duración es de 4 semestres, que corresponde a CFT Inacap .</p>

<p><strong>Bar Chart</strong>
<br>
El gráfico anterior está representado con una visualización llamada
<a href="http://www.datavizcatalogue.com/methods/bar_chart.html">Bar Chart</a>, este tipo de
visualizaciones nos permite ver comparaciones entre datos y patrones. A través de los colores podemos ir diferenciando
los distintos componentes que conforman el gráfico, ya sean datos, categorías, porcentajes, entre otros.
.</p>

<p><strong>Creación del gráfico</strong>
<br>
El csv que se utilizó para la creación de este gráfico contiene varias columnas de datos, pero las que
ocuparemos para realizar esta visualización con las siguientes: "Escuela", "duracion_formal", "tipo_institucion".
Con la columna "Escuela" nos referiremos a la institución, "duracion_formal" es el la duración de los
semestres por cada institución que aparece en escuela. Por último tenemos "tipo_institucion" en la cual se categorizan
las instituciones nombradas.
En el eje X posicionamos los nombres de las instituciones, en la altura corresponden la duración de los semestres
mientras que los colores que se presentan son dados por el tipo de institución.

Estos datos fueron introducidos a una tabla de excel que se usó para crear un archivo csv.
Este archivo se subió a <a href="http://app.rawgraphs.io/">rawgraphs</a> la cual generó el gráfico presentado.<br>
Siguiendo los criterios que se muestran en la imagen podemos llegar a la visualización observada
mas arriba, recuerda que si tienes dudas puede ver la sección de <a href="http://rawgraphs.io/learning/how-to-make-a-barchart/">How to make a barchart</a>
de rawgraphs.
<br>
<br>
<img src="img/cap_5.png" class="img-responsive img-centered" alt="Pasos a seguir para generar el gráfico de duración formal de las carreras de diseño.">

<pre>
  <code>
tipo_institucion,carrera,escuela,duracion_formal,duracion_real,arancel,arancel_formal,arancel_real
Centro de Formación Técnica,Diseño Gráfico ,CFT ICEL,5,S/I,919000,2297500,S/I
Centro de Formación Técnica,Diseño Gráfico,CFT INACAP,4,S/I,1942000,3884000,S/I
Instituto Profesional,Diseño Gráfico,IP AIEP,8,102,1450000,5800000,7395000
Instituto Profesional,Diseño Gráfico,IP CHILE,8,S/I,1152000,4608000,S/I
Instituto Profesional,Diseño Gráfico,IP DUOC UC,8,122,2280000,9120000,13908000
Instituto Profesional,Diseño Gráfico,IP INACAP,8,118,1556000,6224000,9180400
Universidad,Diseño Gráfico,IP LOS LEONES,8,10,1220000,4880000,6100000
Instituto Profesional,Diseño Gráfico,IP SANTO TOMÁS,8,S/I,1821000,7284000,S/I
Universidad,Diseño Gráfico,U. ANDRÉS BELLO,9,12,4525151,20363179,27150906
Universidad,Diseño Gráfico,U. CATÓLICA,10,12,4775000,23875000,28650000
Universidad,Diseño Gráfico,U. DE CHILE,10,153,3698700,18493500,28295055
Universidad,Diseño Gráfico,U. DE TALCA,9,S/I,3044500,13700250,S/I
Universidad,Diseño Gráfico,U. DE VALPARAÍSO,10,176,3147000,15735000,26749500
Universidad,Diseño Gráfico,U. DEL BIO-BÍO,10,137,2574000,12870000,17631900
Universidad,Diseño Gráfico,U. DEL PACÍFICO,9,116,3990000,17955000,23142000
Universidad,Diseño Gráfico,U. FINIS TERRAE,9,119,4256000,19152000,25323200
Universidad,Diseño Gráfico,U. MAYOR,10,S/I,4371000,21855000,S/I
Universidad,Diseño Gráfico,UAI,10,S/I,5000236,25001180,S/I
Universidad,Diseño Gráfico,UC TEMUCO,10,S/I,3108000,15540000,S/I
Universidad,Diseño Gráfico,UC VALPARAÍSO,9,S/I,4061000,18274500,S/I
Universidad,Diseño Gráfico,UDD,10,123,5947649,29738245,36578041
Universidad,Diseño Gráfico,UDLA,8,S/I,2940250,11761000,S/I
Universidad,Diseño Gráfico,UDP,10,13,4581000,22905000,29776500
Universidad,Diseño Gráfico,UTEM,10,176,2921858,12870000,17631900
Universidad,Diseño Gráfico,UVM,9,S/I,2460305,11071372,S/I
</pre>
  </code>


<p>Copia y pega los datos en <a href="http://app.rawgraphs.io/">rawgraphs</a> o descarga el csv y crea tu propio gráfico
  con los datos <br> utilizados para generar la visualización!</p>

<center><form method="get" action="datos/tablas_csv/tabla_5.csv">
     <button type="submit" class="btn btn-info">Datos en formato csv</button>
  </form>
</center>

</p>

<br>
<center><div class="col-lg-12"><h5><strong>Fuentes</strong></h5> <br>

<p class="p-quotes"><strong>Mi Futuro</strong><br>
Ministerio de Educación, Gobierno de Chile.
Portal oficial con datos de empleabilidad e ingreso, instituciones, arancel y carreras.
<br><a href="http://www.mifuturo.cl/index.php/donde-y-que-estudiar/buscador-de-instituciones?view=instituciones&tecnico=false&cmbtipos=0&cmbnombres=0&order_field=ins.nombre_institucion&order=DESC">http://www.mifuturo.cl</a></p></center>



<p class="p-quotes"><strong>rawgraphs</strong><br>
Open source data visualization.<br>
<a href="http://app.rawgraphs.io/">http://www.rawgraphs.io</a></p>


<p class="p-quotes"><strong>datavizcatalogue</strong><br>
Data visualisatiion catalogue. A library off different information visualisation types.<br>
<a href="http://www.datavizcatalogue.com">http://www.datavizcatalogue.com</a>
<br>
<br>






<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
</div>
</div>
</div>
</div>
</div>
</div>

<!--\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/-->
