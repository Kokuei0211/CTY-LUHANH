
<?php $msg = $this->session->flashdata('msg_success') ?>
<?php if ($msg) : ?>
	<div class="alert alert_submit_success alert-dismissible fade in" role="alert">
       	<button class="close" type="button" data-dismiss="alert" aria-label="Close">
        </button>
    	<strong></strong><?php echo $msg?>
    </div>
<?php endif; ?>

<?php $msg = $this->session->flashdata('msg_error') ?>
<?php if ($msg) : ?>
	<div class="alert alert_submit_error alert-dismissible fade in" role="alert">
       	<button class="close" type="button" data-dismiss="alert" aria-label="Close">
        </button>
    	<strong></strong><?php echo $msg?>
    </div>
<?php endif; ?>