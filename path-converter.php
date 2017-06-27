<?php include("inc/head.php"); ?>
<body>
	<main>
		<div class="o-wrapper">
			<h1>Path converter</h1>
			<p>e.g. W:\Honeywell\3. Live Jobs\Honeywell Home\121464 - Honeywell UK_Lyric & Evo Campaign\Studio\Phase 2\6. Honeywell UK Website\DR1\</p>
			<div class="o-layout">
				<div class="o-layout__item u-1/1">
					<div class="o-layout">
						<div class="o-layout__item  text--center"><label for="windows-path">Windows path</label></div>
						<div class="o-layout__item"><input type="text" id="windows-path" class="u-mb text--small"></div>
						<div class="o-layout__item text--center"><label for="mac-path">Mac path</label></div>
						<div class="o-layout__item"><input type="text" id="mac-path" class="u-mb text--small"></div>
						<div class="o-layout__item text--center"><a href="#" class="btn" id="output-path" target="_blank">Open link in finder</a></div>
					</div>
				</div>
			</div>
		</div><!-- /.o-wrapper -->
	</main>
	<?php include("inc/footer.php"); include("inc/cookie.php"); include("inc/scripts.php"); ?>
	<script>
		var windowsPath = $('#windows-path');
		var macPath = $('#mac-path');
		var outputPath = $('#output-path');

		windowsPath.on('change keyup', function(){
			var pathVal = windowsPath.val()
			// pathVal = pathVal.replace(/W/g, 'smb');
			pathVal = pathVal.replace(/W:\\/g, 'smb://bas1/5_Client Accounts/'); // change start 10.2.0.15
			pathVal = pathVal.replace(/Y:\\/g, 'smb://bas1/5_Client Accounts/'); // change start
			pathVal = pathVal.replace(/Z:\\/g, 'smb://bas1/5_Client Accounts/'); // change start
			pathVal = pathVal.replace(/\\/g, '/'); // change slash direction
			pathVal = pathVal.replace(/^(\/\/bas1\/)/g, 'smb://bas1/'); // bad starts
			pathVal = pathVal.replace(/^(\/\/BAS1\/)/g, 'smb://bas1/'); // bad starts
			pathVal = pathVal.replace(/^(Client Accounts)/g, 'smb://bas1/5_Client Accounts/'); // bad starts
			pathVal = pathVal.replace(/^(BAS1 Client Accounts)/g, 'smb://bas1/5_Client Accounts/'); // bad starts
			//pathVal = pathVal.replace(/\s/$, ''); // bad endss
			macPath.val(pathVal) // upate visual input
			pathVal = pathVal.replace(/\s/g, '%20'); // make spaces
			outputPath.attr('href',pathVal);
		});
	</script>
</body>
</html>
