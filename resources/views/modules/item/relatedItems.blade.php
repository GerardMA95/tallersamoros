<section class="main special">
  <div class="inner">
    <header class="major">
      <h2>
        <a>
          Articulos relacionados
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
        @foreach ($relatedItems as $item)
            <article>
                <a href="{{ route('itemDescription',
                        [
                            'patent' => $itemPatent->short_name ,
                            'category' => $itemCategory->short_name,
                            'itemId' => $item->short_name
                        ]) }}" class="image">
                    @if (File::exists(public_path('images/item/list/'.$item->id_category.'/'.$item->short_name.'.jpg')))
                        <img src="{!! asset('images/item/list/'.$item->id_category.'/'.$item->short_name.'.jpg') !!}" alt="{{ $item->name }}" />
                    @else
                        <img src="{{ asset('images/item/list/item_default.jpg') }}" alt="{{ $item->name }}" />
                    @endif
                </a>
                <header>
                    <h2><a href="{{ route('itemDescription',
                            [
                                'patent' => $itemPatent->short_name ,
                                'category' => $itemCategory->short_name,
                                'itemId' => $item->short_name
                            ]) }}">{{ $item->name }}</a></h2>
                    <ul class="meta">
                        <li style="color: #e66666;">{{ $item->price }} €
                        @if ($itemPatent == 'pellenc')
                            + IVA
                        @endif</li>
                        <li><a href="#" class="favorites">0</a></li>
                        <li><a href="#" class="comments">0</a></li>
                    </ul>
                </header>
            </article>
        @endforeach
    </div>
</section>
