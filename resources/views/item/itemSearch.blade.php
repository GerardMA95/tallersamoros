@extends('layouts.master')
  @section('title', 'Talleresamoros')
  @section('style')
    @parent
  @endsection

	@section('header')
    @parent
  @endsection
  @section('body')
    <!-- Post -->
      <section class="main special">
        <div class="inner">
          <header class="major">
            <span class="category">Nuestros productos</span>
            {{-- <h1>Contacto - {{request()->route('itemShortName')}}</h1> --}}
            <h2>
              <a>
                @if (request()->route('patent') && request()->route('patent') !== 'none')
                    Encuentra entre nuestras marcas todo lo que necesitas
                @elseif (request()->route('category') && request()->route('category') !== 'none')
                    Encuentra lo que búscas fácilmente por categorias.
                @else
                    Encuentra fácilmente lo que buscas.
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
          {{-- <footer>
            <ul class="actions">
              <li><a href="#" class="button disabled">Búsqueda avanzada</a></li>
            </ul>
          </footer> --}}
        </div>
      </section>
      <div class="inner">
          <section class="tiles">
              @if ($patents !== 'none' && count($patents) > 0)
                  @foreach ($patents as $patent)
                      <article class="style1">
                          <span class="image">
                              @if (File::exists(public_path('images/logo/'.$patent->short_name.'Logo.jpg')))
                                  <img src="{!! asset('images/logo/'.$patent->short_name.'Logo.jpg') !!}" alt="{{ $patent->name }}" />
                              @else
                                  <img src="{{ asset('images/item/list/item_default.jpg') }}" alt="{{ $patent->name }}"/>
                              @endif
                          </span>
                          <a href="{{ route('itemList', ['patent' => $patent->short_name, 'category' => 'none']) }}">
                              <h2 class="color-white">{{ $patent->name }}</h2>
                              <div class="content">
                                  <p>{{ $patent->short_description }}</p>
                              </div>
                          </a>
                      </article>
                  @endforeach
              @elseif ($categories !== 'none' && count($categories) > 0)
                  @foreach ($categories as $category)
                      <article class="style2">
                          <span class="image">
                              @if (File::exists(public_path('images/item/category/'.strtoupper($category->name).'_EN_TARRAGONA_CAT.jpg')))
                                  <img src="{!! asset('images/item/category/'.strtoupper($category->name).'_EN_TARRAGONA_CAT.jpg') !!}" alt="{{ $category->name }}" />
                              @else
                                  <img src="{{ asset('images/item/list/item_default.jpg') }}" alt="{{ $category->name }}"/>
                              @endif
                          </span>
                          <a href="{{ route('itemList', ['patent' => 'none', 'category' => $category->short_name]) }}">
                              <h2 class="color-white">{{ $category->name }}</h2>
                              <div class="content">
                                  <p>{{ $category->short_description }}</p>
                              </div>
                          </a>
                      </article>
                  @endforeach
              @else
                  <article class="style1">
                      <span class="image">
                          <img src="{!! asset('images/main/patentItem.jpg') !!}" alt="" />
                      </span>
                      <a href="{{ route('itemSearch', ['patent' => 'all', 'category' => 'none']) }}">
                          <h2 class="color-white">MARCAS</h2>
                          <div class="content">
                              <p>Encuentra entre nuestras marcas todo lo que necesitas.</p>
                          </div>
                      </a>
                  </article>
                  <article class="style2">
                      <span class="image">
                          <img src="{!! asset('images/main/categoryItem.jpg') !!}" alt="" />
                      </span>
                      <a href="{{ route('itemSearch', ['patent' => 'none', 'category' => 'all']) }}">
                          <h2 class="color-white">CATEGORIAS</h2>
                          <div class="content">
                              <p>Encuentra lo que búscas fácilmente por categorias.</p>
                          </div>
                      </a>
                  </article>
                  <article class="style7">
                      <span class="image">
                          <img src="{!! asset('images/main/anyItem.jpg') !!}" alt="" />
                      </span>
                      <a href="{{ route('itemList', ['patent' => 'all', 'category' => 'all']) }}">
                          <h2 class="color-white">Todos los productos</h2>
                          <div class="content">
                              <p>Todos nuestros productos a tu disposición.</p>
                          </div>
                      </a>
                  </article>
              @endif

          </section>
          <footer class="major">
              @if ($patents !== 'none' && count($patents) > 0)
                  {{ $patents->links() }}
              @elseif ($categories !== 'none' && count($categories) > 0)
                  {{ $categories->links() }}
              @else

              @endif
    	 </footer>
      </div>
  @endsection

  @section('javascript')
      @parent
  @endsection
