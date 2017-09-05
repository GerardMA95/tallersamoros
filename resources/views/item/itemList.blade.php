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
                    @if (request()->route('category') === 'none')
                        {{ request()->route('patent') }}
                    @elseif (request()->route('patent') === 'none')
                        {{ request()->route('category') }}
                    @else
                        Todos nuestros productos
                    @endif
                  </a>
                </h2>
                {{-- <ul class="meta">
                  <li>3 days ago</li>
                  <li><a href="#" class="favorites">2,174</a></li>
                  <li><a href="#" class="comments">1,423</a></li>
                </ul> --}}
              </header>
              {{-- <p>In ut odio eu quam consectetur tristique nec non nisl. Maecenas porttitor vestibulum augue, nec sodales eros blandit non. Phasellus libero nibh, erat blandit, aliquet volutpat purus. Nullam pretium sed turpis lorem, ac congue orci. Donec pulvinar sagittis pellentesque. In ut odio eu quam consectetur tristique nec non nisl. Maecenas porttitor vestibulum augue, nec sodales eros blandit non.</p> --}}
              <footer>
                <ul class="actions">
                  <li><a href="#" class="button disabled">Búsqueda avanzada</a></li>
                </ul>
              </footer>
            </div>
          </section>
          <section class="main">
              <div class="posts">
                  @foreach ($itemList as $item)
                      <article>
                          <a href="{{ route('itemDescription', ['patent' => $patent, 'category' => $category, 'itemId' => $item->short_name]) }}" class="image">
                              @if (File::exists(public_path('images/item/list/'.$item->id_category.'/'.$item->short_name.'.jpg')))
                                  <img src="{!! asset('images/item/list/'.$item->id_category.'/'.$item->short_name.'.jpg') !!}" alt="{{ $item->name }}" />
                              @else
                                  <img src="{{ asset('images/item/list/item_default.jpg') }}" alt="{{ $item->name }}" />
                              @endif
                          </a>
                          <header>
                              <h2><a href="{{ route('itemDescription', ['patent' => $patent, 'category' => $category, 'itemId' => $item->short_name]) }}">{{ $item->name }}</a></h2>
                              <ul class="meta">
                                  <li style="color: #e66666;">{{ $item->price }} €</li>
                                  <li><a href="#" class="favorites">0</a></li>
                                  <li><a href="#" class="comments">0</a></li>
                              </ul>
                          </header>
                          <p>{{ $item->short_description }}.</p>
                          <footer>
                              <ul class="actions">
                                  <li><a href="{{ route('itemDescription', ['patent' => $patent, 'category' => $category, 'itemId' => $item->short_name]) }}" class="button">Ver detalles</a></li>
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
