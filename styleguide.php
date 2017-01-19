<?php include("inc/head.php"); ?>
<style>
	.o-wrapper:nth-child(odd) {
		border-bottom: 1px solid #ccc;
	}
	code {
		color: #000;
	}
</style>
<body>
	<?php include("inc/header.php"); ?>
<div class="o-wrapper">
	<h1 class="text--center">XXX styleguide</h1>
	<p class="lede">This is the  <strong>XXX</strong> style guide, detailing the components and variables that make up the entirety of the site. They are designed to be as generic (and therefore re-usable) as possible.</p>
	<p> The site is responsive and built using <a href="http://sass-lang.com/">SASS</a> and the <a href="https://github.com/inuitcss/inuitcss">Inuit Beta framework</a> to create modular components with <a href="http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/">BEM</a> syntax.</p>
	<p>All variables are defined in: <code>_settings.global.scss</code>.</p>
</div><!-- /.wrapper -->

<div class="o-wrapper"  id="sg-layout">
	<h2 class="text--center">Layout structure</h2>
		<p>The Inuit layout framework has classes based on ratios such as <code>.u-1/2</code> or <code>.u-1/3</code>, allowing for flexible sizes and nesting where required. the amount of columns can be turned on or off. The layout is mobile-first, so unless a width class is declared, the layout item shall be full width (same as specifying the class of <code>.u-1/1</code>). to target specific media queries add @ and the media item in question, so for instance <code>.u-1/2@desk</code> or <code>.u-1/3@retina</code> or <code>.u-1/5@xl</code></p>
		<p>The breakpoints can be custom defined and added or removed, for this project they are:</p>
			<ul>
				<li>palm:		1px,</li>
				<li>tablet:		768px,</li>
				<li>lap: 		1024px,</li>
				<li>desk:		1200px</li>
			</ul>
		<p>The spacing of layout items (and much more throughtout the site) is based on the variable <code>$global-spacing-unit</code>, for this project it is 24px.</p>

		<div class="o-layout text--center">
			<div class="o-layout__item u-1/4 u-1/2@lap u-1/4@desk">
				<p class="bg--ash u-mb-"> 1/4</p>
			</div>
			<div class="o-layout__item u-1/4 u-1/2@lap u-1/4@desk">
				<p class="bg--ash u-mb-"> 1/4</p>
			</div>
			<div class="o-layout__item u-1/4 u-1/2@lap u-1/4@desk">
				<p class="bg--ash u-mb-"> 1/4</p>
			</div>
			<div class="o-layout__item u-1/4 u-1/2@lap u-1/4@desk">
				<p class="bg--ash u-mb-"> 1/4</p>
			</div>

			<div class="o-layout__item u-1/4 u-1/2@lap u-1/3@desk">
				<p class="bg--ash u-mb-"> 1/3</p>
			</div>
			<div class="o-layout__item u-1/4 u-1/2@lap u-1/3@desk">
				<p class="bg--ash u-mb-"> 1/3</p>
			</div>
			<div class="o-layout__item u-1/4 u-1/2@lap u-1/3@desk">
				<p class="bg--ash u-mb-"> 1/3</p>
			</div>

			<div class="o-layout__item u-1/4 u-1/2@lap  u-1/2@desk">
				<p class="bg--ash u-mb-"> 1/2</p>
			</div>
			<div class="o-layout__item u-1/4 u-1/2@lap  u-1/2@desk">
				<p class="bg--ash u-mb-"> 1/2</p>
			</div>

			<div class="o-layout__item u-1/1 u-mb">
				<p class="bg--ash u-mb-"> 1</p>
			</div>
		</div><!-- /layout -->
