<?php if ($post->ID == 19) { 

    echo '<meta name="robots" content="noindex,nofollow">'; 
}
 ?>

<!-- no index for posts in the websites-->	
<?php if(is_single(****ID Page)): ?>
<meta name="robots" content="noindex,nofollow">
<?php endif; ?>
<!-- no index for posts in the websites-->	


<!-- no index for pages in the websites-->	
<?php if(is_page(URLS PAGE)): ?>
<meta name="robots" content="noindex,nofollow">
<?php endif; ?>


<!-- no index for pages. more than one page-->	

<?php if ( is_page('********') || is_page('*******') ) ) : ?>
<meta name="robots" content="noindex,nofollow">
<?php endif; ?>
