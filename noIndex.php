<?php if ($post->ID == 19) { 

    echo '<meta name="robots" content="noindex,nofollow">'; 
}
 ?>

<!-- no index for posts in the websites-->	
<?php if(is_single(1918)): ?>
<meta name="robots" content="noindex,nofollow">
<?php endif; ?>
<!-- no index for posts in the websites-->	


<!-- no index for pages in the websites-->	
<?php if(is_page(21)): ?>
<meta name="robots" content="noindex,nofollow">
<?php endif; ?>


<!-- no index for pages. more than one page-->	

<?php if ( is_page('big-announcement') || is_page('new-update-coming-soon') ) ) : ?>
<meta name="robots" content="noindex,nofollow">
<?php endif; ?>