<?php get_header(); ?>
<div id='slider'>
<ul id="slider-demo" class="slider-list">
  <li class="current"><iframe style='width: 100%;
    height: 100%;' src="https://www.youtube.com/embed/jDfh3wb86N8?autoplay=1&controls=0&showinfo=0&rel=0&modestbranding=1" frameborder="0" allowfullscreen></iframe></li>
  <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Material/Images/foto/slide1.jpg" alt=""></li>
  <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Material/Images/foto/slide2.jpg" alt=""></li>
  <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Material/Images/foto/slide3.jpg" alt=""></li>
</ul>
</div>
<div id='about' class='container'>
<div class='maxer'>
<!--<h2 class='judu'>About Us</h2>-->
<div id='boutbox'>
<div class='bagi2'>
<div class='impar'>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Material/Images/foto/about.jpg" id='dua' style='    max-width: 100%;margin: 0 auto;
    display: block;'/>
</div>
</div>
<div class='bagi'>
<div class='boutcon'>
<div class='borbox'>
<h3>Roemah<br/>Citra</h3>
We  provide one stop wedding service. Solutions  for your wedding.
</div>
<a href='<?php echo esc_url( home_url( '/' ) )."tentang"; ?>'  target='_blank' class='readm'>Baca lebih lanjut</a>
</div>
</div>

<div style='clear:both;'></div>
</div>
</div>
</div>
<div id='keunggul' class='container'>

<div class='keung' style='padding-top:30px;'>
<h2>Kenapa harus pilih kami?</h2>
</div>
<div class='keungpar' >
<div class='keung'>
<div class='bag'>
<div class='padiv'>
<div class='bulet'><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Material/Images/Logo/flex.png"></div>
<h3>Fleksibel</h3>
Roemah Citra selalu menerima berbagai aspirasi untuk mewujudkan pernikahan yang sesuai dengan keinginan Anda.
</div>
</div>
<div class='bag'>
<div class='padiv'>
<div class='bulet'><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Material/Images/Logo/lengk.png"></div>
<h3>Lengkap</h3>
Dari dekorasi, catering, tata rias hingga Wedding Organizer Roemah Citra merupakan one-stop wedding yang mampu menyediakan segala keperluan hari bahagia Anda</div>
</div><div class='bag'>
<div class='padiv'>
<div class='bulet'><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Material/Images/Logo/prof.png"></div>
<h3>Profesional</h3>
Dengan tenaga kerja yang berpengalaman serta profesional, Roemah Citra siap melayani segala persiapan pernikahan Anda.</div>
</div><div class='bag'>
<div class='padiv'>
<div class='bulet'><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Material/Images/Logo/upto.png"></div>
<h3>Up to date</h3>
Kami mempunyai berbagai macam penawaran yang up-to-date, mulai dari konsep hingga menu.</div>
</div><div style='clear:both;'></div>
</div>
</div>

</div>

<div id='testimoni' class='container'>



<div class='defback'>
<div class='maxer'>
<h2 class='judu'>Testimoni</h2>
<div class='keung'>



	<?php
	$idObj = get_category_by_slug('testimoni'); 
	$id = $idObj->term_id;
	$args = array( 'numberposts' => '4', 'cat' => $id, 'post_status' => 'publish' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
	$imgur = getim($recent['post_content']);
		?>
		<a class='testimon' style='background-image:url(<?php echo $imgur;?>)' href="<?php echo get_permalink($recent["ID"]); ?>"><span class='textOverImage'>
									<span class='tcont'><span class='tjud'><?php echo $recent["post_title"]; ?></span><span class='tbod'><?php echo mb_strimwidth(wp_strip_all_tags($recent['post_content']),0,250, '...');?></span></span>
						</span></a>
	<?php }
	/*
	<a class='bag' href='"<?php echo get_permalink($recent["ID"])?>"'>
<div class='bulet' style="background-image: url('<?php echo $imgur; ?>');"></div>
</a>
*/
?>
<div style='clear:both;'></div>
<a style='    margin: 30px auto;' target='_blank' href='<?php $category_id = get_cat_ID( 'testimoni' );$category_link = get_category_link( $category_id );echo $category_link; ?>' class='readm'>Lihat semua testimoni</a>


</div>
</div>
</div>
</div>

	<div id='fromblog'>
	<div class='maxblog' >
	<h3>Dari blog kami</h3>
	<div style='clear:both;'></div>
	</div>
	<div class='defback'>
	<div class='rapiher'>
	<?php
	$idObj = get_category_by_slug('testimoni'); 
	$id = $idObj->term_id;
	$args = array( 'numberposts' => '1', 'cat' => '-'.$id, 'post_status' => 'publish' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo "<img width='225px' style='float:left;margin-right: 20px;margin-bottom:20px;' src='".getim($recent['post_content'])."'>";
		echo '<h2 class="blog-post-title"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></h2> ';
		echo '<div class="blog-post-meta">'. date('d-m-Y', strtotime($recent["post_date"])) . '</div>';
        echo '<p>'.wp_trim_words(wp_strip_all_tags( $recent['post_content']),60). '</p>';
		//the_excerpt();
	}
	//wp_reset_query();
	//the_excerpt();
	//var_dump($recent);
?>
<a href='<?php echo esc_url( home_url( '/' ) )."blog"; ?>' class='readm' target='_blank'>Selebihnya dari blog kami</a>
<div style='clear:both;'></div>
</div>
</div>

	</div>
<?php get_footer(); ?>