<?php include("inc/head.php"); ?>
<body>
	<?php include("inc/header.php"); ?>
<div class="wrapper">
	<div class="layout-wrapper">
		<h1 class="text--center">XXX styleguide</h1>
		<p class="lede">This is the  <strong>XXX</strong> style guide, detailing the components and variables that make up the entirety of the site. They are designed to be as generic (and therefore re-usable) as possible.</p>
		<p> The site is responsive and built using <a href="http://sass-lang.com/">SASS</a> and the <a href="https://github.com/inuitcss">Inuit Alpha framework</a> to create modular components with <a href="http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/">BEM</a> syntax.</p>
		<p>All variables are defined in, <code>settings/_inuit-vars.scss</code>, <code>settings/_vars.scss</code> and <code>settings/_font-vars.scss</code> SASS files.</p>
	</div><!-- /.layout-wrapper -->
</div><!-- /.wrapper -->
<div class="wrapper"  id="sg-layout">
	<h2 class="text--center">Layout structure</h2>
	<div class="layout-wrapper">
		<p>The Inuit layout framework has classes based on ratios such as <code>.u-1/2</code> or <code>.u-1/3</code>, allowing for flexible sizes and nesting where required. the amount of columns can be turned on or off in <code>_inuit-vars.scss</code></p>
		<p>The spacing of layout items (and much more throughtout the site) is based on the variable <code>$inuit-base-spacing-unit</code>, defined in <code>_inuit-vars.scss</code>. There are other variants turned on in <code>_inuit-vars.scss</code> such as <code>$inuit-enable-layout--tiny</code></p>
		<p>The layout is mobile-first, so unless a width class is declared, the layout item shall be full width (same as specifying the class of <code>.u-1/1</code>).</p>
		<p>Because the layout is responsive and percentage based, it will fill the available space. In order to restrict the maximum size of the layout (and therefore the site), a <code>div.layout-wrapper</code> is required the max-width of which is set to the variable <code>$layout-max</code> in <code>_vars.scss</code>.</p>
		<p>The size of the layout items is based on these breakpoints:</p>
		<ul class="list--plain  u-mb">
			<li><code>$layout-max:	1200px;</code></li>
			<li><code>$palm:		"screen and (max-width: 44.9375em)";</code></li>
			<li><code>$lap:			"screen and (min-width: 45em) and (max-width: 63.9375em)";</code></li>
			<li><code>$lap-and-up:	"screen and (min-width: 45em)";</code></li>
			<li><code>$portable: 	"screen and (max-width: 63.9375em)";</code></li>
			<li><code>$desk:		"screen and (min-width: 64em)";</code></li>
		</ul>
		<p> Because the layout system makes use of <code>inline-block</code> for layout, the whitespace around the elements does matter. Either ensure there is no gap between <code>.layout__item</code> divs, or close the gap using comments in the markup.</p>
		<div class="layout text--center">
			<div class="layout__item u-1/ u-1/2-lap u-1/4-desk">
				<p class="bg--ash"> 1/4</p>
			</div><!--
			--><div class="layout__item u-1/ u-1/2-lap u-1/4-desk">
				<p class="bg--ash"> 1/4</p>
			</div><!--
			--><div class="layout__item u-1/ u-1/2-lap u-1/4-desk">
				<p class="bg--ash"> 1/4</p>
			</div><!--
			--><div class="layout__item u-1/ u-1/2-lap u-1/4-desk">
				<p class="bg--ash"> 1/4</p>
			</div>

			<div class="layout__item u-1/ u-1/2-lap u-1/3-desk">
				<p class="bg--ash"> 1/3</p>
			</div><!--
			--><div class="layout__item u-1/ u-1/2-lap u-1/3-desk">
				<p class="bg--ash"> 1/3</p>
			</div><!--
			--><div class="layout__item u-1/ u-1/2-lap u-1/3-desk">
				<p class="bg--ash"> 1/3</p>
			</div>

			<div class="layout__item u-1/ u-1/2-lap  u-1/2-desk">
				<p class="bg--ash"> 1/2</p>
			</div><!--
			--><div class="layout__item u-1/ u-1/2-lap  u-1/2-desk">
				<p class="bg--ash"> 1/2</p>
			</div>

			<div class="layout__item u-1/1 u-mb">
				<p class="bg--ash"> 1</p>
			</div>
		</div><!-- /layout -->
	</div><!-- /.layout-wrapper -->
