<?php
// if (isset($_GET["blog_id"])) {
// 	if ($_GET["blog_id"] != "" && is_numeric($_GET["blog_id"])) {
		
// 		$db = new Database();

// 		$blog_id = $_GET["blog_id"];
// 		$data = array("blog_id"=> $blog_id);
// 		$sql = "SELECT * FROM blogs_tbl WHERE blog_id = ?";

// 		$result = $db->select($sql, $data, array('s'));

		// echo var_dump($result);
?>
		<!-- Blog Detail Content -->
		<div class="row">
			<div class="col-md-12" style="padding-top: 20px;">
				<div class="media">
					<h4 class="media-heading"><?php echo $result->blog_title; ?></h4>
  					<div class="media-top media-middle">
      					<img class="media-object img-responsive" src="<?php echo base_url(); ?>assets/images/<?php echo $result->blog_image_large; ?>" alt="...">
  					</div>
  					<div class="media-body">
  						<p><?php echo $result->create_date; ?></p>
    					<p class="text"><?php echo $result->blog_details_full; ?></p>
  					</div>
				</div>
			</div>
		</div>
		<!-- End of Blog Content -->
<?php
// 	}

// }
?>
		<!-- Comment -->
		<div class="row">
			<div class="center-block" style="width:500px;">
				<!-- Form Start -->
	            <form class="form-horizontal" method="post" action="process/blogComment_process.php">
					<div class="form-group">
						<h3 class="text-center">Post Comment</h3>
							<textarea class="form-control" rows="3" id="comment" style="resize: vertical" name="comment" placeholder="Leave Your Comment Here..." required></textarea>
					</div>
					<input type="hidden" value="<?php echo $this->uri->segment(3); ?>" name="blog_id" />
					<input type="hidden" value="<?php if ($this->session->userdata('email')) {
	$comment_sender_email = $this->session->userdata('email');
	}
	else {
	$comment_sender_email = "Anonymous";
	} echo $comment_sender_email; ?>" name="member_email" />
					<div class="col-md-offset-10 col-xs-offset-10" style="float:right;">
						<input class="btn btn-default" type="submit" value="Submit"/>
					</div>
	            </form>
	            <!-- End of Form -->
            	<div class="clearfix"></div>
            	<!-- View Comments -->
	            <?php 

	            if ($this->uri->segment(3)) {

	            	if (!empty($sql2) && isset($sql2) && $sql2 != NULL) {
						foreach ($sql2 as $key) {


						$date = new dateTime($key->create_date);
						$date = date_format($date, 'M j, Y | H:i:s');

						?>
                		<!-- Start Parent Comment -->
						<div class="panel panel-primary" id="<?php echo $key->code; ?>">
						  	<div class="panel-heading">
							    <h3 class="panel-title pull-left"><?php echo $key->comment_sender_email; ?></h3>
							    <h5 class="panel-title pull-right"><?php echo $date; ?></h5>
							    <div class="clearfix"></div>
						  	</div>
						  	<div class="panel-body">
							    <?php echo $key->comment; ?>				  	
						  	</div>
						</div>
						<!-- End of Parrent Comment -->
						<?php						

						$this->db->where('par_code', $key->code);

						$query = $this->db->get('child_comment_tbl');

						$chi_Coms = $query->result();
						
						$replies = $query->num_rows();

						?>

						<!-- Start of Reply and Replies Button -->
						<p class="text-right" style="cursor:pointer;">
							<a class="reply_comment" id="reply_comment" name="<?php echo $key->code; ?>" blogid="<?php echo $this->uri->segment(3); ?>" account="<?php if ($this->session->userdata('email')) {
$comment_sender_email = $this->session->userdata('email');
}
else {
$comment_sender_email = "Anonymous";
} echo $comment_sender_email; ?>">Reply</a>
						<?php 

						// foreach ($chi_countx as $chi_count) {
						// 	echo '<pre>', var_dump($chi_count), '</pre>';
						// }
						if ($replies <=0 ) {
						} else {
						?>
							<a class="children" name="<?php echo $key->code; ?>"><span class="tog_text" style="padding-left: 10px;">Replies<i class="fa fa-angle-double-down fa-lg" aria-hidden="true">(<?php echo $replies; ?><?php //echo '<pre>', var_dump($chi_count), '</pre>' ?>)</i></span></a>
						</p>
						<!-- End of Reply and Replies Button -->

						<?php

							foreach ($chi_Coms as $child) {
								$date2 = new dateTime($child->create_date);
								$date2 = date_format($date2, 'M j, Y | H:i:s');
							?>
							<!-- Start of Child Comments -->
							<div class="child-comments C-<?php echo $key->code; ?>" style="margin-left: 20px;">
								<div class="panel panel-info">
								  	<div class="panel-heading">
									    <h3 class="panel-title pull-left"><?php echo $child->child_comment_sender_email; ?></h3>
									    <h5 class="panel-title pull-right"><?php echo $date2; ?></h5>
									    <div class="clearfix"></div>
								  	</div>
								  	<div class="panel-body">
									    <?php echo $child->child_comment; ?>				  	
								  	</div>
								</div>
							</div>
							<!-- End of Child Comments -->
							<?php
							}
							
						// $date = new dateTime($key->create_date);
						// $date = date_format($date, 'M j, Y | H:i:s');

						// echo '<pre>', $key->code, '</pre>';
						// echo '<pre>', $key->comment_sender_email, '</pre>';
						// echo '<pre>', $date, '</pre>';
						// echo '<pre>', $key->comment, '</pre>';

						// $this->db->where('par_code', $key->code);

						// $query = $this->db->get('child_comment_tbl');
						
						// $replies = $query->num_rows();

						// echo $replies;

						// echo '<pre>' . '</pre>';
						// foreach ($chi_count as $child) {
						// 	// echo '<pre>' . '</pre>';
						// 	echo '<div style="color:blue">', $child->child_comment, '</div>';
						// 	// echo '<pre>' . '</pre>';
						// }
						// echo '<pre>', $chi_count, '</pre>';

						}
					}
	            }
	            	else {
					?>
					<!-- No Comments -->
					<td><?php echo "No Comment"; ?></td>
			        <?php
					}
			    	?>
        	</div>
        	<?php
        	}
        	?>
				
        </div> <!-- End of div Row -->
						

<?php 

?>
