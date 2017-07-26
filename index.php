<?php
/**
 *简洁而不简单，美丽而不浮华。
 * @package inkPro
 * @author Alamr
 * @version 1.0
 * @link http://www.alamr.cn/
 */

 $this->need('header.php');
 ?>

	<?php while($this->next()): ?>
	<div class="box">
		<center>
		<!-- 文章标题 -->
			<div class="post-title">
				<p><a href="<?php $this->permalink() ?>#title">「<?php $this->title() ?>」</a></p>
			</div>
			<!-- 文章发布时间 -->
			<div class="meta">
				<span><?php echo formatTime($this->modified);?></span>
			</div>
		</center>
		<!-- 阅读按钮 -->
		<center>
			<a href="<?php $this->permalink() ?>#title" class="go">&nbsp阅读&nbsp</a>
		</center>
	</div>
	<?php endwhile; ?>

	<p style="
	height:100px;line-height:100px;
    border-radius: .5em;font-size: 1.5em;
    text-align: center;"><?php $this->pageLink('<span id="left-navigator">上一页</span>','prev'); ?>
	<?php $this->pageLink('<span id="right-navigator">下一页</span>','next'); ?></p>
	<?php $this->need('footer.php'); ?>
