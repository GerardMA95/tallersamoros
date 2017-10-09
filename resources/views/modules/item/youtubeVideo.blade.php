<section class="main special">
  <div class="inner">
    <header class="major">
      <h2>
        <a>
          Vídeo de demostración de {{ $item->name }}
        </a>
      </h2>
    </header>
    <footer>
      <ul class="actions">
        <li><a href="https://www.youtube.com/channel/UCJMkOz-eX4hYYICJ6JwhjsQ/videos" class="button">Ver canal</a></li>
      </ul>
    </footer>
  </div>
</section>
<section class="main">
    <div class="posts">
        <iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/{{ $item->video_url}}" frameborder="0" allowfullscreen></iframe>
    </div>
</section>
