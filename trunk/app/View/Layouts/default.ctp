<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('style');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="wrapper">
		<div id="header-wrapper" class="container">
			<div id="header" class="container">
				<div id="logo">
					<h1>
						<a href="#">snake</a>
					</h1>
				</div>
				<!--   <div id="slogan"><p>(Let the snake find it!)</p></div>  -->
				<div id="menu">
					<ul>
						<li class="current_page_item"><a href="#">Homepage</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Photos</a></li>
						<li><a href="#">About</a></li>	
					</ul>
				</div>
			</div>
			<div>
				<?php $this->Html->image('img03.png', array('alt' => "FCT-LOGO", 'border' => '0'))?>
			</div>
			<div id="search">
				<div id="searchbox">
					<form method="get" action="#">
							<div>
								<input type="text" name="s" id="search-text" value="" />
								<input type="submit" id="search-submit" value="GO" />
							</div>
						</form>
				</div>
			</div>
		</div>
		
		<!-- end #header -->
		<div id="page">
			<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
				<div class="post">
					<h2 class="title">
						<a href="#">Lorem ipsum sed aliquam</a>
					</h2>
					<p class="meta">
						<span class="date">August 20, 2012</span><span class="posted">Posted
							by <a href="#">Someone</a> </span>
					</p>
					<div style="clear: both;">&nbsp;</div>
					<div class="entry">
						<p>
							Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam
							bibendum. In nulla tortor, elementum vel, tempor at, varius non,
							purus. Mauris vitae nisl nec metus placerat consectetuer. Donec
							ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper
								urna</a>. Pellentesque ornare, orci in consectetuer hendrerit,
							urna elit eleifend nunc, ut consectetuer nisl felis ac diam.
							Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus
							turpis, cursus egestas at sem. Mauris quam enim, molestie in,
							rhoncus ut, lobortis a, est.
						</p>
						<p class="links">
							<a href="#" class="more">Read More</a><a href="#" title="b0x"
								class="comments">Comments</a>
						</p>
					</div>
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end #content -->
			<div style="clear: both;">&nbsp;</div>
		</div>
		<div class="container">
		<?php $this->Html->image('img03.png', array('alt' => "FCT-LOGO", 'border' => '0'))?>
		</div>
		<!-- end #page -->
	</div>
	<div id="footer-content"></div>
	<div id="footer">
		<p>
			Copyright (c) 2012 snake.uca.edu.py. All rights reserved. Design by <a
				href="http://www.freecsstemplates.org">FCT</a>.
		</p>
	</div>
</body>
</html>
