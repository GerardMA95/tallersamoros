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
          <h1>Contacto</h1>
          <p>Talleres Amoròs</p>
        </header>
            {{-- {!! Form::open(['url' => 'foo/bar']);
              echo Form::label('email', 'Indique su correo electrónico:');
              echo Form::text('clientEmail');
              echo Form::label('subject', 'Indique el asunto:');
              echo Form::text('subject');
              echo Form::label('body', 'Indique el motivo:');
              echo Form::text('body');
            !!} --}}
            <!-- Form -->
              <form method="post" action="#">
                <div class="row uniform">
                  <div class="6u 12u$(xsmall)">
                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="Su nombre" />
                  </div>
                  <div class="6u$ 12u$(xsmall)">
                    <input type="email" name="demo-email" id="demo-email" value="" placeholder="Correo electrónico" />
                  </div>
                  <div class="12u$">
                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="Asunto" />
                  </div>
                  <!-- Break -->
                  <div class="12u$">
                    <textarea name="demo-message" id="demo-message" placeholder="Indique el motivo" rows="6"></textarea>
                  </div>
                  <!-- Break -->
                  <div class="6u 12u$(small)">
                    <input type="checkbox" id="demo-copy" name="demo-copy">
                    <label for="demo-copy">Quiero recibir una cópia.</label>
                  </div>
                  <!-- Break -->
                  <div class="12u$">
                    <ul class="actions">
                      <li><input type="submit" value="Enviar" class="special" /></li>
                      <li><input type="reset" value="Reiniciar" /></li>
                    </ul>
                  </div>
                </div>
              </form>


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
