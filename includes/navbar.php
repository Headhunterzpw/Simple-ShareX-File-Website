<nav class="navbar navbar-default navbar-fixed-top">
   <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href=<?php if($image == 'false'){ echo '"#"'; } else { echo '"'.$image_url.'"'; } ?>><?php if($image == 'false'){ echo $owner."'s File Dump"; } else { echo '<img src="'.$image_location.'">'; } ?></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">
            <li><a href="https://twitter.com/ItsYive" target="_blank">Twitter</a></li>
         </ul>
      </div>
      <!--/.nav-collapse -->
   </div>
</nav>