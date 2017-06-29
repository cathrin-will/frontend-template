<?php include("inc/head.php"); ?>
<body>
	<main>
		<div class="o-wrapper">
			<h1>Path converter</h1>
			<h2>Windows</h2>
			<p>e.g. W:\Client\3. Live Jobs\Client Home\123456 - Client UK Campaign\Studio\Phase 2\6. Client UK Website\DR1\</p>
			<h2>Mac</h2>
			<p>smb://bas1/5_Client Accounts/Client/3. Live Jobs/Client Home/123456 - Client UK Campaign/Studio/Phase 2/6. Client UK Website/DR1/</p>
			<div class="o-layout">
				<div class="o-layout__item u-1/1">
					<div class="o-layout u-mb">
						<div class="o-layout__item  text--center"><label for="windows-path">Windows path</label></div>
						<div class="o-layout__item"><input type="text" id="windows-path" class="u-mb text--small" style="font-size: 1rem"></div>
						<div class="o-layout__item text--center"><label for="mac-path">Mac path</label></div>
						<div class="o-layout__item"><input type="text" id="mac-path" class="u-mb text--small" style="font-size: 1rem"></div>
						<div class="o-layout__item u-1/2@tablet text--center"><a href="#" class="btn" id="output-path-mac" target="_blank">Open link in finder (Mac)</a></div>
						<div class="o-layout__item u-1/2@tablet text--center"><!-- <a href="#" class="btn" id="output-path-windows" target="_blank">Open link in Explorer (Windows)</a> --></div>
					</div>
					<p>Copy and paste for emails</p>
					<div style="font-size: 16px;">
						<p>Windows link: <span id="copy-windows"></span>
						<br>
						Mac Link: <a href="" id="copy-mac"></a></p>
					</div>
				</div>
			</div>
		</div><!-- /.o-wrapper -->
	</main>
	<?php include("inc/footer.php"); include("inc/cookie.php"); include("inc/scripts.php"); ?>
	<script>
		var windowsPath = $('#windows-path');
		var macPath = $('#mac-path');
		var outputPathMac = $('#output-path-mac');
		var outputPathWindows = $('#output-path-windows');
		var copyWindows = $('#copy-windows');
		var copyMac = $('#copy-mac');

		windowsPath.on('change keyup', function(){
			var pathVal = windowsPath.val()
			pathVal = pathVal.replace(/^\s/g, ''); // start with space deletion
			pathVal = pathVal.replace(/^[a-zA-Z]:\\/g, 'smb://bas1/5_Client Accounts/'); // change any dirve starts (10.2.0.15)
			pathVal = pathVal.replace(/^(file:)/g, ''); // starting with file
			pathVal = pathVal.replace(/^(\\)*/g, ''); // starting with slashes
			pathVal = pathVal.replace(/^(bas1|BAS1)/g, 'smb://bas1'); //starting with bas1 || BAS1
			pathVal = pathVal.replace(/\\/g, '/'); // change slash direction
			pathVal = pathVal.replace(/^(5_Client Accounts)/g, 'smb://bas1/5_Client Accounts/');  //if it starts with client
			pathVal = pathVal.replace(/^(Client Accounts)/g, 'smb://bas1/5_Client Accounts/');  //if it starts with client
			pathVal = pathVal.replace(/^(BAS1 Client Accounts)/g, 'smb://bas1/5_Client Accounts/'); // if starts with bas and client
			pathVal = pathVal.replace(/\s$/g, ''); // traling white space
			// make the visual copy paste links
			copyMac.text(pathVal);
			copyWindows.text(windowsPath.val().replace(/%20/g, '\s'));

			macPath.val(pathVal) // upate visual input
			// ready for linking
			pathVal = pathVal.replace(/\s/g, '%20'); // make spaces

			outputPathMac.attr('href',pathVal);
			copyMac.attr('href',pathVal);
			copyWindows.attr('href',windowsPath.val());

		});

		macPath.on('change keyup', function(){
			var pathVal = macPath.val()
			// pathVal = pathVal.replace(/W/g, 'smb');
			pathVal = pathVal.replace(/smb:\/\/bas1\/5_Client Accounts\//g, 'file://///BAS1/5_Client Accounts/'); // change start 10.2.0.15
			pathVal = pathVal.replace(/\//g, '\\'); // change slash direction
			//pathVal = pathVal.replace(/^(\/\/bas1\/)/g, 'smb://bas1/'); // bad starts
			//pathVal = pathVal.replace(/^(\/\/BAS1\/)/g, 'smb://bas1/'); // bad starts
			//pathVal = pathVal.replace(/^(Client Accounts)/g, 'smb://bas1/5_Client Accounts/'); // bad starts
			//pathVal = pathVal.replace(/^(BAS1 Client Accounts)/g, 'smb://bas1/5_Client Accounts/'); // bad starts
			//pathVal = pathVal.replace(/\s/$, ''); // bad endss
			copyWindows.text(pathVal);
			copyMac.text(macPath.val().replace(/%20/g, '\s'));
			windowsPath.val(pathVal) // upate visual input
			pathVal = pathVal.replace(/\s/g, '%20'); // make spaces

			outputPathWindows.attr('href',pathVal);
			copyWindows.attr('href',pathVal);
			copyMac.attr('href',macPath.val().replace(/\s/g, '%20'));
		});
	</script>
</body>
</html>
