<nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
  

  <button class="c-menu__close">Close Menu &rarr;</button>
    <ul class="c-menu__items">
      <li class="c-menu__item"><a href="/" class="c-menu__link">Home</a></li>
      <li class="c-menu__item"><a href="/about" class="c-menu__link">About</a></li>
      <li class="c-menu__item"><a href="/coaching" class="c-menu__link">Coaching</a></li>
      <li class="c-menu__item"><a href="/coaches" class="c-menu__link">Coaches</a></li>
      <li class="c-menu__item"><a href="/training" class="c-menu__link">Training</a></li>
      <li class="c-menu__item"><a href="/contact" class="c-menu__link">Contact</a></li>
    </ul>


</nav><!-- /c-menu slide-right -->


<nav id="c-menu--push-left" class="c-menu c-menu--push-left">
  <button class="c-menu__close">&larr; Close Menu</button>
  
    <?php 
				wp_nav_menu( array('menu' => 'degrees','container' => 'div','container_class' => 'degree-nav','depth' => 1 ));
		?>
  
</nav><!-- /c-menu slide-left -->



<div id="c-mask" class="c-mask"></div><!-- /c-mask -->

<!-- menus script -->
<script src="/wp-content/themes/mfc/js/mobile-nav.js"></script>

<script>
   
  /**
   * Slide right instantiation and action.
   */
  var slideRight = new Menu({
    wrapper: '#o-wrapper',
    type: 'slide-right',
    menuOpenerClass: '.c-button',
    maskId: '#c-mask'
  });

  var slideRightBtn = document.querySelector('#c-button--slide-right');
  
  slideRightBtn.addEventListener('click', function(e) {
    e.preventDefault;
    slideRight.open();
  });
</script>  
  

  
</div><!-- close mobile nav wrapper -->