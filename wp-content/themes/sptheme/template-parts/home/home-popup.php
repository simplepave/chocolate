<?php

/**
 *
 */

?>
    <div id="write_popup" class="write_popup">
        <div class="head_popup">написать нам</div>
        <form id="write-form" action="" method="post">
            <input name="author" class="input_popup" type="text" placeholder="Имя" required="required">
            <input name="email" class="input_popup" type="email" placeholder="E-mail" required="required">
            <textarea name="comment" class="textarea_popup" placeholder="Сообщение"></textarea>
            <input type='hidden' name='subject' value='Вопрос' />
            <div class="align_submit"><input class="submit_popup" type="submit" value="отправить"></div>
        </form>
    </div>