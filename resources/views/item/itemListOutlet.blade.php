@extends('layouts.master')
  @section('title', 'Talleresamoros')
  @section('style')
    @parent
  @endsection

	@section('header')
    @parent
  @endsection
  @section('body')
      @if (!$itemList->first())
         @includeIf('error.itemSearchError')
      @else
          @php
                // var_dump($itemList->first());
                // die;
          @endphp
          <section class="main special">
            <div class="inner">
              <header class="major">
                <span class="category">Lista de productos</span>
                {{-- <h1>Contacto - {{request()->route('itemShortName')}}</h1> --}}
                <h2>
                  <a>
                    Zona Outlet
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
          <section class="main">
              <div class="posts">
                  @foreach ($itemList as $item)
                      <article>
                          <a href="{{ route('itemDescriptionOutlet', ['itemId' => $item->short_name]) }}" class="image">
                              @if (File::exists(public_path('images/item/list/'.$item->id_category.'/'.$item->short_name.'.jpg')))
                                  <img src="{!! asset('images/item/list/'.$item->id_category.'/'.$item->short_name.'.jpg') !!}" alt="{{ $item->name }}" />
                              @else
                                  <img src="{{ asset('images/item/list/item_default.jpg') }}" alt="{{ $item->name }}" />
                              @endif
                          </a>
                          <header>
                              <h2><a href="{{ route('itemDescriptionOutlet', ['itemId' => $item->short_name]) }}">{{ $item->name }}</a></h2>
                              <ul class="meta">
                                  <li style="color: #e66666;">{{ $item->price }} €</li>
                                  <li><a href="#" class="favorites">0</a></li>
                                  <li><a href="#" class="comments">0</a></li>
                              </ul>
                          </header>
                          <p>{{ $item->short_description }}</p>
                          <footer>
                              <ul class="actions">
                                  <li><a href="{{ route('itemDescriptionOutlet', ['itemId' => $item->short_name]) }}" class="button">Ver detalles</a></li>
                              </ul>
                          </footer>
                      </article>
                  @endforeach
              </div>
          </section>
          <footer class="major">
              {{ $itemList->links() }}
    	 </footer>
      @endif
  @endsection

  @section('javascript')
      @parent
  @endsection
