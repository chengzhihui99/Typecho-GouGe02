<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<section id="main" class="col-md-12">
	<article>
		<div class="post-inner">
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
          	<div class="entry-post-ad">
              	<!--在这里你可以放入你的广告，如果没有请忽略！-->
			</div>
			<p class="entry-post-tag">
				<span>Posted by : <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
				<span>Tags : <?php $this->category(','); ?></span>
			</p>
			<p class="entry-copyright">
				<a href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh" target="_blank" rel="nofollow"><i class="fa fa-creative-commons"></i> 知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议</a>
			</p>
			<div class="post-near">
				<div class="post-pre">
					<span class="meta-nav"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Previous post</span>
					<span class="post-title"><?php $this->thePrev('%s','没有了'); ?></span>
				</div>
				<div class="post-nex">
					<span class="meta-nav">Next post&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></span>
					<span class="post-title"><?php $this->theNext('%s','没有了'); ?></span>
				</div>
	    	</div>
	    	<?php $this->need('comments.php'); ?>
		</div>
	</article>
</section>

<!-- end #main-->

<?php $this->need('footer.php'); ?>
