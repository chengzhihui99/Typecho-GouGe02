<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <article>
    	<div class="post-inner clearfix">
        	<div class="entry-post-content">
            	<img src="<?php $this->options->themeUrl('img/404.jpg'); ?>" alt="404" />
            	<p style="text-align: center;">没有找到搜索结果，请尝试更换关键字</p>
               	<form method="post"  class="form-group">
               		<div class="error-search">
	                	<input type="text" name="s" class="text" autofocus placeholder="请输入关键字搜索" /><button type="submit" class="submit"><?php _e('搜索'); ?></button>
	                </div>
	            </form>
			</div>
		</div>
    </article>
	<?php $this->need('footer.php'); ?>
