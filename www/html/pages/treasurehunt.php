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
				<div class="Text">Caça ao Tesouro</div>
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
																		<td><div style="text-align: justify;">Trago à vocês uma nova maneira de se divertir e farmar no servidor. Vários baús espalhados pelo mapa, ao destruí-lo, você receberá itens.<br><li>Quando o evento inicia uma mensagem é envianda no broadcast e 20 baús aparecem no mapa aleatóriamente.<br><li>Quando o jogador destroi um baú, uma mensagem é enviada à todos os jogadores pelo DEFAULT CHANNEL informando o nome do jogador que destruiu o baú e quantos baús ainda restam no mapa.<br><li>Para destruir o baú, basta atacá-lo. Ele sofre pouco dano e possui um HP baixo.<br><li>Caso haja mais de um jogador atacando o mesmo baú, ganha a recompensa quem deu maior dano.<br><br><b>Imagem completa do mapa:</b><br><li>No mapa, em <b><font color="darkpink">rosa</font></b>: Locais onde os baús <b>não</b> dão respawn.<br><center><a class="fancybox-media" rel="group1" href="/images/rewardchest/rewardchest1.png"><img src="/images/rewardchest/rewardchest1.png" width="500px"></a></center></div></td>
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
																		<td width="100%"><center><b>A cada <span style="color:red;">4 horas</span>.</b></center><br>Caso os jogadores não tenham destruído todos os 20 baús, o evento não vai iniciar. Ao invés disso, a seguinte menssagem aparece: <b>"[CAÇA AO TESOURO] Evento não iniciado! Ainda possui X baús espalhados pelo mapa."</b>.</td>
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
																		<td><b>Algumas imagens:</b></td>
																	</tr>
																</table>
																<table width="100%">
																<tr>
																	<td><br>
																	<center><a class="fancybox-media" rel="group1" href="/images/rewardchest/rewardchest2.png">
																		<img src="/images/rewardchest/rewardchest2.png" width="130px" border="1">
																	</a>
																	<a class="fancybox-media" rel="group1" href="/images/rewardchest/rewardchest3.png">
																		<img src="/images/rewardchest/rewardchest3.png" width="130px" border="1">
																	</a>
																	<a class="fancybox-media" rel="group1" href="/images/rewardchest/rewardchest4.png">
																		<img src="/images/rewardchest/rewardchest4.png" width="130px" border="1">
																	</a>
																	<a class="fancybox-media" rel="group1" href="/images/rewardchest/rewardchest5.png">
																		<img src="/images/rewardchest/rewardchest5.png" width="130px" border="1">
																	</a>
																	<a class="fancybox-media" rel="group1" href="/images/rewardchest/rewardchest6.png">
																		<img src="/images/rewardchest/rewardchest6.png" width="130px" border="1">
																	</a></center>
																	<center><i><small>Clique nas imagens para ampliar</small></i></center></td>
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
																		<td colspan="7" bgcolor="#505050">
																			<span class="style4">
																				<font color="white">Prêmios aleatórios! Você recebe sempre que destroi um baú:</font>
																			</span>
																		</td>
																	</tr>
																	<tr bgcolor="#f1e0c6">
																		<td width="10%">
																			<center><img src="/images/items/pages/2160.gif"><br><b>20 à 50k</b></center></td><td width="10%"><center><img src="/images/items/pages/12686.gif"><br><b>1 event coin</b></center></td><td width="10%"><center><img src="/images/items/pages/12854.gif"><br><b>2 Rusty Gears</b></center></td><td width="10%"><center><img src="/images/items/pages/12804.gif"><br><b>1 dodge</b></center></td><td width="10%"><center><img src="/images/items/pages/12805.gif"><br><b>1 Critical</b></center></td><td width="10%"><center><img src="/images/items/pages/12849.gif"><br><b>Stamina Refiller</b></center></td><td width="10%"><center><img src="/images/items/pages/12714.gif"><br><b>Holy Icon (1 charge)</b></center></td>
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