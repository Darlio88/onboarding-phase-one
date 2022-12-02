<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="" />
		<title></title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="styles/uikit/plugins/global/plugins.bundle.css?v=<?php echo filemtime('styles/uikit/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="styles/uikit/css/style.bundle.css?v=<?php echo filemtime('styles/uikit/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<!-- our custom styles -->
		<link href="styles/main.css?v=<?php echo filemtime("styles/main.css"); ?>" rel="stylesheet" type="text/css" />
		<link href="styles/raw-main.css?v=<?php echo filemtime("styles/raw-main.css"); ?>" rel="stylesheet" type="text/css" />
		<!-- our custom styles end-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div id="app_container" class="position-relative">
		<!-- Begin::your code -->

		<!-- modal wrapper -->
		<div class="position-absolute modal_wrapper w-100">



		<!-- modal -->
		<div class=" d-lg-flex container my-8 w-lg-90 w-100 rounded-2">
			<!-- modal-left -->
			<div class='modal_left position-relative '>
<!-- header of left modal -->
		<div class="modal_left_header ps-4 d-flex align-items-center justify-content-start">
			<h4 class="fw-bolder text-dark">Preview</h4>
			<!-- approved-section -->
			<div class="approved_section p-2 rounded-2 d-flex align-items-center justify-content-between">
			<i class="bi text-success bi-ui-checks-grid"></i>
			<small class="ms-2 fw-bolder">Approved</small>
			</div>
		</div>
		<!-- banner containing info -->
		<div class="rounded-2 shadow-sm pt-2">
			<!-- actions -->
			<div class=' d-flex align-items-center m-3 justify-content-between'>
            <!-- arrow left -->
			<div class="p-2">
			<i  class="bi text-dark fs-2 bi-chevron-left"></i>
			</div>
			<!-- social media icons center -->
			<div class="d-flex align-items-center  justify-content-between">
				<div class="ms-2 p-1 bg-secondary rounded-2">
				<img src='./media/facebook.png' width="24px" />
				</div>
				<div class="ms-2 px-8 py-1 bg-secondary rounded-2">
				<img src='./media/instagram.png' width="24px"  />
				</div>
				<div class="ms-2 p-1 bg-secondary rounded-2">
				<img src='./media/github.png' width="24px"  />
				</div>
				<div class="ms-2 p-1 bg-secondary rounded-2">
				<img src='./media/twitter.png' width="24px" />
				</div>
				
			</div>
			<!-- arrow right -->
			<div class="p-2">
			<i class="bi fs-2 text-dark fw-bolder bi-chevron-right"></i>
			</div>
			</div>
			<!-- image for banner -->
			<div>
             <img src='./media/spice-image.png' width="100%"/>
			</div>
			<!-- information about the banner -->
			<div class="px-5 my-3">
			<p class=" d-inline">
				In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. It is also used to temporarily replace text in a process called greeking, which allows designers to consider the form of a webpage or public
			</p>
			<button type="button" class=" d-inline btn btn-light my-2">See More</button>
			</div>
			<!-- divider -->
			<hr class="hr-blurry hr mx-2" />
			

<!-- bottom of banner -->
<div>
	<!-- client details/name -->
	<div class="d-flex px-4 py-2 rounded-2 mx-2 my-4 d-flex align-items-center justify-content-between w-50 bg-secondary shadow-sm">
<!-- client details left -->
		<div>
			<h6 class="text-muted">Select client</h6>
			<div class="d-flex ">
			<i class="bi text-danger fs-2 bi-currency-bitcoin"></i>
			<p class="h4">Batesa Entreprises Ltd</p>
			</div>
		</div>
<!-- client drop down -->
		<div class="d-flex">
			<button class="d-flex border-0 bg-transparent rounded-2"><i class="bi  bi-x"></i></button>
		    <button class="d-flex border-0 bg-transparent rounded-2"><i class="bi  bi-chevron-down"></i></button>
		
		</div>
	</div>

	<!-- content type -->
	<div class="d-flex px-4 py-2 border rounded-2 mx-2 my-4 d-flex align-items-center justify-content-between w-50 border-secondary shadow-sm">
<!-- content type details left -->
		<div>
			<h6 class="text-muted">Content Type</h6>
			<div class="d-flex ">
			<p class="h6">Social media</p>
			</div>
		</div>
<!-- content drop down -->
		<button class="d-flex border-0 bg-transparent rounded-2">
		<i class="bi bi-chevron-down"></i>
		</button>
	</div>
	<!-- selected socials -->
<div>
	<!-- selected socials upper -->
	<div class="px-4 my-4 d-flex align-items-center justify-content-start">
		<h6>Selected Socials</h6>
		<button class="ms-2 border-0 bg-transparent rounded-2">
		<i class="bi text-primary fs-2 bi-pencil-square"></i>
		</button>
	</div>
	<!-- selected-socials bottom -->
	<div class="d-flex my-4 align-items-center justify-content-between w-50" >
			<!-- arrow left -->
			<button class="p-2 border-0 bg-transparent rounded-2">
			<i class="bi fs-2 text-primary bi-arrow-left-short"></i>
			</button>
			<div class="d-flex align-items-center justify-content-start">
				<!-- profile pictutres -->
				<div class="p-2 ms-1 bg-danger rounded-3">
				<img src="./media/girl.png" width="32px" />
				</div>
				<div class="p-2 ms-1 bg-danger rounded-3">
				<img src="./media/woman.png" width="32px" />
				</div>
				<div class="p-2 ms-1 bg-danger rounded-3">
				<img src="./media/girl.png" width="32px" />
				</div>
				<div class="p-2 ms-1 bg-danger rounded-3">
				<img src="./media/woman.png" width="32px" />
				</div>
			</div>
			<!-- arrow right -->
			<button class="p-2 border-0 bg-transparent rounded-2">
			<i class="bi fs-2 text-primary bi-arrow-right-short"></i>
			</button>
	</div>
</div >
	<!-- scheduler section -->
	<div class="d-flex my-4 px-3 w-75 align-items-center justify-content-between">
		<h5 class="fw-bolder text-dark">Scheduled for</h5>
		<small class="text-muted">23/Jun/2022 - 9:30pm</small>
	<button class="ms-2 border-0 bg-transparent rounded-2">
		<i class="bi fs-2 text-primary bi-pencil-square"></i>
	</button>
	</div>
	<!-- divider -->
	<hr class="hr-blurry hr mx-2" />
	<!-- campaign section -->
	<div class="px-2 d-flex my-4 align-items-center ">
		<h3>Campaign:</h3>
		<a href="#" class="ms-2 mt-1 text-primary fw-bolder">This is our moment</a>
	</div>
</div>
</div>
<!-- lower section for left side of modal -->
<div class="lower_section_modal w-100 px-2 py-2 position-absolute d-flex align-items-center justify-content-between">
<div class="d-flex align-items-center ">
	<button class="ms-2 px-2 fw-bolder py-2 d-flex align-items-center border border-dark text-dark bg-transparent rounded-2">
		<i class="bi text-dark bi-ui-checks-grid mx-2"></i>
	Delete
	</button>
	<button class="ms-2 border fw-bolder border-dark text-dark px-2 py-2 d-flex align-items-center bg-transparent rounded-2">
		<i class="bi text-dark bi-ui-checks-grid mx-2"></i>
		Show
	</button>
</div>
<div class="d-flex align-items-center ">
	<button class="px-2 fw-bolder text-warning py-2 d-flex align-items-center border border-warning bg-transparent rounded-2">
		<i class="bi text-warning  bi-ui-checks-grid mx-2"></i>
	UNDO APPROVED
	</button>
	<button class="ms-2 px-2 py-2 fw-bolder bg-warning text-dark bg-warning d-flex align-items-center border-0 rounded-2">
		<i class="bi text-dark bi-ui-checks-grid mx-2"></i>
		EDIT
	</button>
</div>

</div>
</div>
		<!-- modal-right -->
			<div class='modal_right ms-2 position-relative'>
				<!-- header section -->
            <div class="modal_header_right d-flex align-items-center justify-content-start mb-4 ps-3">
            <h4>ACTIVITY</h4>
			</div>
			<!-- main comment section -->
			<div class="mx-3 form-outline px-4 shadow position-relative bg-white py-2 rounded-2">
				<div class="d-flex align-items-center">
					<div class="p-1 bg-warning rounded-4 d-flex align-items-center justify-content-center">
					<img src="./media/girl.png" class="ms-2" width="40px"/>
					</div>
					<div class="ms-4">
						<label for="people"></label>
						<select class="bg-white text-warning ps-2 border border-warning rounded-4" name="people" id="people">
						<option value="To Everyone">To Everyone</option>
						<option value="To Only Agency">To Only Agency</option>
						</select>
					</div>
				</div>
				
				
			<label class="form-label" for="textAreaExample">Message</label>

			<textarea class="form-control shadow-sm border-0" id="textAreaExample1" rows="2"></textarea>
           <!-- action buttons under text input -->
		   <!-- divider  -->
		   <hr class="hr-blurry hr mx-2" />
		   <div class="d-flex align-items-start justify-content-between">
		   <div>
				<button class="border-0 bg-white rounded-2"><i class="bi fs-1 bi-type-bold"></i></button>
				<button class="border-0 bg-white rounded-2"><i class="bi fs-1 bi-type-italic"></i></button>
				<button class="border-0 bg-white rounded-2"><i class="bi fs-1 bi-type-underline"></i></button>
				<button class="border-0 bg-white rounded-2"><i class="bi fs-1 bi-list-ul"></i></button>
				<button class="border-0 bg-white rounded-2"><i class="bi fs-1 bi-list-ol"></i></button>
            </div>
			<button type="button" class="px-3 py-2 rounded-2 border-0 bg-warning ">Add Comment</button>
		   </div>
	
			</div>
<!-- publishing section -->
			<div class="my-8 mx-3 container">
				<!-- publishing line -->
				<div class="row my-2">
				<div class="col-sm-9 d-flex flex-wrap text-dark ">
				<b class="text-muted mx-1">System:</b>
				<p class="text-muted mx-1">Publishing to </p>
				<p class="text-primary mx-1">facebook - Batesa official</p>
				 <small class="mx-1 text-dark">&#62</small>
				<b class="text-success mx-1">Successful</b>
			     </div>
				 <!-- time -->
				 <div class="col-sm-3" ><p class="text-muted">30 minutes ago</p></div>
				</div>
				<!-- publishing line -->
				<div class="row my-2">
				<div class="col-sm-9 d-flex flex-wrap text-dark ">
				<h6 class="text-muted ms-2">System:</h6>
				<p class="text-dark ms-2">Publishing to</p>
				<p class="text-primary ms-2 fst-italic">Twitter - Batesa Enterprises Ltd</p>
				 <small class="ms-2 text-dark">&#62</small>
				<h6 class="text-success ms-2">Successful</h6>
			     </div>
				 <!-- time -->
				 <div class="col-sm-3" ><p class="text-muted">30 minutes ago</p></div>
				</div>
	
				<!-- publishing line -->
				<div class="row my-2">
				<div class="col-sm-9 d-flex flex-wrap text-dark ">
				<h6 class="text-muted ms-2">System:</h6>
				<p class="text-dark ms-2">Publishing to Instagram</p>
				<p class="text-dark fw-bolder ms-2">@kamo_group</p>
				<small class="ms-2 text-dark">&#62</small>
				<h6 class="text-danger ms-2">Failed</h6>
				<small class="ms-2 text-dark">-</small>
				<p class="text-info ms-2">Try Again</p>
			     </div>
				 <!-- time -->
				 <div class="col-sm-3" ><p class="text-muted">30 minutes ago</p></div>
				</div>
				<!-- publishing line -->
				<div class="row my-2">
				<div class="col-sm-9 d-flex flex-wrap text-dark ">
				<h6 class="text-muted ms-2">System:</h6>
				<p class="text-dark ms-2">Publishing to</p>
				<p class="text-dark fw-bolder ms-2">Facebook Group - Batesa Fun Group</p>
				<small class="ms-2 text-dark">&#62</small>
				<h6 class="text-danger ms-2">Failed</h6>
				<small class="ms-2 text-dark">-</small>
				<p class="text-info ms-2">Try Again</p>
			     </div>
				 <!-- time -->
				 <div class="col-sm-3" ><p class="text-muted">30 minutes ago</p></div>
				</div>
				<!-- publishing line -->
				<div class="row my-2">
				<div class="col-sm-9 d-flex flex-wrap text-dark ">
				<h6 class="text-muted ms-2">System:</h6>
				<p class="text-dark ms-2">Publishing to instagram</p>
				<p class="text-primary ms-2">@batesaentug</p>
				<small class="ms-2 text-dark">&#62</small>
				<h6 class="text-success ms-2">Successful</h6>
			     </div>
				 <!-- time -->
				 <div class="col-sm-3" ><p class="text-muted">30 minutes ago</p></div>
				</div>
	
				<!-- publishing line -->
				<div class="d-flex align-items-center justify-content-between">
				<span class="d-flex">
				<h6 class="text-muted ms-2">System:</h6>
				<p class="text-dark ms-2">Publishing to</p>
				<p class="text-primary ms-2">Twitter(Batesa group)</p>
				<small class="ms-2 text-dark">&#62</small>
				<h6 class="text-success ms-2">Successful</h6>
			     </span>
				 <!-- time -->
				 <div ><p class="text-muted">30 minutes ago</p></div>
				</div>



			</div>
<!-- Grace Logan -->
		<div class="container my-8 mx-3">
			<div class="row w-100">
				<!-- profile pic -->
				<div class="col-sm-1 rounded-1 p-1 flex align-items-center justify-content-center ">
					<img src="./media/girl.png" width="40px" />
				</div>
			<!-- Grace logans comment section -->
			<div class="col-sm-11 shadow rounded-2 px-2 py-3 bg-white">
				<!-- grace logans details -->
				<div class="d-flex  align-items-center justify-content-between w-100">
					<div class="d-flex align-items-center justify-content-between">
						<h5>Grace Logan</h5>
						<div class="ms-4 py-1 px-2 bg-success opacity-75 text-danger rounded-1"><h6>Approved</h6></div>
					</div>
					<div>
						<small class="fw-bolder text-info">2 hours ago</small>
					</div>
				</div>
				<!-- divider -->
				<hr class="hr-blurry hr mx-2" />
				<div class="d-flex justify-content-between align-items-center">
				<input class="border-0 ps-2 py-2 text-secondary w-100 mt-4" placeholder="Reply..."/>
				<i class="bi fs-2 bi-paperclip"></i>
				</div>

			</div>

			</div>
			
		</div>



		<div class="my-8 mx-3">
<p><b class="text-info">Grace Logan:</b>Updated Scheduling from <b>22/Jun/2022</b> to <b>23/Jun/2022</b></p>
		</div>
		<!-- Mukula Francis -->
		<div class="container my-8 mx-3">
			<div class="row w-100">
				<!-- profile pic -->
				<div class="col-sm-1 rounded-1 p-1 flex align-items-center justify-content-center ">
					<img src="./media/girl.png" width="40px" />
				</div>
			<!-- Grace logans comment section -->
			<div class="col-sm-11 shadow rounded-2 px-2 py-3 bg-white">
				<!-- grace logans details -->
				<div class="d-flex  align-items-center justify-content-between w-100">
					<div class="d-flex align-items-center justify-content-between">
						<h5>Mukula Francis</h5>
						<div class="ms-4 py-1 px-2 opacity-75 bg-primary text-info rounded-1"><h6>Updated</h6></div>
					</div>
					<div>
						<small class="fw-bolder text-info">2 hours ago</small>
					</div>
				</div>
				<!-- divider -->
				<hr class="hr-blurry hr mx-2" />
				<div class="d-flex justify-content-between align-items-center">
				<input class="border-0 ps-2 py-2 text-secondary w-100 mt-4" placeholder="Reply..."/>
				<i class="bi fs-2 bi-paperclip"></i>
				</div>

			</div>

			</div>
			
		</div>
				<!-- Mukula Francis -->
				<div class="container my-8 mx-3">
			<div class="row w-100">
				<!-- profile pic -->
				<div class="col-sm-1 rounded-1 p-1 flex align-items-center justify-content-center ">
					<img src="./media/girl.png" width="40px" />
				</div>
			<!-- Grace logans comment section -->
			<div class="col-sm-11 shadow rounded-2 px-2 py-3 bg-white">
				<!-- grace logans details -->
				<div class="d-flex  align-items-center justify-content-between w-100">
					<div class="d-flex align-items-center justify-content-between">
						<h5>Mukula Francis</h5>
						<div class="ms-4 py-1 px-2 commented_color opacity-75 rounded-1"><h6>Commented</h6></div>
					</div>
					<div>
						<small class="fw-bolder text-info">2 hours ago</small>
					</div>
				</div>
				<div>
					<p>Could we have the image changed to a person holding a basket? I think this will give a clear picture of what the product we're trying to sell is,</p>
					<div class="d-flex align-items-center justify-content-start">
						<button class="p-2 bg-transparent border-0 ">
							<i class="bi text-primary  bi-chat-fill bg-transparent"></i>
							<small class="ms-1 fw-bolder text-dark">3</small>
						</button>
						<button class="p-2 ms-2 border-0 bg-transparent">
						<i class="bi text-danger bi-suit-heart-fill"></i>
							<small class="ms-1 fw-bolder">12</small>
						</button>
					</div>
				</div>
				<div>
					<div class="container mx-3 my-8">
						<div class="row my-2 w-100">
							<div class="col-sm-1">
								<img src="./media/woman.png" width="40px" />
							</div>
							<div class="col-sm-11  ps-4">
								<div class="d-flex justify-content-between align-items-center">
									<h4>Mr. Henderson</h4>
									<small>3 hours ago</small>
								</div>
								<div>
									<p>Hi Grace, yes this is ok. Let me talk to the team.Please check back in 2 hours</p>
								</div>
							</div>
						</div>
						<div class="row my-2">
							<div class="col-sm-1">
								<img src="./media/woman.png" width="40px" />
							</div>
							<div class="col-sm-11 ps-4">
								<div class="d-flex justify-content-between align-items-center">
									<h4>Mr. Henderson</h4>
									<small>3 hours ago</small>
								</div>
								<div >
									<p>Hi Grace, yes this is ok. Let me talk to the team.Please check back in 2 hours</p>
								</div>
							</div>
						</div>
					</div>
					</div>
					<!-- divider  -->
					<hr class="hr-blurry hr mx-2" />
				<div class="d-flex justify-content-between">
				<input class="border-0 ps-2 py-2 text-secondary w-100 mt-4" placeholder="Reply..."/>
				<i class="bi fs-2 bi-paperclip"></i>

				</div>

				</div>

			</div>

			</div>
<!-- Grace Logan -->
<div class="container mx-3 my-8">
			<div class="row w-100">
				<!-- profile pic -->
				<div class="col-sm-1 rounded-1 p-1 flex align-items-center justify-content-center ">
					<img src="./media/girl.png" width="40px" />
				</div>
			<!-- Grace logans comment section -->
			<div class="col-sm-11 shadow rounded-2 px-2 py-3 bg-white">
				<!-- grace logans details -->
				<div class="d-flex  align-items-center justify-content-between w-100">
					<div class="d-flex align-items-center justify-content-between">
						<h5>Grace Logan</h5>
						<div class="ms-6 py-1 px-2 bg-warning text-info rounded-1"><h6>Edited Caption</h6></div>
					</div>
					<div>
						<small class="fw-bolder text-info">2 hours ago</small>
					</div>
				</div>
				<div class="position-relative border my-4 rounded-2 border-info flex text-wrap">
					<small class="smaller__default bg-white px-2 position-absolute text-info fw-bolder">Revisited Default</small>
					<p class="my-2 mx-2">Long before you sit down to put digital pen to paper you need to make sure you have to sit down to put digital pen to paper you need to make</p>
				</div>
				<div class="position-relative border my-4 rounded-2 border-warning flex text-wrap">
					<small class="smaller__default bg-white px-2 position-absolute text-warning fw-bolder">Revisited Default</small>
					<p class="my-2 mx-2 text-muted">Long before you sit down to put digital pen to paper you need to make sure you have to sit down to put digital pen to paper you need to make</p>
				</div>
				<div class="position-relative border my-4 rounded-2 border-info flex text-wrap">
					<small class="smaller__default bg-white px-2 position-absolute text-info fw-bolder">Revisited Twitter</small>
					<p class="my-2 mx-2">Long before you sit down to put digital pen to paper you need to make sure you have to sit down to put digital pen to paper you need to make</p>
				</div>
				<div class="position-relative border my-4 rounded-2 border-warning flex text-wrap">
					<small class="smaller__default bg-white px-2 position-absolute text-warning fw-bolder">Revisited Twitter</small>
					<p class="my-2 mx-2 text-muted">Long before you sit down to put digital pen to paper you need to make sure you have to sit down to put digital pen to paper you need to make</p>
				</div>
				<div class="d-flex align-items-center justify-content-start">
						<button class="p-2 bg-transparent border-0 ">
							<i class="bi text-primary  bi-chat-fill bg-transparent"></i>
							<small class="ms-1 fw-bolder text-dark">3</small>
						</button>
						<button class="p-2 ms-2 border-0 bg-transparent">
						<i class="bi text-danger bi-suit-heart-fill"></i>
							<small class="ms-1 fw-bolder">12</small>
						</button>
					</div>
				<!-- divider -->
				<hr class="hr-blurry hr mx-2" />
				<div class="d-flex justify-content-between">
				<input class="border-0 ps-2 py-2 text-secondary w-100 mt-4" placeholder="Reply..."/>
				<i class="bi fs-2 bi-paperclip"></i>
				</div>

			</div>

			</div>
			
		</div>
		<!-- Grace Logan -->
		<div class="container mx-3 my-8 mb-12">
			<div class="row w-100">
				<!-- profile pic -->
				<div class="col-sm-1 rounded-1 p-1 flex align-items-center justify-content-center ">
					<img src="./media/girl.png" width="40px" />
				</div>
			<!-- Grace logans comment section -->
			<div class="col-sm-11 shadow rounded-2 px-2 py-3 bg-white">
				<!-- grace logans details -->
				<div class="d-flex  align-items-center justify-content-between w-100">
					<div class="d-flex align-items-center justify-content-between">
						<h5>Mukula Frank</h5>
						<div class="ms-4 py-1 px-2 bg-secondary rounded-1"><h6>Created</h6></div>
					</div>
					<div>
						<small class="fw-bolder text-info">2 hours ago</small>
					</div>
				</div>
				<!-- divider -->
				<hr class="hr-blurry hr mx-2" />
				<div class="d-flex justify-content-between">
				<input class="border-0 ps-2 py-2 text-secondary w-100 mt-4" placeholder="Reply..."/>
				<i class="bi fs-2 bi-paperclip"></i>
				</div>

			</div>

			</div>
			
		</div>	
		
		<!-- bottom comment section -->
		<div class="lower_section_modal w-100 px-2 py-2 position-absolute">
			<input type="text" class="border-0 px-3 py-2 w-100" placeholder="Comment...." />
		</div>
		</div>


			</div>

		</div>




		</div>

		<!-- End::your code -->
		</div>

		<!--begin::Javascript-->
		<script>var hostUrl = "scripts/lib/uikit/";</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
		<script src="scripts/lib/uikit/plugins/global/plugins.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/plugins/global/plugins.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/scripts.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/scripts.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/widgets.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/widgets.bundle.js') ?>"></script>

		<script src="scripts/lib/custom.js?v=<?php echo filemtime('scripts/lib/custom.js') ?>"></script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
