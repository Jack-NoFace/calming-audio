			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<p>Designed by <a href="https://whatjackhasmade.co.uk">Jack Davies</a> & Developed by <a href="https://benmichaeljoy.com">Ben Joy</a></a></p>


				<div class="bottom-line">
					<div class="social-media">
						<a href="https://twitter.com/calmingaudio"><div class="social"><svg class="icon social-icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#twitter"/></svg></div></a>
						<a href="https://www.facebook.com/Calming-Audio-824246891033884/"><div class="social"><svg class="icon social-icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#facebook"/></svg></div></a>
						<a href="https://github.com/JackDaviesWork/calming-audio"><div class="social"><svg class="icon social-icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#github"/></svg></div></a>

					</div>

					<div class="copyright">
					<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. </p>
					</div>
				</div>



			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<script>
		document.getElementById('increaseMaster').onclick = function() {
			var sounds = document.getElementsByTagName('audio');
			for(i=0; i<sounds.length; i++) sounds[i].volume += 0.1;
		};

		document.getElementById('muteMaster').onclick = function() {
			var sounds = document.getElementsByTagName('audio');
			for(i=0; i<sounds.length; i++) sounds[i].volume -= 0.1;
		};

		document.getElementById('pauseMaster').onclick = function() {
			document.getElementById("pauseMaster").classList.add("display--none");
			document.getElementById("playMaster").classList.remove("display--none");
			var sounds = document.getElementsByTagName('audio');
			for(i=0; i<sounds.length; i++) sounds[i].pause();
		};

		document.getElementById('playMaster').onclick = function() {
			document.getElementById("playMaster").classList.add("display--none");
			document.getElementById("pauseMaster").classList.remove("display--none");
			var sounds = document.getElementsByTagName('audio');
			for(i=0; i<sounds.length; i++) sounds[i].play();
		};
		</script>

		<!-- analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-102667525-1', 'auto');
			ga('send', 'pageview');
		</script>

	</body>
</html>
