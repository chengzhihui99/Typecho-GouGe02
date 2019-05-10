<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<section id="main" class="col-md-12">
	<article>
		<div class="post-inner clearfix">
			<header class="entry-header">
				<h1 class="entry-title"><?php $this->title() ?></h1>
				<ul class="entry-post-meta">
					<li><time><i class="fa fa-calendar"></i><?php $this->date("Y年m月d日",time()); ?></time></li>
					<li><i class="fa fa-eye"></i><?php get_post_view($this) ?>次浏览</li>
					<li class="mobile-hidden"><i class="fa fa-commenting-o"></i><?php $this->commentsNum('0','1','%d'); ?>条评论</li>
				</ul>
			</header>
			<div class="entry-post-content">
				<?php $this->content(); ?>
			</div>
			<p class="entry-post-tag">
				<span>Posted by : <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
			</p>
			<p class="entry-copyright">
				<a href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh" target="_blank" rel="nofollow"><i class="fa fa-creative-commons" aria-hidden="true"></i> 知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议</a>
			</p>
	    	<?php $this->need('comments.php'); ?>
		</div>
	</article>
</section>


<!-- end #main-->


<?php $this->need('footer.php'); ?>
