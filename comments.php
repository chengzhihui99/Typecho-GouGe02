<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h3 id="response"><?php _e('添加新评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form" class="clearfix">
            <div class="post-comments-area">
            	<textarea rows="8" cols="50" name="text" id="textarea" class="textarea" placeholder="我有烈酒，你有故事嘛？" required ><?php $this->remember('text'); ?></textarea>
            </div>	
            <div class="post-comments-meta">
            	<div class="input-body">
            		<ul class="ident">
            			<li><input type="text" name="author" id="author" class="text" placeholder="昵称*" value="<?php $this->remember('author'); ?>" required /></li>
            			<li><input type="email" name="mail" id="mail" class="text" placeholder="邮件*" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> /></li>
            			<li><input type="url" name="url" id="url" class="text" placeholder="网站" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> /></li>
            		</ul>
            		<input type="submit" value="提交评论" class="submit"  />
            	</div>
            </div>		
            <!--<?php $security = $this->widget('Widget_Security'); ?>
            <input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>">-->
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo;', '&raquo;'); ?>
    
    <?php endif; ?>

</div>
