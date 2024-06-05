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
		
$main_content .= '<div class="SmallBox">
	<div class="MessageContainer">
		<div class="BoxFrameHorizontal" style="background-image:url(./layouts/tibiarl/images/content/box-frame-horizontal.gif);"></div>
		<div class="BoxFrameEdgeLeftTop" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></div>
		<div class="BoxFrameEdgeRightTop" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></div>
		<div class="Message">
		<div class="BoxFrameVerticalLeft" style="background-image:url(./layouts/tibiarl/images/content/box-frame-vertical.gif);"></div>
		<div class="BoxFrameVerticalRight" style="background-image:url(./layouts/tibiarl/images/content/box-frame-vertical.gif);"></div>
			<table style="width:100%;">
				<tbody>
					<tr>
						<td style="width:100%;text-align:center;">							
							<nobr>[<img src="/images/Cooking/Bread.gif" width="12px"> <a href="#bread">Bread</a> <img src="/images/Cooking/Bread.gif" width="12px">]</nobr>
							<nobr>[<img src="/images/Cooking/Party_Cake.gif" width="12px"> <a href="#cake">Cake</a> <img src="/images/Cooking/Party_Cake.gif" width="12px">]</nobr>
							<nobr>[<img src="/images/Cooking/Chocolate_Cake.gif" width="12px"> <a href="#chocolatecake">Chocolate Cake</a> <img src="/images/Cooking/Chocolate_Cake.gif" width="12px">]</nobr>
							<br>
							<nobr>[<a href="#infofoods">Informação sobre os ESPECIAL FOODS</a>]</nobr>
							<br>
							<nobr>[<img src="/images/Cooking/Banana_Chocolate_Shake.gif" width="12px"> <a href="#bananashake">Banana Chocolate Shake</a> <img src="/images/Cooking/Banana_Chocolate_Shake.gif" width="12px">]</nobr>
							<nobr>[<img src="/images/Cooking/Blessed_Steak.gif" width="12px"> <a href="#blessedsteak">Blessed Steak</a> <img src="/images/Cooking/Blessed_Steak.gif" width="12px">]</nobr>
							<nobr>[<img src="/images/Cooking/Carrot_Cake.gif" width="12px"> <a href="#carrotcake">Carrot Cake</a> <img src="/images/Cooking/Carrot_Cake.gif" width="12px">]</nobr>
							<nobr>[<img src="/images/Cooking/Coconut_Shrimp_Bake.gif" width="12px"> <a href="#coconutshrimpbake">Coconut Shrimp Bake</a> <img src="/images/Cooking/Coconut_Shrimp_Bake.gif" width="12px">]</nobr>
							<nobr>[<img src="/images/Cooking/Filled_Jalapeño_Peppers.gif" width="12px"> <a href="#filledjalapenopeppers">Filled Jalapeño Pepperse</a> <img src="/images/Cooking/Filled_Jalapeño_Peppers.gif" width="12px">]</nobr>
							<nobr>[<img src="/images/Cooking/Tropical_Fried_Terrorbird.gif" width="12px"> <a href="#friedterrorbird">Tropical Fried Terrorbird</a> <img src="/images/Cooking/Tropical_Fried_Terrorbird.gif" width="12px">]</nobr>
							<nobr>[<img src="/images/Cooking/Hydra_Tongue_Salad.gif" width="12px"> <a href="#hydratongue">Hydra Tongue Salad</a> <img src="/images/Cooking/Hydra_Tongue_Salad.gif" width="12px">]</nobr>
							<nobr>[<img src="/images/Cooking/Pot_of_Blackjack.gif" width="12px"> <a href="#potblackjack">Pot of Blackjack</a> <img src="/images/Cooking/Pot_of_Blackjack.gif" width="12px">]</nobr>
							<nobr>[<img src="/images/Cooking/Roasted_Dragon_Wings.gif" width="12px"> <a href="#roastedwings">Roasted Dragon Wings</a> <img src="/images/Cooking/Roasted_Dragon_Wings.gif" width="12px">]</nobr>
							<nobr>[<img src="/images/Cooking/Rotworm_Stew.gif" width="12px"> <a href="#rotwormstew">Rotworm Stew</a> <img src="/images/Cooking/Rotworm_Stew.gif" width="12px">]</nobr>
							<nobr>[<img src="/images/Cooking/Sweet_Mangonaise_Elixir.gif" width="12px"> <a href="#mangonaiseelixir">Sweet Mangonaise Elixir</a> <img src="/images/Cooking/Sweet_Mangonaise_Elixir.gif" width="12px">]</nobr>
							<nobr>[<img src="/images/Cooking/Veggie_Casserole.gif" width="12px"> <a href="#casserole">Veggie Casserole</a> <img src="/images/Cooking/Veggie_Casserole.gif" width="12px">]</nobr>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="BoxFrameHorizontal" style="background-image:url(./layouts/tibiarl/images/content/box-frame-horizontal.gif);"></div>
		<div class="BoxFrameEdgeRightBottom" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></div>
		<div class="BoxFrameEdgeLeftBottom" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></div>
	</div>
</div><br>';

