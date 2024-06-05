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
			<span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url(./layouts/tibiarl/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>
			<div class="Text">Task System</div>
			<span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>
			<span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiarl/images/content/table-headline-border.gif);"></span>
			<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
				</div>
					</div>
						<table class="Table5">
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
															<table class="TableContent" width="100%">
																<tr style="background-color:#D4C0A1;" >
																	<td><div style="text-align: justify;">
																		<p>Para iniciar sua Task &eacute; necess&aacute;rio ir at&eacute; o <b>NPC Grizzly Adams</b>, localizado em todas as cidades. Na imagem anexada na lateral temos o <b>NPC Grizzly Adams</b> localizado na cidade principal na saída de baixo, no templo. Para iniciar sua task digite, <u>hi, task, MONSTRO, yes</u>. Você irá iniciar a task do determinado mostro e terá que matar uma quantidade <b>X</b> desse mostro para finalizar sua Task. <b>Lembrando que:</b> Você pode escolher apenas 1 task para fazer. Caso queira cancelar a task digite, <u>hi, task, yes</u>.<br> Após finalizar sua task volte ao <b>NPC Grizzly Adams</b> e digite, <u>hi, task, report, yes</u>.<br>Após finalizar uma certa quantidade de tasks, você pode ser promovido de Ranking e poder negociar com o <b>NPC Grizzly Adams</b>. Também poderá pegar outras tasks, até mesmo <b>{Special Tasks}</b>. Para ser promovido diga: <u>hi, promotion, yes</u>.<br><br> <small>(<i>Clique na imagem pra ampliar</i>.)</small></p></div>
																	</td>
																	<td width="20%">
																		<a class="fancybox-media" href="/images/Tasks/grizzy.png">
																			<img src="/images/Tasks/grizzy.png" width="180px" border="1">
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
														<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rt.gif);" ></div>
													</div>
													<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rm.gif);" >
														<div class="TableContentContainer" >
															<table class="TableContent" width="100%">
																<tr style="background-color:#D4C0A1;" >
																	<td><div style="text-align: justify;">
																		<p><b>BOSS ROOM</b>, em determinadas tasks quando você finalizar o report, você recebe acesso para matar um determinado <b>BOSS</b>. Basta ir no teleport "Boss Task" localizado no templo e entrar na sala do boss de sua task. Quando você passar pela parede de energia em um dos bosses, você entrará na sala e o BOSS será sumonado. Caso você saia da sala ou morra antes de ter matado o BOSS, basta voltar para a sala "Boss Task" e entrar no teleport novamente.<br><br><br><br> <small>(<i>Clique na imagem pra ampliar</i>.)</small></p></div>
																	</td>
																	<td width="20%">
																		<a class="fancybox-media" href="/images/Tasks/boss.png">
																			<img src="/images/Tasks/boss.png" width="180px" border="1">
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
														<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rt.gif);" ></div>
													</div>
													<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rm.gif);" >
														<div class="TableContentContainer" >
															<table class="TableContent" width="100%">
																<td><a href="#">{Negociando com Grizzly Adams}</a>
																	<img id="ButtonTrader" onMouseDown="ToggleMaskedText(\'Trader\');" style="cursor:pointer;" src="'.$layout_name.'/images/general/show.gif"/><span id="DisplayTrader" ></span><span id="MaskedTrader" style="visibility:hidden;display:none" ></span><span id="ReadableTrader" style="visibility:hidden;display:none" ><br>
																	<p>Você poderá negociar com o <b>NPC Grizzly Adams</b> após pegar Rank 1, 3 e 4.<br>
																	Vá até o <b>NPC Grizzly Adams</b> e diga: <u>hi, trade</u>.<br>
																	Abaixo poderá ver os itens disponíveis:<br>
																	<font color="darkred"><b>A lista está incompleta - O NPC negocia vários itens. Aguarde por uma atualização no site!</b></font>
																	<div class="TableContentContainer" >
																		<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
																			<tr>
																			<table class="table3 table-offers" style="width: 100%;" cellspacing="2px;">
																				<tr style="background-color:#d4c0a1;">
																					<td width="100"><center><b>#</b></center></td>
																					<td><b>Item Name:</b></td>
																					<td><b>Valor:</b></td>
																					<td><b>NPC Compra/Vende:</b></td>
																					<td><b>Need Rank:</b></td>
																				</tr>
																				<tr style="background-color:#d4c0a1;">
																					<td style="text-align: center; width: 70px; padding: 5px 0px;">
																					<img  src="images/Tasks/Obsidian_Knife.gif"></td>
																					<td>Obsidian Knife</td>
																					<td>10,000 Golds</td>
																					<td><center>Vende</center></td>
																					<td><center>1</center></td>
																				</tr>
																				<tr style="background-color:#d4c0a1;">
																					<td style="text-align: center; width: 70px; padding: 5px 0px;">
																					<img  src="images/Tasks/Antlers.gif"></td>
																					<td>Antllers</td>
																					<td>55 Golds</td>
																					<td><center>Compra</center></td>
																					<td><center>1</center></td>
																				</tr>
																				<tr style="background-color:#d4c0a1;">
																					<td style="text-align: center; width: 70px; padding: 5px 0px;">
																					<img  src="images/Tasks/Bloody_Pincers.gif"></td>
																					<td>Bloody Pincers</td>
																					<td>110 Golds</td>
																					<td><center>Compra</center></td>
																					<td><center>1</center></td>
																				</tr>
																			</tr>
																		</table>
																	</div>								
																</td>
															</tr></span></td></tr>
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
															<table class="TableContent" width="100%">
																<td><a href="#">{Special Tasks}</a>
																	<img id="ButtonEMail" onMouseDown="ToggleMaskedText(\'EMail\');" style="cursor:pointer;" src="'.$layout_name.'/images/general/show.gif"/><span id="DisplayEMail" ></span><span id="MaskedEMail" style="visibility:hidden;display:none" ></span><span id="ReadableEMail" style="visibility:hidden;display:none" ><br>
																	<p>Para pegar uma Special Task, <b><i>você precisa ter Rank 4</i></b>. Você só poderá pegar a Task 1 vez.<br>
																	Vá até o <b>NPC Grizzly Adams</b> e diga: <u>hi, special, yes</u>.<br>
																	Abaixo poderá ver os bosses disponíveis:
																	<div class="TableContentContainer" >
																		<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
																			<tr>
																			<table class="table3 table-offers" style="width: 100%;" cellspacing="2px;">
																				<tr style="background-color:#d4c0a1;">
																					<td width="100"><center><b>#</b></center></td>
																					<td><b>Boss Name:</b></td>
																					<td><b>Required Level:</b></td>
																				</tr>
																				<tr style="background-color:#d4c0a1;">
																					<td style="text-align: center; width: 70px; padding: 5px 0px;">
																					<img  src="images/Tasks/Tiquandas_Revenge.gif"></td>
																					<td>Tiquandas Revenge</td>
																					<td><b>Level:</b> 90+</td>
																				</tr>
																				<tr style="background-color:#d4c0a1;">
																					<td style="text-align: center; width: 70px; padding: 5px 0px;">
																					<img  src="images/Tasks/Demodras.gif"></td>
																					<td>Demodras</td>
																					<td><b>Level:</b> 100+</td>
																				</tr>
																			</tr>									
																		</table>
																	</div>								
																</td>
															</tr></span></td></tr>
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
												<td><br>
													<div class="TableShadowContainerRightTop" >
														<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rt.gif);" ></div>
													</div>
													<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/global/content/table-shadow-rm.gif);" >
														<div class="TableContentContainer" >
															<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
																<tr>
																<table class="table3 table-offers" style="width: 100%;" cellspacing="2px;">
																	<tr style="background-color:#d4c0a1;">
																		<td width="100"><center><b>#</b></center></td>
																		<td><b>Monsters:</b></td>
																		<td><b>You need to kill:</b></td>
																		<td><b>Rewards:</b></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Elf.gif"><br>Elfs</td>
																		<td>Elf<br>Elf Scout<br>Elf Arcanist</td>
																		<td>100 Deaths</td>
																		<td>10.000 of experience<br><b>Points:</b> +1</td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Orc.gif"><br>Orcs</td>
																		<td>Orc<br>Orc Warrior<br>Orc Spearman<br>Orc Rider<br>Orc Shaman<br>Orc Leader<br>Orc Berserker<br>Orc Warlord</td>
																		<td>150 Deaths</td>
																		<td>25.000 of experience<br><b>Points:</b> +1</td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Rotworm.gif"><br>Rotworms</td>
																		<td>Rotworm<br> Carriom Worm</td>
																		<td>300 Deaths</td>
																		<td>30.000 of experience<br><b>Points:</b> +1</td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Cyclops.gif"><br>Cyclops</td>
																		<td>Cyclops<br>Cyclops Smith<br>Cyclops Drone</td>
																		<td>500 Deaths</td>
																		<td>45.000 of experience<br><b>Points:</b> +1</td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Crocodile.gif"><br>Crocodiles</td>
																		<td>Crocodile</td>
																		<td>300 Deaths</td>
																		<td>35.000 of experience<br><b>Points:</b> +1<br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/The_Snapper" target="_blanck">The Snapper</a></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Tarantula.gif"><br>Tarantulas</td>
																		<td>Tarantula</td>
																		<td>300 Deaths</td>
																		<td>35.000 of experience<br><b>Points:</b> +1<br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/Hide" target="_blanck">Hide</a></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Carniphila.gif"><br>Carniphilas</td>
																		<td>Carniphila</td>
																		<td>150 Deaths</td>
																		<td>50.000 of experience<br><b>Points:</b> +1</td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Stone_Golem.gif"><br>Stone Golems</td>
																		<td>Stone Golem</td>
																		<td>200 Deaths</td>
																		<td>50.000 of experience<br><b>Points:</b> +1</td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Mammoth.gif"><br>Mammoths</td>
																		<td>Mammoth</td>
																		<td>300 Deaths</td>
																		<td>40.000 of experience<br><b>Points:</b> +1<br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/The_Bloodtusk" target="_blanck">The Bloodtusk</a></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Ice_Golem.gif"><br>Ice Golems</td>
																		<td>Ice Golem</td>
																		<td>300 Deaths</td>
																		<td>50.000 of experience<br><b>Points:</b> +1<br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/Shardhead" target="_blanck">Shardhead</a></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Quara_Predator_Scout.gif"><br>Quaras Scout</td>
																		<td>Quara Predator Scout<br>Quara Pincher Scout<br>Quara Mantassin Scout<br>Quara Constrictor Scout<br>Quara Hydromancer Scout</td>
																		<td>300 Deaths</td>
																		<td>65.000 of experience<br><b>Points:</b> +1</td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Quara_Hydromancer.gif"><br>Quaras</td>
																		<td>Quara Predator<br>Quara Constrictor<br>Quara Hydromancer<br>Quara Mantassin<br>Quara Pincher</td>
																		<td>300 Deaths</td>
																		<td>50.000 of experience<br><b>Points:</b> +1<br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/Thul" target="_blanck">Thul</a></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Water_Elemental.gif"><br>Water Elementals</td>
																		<td>Water Elemental<br>Massive Water Elemental</td>
																		<td>70 Deaths</td>
																		<td>50.000 of experience<br><b>Points:</b> +1</td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Earth_Elemental.gif"><br>Earth Elementals</td>
																		<td>Earth Elemental<br>Massive Earth Elemental<br>Jagged Earth Elemental<br>Muddy Earth Elemental</td>
																		<td>70 Deaths</td>
																		<td>50.000 of experience<br><b>Points:</b> +1</td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Elephant.gif"><br>Elephants</td>
																		<td>Elephants</td>
																		<td>70 Deaths</td>
																		<td>50.000 of experience<br><b>Points:</b> +1</td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">"
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Killer_Caiman.gif"><br>Killer Caimans</td>
																		<td>Killer Caiman</td>
																		<td>200 Deaths</td>
																		<td>60.000 of experience<br><b>Points:</b> +1</td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">"
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Mutated_Rat.gif"><br>Mutated Rats</td>
																		<td>Mutated Rat</td>
																		<td>200 Deaths</td>
																		<td>40.000 of experience<br><b>Points:</b> +1<br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/Esmeralda" target="_blanck">Esmeralda</a></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">"
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Giant_Spider.gif"><br>Giant Spiders</td>
																		<td>Giant Spider</td>
																		<td>500 Deaths</td>
																		<td>60.000 of experience<br><b>Points:</b> +1<br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/The_Old_Widow" target="_blanck">The Old Widow</a></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">"
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Hydra.gif"><br>Hydras</td>
																		<td>Hydra</td>
																		<td>2000 Deaths</td>
																		<td>120.000 of experience<br><b>Points:</b> +2<br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/The_Many" target="_blanck">The Many</a></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">"
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Sea_Serpent.gif"><br>Sea Serpents</td>
																		<td>Sea Serpent</td>
																		<td>2000 Deaths</td>
																		<td>120.000 of experience<br><b>Points:</b> +2<br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/Leviathan" target="_blanck">Leviathan</a></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">"
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Behemoth.gif"><br>Behemoths</td>
																		<td>Behemoth</td>
																		<td>2000 Deaths</td>
																		<td>135.000 of experience<br><b>Points:</b> +2<br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/Stonecracker" target="_blanck">Stonecracker</a></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">"
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Serpent_Spawn.gif"><br>Serpents Spawn</td>
																		<td>Serpent Spawn</td>
																		<td>1500 Deaths</td>
																		<td>120.000 of experience<br><b>Points:</b> +2<br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/The_Noxious_Spawn" target="_blanck">The Noxious Spawn</a></td>
																	<tr style="background-color:#d4c0a1;">"
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Pirate.gif"><br>Pirates</td>
																		<td>Pirate Buccaneer<br>Pirate Corsair<br>Pirate Cutthroat<br>Pirate Ghost<br>Pirate Marauder<br>Pirate Skeleton</td>
																		<td>1000 Deaths</td>
																		<td>75.000 of experience<br><b>Points:</b> +2<br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/Brutus_Bloodbeard" target="_blanck">Brutus Bloodbeard</a><br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/Deadeye_Devious" target="_blanck">Deadeye Devious</a><br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/Lethal_Lissy" target="_blanck">Lethal Lissy</a><br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/wiki/Ron_The_Ripper" target="_blanck">Ron The Ripper</a></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">"
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Minotaur.gif"><br>Minotaurs</td>
																		<td>Minotaur<br>Minotaur Mage<br>Minotaur Guard<br>Minotaur Archer</td>
																		<td>4000 Deaths</td>
																		<td>75.000 of experience<br><b>Points:</b> +2<br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/The_Horned_Fox" target="_blanck">The Horned Fox</a></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">"
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Necromancer.gif"><br>Necromancers</td>
																		<td>Priestess<br>Necromancer</td>
																		<td>2000 Deaths</td>
																		<td>150.000 of experience<br><b>Points:</b> +2<br><b>BOSS:</b> <a href="http://www.tibiawiki.com.br/Necropharus" target="_blanck">Necropharus</a></td>
																	</tr>
																	<tr style="background-color:#d4c0a1;">"
																		<td style="text-align: center; width: 70px; padding: 5px 0px;">
																		<img  src="images/Tasks/Demon.gif"><br>Demons</td>
																		<td>Demon</td>
																		<td>6666 Deaths</td>
																		<td>???.??? of experience<br>ITEM: <a href="#" target="_blanck">Holy Icon (5 charges)</a><br><font color="darkred"><small>(<i>This task unlock access to Demon Oak.</i>)</small></font></td>
																	</tr>														
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
</div>
	';
?>