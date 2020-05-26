@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
<style>
    .color_tab {

        color:cornflowerblue;
    }
</style>

    <div class="container">
        <h2 class="display-1"><strong>Logolate.com</strong></h2>
        <ul style="list-style-type:none;display:block"><li>Informe SEO </li><li style="color:orangered"> (ok/69% - ko/31%)</li> </ul>
        <ul class="nav nav-tabs">
            <li class="active mx-2"><a data-toggle="tab" href="#home"><h4>SEO</h4></a></li>
            <li class="mx-2"><a data-toggle="tab" href="#menu1"><h4>Móvil</h4></a></li>
            <li class="mx-2"><a data-toggle="tab" href="#menu2"><h4>Usabilidad<h4></a></li>
            <li class="mx-2"><a data-toggle="tab" href="#menu3"><h4>Tecnologias<h4></a></li>
            <li class="mx-2"><a data-toggle="tab" href="#menu4"><h4>Redes Sociales<h4></a></li>
            <li class="mx-2"><a data-toggle="tab" href="#menu5"><h4>Validación Mark-up<h4></a></li>
            <li class="mx-2"><a data-toggle="tab" href="#menu6"><h4>Comentarios<h4></a></li>

        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active color_tab">
                <h4>Titulo : <strong>Ok</strong></h4><br/>
                <h4>Meta descripcion : <strong>Ok</strong></h4><br/>
                <h4>keywords :<br> <strong>bombones personalizados (maxima eficiencia)<br>
                        chocolates publicitarios (baja eficiencia)<br>
                        caramelos promocionales (baja eficiencia)<br>
                        dulces publicitarios (poca o nula eficiencia)<br>
                        bombones para hoteles (poca o nula eficiencia)<br>
                        chocolates para hoteles (poca o nula eficiencia)
                    </strong></h4><br/>
                <h4>Encabezados : <strong>2 Errores en H2</strong></h4><br/>
                <h4>Imágenes : <strong>2 imagenes no tiene "alt" definido</strong></h4><br/>
                <h4>Backlinks : <strong>No existen en laces externos que contengan la web.</strong></h4><br/>
                <h4>Enlaces internos : <strong>Ok</strong></h4><br/>
                <h4>Enlaces externos : <strong>Ok</strong></h4><br/>
                <h4>Enlaces rotos : <strong>Ok</strong></h4><br/>
                <h4>Url limpias : <strong>Algunos enlaces contienen caracteres no apropiados, enlaces no amigables</strong></h4><br/>
                <h4>Redireccionamiento : <strong>Ok</strong></h4><br/>
                <h4>Canonicalización : <strong>No contemplada, muy perjudicial para un buen SEO</strong></h4><br/>
                <h4>Robots : <strong>Encontrado</strong></h4><br/>
                <h4>Sitemap : <strong>Definido</strong></h4><br/>
                <h4>Blog : <strong>la web contiene blog</strong></h4><br/>
                <h4>Formulario de conversión : <strong>Encontrado</strong></h4><br/>
            </div>
            <div id="menu1" class="tab-pane fade color_tab">
                <h4>Optimización móvil : <strong>Web excesivamente lenta</strong></h4><br/>
                <h4>Tamaño de página : <strong>6.62 MB, puede afectar a la carga, imagenes y uso excesivo de js</strong></h4><br/>
                <h4>Favicon : <strong>Ok</strong></h4><br/>
                <h4>Idioma : <strong>Ok</strong></h4><br/>
                <h4>Página 404 : <strong>Falta definir página de error</strong></h4><br/>

            </div>
            <div id="menu2" class="tab-pane fade color_tab">
                <h4>Tiempo de carga : <strong>Tiempo de carga para móvil</strong></h4><br/>
                <h4>Compatibilidad móvil : <strong>no se utiliza tecnologías incompatibles con moviles</strong></h4><br/>
                <h4>Tamaño fuentes : <strong>Ok</strong></h4><br/>
            </div>
            <div id="menu3" class="tab-pane fade color_tab">
            <h4>Google Analytics :
                    <h4><strong>"window.dataLayer = window.dataLayer || []"<br>
                        "function gtag(){dataLayer.push(arguments)}"<br>
                        "gtag('js', new Date())"<br>
                        "gtag('config', 'UA-85280230-4')"
                </strong></h4><br>
                <h4><strong> Alguien analiza los datos estadísticos ???</strong></h4><br/>
    
                <h4>Codificación : <strong>utf-8</strong></h4><br/>
                <h4>SSL : <strong>Conexión segura</strong></h4><br/>

            </div>
            <div id="menu4" class="tab-pane fade color_tab">
                <h4>Facebook : <strong>Si</strong></h4><br/>
                <h4>Twitter : <strong>Si</strong></h4><br/>
                <h4>Instagram : <strong>Si</strong></h4><br/>

            </div>
            <div id="menu5" class="tab-pane fade color_tab">
                <h4>Error : <strong>21</strong></h4><br/>
                <h4>Warning : <strong>62</strong></h4><br/>
            </div>
            <div id="menu6" class="tab-pane fade color_tab">
                <h4>En general la página es correcta y con ligeras modificaciones podrias alcanzar niveles</h4>
                <h4>óptimos en cuanto posicionamiento orgánico, al menos por la parte técnica.</h4><br/>
                <h4>MUY IMPORTANTE : Faltaría por analizar a través de Google Analytics para profundizar en </h4>
                <h4>ciertas métricas con respecto a como interáctua el usuario en tu página,</h4>
                <h4>el tráfico, comportamiento, entre otros. Este punto requiere de seguimiento.</h4><br/>
                <h4>Otro tema es el contenido/mensaje que quieras transmitir, en este aspecto se debería trabajar una estrategia</h4>
                <h4>global, FB, correo y contenido, es la mejor forma de atraer a tus clientes a la par que mejoras</h4>
                <h4>en visibilidad, esto lo haría sin coste.</h4><br/>
                <h4>Entiendo que tu hijo realizará los cambios oportunos, en caso contrario te </h4>
                <h4>puedo hacer un presupuesto de ajustes, no sería mucho.</h4><br/>
                <h4>Página para e-commerce, cuenta que el desarrollo y programación rondaría las</h4>
                <h4>7 semanas, a contar desde la definición de la plantilla (diseño).</h4><br/>
                <h4>Actualmente hay cientos de plantillas para utilizar de forma free y en caso de querer una especifica los</h4>
                <h4>precios pueden oscilar entre 20$ y 80$</h4><br/>
                
            
            </div>
        </div>
    </div>
@endsection
