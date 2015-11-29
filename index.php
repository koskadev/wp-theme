<?php

get_header();
if(have_posts()){
  while(have_posts()) : the_post();
  
  <article clas="post">
  echo(<h2><a href=the_permalink();>the_title()</a></h2>);
  echo(the_content(););
  </article>
  end while
  else:
    echo'<p>No Posts Found !<p>';
    endif;
}
get_footer();


?>
