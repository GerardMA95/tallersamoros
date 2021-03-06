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

    @if ($item)
    <section class="main special">
      <div class="inner">
        <header class="major">
          <span class="category">Detalles del producto</span>
          <h2>
            <a>
                {{ $item->name }} - {{ $item->price }}€
                @if ($itemPatent->id == 3)
                    + IVA
                @endif
            </a>
          </h2>
        </header>
        <footer>
          <ul class="actions">
            <li><a href="#contact-section" class="button">Pedir presupuesto</a></li>
            <li><a href="{{ route('itemSearch') }}" class="button">Volver al buscador</a></li>
            @if ($item->video_url)
                <li><a href="#video-section" class="button">Ver vídeo</a></li>
            @endif
          </ul>
        </footer>
      </div>
    </section>
    <section id="two" class="spotlights">
		<section>
			<a class="image">
            @if (File::exists(public_path('images/item/list/'.$item->id_category.'/'.$item->short_name.'.jpg')))
                <img src="{!! asset('images/item/list/'.$item->id_category.'/'.$item->short_name.'.jpg') !!}" alt="{{ $item->name }}" data-position="center center">
            @else
                <img src="{{ asset('images/item/list/item_default.jpg') }}" alt="{{ $item->name }}" data-position="center center" />
            @endif
			</a>
			<div class="content">
				<div class="inner">
					<header class="major2">
						<h3 style="color: white !important;">{{ $item->name }} - {{ $itemPatent->name }}</h3>
					</header>
					<p>{{ $item->description }}</p>
				</div>
			</div>
		</section>
	</section>
    <div class="envelope style1">
  		<section class="container">
            @if (!empty($features))
      			<header class="major">
      				<h2>Especificaciones</h2>
      			</header>
      			<div class="row uniform">
                    @foreach ($features as $feature)
                        <div class="4u 12u(narrower)">
          					<section class="box2 special">
          						<i class="icon2 major fa-cog"></i>
          						<h3>{{ $feature['featureCategory'] }}</h3>
          						<p>{{ $feature['featureDescription'] }}</p>
          					</section>
          				</div>
                    @endforeach
      			</div>
            @else
                <header class="major">
      				<h2>Este artículo aún no tiene especificaciones</h2>
      			</header>
            @endif
  		</section>
  	</div>
        @if ($item->video_url)
            @include('modules.item.youtubeVideo')
        @endif
        @if (!$relatedItems->isEmpty())
            @include('modules.item.relatedItems')
        @endif
    @else
        @include('error.itemSearchError')
    @endif


  @endsection


  @section('javascript')
      @parent
  @endsection
