<?php wp_footer(); ?>
  <div class="sitemap">
    <ul class="map">
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?><?php endif; ?>
    </ul>
  </div>
  <div class="footer">
    <div class="footer-container">
      <ul class="about-data">
              <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(4) ) : else : ?><?php endif; ?>
      </ul>
      <ul class="locations">
          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(5) ) : else : ?><?php endif; ?>
      </ul>
      
    </div>
    <p class="credits">
        Nutrición Inteligente (r) 1998 - 2013 – Reservados todos los derechos
      </p>
  </div>
  <div class="modal-window request">
      <a class="close" title="Cerrar ventana">x</a>
      <div class="modal-header">Antes de solicitar tu hora</div>
      <div class="modal-contet">
        
      </div>
      <div class="modal-footer">
        <a href="#" class="button small">Button</a>
      </div>
    </div>
  <script type="text/javascript" src="//use.typekit.net/feh4tqc.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</body>
</html>