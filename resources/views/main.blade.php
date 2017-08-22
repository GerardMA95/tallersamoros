@extends('layouts.master')
  @section('title', 'Talleresamoros')
  @section('style')
    @parent
  @endsection

	@section('header')
    @parent
  @endsection

  @section('banner')
    <section id="banner">

      <!-- One -->
      <article class="full">
        <img src="{!! asset('images/main/2013_honda_mean_mower-wide.jpg') !!}" alt="" data-position="center" />
        <div class="content">
          <h2><a href="{{ route('itemSearch') }}">Talleres Amoròs</a></h2>
          <p><b>Descubre todos los productos de las grandes marcas del sector.</b></p>
          <ul class="actions">
            <li><a href="{{ route('itemSearch') }}" class="button">Explorar</a></li>
          </ul>
        </div>
      </article>

      <article class="half">
          {{-- <img src="" alt="" data-position="center" /> --}}
        <img src="{!! asset('images/main/Push-Rotary-Lawn-Mower.jpg') !!}" alt="" data-position="center"/>
        <div class="content">
          <h2><a href="{{ route('itemSearch', ['patent' => 'none', 'category' => 'all']) }}">Categorias</a></h2>
          <p>Descubre todas nuestras categorias de productos ¡No esperes más!.</p>
          <ul class="actions">
            <li><a href="{{ route('itemSearch', ['patent' => 'none', 'category' => 'all']) }}" class="button">Explorar</a></li>
          </ul>
        </div>
      </article>

      <article class="half">
        <img src="{!! asset('images/main/maxresdefault2.jpg') !!}" alt="" data-position="center"/>
        <div class="content">
          <h2><a href="{{ route('itemSearch' , ['patent' => 'all', 'category' => 'none']) }}">Marcas</a></h2>
          <p>Todas nuestras marcas a un click de distáncia.</p>
          <ul class="actions">
            <li><a href="{{ route('itemSearch' , ['patent' => 'all', 'category' => 'none']) }}" class="button">Explorar</a></li>
          </ul>
        </div>
      </article>
    </section>
  @endsection

  @section('body')

  @endsection

  @section('javascript')
      @parent
  @endsection
