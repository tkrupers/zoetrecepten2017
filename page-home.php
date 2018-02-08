<!-- Xenos Valentijnscampagne -->
<iframe style="display:none;" src="https://pubads.g.doubleclick.net/gampad/adx?iu=/4045/Blogads/188898404&sz=1x1&t=campaign%3D188898404_2234392795_1&c=123456789" width="1" height="1" border="0"></iframe>

<!-- Becel vegan chocoladeboter -->
<iframe style="display:none;" src="https://pubads.g.doubleclick.net/gampad/adx?iu=/4045/Blogads/188898404&sz=1x1&t=campaign%3D188898404_2099605589_11&c=123456789" width="1" height="1" border="0"></iframe>

<!-- Becel vegan chocoladeboter -->
<div style="display:none;"><img src="https://bs.serving-sys.com/serving/adServer.bs?cn=display&c=19&mc=imp&pli=22035507&PluID=0&ord=%%CACHEBUSTER%%&rtu=-1&pcp=$$DCMID$$" border="0" width="1" height="1" /></div>

<!-- Becel Valentijnsspritsen -->
<iframe style="display:none;" src="https://pubads.g.doubleclick.net/gampad/adx?iu=/4045/Blogads/188898404&sz=1x1&t=campaign%3D188898404_2099605589_12&c=123456789" width="1" height="1" border="0"></iframe>

<?php 
  while (have_posts()) : the_post();

   get_template_part('templates/post/content', 'firstpost');
   get_template_part('templates/content', 'blockquote');
   get_template_part('templates/home', 'recepten');
   get_template_part('templates/post/content', 'basisrecepten');
   get_template_part('templates/content', 'page');

 endwhile; 
?>
