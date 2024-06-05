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
				<div class="Text">Monster Hunter</div>
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
																		<td><div style="text-align: justify;">Uma maneira de caçar e farmar no servidor.<br><li>Quando o evento inicia, um dos monstros da lista abaixo é selecionado e uma mensagem é envianda no broadcast.<br><li>O jogador que obter o maior número de kills deste monstro no tempo determinado será o ganhador.<br><li>O monstro sorteado é totalmente aleatório.<br><li>Caso haja mais de um jogador atacando o mesmo monstro, recebe a contagem quem deu maior dano.</div></td>
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
																		<td><b>Funciona todos os dias da semana.</b></td>
																	</tr>
																</table>
																<table width="100%">
																	<tr>
																		<td width="100%"><center><b>A cada <span style="color:red;">3 horas</span>.</b></center></td>
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
																		<td><b>Monstros cadastrados que podem ser selecionados pelo sistema:</b></td>
																	</tr>
																</table>
																<table width="100%">
																<tr>
																	<td><br>
																	<marquee>
																	<img src="/images/monster/Demon.gif">&emsp;&emsp;<img src="/images/monster/Hydra.gif">&emsp;&emsp;<img src="/images/monster/Hellspawn.gif">&emsp;&emsp;<img src="/images/monster/Dragon.gif">&emsp;&emsp;<img src="/images/monster/Dragon_Lord.gif">&emsp;&emsp;<img src="/images/monster/Frost_Dragon.gif">&emsp;&emsp;<img src="/images/monster/Ancient_Scarab.gif">&emsp;&emsp;<img src="/images/monster/Giant_Spider.gif">&emsp;&emsp;<img src="/images/monster/Killer_Caiman.gif">&emsp;&emsp;<img src="/images/monster/Bog_Raider.gif">&emsp;&emsp;<img src="/images/monster/Medusa.gif">&emsp;&emsp;<img src="/images/monster/Warlock.gif">&emsp;&emsp;<img src="/images/monster/Black_Knight.gif">&emsp;&emsp;<img src="/images/monster/Ghastly_Dragon.gif">&emsp;&emsp;<img src="/images/monster/Wyrm.gif">&emsp;&emsp;<img src="/images/monster/Behemoth.gif">&emsp;&emsp;<img src="/images/monster/Sea_Serpent.gif">&emsp;&emsp;<img src="/images/monster/Fury.gif">&emsp;&emsp;
																	</marquee>
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
																	</tr>
																		<td colspan="5" bgcolor="#505050">
																			<span class="style4">
																				<font color="white">Seu prêmio é:</font>
																			</span>
																		</td>
																	</tr>
																	<tr bgcolor="#f1e0c6">
																		<td width="15%">
																			<b>Pr&ecirc;mios:</b></td><td width="80%"><u> 1 Event Coin + 50k</u>
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