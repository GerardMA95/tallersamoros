<section class="main special">
  <div class="inner">
    <header class="major">
      <span class="category">Oops!</span>
      {{-- <h1>Contacto - {{request()->route('itemShortName')}}</h1> --}}
      <h2>
        <a>
            No se ha encontrado el producto que buscas.
        </a>
      </h2>
    </header>
    <footer>
      <ul class="actions">
        <li><a href="{{ route('itemSearch') }}" class="button">Volver al buscador</a></li>
      </ul>
    </footer>
  </div>
</section>
