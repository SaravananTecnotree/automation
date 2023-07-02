<?php
$this->load->view('./templates/header.php');
?>

<div class="main-body">
	<div class="page-wrapper">
		<div class="page-body">
			<!-- <h4 style="margin:0 auto 30px">Incidents count</h4> -->
			<!-- <div class="row">
				<div class="col-xl-3 col-md-6">
					<div class="card">
						<div class="card-block">
							<div class="row align-items-center">
								<div class="col-8">
									<h4 class="text-c-purple"><?php echo $ticketsCount->s1_inc_count ?></h4>
									<h6 class="text-muted m-b-0">Tickets</h6>
								</div>
								<div class="col-4 text-right">
									<h3 class="text-muted m-b-0">S1</h3>
								</div>
							</div>
						</div>
						<a style="cursor:pointer;" onclick="getIncidentsCount('s1_incidents_count')" data-toggle="modal" data-target="#ticketDetailsModal">
							<div class="card-footer bg-c-purple">
								<div class="row align-items-center">
									<div class="col-9">
										<p class="text-white m-b-0">Details</p>
									</div>
									<div class="col-3 text-right">
										<i class="ti-arrow-top-right text-white f-16"></i>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="card">
						<div class="card-block">
							<div class="row align-items-center">
								<div class="col-8">
									<h4 class="text-c-green"><?php echo $ticketsCount->s2_inc_count ?></h4>
									<h6 class="text-muted m-b-0">Tickets</h6>
								</div>
								<div class="col-4 text-right">
									<h3 class="text-muted m-b-0">S2</h3>
								</div>
							</div>
						</div>
						<a style="cursor:pointer;" onclick="getIncidentsCount('s2_incidents_count')" data-toggle="modal" data-target="#ticketDetailsModal">
							<div class="card-footer bg-c-purple">
								<div class="row align-items-center">
									<div class="col-9">
										<p class="text-white m-b-0">Details</p>
									</div>
									<div class="col-3 text-right">
										<i class="ti-arrow-top-right text-white f-16"></i>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="card">
						<div class="card-block">
							<div class="row align-items-center">
								<div class="col-8">
									<h4 class="text-c-red"><?php echo $ticketsCount->s3_inc_count ?></h4>
									<h6 class="text-muted m-b-0">Tickets</h6>
								</div>
								<div class="col-4 text-right">
									<h3 class="text-muted m-b-0">S3</h3>
								</div>
							</div>
						</div>
						<a style="cursor:pointer;" onclick="getIncidentsCount('s3_incidents_count')" data-toggle="modal" data-target="#ticketDetailsModal">
							<div class="card-footer bg-c-purple">
								<div class="row align-items-center">
									<div class="col-9">
										<p class="text-white m-b-0">Details</p>
									</div>
									<div class="col-3 text-right">
										<i class="ti-arrow-top-right text-white f-16"></i>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="card">
						<div class="card-block">
							<div class="row align-items-center">
								<div class="col-8">
									<h4 class="text-c-blue"><?php echo $ticketsCount->s4_inc_count ?></h4>
									<h6 class="text-muted m-b-0">Tickets</h6>
								</div>
								<div class="col-4 text-right">
									<h3 class="text-muted m-b-0">S4</h3>
								</div>
							</div>
						</div>
						<a style="cursor:pointer;" onclick="getIncidentsCount('s4_incidents_count')" data-toggle="modal" data-target="#ticketDetailsModal">
							<div class="card-footer bg-c-purple">
								<div class="row align-items-center">
									<div class="col-9">
										<p class="text-white m-b-0">Details</p>
									</div>
									<div class="col-3 text-right">
										<i class="ti-arrow-top-right text-white f-16"></i>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div> -->




			<!-- Service request counts-->


			<!-- <h4 style="margin:30px auto">Workorders count</h4>
			<div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-block">
                            <div class="row align-items-center">
							<div class="col-8">
                                    <h4 class="text-c-purple"><?php echo $woTicketsCount->s1_sr_count ?></h4>
                                    <h6 class="text-muted m-b-0">Tickets</h6>
                                </div>
                                <div class="col-4 text-right">
                                    <h3 class="text-muted m-b-0">S1</h3>
                                </div>
                            </div>
                        </div>
                        <a style="cursor:pointer;" onclick="getServiceRequestCount('s1_sr_count')" data-toggle="modal" data-target="#ticketDetailsModal">
                            <div class="card-footer bg-c-purple">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Details</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="ti-arrow-top-right text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="text-c-green"><?php echo $woTicketsCount->s2_sr_count ?></h4>
                                    <h6 class="text-muted m-b-0">Tickets</h6>
                                </div>
                                <div class="col-4 text-right">
                                <h3 class="text-muted m-b-0">S2</h3>
                                </div>
                            </div>
                        </div>
                        <a style="cursor:pointer;" onclick="getServiceRequestCount('s2_sr_count')" data-toggle="modal" data-target="#ticketDetailsModal">
                            <div class="card-footer bg-c-purple">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Details</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="ti-arrow-top-right text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="text-c-red"><?php echo $woTicketsCount->s3_sr_count ?></h4>
                                    <h6 class="text-muted m-b-0">Tickets</h6>
                                </div>
                                <div class="col-4 text-right">
                                    <h3 class="text-muted m-b-0">S3</h3>
                                </div>
                            </div>
                        </div>
                        <a style="cursor:pointer;" onclick="getServiceRequestCount('s3_sr_count')" data-toggle="modal" data-target="#ticketDetailsModal">
                            <div class="card-footer bg-c-purple">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Details</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="ti-arrow-top-right text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="text-c-blue"><?php echo $woTicketsCount->s4_sr_count ?></h4>
                                    <h6 class="text-muted m-b-0">Tickets</h6>
                                </div>
                                <div class="col-4 text-right">
                                    <h3 class="text-muted m-b-0">S4</h3>
                                </div>
                            </div>
                        </div>
                        <a style="cursor:pointer;" onclick="getServiceRequestCount('s4_sr_count')" data-toggle="modal" data-target="#ticketDetailsModal">
                            <div class="card-footer bg-c-purple">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Details</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="ti-arrow-top-right text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div> -->

			<!-- Pie chart -->

			<?php
			$months = array(
				1 => 'January',
				2 => 'February',
				3 => 'March',
				4 => 'April',
				5 => 'May',
				6 => 'June',
				7 => 'July',
				8 => 'August',
				9 => 'September',
				10 => 'October',
				11 => 'November',
				12 => 'December'
			);

			$selected_month = isset($_POST['month']) ? $_POST['month'] : date('n');
			$selected_year = isset($_POST['year']) ? $_POST['year'] : date('Y');
			?>

			<div class="row">


				<div class="col-md-3">
					<form method="post" style="margin: 0 0 10px;">
						<select class="form-control" name="month" id="chooseMonth">
							<?php foreach ($months as $month_number => $month_name) : ?>
								<option value="<?php echo $month_number ?>" <?php echo $selected_month == $month_number ? ' selected' : '' ?>><?php echo $month_name ?></option>
							<?php endforeach; ?>
						</select>
					</form>
				</div>

				<div class="col-md-3">
					<form method="post" style="margin: 0 0 10px;">
						<select class="form-control" name="year" id="chooseYear">
							<?php for ($year = 2020; $year <= 2100; $year++) : ?>
								<option value="<?php echo $year ?>" <?php echo $selected_year == $year ? ' selected' : '' ?>><?php echo $year ?></option>
							<?php endfor; ?>
						</select>
					</form>
				</div>
				<div class="col-md-2 text-left">
					<button class="btn btn-primary ms-e" id="legacy" onclick="updateQueryLegacy()">Legacy</button>
				</div>
				<div class="col-md-2 text-center">
					<button class="btn btn-primary ms-e" id="digital" onclick="updateQueryDigital()">Digital</button>
				</div>
				<div class="col-md-2 text-right">
					<button class="btn btn-primary ms-e" id="all-opcos" onclick="updateQueryAll()">All Opcos</button>
				</div>

			</div>


			<script>
				function updateQueryDigital() {
					var month = parseInt(document.getElementById('chooseMonth').value);
					var year = document.getElementById('chooseYear').value;
					var monthName = document.getElementById('chooseMonth').options[document.getElementById('chooseMonth').selectedIndex].text;
					var yearName = document.getElementById('chooseYear').options[document.getElementById('chooseYear').selectedIndex].text;

					updateTotalIncidentsLoggedDigital(year, yearName);
					updateTotalWorkordersLoggedDigital(year, yearName);
					updateIncidentsLoggedDigital(month, year, monthName, yearName);
					updateWorkordersLoggedDigital(month, year, monthName, yearName);
					updateIncidentsResolvedDigital(month, year, monthName, yearName);
					updateWorkordersResolvedDigital(month, year, monthName, yearName);
					updateIncidentsWithinSLADigital(month, year, monthName, yearName);
					updateWorkordersWithinSLADigital(month, year, monthName, yearName);
					updateIncidentsReasonDigital(month, year, monthName, yearName);
					updateWorkordersReasonDigital(month, year, monthName, yearName);
					updateIncidentsReasonOpcoDigital(month, year, monthName, yearName);
					updateWorkordersReasonOpcoDigital(month, year, monthName, yearName);

				}

				function updateQueryLegacy() {
					var month = parseInt(document.getElementById('chooseMonth').value);
					var year = document.getElementById('chooseYear').value;
					var monthName = document.getElementById('chooseMonth').options[document.getElementById('chooseMonth').selectedIndex].text;
					var yearName = document.getElementById('chooseYear').options[document.getElementById('chooseYear').selectedIndex].text;

					updateTotalIncidentsLoggedLegacy(year, yearName);
					updateTotalWorkordersLoggedLegacy(year, yearName);
					updateIncidentsLoggedLegacy(month, year, monthName, yearName);
					updateWorkordersLoggedLegacy(month, year, monthName, yearName);
					updateIncidentsResolvedLegacy(month, year, monthName, yearName);
					updateWorkordersResolvedLegacy(month, year, monthName, yearName);
					updateIncidentsWithinSLALegacy(month, year, monthName, yearName);
					updateWorkordersWithinSLALegacy(month, year, monthName, yearName);
					updateIncidentsReasonLegacy(month, year, monthName, yearName);
					updateWorkordersReasonLegacy(month, year, monthName, yearName);
					updateIncidentsReasonOpcoLegacy(month, year, monthName, yearName);
					updateWorkordersReasonOpcoLegacy(month, year, monthName, yearName);

				}

				function updateQueryAll() {
					var month = parseInt(document.getElementById('chooseMonth').value);
					var year = document.getElementById('chooseYear').value;
					var monthName = document.getElementById('chooseMonth').options[document.getElementById('chooseMonth').selectedIndex].text;
					var yearName = document.getElementById('chooseYear').options[document.getElementById('chooseYear').selectedIndex].text;

					updateTotalIncidentsLoggedAll(year, yearName);
					updateTotalWorkordersLoggedAll(year, yearName);
					updateIncidentsLoggedAll(month, year, monthName, yearName);
					updateWorkordersLoggedAll(month, year, monthName, yearName);
					updateIncidentsResolvedAll(month, year, monthName, yearName);
					updateWorkordersResolvedAll(month, year, monthName, yearName);
					updateIncidentsWithinSLAAll(month, year, monthName, yearName);
					updateWorkordersWithinSLAAll(month, year, monthName, yearName);
					updateIncidentsReasonAll(month, year, monthName, yearName);
					updateWorkordersReasonAll(month, year, monthName, yearName);
					updateIncidentsReasonOpcoAll(month, year, monthName, yearName);
					updateWorkordersReasonOpcoAll(month, year, monthName, yearName);

				}

				function updateTotalIncidentsLoggedDigital(year, yearName) {
					var xhrTILD = new XMLHttpRequest();
					xhrTILD.onreadystatechange = function() {
						if (xhrTILD.readyState === XMLHttpRequest.DONE) {
							if (xhrTILD.status === 200) {
								// Handle the response from the server
								var response = xhrTILD.responseText;
								var updatedDataTILD = JSON.parse(response);
								drawChartTILD(updatedDataTILD, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrTILD.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryTILDigital', true);

					xhrTILD.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrTILD.send('&year=' + year);
				}

				function updateTotalIncidentsLoggedLegacy(year, yearName) {
					var xhrTILD = new XMLHttpRequest();
					xhrTILD.onreadystatechange = function() {
						if (xhrTILD.readyState === XMLHttpRequest.DONE) {
							if (xhrTILD.status === 200) {
								// Handle the response from the server
								var response = xhrTILD.responseText;
								var updatedDataTILD = JSON.parse(response);
								drawChartTILD(updatedDataTILD, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrTILD.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryTILLegacy', true);

					xhrTILD.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrTILD.send('&year=' + year);
				}

				function updateTotalIncidentsLoggedAll(year, yearName){
					var xhrTILD = new XMLHttpRequest();
					xhrTILD.onreadystatechange = function() {
						if (xhrTILD.readyState === XMLHttpRequest.DONE) {
							if (xhrTILD.status === 200) {
								// Handle the response from the server
								var response = xhrTILD.responseText;
								var updatedDataTILD = JSON.parse(response);
								drawChartTILD(updatedDataTILD, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrTILD.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryTILAll', true);

					xhrTILD.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrTILD.send('&year=' + year);
				}

				function updateTotalWorkordersLoggedDigital(year, yearName) {
					var xhrTWOLD = new XMLHttpRequest();
					xhrTWOLD.onreadystatechange = function() {
						if (xhrTWOLD.readyState === XMLHttpRequest.DONE) {
							if (xhrTWOLD.status === 200) {
								// Handle the response from the server
								var response = xhrTWOLD.responseText;
								var updatedDataTWOLD = JSON.parse(response);
								drawChartTWOLD(updatedDataTWOLD, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrTWOLD.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryTWOLDigital', true);

					xhrTWOLD.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrTWOLD.send('&year=' + year);
				}

				function updateTotalWorkordersLoggedLegacy(year, yearName) {
					var xhrTWOLD = new XMLHttpRequest();
					xhrTWOLD.onreadystatechange = function() {
						if (xhrTWOLD.readyState === XMLHttpRequest.DONE) {
							if (xhrTWOLD.status === 200) {
								// Handle the response from the server
								var response = xhrTWOLD.responseText;
								var updatedDataTWOLD = JSON.parse(response);
								drawChartTWOLD(updatedDataTWOLD, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrTWOLD.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryTWOLLegacy', true);

					xhrTWOLD.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrTWOLD.send('&year=' + year);
				}

				function updateTotalWorkordersLoggedAll(year, yearName) {
					var xhrTWOLD = new XMLHttpRequest();
					xhrTWOLD.onreadystatechange = function() {
						if (xhrTWOLD.readyState === XMLHttpRequest.DONE) {
							if (xhrTWOLD.status === 200) {
								// Handle the response from the server
								var response = xhrTWOLD.responseText;
								var updatedDataTWOLD = JSON.parse(response);
								drawChartTWOLD(updatedDataTWOLD, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrTWOLD.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryTWOLAll', true);

					xhrTWOLD.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrTWOLD.send('&year=' + year);
				}

				function updateIncidentsWithinSLADigital(month, year, monthName, yearName) {
					var xhrISLA = new XMLHttpRequest();
					xhrISLA.onreadystatechange = function() {
						if (xhrISLA.readyState === XMLHttpRequest.DONE) {
							if (xhrISLA.status === 200) {
								// Handle the response from the server
								var response = xhrISLA.responseText;
								var updatedDataISLA = JSON.parse(response);
								drawChartISLA(updatedDataISLA, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrISLA.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISLADigital', true);

					xhrISLA.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrISLA.send('month=' + month + '&year=' + year);
				}

				function updateIncidentsWithinSLALegacy(month, year, monthName, yearName) {
					var xhrISLA = new XMLHttpRequest();
					xhrISLA.onreadystatechange = function() {
						if (xhrISLA.readyState === XMLHttpRequest.DONE) {
							if (xhrISLA.status === 200) {
								// Handle the response from the server
								var response = xhrISLA.responseText;
								var updatedDataISLA = JSON.parse(response);
								drawChartISLA(updatedDataISLA, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrISLA.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISLALegacy', true);

					xhrISLA.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrISLA.send('month=' + month + '&year=' + year);
				}

				function updateIncidentsWithinSLAAll(month, year, monthName, yearName) {
					var xhrISLA = new XMLHttpRequest();
					xhrISLA.onreadystatechange = function() {
						if (xhrISLA.readyState === XMLHttpRequest.DONE) {
							if (xhrISLA.status === 200) {
								// Handle the response from the server
								var response = xhrISLA.responseText;
								var updatedDataISLA = JSON.parse(response);
								drawChartISLA(updatedDataISLA, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrISLA.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISLAAll', true);

					xhrISLA.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrISLA.send('month=' + month + '&year=' + year);
				}

				function updateWorkordersWithinSLADigital(month, year, monthName, yearName) {
					var xhrWOSLA = new XMLHttpRequest();
					xhrWOSLA.onreadystatechange = function() {
						if (xhrWOSLA.readyState === XMLHttpRequest.DONE) {
							if (xhrWOSLA.status === 200) {
								// Handle the response from the server
								var response = xhrWOSLA.responseText;
								var updatedDataWOSLA = JSON.parse(response);
								drawChartWOSLA(updatedDataWOSLA, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrWOSLA.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWOSLADigital', true);

					xhrWOSLA.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWOSLA.send('month=' + month + '&year=' + year);
				}

				function updateWorkordersWithinSLALegacy(month, year, monthName, yearName) {
					var xhrWOSLA = new XMLHttpRequest();
					xhrWOSLA.onreadystatechange = function() {
						if (xhrWOSLA.readyState === XMLHttpRequest.DONE) {
							if (xhrWOSLA.status === 200) {
								// Handle the response from the server
								var response = xhrWOSLA.responseText;
								var updatedDataWOSLA = JSON.parse(response);
								drawChartWOSLA(updatedDataWOSLA, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrWOSLA.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWOSLALegacy', true);

					xhrWOSLA.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWOSLA.send('month=' + month + '&year=' + year);
				}

				function updateWorkordersWithinSLAAll(month, year, monthName, yearName) {
					var xhrWOSLA = new XMLHttpRequest();
					xhrWOSLA.onreadystatechange = function() {
						if (xhrWOSLA.readyState === XMLHttpRequest.DONE) {
							if (xhrWOSLA.status === 200) {
								// Handle the response from the server
								var response = xhrWOSLA.responseText;
								var updatedDataWOSLA = JSON.parse(response);
								drawChartWOSLA(updatedDataWOSLA, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrWOSLA.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWOSLALegacy', true);

					xhrWOSLA.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWOSLA.send('month=' + month + '&year=' + year);
				}

				// IS in xhrIS => Incident Summary
				function updateIncidentsLoggedDigital(month, year, monthName, yearName) {
					var xhrIS = new XMLHttpRequest();
					xhrIS.onreadystatechange = function() {
						if (xhrIS.readyState === XMLHttpRequest.DONE) {
							if (xhrIS.status === 200) {
								// Handle the response from the server
								var response = xhrIS.responseText;
								var updatedDataIS = JSON.parse(response);
								drawChartIR(updatedDataIS, monthName, yearName);
							} else {
								// Handle the error cases4_incidents_count
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrIS.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISLDigital', true);

					xhrIS.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrIS.send('month=' + month + '&year=' + year);
				}

				function updateIncidentsLoggedLegacy(month, year, monthName, yearName) {
					var xhrIS = new XMLHttpRequest();
					xhrIS.onreadystatechange = function() {
						if (xhrIS.readyState === XMLHttpRequest.DONE) {
							if (xhrIS.status === 200) {
								// Handle the response from the server
								var response = xhrIS.responseText;
								var updatedDataIS = JSON.parse(response);
								drawChartIR(updatedDataIS, monthName, yearName);
							} else {
								// Handle the error cases4_incidents_count
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrIS.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISLLegacy', true);

					xhrIS.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrIS.send('month=' + month + '&year=' + year);
				}

				function updateIncidentsLoggedAll(month, year, monthName, yearName) {
					var xhrIS = new XMLHttpRequest();
					xhrIS.onreadystatechange = function() {
						if (xhrIS.readyState === XMLHttpRequest.DONE) {
							if (xhrIS.status === 200) {
								// Handle the response from the server
								var response = xhrIS.responseText;
								var updatedDataIS = JSON.parse(response);
								drawChartIR(updatedDataIS, monthName, yearName);
							} else {
								// Handle the error cases4_incidents_count
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrIS.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISLAll', true);

					xhrIS.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrIS.send('month=' + month + '&year=' + year);
				}

				function updateWorkordersLoggedDigital(month, year, monthName, yearName) {
					var xhrWO = new XMLHttpRequest();
					xhrWO.onreadystatechange = function() {
						if (xhrWO.readyState === XMLHttpRequest.DONE) {
							if (xhrWO.status === 200) {
								// Handle the response from the server
								var response = xhrWO.responseText;
								var updatedDataWO = JSON.parse(response);
								drawChartWO(updatedDataWO, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for workorders logged.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrWO.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWOLDigital', true);

					xhrWO.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWO.send('month=' + month + '&year=' + year);

				}

				function updateWorkordersLoggedLegacy(month, year, monthName, yearName) {
					var xhrWO = new XMLHttpRequest();
					xhrWO.onreadystatechange = function() {
						if (xhrWO.readyState === XMLHttpRequest.DONE) {
							if (xhrWO.status === 200) {
								// Handle the response from the server
								var response = xhrWO.responseText;
								var updatedDataWO = JSON.parse(response);
								drawChartWO(updatedDataWO, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for workorders logged.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrWO.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWOLLegacy', true);

					xhrWO.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWO.send('month=' + month + '&year=' + year);

				}

				function updateWorkordersLoggedAll(month, year, monthName, yearName) {
					var xhrWO = new XMLHttpRequest();
					xhrWO.onreadystatechange = function() {
						if (xhrWO.readyState === XMLHttpRequest.DONE) {
							if (xhrWO.status === 200) {
								// Handle the response from the server
								var response = xhrWO.responseText;
								var updatedDataWO = JSON.parse(response);
								drawChartWO(updatedDataWO, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for workorders logged.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrWO.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWOLAll', true);

					xhrWO.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWO.send('month=' + month + '&year=' + year);

				}

				function updateIncidentsResolvedDigital(month, year, monthName, yearName) {
					var xhrISR = new XMLHttpRequest();
					xhrISR.onreadystatechange = function() {
						if (xhrISR.readyState === XMLHttpRequest.DONE) {
							if (xhrISR.status === 200) {
								// Handle the response from the server
								var response = xhrISR.responseText;
								var updatedDataISR = JSON.parse(response);
								drawChartISR(updatedDataISR, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrISR.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISRDigital', true);

					xhrISR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrISR.send('month=' + month + '&year=' + year);
				}

				function updateIncidentsResolvedLegacy(month, year, monthName, yearName) {
					var xhrISR = new XMLHttpRequest();
					xhrISR.onreadystatechange = function() {
						if (xhrISR.readyState === XMLHttpRequest.DONE) {
							if (xhrISR.status === 200) {
								// Handle the response from the server
								var response = xhrISR.responseText;
								var updatedDataISR = JSON.parse(response);
								drawChartISR(updatedDataISR, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrISR.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISRLegacy', true);

					xhrISR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrISR.send('month=' + month + '&year=' + year);
				}

				function updateIncidentsResolvedAll(month, year, monthName, yearName) {
					var xhrISR = new XMLHttpRequest();
					xhrISR.onreadystatechange = function() {
						if (xhrISR.readyState === XMLHttpRequest.DONE) {
							if (xhrISR.status === 200) {
								// Handle the response from the server
								var response = xhrISR.responseText;
								var updatedDataISR = JSON.parse(response);
								drawChartISR(updatedDataISR, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};
					// Send an asynchronous POST request to update the query
					xhrISR.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISRAll', true);
					xhrISR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrISR.send('month=' + month + '&year=' + year);
				}

				function updateWorkordersResolvedDigital(month, year, monthName, yearName) {
					var xhrWOR = new XMLHttpRequest();
					xhrWOR.onreadystatechange = function() {
						if (xhrWOR.readyState === XMLHttpRequest.DONE) {
							if (xhrWOR.status === 200) {
								// Handle the response from the server
								var response = xhrWOR.responseText;
								var updatedDataWOR = JSON.parse(response);
								drawChartWOR(updatedDataWOR, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for workorders logged.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrWOR.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWORDigital', true);

					xhrWOR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWOR.send('month=' + month + '&year=' + year);

				}

				function updateWorkordersResolvedLegacy(month, year, monthName, yearName) {
					var xhrWOR = new XMLHttpRequest();
					xhrWOR.onreadystatechange = function() {
						if (xhrWOR.readyState === XMLHttpRequest.DONE) {
							if (xhrWOR.status === 200) {
								// Handle the response from the server
								var response = xhrWOR.responseText;
								var updatedDataWOR = JSON.parse(response);
								drawChartWOR(updatedDataWOR, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for workorders logged.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrWOR.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWORLegacy', true);

					xhrWOR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWOR.send('month=' + month + '&year=' + year);

				}

				function updateWorkordersResolvedAll(month, year, monthName, yearName) {
					var xhrWOR = new XMLHttpRequest();
					xhrWOR.onreadystatechange = function() {
						if (xhrWOR.readyState === XMLHttpRequest.DONE) {
							if (xhrWOR.status === 200) {
								// Handle the response from the server
								var response = xhrWOR.responseText;
								var updatedDataWOR = JSON.parse(response);
								drawChartWOR(updatedDataWOR, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for workorders logged.');
							}
						}
					};
					// Send an asynchronous POST request to update the query
					xhrWOR.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWORAll', true);
					xhrWOR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWOR.send('month=' + month + '&year=' + year);
				}

				function updateIncidentsReasonDigital(month, year, monthName, yearName) {
					var xhrISRe = new XMLHttpRequest();
					xhrISRe.onreadystatechange = function() {
						if (xhrISRe.readyState === XMLHttpRequest.DONE) {
							if (xhrISRe.status === 200) {
								// Handle the response from the server
								var response = xhrISRe.responseText;
								var updatedDataISRe = JSON.parse(response);
								drawChartISRe(updatedDataISRe, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrISRe.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISReDigital', true);

					xhrISRe.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrISRe.send('month=' + month + '&year=' + year);
				}

				function updateIncidentsReasonLegacy(month, year, monthName, yearName) {
					var xhrISRe = new XMLHttpRequest();
					xhrISRe.onreadystatechange = function() {
						if (xhrISRe.readyState === XMLHttpRequest.DONE) {
							if (xhrISRe.status === 200) {
								// Handle the response from the server
								var response = xhrISRe.responseText;
								var updatedDataISRe = JSON.parse(response);
								drawChartISRe(updatedDataISRe, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrISRe.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISReLegacy', true);

					xhrISRe.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrISRe.send('month=' + month + '&year=' + year);
				}

				function updateIncidentsReasonAll(month, year, monthName, yearName) {
					var xhrISRe = new XMLHttpRequest();
					xhrISRe.onreadystatechange = function() {
						if (xhrISRe.readyState === XMLHttpRequest.DONE) {
							if (xhrISRe.status === 200) {
								// Handle the response from the server
								var response = xhrISRe.responseText;
								var updatedDataISRe = JSON.parse(response);
								drawChartISRe(updatedDataISRe, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};
					// Send an asynchronous POST request to update the query
					xhrISRe.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISReAll', true);
					xhrISRe.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrISRe.send('month=' + month + '&year=' + year);
				}

				function updateWorkordersReasonDigital(month, year, monthName, yearName) {
					var xhrWORe = new XMLHttpRequest();
					xhrWORe.onreadystatechange = function() {
						if (xhrWORe.readyState === XMLHttpRequest.DONE) {
							if (xhrWORe.status === 200) {
								// Handle the response from the server
								var response = xhrWORe.responseText;
								var updatedDataWORe = JSON.parse(response);
								drawChartWORe(updatedDataWORe, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrWORe.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWOReDigital', true);

					xhrWORe.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWORe.send('month=' + month + '&year=' + year);
				}

				function updateWorkordersReasonLegacy(month, year, monthName, yearName) {
					var xhrWORe = new XMLHttpRequest();
					xhrWORe.onreadystatechange = function() {
						if (xhrWORe.readyState === XMLHttpRequest.DONE) {
							if (xhrWORe.status === 200) {
								// Handle the response from the server
								var response = xhrWORe.responseText;
								var updatedDataWORe = JSON.parse(response);
								drawChartWORe(updatedDataWORe, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}


					};
					// Send an asynchronous POST request to update the query
					xhrWORe.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWOReLegacy', true);

					xhrWORe.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWORe.send('month=' + month + '&year=' + year);
				}

				function updateWorkordersReasonAll(month, year, monthName, yearName) {
					var xhrWORe = new XMLHttpRequest();
					xhrWORe.onreadystatechange = function() {
						if (xhrWORe.readyState === XMLHttpRequest.DONE) {
							if (xhrWORe.status === 200) {
								// Handle the response from the server
								var response = xhrWORe.responseText;
								var updatedDataWORe = JSON.parse(response);
								drawChartWORe(updatedDataWORe, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};
					// Send an asynchronous POST request to update the query
					xhrWORe.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWOReAll', true);
					xhrWORe.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWORe.send('month=' + month + '&year=' + year);
				}

				function updateIncidentsReasonOpcoDigital(month, year, monthName, yearName) {
					var xhrISRe = new XMLHttpRequest();
					xhrISRe.onreadystatechange = function() {
						if (xhrISRe.readyState === XMLHttpRequest.DONE) {
							if (xhrISRe.status === 200) {
								// Handle the response from the server
								var response = xhrISRe.responseText;
								var updatedDataISReO = JSON.parse(response);
								drawChartISReO(updatedDataISReO, monthName, yearName); //O in ISReO is Opco
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrISRe.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISReODigital', true);

					xhrISRe.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrISRe.send('month=' + month + '&year=' + year);
				}

				function updateIncidentsReasonOpcoLegacy(month, year, monthName, yearName) {
					var xhrISRe = new XMLHttpRequest();
					xhrISRe.onreadystatechange = function() {
						if (xhrISRe.readyState === XMLHttpRequest.DONE) {
							if (xhrISRe.status === 200) {
								// Handle the response from the server
								var response = xhrISRe.responseText;
								var updatedDataISReO = JSON.parse(response);
								drawChartISReO(updatedDataISReO, monthName, yearName); //O in ISReO is Opco
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrISRe.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISReOLegacy', true);

					xhrISRe.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrISRe.send('month=' + month + '&year=' + year);
				}

				function updateIncidentsReasonOpcoAll(month, year, monthName, yearName) {
					var xhrISRe = new XMLHttpRequest();
					xhrISRe.onreadystatechange = function() {
						if (xhrISRe.readyState === XMLHttpRequest.DONE) {
							if (xhrISRe.status === 200) {
								// Handle the response from the server
								var response = xhrISRe.responseText;
								var updatedDataISReO = JSON.parse(response);
								drawChartISReO(updatedDataISReO, monthName, yearName); //O in ISReO is Opco
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};
					// Send an asynchronous POST request to update the query
					xhrISRe.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryISReOAll', true);
					xhrISRe.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrISRe.send('month=' + month + '&year=' + year);
				}

				function updateWorkordersReasonOpcoDigital(month, year, monthName, yearName) {
					var xhrWORe = new XMLHttpRequest();
					xhrWORe.onreadystatechange = function() {
						if (xhrWORe.readyState === XMLHttpRequest.DONE) {
							if (xhrWORe.status === 200) {
								// Handle the response from the server
								var response = xhrWORe.responseText;
								var updatedDataWOReO = JSON.parse(response);
								drawChartWOReO(updatedDataWOReO, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrWORe.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWOReODigital', true);

					xhrWORe.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWORe.send('month=' + month + '&year=' + year);
				}

				function updateWorkordersReasonOpcoLegacy(month, year, monthName, yearName) {
					var xhrWORe = new XMLHttpRequest();
					xhrWORe.onreadystatechange = function() {
						if (xhrWORe.readyState === XMLHttpRequest.DONE) {
							if (xhrWORe.status === 200) {
								// Handle the response from the server
								var response = xhrWORe.responseText;
								var updatedDataWOReO = JSON.parse(response);
								drawChartWOReO(updatedDataWOReO, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};

					// Send an asynchronous POST request to update the query
					xhrWORe.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWOReOLegacy', true);

					xhrWORe.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWORe.send('month=' + month + '&year=' + year);
				}

				function updateWorkordersReasonOpcoAll(month, year, monthName, yearName) {
					var xhrWORe = new XMLHttpRequest();
					xhrWORe.onreadystatechange = function() {
						if (xhrWORe.readyState === XMLHttpRequest.DONE) {
							if (xhrWORe.status === 200) {
								// Handle the response from the server
								var response = xhrWORe.responseText;
								var updatedDataWOReO = JSON.parse(response);
								drawChartWOReO(updatedDataWOReO, monthName, yearName);
							} else {
								// Handle the error case
								console.error('Request failed for incidents logged chart.');
							}
						}
					};
					// Send an asynchronous POST request to update the query
					xhrWORe.open('POST', '<?php echo base_url(); ?>index.php/IndexController/updateQueryWOReOAll', true);
					xhrWORe.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhrWORe.send('month=' + month + '&year=' + year);

				}
			</script>


			<!-- Test pie chart -->

			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="total_incidents_logged" style="width: 100%; height: 300px;"></div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="total_workorders_logged" style="width: 100%; height: 300px;"></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Logged -->

			<div class="row">

				<!-- Incidents logged -->
				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="incidents_logged" style="width: 100%; height: 300px;"></div>
						</div>
					</div>
				</div>

				<!-- Workorders logged -->
				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="workorders_logged" style="width: 100%; height: 300px;"></div>
						</div>
					</div>
				</div>
			</div> <!-- Row end -->

			<!-- Resolved -->
			<div class="row">
				<!-- Incidents Resolved -->
				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="incidents_resolved" style="width: 100%; height: 300px;"></div>
						</div>
					</div>
				</div>

				<!-- Workorders Resolved -->
				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="workorders_resolved" style="width: 100%; height: 300px;"></div>
						</div>
					</div>
				</div>
			</div> <!-- Row end -->

			<!-- SLA -->

			<div class="row">
				<!-- Incidents SLA -->

				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="IR-SLA" style="width: 100%; height: 300px;"></div>
						</div>
					</div>
				</div>

				<!-- WORKORDERS SLA-->

				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="WO-SLA" style="width: 100%; height: 300px;"></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Reasons -->
			<div class="row">

				<!-- Incidents reason -->

				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="incidents_reason" style="width: 100%; height: 300px;"></div>
						</div>
					</div>
				</div>

				<!-- Workorders reason -->

				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="workorders_reason" style="width: 100%; height: 300px;"></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Reasons with Opco -->
			<div class="row">

				<!-- Incidents reason -->

				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="incidents_reason_opco" style="width: 100%; height: 300px;"></div>
						</div>
					</div>
				</div>

				<!-- Workorders reason -->

				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="workorders_reason_opco" style="width: 100%; height: 300px;"></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Outages -->

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-block">
							<div id="incidents_outages" style="width: 100%; height: 300px;"></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Dashboards -->
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="automationDashboard"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="kmDashboard"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="oiDashboard"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-block">
							<div id="siDashboard"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<span id="all_opcos_report">

					</span>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Dashboard Ticket Details Modal -->
<style>
	.table td,
	.table th {
		padding: 0px;
	}
</style>
<div class="modal fade" id="ticketDetailsModal" tabindex="-1" role="dialog" aria-labelledby="ticketDetailsModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ticketDetailsModalLabel">Details</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<table class="table table-striped table-bordered">
							<thead>
								<tr style="background-color:#1c00c8;color:white;">
									<th class="text-center">OPCO</th>
									<th class="text-center">Jan</th>
									<th class="text-center">Feb</th>
									<th class="text-center">Mar</th>
									<th class="text-center">Apr</th>
									<th class="text-center">May</th>
									<th class="text-center">Jun</th>
									<th class="text-center">Jul</th>
									<th class="text-center">Aug</th>
									<th class="text-center">Sep</th>
									<th class="text-center">Oct</th>
									<th class="text-center">Nov</th>
									<th class="text-center">Dec</th>
								</tr>
							</thead>
							<tbody id="modal_content">

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<a type="button" class="btn btn-primary" data-dismiss="modal" style="color:white">Close</a>
			</div>
		</div>
	</div>
</div>

<?php
$this->load->view('./templates/footer.php');
?>
<?php
$this->load->view('./metaDataScript.php');
?>
<script>
	$(document).ready(function() {
		getReportData()
		getDashboardsGraphsData()
	})

	function getReportData() {
		var currentDate = new Date();
		var year = currentDate.getFullYear();
		var month_number = currentDate.getMonth() - 1;
		var lastThreeMonths = getLastMonths(month_number)
		$.ajax({
			url: '<?php echo site_url('ReportsController/getAllOpcosReportData') ?>',
			type: 'post',
			data: {
				'year': year,
				'month': month_number,
				'lastThreeYearsMonths': lastThreeMonths
			},
			success: function(data) {
				var metaData = $.parseJSON(data)
				var data = metaData.opcos_meta_data;
				var automation_dashboard_data = metaData.automation_dashboard_data;
				var km_dashboard_data = metaData.km_dashboard_data;
				var oi_dashboard_data = metaData.oi_dashboard_data;
				var si_dashboard_data = metaData.si_dashboard_data;
				var brs_digital_opcos = metaData.brs_digital_opcos
				var brs_legacy_mtn_opcos = metaData.brs_legacy_mtn_opcos
				var brs_legacy_nonmtn_opcos = metaData.brs_legacy_nonmtn_opcos
				var html = ``;
				var prevThreeYearsMonths = lastThreeMonths[0].reverse()
				var prevThreeYears = lastThreeMonths[1].reverse()
				var prevThreeMonths = lastThreeMonths[2].reverse()

				//Incident Summary Details
				var incidents_summary_digital = metaData.incidents_summary_digital;
				var incidents_summary_legacy = metaData.incidents_summary_legacy;
				appendIncidentSummaryDetails('Incidents Summary', month_number, year, incidents_summary_digital, incidents_summary_legacy, 0)

				//SLA Summary Details
				var sla_incidents_summary_digital = metaData.sla_incidents_summary_digital;
				var sla_incidents_summary_legacy = metaData.sla_incidents_summary_legacy;
				appendSLAIncidentSummaryDetails('SLA Summary', month_number, year, sla_incidents_summary_digital, sla_incidents_summary_legacy, 0)

				for (var ind = 0; ind < data.length; ind++) {
					var html = '';
					var opco_details = data[ind].opco_details;
					var incidents_summary_data = data[ind].incidents_summary_data;
					var sr_summary_data = data[ind].sr_summary_data;
					var monthNames = getMonthNameAndShortCutName(month_number)
					var inc_count = []
					for (var i = 0; i < prevThreeYearsMonths.length; i++) {
						if (incidents_summary_data[prevThreeYearsMonths[i]] && incidents_summary_data[prevThreeYearsMonths[i]] != 'null' && incidents_summary_data[prevThreeYearsMonths[i]] !== 'undefined') {
							inc_count.push(parseInt(incidents_summary_data[prevThreeYearsMonths[i]]['inc_count']))
						} else {
							inc_count.push(0)
						}
					}
					var sr_count = []
					for (var i = 0; i < prevThreeYearsMonths.length; i++) {
						if (sr_summary_data[prevThreeYearsMonths[i]] && sr_summary_data[prevThreeYearsMonths[i]] != 'null' && sr_summary_data[prevThreeYearsMonths[i]] !== 'undefined') {
							sr_count.push(parseInt(sr_summary_data[prevThreeYearsMonths[i]]['sr_count']))
						} else {
							sr_count.push(0)
						}
					}
					$("#all_opcos_report").append(html);
					generateLineGraph(prevThreeYearsMonths, inc_count, sr_count, ind);
				}
				// downloadPPT()
			}
		});
	}

	function appendIncidentSummaryDetails(heading, month, year, incidents_summary_digital, incidents_summary_legacy, unique) {
		var incidentSummary = '';
		incidentSummary += `
            <div class="card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 style="color:#1c00c8;">${heading} - ${year}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <canvas id="legacyOpcosGraph"></canvas>
                        </div>
                        <div class="col-md-6">
                            <canvas id="digitalOpcosGraph"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        `;
		$("#all_opcos_report").append(incidentSummary);
		var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
		var labels = [];
		for (var i = 0; i <= month; i++) {
			labels.push(monthNames[i] + " " + year)
		}
		console.log(incidents_summary_legacy)
		var xValues = labels;
		new Chart("legacyOpcosGraph", {
			type: "line",
			data: {
				labels: labels,
				datasets: incidents_summary_legacy
			},
			options: {
				responsive: true,
				title: {
					display: true,
					position: "top",
					text: "Legacy OpCo's",
					fontSize: 18,
					fontColor: "#111"
				},
				legend: {
					display: true,
					position: "bottom",
					labels: {
						fontColor: "#333",
						fontSize: 8,
						usePointStyle: true,
						pointStyle: "line"
					}
				},
				scales: {
					yAxes: [{
						ticks: {
							reverse: false,
							stepSize: 50
						},
					}]
				}
			}
		});
		new Chart("digitalOpcosGraph", {
			type: "line",
			data: {
				labels: labels,
				datasets: incidents_summary_digital
			},
			options: {
				responsive: true,
				title: {
					display: true,
					position: "top",
					text: "Digital OpCo's",
					fontSize: 18,
					fontColor: "#111"
				},
				legend: {
					display: true,
					position: "bottom",
					labels: {
						fontColor: "#333",
						fontSize: 8,
						usePointStyle: true,
						pointStyle: "line"
					}
				},
				scales: {
					yAxes: [{
						ticks: {
							reverse: false,
							stepSize: 80
						},
					}]
				}
			}
		});
	}

	function appendSLAIncidentSummaryDetails(heading, month, year, incidents_summary_digital, incidents_summary_legacy, unique) {
		var incidentSummary = '';
		incidentSummary += `
            <div class="card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 style="color:#1c00c8;">${heading} - ${year}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <canvas id="slalegacyOpcosGraph"></canvas>
                        </div>
                        <div class="col-md-6">
                            <canvas id="sladigitalOpcosGraph"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        `;
		$("#all_opcos_report").append(incidentSummary);
		var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
		var labels = [];
		for (var i = 0; i <= month; i++) {
			labels.push(monthNames[i] + " " + year)
		}
		var xValues = labels;
		new Chart("slalegacyOpcosGraph", {
			type: "line",
			data: {
				labels: labels,
				datasets: incidents_summary_legacy
			},
			options: {
				responsive: true,
				title: {
					display: true,
					position: "top",
					text: "Legacy OpCo's",
					fontSize: 18,
					fontColor: "#111"
				},
				legend: {
					display: true,
					position: "bottom",
					labels: {
						fontColor: "#333",
						fontSize: 8,
						usePointStyle: true,
						pointStyle: "line"
					}
				}
			}
		});
		new Chart("sladigitalOpcosGraph", {
			type: "line",
			data: {
				labels: labels,
				datasets: incidents_summary_digital
			},
			options: {
				responsive: true,
				title: {
					display: true,
					position: "top",
					text: "Digital OpCo's",
					fontSize: 18,
					fontColor: "#111"
				},
				legend: {
					display: true,
					position: "bottom",
					labels: {
						fontColor: "#333",
						fontSize: 8,
						usePointStyle: true,
						pointStyle: "line"
					}
				}
			}
		});
	}
</script>

<script src="https://cdn.jsdelivr.net/gh/gitbrent/pptxgenjs@3.10.0/dist/pptxgen.bundle.js"></script>
<script>
	function downloadPPT() {
		let pptx = new PptxGenJS();
		let slide = pptx.addSlide();
		pptx.addSection({
			title: "Tables"
		});
		pptx.tableToSlides("billRunStatusTableId0");
		pptx.tableToSlides("billRunStatusTableId1");
		pptx.tableToSlides("billRunStatusTableId2");
		pptx.tableToSlides("dashboardTableId0");
		pptx.tableToSlides("dashboardTableId1");
		pptx.tableToSlides("dashboardTableId2");
		pptx.tableToSlides("dashboardTableId3");
		pptx.writeFile({
			fileName: "dashboards.pptx"
		});
	}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
	function generateLineGraph(prevThreeYearsMonths, inc_count, sr_count, index) {
		// var options = {
		//     series: [
		//     {
		//         name: "High - 2013",
		//         data: [28, 29, 33, 36, 32, 32, 33]
		//     },
		//     {
		//         name: "Low - 2013",
		//         data: [12, 11, 14, 18, 17, 13, 13]
		//     }
		//     ],
		//     chart: {
		//         height: 350,
		//         type: 'line',
		//         dropShadow: {
		//             enabled: true,
		//             color: '#000',
		//             top: 18,
		//             left: 7,
		//             blur: 10,
		//             opacity: 0.2
		//         },
		//         toolbar: {
		//             show: false
		//         }
		//     },
		//     colors: ['#77B6EA', '#545454'],
		//     dataLabels: {
		//         enabled: true,
		//     },
		//     stroke: {
		//         curve: 'smooth'
		//     },
		//     title: {
		//         text: 'Average High & Low Temperature',
		//         align: 'left'
		//     },
		//     grid: {
		//         borderColor: '#e7e7e7',
		//         row: {
		//             colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
		//             opacity: 0.5
		//         },
		//     },
		//     markers: {
		//         size: 1
		//     },
		//     xaxis: {
		//         categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
		//         title: {
		//             text: 'Month'
		//         }
		//     },
		//     yaxis: {
		//         title: {
		//             text: 'Temperature'
		//         },
		//         min: 5,
		//         max: 40
		//     },
		//     legend: {
		//         display: false,
		//         position: 'top',
		//         horizontalAlign: 'right',
		//         floating: true,
		//         offsetY: -25,
		//         offsetX: -5
		//     }
		// };

		// var chart = new ApexCharts(document.querySelector("#legacyOpcosGraph"), options);
		// chart.render();
	}
</script>

<script>
	function getDashboardsGraphsData() {
		var currentDate = new Date();
		var year = currentDate.getFullYear();
		$.ajax({
			url: '<?php echo site_url('IndexController/getDashboardsGraphsData') ?>',
			type: 'post',
			data: {
				'year': year
			},
			success: function(data) {
				var metaData = $.parseJSON(data)
				var automation = metaData.automation;
				var km = metaData.km;
				var oi = metaData.oi;
				var si = metaData.si;
				var automationData = []
				var kmData = []
				var oiData = []
				var siData = []
				var months = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
				var temp = 0
				for (var i = 0; i < months.length; i++) {
					for (var j = 0; j < automation.length; j++) {
						if (automation[j]['month_number'] == months[i]) {
							temp = parseInt(automation[j]['total_count'])
						}
					}
					automationData.push(temp)
					temp = 0
					for (var j = 0; j < km.length; j++) {
						if (km[j]['month_number'] == months[i]) {
							temp = parseInt(km[j]['total_count'])
						}
					}
					kmData.push(temp)
					temp = 0
					for (var j = 0; j < oi.length; j++) {
						if (oi[j]['month_number'] == months[i]) {
							temp = parseInt(oi[j]['total_count'])
						}
					}
					oiData.push(temp)
					temp = 0
					for (var j = 0; j < si.length; j++) {
						if (si[j]['month_number'] == months[i]) {
							temp = parseInt(si[j]['total_count'])
						}
					}
					siData.push(temp)
					temp = 0
				}
				// renderBarGraph();
				renderBarGraph('automationDashboard', 'Automation - ' + year, automationData)
				renderBarGraph('kmDashboard', 'Knowledge Management - ' + year, kmData)
				renderBarGraph('oiDashboard', 'Open Incidents - ' + year, oiData)
				renderBarGraph('siDashboard', 'Security Incidents - ' + year, siData)
			}
		});
	}

	function renderGraph(id, title, data) {
		var options = {
			title: {
				text: title,
				align: 'center'
			},
			series: data,
			chart: {
				width: 380,
				type: 'pie',
			},
			labels: [
				'Jan',
				'Feb',
				'Mar',
				'Apr',
				'May',
				'Jun',
				'Jul',
				'Aug',
				'Sep',
				'Oct',
				'Nov',
				'Dec'
			],
			dataLabels: {
				formatter: function(val, opts) {
					return opts.w.config.series[opts.seriesIndex]
				},
			},
			legend: {
				position: 'bottom'
			},
			responsive: [{
				breakpoint: 480,
				options: {
					chart: {
						width: 200
					}
				},
				legend: {
					position: 'bottom',
					floating: true
				}
			}]
		};
		new ApexCharts(document.querySelector("#" + id), options).render();
		// chart.render();
	}

	function renderBarGraph() {
		// var options = {
		//     series: [{
		//         name: 'Count',
		//         data: [44, 55, 41, 67, 22, 43, 21, 33, 45, 31, 87, 65]
		//     }],
		//     chart: {
		//         height: 350,
		//         type: 'bar',
		//     },
		//     plotOptions: {
		//         bar: {
		//             borderRadius: 10,
		//             columnWidth: '50%',
		//         }
		//     },
		//     dataLabels: {
		//         enabled: false
		//     },
		//     stroke: {
		//         width: 2
		//     },
		//     grid: {
		//         row: {
		//             colors: ['#fff', '#f2f2f2']
		//         }
		//     },
		//     xaxis: {
		//         labels: {
		//             rotate: -45
		//         },
		//         categories: [
		//             'January',
		//             'February',
		//             'March',
		//             'April',
		//             'May',
		//             'June',
		//             'July',
		//             'August',
		//             'September',
		//             'October',
		//             'November',
		//             'December'
		//         ],
		//         tickPlacement: 'on'
		//     },
		//     yaxis: {
		//         title: {
		//             text: 'Servings',
		//         },
		//     },
		//     fill: {
		//         type: 'gradient',
		//         gradient: {
		//             shade: 'light',
		//             type: "horizontal",
		//             shadeIntensity: 0.25,
		//             gradientToColors: undefined,
		//             inverseColors: true,
		//             opacityFrom: 0.85,
		//             opacityTo: 0.85,
		//             stops: [50, 0, 100]
		//         },
		//     }
		// };

		// var chart = new ApexCharts(document.querySelector("#automationDashboard"), options);
		// chart.render();
	}

	function renderBarGraph(id, title, data) {
		var options = {
			title: {
				text: title,
				align: 'center'
			},
			series: [{
				name: 'Count',
				data: data
			}],
			chart: {
				height: 250,
				type: 'bar',
				events: {
					click: function(chart, w, e) {}
				}
			},
			// colors: colors,
			plotOptions: {
				bar: {
					columnWidth: '45%',
					distributed: true,
				}
			},
			// dataLabels: {
			//     enabled: false
			// },
			legend: {
				show: false
			},
			xaxis: {
				categories: [
					'Jan',
					'Feb',
					'Mar',
					'Apr',
					'May',
					'Jun',
					'Jul',
					'Aug',
					'Sep',
					'Oct',
					'Nov',
					'Dec'
				],
				labels: {
					style: {
						fontSize: '12px'
					}
				},
			}
		};

		var chart = new ApexCharts(document.querySelector("#" + id), options);
		chart.render();
	}
</script>

<script>
	function getIncidentsCount(columnName) {
		var currentDate = new Date();
		var year = currentDate.getFullYear();
		$.ajax({
			url: '<?php echo site_url('IndexController/getIncidentsCount') ?>',
			type: 'post',
			data: {
				'year': year,
				'columnName': columnName
			},
			success: function(data) {
				var dashboard_data = $.parseJSON(data);
				var dashoboardRows = '';
				for (var index = 0; index < dashboard_data.length; index++) {
					dashoboardRows += '<tr>';
					dashoboardRows += '<td>' + dashboard_data[index].opco_name + '</td>';
					for (var j = 0; j < dashboard_data[index].counts.length; j++) {
						dashoboardRows += '<td class="text-center">' + dashboard_data[index].counts[j] + '</td>';
					}
					dashoboardRows += '</tr>';
				}
				$("#modal_content").html(dashoboardRows)
			}
		})
	}
</script>

<script>
	function getServiceRequestCount(columnName) {
		var currentDate = new Date();
		var year = currentDate.getFullYear();
		$.ajax({
			url: '<?php echo site_url('IndexController/getServiceRequestCount') ?>',
			type: 'post',
			data: {
				'year': year,
				'columnName': columnName
			},
			success: function(data) {
				var dashboard_data = $.parseJSON(data);
				var dashoboardRows = '';
				for (var index = 0; index < dashboard_data.length; index++) {
					dashoboardRows += '<tr>';
					dashoboardRows += '<td>' + dashboard_data[index].opco_name + '</td>';
					for (var j = 0; j < dashboard_data[index].counts.length; j++) {
						dashoboardRows += '<td class="text-center">' + dashboard_data[index].counts[j] + '</td>';
					}
					dashoboardRows += '</tr>';
				}
				$("#modal_content").html(dashoboardRows)
			}
		})
	}
</script>

<!-- Google pie chart script -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- Test chart script -->


<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});

	function drawChartTILD(updatedDataTILD, yearName) {
		// Create the data table
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Severity');
		data.addColumn('number', 'count');
		data.addRows(updatedDataTILD);

		// Set chart options
		var options = {
			'title': 'Total incidents logged for the year ' + yearName,
			'pieSliceText': 'value',
			is3D: 'true',
			'tooltip': {
				trigger: 'selection',
				text: 'value'
			},
			sliceVisibilityThreshold: 0.00001,
			threshold: 0,
			chartArea: {
				width: '100%',
				height: '60%',
			}
		};

		// Instantiate and draw the chart
		var chart = new google.visualization.PieChart(document.getElementById('total_incidents_logged'));
		chart.draw(data, options);

	}
</script>

<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});

	function drawChartTWOLD(updatedDataTWOLD, yearName) {
		// Create the data table
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Severity');
		data.addColumn('number', 'count');
		data.addRows(updatedDataTWOLD);

		// Set chart options
		var options = {
			'title': 'Total workorders logged for the year ' + yearName,
			'pieSliceText': 'value',
			is3D: 'true',
			'tooltip': {
				trigger: 'selection',
				text: 'value'
			},
			sliceVisibilityThreshold: 0.00001,
			threshold: 0,
			chartArea: {
				width: '100%',
				height: '60%',
			}
		};

		// Instantiate and draw the chart
		var chart = new google.visualization.PieChart(document.getElementById('total_workorders_logged'));
		chart.draw(data, options);

	}
</script>

<!-- Incidents logged script -->
<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});

	function drawChartIR(updatedDataIS, monthName, yearName) {
		// Create the data table
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'opco_name');
		data.addColumn('number', 'count');
		data.addColumn('number', 's1_incidents_count');
		data.addColumn('number', 's2_incidents_count');
		data.addColumn('number', 's3_incidents_count');
		data.addColumn('number', 's4_incidents_count');
		data.addRows(updatedDataIS);

		// Set chart options
		var options = {
			'title': 'Opco-wise incidents logged for the of ' + monthName + ' ' + yearName,
			'pieSliceText': 'value',
			is3D: 'true',
			'tooltip': {
				trigger: 'none'
			},
			sliceVisibilityThreshold: 0.00001,
			threshold: 0,
			chartArea: {
				width: '100%',
				height: '60%',
			}
		};

		// Instantiate and draw the chart
		var chart = new google.visualization.PieChart(document.getElementById('incidents_logged'));
		chart.draw(data, options);

		// Add event listener for slice selection
		google.visualization.events.addListener(chart, 'select', selectHandler);

		// Slice selection handler
		function selectHandler() {
			// Get selected slice data
			var selection = chart.getSelection()[0];
			if (selection) {
				var sliceName = data.getValue(selection.row, 0);
				var sliceCount = data.getValue(selection.row, 1);
				var sliceS1 = data.getValue(selection.row, 2);
				var sliceS2 = data.getValue(selection.row, 3);
				var sliceS3 = data.getValue(selection.row, 4);
				var sliceS4 = data.getValue(selection.row, 5);

				// Create data table for selected slice
				var sliceData = new google.visualization.DataTable();
				sliceData.addColumn('string', 'Severity');
				sliceData.addColumn('number', 'Incident Count');
				sliceData.addRow(['S1', sliceS1]);
				sliceData.addRow(['S2', sliceS2]);
				sliceData.addRow(['S3', sliceS3]);
				sliceData.addRow(['S4', sliceS4]);

				// Set chart options for selected slice
				var sliceOptions = {
					'title': 'Severity-wise incidents logged for ' + sliceName + ' for the month of ' + monthName + ' ' + yearName,
					pieSliceText: 'value',
					'width': 500,
					'height': 300,
					is3D: 'true',
					'tooltip': {
						'text': 'value',
						'trigger': 'click'
					},
					sliceVisibilityThreshold: 0.00001,
					threshold: 0,
					chartArea: {
						left: '0',
						width: '100%',
						height: '60%',
					}

				};

				// Open popup window with slice data
				var popup = window.open('', 'myPopup', 'width=600,height=400');
				popup.document.write('<div style="margin:auto" id="slice_chart_div"></div>');
				centerPopup(popup);

				// Instantiate and draw the chart for selected slice
				var sliceChart = new google.visualization.PieChart(popup.document.getElementById('slice_chart_div'));
				sliceChart.draw(sliceData, sliceOptions);


			}
		}

		function centerPopup(popup) {
			var left = (screen.width - popup.outerWidth) / 2;
			var top = (screen.height - popup.outerHeight) / 2;
			popup.moveTo(left, top);
		}
	}
</script>



<!-- Workorders logged script -->


<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});

	function drawChartWO(updatedDataWO, monthName, yearName) {
		// Create the data table
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'opco_name');
		data.addColumn('number', 'count');
		data.addColumn('number', 's1_sr_count');
		data.addColumn('number', 's2_sr_count');
		data.addColumn('number', 's3_sr_count');
		data.addColumn('number', 's4_sr_count');
		data.addRows(updatedDataWO);

		// Set chart options
		var options = {
			'title': 'Opco-wise workorders logged for the of ' + monthName + ' ' + yearName,
			'pieSliceText': 'value',
			is3D: 'true',
			'tooltip': {
				trigger: 'none'
			},
			sliceVisibilityThreshold: 0.00001,
			threshold: 0,
			chartArea: {
				width: '100%',
				height: '60%',
			}
		};

		// Instantiate and draw the chart
		var chart = new google.visualization.PieChart(document.getElementById('workorders_logged'));
		chart.draw(data, options);

		// Add event listener for slice selection
		google.visualization.events.addListener(chart, 'select', selectHandler);

		// Slice selection handler
		function selectHandler() {
			// Get selected slice data
			var selection = chart.getSelection()[0];
			if (selection) {
				var sliceName = data.getValue(selection.row, 0);
				var sliceCount = data.getValue(selection.row, 1);
				var sliceS1 = data.getValue(selection.row, 2);
				var sliceS2 = data.getValue(selection.row, 3);
				var sliceS3 = data.getValue(selection.row, 4);
				var sliceS4 = data.getValue(selection.row, 5);

				// Create data table for selected slice
				var sliceData = new google.visualization.DataTable();
				sliceData.addColumn('string', 'Severity');
				sliceData.addColumn('number', 'Incident Count');
				sliceData.addRow(['S1', sliceS1]);
				sliceData.addRow(['S2', sliceS2]);
				sliceData.addRow(['S3', sliceS3]);
				sliceData.addRow(['S4', sliceS4]);

				// Set chart options for selected slice
				var sliceOptions = {
					'title': 'Severity-wise workorders logged for ' + sliceName + ' for the month of ' + monthName + ' ' + yearName,
					pieSliceText: 'value',
					'width': 500,
					'height': 300,
					is3D: 'true',
					'tooltip': {
						'text': 'value'
					},
					sliceVisibilityThreshold: 0.00001,
					threshold: 0,
					chartArea: {
						left: '0',
						width: '100%',
						height: '60%',
					}

				};

				// Open popup window with slice data
				var popup = window.open('', 'myPopup', 'width=600,height=400');
				popup.document.write('<div style="margin:auto" id="slice_chart_div"></div>');
				centerPopup(popup);

				// Instantiate and draw the chart for selected slice
				var sliceChart = new google.visualization.PieChart(popup.document.getElementById('slice_chart_div'));
				sliceChart.draw(sliceData, sliceOptions);


			}
		}

		function centerPopup(popup) {
			var left = (screen.width - popup.outerWidth) / 2;
			var top = (screen.height - popup.outerHeight) / 2;
			popup.moveTo(left, top);
		}
	}
</script>

<!-- Incidents resolved script -->

<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});

	function drawChartISR(updatedDataISR, monthName, yearName) {
		// Create the data table
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'opco_name');
		data.addColumn('number', 'count');
		data.addColumn('number', 'Service_desk');
		data.addColumn('number', 'L1_MSO_count');
		data.addColumn('number', 'L2_count');
		data.addColumn('number', 'L3_count');
		data.addColumn('number', 'L4_count');
		data.addRows(updatedDataISR);

		// Set chart options
		var options = {
			'title': 'Opco-wise incidents resolved for the of ' + monthName + ' ' + yearName,
			'pieSliceText': 'value',
			is3D: 'true',
			'tooltip': {
				trigger: 'none'
			},
			sliceVisibilityThreshold: 0.00001,
			threshold: 0,
			chartArea: {
				width: '100%',
				height: '60%',
			}
		};

		// Instantiate and draw the chart
		var chart = new google.visualization.PieChart(document.getElementById('incidents_resolved'));
		chart.draw(data, options);

		// Add event listener for slice selection
		google.visualization.events.addListener(chart, 'select', selectHandler);

		// Slice selection handler
		function selectHandler() {
			// Get selected slice data
			var selection = chart.getSelection()[0];
			if (selection) {
				var sliceName = data.getValue(selection.row, 0);
				var sliceCount = data.getValue(selection.row, 1);
				var sliceSD = data.getValue(selection.row, 2);
				var sliceL1 = data.getValue(selection.row, 3);
				var sliceL2 = data.getValue(selection.row, 4);
				var sliceL3 = data.getValue(selection.row, 5);
				var sliceL4 = data.getValue(selection.row, 6);

				// Create data table for selected slice
				var sliceData = new google.visualization.DataTable();
				sliceData.addColumn('string', 'Severity');
				sliceData.addColumn('number', 'Incident Count');
				sliceData.addRow(['Service Desk', sliceSD]);
				sliceData.addRow(['L1', sliceL1]);
				sliceData.addRow(['L2', sliceL2]);
				sliceData.addRow(['L3', sliceL3]);
				sliceData.addRow(['L4', sliceL4]);
				// Set chart options for selected slice
				var sliceOptions = {
					'title': 'Group-wise categorization of incidents resolved for ' + sliceName + ' for the month of ' + monthName + ' ' + yearName,
					pieSliceText: 'value',
					'width': 500,
					'height': 300,
					is3D: 'true',
					'tooltip': {
						'text': 'value'
					},
					sliceVisibilityThreshold: 0.00001,
					threshold: 0,
					chartArea: {
						left: '0',
						width: '100%',
						height: '60%',
					}

				};

				// Open popup window with slice data
				var popup = window.open('', 'myPopup', 'width=600,height=400');
				popup.document.write('<div style="margin:auto" id="slice_chart_div"></div>');
				centerPopup(popup);

				// Instantiate and draw the chart for selected slice
				var sliceChart = new google.visualization.PieChart(popup.document.getElementById('slice_chart_div'));
				sliceChart.draw(sliceData, sliceOptions);


			}
		}

		function centerPopup(popup) {
			var left = (screen.width - popup.outerWidth) / 2;
			var top = (screen.height - popup.outerHeight) / 2;
			popup.moveTo(left, top);
		}
	}
</script>

<!-- Workorders resolved chart -->

<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});

	function drawChartWOR(updatedDataWOR, monthName, yearName) {
		// Create the data table
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'opco_name');
		data.addColumn('number', 'count');
		data.addColumn('number', 'Service_desk');
		data.addColumn('number', 'L1_MSO_count');
		data.addColumn('number', 'L2_count');
		data.addColumn('number', 'L3_count');
		data.addColumn('number', 'L4_count');
		data.addRows(updatedDataWOR);

		// Set chart options
		var options = {
			'title': 'Opco-wise workorders resolved for the of ' + monthName + ' ' + yearName,
			'pieSliceText': 'value',
			is3D: 'true',
			'tooltip': {
				trigger: 'none'
			},
			sliceVisibilityThreshold: 0.00001,
			threshold: 0,
			chartArea: {
				width: '100%',
				height: '60%',
			}
		};

		// Instantiate and draw the chart
		var chart = new google.visualization.PieChart(document.getElementById('workorders_resolved'));
		chart.draw(data, options);

		// Add event listener for slice selection
		google.visualization.events.addListener(chart, 'select', selectHandler);

		// Slice selection handler
		function selectHandler() {
			// Get selected slice data
			var selection = chart.getSelection()[0];
			if (selection) {
				var sliceName = data.getValue(selection.row, 0);
				var sliceCount = data.getValue(selection.row, 1);
				var sliceSD = data.getValue(selection.row, 2);
				var sliceL1 = data.getValue(selection.row, 3);
				var sliceL2 = data.getValue(selection.row, 4);
				var sliceL3 = data.getValue(selection.row, 5);
				var sliceL4 = data.getValue(selection.row, 6);

				// Create data table for selected slice
				var sliceData = new google.visualization.DataTable();
				sliceData.addColumn('string', 'Severity');
				sliceData.addColumn('number', 'Incident Count');
				sliceData.addRow(['Service Desk', sliceSD]);
				sliceData.addRow(['L1', sliceL1]);
				sliceData.addRow(['L2', sliceL2]);
				sliceData.addRow(['L3', sliceL3]);
				sliceData.addRow(['L4', sliceL4]);
				// Set chart options for selected slice
				var sliceOptions = {
					'title': 'Group-wise categorization of workorders resolved for ' + sliceName + ' for the month of ' + monthName + ' ' + yearName,
					pieSliceText: 'value',
					'width': 500,
					'height': 300,
					is3D: 'true',
					'tooltip': {
						'text': 'value'
					},
					sliceVisibilityThreshold: 0.00001,
					threshold: 0,
					chartArea: {
						left: '0',
						width: '100%',
						height: '60%',
					}

				};

				// Open popup window with slice data
				var popup = window.open('', 'myPopup', 'width=600,height=400');
				popup.document.write('<div style="margin:auto" id="slice_chart_div"></div>');
				centerPopup(popup);

				// Instantiate and draw the chart for selected slice
				var sliceChart = new google.visualization.PieChart(popup.document.getElementById('slice_chart_div'));
				sliceChart.draw(sliceData, sliceOptions);


			}
		}

		function centerPopup(popup) {
			var left = (screen.width - popup.outerWidth) / 2;
			var top = (screen.height - popup.outerHeight) / 2;
			popup.moveTo(left, top);
		}
	}
</script>

<!-- SLA Pie charts script -->

<!-- Incidents SLA -->

<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});

	function drawChartISLA(updatedDataISLA, monthName, yearName) {
		// Create the data table
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'opco_name');
		data.addColumn('number', 'count');
		data.addColumn('number', 's1_sla_met_count');
		data.addColumn('number', 's2_sla_met_count');
		data.addColumn('number', 's3_sla_met_count');
		data.addColumn('number', 's4_sla_met_count');
		data.addRows(updatedDataISLA);

		for (var i = 0; i < data.getNumberOfRows(); i++) {
			var countValue = data.getValue(i, 1);
			var formattedValue = countValue + '%';
			data.setFormattedValue(i, 1, formattedValue);
		}

		// Set chart options
		var options = {
			'title': 'Opco-wise incidents SLA met percentage for the of ' + monthName + ' ' + yearName,
			'pieSliceText': 'value',
			is3D: 'true',
			'tooltip': {
				trigger: 'none'
			},
			sliceVisibilityThreshold: 0.00001,
			threshold: 0,
			chartArea: {
				width: '100%',
				height: '60%',
			}
		};

		// Instantiate and draw the chart
		var chart = new google.visualization.PieChart(document.getElementById('IR-SLA'));
		chart.draw(data, options);

		// Add event listener for slice selection
		google.visualization.events.addListener(chart, 'select', selectHandler);

		// Slice selection handler
		function selectHandler() {
			// Get selected slice data
			var selection = chart.getSelection()[0];
			if (selection) {
				var sliceName = data.getValue(selection.row, 0);
				var sliceCount = data.getValue(selection.row, 1);
				var sliceS1 = data.getValue(selection.row, 2);
				var sliceS2 = data.getValue(selection.row, 3);
				var sliceS3 = data.getValue(selection.row, 4);
				var sliceS4 = data.getValue(selection.row, 5);

				// Create data table for selected slice
				var sliceData = new google.visualization.DataTable();
				sliceData.addColumn('string', 'Severity');
				sliceData.addColumn('number', 'Incident Count');
				sliceData.addRow(['S1', sliceS1]);
				sliceData.addRow(['S2', sliceS2]);
				sliceData.addRow(['S3', sliceS3]);
				sliceData.addRow(['S4', sliceS4]);

				for (var i = 0; i < sliceData.getNumberOfRows(); i++) {
					var countValue = sliceData.getValue(i, 1);
					var formattedValue = countValue + '%';
					sliceData.setFormattedValue(i, 1, formattedValue);
				}

				// Set chart options for selected slice
				var sliceOptions = {
					'title': 'Severity-wise incidents SLA met percentage for ' + sliceName + ' for the month ' + monthName + ' ' + yearName,
					pieSliceText: 'value',
					'width': 500,
					'height': 300,
					is3D: 'true',
					'tooltip': {
						'text': 'value'
					},
					sliceVisibilityThreshold: 0.00001,
					threshold: 0,
					chartArea: {
						left: '0',
						width: '100%',
						height: '60%',
					}

				};

				// Open popup window with slice data
				var popup = window.open('', 'myPopup', 'width=600,height=400');
				popup.document.write('<div style="margin:auto" id="slice_chart_div"></div>');
				centerPopup(popup);

				// Instantiate and draw the chart for selected slice
				var sliceChart = new google.visualization.PieChart(popup.document.getElementById('slice_chart_div'));
				sliceChart.draw(sliceData, sliceOptions);


			}
		}

		function centerPopup(popup) {
			var left = (screen.width - popup.outerWidth) / 2;
			var top = (screen.height - popup.outerHeight) / 2;
			popup.moveTo(left, top);
		}
	}
</script>

<!-- Workorders SLA -->

<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});

	function drawChartWOSLA(updatedDataWOSLA, monthName, yearName) {
		// Create the data table
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'opco_name');
		data.addColumn('number', 'count');
		data.addColumn('number', 's1_sr_sla_met_count');
		data.addColumn('number', 's2_sr_sla_met_count');
		data.addColumn('number', 's3_sr_sla_met_count');
		data.addColumn('number', 's4_sr_sla_met_count');
		data.addRows(updatedDataWOSLA);

		for (var i = 0; i < data.getNumberOfRows(); i++) {
			var countValue = data.getValue(i, 1);
			var formattedValue = countValue + '%';
			data.setFormattedValue(i, 1, formattedValue);
		}

		// Set chart options
		var options = {
			'title': 'Opco-wise workorders SLA met percentage for the of ' + monthName + ' ' + yearName,
			'pieSliceText': 'value',
			is3D: 'true',
			'tooltip': {
				trigger: 'none'
			},
			sliceVisibilityThreshold: 0.00001,
			threshold: 0,
			chartArea: {
				width: '100%',
				height: '60%',
			}
		};

		// Instantiate and draw the chart
		var chart = new google.visualization.PieChart(document.getElementById('WO-SLA'));
		chart.draw(data, options);

		// Add event listener for slice selection
		google.visualization.events.addListener(chart, 'select', selectHandler);

		// Slice selection handler
		function selectHandler() {
			// Get selected slice data
			var selection = chart.getSelection()[0];
			if (selection) {
				var sliceName = data.getValue(selection.row, 0);
				var sliceCount = data.getValue(selection.row, 1);
				var sliceS1 = data.getValue(selection.row, 2);
				var sliceS2 = data.getValue(selection.row, 3);
				var sliceS3 = data.getValue(selection.row, 4);
				var sliceS4 = data.getValue(selection.row, 5);

				// Create data table for selected slice
				var sliceData = new google.visualization.DataTable();
				sliceData.addColumn('string', 'Severity');
				sliceData.addColumn('number', 'Incident Count');
				sliceData.addRow(['S1', sliceS1]);
				sliceData.addRow(['S2', sliceS2]);
				sliceData.addRow(['S3', sliceS3]);
				sliceData.addRow(['S4', sliceS4]);

				for (var i = 0; i < sliceData.getNumberOfRows(); i++) {
					var countValue = sliceData.getValue(i, 1);
					var formattedValue = countValue + '%';
					sliceData.setFormattedValue(i, 1, formattedValue);
				}


				// Set chart options for selected slice
				var sliceOptions = {
					'title': 'Severity-wise workorders SLA met percentage for ' + sliceName + ' for the month ' + monthName + ' ' + yearName,
					pieSliceText: 'value',
					'width': 500,
					'height': 300,
					is3D: 'true',
					'tooltip': {
						'text': 'value'
					},
					sliceVisibilityThreshold: 0.00001,
					chartArea: {
						left: '0',
						width: '100%',
						height: '60%',
					}

				};

				// Open popup window with slice data
				var popup = window.open('', 'myPopup', 'width=600,height=400');
				popup.document.write('<div style="margin:auto" id="slice_chart_div"></div>');
				centerPopup(popup);

				// Instantiate and draw the chart for selected slice
				var sliceChart = new google.visualization.PieChart(popup.document.getElementById('slice_chart_div'));
				sliceChart.draw(sliceData, sliceOptions);


			}
		}

		function centerPopup(popup) {
			var left = (screen.width - popup.outerWidth) / 2;
			var top = (screen.height - popup.outerHeight) / 2;
			popup.moveTo(left, top);
		}
	}
</script>

<!-- Incidents reason -->

<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});

	function drawChartISRe(updatedDataISRe, monthName, yearName) {
		// Create the data table
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'category');
		data.addColumn('number', 'count');
		data.addRows(updatedDataISRe);

		// Set chart options
		var options = {
			'title': 'Component-wise incidents breakup for the of ' + monthName + ' ' + yearName,
			'pieSliceText': 'value',
			is3D: 'true',
			'tooltip': {
				isHtml: true,
				text: 'value'
			},
			sliceVisibilityThreshold: 0.00001,
			chartArea: {
				width: '100%',
				height: '60%',
			}
		};

		// Instantiate and draw the chart
		var chart = new google.visualization.PieChart(document.getElementById('incidents_reason'));
		chart.draw(data, options);
	}
</script>

<!-- Workorders reason -->
<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});

	function drawChartWORe(updatedDataWORe, monthName, yearName) {
		// Create the data table
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'category');
		data.addColumn('number', 'count');
		data.addRows(updatedDataWORe);

		// Set chart options
		var options = {
			'title': 'Component-wise workorders breakup for the month of ' + monthName + ' ' + yearName,
			'pieSliceText': 'value',
			is3D: 'true',
			'tooltip': {
				isHtml: true,
				text: 'value'
			},
			sliceVisibilityThreshold: 0.00001,
			chartArea: {
				width: '100%',
				height: '60%',
			}
		};

		// Instantiate and draw the chart
		var chart = new google.visualization.PieChart(document.getElementById('workorders_reason'));
		chart.draw(data, options);
	}
</script>

<!-- Incidents reason script with opco-->

<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});

	function drawChartISReO(updatedDataISReO, monthName, yearName) {
		// Create the data table
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'opco_name');
		data.addColumn('number', 'count');
		data.addColumn('number', 'app_issue_count');
		data.addColumn('number', 'fun_issue_count');
		data.addColumn('number', 'data_issue_count');
		data.addColumn('number', 'plat_issue_count');
		data.addColumn('number', 'NFR_issue_count');
		data.addColumn('number', 'tec_issue_count');
		data.addColumn('number', '3pp_issue_count');
		data.addColumn('number', 'clar_issue_count');
		data.addColumn('number', 'no_fcr_count');
		data.addColumn('number', 'process_gap_count');
		data.addColumn('number', 'know_gap_count');
		data.addRows(updatedDataISReO);

		// Set chart options
		var options = {
			'title': 'Opco-wise components breakup of incidents for the of ' + monthName + ' ' + yearName,
			'pieSliceText': 'value',
			is3D: 'true',
			'tooltip': {
				trigger: 'none'
			},
			sliceVisibilityThreshold: 0.00001,
			chartArea: {
				width: '100%',
				height: '60%',
			}
		};

		// Instantiate and draw the chart
		var chart = new google.visualization.PieChart(document.getElementById('incidents_reason_opco'));
		chart.draw(data, options);

		// Add event listener for slice selection
		google.visualization.events.addListener(chart, 'select', selectHandler);

		// Slice selection handler
		function selectHandler() {
			// Get selected slice data
			var selection = chart.getSelection()[0];
			if (selection) {
				var sliceName = data.getValue(selection.row, 0);
				var sliceCount = data.getValue(selection.row, 1);
				var sliceApi = data.getValue(selection.row, 2);
				var sliceFni = data.getValue(selection.row, 3);
				var sliceDi = data.getValue(selection.row, 4);
				var slicePi = data.getValue(selection.row, 5);
				var sliceNfr = data.getValue(selection.row, 6);
				var sliceTec = data.getValue(selection.row, 7);
				var slice3pp = data.getValue(selection.row, 8);
				var sliceClar = data.getValue(selection.row, 9);
				var sliceNoFcr = data.getValue(selection.row, 10);
				var slicePgap = data.getValue(selection.row, 11);
				var sliceKgap = data.getValue(selection.row, 12);

				// Create data table for selected slice
				var sliceData = new google.visualization.DataTable();
				sliceData.addColumn('string', 'Severity');
				sliceData.addColumn('number', 'Incident Count');
				sliceData.addRow(['Application issue', sliceApi]);
				sliceData.addRow(['Functionality issue', sliceFni]);
				sliceData.addRow(['Data issue', sliceDi]);
				sliceData.addRow(['Platform issue', slicePi]);
				sliceData.addRow(['NFR issue', sliceNfr]);
				sliceData.addRow(['Tecnology issue', sliceTec]);
				sliceData.addRow(['3PP issue', slice3pp]);
				sliceData.addRow(['Clarification issue', sliceClar]);
				sliceData.addRow(['No FCR training', sliceNoFcr]);
				sliceData.addRow(['Process gap', slicePgap]);
				sliceData.addRow(['Knowledge gap', sliceKgap]);
				// Set chart options for selected slice
				var sliceOptions = {
					'title': sliceName + ' component-wise workorders breakup for the month of ' + monthName + ' ' + yearName,
					pieSliceText: 'value',
					'width': 550,
					'height': 300,
					is3D: 'true',
					'tooltip': {
						'text': 'value'
					},
					sliceVisibilityThreshold: 0.00001,
					chartArea: {
						left: '0',
						width: '100%',
						height: '60%',
					}

				};

				// Open popup window with slice data
				var popup = window.open('', 'myPopup', 'width=600,height=350');
				popup.document.write('<div style="margin:auto" id="slice_chart_div"></div>');
				centerPopup(popup);

				// Instantiate and draw the chart for selected slice
				var sliceChart = new google.visualization.PieChart(popup.document.getElementById('slice_chart_div'));
				sliceChart.draw(sliceData, sliceOptions);


			}
		}

		function centerPopup(popup) {
			var left = (screen.width - popup.outerWidth) / 2;
			var top = (screen.height - popup.outerHeight) / 1;
			popup.moveTo(left, top);
		}
	}
</script>

<!-- Workorders reason chart with opco-->

<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});

	function drawChartWOReO(updatedDataWOReO, monthName, yearName) {
		// Create the data table
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'opco_name');
		data.addColumn('number', 'count');
		data.addColumn('number', 'app_issue_count');
		data.addColumn('number', 'fun_issue_count');
		data.addColumn('number', 'data_issue_count');
		data.addColumn('number', 'plat_issue_count');
		data.addColumn('number', 'NFR_issue_count');
		data.addColumn('number', 'tec_issue_count');
		data.addColumn('number', '3pp_issue_count');
		data.addColumn('number', 'clar_issue_count');
		data.addColumn('number', 'no_fcr_count');
		data.addColumn('number', 'process_gap_count');
		data.addColumn('number', 'know_gap_count');
		data.addRows(updatedDataWOReO);

		// Set chart options
		var options = {
			'title': 'Opco-wise components breakup of workorders for the of ' + monthName + ' ' + yearName,
			'pieSliceText': 'value',
			is3D: 'true',
			'tooltip': {
				trigger: 'none'
			},
			sliceVisibilityThreshold: 0.00001,
			chartArea: {
				width: '100%',
				height: '60%',
			}
		};

		// Instantiate and draw the chart
		var chart = new google.visualization.PieChart(document.getElementById('workorders_reason_opco'));
		chart.draw(data, options);

		// Add event listener for slice selection
		google.visualization.events.addListener(chart, 'select', selectHandler);

		// Slice selection handler
		function selectHandler() {
			// Get selected slice data
			var selection = chart.getSelection()[0];
			if (selection) {
				var sliceName = data.getValue(selection.row, 0);
				var sliceCount = data.getValue(selection.row, 1);
				var sliceApi = data.getValue(selection.row, 2);
				var sliceFni = data.getValue(selection.row, 3);
				var sliceDi = data.getValue(selection.row, 4);
				var slicePi = data.getValue(selection.row, 5);
				var sliceNfr = data.getValue(selection.row, 6);
				var sliceTec = data.getValue(selection.row, 7);
				var slice3pp = data.getValue(selection.row, 8);
				var sliceClar = data.getValue(selection.row, 9);
				var sliceNoFcr = data.getValue(selection.row, 10);
				var slicePgap = data.getValue(selection.row, 11);
				var sliceKgap = data.getValue(selection.row, 12);

				// Create data table for selected slice
				var sliceData = new google.visualization.DataTable();
				sliceData.addColumn('string', 'Severity');
				sliceData.addColumn('number', 'Incident Count');
				sliceData.addRow(['Application issue', sliceApi]);
				sliceData.addRow(['Functionality issue', sliceFni]);
				sliceData.addRow(['Data issue', sliceDi]);
				sliceData.addRow(['Platform issue', slicePi]);
				sliceData.addRow(['NFR issue', sliceNfr]);
				sliceData.addRow(['Tecnology issue', sliceTec]);
				sliceData.addRow(['3PP issue', slice3pp]);
				sliceData.addRow(['Clarification issue', sliceClar]);
				sliceData.addRow(['No FCR training', sliceNoFcr]);
				sliceData.addRow(['Process gap', slicePgap]);
				sliceData.addRow(['Knowledge gap', sliceKgap]);
				// Set chart options for selected slice
				var sliceOptions = {
					'title': sliceName + ' component-wise workorders breakup - ' + monthName + ' ' + yearName,
					pieSliceText: 'value',
					'width': 550,
					'height': 300,
					is3D: 'true',
					'tooltip': {
						'text': 'value'
					},
					sliceVisibilityThreshold: 0.00001,
					chartArea: {
						left: '0',
						width: '100%',
						height: '60%',
					}

				};

				// Open popup window with slice data
				var popup = window.open('', 'myPopup', 'width=700,height=400');
				popup.document.write('<div style="margin:auto" id="slice_chart_div"></div>');
				centerPopup(popup);

				// Instantiate and draw the chart for selected slice
				var sliceChart = new google.visualization.PieChart(popup.document.getElementById('slice_chart_div'));
				sliceChart.draw(sliceData, sliceOptions);


			}
		}

		function centerPopup(popup) {
			var left = (screen.width - popup.outerWidth) / 5.5;
			var top = (screen.height - popup.outerHeight) / 2.5;
			popup.moveTo(left, top);
		}
	}
</script>

<?php

$query = $this->db->query("SELECT opcos_list.opco_name, month_number AS month, COUNT(description) AS count FROM incidents_outages left join opcos_list ON opcos_list.id = incidents_outages.opcos_list_id WHERE date_of_outage >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH) GROUP BY month_number, opcos_list.opco_name ORDER BY opcos_list.opco_name, month_number");
$chart_data = $query->result();
?>

<script type="text/javascript">
	$(document).ready(function() {
		google.charts.load('current', {
			'packages': ['corechart']
		});
		google.charts.setOnLoadCallback(function() {
			setTimeout(drawChart, 0);
		});

		function drawChart() {
			// Define the chartData directly in the view
			var chartData = <?php echo json_encode($chart_data); ?>;

			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Month');

			var opcos = {};
			var rows = [];

			// Fill the opcos object with the counts for each OPCO
			chartData.forEach(function(data) {
				if (!opcos[data.opco_name]) {
					opcos[data.opco_name] = [];
				}
				if (!opcos[data.opco_name][data.month - 1]) {
					opcos[data.opco_name][data.month - 1] = 0;
				}
				opcos[data.opco_name][data.month - 1] += parseInt(data.count);
			});

			// Get the current month and year
			var currentDate = new Date();
			var currentMonth = currentDate.getMonth() + 1;
			var currentYear = currentDate.getFullYear();

			// Calculate the past six months from the current month
			var months = [];
			for (var i = 3; i >= 1; i--) {
				var month = currentMonth - i;
				var year = currentYear;
				if (month <= 0) {
					month += 12;
					year -= 1;
				}
				months.push({
					month: month,
					year: year
				});
			}

			// Create the rows using the opcos object and the calculated months
			months.forEach(function(month) {
				var row = [getMonthLabel(month.month, month.year)];
				Object.values(opcos).forEach(function(opco) {
					var count = opco[month.month - 1] || 0;
					row.push(count);
				});
				rows.push(row);
			});

			// Add the columns for each unique OPCO name
			Object.keys(opcos).forEach(function(opcoName) {
				data.addColumn('number', opcoName);
			});

			data.addRows(rows);

			var options = {
				title: 'Outages by OPCO',
				legend: {
					position: 'bottom'
				},
				vAxis: {
					format: '#'
				}
			};

			var chart = new google.visualization.LineChart(document.getElementById('incidents_outages'));
			chart.draw(data, options);
		}

		function getMonthLabel(month, year) {
			var monthNames = [
				'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
				'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
			];
			return monthNames[month - 1] + ' ' + year;
		}
	});
</script>
