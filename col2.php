<!-- audio player begin -->
		<div id="jplayer"></div>
		<div class="jp-audio">
		<h2>Temas Minimalistas</h2>
		<div class="jp-type-single">
			<div id="jp_interface_1" class="jp-interface">
			<ul class="jp-controls">
				<li><a href="#" class="jp-play"></a></li>
				<li><a href="#" class="jp-pause"></a></li>
				<li><a href="#" class="jp-prev">Anterior</a></li>
				<li><a href="#" class="jp-next">Siguiente</a></li>
				<li><a href="audio.php" class="jp-more-songs">Escuchar el CD Completo</a></li>
			</ul>
			<div class="jp-progress">
				<div class="jp-seek-bar">
				<div class="jp-play-bar"></div>
				</div>
			</div>
			<div class="jp-title"></div>
			</div>
		</div>
		</div>
		<!-- audio player end -->
		<h2 class="pl">Proximas Fechas</h2>
		<div class="table-border">
		<table class="dates" cellpadding="0" cellspacing="0" border="0">
			<tr class="thead">
			<td class="col1">Fecha y Horario </td>
			<td class="col2">Lugar</td>
			<td class="col3">Informacion</td>
			</tr>
			<tr class="even">
			<?php include_once("/fechas/mfm2014.php"); ?>
			</tr>
		
		</table>
		</div>