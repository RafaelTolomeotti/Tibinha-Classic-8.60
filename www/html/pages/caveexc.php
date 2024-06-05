<?php
	$main_content .= '
		<script src="'.$layout_name.'/fancy/jquery.fancybox.js"></script>
        <script src="'.$layout_name.'/fancy/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
        <link href="'.$layout_name.'/fancy/jquery.fancybox.css" rel="stylesheet" />
		<script>
			$(document).ready(function(){
				 $(\'.fancybox-media\').fancybox({
					openEffect  : \'elastic\',
					closeEffect : \'elastic\',
					helpers : {
						media : {}
					}
				});
			});
		</script>';
$main_content .= '

	<div class="TableContainer">
		<div class="CaptionContainer">
			<div class="CaptionInnerContainer">
				<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
				<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
				<div class="Text">Cave Exclusiva</div>
				<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
				<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
				<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
					</div>
						</div>
							<table class="Table3" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td>
										<div class="InnerTableContainer">
											<table style="width:100%;">
												<tbody>
												<tr>
													<td>
														<div class="TableShadowContainerRightTop" >
															<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
																	<tr>
																		<td><div style="text-align: justify;">Diferente de todos os outros servidores, nosso sistema de Cave Exclusiva lhe proporciona uma área totalmente exclusiva para seu UP. Você pode controlar o tempo e quantidade de monstros da maneira que lhe melhor agrada. São ao total 12 salas com seus respectivos monstros.<br><br><b>INFORMAÇÕES:</b><br><li>Os monstros oferecem <b><font color="green">+20% EXP e LOOT</font><small> (a exp obtida soma com VIP e Exp Potion)</small></b>.<br><li>Para entrar, basta dar <b>USE</b> na porta. Vai consumir 1 chave da Cave Exclusiva.</b><br><li>Para sumonar os monstros, basta usar a alavanca no centro da sala. (Cooldown de 15seg.)<br><li>Você pode sair e voltar para a Cave Exclusiva quando quiser. Basta dar <b>USE</b> na porta. (Caso seu tempo acabe, você não poderá entrar a não ser que tenha outra chave.)<br><li>Se morrer, perderá itens/exp/skills normalmente.<br><li>Existem NPCS na forma do monstro da respectiva sala. Você poderá comprar potions sem precisar sair da sala.<br><br><b>Imagem completa da área:</b><br><center><a class="fancybox-media" rel="group1" href="/images/cave_exc.png"><img src="/images/cave_exc.png" width="500px"></a></center></div></td>
																	</tr>									
																</table>
															</div>
														</div>											
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="TableShadowContainerRightTop" >
															<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table width="100%">
																	<tr>
																		<td><b>Comandos:</b></td>
																	</tr>
																</table>
																<table width="100%">
																<tr>
																	<td>
																		<table width="100%">
																		<tr>
																			<td width="20%"><center><b>!cave quantidade<br>!cave qtd</b></center></td><td width="80%">&emsp;Muda a quantidade de monstros sumonados.<br>&emsp;Mínimo = 1 | Máximo = 4.<br><br><b>&emsp;Exemplo:</b> !cave qtd 4<br>&emsp;Note que, nem sempre pode vir a quantidade de monstros escolhida.</td>
																		</tr>
																		</table>
																		<table width="100%">
																		<tr>
																			<td width="20%"><center><b>!cave tempo</b></center></td><td width="80%">&emsp;Mostra o tempo restante da sua Cave Exclusiva.</td>
																		</tr>
																		</table>
																	</td>
																</tr>
																</table>
															</div>
														</div>														
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="TableShadowContainerRightTop" >
															<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table width="100%">
																	<tr>
																		<td><b>Tempo de permanência ao entrar na Cave Exclusiva:</b></td>
																	</tr>
																</table>
																<table width="100%">
																<tr>
																	<td>
																		<table width="100%">
																		<tr>
																			<td width="20%"><center><font color="#FF0000" style="text-shadow: 1px 1px #580208;"><b>Free Account</b></font></center></td><td width="80%">&emsp;60 minutos.</td>
																		</tr>
																		</table>
																		<table width="100%">
																		<tr>
																			<td width="20%"><center><font color="#00CD00" style="text-shadow: 1px 1px #014b01;"><b>VIP Account</b></font></center></td><td width="80%">&emsp;90 minutos.</b></small></td>
																		</tr>
																		</table>
																	</td>
																</tr>
																</table>
															</div>
														</div>														
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="TableShadowContainerRightTop" >
															<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
																	<tr>
																		<td><div style="text-align: justify;"><b><font color="red">IMPORTANTE:</font></b> De maneira alguma use o item perto do SaveServer. Caso use, perderá sua Cave Exclusiva assim que o SaveServer ocorrer.<br><br>Em caso de falha(queda) do servidor, envie um ticket com um print da mensagem que aparecer no DEFAULT CHANNEL ao entrar na Cave Exclusiva. Assim poderemos fazer a devolução do item.</div></td>
																	</tr>									
																</table>
															</div>
														</div>											
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
															</div>
														</div>
													</td>
												</tr>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>';
?>