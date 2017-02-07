<?php 

?>
<!--Форма-->
<form class="god_form" onkeypress="if(event.keyCode == 13) {event.preventDefault(); return false;}">
	<input class="inputHidd" name="referralTail" type="hidden" value="<?php echo referrer_page_url();?>">
	<input class="inputHidd" name="fromlink" type="hidden" value="<?php echo current_page_url();?>">
	<div class="col-lg-4 col-md-4">
		<input name="name" required="" placeholder="Ваше имя" type="text">
	</div>
	<div class="col-lg-4 col-md-4">
		<input name="phone" required="" placeholder="Ваш телефон" type="tel">
	</div>
	<div class="col-lg-4 col-md-4">
		<button type="submit" value="Записаться на урок">Оставить заявку</button>
	</div>
	<div class="clear"></div>
</form>