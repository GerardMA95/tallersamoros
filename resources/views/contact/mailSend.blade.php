@extends('layouts.master')
  @section('title', 'Talleresamoros')
  @section('style')
    @parent
  @endsection

	@section('header')
    @parent
  @endsection
  @section('body')
      <section class="main special">
        <div class="inner">
          <header class="major">
            <span class="category">Correo enviado!</span>
            {{-- <h1>Contacto - {{request()->route('itemShortName')}}</h1> --}}
            <h2>
              <a>
                  Gracias por contactar con nosotros, responderemos lo antes posible.
              </a>
            </h2>
          </header>
          <footer>
            <ul class="actions">
              <li><a href="{{ route('main') }}" class="button">Volver al inicio</a></li>
            </ul>
          </footer>
        </div>
      </section>
  @endsection

  @section('javascript')
      @parent
  @endsection
