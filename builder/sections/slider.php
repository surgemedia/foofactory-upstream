<?php if(isset($vars['title'])) { ?>
	<h1 class="text-center"><?php echo $vars['title']; ?></h1>
<?php } ?>
<?php
	$vars['class'] = 'col-md-12'; //because i know this from the file name
	$element_vars = $vars;
	get_component([
	 'template' => 'elements/slider',
	 'vars' => $element_vars
			]);
	unset($element_file);
	unset($element_vars);
 ?>
