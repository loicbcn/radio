<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Mes radios</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
		html {
			font-size: 62.5%;
			font-size: calc(1em * 0.625); 
		}
		body {
			margin: 0;
			height: 100%;
			background: yellow;
			display: flex;
			flex-direction: column;
			font-family: Arial, Helvetica, "Liberation Sans", FreeSans, sans-serif;
			font-size:1.4rem;
		}
		header{ 
			padding: 15px;
			background: #333;
		}
		h1{ margin: 0; padding:0; color:#ffffff; font-size: 2.4rem; }
		#main {
		    flex: 1;
		    overflow-y: auto;
		    background: #e1e1e1;
		    display: flex;
		    flex-direction: column;
		}
		#content {
		    flex: 1 0 auto;
		    padding: 15px;
		}
		footer {
		    flex: none;
		    color: #fff;
		    background: #333;
		    padding:15px;
		}
		.oneradio{ padding: 10px 0; border-bottom: 2px solid #ffffff;}
		.oneradio:last-child{ border-bottom: none; }
		.secourlink{ display: inline-block; padding:5px; margin:5px 0; color: #000; background:#4078c0; color:#ffffff; border-radius: 4px; text-decoration: none;}
		.name{ margin: 0 0 10px; }
		footer a{ display:inline-block; padding:0 0 2px; border-bottom:2px solid #fff; color:#4078c0; text-decoration: none; }
		</style>
	</head>
	<body>
		<header><h1>Pour ceux qui n'ont plus de place sur leur téléphone.</h1></header>
		<div id="main">
			<div id="content">
				<?php foreach ($radios as $k=>$r) { ?>
				<div class="oneradio">
					<div class="name"><?php echo $r[0];?></div>
					<div class="player">
						<audio id="a_<?php echo $k;?>" controls preload="none" onpause="stopme('a_<?php echo $k;?>')" src="<?php echo $r[1]; ?>"></audio>
						<div>
						<a class="secourlink" href="<?php echo $r[1]; ?>">Si le player ne fonctionne pas, cliquer ici...</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<footer>
			<div class="infooter">
			Merci à <a href="http://www.radiofrance.fr/">Radio France</a> pour le partage de ses flux.
			</div>
		</footer>
	<script>
		function stopme(who){
			var elem = document.getElementById(who);
			var oldSrc = elem.src;
			elem.src = oldSrc;
		}
	</script>
	</body>
</html>