<?php 
	            if ($this->uri->segment(3)) {
	            	// $blog_id = $this->uri->segment(3);              
	             //    $sql2 = $db->query("SELECT * FROM comment_tbl WHERE comment_blog_id = $blog_id ORDER BY create_date DESC");
	            ?>
	                <?php
	                if (!empty($sql2) && isset($sql2) && $sql2 != NULL) {
						foreach ($sql2 as $key) {

							$date = new dateTime($key->create_date);
							$date = date_format($date, 'M j, Y | H:i:s');
							// $code = $key->code;
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
							// $sql3 = "SELECT * FROM child_comment_tbl WHERE par_code = '$code' ORDER BY create_date DESC";
							// $chi_count = $db->num_rows($sql3);
							// $chi_result = $db->query($sql3);		
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
							if ($chi_count <=0 ) {
							} else {
							?>
								<a class="children" name="<?php echo $key->code; ?>"><span class="tog_text" style="padding-left: 10px;">Replies<i class="fa fa-angle-double-down fa-lg" aria-hidden="true">(<?php echo $chi_count; ?><?php //echo '<pre>', var_dump($chi_count), '</pre>' ?>)</i></span></a>
							</p>

							<!-- End of Reply and Replies Button -->
							<?php
							foreach ($chi_result as $child) {
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
							?>
							<?php
							}
							?>	
	    			<?php 
						}
					}
					else {
					?>
					<!-- No Comments -->
					<td><?php echo "No Comment"; ?></td>
			        <?php
					}
			    	?>
				<?php
	           	}
	            ?> 