$main_content .= '
	<div class="TableContainer">
		<div class="CaptionContainer">
			<div class="CaptionInnerContainer">
				<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
				<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
				<div class="Text">Informações</div>
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
																		<td><div style="text-align: justify;">Em nosso servidor, revivemos a função de cozinhar no Tibia. Aqui, você poderá fazer comidas comuns, desde Bread, Cake ou até mesmo um Chocolate Cake.<br><br>O objetivo principal desse sistema, é fazer com que, você junte pontos para fazer comidas que lhe dão bônus, como por exemplo: Blessed Steak, Rotworm Stew e muitos outros.<br><br>Aqui nesta página, você poderá aprender como cozinhar(cooking) em nosso servidor.
																		<br><br>
																		<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
																			<div class="TableContentContainer" >
																				<table width="100%">
																					<tr>
																						<td><b>Começando a cozinhar:</b></td>
																					</tr>
																				</table>
																				<table width="100%">
																				<tr>
																					<td>
																						<table width="100%">
																						<tr>
																							<td width="20%"><a class="fancybox-media" rel="group1" href="/images/Cooking/cooking_npc.png"><img src="/images/Cooking/cooking_npc.png" width="150px" border="1"></a></center></td><td width="80%"><b>1º)</b> Procure o NPC Erique Jacquan na área de trainers.<br><b>2º)</b> Digite <b>entrar</b> para ter acesso a cozinha dele, ao custo de 100k.<br><br><li>Ao ter acesso a cozinha, você também poderá dizer o nome do FOOD para o NPC para poder criá-lo ou entregá-lo.<br><li>Alguns foods lhe dão pontos, enquanto outros necessitam de pontos para serem criados.</td>
																						</tr>
																						</table>
																					</td>
																				</tr>
																				</table>
																			</div>
																		</div>
																	</div></td>
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
																		<td><div style="text-align: justify;"><b>IMPORTANTE</b>: Aqui terão apenas os FOODS disponiveis no momento para criação.</div></td>
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
	</div><br>';
	
	$main_content .= '<div class="TableContainer"><a name="bread"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Bread.gif" width="12px"> Fazendo Breads - Pontos: <font color="yellow">+1</font> <small>(ao entregar 10 breads)</small></div>
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
												<table width="100%">
												<tr>
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Oven.gif"></center></td><td width="80%">&emsp;Você consegue esse item usando um <b>Oven Kit</b><img src="/images/Cooking/Kit.gif" width="22px"> dentro de uma house.<br>&emsp;Você também pode encontrar esse item na cozinha e em alguns locais no mapa.</td>
														</tr>
														</table>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Water.gif"></center></td><td width="80%">&emsp;Você consegue esse item usando um <b>Vial Vazio</b><img src="/images/Cooking/Vial.gif" width="22px"> em <b>Water</b><img src="/images/Cooking/Shallow_Water_Tile.gif" width="22px"> ou um <b>Draw Well</b><img src="/images/Cooking/Draw_Well.gif" width="22px"> .</td>
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
									<td><br><li><b>Passo 1:</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Scythe.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Wheat.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Bunch_of_Wheat.gif"><br>Use o <b>Scythe</b> no <b>Wheat</b> para obter <b>Bunch of Wheat</b>.</center>
													</td>							
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
									<td><br><li><b>Passo 2</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Bunch_of_Wheat.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Millstone.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Flour.gif"><br>Use o <b>Bunch of Wheat</b> no <b>Mill</b> para obter <b>Flour</b>.</center>
													</td>									
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
									<td><br><li><b>Passo 3</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Flour.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Water.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Lump_of_Dough.gif"><br>Use o <b>Flour</b> no <b>Vial of Water</b> para obter <b>Lump of Dough</b>.</center>
													</td>									
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
									<td><br><li><b>Passo 4</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Lump_of_Dough.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Oven.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Bread.gif"><br>Jogue o <b>Lump of Dough</b> no <b>Oven</b> para obter <b><font color="green">Bread</font></b>.</center>
													</td>									
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
							</tbody>
						</table>
					</div>										
				</td>
			</tr>
		</tbody>
	</table>
</div><br>';

$main_content .= '<div class="TableContainer"><a name="cake"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Party_Cake.gif" width="12px"> Fazendo Cake - Pontos: <font color="yellow">+3</font> <small>(ao entregar 1 party cake)</small></div>
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
														<td><div style="text-align: justify;"><b>Você terá que fazer o Party Cake para poder entregá-lo ao NPC e receber os pontos.</b></div></td>
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
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Oven.gif"></center></td><td width="80%">&emsp;Você consegue esse item usando um <b>Oven Kit</b><img src="/images/Cooking/Kit.gif" width="22px"> dentro de uma house.<br>&emsp;Você também pode encontrar esse item na cozinha e em alguns locais no mapa.</td>
														</tr>
														</table>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Milk.gif"></center></td><td width="80%">&emsp;Você consegue esse item comprando no NPC <b>Erique Jacquan</b>.</td>
														</tr>
														</table>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Kitchen_Knife.gif"></center></td><td width="80%">&emsp;Esse item da Respawn a cada SS em alguns locais no mapa e na cozinha.</td>
														</tr>
														</table>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Candlestick.gif"></center></td><td width="80%">&emsp;<b>Loot de:</b> Banshee, Elf Arcanist e Warlock.</td>
														</tr>
														</table>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Red_Apple.gif"></center></td><td width="80%">&emsp;<b>Loot de:</b> Priestess e Valkyrie.</td>
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
									<td><br><li><b>Passo 1:</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Scythe.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Wheat.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Bunch_of_Wheat.gif"><br>Use o <b>Scythe</b> no <b>Wheat</b> para obter <b>Bunch of Wheat</b>.</center>
													</td>							
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
									<td><br><li><b>Passo 2</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Bunch_of_Wheat.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Millstone.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Flour.gif"><br>Use o <b>Bunch of Wheat</b> no <b>Mill</b> para obter <b>Flour</b>.</center>
													</td>									
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
									<td><br><li><b>Passo 3</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Flour.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Milk.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Lump_of_Cake_Dough.gif"><br>Use o <b>Flour</b> no <b>Vial of Milk</b> para obter <b>Lump of Cake Dough</b>.</center>
													</td>									
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
									<td><br><li><b>Passo 4</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Lump_of_Cake_Dough.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Oven.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Cake.gif"><br>Jogue o <b>Lump of Cake Dough</b> no <b>Oven</b> para obter <b>Cake</b>.<br><font color="#ce1a1a">Tome muito cuidado aqui, você só poderá fazer 1 <b>Cake</b> por vez. Caso jogue mais de 1 <b>Lump of Cake Dough</b> no <b>Oven</b>, irá perdê-lo.</font></center>
													</td>									
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
									<td><br><li><b>Passo 5</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Kitchen_Knife.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Red_Apple.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Cake.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Decorated_Cake.gif"><br>Use a <b>Kitchen Knife</b> na <b>Red Apple</b> com o <b>Cake</b> em sua mochila para obter <b>Decorated Cake</b>.</center>
													</td>									
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
									<td><br><li><b>Passo 6</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Candlestick.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Decorated_Cake.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Party_Cake.gif"><br>Coloque o <b>Decorated Cake</b> em alguma superfície e jogue o <b>Candlestick</b> em cima para obter <b><font color="green">Party Cake</font></b>.</center>
													</td>									
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
							</tbody>
						</table>
					</div>										
				</td>
			</tr>
		</tbody>
	</table>
