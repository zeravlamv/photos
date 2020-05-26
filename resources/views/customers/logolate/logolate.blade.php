@extends(../layouts/welcome)

@section('contents')
<div class="container">
    <h1>Logolate.com <span>
            <h3>Informe SEO</h3>
    </h1>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">SEO</a></li>
        <li><a data-toggle="tab" href="#menu1">Móvil</a></li>
        <li><a data-toggle="tab" href="#menu2">Usabilidad</a></li>
        <li><a data-toggle="tab" href="#menu3">Tecnologias</a></li>
        <li><a data-toggle="tab" href="#menu4">Redes Sociales</a></li>
        <li><a data-toggle="tab" href="#menu5">Validación Mark-up</a></li>

    </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h4>Titulo : <strong>Ok</strong></h4>
            <h4>Meta descripcion : <strong>Ok</strong></h4>
            <h4>keywords :<br> <strong>bombones personalizados (maxima eficiencia)<br>
                    chocolates publicitarios (baja eficiencia)<br>
                    caramelos promocionales (baja eficiencia)<br>
                    dulces publicitarios (poca o nula eficiencia)<br>
                    bombones para hoteles (poca o nula eficiencia)<br>
                    chocolates para hoteles (poca o nula eficiencia)
                </strong></h4>
            <h4>Encabezados : <strong>2 Errores en H2</strong></h4>
            <h4>Imágenes : <strong>2 imagenes no tiene "alt" definido</strong></h4>
            <h4>Backlinks : <strong>No existen en laces externos que contengan la web.</strong></h4>
            <h4>Enlaces internos : <strong>Ok</strong></h4>
            <h4>Enlaces externos : <strong>Ok</strong></h4>
            <h4>Enlaces rotos : <strong>Ok</strong></h4>
            <h4>Url limpias : <strong>Algunos enlaces contienen caracteres no apropiados, enlaces no amigables</strong></h4>
            <h4>Redireccionamiento : <strong>Ok</strong></h4>
            <h4>Canonicalización : <strong>No contemplada, muy perjudicial para un buen SEO</strong></h4>
            <h4>Robots : <strong>Encontrado</strong></h4>
            <h4>Sitemap : <strong>Definido</strong></h4>
            <h4>Blog : <strong>la web contiene blog</strong></h4>
            <h4>Formulario de conversión : <strong>Encontrado</strong></h4>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h4>Optimización móvil : <strong>Web excesivamnte lenta</strong></h4>
            <h4>Tamaño de página : <strong>6.62 MB, puede afectar a la carga, imagenes y uso excesivo de js</strong></h4>
            <h4>Favicon : <strong>Ok</strong></h4>
            <h4>Idioma : <strong>Ok</strong></h4>
            <h4>Página 404 : <strong>Falta definir página de error</strong></h4>

        </div>
        <div id="menu2" class="tab-pane fade">
            <h4>Tiempo de carga : <strong>Tiempo de carga para móvil</strong></h4>
            <h4>Compatibilidad móvil : <strong>no se utiliza tecnologías incompatibles con moviles</strong></h4>
            <h4>Tamaño fuentes : <strong>Ok</strong></h4>
        </div>
        <div id="menu3" class="tab-pane fade">
            <h4>Google Analytics :
                    <h4><strong>"window.dataLayer = window.dataLayer || []"<br>
                        "function gtag(){dataLayer.push(arguments)}"<br>
                        "gtag('js', new Date())"<br>
                        "gtag('config', 'UA-85280230-4')"
                </strong></h4><br>
                <h4><strong> Alguien analiza los datos estadísticos ???</strong></h4>
                <h4>Codificación : <strong>utf-8</strong></h4>
                <h4>SSL : <strong>Conexión segura</strong></h4>

        </div>
        <div id="menu4" class="tab-pane fade">
            <h4>Facebook : <strong>Si</strong></h4>
            <h4>Twitter : <strong>Si</strong></h4>
            <h4>Instagram : <strong>Si</strong></h4>

        </div>
        <div id="menu5" class="tab-pane fade">
            <h4>Error : <strong>21</strong></h4>
            <h4>Warning : <strong>62</strong></h4>
        </div>
    </div>
</div>
@endsection