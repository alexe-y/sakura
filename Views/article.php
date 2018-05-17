<section class="articles-container">
  <?foreach ($articleList as $article):?>
  <a href="/article/<?=$article['id']?>">
    <div class="articles">
      <div class="articles-content">
          <div class="articles-header">
              <h2 class="articles-title">
                <?=$article['title_h2']?>
              </h2>
          </div>
          <div class="articles-text">
              <!-- <?=substr($article["text"], 0, strpos($article["text"], ' ', 700)).'...';?> -->
          </div>
          <div class="articles-footer">
              <span><?=$article['date']?></span>
              <span>Читать далее -></span>
          </div>
      </div>
      <figure class="articles-image">
        <h1 class="articles-header"><?=$article['title_h1']?></h1>
          <img src="/Views/img/<?=$article['img']?>" alt="">
      </figure> 
  </div>
</a>
  <?endforeach?>
</section>