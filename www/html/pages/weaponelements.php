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
				<div class="Text">Weapon Elements</div>
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
																		<td><div style="text-align: justify;">Diferente das pedras encantadas, as pedras elementais são para mudar o elemento de sua wand/arma de nível mais elevado.<br><b></b>Paladins não podem usar as pedras elementais em sua arma pois já são bem fortes e seu dano principal é físico.<br>Para saber se sua wand/arma pode mudar de elemento, basta dar LOOK e ver a descrição do item. No total são 6 elementos <small>(physical não conta como dano elemental)</small>.<br><br>Para saber mais, visite o NPC <b>Master Elementalist</b> que fica localizado em cima do templo.</div></td>
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
																		<td><b>Sobre as pedras elementais:</b></td>
																	</tr>
																</table>
																<table width="100%">
																<tr>
																	<td>
																		<table width="100%">
																		<tr>
																			<td width="5%"><center><img src="/images/weaponelements/12799.gif"></center></td><td width="80%">&emsp;Energy</td>
																		</tr>
																		</table>
																		<table width="100%">
																		<tr>
																			<td width="5%"><center><img src="/images/weaponelements/12798.gif"></center></td><td width="80%">&emsp;Earth</td>
																		</tr>
																		</table>
																		<table width="100%">
																		<tr>
																			<td width="5%"><center><img src="/images/weaponelements/12797.gif"></center></td><td width="80%">&emsp;Fire</td>
																		</tr>
																		</table>
																		<table width="100%">
																		<tr>
																			<td width="5%"><center><img src="/images/weaponelements/12796.gif"></center></td><td width="80%">&emsp;Ice</td>
																		</tr>
																		</table>
																		<table width="100%">
																		<tr>
																			<td width="5%"><center><img src="/images/weaponelements/12795.gif"></center></td><td width="80%">&emsp;Holy</td>
																		</tr>
																		</table>
																		<table width="100%">
																		<tr>
																			<td width="5%"><center><img src="/images/weaponelements/12800.gif"></center></td><td width="80%">&emsp;Death</td>
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
													<td><br>
														<div class="TableShadowContainerRightTop" >
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
																	<tr style="background-color:#D4C0A1;" >
																		<td><div style="text-align: justify;">
																			<p>Ao falar com o NPC <b>Master Elementalist</b> e entrar na dungeon, você deve eliminar o BOSS e poderá vir uma pedra de elemento aleatório. A entrada é liberada por uma pequena quantia e você pode fazer sempre que quiser.<br><br><br> <small>(<i>Clique na imagem pra ampliar</i>.)</small></p></div>
																		</td>
																		<td width="20%">
																			<a class="fancybox-media" href="/images/weaponelements/boss_we.png">
																				<img src="/images/weaponelements/boss_we.png" width="130px" border="1">
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