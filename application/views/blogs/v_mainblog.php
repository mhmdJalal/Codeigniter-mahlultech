	<section class="section">

		<div class="row">

			<div class="col s12 m9 19">
	          	<div class="col s12 offset-s1">
	          		<h2 class="light font-pompadour"><span class="teal-text">Mahlul</span> Blog's</h2>
	          	</div>
	      	</div>

	      	<div class="col s12 m7 l9">

	      		<!-- Blog Slider -->
	      		<div class="col s11 offset-s1">

	      			<div class="slider" id="blogs_slider">
				      	<ul class="slides">
				      		<?php foreach ($blogs_featured as $row): ?>
					        <li>
					        	<a href="<?= base_url('blog/detail/'.$row['url']) ?>">
					        		<div class="col s12 blog-slider hoverable">
							        	<div class="left-align">
							            	<h3 class="white-text"><?= $row['title'] ?> </h3>
							          	</div>
						        	</div>
					          	<img class="responsive-img" src="<?= base_url('assets/img/blog/'.$row['cover'].".jpg") ?>" style="background-size: contain;">
					          	</a>
					        </li>
				      		<?php endforeach ?>
				      	</ul>
				    </div>
					      
	      		</div> <!-- End Blog Slider -->

	      		<!-- Content -->
	      		<div class="col s11 offset-s1">
	      			<?php 
	      				date_default_timezone_set('Asia/Jakarta');
	      				foreach ($blogs as $blog): 
						    $awal  = date_create($blog['date']);
						    $akhir = date_create();
						    $diff  = date_diff( $akhir, $awal );
						    $posted = "";
						    // jika selisih jam > 23
						    if ($diff->h > 23) {
						    	if ($diff->d >= 1) {
						    		$posted .= $diff->d." Hari lalu";
						    	} else {
						    		$posted = selisih_minggu($awal);
						    	}
						    } else {
						    	$posted .= $diff->h." Jam lalu";
						    }

						    $blog['title'];
						    $title = trim(substr($blog['title'], 0, 50));
						    if (strlen($blog['title']) > 50) {
						    	$title .= "...";
						    }
						    
					?>
					<div class="col s12 m4">
				      <div class="card hoverable medium" data-toggle="tooltip" title="<?= $blog['title'] ?>">
				        <a href="<?= base_url('blog/detail/'.$blog['url']) ?>">
				        	<div class="card-image">
					          <img class="activator" src="<?= base_url('assets/img/blog/'.$blog['cover'].".jpg"); ?>">
					        </div>
					        <div class="card-content">
					          	<span class="card-title activator grey-text text-darken-4"><?= $title ?></span>
					        </div>
					        <div class="card-action">
					          <div class="col s3 m3">
						    		<img class="responsive-img" src="<?= base_url('assets/img/man.png') ?>" alt="">
						    	</div>
						    	<div class="col s9 m9">
							    	<span class="grey-text text-darken-4"><?= $posted?></span><br>
							    	<span class="teal-text"><?= $blog['author'] ?></span>
						    	</div>
					        </div>
				        </a>
				      </div>
				    </div>
	      			
	      			<?php endforeach ?>

	      		</div> <!-- End Content -->

	      		<div class="col s12 center">
	      			<?= $this->pagination->create_links(); ?>
	      		</div>

		    </div>

		    <!-- Right Sidebar -->
	      	<div class="col s12 m4 l3 hide-on-med-and-down" id="right_sidebar">

	      		<!-- Search -->
	      		<div class="col s12" id="search">
          			<form action="" method="get">
          				<h6 class="light font-pompadour">Search Article</h6>
          				<div class="input-field">
	          				<input class="icon-box" type="text" name="search" placeholder="Search Artikel" required>
	          				<i class="material-icons">search</i>
	          			</div>
          			</form>
	          	</div> <!-- End Search -->
	          	
	          	<!-- Newest Post -->
				<div class="col s12">
          			<h5 class="light">Newest Post</h5>
      				<?php foreach ($popular->result_array() as $result): ?>
      				<div class="divider"></div>
			        <div class="row valign-wrapper" data-toggle="tooltip" title="<?= $result['title'] ?>">
			            <div class="col s4">
			              	<img src="<?= base_url('assets/img/blog/'.$result['cover'].".jpg") ?>" alt="" class="responsive-img">
			            </div>
			            <div class="col s10">
			              	<a href="<?= base_url('blog/detail/'.$result['url']) ?>" class="black-text">
			                <?= $result['title'] ?>
			    	        </a>
			            </div>
			        </div>
      				<?php endforeach ?>
          		</div> <!-- End of Newest post -->

          		<!-- Popular Post -->
				<div class="col s12">
          			<h5 class="light">Popular Post</h5>
      				<?php foreach ($popular->result_array() as $result): ?>
      				<div class="divider"></div>
			        <div class="row valign-wrapper" data-toggle="tooltip" title="<?= $result['title'] ?>">
			            <div class="col s4">
			              	<img src="<?= base_url('assets/img/blog/'.$result['cover'].".jpg") ?>" alt="" class="responsive-img">
			            </div>
			            <div class="col s10">
			              	<a href="<?= base_url('blog/detail/'.$result['url']) ?>" class="black-text">
			                <?= $result['title'] ?>
			    	        </a>
			            </div>
			        </div>
      				<?php endforeach ?>
          		</div> <!-- End of Popularpost -->

	      	</div>

		</div>
	</section>