<?php
    # what language we shall use with the GET method

              if (!(isset($_GET['lang']))) {
                $lang = 'en';
                include '../lang/'.$lang.'-lang.php';
              } else {
                $lang = $_GET['lang'];
                include '../lang/'.$lang.'-lang.php';
              }           
           
    
?>

	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">X</button>
	      <h4 class="modal-title"><?php echo $portfolio[0][0]; ?></h4>
	    </div>

	    <div class="modal-body">

	      <?php

	      for($i=1;$i<=46;$i++) {

	        if ($i == 2) {
	          for ($j=1;$j<=2;$j++) {
	            $k=3-$i;
	      
	      ?>

	      <div class="thumbnail">
	        <img class="img-responsive" src="images/portfolio/rcw/<?php echo $k.'-'.$j; ?>.jpg" alt="<?php echo $portfolio[0][0]; ?>" title="<?php echo $company.' '.$portfolio[0][0]; ?>">
	        <div class="caption">
	          <button type="button" class="close" data-dismiss="modal">X</button>
	          <p><?php echo $portfolio[0][0]; ?></p>
	        </div>
	      </div>

	      <?php

	          }
	        }

	      ?>

	      <div class="thumbnail">
	        <img class="img-responsive" src="images/portfolio/rcw/<?php echo $i; ?>.jpg" alt="<?php echo $portfolio[0][0]; ?>" title="<?php echo $company.' '.$portfolio[0][0]; ?>">
	        <div class="caption">
	          <button type="button" class="close" data-dismiss="modal">X</button>
	          <p><?php echo $portfolio[0][0]; ?></p>
	        </div>
	      </div>

	      <?php
	      
	      }
	      
	      ?>

	    </div>

	    <div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $close_button; ?></button>
	    </div>