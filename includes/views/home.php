<?php render('_header',array('title'=>$title))?>

<p>Welcome! This is a demo for a <a href="http://tutorialzine.com/2011/08/jquery-mobile-product-website/">Tutorialzine tutorial</a>, which shows you how to use PHP, MySQL and jQuery mobile and create a super simple computer shop website.</p>
<p>Remember to try browsing this site using different browser resolutions.</p>

<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
    <li data-role="list-divider">Choose a product category</li>
    <?php render($content) ?>
</ul>

<?php render('_footer')?>