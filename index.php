<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; $this->need('header.php'); ?>

<div class="content-container">

<?php $ulEnd = false; ?>

<?php if ($this->have()): ?>
<?php while ($this->next()): ?>
	<?php if (($this->sequence > 1)): ?>
	<li class="item">
		<time class="date"><?php $this->date('Y-m-d'); ?></time>
		<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
	</li>
	<?php else: ?>
	<div class="asset">
	<div class="asset-title">
		<h1>
			<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
		</h1>
	</div>
	<div class="asset-content">
		<div class="asset-date">
			<i class="fa fa-calendar"></i>
			<time class="date"><?php $this->date('Y-m-d'); ?></time>
		</div>
		<div class="asset-description">
			<p>
				<?php require_once 'parsedown-1.7.4/Parsedown.php'; ?>
				<?php $Parsedown = new Parsedown(); ?>
				<?php echo $Parsedown->text($this->fields->description); ?>
			</p>
			<p align="right"><a href="<?php $this->permalink() ?>">»» 继续阅读全文</a></p>
		</div>
	</div>
	</div>
	<div class="post-list">
	<h3>最新文章</h3>
	<ul>
	<?php $ulEnd = true; ?>
	<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php if ($ulEnd): ?>
		<li>
			<a href="/archives.html">更多文章...</a>
		</li>
	</ul>
</div>
<?php endif; ?>

</div> <!-- end #content-container -->

<?php $this->need('footer.php'); ?>
