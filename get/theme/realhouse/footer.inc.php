<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			footer.inc.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?>
<footer class="footer">
	<?php get_footer(); ?>
      <div class="footer_contacts">
        <div class="row clearfix">
          <ul class="footer_contacts-list">
            <li class="footer_contacts-item"><i class="fa fa-phone fa-5 footer_phone" aria-hidden="true"></i>
            Позвонить нам: <br> +7 (499) 000-00-00</li>
            <li class="footer_contacts-item"><i class="fa fa-map-marker fa-5 footer_location" aria-hidden="true"></i>Найти нас: <br>г. Пермь, ул. Хлебозаводская, д. 3</li>
            <li class="footer_contacts-item"><i class="fa fa-envelope-o footer_mail" aria-hidden="true"></i>
            Написать нам: <br>info@remont.ru</li>
          </ul>
        </div>
      </div>
      <div class="footer_short">
        <div class="row flexible">
          <div class="footer_about">
            <h6 class="footer_about-heading">О нас</h6>
            <p class="footer_about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint doloribus quisquam eos iure asperiores doloremque enim iusto ullam nesciunt distinctio!</p>
          </div>
          <div class="footer_services">
            <h6 class="footer_services-heading">Наши услуги</h6>
            <ul class="footer_services-list">
              <li class="footer_services-item"><a href="" class="footer_services-link"><i class="fa fa-check" aria-hidden="true"></i>Установка окон</a></li>
              <li class="footer_services-item"><a href="" class="footer_services-link"><i class="fa fa-check" aria-hidden="true"></i>Строительство домов и бань</a></li>
              <li class="footer_services-item"><a href="" class="footer_services-link"><i class="fa fa-check" aria-hidden="true"></i>Заборы</a></li>
              <li class="footer_services-item"><a href="" class="footer_services-link"><i class="fa fa-check" aria-hidden="true"></i>Кровля</a></li>
              <li class="footer_services-item"><a href="" class="footer_services-link"><i class="fa fa-check" aria-hidden="true"></i>Двери</a></li>
              </ul>
          </div>
          <div class="footer_post">
            <h6 class="footer_post-heading">Последние статьи</h6>
          </div>
        </div>
      </div>
      <div class="footer_copyrights">
          <div class="row">
            <p class="footer_copytext"><a href="#">"REALHOUSE"</a> <br>&copy; Все права защищены 2017 </p>
          </div>
        </div>
    </footer>
  <!--END FOOTER-->
	<div class="up-arrow">
    	<i class="fa fa-angle-up" aria-hidden="true"></i>
  	</div>
  </div>

<script src="<?php get_theme_url(); ?>/js/jquery.min.js"></script>
<script src="<?php get_theme_url(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php get_theme_url(); ?>/js/main.js"></script>
<script src="<?php get_theme_url(); ?>/js/jquery.maskedinput.min.js"></script>
<?php if (return_page_slug()=='contacts'):?>
<script>
  $(document).ready(function() {
    $(".is-phone").mask("+7 (999) 999-9999");
  });
</script>
<script>
      $(document).ready(function() {
  $('#form-feed').submit(function(e) {
    e.preventDefault();

    if($('[name="NAME"]').val() == '') {
      $('[name="NAME"]').addClass('failed');
      return false;
    }
    if($('[name="MESSAGE"]').val() == '') {
      $('[name="MESSAGE"]').addClass('failed');
      return false;
    }
    if($('[name="PHONE"]').val() == '') {
      $('[name="PHONE"]').addClass('failed');
      return false;
    }

    var form_data = $(this).serialize(); //собераем все данные из формы
            $.ajax({
            type: "POST", //Метод отправки
            url: $(this).attr('action'), //путь до php фаила отправителя
            data: form_data,
            success: function() {
                   //код в этом блоке выполняется при успешной отправке сообщения
                   alert("Ваше сообщение отпрвлено!");}
            });
            });

});
    </script>
<?endif;?>
</body>
</html>

</body>
</html>