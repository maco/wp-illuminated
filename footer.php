			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
					
					<nav role="navigation">
    					<?php illuminated_footer_links(); ?>
	                </nav>
<?php $options = get_option( 'illuminated_theme_options' ); ?>
<p class="source-org copyright">&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?>. </p>
				</div> <!-- end #inner-footer -->
		
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
