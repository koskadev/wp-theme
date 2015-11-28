<?php
if(have_posts()){
  while(have_posts()) : the_post();
  echo(<h2>the_title())</h2>;
  echo(the_content());
  end while
  else:
    echo'<p>No Posts Found !<p>';
    endif;
}



?>
