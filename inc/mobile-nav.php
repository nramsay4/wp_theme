<style>
#menu__toggle:checked ~ .menu__btn > span {
  transform: rotate(45deg);
  background-color: white;
}
#menu__toggle:checked ~ .menu__btn > span::before {
  top: 0;
  transform: rotate(0);
  background-color: white;
}
#menu__toggle:checked ~ .menu__btn > span::after {
  top: 0;
  transform: rotate(90deg);
  background-color: white;
}
#menu__toggle:checked ~ .menu__box {
  visibility: visible;
  right: 0;
}
.menu__btn > span,
.menu__btn > span::before,
.menu__btn > span::after {
  position: absolute;
  width: 100%;
  height: 4px;
  background-color: #005E82;
  transition-duration: .25s;
}
.menu__btn > span::before {
  content: '';
  top: 18px;
}
.menu__btn > span::after {
  content: '';
  top: 9px;
}
.menu__box {
  background: linear-gradient(269deg, #0D5E82 0%, #0A455C 100%) 0% 0%;
  opacity: 1;
  box-shadow: 1px 0px 6px rgba(0, 0, 0, .2);
  transition-duration: .25s;
  z-index: 8;
}
.menu__box a {
  color: white;
  margin-bottom: 20px;
  padding: 0px 20px;
  text-transform: uppercase;
  font-size: 1.3rem;
}

</style>

<?php 
if (is_admin_bar_showing()) :
    $custom_css = "
      .menu__btn {
        top: 72px !important;
      }
      .menu__box {
        padding-top: 152px;
      }
    ";
    ?>
    <style type="text/css">
        <?php echo esc_html($custom_css); ?>
    </style>
<?php endif; ?>

<div class="mr-10 block md:hidden">
  <input id="menu__toggle" type="checkbox" class="opacity-0 hidden"/>
  <label class="menu__btn absolute w-[30px] cursor-pointer top-[35px] z-10 ml-[10px]" for="menu__toggle">
    <span></span>
  </label>	
  <ul class="menu__box min-w-[40%] fixed invisible top-0 -right-full h-full m-0 pt-[120px] list-none flex flex-col text-white text-center">
      <?php include 'main-nav.php'; ?>
  </ul>
</div>