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
          <h1>Contacto - {{request()->route('itemShortName')}}</h1>
          <p>{{request()->route('category')}}</p>
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
                    <input type="text" name="userName" id="userName" value="" placeholder="Su nombre" />
                  </div>
                  <div class="6u$ 12u$(xsmall)">
                    <input type="email" name="userEmail" id="userEmail" value="" placeholder="Correo electrónico" />
                  </div>
                  <div class="6u$ 12u$(xsmall)">
                    <input disabled type="email" name="demo-email" id="demo-email" value="" placeholder="{{request()->route('itemShortName')}}" />
                  </div>
                  <div class="12u$">
                    <div class="select-wrapper">
                      <select name="demo-category" id="demo-category">
                        <option value="">Solicitar presupuesto</option>
                        <option value="1">Solicitar explicación de uso</option>
                        <option value="1">Solicitar información técnica.</option>
                        <option value="1">Solicitar asesoriamiento</option>
                      </select>
                    </div>
                  </div>
                  <!-- Break -->
                  <div class="12u$">
                    <textarea name="demo-message" id="demo-message" placeholder="Háganos saber sus intereses" rows="6"></textarea>
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
