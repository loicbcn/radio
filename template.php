<!DOCTYPE >
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Mes radios</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="container">
			<?php foreach ($radios as $k=>$r) { ?>
			<div class="tabul">
				<div class="tabulcol logo"><?php echo $r[0];?></div>
				<div class="tabulcol player">
					<audio id="a_<?php echo $k;?>" controls preload="none" onpause="stopme('a_<?php echo $k;?>')" src="<?php echo $r[1]; ?>" type="audio/mpeg">
					</audio>
					<a class="secourlink" href="<?php echo $r[1]; ?>">Si le player ne fonctionne pas, cliquer ici...</a>
				</div>
			</div>
			<?php } ?>
		</div>
		<footer>
			<div class="infooter">
			Merci à Radio France pour le partage de ses flux.
			</div>
		</footer>
	<script>
		function stopme(who){
			var elem = document.getElementById(who);
			var oldSrc = elem.src;
			console.log(oldSrc);
			elem.src = oldSrc;
		}
	</script>
	</body>
</html>