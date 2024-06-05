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
																		<td><div style="text-align: justify;"><b>Utilizamos o Discord para:</b><br>Dúvidas, sugestões, bate-papos e informativos.<br><br><iframe src="https://discordapp.com/widget?id=693332137683845201&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe><br><br><a href="https://discord.gg/AedM8zA">Para ter acesso ao nosso grupo do discord, clique aqui.</a></div></td>
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
<!DOCTYPE html>
<html>
<head>
	<title>Barra de Doações</title>
	<style>
		#donation-bar {
			background-color: #ddd;
			height: 30px;
			position: relative;
			margin: 20px auto;
			border-radius: 15px;
			overflow: hidden;
		}
		
		#donation-bar-fill {
			background-color: #f00;
			height: 100%;
			position: absolute;
			left: 0;
			top: 0;
			transition: width 0.5s;
			border-radius: 15px;
			color: white;
			text-align: center;
			line-height: 30px;
			box-shadow: 2px 2px 2px #888888;
		}

		#donation-bar-title {
			font-size: 24px;
			font-weight: bold;
			color: #f00;
			text-shadow: 2px 2px #ccc;
			text-align: center;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<div id="donation-bar-title">Barra de Doações!</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Barra de Doações</title>
	<style>
		.barra-doacoes {
			background-color: #ddd;
			height: 30px;
			position: relative;
			margin: 20px auto;
			border-radius: 15px;
			overflow: hidden;
		}
		
		.barra-doacoes-fundo {
			background-color: #f00;
			height: 100%;
			position: absolute;
			left: 0;
			top: 0;
			transition: width 0.5s;
			border-radius: 15px;
		}

		.barra-doacoes-texto {
			color: #000;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-weight: bold;
			text-shadow: 1px 1px 2px #000;
			z-index: 2;
		}
	</style>
</head>
<body>
	<div class="barra-doacoes">
		<div class="barra-doacoes-fundo" style="width: 10%;">
			<div class="barra-doacoes-texto">
				2%
			</div>
		</div>
	</div>

<div style="display: flex; align-items: center;">
   <div style="margin-right: 20px;">
      <img src="https://i.imgur.com/4coKycs.png" alt="Imagem de uma caixa de doação" width="200">
   </div>
   <div>
      <p>A barra de doações exibe o valor arrecadado para pagar o host do servidor por mais um ano. Com grande satisfação, informamos que já atingimos a meta e arrecadamos o suficiente para cobrir os custos do host por um ano inteiro! A porcentagem atualmente exibida representa o valor que precisamos arrecadar para o próximo ano, que será em 2024.</p>
   </div>
</div>
</body>
</html>





