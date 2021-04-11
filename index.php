<?php
	echo "Hello world!";
?>

<h1>Hello world!</h1>

<a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>

<br>

<a href="<?php echo esc_url( get_the_permalink( 2 ) ); ?>"><?php echo esc_html( get_the_title( 2 ) ); ?></a>

<?php
	$myPage = get_post( 2 );

	// echo '<pre>' . var_dump( $myPage ) . '</pre>';
?>

<h2><?php echo esc_html( $myPage->post_title ); ?></h2>

<span><?php echo esc_html( $myPage->post_date ); ?></span>

<?php
	$myPageArray = get_post( 2, ARRAY_A );

	// echo '<pre>' . var_dump( $myPageArray ) . '</pre>';
?>

<h2><?php echo esc_html( $myPageArray['post_title'] ); ?></h2>

<span><?php echo esc_html( $myPageArray['post_date'] ); ?></span>