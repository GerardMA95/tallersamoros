<!doctype html>
@extends('layouts.master')


<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('title', 'Talleresamoros')
        <link rel="icon" href="{!! asset('images/main/hrx-537-vye.jpg') !!}"/>
        @section('header')
          @parent
        @endsection
    </head>
    <body>
      @section('header')
        <header id="header">
          <a href="{{ route('index') }}" class="logo"><strong>Inicio</strong> Tallers Amoròs</a>
          <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
          </ul>
        </header>
      @endsection
      <!-- Header -->

      @section('body')
      <!-- section -->
      <section>
        <header class="main">
          <h1>Talleres Amoròs</h1>
          <p>Soluciones agrícolas</p>
        </header>

        <span class="image main"><img src="{!! asset('images/main/main1.jpg') !!}" alt="" /></span>

        {{-- <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit.</p> --}}
      </section>

      <!-- Section -->
        <section>
          <header class="major">
            <h2>Productos destacados</h2>
          </header>
          <div class="posts">
            <article>
              <a href="{{ route('item', ['category' => 'cortacesped', 'itemShortName' => 'HRE 370', 'itemId' => '10']) }}" class="image"><img src="{!! asset('images/main/kit-hhte-38-be-hbp-20-ah-hbc-210-we.jpg') !!}" alt="" /></a>
              <h3>KIT HHTE 38 BE + HBP 20 AH + HBC 210 WE</h3>
              <p>La desbrozadora de batería Honda HHTE38BE es ideal para el mantenimiento de espacios con vegetación densa, hierba alta y maleza persistente (batería y cargador incluidos).</p>
              <ul class="actions">
                <li><a href="{{ route('item', ['category' => 'cortacesped', 'itemShortName' => 'HRE 370', 'itemId' => '10']) }}" class="button">Más</a></li>
              </ul>
            </article>
            <article>
              <a href="#" class="image"><img src="{!! asset('images/main/hf-2315-sb.jpg') !!}" alt="" /></a>
              <h3>HF 2315 SB</h3>
              <p>Cortacésped de asiento Honda HF2315SB, transmisión mecánica, deflector y mulching opcional, Optiflow, comodidad y seguridad.</p>
              <ul class="actions">
                <li><a href="#" class="button">Más</a></li>
              </ul>
            </article>
            <article>
              <a href="#" class="image"><img src="{!! asset('images/main/deposito-rapidon-6-lts.jpg') !!}" alt="" /></a>
              <h3>Depósito RAPIDON 6 lts</h3>
              <p>Depósito transparente Rapidon6 con indicador de contenido, para repostar de la manera más cómoda, rápida y limpia, evitando derramar combustible.</p>
              <ul class="actions">
                <li><a href="#" class="button">Más</a></li>
              </ul>
            </article>
            <article>
              <a href="#" class="image"><img src="{!! asset('images/main/hhb-25.jpg') !!}" alt="" /></a>
              <h3>HHB 25</h3>
              <p>Utilizar el soplador Honda HHB 25, con sólo 4.5 Kg y motor de 4 tiempos, es la manera más cómoda y eficaz de mantener limpio tu jardín.</p>
              <ul class="actions">
                <li><a href="#" class="button">Más</a></li>
              </ul>
            </article>
            <article>
              <a href="#" class="image"><img src="{!! asset('images/main/hre-330.jpg') !!}" alt="" /></a>
              <h3>HRE 330</h3>
              <p>Cortacésped eléctrico Honda HRE330, económico, fácil y ligero, para jardines pequeños. Con portacables, cuchilla inteligente y protección contra sobre calentamiento.</p>
              <ul class="actions">
                <li><a href="#" class="button">Más</a></li>
              </ul>
            </article>
            <article>
              <a href="#" class="image"><img src="{!! asset('images/main/kit-hhbe-81-be-hbp-40-ah-hbc-210-we.jpg') !!}" alt="" /></a>
              <h3>KIT HHBE 81 BE + HBP 40 AH + HBC 210 WE</h3>
              <p>El soplador de batería Honda HHBE81BE permite limpiar sin esfuerzo la hojarasca y suciedad acumuladas, incluso espacios interiores (batería y cargador incluidos).</p>
              <ul class="actions">
                <li><a href="#" class="button">Más</a></li>
              </ul>
            </article>
          </div>
          <a href="#" class="button special fit">Ver más</a>
        </section>
      @endsection
      @section('sidebar')
          @parent
      @endsection
      @section('javascript')
          @parent
      @endsection
    </body>
</html>