</div><!-- /.wrapper -->
<div class="wrapper"  id="sg-helper">
	<h2 class="text--center">Helper classes</h2>
	<div class="layout-wrapper">
		<p> There are a wide range of helper classes, which are set in inuit-vars and some others that are in _helper.scss</p>
		<div class="layout">
			<div class="layout__item u-1/2-lap  u-1/2-desk">
				<h3>Padding and margin</h3>
				<p>(m|p)(t|r|b|l|h|v)(-|+|0) {}` = margin/padding top/right/bottom/left/horizontal/vertical less/more/none</p>
				<strong>E.g.</strong>
				<p>class names u-mb (unit-marginbottom)</p>
				<p>class names u-mt (unit-margintop)</p>
			</div><!--
			--><div class="layout__item u-1/2-lap  u-1/2-desk">
				<h3>Hidden</h3>
				<p>A class of <code>visuallyhidden</code> can be used to hide elements visually but still visible for screen readers. And a class of <code>hidden</code> hides it for both visual and screen readers. Both come with media-query abilites. </p>
				<strong>E.g</strong>
				<p>hidden--palm hides on mobiles</p>
			</div>
		</div>
	</div><!-- /.layout-wrapper -->
</div><!-- /.wrapper -->
<div class="wrapper" id="sg-typography">
	<h2 class="text--center">Typography  (/objects/ _typography.scss)</h2>
	<div class="layout-wrapper">
		<div class="layout">
			<div class="layout__item  u-1/2-desk">
				<h3 class="text--red">Headings</h3>
				<p>Standard Headings (H1-H6).</p>
				<p>Sensible default margins are included by default, but can be overwritten using Inuit's built-in helper classes.</p>
				<h1>h1 .alpha 30px - Helvetica </h1>
				<h2>h2 .beta 28px - Helvetica </h2>
				<h3>h3 .gamma 26px – Helvetica </h3>
				<h4>h4 .delta 24px – Helvetica </h4>
				<h5>h5 .echo 22px - Helvetica  </h5>
				<h6>h6 .zeta 20px - Helvetica </h6>

			</div><!--
			--><div class="layout__item  u-1/2-desk">
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
	</div><!-- /.layout-wrapper -->
</div><!-- /.wrapper -->
<div class="wrapper"  id="sg-colors">
	<h2 class="text--center">Colour Palette (_vars.scss)</h2>
	<div class="layout-wrapper">
		<p>The official XXX colours</p>
		<p> In addition the primary colours exist as helper classes <code>.bg--[colour name]</code></p>
		<!-- <h3>Primary Colours</h3> -->
		<div class="layout">
		<!-- 	<div class="layout__item  u-1/4-lap u-1/4-desk  u-1/2">
				<div class="bg--default  u-mb" style="padding-top: 40%;">
					<div class="u-p- text--center" style="background: rgba(255,255,255,.5)">
						<p class="u-mv0">$default</p>
						<p class="u-mv0">######</p>
					</div>
				</div>
			</div> -->
			<div class="layout__item">
				<h3>Greys </h3>
				<p class="u-pb">Grey colours used throughout the site</p>
			</div>
			<div class="layout__item  u-1/4-lap u-1/4-desk  u-1/2">
				<div class="bg--ash  u-mb" style="padding-top: 40%;">
					<div class="u-p- text--center" style="background: rgba(255,255,255,.5)">
						<p class="u-mv0">$ash</p>
					</div>
				</div>
			</div><!--
			--><div class="layout__item  u-1/4-lap u-1/4-desk  u-1/2">
				<div class="bg--light-grey  u-mb" style="padding-top: 40%;">
					<div class="u-p- text--center" style="background: rgba(255,255,255,.5)">
						<p class="u-mv0">$light-grey</p>
					</div>
				</div>
			</div><!--
			--><div class="layout__item  u-1/4-lap u-1/4-desk  u-1/2">
				<div class="bg--mid-grey  u-mb" style="padding-top: 40%;">
					<div class="u-p- text--center" style="background: rgba(255,255,255,.5)">
						<p class="u-mv0">$mid-grey</p>
					</div>
				</div>
			</div><!--
			--><div class="layout__item  u-1/4-lap u-1/4-desk  u-1/2">
				<div class="bg--dark-grey  u-mb" style="padding-top: 40%;">
					<div class="u-p- text--center" style="background: rgba(255,255,255,.5)">
						<p class="u-mv0">$dark-grey</p>
					</div>
				</div>
			</div><!--
			--><div class="layout__item  u-1/4-lap u-1/4-desk  u-1/2">
				<div class="bg--charcoal  u-mb" style="padding-top: 40%;">
					<div class="u-p- text--center" style="background: rgba(255,255,255,.5)">
						<p class="u-mv0">$charcoal</p>
					</div>
				</div>
			</div>
		</div><!-- /layout -->
	</div><!-- /.layout-wrapper -->
</div><!-- /.wrapper -->
<div class="wrapper" id="sg-buttons">
	<div class="layout-wrapper">
		<h2 class="text--center">Buttons (/objects/ _buttons.scss)</h2>
		<p>Class of <code>.btn</code> can be added to anchor, span or button elements, including inputs however they will not support having an icon inside.</p>
		<p> Always start with a class of <code>.btn</code> then add helper classes such as <code>.btn--red, .btn--grey, .btn--sm, .btn--lg</code> adding a class of <code>.u-1/1</code> will make a button full length.</p>
		<div class="layout">
			<div class="layout__item  u-1/1 u-1/2-lap  u-1/4-desk  text--center">
				<h4>.btn </h4>
				<a href="#" class="btn">button</a>
			</div><!--
			--><div class="layout__item  u-1/1 u-1/2-lap  u-1/4-desk  text--center">
				<h4>.btn.btn--blue </h4>
				<a href="#" class="btn btn--blue">button</a>
			</div><!--
			--><div class="layout__item  u-1/1 u-1/2-lap  u-1/4-desk  text--center">
				<h4>.btn > span.icon </h4>
					<a href="#" class="btn"> button <span class="icon-caret-right"></span></a>
			</div><!--
			--><div class="layout__item  u-1/1 u-1/2-lap  u-1/4-desk  text--center">
				<h4>.btn.btn--sm </h4>
				<a href="#" class="btn  btn--sm">button</a>
			</div><!--
			--><div class="layout__item  u-1/1 u-1/2-lap  u-1/4-desk  text--center">
				<h4>.btn.btn--lg </h4>
				<a href="#" class="btn  btn--lg">button</a>
			</div><!--
			--><div class="layout__item  u-1/1 u-1/2-lap  u-1/2-desk  text--center">
				<h4>.btn.u-1/1 </h4>
				<a href="#" class="btn  u-1/1">button</a>
			</div><!--
			--><div class="layout__item  u-1/1 u-1/2-lap  u-1/4-desk  text--center">
				<h4>button.btn-bare </h4>
				<button class=" btn-bare">I'm a button but you can't tell</button>
			</div><!--
			-->
		</div><!-- /layout -->
	</div><!-- /.layout-wrapper -->
</div><!-- /.wrapper -->
<div class="wrapper" id="sg-icons">
	<div class="layout-wrapper">
		<h2 class="text--center">Icons (/objects/ _icons.scss)</h2>
		<div class="layout">
		<div class="layout__item u-1/4-lap u-1/4-desk  u-1/2  u-mb">
				<span class="icon-caret-right"></span> <span> .icon-caret-right</span>
			</div><!--
			--><div class="layout__item u-1/4-lap u-1/4-desk  u-1/2  u-mb">
				<span class="icon-caret-left"></span> <span> .icon-caret-left</span>
			</div><!--
			--><div class="layout__item u-1/4-lap u-1/4-desk  u-1/2  u-mb">
				<span class="icon-caret-up"></span> <span> .icon-caret-up</span>
			</div><!--
			--><div class="layout__item u-1/4-lap u-1/4-desk  u-1/2  u-mb">
				<span class="icon-caret-down"></span> <span> .icon-caret-down</span>
			</div><!--
			--><div class="layout__item u-1/4-lap u-1/4-desk  u-1/2  u-mb">
				<span class="icon-plus"></span> <span> .icon-plus</span>
			</div><!--
			--><div class="layout__item u-1/4-lap u-1/4-desk  u-1/2  u-mb">
				<span class="icon-minus"></span> <span> .icon-minus</span>
			</div><!--
			--><div class="layout__item u-1/4-lap u-1/4-desk  u-1/2  u-mb">
				<span class="icon-cancel-circle"></span> <span> .icon-cancel-circle</span>
			</div><!--
			--><div class="layout__item u-1/4-lap u-1/4-desk  u-1/2  u-mb">
				<span class="icon-cross"></span> <span> .icon-cross</span>
			</div><!--
			--><div class="layout__item u-1/4-lap u-1/4-desk  u-1/2  u-mb">
				<span class="icon-checkmark"></span> <span> .icon-checkmark</span>
			</div>
		</div><!-- /layout -->
	</div><!-- /.layout-wrapper -->
</div><!-- /.wrapper -->
<div class="wrapper"  id="sg-lists">
	<div class="layout-wrapper">
		<h2 class="text--center">Lists (/objects/ _lists.scss)</h2>
		<div class="layout">
			<div class="layout__item u-1/2-lap u-1/4-desk">
				<p><strong><code>list--bare .list--inline</code></strong></p>
				<ul class="list--bare  list--inline">
					<li>List item</li>
					<li>List item</li>
					<li>List item</li>
				</ul>
			</div><!--
			--><div class="layout__item u-1/2-lap u-1/4-desk">
				<p><strong><code>.list--bare</code></strong></p>
				<ul class="list--bare">
					<li>List item</li>
					<li>List item</li>
					<li>List item</li>
				</ul>
			</div><!--
			--><div class="layout__item u-1/2-lap u-1/4-desk">
				<p><strong><code>ul</code></strong></p>
				<ul>
					<li>one</li>
					<li>two</li>
					<li>three</li>
				</ul>
			</div><!--
			--><div class="layout__item u-1/2-lap u-1/4-desk">
				<p><strong><code>ol</code></strong></p>
				<ol>
					<li>one</li>
					<li>two</li>
					<li>three</li>
				</ol>
			</div>
		</div><!-- /layout -->
	</div><!-- /.layout-wrapper -->
</div><!-- /.wrapper -->
<div class="wrapper"  id="sg-table">
	<div class="layout-wrapper">
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
	</div><!-- /.layout-wrapper -->
</div><!-- /.wrapper -->

<div class="wrapper"  id="sg-images">
	<div class="layout-wrapper">
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
	</div><!-- /.layout-wrapper -->
</div><!-- /.wrapper -->
<div class="wrapper"  id="sg-forms">
	<div class="layout-wrapper">
		<h2 class="text--center">form elements (/objects/ forms.scss)</h2>
			<form action="#" class="form">
				<div class="layout">
					<div class="layout__item u-mb- u-1/4 u-1/1-palm">
						<label for="select">Label</label>
					</div><!--
					--><div class="layout__item u-mb- u-3/4 u-1/1-palm">
						<select name="select" id="select" class="u-1/2-lap u-1/2-desk">
							<option value="0">Example</option>
							<option value="1">1</option>
							<option value="text">text</option>
						</select>
					</div>
					<div class="layout__item u-mb- u-1/4 u-1/1-palm">
						<label for="input">Label</label>
					</div><!--
					--><div class="layout__item u-mb- u-3/4 u-1/1-palm">
						<input type="text" name="input" id="input" placeholder="placeholder">
					</div>
				</div>
			</form>
	</div><!-- /.layout-wrapper -->
</div><!-- /.wrapper -->

	<?php include("inc/footer.php");  include("inc/cookie.php");  include("inc/scripts.php"); ?>
</body>
</html>
