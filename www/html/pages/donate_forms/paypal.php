<?php

$main_content .= '
<h2>PayPal Payment</h2>
<h3><font color="darkred">English</font></h3>
<li> In the message box that appears on the paypal website, enter the name of your account.
<li> To avoid fraud, our management must validate your purchase.
<li> After you make the payment, Confirm by sending us a <a href="?subtopic=ticket">Ticket</a> with a <b>TAG: Donate</b>.
<li> <font color="red">In case of a chargeback, your account will be deleted and your items tracked.</font><br>

<h3><font color="darkred">Portuguese</font></h3>
<li> Na caixa de mensagem que aparece no site do paypal, insira o nome da sua conta.
<li> Para evitar fraudes, nossa administração deve validar sua compra.
<li> Depois de efetuar o pagamento, confirme enviando-nos um <a href="?subtopic=ticket">Ticket</a> com a <b>TAG: Donate</b>.
<li> <font color="red">Em caso de estorno, sua conta será excluída e seus itens rastreados.</font>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="HHT9B9JSYZXQA">
<table>
<tr><td><input type="hidden" name="on0" value="Nome do menu suspenso">Nome do menu suspenso</td></tr><tr><td><select name="os0">
	<option value="Doar">Doar R$5,00</option>
	<option value="Doar">Doar R$10,00</option>
	<option value="Doar">Doar R$20,00</option>
	<option value="Doar">Doar R$30,00</option>
	<option value="Doar">Doar R$50,00</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="BRL">
<input type="image" src="https://www.paypalobjects.com/pt_BR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
</form>
';
?>