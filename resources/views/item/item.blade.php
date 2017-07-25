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
      <!-- Banner -->
        <section id="banner">
          <div class="content">
            <header>
              <h1>{{request()->route('itemShortName')}}</h1>
              <p>{{request()->route('category')}}</p>
            </header>
            <p>Si lo que quieres es un césped perfecto sin preocuparte de nada, el Honda Miimo 310 es la solución ideal. Para jardines de cualquier medida, hasta un máximo de 2.000 m2. Instalación no incluida en el precio.</p>
            <ul class="actions">
              <li><a href="{{ route('itemRequest', ['category' => 'cortacesped', 'itemShortName' => 'HRE 370', 'itemId' => '10']) }}" class="button big">Pedir presupuesto</a></li>
            </ul>
          </div>
          <span class="image object">
            <img src="{!! asset('images/main/hrx-537-vye.jpg') !!}" alt="" />
          </span>
        </section>
        <!-- Section -->
          <section>
            <header class="major">
              <h2>Especificaciones</h2>
            </header>
            <div class="features">
              <article>
                <span class="icon fa-diamond"></span>
                <div class="content">
                  <h3>Motor</h3>
                  <p>GX 390</p>
                </div>
              </article>
              <article>
                <span class="icon fa-bolt"></span>
                <div class="content">
                  <h3>Salida max. monofasica</h3>
                  <p>4.5000 va</p>
                </div>
              </article>
              <article>
                <span class="icon fa-exclamation-triangle"></span>
                <div class="content">
                  <h3>Peso</h3>
                  <p>79,5 KG.</p>
                </div>
              </article>
              <article>
                <span class="icon fa-signal"></span>
                <div class="content">
                  <h3>Nivel sonoro</h3>
                  <p>97 Lwa.</p>
                </div>
              </article>
            </div>
          </section>
        <!-- Section -->
          <section>
            <header class="major">
              <h2>Características</h2>
            </header>
            <div class="features">
              <article>
                <span class="icon fa-diamond"></span>
                <div class="content">
                  <h3>Motor</h3>
                  <p>GX 390</p>
                </div>
              </article>
              <article>
                <span class="icon fa-bolt"></span>
                <div class="content">
                  <h3>Salida max. monofasica</h3>
                  <p>4.5000 va</p>
                </div>
              </article>
              <article>
                <span class="icon fa-exclamation-triangle"></span>
                <div class="content">
                  <h3>Peso</h3>
                  <p>79,5 KG.</p>
                </div>
              </article>
              <article>
                <span class="icon fa-signal"></span>
                <div class="content">
                  <h3>Nivel sonoro</h3>
                  <p>97 Lwa.</p>
                </div>
              </article>
            </div>
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
