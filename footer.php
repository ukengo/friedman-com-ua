<!-- <div class="wrapper-footer-bottom"></div> -->
</div>
<footer class="footer">
  <section class="wrapper">
    <div class="inner">
      <?php
      $phones_1 = get_field('phones', 'options');
      $phones_2 = get_field('phones_2', 'options');

      $arr_1 = explode(',', $phones_1);
      $arr_2 = explode(',', $phones_2);

      $address = get_field('address', 'options');
      $arr_3 = explode('<br />', $address);
      ?>
      <p itemtype="schema.org/PostalAddress" itemscope="" class="copyright"><?php the_field('copyright', 'options') ?>
        <br>Україна, <?php echo $arr_3[1]; ?>
        <br><span itemprop="telephone"><a style="text-decoration: none;"
            href="tel:<?php echo $arr_1[0]; ?>"><?php echo $arr_1[0]; ?></a></span>, <span itemprop="telephone"><a
            style="text-decoration: none;" href="tel:<?php echo $arr_1[0]; ?>"><?php echo $arr_2[0]; ?></a></span>
      </p>

      <div class="develop">
        <p>
          <a rel="nofollow" href="//page.ua/" target="_blank" class="nosub">Створення сайту</a> — <a rel="nofollow"
            href="//page.ua/" target="_blank">Page Group</a>
        </p>
      </div>
      <div class="socials">        
        <a href="https://wa.me/380674021578" target="_blank" class="whatsapp socials__link socials__link_wa" target="_blank"></a>		  
		  <a href="//t.me/vit_melnik" class="socials__link socials__link_tg" target="_blank"></a>
          <a href="viber://chat?number=%2B380675042079" class="vibertel socials__link socials__link_vib"></a>
		  <a href="//www.facebook.com/friedmanukraine/" class="socials__link socials__link_fb" target="_blank">		 </a>
		  <a href="//www.instagram.com/friedmanukraine/?igshid=agxwczlsw46" class="socials__link socials__link_ins" target="_blank"></a>
      </div>
    </div>
  </section>
  <!-- Прижать футер -->
  </div>

</footer>
<style>
	
	
  .floating-contacts {
    position: fixed;
    bottom: 72px;
    left: 9px;   
	display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
	gap: 10px;
	z-index: 99;
	  
	}

  .vibertel img,
  .telegram-circle img,
  .whatsapp img{
    width: 50px;
  }

  #m-header-contacts-button {
    
   
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
    border-radius: 50% !important;
    box-shadow: 0 0.25rem 1rem rgba(0, 0, 0, 0.15) !important;
    background-image: none !important;
    width: 50px;
    height: 50px;
    text-align: center;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    z-index: 3;
  }

  #m-header-contacts-button:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  }

  #m-header-contacts-button>svg {
    fill: #0062cc !important;
  }
	


  .search-buttonn {
    display: none;
  }

  @media (max-width: 992px) {
	.floating-contacts {
		 bottom: 10px; 
	}
	  #m-header-contacts-button {
		  width: 35px;
		  height: 35px;
	  }
	  .vibertel img,
  .telegram-circle img,
  .whatsapp img{
    width: 35px;
  }
 }
</style>

<!---
<div class="floating-contacts">
	
	
<a href="tel:+380675042079" type="button" id="m-header-contacts-button"
  class="btn btn-light shadow rounded-circle p-2 p-md-2 mt-3" data-target="#ft_header_contacts" data-toggle="modal" data-whatever="callback">
  <svg class="d-block ft-icon m-0 text-gray-600 darker-on-hover m-0" width="28" height="28" viewBox="0 0 24 24"
    xmlns="http://www.w3.org/2000/svg">
    <path
      d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z">
    </path>
  </svg>
</a>

	
<a href="https://t.me/vit_melnik" target="_blank" class="telegram-circle">
	<img src="/wp-content/uploads/2024/03/telegram.svg">
	</a>
	
<a href="viber://chat?number=%2B380675042079" target="_blank" class="vibertel">
	<img src="/wp-content/uploads/2024/03/viber.svg"></a>
	
<a href="https://wa.me/380674021578" target="_blank" class="whatsapp">
  <img src="/wp-content/uploads/2024/03/whatsapp.svg"></a>

</div>
-->

