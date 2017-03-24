<!-- Modal <?php echo $portfolio[1][0]; ?> -->
<div class="modal fade" id="<?php echo $portfolio[1][0]; ?>" role="dialog">
	<div class="modal-dialog modal-lg">

	  <!-- <?php echo $portfolio[1][0]; ?> content-->
	  <div class="modal-content">
	    
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">X</button>
	      <h4 class="modal-title"><?php echo $portfolio[1][0]; ?></h4>
	    </div>

	    <div class="modal-body">

	      <?php for($i=1;$i<=20;$i++) { ?>

	      <div class="thumbnail">
	        <img class="img-responsive" src="images/portfolio/facade/<?php echo $i; ?>.jpg" alt="<?php echo $portfolio[1][0]; ?>" title="<?php echo $company.' '.$portfolio[1][0]; ?>">
	        <div class="caption">
	          <button type="button" class="close" data-dismiss="modal">X</button>
	          <p><?php echo $portfolio[1][0]; ?></p>
	        </div>
	      </div>

	      <?php } ?>

	    </div>

	    <div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $close_button; ?></button>
	    </div>

	  </div>
	</div>
</div>