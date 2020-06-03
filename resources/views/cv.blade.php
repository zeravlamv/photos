@extends('layouts.app')
@section('estilos')
<style>
    img {
        display: flex;
        margin: 0 auto;
        margin-top: 15px;
        overflow: hidden;
        justify-content: center;
    }

    .color_tab {

        color:darkslategrey;
    }
</style>

@endsection
@section('content')
<div class="container">
    <h2 class="display-4"><strong>Miguel Vergara Alvarez</strong></h2>
    <h4><i>Análisis, diseño y programación de proyectos empresariales y web multi-entornos - CV (Act. 05/2020)</i></h4>
    <ul class="nav nav-tabs navbar-light">
        <li class="nav-link active ms-4"><a data-toggle="tab" href="#home">
                <h3>Datos Personales</h3>
            </a></li>
        <li class="nav-link ms-4"><a data-toggle="tab" href="#menu1">
                <h3>Sobre mí</h3>
            </a></li>
        <li class="nav-link ms-4"><a data-toggle="tab" href="#menu2">
                <h3>Experiencia laboral<h3>
            </a></li>
        <li class="nav-link ms-4"><a data-toggle="tab" href="#menu3">
                <h3>Estudios y Formación<h3>
            </a></li>
        <li class="nav-link ms-4"><a data-toggle="tab" href="#menu4">
                <h3>Tecnología<h3>
            </a></li>
    </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active color_tab">
            <h4>Nacionalidad: Chilena (afincado en España desde el año 73)<h4><br />
            <h4>NIE: X0025611N (Permiso de Residencia y Trabajo permanente)</h4><br />
            <h4>Fecha Nac: 26/01/1965</h4><br />
            <h4>Mallorca 419,3º 3ª,Esc.Izq. / 08013 / Barcelona</h4><br />
        </div>
        <div id="menu1" class="tab-pane fade color_tab">
            <h4>Soy una persona extrovertida, acostumbrada a trabajar en equipo, organizada y métodica.</h4><br />
            <h4>Mantengo siempre una actitud pro-activa y me considero un buen negociador.</h4><br />
            <h4>He liderado equipos de diferente índole y en diferentes ámbitos.</h4><br />
            <h4>Acostumbrado a participar en la toma de decisiones estratégicas en la compañia y al trato con terceros.</h4><br />
            <h4>Me encanta el Mar, el Padel y la cocina (especialidad paella).</h4><br />

        </div>
        <div id="menu2" class="tab-pane fade color_tab">
            <h4><strong>Desde Junio 2014 hasta la actualidad en TORRAS WORLD,S.L. (antigua GÉNEROS DE PUNTO TORRAS).</strong></h4><br />
            <h4>TORRAS WORLD,S.A. es la empresa que adquiere la unidad productiva de GÉNEROS DE PUNTO TORRAS,S.A.</h4><br />
            <h4>Desde el inicio me encargo de la gestión administración, informática y área financiera de la empresa.</h4><br />
            <h4>Bajo mi responsabilidad recae todo la organización a nivel de gestión y cuento con un equipo de 15 personas para llevarlo a cabo.</h4><br />
            <h4>Implantación y uso del sofware de SAGE Murano / Sage 200, desarrollo de informes con SQL.</h4><br />
            <h4>Actualmente la compañia se encuentra en fase de liquidación.</h4><br />
            <h4><strong>Desde mayo de 2002 hasta 2013 en GÉNEROS DE PUNTO TORRAS,S.A.</strong></h4><br />
            <h4>En la empresa soy el máximo responsable de la implantación del programa de gestión para IBM AS/400 denominado MRP/400 (SPARE/400) y que incorpora los módulos de gestión contable, gestión comercial y producción.</h4><br />
            <h4>Durante años me encargo de desarrollar y mejorar el programa de gestión así como la integración con otros productos externos.</h4><br />
            <h4>Desarrollo en RPGIV / SQL.</h4><br />
            <h4>Como parte del proyecto TORRAS se desarrolla una intranet bajo entorno linux (DEBIAN) y programación en PHP/CSS/JS para control de fichas de producción y acceso desde talleres externo ubicados en India, China y Rumania principalmente, así como conectividad con el AS/400 para análisis y consultas a traves del UNIXODBC.</h4><br />
            <h4>Desde el 2010 empiezo a responsabilizarme también del departamento financiero de la compañía, donde me encargo de todo el proceso contable y fiscal que conlleva una actividad empresarial, cierres, liquidación impuestos, presentación de balances, amortizaciones, etc…</h4><br />
            <h4>De igual forma me encargo de negociación de líneas de descuento / confirming / cartas de crédito / líneas comercio exterior con las entidades bancarias.
            </h4><br />
            <h4>Participo en proyecto de e-commerce utilizando como framework Prestashop en colaboración con otro programador de la empresa. </h4><br />
            <h4>Desde julio de 2013 hasta Julio de 2014 atravesamos un período concursal que culmina con la venta de unidad productiva a TORRAS WORLD,S.L. </h4><br />
            <h4>En este período actuó como enlace directo y responsable de la gestión dependiendo directamente de la administradora concursal.</h4><br />
            <h4><strong>Desde Julio del 1984 hasta 2002 en diferentes agentes de IBM y como autónomo</strong></h4><br />
            <h4>Inicio mi carrera profesional en BS Informática después de dos años de estudios en IBM (Vía Augusta) donde estúdio el lenguaje RPG II y III IV y el sistema operativo del AS/400. Y obtengo diversas certificaciones sobre el SO del AS/400 ahora conocido como Ibm i / i-Series.</h4><br />
            <h4>Durante un tiempo desarrollo mi actividad profesional como autónomo para diferentes clientes de sectores tan diversos como la automoción, textil e industrial de aluminio.</h4><br />
            <h4>En este período dirijo equipos de entre 5 y 15 programadores y me encargo principalmente del análisis y seguimiento de los proyectos que están a mi cargo.</h4><br />
            <h4>Asi mismo realizo tareas comerciales tanto para la venta de hardware como software de gestión.</h4><br />
            <h4>Mi carrera en el sector servicios finaliza en mayo del 2002 que es cuando me incorporo a GÉNEROS DE PUNTO TORRAS como director de informática.</h4><br />
            <h4></h4><br />

        </div>
        <div id="menu3" class="tab-pane fade color_tab">
            <h4>Delineante Proyectista.(Formación Profesional II) </h4><br />
            <h4>Estudios de programación realizados en IBM</h4><br />
            <h4>Certificacion IBM AS/400.</h4><br />
            <h4>Analista Programador Senior</h4><br />
            <h4>Programación en RPG IV / PHP / HTML / JS / CSS </h4><br />
            <h4>Arquitecturas MVC </h4><br />
            <h4>Cursos de diseño web avanzado (HTML5/CSS3)</h4><br />
            <h4>Formación análisis SEO.</h4><br />
            <h4>Conocimientos en Google Analitycs.</h4><br />
            <h4>Formación continua en gestión financiera y contable, desarrollo herramientas de analisis propias.</h4><br />
            <h4>Conocimientos framewoprk Lavarel.</h4><br />
            <h4>Ofimática nivel experto.</h4><br />
            <h4>Software desarrollo (VSC / HOMESITE) y gestion de repositirios (GITHUB).</h4><br />
            <h4>Ingles: Medio</h4><br />
            <h4>Catalan: Alto</h4><br />

        </div>
        <div id="menu4" class="tab-pane fade color_tab">

            <div class="container">
                <div class="row">
                    <div class="col-sm"><img src="{{asset ('assets/img/ibm.png')}}"></div>
                    <div class="col-sm"><img src="{{asset ('assets/img/laravel_7.png')}}"></div>
                    <div class="col-sm"><img src="{{asset ('assets/img/debian.png')}}"></div>
                </div>
                <div class="row">
                    <div class="col-sm"><img src="{{asset ('assets/img/php7.png')}}"></div>
                    <div class="col-sm"><img src="{{asset ('assets/img/mysql.png')}}"></div>
                    <div class="col-sm"><img src="{{asset ('assets/img/js.png')}}"></div>
                </div>
                <div class="row">
                    <div class="col-sm"><img src="{{asset ('assets/img/bootstrap.jpg')}}"></div>
                    <div class="col-sm"> <img src="{{asset ('assets/img/angular.png')}}"></div>
                    <div class="col-sm"> <img src="{{asset ('assets/img/vmware.png')}}"></div>
                </div>
                <div class="row">
                    <div class="col-sm"><img src="{{asset ('assets/img/vsdc.jpg')}}"></div>
                    <div class="col-sm"><img src="{{asset ('assets/img/vsc.jpg')}}"></div>
                    <div class="col-sm"><img src="{{asset ('assets/img/xampp.png')}}"></div>

                </div>
                <div class="row">
                    <div class="col-sm"><img src="{{asset ('assets/img/ibmdb2.jpg')}}"></div>
                    <div class="col-sm"><img src="{{asset ('assets/img/aws.png')}}"></div>
                    <div class="col-sm"><img src="{{asset ('assets/img/analytics.png')}}"></div>

                </div>
                <div class="row">
                    <div class="col-sm"><img src="{{asset ('assets/img/drawio.png')}}"></div>
                    <div class="col-sm"><img src="{{asset ('assets/img/html5.png')}}"></div>
                    <div class="col-sm"><img src="{{asset ('assets/img/css3.png')}}"></div>
                </div>
                <div class="row">
                    <div class="col-sm"><img src="{{asset ('assets/img/ms365.png')}}"></div>
                    <div class="col-sm"><img src="{{asset ('assets/img/openoffice.jpg')}}"></div>
                    <div class="col-sm"><img src="{{asset ('assets/img/apache.png')}}"></div>
                </div>
                <div class="row">
                    <div class="col-sm"><img src="{{asset ('assets/img/wamp.png')}}"></div>
                    <div class="col-sm"><img src="{{asset ('assets/img/seo.png')}}"></div>
                    <div class="col-sm"><img src="{{asset ('assets/img/github.png')}}"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection