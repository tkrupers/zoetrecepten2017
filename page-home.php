<!-- Becel do's en don'ts margarine -->
<iframe style="display:none;" src="https://pubads.g.doubleclick.net/gampad/adx?iu=/4045/Blogads/188898404&sz=1x1&t=campaign%3D188898404_2099605589_14&c=123456789" width="1" height="1" border="0"></iframe>

<!-- Hero post 1 2018 -->
<iframe style="display:none;" src="https://pubads.g.doubleclick.net/gampad/adx?iu=/4045/Blogads/188898404&sz=1x1&t=campaign%3D188898404_2264647800_1&c=123456789" width="1" height="1" border="0"></iframe>

<!-- Becel Flora  -->
<iframe style="display:none;" src="https://pubads.g.doubleclick.net/gampad/adx?iu=/4045/Blogads/188898404&sz=1x1&t=campaign%3D188898404_2250381054_1&c=123456789" width="1" height="1" border="0"></iframe>

<?php 
  while (have_posts()) : the_post();

   get_template_part('templates/post/content', 'firstpost');
   get_template_part('templates/content', 'blockquote');
   get_template_part('templates/home', 'recepten');
   get_template_part('templates/post/content', 'basisrecepten');
   get_template_part('templates/content', 'page');

 endwhile; 
?>