</div><br>';

$main_content .= '<div class="TableContainer"><a name="chocolatecake"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Chocolate_Cake.gif" width="12px"> Fazendo Chocolate Cake - Pontos: <font color="yellow">+15</font> <small>(ao entregar 1 chocolate cake)</small></div>
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
												<table width="100%">
												<tr>
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Oven.gif"></center></td><td width="80%">&emsp;Você consegue esse item usando um <b>Oven Kit</b><img src="/images/Cooking/Kit.gif" width="22px"> dentro de uma house.<br>&emsp;Você também pode encontrar esse item na cozinha e em alguns locais no mapa.</td>
														</tr>
														</table>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Milk.gif"></center></td><td width="80%">&emsp;Você consegue esse item comprando no NPC <b>Erique Jacquan</b>.</td>
														</tr>
														</table>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Bar_of_Chocolate.gif"></center></td><td width="80%">&emsp;<b>Loot de:</b> Nightmare Scion. <i><b><small>(raro)</small></b></i></td>
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
									<td><br><li><b>Passo 1:</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Scythe.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Wheat.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Bunch_of_Wheat.gif"><br>Use o <b>Scythe</b> no <b>Wheat</b> para obter <b>Bunch of Wheat</b>.</center>
													</td>							
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
									<td><br><li><b>Passo 2</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Bunch_of_Wheat.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Millstone.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Flour.gif"><br>Use o <b>Bunch of Wheat</b> no <b>Mill</b> para obter <b>Flour</b>.</center>
													</td>									
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
									<td><br><li><b>Passo 3</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Flour.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Milk.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Lump_of_Cake_Dough.gif"><br>Use o <b>Flour</b> no <b>Vial of Milk</b> para obter <b>Lump of Cake Dough</b>.</center>
													</td>									
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
									<td><br><li><b>Passo 4</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Lump_of_Cake_Dough.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Bar_of_Chocolate.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Lump_of_Chocolate_Dough.gif"><br>Use o <b>Lump of Cake Dough</b> no <b>Bar of Chocolate</b> para obter <b>Lump of Chocolate Dough</b>.</center>
													</td>									
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
									<td><br><li><b>Passo 5</td>
								</tr>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
													<td>
														<center><img src="/images/Cooking/Lump_of_Chocolate_Dough.gif"> <img src="/images/Cooking/mais.png"> <img src="/images/Cooking/Oven.gif"> <img src="/images/Cooking/igual.png"> <img src="/images/Cooking/Chocolate_Cake.gif"><br>Jogue o <b>Lump of Chocolate Dough</b> no <b>Oven</b> para obter <b><font color="green">Chocolate Cake</font></b>.<br><font color="#ce1a1a">Tome muito cuidado aqui, você só poderá fazer 1 <b>Chocolate Cake</b> por vez. Caso jogue mais de 1 <b>Lump of Chocolate Dough</b> no <b>Oven</b>, irá perdê-lo.</font></center>
													</td>									
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
							</tbody>
						</table>
					</div>										
				</td>
			</tr>
		</tbody>
	</table>
</div><br><br><br>';

$main_content .= '<div class="TableContainer"><a name="infofoods"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text">Informação sobre os ESPECIAL FOODS</div>
			<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
		</div>
	</div>
	<table class="Table5" cellpadding="0" cellspacing="0">
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
													<td>
														<b><font color="red">Ao comer qualquer um ESPECIAL FOOD, você deverá esperar 5 minutos para comer outro.</b></font><br><br>Todos os ESPECIAL FOODS citados abaixo possui um exhaust de 5 minutos.
													</td>									
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
							</tbody>
						</table>
					</div>										
				</td>
			</tr>
		</tbody>
	</table>
</div><br><br><br>';

