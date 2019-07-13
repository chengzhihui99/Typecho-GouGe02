<?php
/**
 * 这是 GouGe 的第二套typecho主题，为自己的博客而写。
 * 我真的不会写主题后台，真的不会不会不会.......
 * 
 * @package GouGe02
 * @author GouGe
 * @version 1.0
 * @link http://www.qqzmly.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<section class="col-md-12 post-content">
<?php //($this->next()); ?>
<?php //print_r($this->category); ?>
	<?php while($this->next()): ?>
		<?php //print_r($this->next("slug")); ?>
		<?php if(($this->category)=="gougesay"): ?>
			<article class="post-item saying">
				<div class="saying_top">
					<div class="saying_logo">
						<a href="<?php $this->author->permalink(); ?>" title="<?php $this->author(); ?>"><img src="<?php $this->options->themeUrl('img/top-myphoto.jpg'); ?>" alt="<?php $this->author(); ?>"></a>
					</div>
					<div class="saying_more">
						<p class="author"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></p>
						<p class="time"><?php $this->date("Y年m月d日",time()); ?></p>
					</div>
				</div>
				<div class="saying_con">
					<a href="<?php $this->permalink() ?>"><?php $this->excerpt(300, ' ...'); ?></a>
				</div>
			</article>
			
		<?php else: ?>
			<article class="post-item">
				<div class="item-thumb">
					<a href="<?php $this->permalink() ?>"><img src="<?php echo img_postthumb($this->cid); ?>" alt="<?php $this->title() ?>"></a>
				</div>
				<div class="item-text">
					<h2 class="post-title"><a  href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					<div class="post-content">
						<?php $this->excerpt(135,'...'); ?>
					</div>
					<ul class="post-meta">
						<li><a href="<?php $this->permalink() ?>"><time><i class="fa fa-calendar"></i><?php $this->date("Y年m月d日",time()); ?></time></a></li>
						<li><a href="<?php $this->permalink() ?>"><i class="fa fa-eye"></i><?php get_post_view($this) ?>次浏览</a></li>
						<li class="mobile-hidden"><a href="<?php $this->permalink() ?>#comments"><i class="fa fa-commenting-o"></i><?php $this->commentsNum('0','1','%d'); ?>条评论</a></li>
					</ul>
					<div class="post-more"><a href="<?php $this->permalink() ?>">阅读全文<i class="fa fa-chevron-circle-right"></i></a></div>			
				</div>
			</article>
		<?php endif ?>
	<?php endwhile; ?>
		<nav class="nav-page">
			<div class="nav-page-pre">
				<?php $this->pageLink('<i class="fa fa-chevron-left"></i>上一页'); ?>
			</div>
			<span class="nav-page-counts">
				<?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?>/<?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?>			
			</span>
			<div class="nav-page-nex">
				<?php $this->pageLink('下一页<i class="fa fa-chevron-right"></i>	','next'); ?>				
			</div>
		</nav>
</section>
<!-- end #main-->


<?php $this->need('footer.php'); ?>
