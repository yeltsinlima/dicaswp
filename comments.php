<?php
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
 
    if ( post_password_required() ) { ?>
        <p class="nocomments">Este artigo está protegido por senha.</p>
    <?php
        return;
    }
?>
 
<h4><?php comments_number('0 Comentários', '1 Comentário', '% Comentários' );?></h4>
 
 <div class="row">
<?php if ( have_comments() ) : ?>
<div class="comments twelve columns"> 
<?php wp_list_comments('avatar_size=64&type=comment'); ?>
 </div>
 <?php if ($wp_query->max_num_pages > 1) : ?>
<div class="pagination twelve columns">
<ul>
<li class="older"><?php previous_comments_link('Anteriores'); ?></li>
<li class="newer"><?php next_comments_link('Novos'); ?></li>
</ul>
</div>
<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<div id="respond" class="twelve columns">
<h4>Deixe um comentário</h4>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="nice">
<fieldset>
<?php if ( $user_ID ) : ?>
<p>Autentificado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(); ?>" title="Sair desta conta">Sair desta conta &raquo;</a></p>
<?php else : ?>
<p><label for="author">Nome:</label> <br>
<input type="text" name="author" id="author" class="expand input-text" value="<?php echo $comment_author; ?>" /></p>
<p><label for="email">Email:</label> <br>
<input type="text" name="email" id="email" class="expand input-text" value="<?php echo $comment_author_email; ?>" /></p>
<p><label for="url">Website:</label><br>
<input type="text" name="url" id="url" class="expand input-text" value="<?php echo $comment_author_url; ?>" />
<?php endif; ?>
<label for="comment">Mensagem:</label>
<textarea name="comment" id="comment" rows="" cols=""></textarea>
<input type="submit" class="nice small radius blue button" value="Enviar Comentário" />
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>
</fieldset>
</form>
<p class="cancel"><?php cancel_comment_reply_link('Cancelar Resposta'); ?></p>
</div>
<?php else : ?>
<h4>Os comentários estão fechados.</h4>
<?php endif; ?>
</div>
</div>