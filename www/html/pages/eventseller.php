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
				<div class="Text">NPC Event Coin</div>
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
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
																	<tr style="background-color:#D4C0A1;" >
																		<td><div style="text-align: justify;">
																			<p>O NPC <b>Event Seller</b> fica localizado no templo, 1º andar. Esse NPC vende itens exclusivos do servidor através da moeda <b>Event Coin</b>. Veja mais abaixo as opções de itens a venda e os seus devidos valores.<br><br> <small>(<i>Clique na imagem pra ampliar</i>.)</small></p></div>
																		</td>
																		<td width="20%">
																			<a class="fancybox-media" href="/images/coinspage/1.png">
																				<img src="/images/coinspage/1.png" width="130px" border="1">
																			</a>
																		</td>
																	</tr>
																</table>
															</div>
														</div>
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-br.gif);" ></div>
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
																		<td><div style="text-align: justify;">Como conseguir <b>Event Coins?</b><br><br><b><li></b>Ao ganhar qualquer Evento do servidor.</div></td>
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
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table class="table3 table-offers" width="100%"  style="border:1px solid #faf0d7;" >
																	<tr style="background-color:#505050;">
																		<td><font color="white"><b>Item:</b></font></td>
																		<td><font color="white"><b>Description:</b></font></td>
																		<td><font color="white"><b>Price:</b></font></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td width="15%"><center><img src="images/items/pages/12879.gif"><br><b>Bronze Vip Days</b></center></td><td><center>Quando você usa o item recebe 2 dias de VIP.</center></td><td width="15%"><center><img src="images/items/pages/12686.gif"><br>10 Event Coins</center></td>
																	</tr>																	
																</table>
															</div>
														</div>											
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-br.gif);" ></div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="TableShadowContainerRightTop" >
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table class="table3 table-offers" width="100%"  style="border:1px solid #faf0d7;" >
																	<tr style="background-color:#505050;">
																		<td><font color="white"><b>Item:</b></font></td>
																		<td><font color="white"><b>Description:</b></font></td>
																		<td><font color="white"><b>Price:</b></font></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td width="15%"><center><img src="images/items/pages/12882.gif"><br><b>Event Backpack</b></center></td><td><center>Uma Backpack Especial com capacidade para 32 itens.</center></td><td width="15%"><center><img src="images/items/pages/12686.gif"><br>35 Event Coins</center></td>
																	</tr>																	
																</table>
															</div>
														</div>											
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-br.gif);" ></div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="TableShadowContainerRightTop" >
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table class="table3 table-offers" width="100%"  style="border:1px solid #faf0d7;" >
																	<tr style="background-color:#505050;">
																		<td><font color="white"><b>Item:</b></font></td>
																		<td><font color="white"><b>Description:</b></font></td>
																		<td><font color="white"><b>Price:</b></font></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td width="15%"><center><img src="images/items/pages/12849.gif"><br><b>Stamina Refiller</b></center></td><td><center><font color="#FF0000" style="text-shadow: 1px 1px #580208;"><b>Free Account</b></font>: Recupera entre 1 a 3 horas de stamina.<br>&emsp;<font color="#00CD00" style="text-shadow: 1px 1px #014b01;"><b>VIP Account</b></font>: Recupera entre 2 a 5 horas de stamina.<br><br><small><b>&emsp;Só é possível utlizar este item a cada 1 hora.</b></small></center></td><td width="15%"><center><img src="images/items/pages/12686.gif"><br>5 Event Coins</center></td>
																	</tr>																	
																</table>
															</div>
														</div>											
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-br.gif);" ></div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="TableShadowContainerRightTop" >
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table class="table3 table-offers" width="100%"  style="border:1px solid #faf0d7;" >
																	<tr style="background-color:#505050;">
																		<td><font color="white"><b>Item:</b></font></td>
																		<td><font color="white"><b>Description:</b></font></td>
																		<td><font color="white"><b>Price:</b></font></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td width="15%"><center><img src="images/items/pages/2197.gif"><br><b>Stone Skin Amulet</b></center></td><td><center>Item com 20 cargas.<br><br><small><b>O Stone Skin Amulet normal possui 5 cargas. (O ID do item não muda)</b></small></center></td><td width="15%"><center><img src="images/items/pages/12686.gif"><br>1 Event Coin</center></td>
																	</tr>																	
																</table>
															</div>
														</div>											
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-br.gif);" ></div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="TableShadowContainerRightTop" >
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table class="table3 table-offers" width="100%"  style="border:1px solid #faf0d7;" >
																	<tr style="background-color:#505050;">
																		<td><font color="white"><b>Item:</b></font></td>
																		<td><font color="white"><b>Description:</b></font></td>
																		<td><font color="white"><b>Price:</b></font></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td width="15%"><center><img src="images/items/pages/2164.gif"><br><b>Might Ring</b></center></td><td><center>Item com 35 cargas.<br><br><small><b>O Might Ring normal possui 20 cargas. (O ID do item não muda)</b></small></center></td><td width="15%"><center><img src="images/items/pages/12686.gif"><br>1 Event Coin</center></td>
																	</tr>																	
																</table>
															</div>
														</div>											
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-br.gif);" ></div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="TableShadowContainerRightTop" >
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table class="table3 table-offers" width="100%"  style="border:1px solid #faf0d7;" >
																	<tr style="background-color:#505050;">
																		<td><font color="white"><b>Item:</b></font></td>
																		<td><font color="white"><b>Description:</b></font></td>
																		<td><font color="white"><b>Price:</b></font></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td width="15%"><center><img src="images/items/pages/12847.gif"><br><b>Event Ring</b></center></td><td><center>This item regenerates 6mp/1sec and 3hp/1sec. 5min duration.</center></td><td width="15%"><center><img src="images/items/pages/12686.gif"><br>1 Event Coin</center></td>
																	</tr>																	
																</table>
															</div>
														</div>											
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-br.gif);" ></div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="TableShadowContainerRightTop" >
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table class="table3 table-offers" width="100%"  style="border:1px solid #faf0d7;" >
																	<tr style="background-color:#505050;">
																		<td><font color="white"><b>Item:</b></font></td>
																		<td><font color="white"><b>Description:</b></font></td>
																		<td><font color="white"><b>Price:</b></font></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td width="15%"><center><img src="images/items/pages/12804.gif"><br><b>Dodge</b></center></td><td><center>O dodge faz você se esquivar de algum hit ou spell, recebendo menos dano.</center></td><td width="15%"><center><img src="images/items/pages/12686.gif"><br>5 Event Coins</center></td>
																	</tr>																	
																</table>
															</div>
														</div>											
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-br.gif);" ></div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="TableShadowContainerRightTop" >
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table class="table3 table-offers" width="100%"  style="border:1px solid #faf0d7;" >
																	<tr style="background-color:#505050;">
																		<td><font color="white"><b>Item:</b></font></td>
																		<td><font color="white"><b>Description:</b></font></td>
																		<td><font color="white"><b>Price:</b></font></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td width="15%"><center><img src="images/items/pages/12805.gif"><br><b>Critical</b></center></td><td><center>O critical ao ser ativado, aumenta o dano do seu personagem.</center></td><td width="15%"><center><img src="images/items/pages/12686.gif"><br>5 Event Coins</center></td>
																	</tr>																	
																</table>
															</div>
														</div>											
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-br.gif);" ></div>
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