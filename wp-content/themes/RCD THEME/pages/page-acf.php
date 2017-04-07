<?php 

/* 
	template name: acf
*/

if (have_posts()) the_post();
	
 get_header();?>

<!-- PARA IMPRIMIR LOS CAMPOS DEL TEMPLATE PAGE -->
<?php 
	$nombre = get_field('nombre');
	echo $nombre;
	
	$foto = get_field('foto');
// 	print_r($foto);
// 	echo $foto ['sizes']['medium'];

// 	echo get_field('facebook','option');
	$fb = get_field('facebook', 'option');
	
	$banners = get_field('banner');

	print_r($banners);
	
?>	
<!--  <img src="<?php echo $foto ['sizes']['medium']; ?>" alt="<?php echo $foto['alt']?>"> IMAGEN A TAMAÑO, OCUPAMOS EL PRINT_R PARA VER EL ARRAY Y ELEGIR EL TIPO DE MEDIDA-->
<!--   <img src="<?php echo $foto ['url']; ?>" alt="<?php echo $foto['alt']?>"> --> <!-- IMAGEN A FULL SIZE -->
  
<!--   <a href="<?php echo $fb; ?>"> FB </a> -->
	
	
	<div class="carrousel">
		
		<?php foreach ($banners as $banner) : ?>
			<div class="item">
				<a href="<? echo $banner['url']; ?>" target="<? echo $banner['destino']; ?>" title="<? echo $banner['nombre']; ?>" >
					<img src="<? echo $banner['imagen']['url']; ?>" alt="<? echo $banner['imagen']['alt']; ?>">
				</a>
			</div>
		<? endforeach;?>
		
	</div>
	
<?php get_footer();?>