</div><!-- /.wrapper -->
<div class="o-wrapper"  id="sg-helper">
	<h2 class="text--center">Helper classes</h2>
		<p> There are a wide range of helper classes, which are set in <code>_settings.global.scss</code> and  <code>utilities.helper.scss</code></p>
		<div class="o-layout">
			<div class="o-layout__item u-1/2@lap  u-1/2@desk">
				<h3>Padding and margin</h3>
				<p>(m|p)(t|r|b|l|h|v)(-|+|0) {}` = margin/padding top/right/bottom/left/horizontal/vertical less/more/none</p>
				<strong>E.g.</strong>
				<p><code>.u-mb</code> (unit-margin bottom)</p>
				<p><code>.u-pt0</code> (unit-padding top zero)</p>
			</div>
			<div class="o-layout__item u-1/2@lap  u-1/2@desk">
				<h3>Hidden</h3>
				<p>A class of <code>visuallyhidden</code> can be used to hide elements visually but still visible for screen readers. And a class of <code>hidden</code> hides it for both visual and screen readers. Both come with media-query abilites. </p>
				<strong>E.g</strong>
				<p><code>hidden@palm</code> to hide for mobiles</p>
			</div>
		</div>
</div><!-- /.wrapper -->
<div class="o-wrapper" id="sg-typography">
	<h2 class="text--center">Typography  (/objects /_typography.scss)</h2>
		<div class="o-layout">
			<div class="o-layout__item  u-1/2@desk">
				<h3 class="text--red">Headings</h3>
				<p>Standard Headings (H1-H6).</p>
				<p>Sensible default margins are included by default, but can be overwritten using Inuit's built-in helper classes.</p>
				<h1>h1 .alpha 30px - Helvetica </h1>
				<h2>h2 .beta 28px - Helvetica </h2>
				<h3>h3 .gamma 26px – Helvetica </h3>
				<h4>h4 .delta 24px – Helvetica </h4>
				<h5>h5 .echo 22px - Helvetica  </h5>
				<h6>h6 .zeta 20px - Helvetica </h6>

			</div>
			<div class="o-layout__item  u-1/2@desk">
				<h3 class="text--red">Typography helper classes</h3>
				<ul>
					<li><p class="caps">.caps</p></li>
					<li><p class="text--right">.text--right</p></li>
					<li><p class="text--justify">.text--justify -  need more words to show this working</p></li>
					<li><p class="text--center">.text--center</p></li>
					<li><p class="text--blue">.text--blue</p></li>
					<li><p class="text--red">.text--red</p></li>
					<li><p class="text--white  bg--charcoal u-p-">.text--white</p></li>
				</ul>
				<p>16px Helvetica $charcoal <strong>bold text</strong> Lorem ipsum dolor sit amet, <em>italic text</em> adipisicing elit. Obcaecati, adipisci placeam.</p>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, adipisci placeat deleniti laboriosam sapiente in minus culpa eius omnis distinctio recusandae alias dolores et vel atque amet molestiae esse dolorem.</p>
			</div>
		</div><!-- /layout -->
</div><!-- /.wrapper -->
<div class="o-wrapper"  id="sg-colors">
	<h2 class="text--center">Colour Palette (_settings.global.scss)</h2>
		<p>The official XXX colours</p>
		<p> In addition the primary colours exist as helper classes <code>.bg--[colour name]</code></p>
		<!-- <h3>Primary Colours</h3> -->
		<div class="o-layout">
		<!-- 	<div class="o-layout__item  u-1/4@lap u-1/4@desk  u-1/2">
				<div class="bg--default  u-mb" style="padding-top: 40%;">
					<div class="u-p- text--center" style="background: rgba(255,255,255,.5)">
						<p class="u-mv0">$default</p>
						<p class="u-mv0">######</p>
					</div>
				</div>
			</div> -->
			<div class="o-layout__item">
				<h3>Greys </h3>
				<p class="u-pb">Grey colours used throughout the site</p>
			</div>
			<div class="o-layout__item  u-1/4@lap u-1/4@desk  u-1/2">
				<div class="bg--ash  u-mb" style="padding-top: 40%;">
					<div class="u-p- text--center" style="background: rgba(255,255,255,.5)">
						<p class="u-mv0">$ash</p>
					</div>
				</div>
			</div>
			<div class="o-layout__item  u-1/4@lap u-1/4@desk  u-1/2">
				<div class="bg--light-grey  u-mb" style="padding-top: 40%;">
					<div class="u-p- text--center" style="background: rgba(255,255,255,.5)">
						<p class="u-mv0">$light-grey</p>
					</div>
				</div>
			</div>
			<div class="o-layout__item  u-1/4@lap u-1/4@desk  u-1/2">
				<div class="bg--mid-grey  u-mb" style="padding-top: 40%;">
					<div class="u-p- text--center" style="background: rgba(255,255,255,.5)">
						<p class="u-mv0">$mid-grey</p>
					</div>
				</div>
			</div>
			<div class="o-layout__item  u-1/4@lap u-1/4@desk  u-1/2">
				<div class="bg--dark-grey  u-mb" style="padding-top: 40%;">
					<div class="u-p- text--center" style="background: rgba(255,255,255,.5)">
						<p class="u-mv0">$dark-grey</p>
					</div>
				</div>
			</div>
			<div class="o-layout__item  u-1/4@lap u-1/4@desk  u-1/2">
				<div class="bg--charcoal  u-mb" style="padding-top: 40%;">
					<div class="u-p- text--center" style="background: rgba(255,255,255,.5)">
						<p class="u-mv0">$charcoal</p>
					</div>
				</div>
			</div>
		</div><!-- /layout -->
</div><!-- /.wrapper -->
<div class="o-wrapper" id="sg-buttons">
		<h2 class="text--center">Buttons (/objects/ _buttons.scss)</h2>
		<p>Class of <code>.btn</code> can be added to anchor, span or button elements, including inputs however they will not support having an icon inside.</p>
		<p> Always start with a class of <code>.btn</code> then add helper classes such as <code>.btn--red, .btn--grey, .btn--sm, .btn--lg</code> adding a class of <code>.u-1/1</code> will make a button full length. The one exception is <code>.btn-bare</code> which should not be used with any other btn classes.</p>
		<div class="o-layout">
			<div class="o-layout__item  u-1/1 u-1/2@lap  u-1/4@desk  text--center">
				<h4>.btn </h4>
				<a href="#" class="btn">button</a>
			</div>
			<div class="o-layout__item  u-1/1 u-1/2@lap  u-1/4@desk  text--center">
				<h4>.btn.btn--blue </h4>
				<a href="#" class="btn btn--blue">button</a>
			</div>
			<div class="o-layout__item  u-1/1 u-1/2@lap  u-1/4@desk  text--center">
				<h4>.btn > span.icon </h4>
					<a href="#" class="btn"> button <span class="icon-caret-right"></span></a>
			</div>
			<div class="o-layout__item  u-1/1 u-1/2@lap  u-1/4@desk  text--center">
				<h4>.btn.btn--sm </h4>
				<a href="#" class="btn  btn--sm">button</a>
			</div>
			<div class="o-layout__item  u-1/1 u-1/2@lap  u-1/4@desk  text--center">
				<h4>.btn.btn--lg </h4>
				<a href="#" class="btn  btn--lg">button</a>
			</div>
			<div class="o-layout__item  u-1/1 u-1/2@lap  u-1/2@desk  text--center">
				<h4>.btn.u-1/1 </h4>
				<a href="#" class="btn  u-1/1">button</a>
			</div>
			<div class="o-layout__item  u-1/1 u-1/2@lap  u-1/4@desk  text--center">
				<h4>button.btn-bare </h4>
				<button class=" btn-bare">I'm a button but you can't tell</button>
			</div><!--
			-->
		</div><!-- /layout -->
</div><!-- /.wrapper -->
<div class="o-wrapper" id="sg-icons">
		<h2 class="text--center">Icons (/objects/ _icons.scss)</h2>
		<p>We make use of <a href="https://icomoon.io/app/#/select">icomoon</a> for icons, when they need to be changed/added/removed go the icomoon and import the <code>selection.json</code> file to see whats currently being used, after you're done don't forget to update the json file.</p>
		<div class="o-layout">
			<div class="o-layout__item u-1/4@lap u-1/4@desk  u-1/2  u-mb">
				<span class="icon-caret-right"></span> <span> .icon-caret-right</span>
			</div>
			<div class="o-layout__item u-1/4@lap u-1/4@desk  u-1/2  u-mb">
				<span class="icon-caret-left"></span> <span> .icon-caret-left</span>
			</div>
			<div class="o-layout__item u-1/4@lap u-1/4@desk  u-1/2  u-mb">
				<span class="icon-caret-up"></span> <span> .icon-caret-up</span>
			</div>
			<div class="o-layout__item u-1/4@lap u-1/4@desk  u-1/2  u-mb">
				<span class="icon-caret-down"></span> <span> .icon-caret-down</span>
			</div>
			<div class="o-layout__item u-1/4@lap u-1/4@desk  u-1/2  u-mb">
				<span class="icon-plus"></span> <span> .icon-plus</span>
			</div>
			<div class="o-layout__item u-1/4@lap u-1/4@desk  u-1/2  u-mb">
				<span class="icon-minus"></span> <span> .icon-minus</span>
			</div>
			<div class="o-layout__item u-1/4@lap u-1/4@desk  u-1/2  u-mb">
				<span class="icon-cancel-circle"></span> <span> .icon-cancel-circle</span>
			</div>
			<div class="o-layout__item u-1/4@lap u-1/4@desk  u-1/2  u-mb">
				<span class="icon-cross"></span> <span> .icon-cross</span>
			</div>
			<div class="o-layout__item u-1/4@lap u-1/4@desk  u-1/2  u-mb">
				<span class="icon-checkmark"></span> <span> .icon-checkmark</span>
			</div>
		</div><!-- /layout -->
</div><!-- /.wrapper -->
<div class="o-wrapper"  id="sg-lists">
		<h2 class="text--center">Lists (/objects/ _lists.scss)</h2>
		<div class="o-layout">
			<div class="o-layout__item u-1/2@lap u-1/4@desk">
				<p><strong><code>list--bare .list--inline</code></strong></p>
				<ul class="list--bare  list--inline">
					<li>List item</li>
					<li>List item</li>
					<li>List item</li>
				</ul>
			</div>
			<div class="o-layout__item u-1/2@lap u-1/4@desk">
				<p><strong><code>.list--bare</code></strong></p>
				<ul class="list--bare">
					<li>List item</li>
					<li>List item</li>
					<li>List item</li>
				</ul>
			</div>
			<div class="o-layout__item u-1/2@lap u-1/4@desk">
				<p><strong><code>ul</code></strong></p>
				<ul>
					<li>one</li>
					<li>two</li>
					<li>three</li>
				</ul>
			</div>
			<div class="o-layout__item u-1/2@lap u-1/4@desk">
				<p><strong><code>ol</code></strong></p>
				<ol>
					<li>one</li>
					<li>two</li>
					<li>three</li>
				</ol>
			</div>
		</div><!-- /layout -->
</div><!-- /.wrapper -->
<div class="o-wrapper"  id="sg-table">
		<h2 class="text--center">Tables (/objects/ table.scss)</h2>
		<h3>Standard Table: <code>table</code></h3>
		<table class="table">
			<thead>
				<tr>
					<th>heading</th>
					<th>heading</th>
					<th>heading</th>
					<th>heading</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>table cell</td>
					<td>table cell</td>
					<td>table cell</td>
					<td>table cell</td>
				</tr>
				<tr>
					<td>table cell</td>
					<td>table cell</td>
					<td>table cell</td>
					<td>table cell</td>
				</tr>
				<tr>
					<td>table cell</td>
					<td>table cell</td>
					<td>table cell</td>
					<td>table cell</td>
				</tr>
			</tbody>
		</table>
</div><!-- /.wrapper -->

<div class="o-wrapper"  id="sg-images">
		<h2 class="text--center">images (/objects/ images.scss)</h2>
		<p>some examples showing images next to and around text depending on position</p>
		<code> img.img--left/.img--right/.center + p</code>
			<div>
				<img src="http://placehold.it/350x150" alt="" class="img--left">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit deserunt qui nam aspernatur cupiditate dignissimos vel animi ratione eius. Quos consequuntur iure facere ex ipsum sequi, sunt vel eos reiciendis.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit deserunt qui nam aspernatur cupiditate dignissimos vel animi ratione eius. Quos consequuntur iure facere ex ipsum sequi, sunt vel eos reiciendis.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit deserunt qui nam aspernatur cupiditate dignissimos vel animi ratione eius. Quos consequuntur iure facere ex ipsum sequi, sunt vel eos reiciendis.</p>
			</div>
			<div>
				<img src="http://placehold.it/350x150" alt="" class="img--right">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit deserunt qui nam aspernatur cupiditate dignissimos vel animi ratione eius. Quos consequuntur iure facere ex ipsum sequi, sunt vel eos reiciendis.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae est facere enim ea reiciendis nemo porro, veritatis, ratione nostrum! Necessitatibus ad consequatur at nemo expedita voluptatum. Adipisci aspernatur aperiam dolores.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit deserunt qui nam aspernatur cupiditate dignissimos vel animi ratione eius. Quos consequuntur iure facere ex ipsum sequi, sunt vel eos reiciendis.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati iusto quos, maiores qui ipsam omnis accusamus perspiciatis totam, neque doloribus doloremque error laboriosam eius sunt ducimus porro suscipit voluptas consequuntur.</p>
			</div>
			<div>
				<img src="http://placehold.it/350x150" alt="" class="center">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit deserunt qui nam aspernatur cupiditate dignissimos vel animi ratione eius. Quos consequuntur iure facere ex ipsum sequi, sunt vel eos reiciendis.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit deserunt qui nam aspernatur cupiditate dignissimos vel animi ratione eius. Quos consequuntur iure facere ex ipsum sequi, sunt vel eos reiciendis.</p>
			</div>
</div><!-- /.wrapper -->
<div class="o-wrapper"  id="sg-forms">
		<h2 class="text--center">form elements (/objects/ forms.scss)</h2>
			<form action="#" class="form">
				<div class="o-layout">
					<div class="o-layout__item u-mb- u-1/4@lap u-1/1">
						<label for="select">Label Select</label>
					</div>
					<div class="o-layout__item u-mb- u-3/4@lap u-1/1">
						<select name="select" id="select" class="u-1/2@lap">
							<option value="0">Example</option>
							<option value="1">1</option>
							<option value="text">text</option>
						</select>
					</div>
					<div class="o-layout__item u-mb- u-1/4@lap u-1/1">
						<label for="input">Label input</label>
					</div>
					<div class="o-layout__item u-mb- u-3/4@lap u-1/1">
						<input type="text" name="input" id="input" placeholder="placeholder" class="u-1/2@lap">
					</div>
					<div class="o-layout__item u-mb- u-1/4@lap u-1/1">
						<label for="textarea">Label textarea</label>
					</div>
					<div class="o-layout__item u-mb- u-3/4@lap u-1/1">
						<textarea name="textarea" id="textarea" placeholder="placeholder" class="u-1/2@lap"></textarea>
					</div>
				</div>
			</form>
</div><!-- /.wrapper -->

	<?php include("inc/footer.php");  include("inc/cookie.php");  include("inc/scripts.php"); ?>
</body>
</html>
