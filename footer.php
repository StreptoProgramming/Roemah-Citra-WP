</div>
<!--<div id='subscribe'>
<form action="http://www.roemahcitra.com/?na=s" method="post">
<input class='email' placeholder='Enter your e-mail' name='ne' type='text'/><button class='submit'>Subscribe</button>
</form>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Name of Widgetized Area") ) : ?>
<?php endif;?>

</div>-->
<footer>
<div id='footmax'>
<div class='footc footb'>
<h3>Package</h3>
<ul>
<li><a href='http://www.roemahcitra.com/catering-ruby/'>Ruby</a></li>
<li><a href='http://www.roemahcitra.com/catering-zamrud/'>Zamrud</a></li>
<li><a href='http://www.roemahcitra.com/catering-safir/'>Safir</a></li>
<li><a href='http://www.roemahcitra.com/catering-diamond/'>Diamond</a></li>
</ul>
</div>
<div class='footc footb'>
<h3>About</h3>
<ul>
<li><a href='<?php echo esc_url( home_url( '/' ) )."blog"; ?>'>Our blog</a></li>
<li><a href='<?php echo esc_url( home_url( '/' ) )."kontak"; ?>'>Contact</a></li>
<li><a href='<?php $category_id = get_cat_ID( 'testimoni' );$category_link = get_category_link( $category_id );echo $category_link; ?>'>Testimoni</a></li>
<li><a href='/'>Ketentuan</a></li>
</ul>
</div>
<div class='footc footb'>
<h3>Social</h3>
<ul>
<li><a target='_blank' href='https://www.instagram.com/roemahcitraweddingservice/'>Instagram</a></li>
<li><a target='_blank' href='#'>Facebook</a></li>
<li><a target='_blank' href='#'>Youtube</a></li>
<li><a target='_blank' href='#'>Twitter</a></li>
</ul>
</div>
<div class='bother'></div>
<div class='footc foota'>
<div id='con'>
<div class='tel' ><img src='<?php echo esc_url( get_template_directory_uri() ); ?>/CSS/img/wa.png'> <p>082218071716</p></div>
<div class='mail' ><img src='<?php echo esc_url( get_template_directory_uri() ); ?>/CSS/img/ig.png'> <p><a target='_blank' href='https://www.instagram.com/roemahcitraweddingservice/'>roemahcitraweddingservice</a></p></div>
<div class='loc' ><img src='<?php echo esc_url( get_template_directory_uri() ); ?>/CSS/img/place.png'> <p>Jl. Permata Raya Blok A7-8 Permata – Cimahi</p></div>
</div>
</div>
<div style='clear:both;'></div>
</div>
</footer>
<div class='kaki'>
designed by StreptoProgramming
</div>
<script>
$(document).ready(function () {
    $('#slider-demo').freeSimpleSlider({
        dots: true,
        arrows: true,
        time: 3000,
        animation: "fade"
    });

});
</script>
</body>
</html>