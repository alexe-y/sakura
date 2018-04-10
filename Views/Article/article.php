<section class="article articles-container articles-margin">
      <div class="articles-content">
          <div class="articles-header">
              <h2 class="articles-title">
                <?=$article['title_h2']?>
              </h2>
          </div>
          <div class="articles-text">
              <?=$article["text"];?>
          </div>
          <div class="articles-footer">
              <span><?=$article['date']?></span>
              <span style="text-align: right;">
                    <div class="social-buttons">
                    <p>Понравилась статья? Поделись с друзьями:</p>
                     <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                    <script src="//yastatic.net/share2/share.js"></script>
                    <div class="ya-share2" data-services="facebook,odnoklassniki,viber,whatsapp,telegram"></div>
                    </div>
              </span>
          </div>
      </div>
      <figure class="articles-image">
        <h1 class="articles-header"><?=$article['title_h1']?></h1>
          <img src="/Views/img/<?=$article['img']?>" alt="">
      </figure> 
</section>

      <!--HyperComments-->
<div id="hypercomments_widget"></div>
<script type="text/javascript">
_hcwp = window._hcwp || [];
_hcwp.push({widget:"Stream", widget_id: 102634});
(function() {
if("HC_LOAD_INIT" in window)return;
HC_LOAD_INIT = true;
var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/102634/"+lang+"/widget.js";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hcc, s.nextSibling);
})();
</script>
</div>
