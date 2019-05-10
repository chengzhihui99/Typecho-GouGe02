<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
	<p>
		<a href="https://weibo.com/ithuige"><i class="fa fa-weibo"></i></a><!--这里是新浪微博地址，如果没有就删除-->
      	<a href="https://github.com/chengzhihui99"><i class="fa fa-github"></i></a><!--这里是github地址，如果没有就删除-->
		<a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=admin@qqzmly.com"><i class="fa fa-envelope"></i></a><!--这里是email地址，如果没有就删除-->
		<a href="<?php $this->options->siteUrl(); ?>/feed"><i class="fa fa-feed"></i></a>
  	</p>
    <p>&copy; 2015-<?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.</p>
    <p>THEME <a href="https://www.qqzmly.com/archives/1603">GouGe02</a> MADE BY <a href="https://www.qqzmly.com">QQZmLy.CoM</a></p><!--写代码不容易，留个版权吧^_^...-->
    <p><a href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank">鄂ICP备16001608号-1</a><!--这里是ICP备案，如果没有就删除--></p>
    <p><a href="https://www.beian.gov.cn/portal/registerSystemInfo?recordcode=42020302000018" rel="external nofollow" target="_blank"><i class="govimg"></i>鄂公网安备 42020302000018号</a></p><!--这里是公安备案，如果没有就删除-->  	
	<!--尾部的内容都加在这里！-->
    
    
      
    <div id="backtotop">
    	<i class="fa fa-arrow-up"></i>
    </div>
  	<?php if ($this->is('search')): ?>
	<?php else: ?>
	<div id="web_search">
    	<i class="fa fa-search"></i>
    </div>		
	<?php endif; ?>
	<div class="web_search_mask"></div>
	<div class="search_mask">
		<div class="search_mask_inner">
			<form method="post"  class="form-group">
	        	<img src="<?php $this->options->themeUrl('img/huajisou.jpg'); ?>" alt="search" />
	        	<p><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></p>
		        <div class="error-search">
			       	<input type="text" name="s" class="text" autofocus placeholder="请输入关键字搜索" /><button type="submit" class="submit"><?php _e('搜索'); ?></button>
			    </div>
			    <!--如果想添加内容在这里添加吧！-->
			</form>
		</div>
	</div>
</footer><!-- end #footer -->


    
<script>hljs.initHighlightingOnLoad()</script><!--这里是调用代码高亮的JS代码-->
<?php $this->footer(); ?>
</body>
</html>