<?php wp_footer(); ?>
<?php $page_id = $post->ID;
if ($page_id == 11260) {
  ?>
  <style type="text/css">
    /** For icons **/
    .content-column .documents-two-column .column ul li {
      background: url('//friedman.com.ua/wp-content/uploads/2017/09/mini2.png') no-repeat !important;
    }
  </style>

  <script type="text/javascript">
    $(".header>a.logo").attr("href", "/ua/golovna/")
  </script>

<?php } ?>
<?php if (function_exists('pll_current_language') && pll_current_language() === 'ru' && empty($_COOKIE['hide_modal'])): ?>
<style>
#langModal.modal {
    display: none;
    position: fixed;
    z-index: 9999;
    padding-top: 250px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}
#langModal .modal-content {
    display: flex;
    flex-wrap: wrap;
    background-color: #f0f3fa;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
	max-width:560px;
}

#langModal .title-text {
    width: 100%;
    margin-bottom: 15px;
    margin-top: 30px;
    text-align: center;
    color: #000;
    font-size: 24px;
}

#langModal .buttons{
	display:flex;
	align-items:center;
	justify-content:center;
	flex-wrap:wrap;
	width:100%;
}

#langModal .btn-text {
    text-decoration: none;
    color: #9e0e30;
    background-color: #fdfeff;
    padding: 10px 15px;
    border: 1px solid #9e0e30;
    border-radius: 5px;
	margin:15px;
}
#langModal .btn-text img{
	width:20px;
	height:16px;
	float:left;
	margin-right:7px;
}
@media (max-width:767px){
	#langModal .buttons{
		display:block;
	}
	#langModal .btn-text{
		display:block;
	}
}
</style>

<div id="langModal" class="modal">
  <div class="modal-content">
    <div class="title-text">Ви читаєте ресурс мовою окупанта</div>
    <div class="buttons">
      <a class="btn-text" href="#" id="modal-continue">Продовжити</a>
      <a class="btn-text btn-lang-uk" href="#"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIALcAxgMBIgACEQEDEQH/xAAXAAEBAQEAAAAAAAAAAAAAAAAABwYB/8QAGhABAAEFAAAAAAAAAAAAAAAAAAQCF1SR0f/EABkBAQEAAwEAAAAAAAAAAAAAAAAGAwUHAv/EACARAQABAAsAAAAAAAAAAAAAAAABBAURExUWUVORktH/2gAMAwEAAhEDEQA/AMaAsksAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACh2+g5snVPC30HNk6p4mM41RuT1nxtcGpekcp4KHb6DmydU8LfQc2TqnhnGqNyes+GDUvSOU8FDt9BzZOqeFvoObJ1TwzjVG5PWfDBqXpHKeCh2+g5snVPC30HNk6p4ZxqjcnrPhg1L0jlPBQ7fQc2Tqnhb6DmydU8M41RuT1nwwal6RyngodvoObJ1Twt9BzZOqeGcao3J6z4YNS9I5TwUO30HNk6p4W+g5snVPDONUbk9Z8MGpekcp4KHb6DmydU8LfQc2TqnhnGqNyes+GDUvSOU8FDt9BzZOqeFvoObJ1TwzjVG5PWfDBqXpHKeCh2+g5snVPC30HNk6p4ZxqjcnrPhg1L0jlPBQ7fQc2Tqnhb6DmydU8M41RuT1nwwal6RyngodvoObJ1Twt9BzZOqeGcao3J6z4YNS9I5TwUO30HNk6p46ZxqjcnrPhg1L0jlsAHGVkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMt3DzaAF3BaAF3BaAF3BaAF3BaAF3BaAF3BaAF3BaAF3BaAF3BaAF3BaAF3BaAF3Ba//9k=" width="25" height="19"> Читати українською</a>
    </div>
  </div>
</div>

<script>
jQuery(document).ready(function($) {
  $("#langModal").show();

  function setCookieAndClose() {
    document.cookie = "hide_modal=1; path=/; max-age=" + (60 * 60 * 24 * 365);
    $("#langModal").hide();
  }

  $("#modal-continue").on("click", function(e) {
    e.preventDefault();
    setCookieAndClose();
  });

  $(document).on('click','.btn-lang-uk', function(e) {
    e.preventDefault();
    var $select = $("#lang_choice_1");
    var $ukOption = $select.find('option[lang="uk"]');

    if ($ukOption.length) {
      setCookieAndClose();
       window.location.href = $ukOption.val();
    }
  });
});
</script>
<?php endif; ?>
</body>
</html>