$main_content .= '<div class="TableContainer"><a name="bananashake"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Banana_Chocolate_Shake.gif" width="12px"> Fazendo Banana Chocolate Shake - Pontos: <font color="red">-10</font></div>
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
												<table width="100%">
												<tr>
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Banana_Chocolate_Shake.gif"></center></td><td width="80%">&emsp;Deixa seu personagem feliz.</td>
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
									<td><br><li><b>Ingredientes para entregar ao NPC:</td>
								</tr>
								<tr>
									<td>
										<div class="TableContentContainer" >
											<table width="100%">
											<tr>
												<td>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Bar_of_Chocolate.gif"></center></td><td width="80%"><b>1x - </b>Bar of Chocolate <small>(<b>Loot de:</b> Nightmare Scion)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Cream_Cake.gif"></center></td><td width="80%"><b>1x - </b>Cream Cake <small>(<b>Loot de:</b> Mad Scientist)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Banana.gif"></center></td><td width="80%"><b>2x - </b>Bananas <small>(Ao dar use em uma <b>Banana Palm</b> ou <b>Loot de:</b> Kongra, Merlkin e Sibang)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Milk.gif"></center></td><td width="80%"><b>2x - </b>Vials of Milk <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Sling_Herb.gif"></center></td><td width="80%"><b>1x - </b>Sling Herb <small>(<b>Loot de:</b> Carniphila, Elf Arcanist, Priestess e Spit Netttle)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Star_Herb.gif"></center></td><td width="80%"><b>1x - </b>Star Herb <small>(<b>Loot de:</b> Mutated Bat e Witch)</small>.</td>
													</tr>
													</table>
												</td>
											</tr>
											</table>
										</div>														
										<div class="TableShadowContainer" >
											<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
												<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
												<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
											</div>
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
</div><br>';

$main_content .= '<div class="TableContainer"><a name="blessedsteak"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Blessed_Steak.gif" width="12px"> Fazendo Blessed Steak - Pontos: <font color="red">-60</font></div>
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
												<table width="100%">
												<tr>
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Blessed_Steak.gif"></center></td><td width="80%">&emsp;Enche toda sua mana.</td>
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
									<td><br><li><b>Ingredientes para entregar ao NPC:</td>
								</tr>
								<tr>
									<td>
										<div class="TableContentContainer" >
											<table width="100%">
											<tr>
												<td>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Ham.gif"></center></td><td width="80%"><b>1x - </b>Ham <small>(Você consegue esse item comprando no <b>NPC Donald</b> ou <b>Loot de:</b> Vários monstros)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Plum.gif"></center></td><td width="80%"><b>5x - </b>Plum <small>(<b>Loot de:</b> Elf)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Onion.gif"></center></td><td width="80%"><b>1x - </b>Onion <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Beetroot.gif"></center></td><td width="80%"><b>2x - </b>Beetroot <small>(<b>Loot de:</b> Badger)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Pumpkin.gif"></center></td><td width="80%"><b>1x - </b>Pumpkin <small>(Pergunte ao <b>NPC Captain Jack</b> sobre o <b>Pumpkin</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Jalapeño_Pepper.gif"></center></td><td width="80%"><b>2x - </b>Jalapeño Pepper <small>(<b>Loot de:</b> Fury)</small>.</td>
													</tr>
													</table>
												</td>
											</tr>
											</table>
										</div>														
										<div class="TableShadowContainer" >
											<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
												<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
												<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
											</div>
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
</div><br>';

