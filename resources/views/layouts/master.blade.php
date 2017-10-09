<html>
    <head>
        <meta http-equiv="Cache-Control" content="max-age=3600">
        <title>@yield('title')</title>
        <link rel="icon" href="{!! asset('images/logo/amoros/favicon.ico') !!}"/>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="imagetoolbar" content="false"/>
        <meta property="og:image" content="{!! asset('images/logo/amoros/talleres-amoros-logo.image.jpg') !!}" />
    	<meta name="description" content="Talleres Amorós es una empresa de maquinaria agrícola situada en Reus con amplia experiencia en el sector." />

        @section('style')
          <!-- Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

          <!-- Styles -->
          {!! Html::style('css/main.min.css') !!}
          <script src="https://use.fontawesome.com/5879b99bb3.js"></script>
        @show
    </head>
    <body>
      <!-- Wrapper -->
        <div id="wrapper">
          <!-- Header -->

          @section('header')
            <header id="header">
              <div class="logo">
                <a href="{{ route('main') }}" class="title"><strong>Talleresamoros</strong> <span class="extra">Soluciones agrícolas</span></a>
              </div>
              <!-- Nav -->
              <nav id="nav">
                <ul>
                  <li><a href="{{ route('main') }}">Inicio</a></li>
                  <li>
                    <a href="{{ route('itemSearch') }}" class="dropdown">Productos</a>
                    <ul>
                      <li><a href="{{ route('itemSearch' , ['patent' => 'all', 'category' => 'none']) }}">Marcas</a>
                      </li>
                      <li>
                        <a href="{{ route('itemSearch', ['patent' => 'none', 'category' => 'all']) }}">Categorias</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">¿Quienes somos?</a></li>
                  <li><a href="{{ route('contactMap') }}">Contacto</a></li>
                </ul>
              </nav>
            </header>
          @show
          @section('banner')

          @show
  		    <!-- Main -->
  			<div id="main">
              @section('body')

              @show
              @section('footer')
                <!-- Footer -->
                <footer id="footer">
                  <div class="inner">
                    <section>
                      <h2>Redes sociales</h2>
                      <p>¡Síguenos en nuestras redes sociales para estar a la última de todas las novedades de TallersAmoros!</p>
                      <ul class="icons style2">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="https://www.youtube.com/channel/UCJMkOz-eX4hYYICJ6JwhjsQ/videos" class="icon fa-youtube"><span class="label">YouTube</span></a></li>
                      </ul>
                    </section>
                    <section>
                      <h2 id="contact-section">¡Contacta con nosotros!</h2>
                      {!! Form::open(['url' => '/contacto/correo']) !!}
                        <div class="field half first">
                            {{ Form::text('name' , '', ['placeholder' => 'Nombre']) }}
                        </div>
                        <div class="field half">
                            {{ Form::email('email' , '', ['placeholder' => 'Correo electrónico']) }}
                        </div>

                        <div class="field">
                            {{ Form::textarea('message' , '', ['placeholder' => 'Mensaje']) }}
                        </div>
                        <div class="field half first">
                            {{ Form::select('subject', [0 => 'Pedir presupuesto',  1 => 'Pedir información', 2 => 'Reportar incidencia' , 3 => 'Otros'], null , ['placeholder' => 'Selecciona un motivo']) }}
                        </div>
                        <div class="field half">
                            {{ Form::submit('Enviar') }}
                        </div>
                      {!! Form::close() !!}
                    </section>
                  </div>
                  <div class="copyright">
                    <p>&copy; 2017 Tallers Amoros</p>
                  </div>
                </footer>
              @show
              @section('contactUs')
                  <a href="#contact-section" class="button small bottom-right"><i class="fa fa-envelope-o contact-icon fa-5" aria-hidden="true"></i>Contacto</a>
              @show
            </div>
        </div>
        @section('javascript')
          <!-- Scripts -->
          {!! Html::script('js/jquery.min.js') !!}
          {!! Html::script('js/jquery.dropotron.min.js') !!}
          {!! Html::script('js/skel.min.js') !!}
          {!! Html::script('js/util.min.js') !!}
          {!! Html::script('js/main.min.js') !!}
        @show
    </body>
</html>
