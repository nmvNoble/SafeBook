<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h1>Error</h1>

<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

	<p>Backtrace:</p>
	<?php foreach (debug_backtrace() as $error): ?>

		<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>

			<p style="margin-left:10px">
			<h1>Error</h1><a class="navbaricons" href="<?php echo base_url('signin') ?>"><strong class="iconin">go back</strong></a>
			</p>

		<?php endif ?>

	<?php endforeach ?>

<?php endif ?>

</div>