$main_content .= '<div class="TableContainer"><a name="carrotcake"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Carrot_Cake.gif" width="12px"> Fazendo Carrot Cake - Pontos: <font color="red">-50</font></div>
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
												<table width="100%">
												<tr>
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Carrot_Cake.gif"></center></td><td width="80%">&emsp;Aumenta 10 pontos de Distance Fighting por uma hora.</td>
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
														<td><div style="text-align: justify;"><b><font color="red">AVISO:</font></b> Se você usar o <b>Bullseye Potion</b> por exemplo, ele vai somar com o <b>Carrot Cake</b>, aumentando ainda mais seu skill.</div></td>
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
														<td><div style="text-align: justify;"><b><font color="red">CUIDADO:</font></b> Se você morrer ou deslogar, perderá o bônus.</div></td>
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
									<td><br><li><b>Ingredientes para entregar ao NPC:</td>
								</tr>
								<tr>
									<td>
										<div class="TableContentContainer" >
											<table width="100%">
											<tr>
												<td>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Carrot.gif"></center></td><td width="80%"><b>5x - </b>Carrots <small>(<b>Loot de:</b> Blue Djinn, Minotaur Mage, Rabbit e Silver Rabbit)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Milk.gif"></center></td><td width="80%"><b>1x - </b>Vial of Milk <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Lemon.gif"></center></td><td width="80%"><b>1x - </b>Lemon <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Flour.gif"></center></td><td width="80%"><b>10x - </b>Flours <small>(Você consegue esse item usando um <b>Bunch of Wheat</b> em um <b>Will</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Egg.gif"></center></td><td width="80%"><b>2x - </b>Eggs <small>(<b>Loot de:</b> Chicken e Wild Warrior)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Cookie.gif"></center></td><td width="80%"><b>10x - </b>Cookies <small>(Você pode fazer os <b>Cookies</b> ou <b>Dropar de:</b> Cave Rat, Mad Scientist ou Witch)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Peanut.gif"></center></td><td width="80%"><b>2x - </b>Peanuts <small>(<b>Loot de:</b> Mutated Human e Squirrel)</small>.</td>
													</tr>
													</table>
												</td>
											</tr>
											</table>
										</div>														
										<div class="TableShadowContainer" >
											<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
												<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
												<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
											</div>
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
</div><br>';

$main_content .= '<div class="TableContainer"><a name="coconutshrimpbake"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Coconut_Shrimp_Bake.gif" width="12px"> Fazendo Coconut Shrimp Bake - Pontos: <font color="red">-10</font></div>
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
												<table width="100%">
												<tr>
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Coconut_Shrimp_Bake.gif"></center></td><td width="80%">&emsp;Aumenta a sua velocidade embaixo d\'água enquanto usar um Helmet of the Deep por 6 horas.</td>
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
														<td><div style="text-align: justify;"><b><font color="red">VOCÊ PERDERÁ O BÔNUS NAS SEGUINTES SITUAÇÕES:</font></b><br><li> Se você morrer ou deslogar.<br><li>Se você sair de baixo d\'agua ou entrar em PZ Zone.<br><li>Se você desequipar o Helmet of the Deep.</div></td>
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
									<td><br><li><b>Ingredientes para entregar ao NPC:</td>
								</tr>
								<tr>
									<td>
										<div class="TableContentContainer" >
											<table width="100%">
											<tr>
												<td>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Milk.gif"></center></td><td width="80%"><b>5x - </b>Vials of Milk <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Brown_Mushroom.gif"></center></td><td width="80%"><b>5x - </b>Brown Mushrooms <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Red_Mushroom.gif"></center></td><td width="80%"><b>5x - </b>Red Mushrooms <small>(<b>Loot de:</b> Hellspawn)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Rice_Ball.gif"></center></td><td width="80%"><b>10x - </b>Rice Balls <small>(Fale com o <b>NPC Donald</b>, pergunte a ele sobre <b>Rice Ball</b>. Ele vai lhe dar <b>10 Rice Balls</b> <img src="/images/Cooking/Rice_Ball.gif" width="12px"> em troca de <b>1 Bunch of Ripe Rice</b> <img src="/images/Cooking/Bunch_of_Ripe_Rice.gif" width="12px">)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Shrimp.gif"></center></td><td width="80%"><b>10x - </b>Shrimps <small>(<b>Loot de:</b> Quara Constrictor, Quara Constrictor Scout, Quara Hydromancer, Quara Hydromancer Scout, Quara Mantassin, Quara Pincher, Quara Predator e Quara Predator Scout‎)</small>.</td>
													</tr>
													</table>
												</td>
											</tr>
											</table>
										</div>														
										<div class="TableShadowContainer" >
											<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
												<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
												<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
											</div>
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
</div><br>';

$main_content .= '<div class="TableContainer"><a name="filledjalapenopeppers"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Filled_Jalapeño_Peppers.gif" width="12px"> Fazendo Filled Jalapeño Peppers - Pontos: <font color="red">-10</font></div>
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
												<table width="100%">
												<tr>
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Filled_Jalapeño_Peppers.gif"></center></td><td width="80%">&emsp;Faz você ficar realmente rápido por uma hora. <small><b>(Você recebe +40 speed)</b></small></td>
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
														<td><div style="text-align: justify;"><b><font color="red">VOCÊ PERDERÁ O BÔNUS NAS SEGUINTES SITUAÇÕES:</font></b><br><li> Se você morrer ou deslogar.<br><li>Se você for paralisado.<br><li>Se você utilizar alguma magia que altere a sua velocidade.</div></td>
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
									<td><br><li><b>Ingredientes para entregar ao NPC:</td>
								</tr>
								<tr>
									<td>
										<div class="TableContentContainer" >
											<table width="100%">
											<tr>
												<td>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Jalapeño_Pepper.gif"></center></td><td width="80%"><b>10x - </b>Jalapeño Peppers <small>(<b>Loot de:</b> Fury)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Cheese.gif"></center></td><td width="80%"><b>2x - </b>Cheeses <small>(Você consegue esse item comprando no <b>NPC Donald</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Troll_Green.gif"></center></td><td width="80%"><b>1x - </b>Troll Green <small>(<b>Loot de:</b> Swamp Troll e Werewolf)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Shadow_Herb.gif"></center></td><td width="80%"><b>1x - </b>Shadow Herb <small>(<b>Loot de:</b> Carniphila, Ghost, Nightstalker, Phantasm e Spit Nettle)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Mead.gif"></center></td><td width="80%"><b>1x - </b>Vial of Mead <small>(Você consegue esse item comprando no <b>NPC Buddel</b>. Ele fica na hunt de frost dragon - Okolnir)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Egg.gif"></center></td><td width="80%"><b>2x - </b>Eggs <small>(<b>Loot de:</b> Chicken e Wild Warrior)</small>.</td>
													</tr>
													</table>
												</td>
											</tr>
											</table>
										</div>														
										<div class="TableShadowContainer" >
											<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
												<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
												<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
											</div>
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
</div><br>';

$main_content .= '<div class="TableContainer"><a name="friedterrorbird"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Tropical_Fried_Terrorbird.gif" width="12px"> Fazendo Tropical Fried Terrorbird - Pontos: <font color="red">-50</font></div>
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
												<table width="100%">
												<tr>
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Tropical_Fried_Terrorbird.gif"></center></td><td width="80%">&emsp;Aumenta 5 pontos de Magic Level por uma hora.</td>
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
														<td><div style="text-align: justify;"><b><font color="red">AVISO:</font></b> Se você usar o <b>Mastermind Potion</b> por exemplo, ele vai somar com o <b>Tropical Fried Terrorbird</b>, aumentando ainda mais seu skill.</div></td>
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
														<td><div style="text-align: justify;"><b><font color="red">CUIDADO:</font></b> Se você morrer ou deslogar, perderá o bônus.</div></td>
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
									<td><br><li><b>Ingredientes para entregar ao NPC:</td>
								</tr>
								<tr>
									<td>
										<div class="TableContentContainer" >
											<table width="100%">
											<tr>
												<td>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Dead_Chicken.gif"></center></td><td width="80%"><b>1x - </b>Chicken <small>(<b>Recentemente morta</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Lemon.gif"></center></td><td width="80%"><b>2x - </b>Lemons <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Orange.gif"></center></td><td width="80%"><b>2x - </b>Oranges <small>(Você consegue esse item clicando em uma <b>Orange Tree</b> em vários locais no mapa ou <b>Loot de:</b> Hunter, Merlkin e Sibang)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Mango.gif"></center></td><td width="80%"><b>2x - </b>Mangoes <small>(Você consegue esse item clicando em uma <b>Mango Tree</b> em vários locais no mapa)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Stone_Herb.gif"></center></td><td width="80%"><b>1x - </b>Stone Herb <small>(<b>Loot de:</b> Esmeralda e Mutated Rat)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Coconut_Milk.gif"></center></td><td width="80%"><b>2x - </b>Vials of Coconut Milks.</td>
													</tr>
													</table>
													<div class="SmallBox">
														<div class="MessageContainer">
															<div class="BoxFrameHorizontal" style="background-image:url('.$layout_name.'/images/global/content/box-frame-horizontal.gif);"></div>
															<div class="BoxFrameEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></div>
															<div class="BoxFrameEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></div>
																<div class="Message">
																	<div class="BoxFrameVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></div>
																	<div class="BoxFrameVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></div>
																	<table style="width:100%;">
																		<tbody>
																			<tr>
																				<td style="width:100%;"><b>Como fazer Coconut Milk:</b><br><br>
																					<b><small>&emsp;Ingredientes e itens:</small></b><br>
																					<li><img src="/images/Cooking/Juice_Squeezer.gif" width="16px"> Juice Squeezer (Você consegue comprando no <b>NPC Erique Jacquan</b>).<br>
																					<li><img src="/images/Cooking/Vial.gif" width="16px"> Vial vazio (Você consegue comprando por exempplo: Um <b>Vial of Oil</b> no <b>NPC Bezil</b> e jogando o <b>Oil</b> fora).<br>
																					<li><img src="/images/Cooking/Coconut.gif" width="16px"> Coconut (<b>Loot de:</b> Sibang).<br><br>
																					<b><small>&emsp;Modo de preparo:</small></b><br>
																					<b>1.</b> Você precisa ter o <b>Vial Vazio</b> em sua backpack.<br>
																					<b>2.</b> Use o <b>Juice Squeezer</b> no <b>Coconut</b>.<br>
																					
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															<div class="BoxFrameHorizontal" style="background-image:url('.$layout_name.'/images/global/content/box-frame-horizontal.gif);"></div>
															<div class="BoxFrameEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></div>
															<div class="BoxFrameEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></div>
														</div>
													</div>
												</td>
											</tr>
											</table>
										</div>														
										<div class="TableShadowContainer" >
											<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
												<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
												<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
											</div>
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
</div><br>';

$main_content .= '<div class="TableContainer"><a name="hydratongue"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Hydra_Tongue_Salad.gif" width="12px"> Fazendo Hydra Tongue Salad - Pontos: <font color="red">-10</font></div>
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
												<table width="100%">
												<tr>
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Hydra_Tongue_Salad.gif"></center></td><td width="80%">&emsp;Irá curar você de todas as condições negativas e nocivas.</td>
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
									<td><br><li><b>Ingredientes para entregar ao NPC:</td>
								</tr>
								<tr>
									<td>
										<div class="TableContentContainer" >
											<table width="100%">
											<tr>
												<td>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Hydra_Tongue.gif"></center></td><td width="80%"><b>2x - </b>Hydra Tongues <small>(Você consegue esse item comprando no <b>NPC Buddel</b>. Ele fica na hunt de frost dragon - Okolnir)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Tomato.gif"></center></td><td width="80%"><b>2x - </b>Tomatoes <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b> ou <b>Loot de:</b> Bandit)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Cucumber.gif"></center></td><td width="80%"><b>1x - </b>Cucumber <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b> ou <b>Loot de:</b> Hydra)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Egg.gif"></center></td><td width="80%"><b>2x - </b>Eggs <small>(<b>Loot de:</b> Chicken e Wild Warrior)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Troll_Green.gif"></center></td><td width="80%"><b>1x - </b>Troll Green <small>(<b>Loot de:</b> Swamp Troll e Werewolf)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Wine.gif"></center></td><td width="80%"><b>1x - </b>Vial of Wine <small>(Você consegue esse item usando um <b>Vial Vazio</b> em um <b>Wine Cask</b>, que pode ser encontrado na cozinha)</small>.</td>
													</tr>
													</table>
												</td>
											</tr>
											</table>
										</div>														
										<div class="TableShadowContainer" >
											<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
												<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
												<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
											</div>
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
</div><br>';

$main_content .= '<div class="TableContainer"><a name="potblackjack"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Pot_of_Blackjack.gif" width="12px"> Fazendo Pot of Blackjack - Pontos: <font color="red">-80</font></div>
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
												<table width="100%">
												<tr>
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Pot_of_Blackjack.gif"></center></td><td width="80%">&emsp;Ele irá curar 5000 de sua vida.<br>&emsp;Pode-se ser usado de 2 a 4 vezes.</td>
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
														<td><div style="text-align: justify;"><b><font color="red">AVISO:</font></b> Ao usar o item e ele não desaparecer, você receberá um EXHAUST de apenas 30 segundos. Ao usar o item e ele desaparecer, receberá um EXHAUST normal de 5 minutos.</div></td>
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
									<td><br><li><b>Ingredientes para entregar ao NPC:</td>
								</tr>
								<tr>
									<td>
										<div class="TableContentContainer" >
											<table width="100%">
											<tr>
												<td>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Sandcrawler_Shell.gif"></center></td><td width="80%"><b>5x - </b>Sandcrawler Shells <small>(<b>Loot de:</b> Sandcrawler)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Water.gif"></center></td><td width="80%"><b>2x - </b>Vials of Water <small>(Você consegue usando um <b>Vial Vazio</b> em uma <b>Water</b> ou <b>Draw Well</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Carrot.gif"></center></td><td width="80%"><b>20x - </b>Carrots <small>(<b>Loot de:</b> Blue Djinn, Minotaur Mage, Rabbit e Silver Rabbit)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Potato.gif"></center></td><td width="80%"><b>10x - </b>Potatoes <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b> ou <b>Loot de:</b> Gargoyle e Nomad)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Jalapeño_Pepper.gif"></center></td><td width="80%"><b>3x - </b>Jalapeño Peppers <small>(<b>Loot de:</b> Fury)</small>.</td>
													</tr>
													</table>
												</td>
											</tr>
											</table>
										</div>														
										<div class="TableShadowContainer" >
											<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
												<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
												<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
											</div>
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
</div><br>';

$main_content .= '<div class="TableContainer"><a name="roastedwings"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Roasted_Dragon_Wings.gif" width="12px"> Fazendo Roasted Dragon Wings - Pontos: <font color="red">-20</font></div>
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
												<table width="100%">
												<tr>
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Roasted_Dragon_Wings.gif"></center></td><td width="80%">&emsp;Aumenta 10 pontos de Shielding Skill por uma hora.</small></td>
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
														<td><div style="text-align: justify;"><b><font color="red">AVISO:</font></b> Se você utilizar alguma magia que altere seu skill, ele vai somar com o <b>Roasted Dragon Wings</b>, aumentando ainda mais seu skill.</div></td>
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
									<td><br><li><b>Ingredientes para entregar ao NPC:</td>
								</tr>
								<tr>
									<td>
										<div class="TableContentContainer" >
											<table width="100%">
											<tr>
												<td>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Dead_Bat.gif"></center></td><td width="80%"><b>1x - </b>Bat <small>(<b>Recentemente morto</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Jalapeño_Pepper.gif"></center></td><td width="80%"><b>3x - </b>Jalapeño Peppers <small>(<b>Loot de:</b> Fury)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Brown_Bread.gif"></center></td><td width="80%"><b>5x - </b>Brown Breads <small>(<b>Loot de:</b> Amazon e Black Knight)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Egg.gif"></center></td><td width="80%"><b>2x - </b>Eggs <small>(<b>Loot de:</b> Chicken e Wild Warrior)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Powder_Herb.gif"></center></td><td width="80%"><b>1x - </b>Powder Herb <small>(<b>Loot de:</b> Priestess e Mad Scientist)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Red_Mushroom.gif"></center></td><td width="80%"><b>5x - </b>Red Mushrooms <small>(<b>Loot de:</b> Hellspawn)</small>.</td>
													</tr>
													</table>
												</td>
											</tr>
											</table>
										</div>														
										<div class="TableShadowContainer" >
											<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
												<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
												<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
											</div>
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
</div><br>';

$main_content .= '<div class="TableContainer"><a name="rotwormstew"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Rotworm_Stew.gif" width="12px"> Fazendo Rotworm Stew - Pontos: <font color="red">-60</font></div>
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
												<table width="100%">
												<tr>
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Rotworm_Stew.gif"></center></td><td width="80%">&emsp;Enche toda sua vida.</small></td>
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
									<td><br><li><b>Ingredientes para entregar ao NPC:</td>
								</tr>
								<tr>
									<td>
										<div class="TableContentContainer" >
											<table width="100%">
											<tr>
												<td>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Meat.gif"></center></td><td width="80%"><b>2x - </b>Meats <small>(Você consegue esse item comprando no <b> NPC Erique Jacquan</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Beer.gif"></center></td><td width="80%"><b>2x - </b>Vial of Beers <small>(Você consegue usando um <b>Vial Vazio</b> em um <b>Beer Cask</b> que pode ser encontrado em Camp Amazon ou na cozinha)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Potato.gif"></center></td><td width="80%"><b>20x - </b>Potatoes <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b> ou <b>Loot de:</b> Gargoyle e Nomad)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Onion.gif"></center></td><td width="80%"><b>1x - </b>Onion <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Bulb_of_Garlic.gif"></center></td><td width="80%"><b>1x - </b>Bulb of Garlic <small>(<b>Loot de:</b> Skunk)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Flour.gif"></center></td><td width="80%"><b>5x - </b>Flours <small>(Você consegue esse item usando um <b>Bunch of Wheat</b> em um <b>Will</b>)</small>.</td>
													</tr>
													</table>
												</td>
											</tr>
											</table>
										</div>														
										<div class="TableShadowContainer" >
											<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
												<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
												<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
											</div>
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
</div><br>';

$main_content .= '<div class="TableContainer"><a name="mangonaiseelixir"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Sweet_Mangonaise_Elixir.gif" width="12px"> Fazendo Sweet Mangonaise Elixir - Pontos: <font color="red">-10</font></div>
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
												<table width="100%">
												<tr>
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Sweet_Mangonaise_Elixir.gif"></center></td><td width="80%">&emsp;Cria dez cópias do anel que você está usando.</small></td>
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
														<td><div style="text-align: justify;"><b><font color="red">SÓ FUNCIONA COM OS ANÉIS LISTADOS ABAIXO. VEJA A LISTA ABAIXO:</font></b><br><li>Axe/Club/Power/Sword Ring<br><li>Death Ring<br><li>Dwarven Ring<br><li>Energy Ring<br><li>Life Ring<br><li>Ring of Healing<br><li>Stealth Ring<br><li>Time Ring</div></td>
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
														<td><div style="text-align: justify;"><b><font color="red">ATENÇÃO:</font></b> Só será copiado o anel que estiver equipado no <b>slot RING</b> ao "usar" a food. Tenha muita atenção para não copiar o RING errado!</div></td>
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
									<td><br><li><b>Ingredientes para entregar ao NPC:</td>
								</tr>
								<tr>
									<td>
										<div class="TableContentContainer" >
											<table width="100%">
											<tr>
												<td>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Egg.gif"></center></td><td width="80%"><b>40x - </b>Eggs <small>(<b>Loot de:</b> Chicken e Wild Warrior)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Mango.gif"></center></td><td width="80%"><b>20x - </b>Mangoes <small>(Você consegue esse item clicando em uma <b>Mango Tree</b> em vários locais no mapa)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Honeycomb.gif"></center></td><td width="80%"><b>10x - </b>Honeycombs <small>(<b>Loot de:</b> Bear e Wasp)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Bottle_of_Bug_Milk.gif"></center></td><td width="80%"><b>1x - </b>Bottle of Bug Milk <small>(Você consegue esse item comprando no <b>NPC Buddel</b>. Ele fica na hunt de frost dragon - Okolnir)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Blessed_Wooden_Stake.gif"></center></td><td width="80%"><b>1x - </b>Blessed Wooden Stake <small>(Você consegue comprar esse item com o <b>NPC Grizzly Adams</b> ao atingir o <b>Rank 3</b>)</small>.</td>
													</tr>
													</table>
												</td>
											</tr>
											</table>
										</div>														
										<div class="TableShadowContainer" >
											<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
												<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
												<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
											</div>
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
</div><br>';

$main_content .= '<div class="TableContainer"><a name="casserole"></a>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text"><img src="/images/Cooking/Veggie_Casserole.gif" width="12px"> Fazendo Veggie Casserole - Pontos: <font color="red">-50</font></div>
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
												<table width="100%">
												<tr>
													<td>
														<table width="100%">
														<tr>
															<td width="20%"><center><img src="/images/Cooking/Veggie_Casserole.gif"></center></td><td width="80%">&emsp;Aumenta 10 pontos de Axe, Club e Sword Fighting por uma hora.</td>
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
														<td><div style="text-align: justify;"><b><font color="red">AVISO:</font></b> Se você usar o <b>Berserk Potion</b> por exemplo, ele vai somar com o <b>Veggie Casserole</b>, aumentando ainda mais seu skill.</div></td>
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
														<td><div style="text-align: justify;"><b><font color="red">CUIDADO:</font></b> Se você morrer ou deslogar, perderá o bônus.</div></td>
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
									<td><br><li><b>Ingredientes para entregar ao NPC:</td>
								</tr>
								<tr>
									<td>
										<div class="TableContentContainer" >
											<table width="100%">
											<tr>
												<td>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Carrot.gif"></center></td><td width="80%"><b>2x - </b>Carrots <small>(<b>Loot de:</b> Blue Djinn, Minotaur Mage, Rabbit e Silver Rabbit)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Tomato.gif"></center></td><td width="80%"><b>2x - </b>Tomatoes <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b> ou <b>Loot de:</b> Bandit)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Corncob.gif"></center></td><td width="80%"><b>2x - </b>Corncob <small>(<b>Loot de:</b> Barbarian Brutetamer, Carniphila e Orc Shaman)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Cucumber.gif"></center></td><td width="80%"><b>2x - </b>Cucumbers <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b> ou <b>Loot de:</b> Hydra)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Onion.gif"></center></td><td width="80%"><b>1x - </b>Onion <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Bulb_of_Garlic.gif"></center></td><td width="80%"><b>1x - </b>Bulb of Garlic <small>(<b>Loot de:</b> Skunk)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Cheese.gif"></center></td><td width="80%"><b>1x - </b>Cheese <small>(Você consegue esse item comprando no <b>NPC Donald</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/White_Mushroom.gif"></center></td><td width="80%"><b>20x - </b>White Mushrooms <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b>)</small>.</td>
													</tr>
													</table>
													<table width="100%">
													<tr>
														<td width="5%"><center><img src="/images/Cooking/Brown_Mushroom.gif"></center></td><td width="80%"><b>5x - </b>Brown Mushrooms <small>(Você consegue esse item comprando no <b>NPC Erique Jacquan</b>)</small>.</td>
													</tr>
													</table>
												</td>
											</tr>
											</table>
										</div>														
										<div class="TableShadowContainer" >
											<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
												<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
												<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
											</div>
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
</div><br>';
?>