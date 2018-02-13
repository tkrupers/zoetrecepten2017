<!-- Xenos Valentijnscampagne -->
<iframe style="display:none;" src="https://pubads.g.doubleclick.net/gampad/adx?iu=/4045/Blogads/188898404&sz=1x1&t=campaign%3D188898404_2234392795_1&c=123456789" width="1" height="1" border="0"></iframe>

<!-- Becel Valentijnsspritsen -->
<iframe style="display:none;" src="https://pubads.g.doubleclick.net/gampad/adx?iu=/4045/Blogads/188898404&sz=1x1&t=campaign%3D188898404_2099605589_12&c=123456789" width="1" height="1" border="0"></iframe>

<!-- Campagne zoetstof is OK artikel 1 -->
<iframe style="display:none;" src="https://pubads.g.doubleclick.net/gampad/adx?iu=/4045/Blogads/188898404&sz=1x1&t=campaign%3D188898404_2211016246_1&c=123456789" width="1" height="1" border="0"></iframe>

<!-- Campagne zoetstof is OK artikel 1 -->
<div style="display:none;"><img src="https://track.adform.net/adfserve/?bn=21087872;1x1inv=1;srctype=3;ord=[timestamp]" border="0" width="1" height="1" /></div>

<?php 
  while (have_posts()) : the_post();

   get_template_part('templates/post/content', 'firstpost');
   get_template_part('templates/content', 'blockquote');
   get_template_part('templates/home', 'recepten');
   get_template_part('templates/post/content', 'basisrecepten');
   get_template_part('templates/content', 'page');

 endwhile; 
?>
