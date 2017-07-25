<html>
    <head>
        <title>@yield('title')</title>
        @section('style')
          <!-- Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

          <!-- Styles -->
          {!! Html::style('css/main.css') !!}
          <script src="https://use.fontawesome.com/5879b99bb3.js"></script>
        @show
    </head>
    <body>
      <!-- Wrapper -->
  			<div id="wrapper">
  				<!-- Main -->
  					<div id="main">
  						<div class="inner">
                @section('header')

                @show
                @section('body')

                @show

                @section('related')

                @show

                @section('footer')

                @show
                </div>
            </div>
          @section('sidebar')
          <!-- Sidebar -->
            <div id="sidebar">
              <div class="inner">

                <!-- Search -->
                  <section id="search" class="alt">
                    <form method="post" action="#">
                      <input type="text" name="query" id="query" placeholder="Search" />
                    </form>
                  </section>

                <!-- Menu -->
                  <nav id="menu">
                    <header class="major">
                      <h2>Menú</h2>
                    </header>
                    <ul>
                      <li><a href="{{ route('index') }}">Inicio</a></li>
                      <li>
                        <span class="opener">Agrícola</span>
                        <ul>
                          <li>
                            <span class="">Maquinaria</span>
                            <ul>
                              <li><a href="#">Motosierras</a></li>
                              <li><a href="#">Desbrozadoras</a></li>
                              <li><a href="#">Cortasetos</a></li>
                              <li><a href="#">Sopladores</a></li>
                              <li><a href="#">Multiusos</a></li>
                              <li><a href="#">Perforadoras</a></li>
                              <li><a href="#">Regeneradores</a></li>
                            </ul>
                          </li>
                          <li>
                            <span class="">Accesorios</span>
                            <ul>
                              <li><a href="#">Motosierras</a></li>
                              <li><a href="#">Desbrozadoras</a></li>
                              <li><a href="#">Cortasetos</a></li>
                              <li><a href="#">Otros productos</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <span class="opener">Jardineria</span>
                        <ul>
                          <li>
                            <span class="">Maquinaria</span>
                            <ul>
                              <li><a href="#">Motosierras</a></li>
                              <li><a href="#">Desbrozadoras</a></li>
                              <li><a href="#">Cortasetos</a></li>
                              <li><a href="#">Sopladores</a></li>
                              <li><a href="#">Multiusos</a></li>
                              <li><a href="#">Perforadoras</a></li>
                              <li><a href="#">Regeneradores</a></li>
                            </ul>
                          </li>
                          <li>
                            <span class="">Accesorios</span>
                            <ul>
                              <li><a href="#">Motosierras</a></li>
                              <li><a href="#">Desbrozadoras</a></li>
                              <li><a href="#">Cortasetos</a></li>
                              <li><a href="#">Otros productos</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      {{-- <li>
                        <span class="opener">Accesorios</span>
                        <ul>
                          <li><a href="#">Motosierras</a></li>
                          <li><a href="#">Desbrozadoras</a></li>
                          <li><a href="#">Cortasetos</a></li>
                          <li><a href="#">Otros productos</a></li>
                        </ul>
                      </li>
                      <li>
                        <span class="opener">Maquinaria</span>
                        <ul>
                          <li><a href="#">Batería de litio</a></li>
                          <li><a href="#">Gasolina</a></li>
                        </ul>
                      </li> --}}
                      <li><a href="{{ route('contactUs') }}">Contacto</a></li>
                    </ul>
                  </nav>

                <!-- Section -->
                  <section>
                    <header class="major">
                      <h2>Novedades</h2>
                    </header>
                    <div class="mini-posts">
                      <article>
                        <a href="{{ route('item', ['category' => 'bateria', 'itemShortName' => 'Test', 'itemId' => '10']) }}" class="image"><img src="{!! asset('images/main/hrx-537-vye.jpg') !!}" alt="" /></a>
                        <p>Cortacésped <b>Honda HRX 537 VYE</b>, estárter automático, jardines medios o grandes, sistema de corte Versamow® y avance automático Smart Drive®.</p>
                      </article>
                      <article>
                        <a href="{{ route('item', ['category' => 'bateria', 'itemShortName' => 'Test', 'itemId' => '10']) }}" class="image"><img src="{!! asset('images/main/miimo-hrm-310.jpg') !!}" alt="" /></a>
                        <p>Si lo que quieres es un césped perfecto sin preocuparte de nada, el <b>Honda Miimo 310</b> es la solución ideal. Para jardines de cualquier medida, hasta un máximo de 2.000 m2. Instalación no incluida en el precio.</p>
                      </article>
                    </div>
                    <ul class="actions">
                      <li><a href="#" class="button">Ver más</a></li>
                    </ul>
                  </section>

                <!-- Section -->
                  <section>
                    <header class="major">
                      <h2>Contacta</h2>
                    </header>
                    <p>¿Tienes dudas acerca de uno de nuestros producots?</p>
                    <p>¡Contacta con nosotros!</p>
                    <ul class="contact">
                      <li class="fa-envelope-o"><a href="#">talleresamoros@untitled.tld</a></li>
                      <li class="fa-phone">(000) 000-0000</li>
                      <li class="fa-home">1234 Somewhere Road #8254<br />
                      Nashville, TN 00000-0000</li>
                    </ul>
                  </section>

                <!-- Footer -->
                  <footer id="footer">
                    <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                  </footer>

              </div>
            </div>
          @show
        </div>
        @section('javascript')
          <!-- Scripts -->
          {!! Html::script('js/jquery.min.js') !!}
          {!! Html::script('js/skel.min.js') !!}
          {!! Html::script('js/util.js') !!}
          {!! Html::script('js/main.js') !!}
        @show
    </body>
</html>
