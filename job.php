<div class="col-md-4 col-sm-6 my-2">
	<div class="card m-auto job" style="width: 20rem;">
		<div class="card-body">
			<h4 class="card-title"><?php echo $r['title']; ?></h4>
			<p class="card-text"><?php echo $r['description']; ?></p>
			<p class="card-text company"><?php echo $r['company']; ?></p>


			<div style="display: flex; justify-content: space-between; align-items: center;">
				<div style="font-weight: 600;">$<span class="salary"><?php echo $r['salary']; ?></span></div>

				<!-- Button save jobs -->
				<button title="Save Job" data-pid="<?php echo $r['id']; ?>" type="button" class="btn save-button">
					<span>
						<i class="fa fa-heart-o text-dark"></i>
					</span>
				</button>
				
				<!-- Button apply jobs -->
				<button type="button" class="btn apply-button"
					data-pid="<?php echo $r['id']; ?>"
					data-target="#applyModal" data-toggle="modal">
					<span class="text-white">
						Apply
					</span>
				</button>

				<!-- Modal -->
				<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenteredLabel">Apply to this job</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="templates\job.php" method="post">
									<div class="form-group">
										<label for="fullName">Full Name</label>
										<input type="text" class="form-control" id="fullName" placeholder="your full name">
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" placeholder="email">
									</div>
									<div class="form-group">
										<label for="experience">Experience</label>
										<input type="text" class="form-control" id="experience" placeholder="experience">
									</div>
									<div class="form-group">
										<label for="education">Upload Resume</label>
										<input type="file" class="form-control-file" id="resume">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>