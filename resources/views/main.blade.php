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
          <h2><a href="#">Talleres Amoròs</a></h2>
          <p><b>Descubre todos los productos de las grandes marcas del sector.</b></p>
          <ul class="actions">
            <li><a href="#" class="button">Explorar</a></li>
          </ul>
        </div>
      </article>

      <article class="half" style="background-color: #FE9A2E;">
          {{-- <img src="" alt="" data-position="center" /> --}}
        <img src="{!! asset('images/main/Push-Rotary-Lawn-Mower.jpg') !!}" alt="" data-position="center"/>
        <div class="content">
          <h2><a href="#">Cortacésped</a></h2>
          <p>Descubre todos nuestros cortacéspedes ¡No esperes más!.</p>
          <ul class="actions">
            <li><a href="#" class="button">Explorar</a></li>
          </ul>
        </div>
      </article>

      <article class="half" style="background-color: #FF4000;">
        {{-- <img src="{!! asset('images/main/maxresdefault2.jpg') !!}" alt="" data-position="center"/> --}}
        <div class="content">
          <h2><a href="#">Motosierra</a></h2>
          <p>Todas nuestras motosierras a un click de distáncia.</p>
          <ul class="actions">
            <li><a href="#" class="button">Explorar</a></li>
          </ul>
        </div>
      </article>

      <article class="half" style="background-color: #8ea9e8;">
          <img src="" alt="" data-position="center" />
          {{-- <img src="{!! asset('images/item/category/REGENERADORES_EN_TARRAGONA_CAT.jpg') !!}" alt="" data-position="center" /> --}}          <div class="content">
          <h2><a class="link" href="#">Cortacésped</a></h2>
          <p>Descubre todos nuestros cortacéspedes ¡No esperes más!.</p>
          <ul class="actions">
            <li><a href="#" class="button">Explorar</a></li>
          </ul>
        </div>
      </article>

      <article class="half" style="background-color: #ec8d81;">
        <img src="" alt="" data-position="center" />
        {{-- <img src="{!! asset('images/item/category/REGENERADORES_EN_TARRAGONA_CAT.jpg') !!}" alt="" data-position="center" /> --}}
        <div class="content">
          <h2><a href="#">Motosierra</a></h2>
          <p>Todas nuestras motosierras a un click de distáncia.</p>
          <ul class="actions">
            <li><a href="#" class="button">Explorar</a></li>
          </ul>
        </div>
      </article>
      <article class="half" style="background-color: #8d82c4;">
        <img src="" alt="" data-position="center" />
        {{-- <img src="{!! asset('images/item/category/REGENERADORES_EN_TARRAGONA_CAT.jpg') !!}" alt="" data-position="center" /> --}}
        <div class="content">
          <h2><a href="#">Motosierra</a></h2>
          <p>Todas nuestras motosierras a un click de distáncia.</p>
          <ul class="actions">
            <li><a href="#" class="button">Explorar</a></li>
          </ul>
        </div>
      </article>
      <article class="half" style="background-color: #6fc3df;">
        <img src="" alt="" data-position="center" />
        {{-- <img src="{!! asset('images/item/category/REGENERADORES_EN_TARRAGONA_CAT.jpg') !!}" alt="" data-position="center" /> --}}
        <div class="content">
          <h2><a href="#">Motosierra</a></h2>
          <p>Todas nuestras motosierras a un click de distáncia.</p>
          <ul class="actions">
            <li><a href="#" class="button">Explorar</a></li>
          </ul>
        </div>
      </article>

    </section>
  @endsection

  @section('body')
    <!-- Post -->
    <section class="main special">
      <div class="inner">
        <header class="major">
          <span class="category">In Depth</span>
          <h2><a href="#">Etiam feugiat tempus veroeros lorem</a></h2>
          <ul class="meta">
            <li>3 days ago</li>
            <li><a href="#" class="favorites">2,174</a></li>
            <li><a href="#" class="comments">1,423</a></li>
          </ul>
        </header>
        <a href="#" class="image main"><img src="{!! asset('images/main/main1.jpg') !!}" alt="" /></a>
        <p>In ut odio eu quam consectetur tristique nec non nisl. Maecenas porttitor vestibulum augue, nec sodales eros blandit non. Phasellus libero nibh, erat blandit, aliquet volutpat purus. Nullam pretium sed turpis lorem, ac congue orci. Donec pulvinar sagittis pellentesque. In ut odio eu quam consectetur tristique nec non nisl. Maecenas porttitor vestibulum augue, nec sodales eros blandit non.</p>
        <footer>
          <ul class="actions">
            <li><a href="#" class="button">Full Story</a></li>
          </ul>
        </footer>
      </div>
    </section>

  <!-- Posts -->
    <section class="main">
      <div class="posts">
        <article>
          <a href="#" class="image"><img src="{!! asset('images/main/hf-2315-sb.jpg') !!}" alt="" /></a>
          <header>
            <h2><a href="#">Mauris vitae</a></h2>
            <ul class="meta">
              <li>3 days ago</li>
              <li><a href="#" class="favorites">2,174</a></li>
              <li><a href="#" class="comments">1,423</a></li>
            </ul>
          </header>
          <p>Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna feugiat cursus lorem nisi. Ut mauris vitae mi dapibus nulla dictum. Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna.</p>
          <footer>
            <ul class="actions">
              <li><a href="#" class="button">Full Story</a></li>
            </ul>
          </footer>
        </article>
        <article>
          <a href="#" class="image"><img src="{!! asset('images/main/hf-2315-sb.jpg') !!}" alt="" /></a>
          <header>
            <h2><a href="#">Dapibus nulla</a></h2>
            <ul class="meta">
              <li>3 days ago</li>
              <li><a href="#" class="favorites">2,174</a></li>
              <li><a href="#" class="comments">1,423</a></li>
            </ul>
          </header>
          <p>Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna feugiat cursus lorem nisi. Ut mauris vitae mi dapibus nulla dictum. Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna.</p>
          <footer>
            <ul class="actions">
              <li><a href="#" class="button">Full Story</a></li>
            </ul>
          </footer>
        </article>
        <article>
          <a href="#" class="image"><img src="{!! asset('images/main/hf-2315-sb.jpg') !!}" alt="" /></a>
          <header>
            <h2><a href="#">Dictum veroeros</a></h2>
            <ul class="meta">
              <li>3 days ago</li>
              <li><a href="#" class="favorites">2,174</a></li>
              <li><a href="#" class="comments">1,423</a></li>
            </ul>
          </header>
          <p>Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna feugiat cursus lorem nisi. Ut mauris vitae mi dapibus nulla dictum. Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna.</p>
          <footer>
            <ul class="actions">
              <li><a href="#" class="button">Full Story</a></li>
            </ul>
          </footer>
        </article>
        <article>
          <a href="#" class="image"><img src="{!! asset('images/main/hf-2315-sb.jpg') !!}" alt="" /></a>
          <header>
            <h2><a href="#">Lorem sed magna</a></h2>
            <ul class="meta">
              <li>3 days ago</li>
              <li><a href="#" class="favorites">2,174</a></li>
              <li><a href="#" class="comments">1,423</a></li>
            </ul>
          </header>
          <p>Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna feugiat cursus lorem nisi. Ut mauris vitae mi dapibus nulla dictum. Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna.</p>
          <footer>
            <ul class="actions">
              <li><a href="#" class="button">Full Story</a></li>
            </ul>
          </footer>
        </article>
        <article>
          <a href="#" class="image"><img src="{!! asset('images/main/hf-2315-sb.jpg') !!}" alt="" /></a>
          <header>
            <h2><a href="#">Vitae adipiscing</a></h2>
            <ul class="meta">
              <li>3 days ago</li>
              <li><a href="#" class="favorites">2,174</a></li>
              <li><a href="#" class="comments">1,423</a></li>
            </ul>
          </header>
          <p>Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna feugiat cursus lorem nisi. Ut mauris vitae mi dapibus nulla dictum. Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna.</p>
          <footer>
            <ul class="actions">
              <li><a href="#" class="button">Full Story</a></li>
            </ul>
          </footer>
        </article>
        <article>
          <a href="#" class="image"><img src="{!! asset('images/main/hf-2315-sb.jpg') !!}" alt="" /></a>
          <header>
            <h2><a href="#">Aliquam phasellus</a></h2>
            <ul class="meta">
              <li>3 days ago</li>
              <li><a href="#" class="favorites">2,174</a></li>
              <li><a href="#" class="comments">1,423</a></li>
            </ul>
          </header>
          <p>Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna feugiat cursus lorem nisi. Ut mauris vitae mi dapibus nulla dictum. Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna.</p>
          <footer>
            <ul class="actions">
              <li><a href="#" class="button">Full Story</a></li>
            </ul>
          </footer>
        </article>
      </div>
      <footer class="major">
        <ul class="pagination">
          <!--<li><a href="#" class="previous">Prev</a></li>-->
          <li><a href="#" class="page active">1</a></li>
          <li><a href="#" class="page">2</a></li>
          <li><a href="#" class="page">3</a></li>
          <li><span class="extra">&hellip;</span></li>
          <li><a href="#" class="page">19</a></li>
          <li><a href="#" class="page">20</a></li>
          <li><a href="#" class="next">Next</a></li>
        </ul>
      </footer>
    </section>
  @endsection

  @section('javascript')
      @parent
  @endsection
