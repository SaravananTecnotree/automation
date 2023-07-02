<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class IndexController extends CI_Controller
{

	public function updateQueryTILDigital()
	{
		// Get the posted month and year values
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT 'S1' AS Severity, SUM(s1_incidents_count) AS count FROM incidents_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'DIGITAL' UNION ALL SELECT 'S2' AS Severity, SUM(s2_incidents_count) AS count FROM incidents_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'DIGITAL' UNION ALL SELECT 'S3' AS Severity, SUM(s3_incidents_count) AS count FROM incidents_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'DIGITAL' UNION ALL SELECT 'S4' AS Severity, SUM(s4_incidents_count) AS count FROM incidents_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'DIGITAL'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['Severity'],
				(int)$row['count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryTILLegacy()
	{
		// Get the posted month and year values
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT 'S1' AS Severity, SUM(s1_incidents_count) AS count FROM incidents_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'LEGACY' UNION ALL SELECT 'S2' AS Severity, SUM(s2_incidents_count) AS count FROM incidents_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'LEGACY' UNION ALL SELECT 'S3' AS Severity, SUM(s3_incidents_count) AS count FROM incidents_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'LEGACY' UNION ALL SELECT 'S4' AS Severity, SUM(s4_incidents_count) AS count FROM incidents_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'LEGACY'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['Severity'],
				(int)$row['count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryTILAll()
	{
		// Get the posted month and year values
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT 'S1' AS Severity, SUM(s1_incidents_count) AS count FROM incidents_summary join opcos_list where year = $selected_year UNION ALL SELECT 'S2' AS Severity, SUM(s2_incidents_count) AS count FROM incidents_summary where year = $selected_year UNION ALL SELECT 'S3' AS Severity, SUM(s3_incidents_count) AS count FROM incidents_summary where year = $selected_year UNION ALL SELECT 'S4' AS Severity, SUM(s4_incidents_count) AS count FROM incidents_summary where year = $selected_year");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['Severity'],
				(int)$row['count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryTWOLDigital()
	{
		// Get the posted month and year values
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT 'S1' AS Severity, SUM(s1_sr_count) AS count FROM service_request_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'DIGITAL' UNION ALL SELECT 'S2' AS Severity, SUM(s2_sr_count) AS count FROM service_request_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'DIGITAL' UNION ALL SELECT 'S3' AS Severity, SUM(s3_sr_count) AS count FROM service_request_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'DIGITAL' UNION ALL SELECT 'S4' AS Severity, SUM(s4_sr_count) AS count FROM service_request_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'DIGITAL'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['Severity'],
				(int)$row['count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryTWOLLegacy()
	{
		// Get the posted month and year values
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT 'S1' AS Severity, SUM(s1_sr_count) AS count FROM service_request_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'LEGACY' UNION ALL SELECT 'S2' AS Severity, SUM(s2_sr_count) AS count FROM service_request_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'LEGACY' UNION ALL SELECT 'S3' AS Severity, SUM(s3_sr_count) AS count FROM service_request_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'LEGACY' UNION ALL SELECT 'S4' AS Severity, SUM(s4_sr_count) AS count FROM service_request_summary i join opcos_list o on o.id = i.opcos_list_id where i.year = $selected_year and o.opco_type = 'LEGACY'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['Severity'],
				(int)$row['count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryTWOLAll()
	{
		// Get the posted month and year values
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT 'S1' AS Severity, SUM(s1_sr_count) AS count FROM service_request_summary where year = $selected_year UNION ALL SELECT 'S2' AS Severity, SUM(s2_sr_count) AS count FROM service_request_summary where year = $selected_year UNION ALL SELECT 'S3' AS Severity, SUM(s3_sr_count) AS count FROM service_request_summary where year = $selected_year UNION ALL SELECT 'S4' AS Severity, SUM(s4_sr_count) AS count FROM service_request_summary where year = $selected_year");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['Severity'],
				(int)$row['count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryISLDigital()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, s1_incidents_count + i.s2_incidents_count + i.s3_incidents_count + i.s4_incidents_count as count, i.s1_incidents_count, i.s2_incidents_count, i.s3_incidents_count, i.s4_incidents_count FROM incidents_summary i INNER JOIN opcos_list o ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'DIGITAL'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['s1_incidents_count'],
				(int)$row['s2_incidents_count'],
				(int)$row['s3_incidents_count'],
				(int)$row['s4_incidents_count']
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryISLLegacy()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, s1_incidents_count + i.s2_incidents_count + i.s3_incidents_count + i.s4_incidents_count as count, i.s1_incidents_count, i.s2_incidents_count, i.s3_incidents_count, i.s4_incidents_count FROM incidents_summary i INNER JOIN opcos_list o ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'LEGACY'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['s1_incidents_count'],
				(int)$row['s2_incidents_count'],
				(int)$row['s3_incidents_count'],
				(int)$row['s4_incidents_count']
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryISLAll()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, s1_incidents_count + i.s2_incidents_count + i.s3_incidents_count + i.s4_incidents_count as count, i.s1_incidents_count, i.s2_incidents_count, i.s3_incidents_count, i.s4_incidents_count FROM incidents_summary i INNER JOIN opcos_list o ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['s1_incidents_count'],
				(int)$row['s2_incidents_count'],
				(int)$row['s3_incidents_count'],
				(int)$row['s4_incidents_count']
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWOLDigital()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, s1_sr_count + i.s2_sr_count + i.s3_sr_count + i.s4_sr_count as count, i.s1_sr_count, i.s2_sr_count, i.s3_sr_count, i.s4_sr_count FROM service_request_summary i INNER JOIN opcos_list o ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'DIGITAL'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['s1_sr_count'],
				(int)$row['s2_sr_count'],
				(int)$row['s3_sr_count'],
				(int)$row['s4_sr_count']
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWOLLegacy()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, s1_sr_count + i.s2_sr_count + i.s3_sr_count + i.s4_sr_count as count, i.s1_sr_count, i.s2_sr_count, i.s3_sr_count, i.s4_sr_count FROM service_request_summary i INNER JOIN opcos_list o ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'LEGACY'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['s1_sr_count'],
				(int)$row['s2_sr_count'],
				(int)$row['s3_sr_count'],
				(int)$row['s4_sr_count']
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWOLAll()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, s1_sr_count + i.s2_sr_count + i.s3_sr_count + i.s4_sr_count as count, i.s1_sr_count, i.s2_sr_count, i.s3_sr_count, i.s4_sr_count FROM service_request_summary i INNER JOIN opcos_list o ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year;");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['s1_sr_count'],
				(int)$row['s2_sr_count'],
				(int)$row['s3_sr_count'],
				(int)$row['s4_sr_count']
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryISRDigital()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, (i.Service_desk + i.L1_MSO_count + i.L2_count + i.L3_count + i.L4_count) as count, i.Service_desk, i.L1_MSO_count, i.L2_count, i.L3_count, i.L4_count from opcos_list o inner join incident_count_by_group i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'DIGITAL'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['Service_desk'],
				(int)$row['L1_MSO_count'],
				(int)$row['L2_count'],
				(int)$row['L3_count'],
				(int)$row['L4_count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryISRLegacy()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, (i.Service_desk + i.L1_MSO_count + i.L2_count + i.L3_count + i.L4_count) as count, i.Service_desk, i.L1_MSO_count, i.L2_count, i.L3_count, i.L4_count from opcos_list o inner join incident_count_by_group i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'LEGACY'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['Service_desk'],
				(int)$row['L1_MSO_count'],
				(int)$row['L2_count'],
				(int)$row['L3_count'],
				(int)$row['L4_count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryISRAll()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, (i.Service_desk + i.L1_MSO_count + i.L2_count + i.L3_count + i.L4_count) as count, i.Service_desk, i.L1_MSO_count, i.L2_count, i.L3_count, i.L4_count from opcos_list o inner join incident_count_by_group i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['Service_desk'],
				(int)$row['L1_MSO_count'],
				(int)$row['L2_count'],
				(int)$row['L3_count'],
				(int)$row['L4_count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWORDigital()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, (i.Service_desk + i.L1_MSO_count + i.L2_count + i.L3_count + i.L4_count) as count, i.Service_desk, i.L1_MSO_count, i.L2_count, i.L3_count, i.L4_count from opcos_list o inner join workorder_count_by_group i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'DIGITAL'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['Service_desk'],
				(int)$row['L1_MSO_count'],
				(int)$row['L2_count'],
				(int)$row['L3_count'],
				(int)$row['L4_count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWORLegacy()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, (i.Service_desk + i.L1_MSO_count + i.L2_count + i.L3_count + i.L4_count) as count, i.Service_desk, i.L1_MSO_count, i.L2_count, i.L3_count, i.L4_count from opcos_list o inner join workorder_count_by_group i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'LEGACY'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['Service_desk'],
				(int)$row['L1_MSO_count'],
				(int)$row['L2_count'],
				(int)$row['L3_count'],
				(int)$row['L4_count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWORAll()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, (i.Service_desk + i.L1_MSO_count + i.L2_count + i.L3_count + i.L4_count) as count, i.Service_desk, i.L1_MSO_count, i.L2_count, i.L3_count, i.L4_count from opcos_list o inner join workorder_count_by_group i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['Service_desk'],
				(int)$row['L1_MSO_count'],
				(int)$row['L2_count'],
				(int)$row['L3_count'],
				(int)$row['L4_count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryISLADigital()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, s1_incidents_count, s2_incidents_count, s3_incidents_count, s4_incidents_count, ((i.s1_sla_met_count + i.s2_sla_met_count + i.s3_sla_met_count + i.s4_sla_met_count)/(s1_incidents_count + s2_incidents_count+s3_incidents_count+s4_incidents_count))* 100 as count, (i.s1_sla_met_count/s1_incidents_count)*100 as s1, (i.s2_sla_met_count/s2_incidents_count)*100 as s2, (i.s3_sla_met_count/s3_incidents_count)*100 as s3, (i.s4_sla_met_count/s4_incidents_count)*100 as s4 FROM opcos_list o inner JOIN incidents_summary i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'DIGITAL'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['s1'],
				(int)$row['s2'],
				(int)$row['s3'],
				(int)$row['s4'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryISLALegacy()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, s1_incidents_count, s2_incidents_count, s3_incidents_count, s4_incidents_count, ((i.s1_sla_met_count + i.s2_sla_met_count + i.s3_sla_met_count + i.s4_sla_met_count)/(s1_incidents_count + s2_incidents_count+s3_incidents_count+s4_incidents_count))* 100 as count, (i.s1_sla_met_count/s1_incidents_count)*100 as s1, (i.s2_sla_met_count/s2_incidents_count)*100 as s2, (i.s3_sla_met_count/s3_incidents_count)*100 as s3, (i.s4_sla_met_count/s4_incidents_count)*100 as s4 FROM opcos_list o inner JOIN incidents_summary i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'LEGACY'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['s1'],
				(int)$row['s2'],
				(int)$row['s3'],
				(int)$row['s4'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryISLAAll()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, s1_incidents_count, s2_incidents_count, s3_incidents_count, s4_incidents_count, ((i.s1_sla_met_count + i.s2_sla_met_count + i.s3_sla_met_count + i.s4_sla_met_count)/(s1_incidents_count + s2_incidents_count+s3_incidents_count+s4_incidents_count))* 100 as count, (i.s1_sla_met_count/s1_incidents_count)*100 as s1, (i.s2_sla_met_count/s2_incidents_count)*100 as s2, (i.s3_sla_met_count/s3_incidents_count)*100 as s3, (i.s4_sla_met_count/s4_incidents_count)*100 as s4 FROM opcos_list o inner JOIN incidents_summary i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year;");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['s1'],
				(int)$row['s2'],
				(int)$row['s3'],
				(int)$row['s4'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWOSLADigital()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, ((i.s1_sr_sla_met_count + i.s2_sr_sla_met_count + i.s3_sr_sla_met_count + i.s4_sr_sla_met_count)/(s1_sr_count + s2_sr_count+s3_sr_count+s4_sr_count))* 100 as count,  (i.s1_sr_sla_met_count/s1_sr_count)*100 as s1, (i.s2_sr_sla_met_count/s2_sr_count)*100 as s2, (i.s3_sr_sla_met_count/s3_sr_count)*100 as s3, (i.s4_sr_sla_met_count/s4_sr_count)*100 as s4 FROM opcos_list o inner JOIN service_request_summary i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'DIGITAL'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['s1'],
				(int)$row['s2'],
				(int)$row['s3'],
				(int)$row['s4']
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWOSLALegacy()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, ((i.s1_sr_sla_met_count + i.s2_sr_sla_met_count + i.s3_sr_sla_met_count + i.s4_sr_sla_met_count)/(s1_sr_count + s2_sr_count+s3_sr_count+s4_sr_count))* 100 as count,  (i.s1_sr_sla_met_count/s1_sr_count)*100 as s1, (i.s2_sr_sla_met_count/s2_sr_count)*100 as s2, (i.s3_sr_sla_met_count/s3_sr_count)*100 as s3, (i.s4_sr_sla_met_count/s4_sr_count)*100 as s4 FROM opcos_list o inner JOIN service_request_summary i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'LEGACY'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['s1'],
				(int)$row['s2'],
				(int)$row['s3'],
				(int)$row['s4']
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWOSLAAll()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, ((i.s1_sr_sla_met_count + i.s2_sr_sla_met_count + i.s3_sr_sla_met_count + i.s4_sr_sla_met_count)/(s1_sr_count + s2_sr_count+s3_sr_count+s4_sr_count))* 100 as count,  (i.s1_sr_sla_met_count/s1_sr_count)*100 as s1, (i.s2_sr_sla_met_count/s2_sr_count)*100 as s2, (i.s3_sr_sla_met_count/s3_sr_count)*100 as s3, (i.s4_sr_sla_met_count/s4_sr_count)*100 as s4 FROM opcos_list o inner JOIN service_request_summary i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['s1'],
				(int)$row['s2'],
				(int)$row['s3'],
				(int)$row['s4']
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryISReDigital()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("select 'Application issue' as category, sum(app_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'Functionality issue' as category, sum(fun_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'Data issue' as category, sum(data_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'Platform issue' as category, sum(plat_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'NFR issue' as category, sum(NFR_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'Techonolgy issue' as category, sum(tec_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select '3pp issue' as category, sum(3pp_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'Clarification issue' as category, sum(clar_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'No FCR training' as category, sum(no_fcr_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'Process gap' as category, sum(process_gap_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'Knowledge gap' as category, sum(know_gap_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['category'],
				(int)$row['count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryISReLegacy()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("select 'Application issue' as category, sum(app_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Functionality issue' as category, sum(fun_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Data issue' as category, sum(data_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Platform issue' as category, sum(plat_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'NFR issue' as category, sum(NFR_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Techonolgy issue' as category, sum(tec_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select '3pp issue' as category, sum(3pp_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Clarification issue' as category, sum(clar_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'No FCR training' as category, sum(no_fcr_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Process gap' as category, sum(process_gap_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Knowledge gap' as category, sum(know_gap_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['category'],
				(int)$row['count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryISReAll()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("select 'Application issue' as category, sum(app_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Functionality issue' as category, sum(fun_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Data issue' as category, sum(data_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Platform issue' as category, sum(plat_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'NFR issue' as category, sum(NFR_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Techonolgy issue' as category, sum(tec_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select '3pp issue' as category, sum(3pp_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Clarification issue' as category, sum(clar_issue_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'No FCR training' as category, sum(no_fcr_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Process gap' as category, sum(process_gap_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Knowledge gap' as category, sum(know_gap_count) as count from incidents_reason JOIN opcos_list ON incidents_reason.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['category'],
				(int)$row['count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWOReDigital()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("select 'Application issue' as category, sum(app_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'Functionality issue' as category, sum(fun_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'Data issue' as category, sum(data_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'Platform issue' as category, sum(plat_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'NFR issue' as category, sum(NFR_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'Techonolgy issue' as category, sum(tec_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select '3pp issue' as category, sum(3pp_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'Clarification issue' as category, sum(clar_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'No FCR training' as category, sum(no_fcr_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'Process gap' as category, sum(process_gap_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL' union all select 'Knowledge gap' as category, sum(know_gap_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'DIGITAL'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['category'],
				(int)$row['count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWOReLegacy()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("select 'Application issue' as category, sum(app_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Functionality issue' as category, sum(fun_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Data issue' as category, sum(data_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Platform issue' as category, sum(plat_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'NFR issue' as category, sum(NFR_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Techonolgy issue' as category, sum(tec_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select '3pp issue' as category, sum(3pp_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Clarification issue' as category, sum(clar_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'No FCR training' as category, sum(no_fcr_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Process gap' as category, sum(process_gap_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Knowledge gap' as category, sum(know_gap_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['category'],
				(int)$row['count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWOReAll()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("select 'Application issue' as category, sum(app_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Functionality issue' as category, sum(fun_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Data issue' as category, sum(data_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Platform issue' as category, sum(plat_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'NFR issue' as category, sum(NFR_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Techonolgy issue' as category, sum(tec_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select '3pp issue' as category, sum(3pp_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Clarification issue' as category, sum(clar_issue_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'No FCR training' as category, sum(no_fcr_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Process gap' as category, sum(process_gap_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY' union all select 'Knowledge gap' as category, sum(know_gap_count) as count from work_order_summary JOIN opcos_list ON work_order_summary.opcos_list_id = opcos_list.id WHERE month_number = $selected_month AND year = $selected_year and opcos_list.opco_type = 'LEGACY'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['category'],
				(int)$row['count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}


	public function updateQueryISReODigital()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, (i.app_issue_count + i.fun_issue_count + i.data_issue_count + i.plat_issue_count + i.NFR_issue_count + i.tec_issue_count + i.3pp_issue_count + i.clar_issue_count + i.no_fcr_count + i.process_gap_count + i.know_gap_count) as count, i.app_issue_count, i.fun_issue_count, i.data_issue_count, i.plat_issue_count, i.NFR_issue_count, i.tec_issue_count, i.3pp_issue_count, i.clar_issue_count, i.no_fcr_count, i.process_gap_count, i.know_gap_count FROM opcos_list o INNER JOIN incidents_reason i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'DIGITAL'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['app_issue_count'],
				(int)$row['fun_issue_count'],
				(int)$row['data_issue_count'],
				(int)$row['plat_issue_count'],
				(int)$row['NFR_issue_count'],
				(int)$row['tec_issue_count'],
				(int)$row['3pp_issue_count'],
				(int)$row['clar_issue_count'],
				(int)$row['no_fcr_count'],
				(int)$row['process_gap_count'],
				(int)$row['know_gap_count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryISReOLegacy()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, (i.app_issue_count + i.fun_issue_count + i.data_issue_count + i.plat_issue_count + i.NFR_issue_count + i.tec_issue_count + i.3pp_issue_count + i.clar_issue_count + i.no_fcr_count + i.process_gap_count + i.know_gap_count) as count, i.app_issue_count, i.fun_issue_count, i.data_issue_count, i.plat_issue_count, i.NFR_issue_count, i.tec_issue_count, i.3pp_issue_count, i.clar_issue_count, i.no_fcr_count, i.process_gap_count, i.know_gap_count FROM opcos_list o INNER JOIN incidents_reason i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'LEGACY'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['app_issue_count'],
				(int)$row['fun_issue_count'],
				(int)$row['data_issue_count'],
				(int)$row['plat_issue_count'],
				(int)$row['NFR_issue_count'],
				(int)$row['tec_issue_count'],
				(int)$row['3pp_issue_count'],
				(int)$row['clar_issue_count'],
				(int)$row['no_fcr_count'],
				(int)$row['process_gap_count'],
				(int)$row['know_gap_count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryISReOAll()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, (i.app_issue_count + i.fun_issue_count + i.data_issue_count + i.plat_issue_count + i.NFR_issue_count + i.tec_issue_count + i.3pp_issue_count + i.clar_issue_count + i.no_fcr_count + i.process_gap_count + i.know_gap_count) as count, i.app_issue_count, i.fun_issue_count, i.data_issue_count, i.plat_issue_count, i.NFR_issue_count, i.tec_issue_count, i.3pp_issue_count, i.clar_issue_count, i.no_fcr_count, i.process_gap_count, i.know_gap_count FROM opcos_list o INNER JOIN incidents_reason i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['app_issue_count'],
				(int)$row['fun_issue_count'],
				(int)$row['data_issue_count'],
				(int)$row['plat_issue_count'],
				(int)$row['NFR_issue_count'],
				(int)$row['tec_issue_count'],
				(int)$row['3pp_issue_count'],
				(int)$row['clar_issue_count'],
				(int)$row['no_fcr_count'],
				(int)$row['process_gap_count'],
				(int)$row['know_gap_count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWOReODigital()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, (i.app_issue_count + i.fun_issue_count + i.data_issue_count + i.plat_issue_count + i.NFR_issue_count + i.tec_issue_count + i.3pp_issue_count + i.clar_issue_count + i.no_fcr_count + i.process_gap_count + i.know_gap_count) as count, i.app_issue_count, i.fun_issue_count, i.data_issue_count, i.plat_issue_count, i.NFR_issue_count, i.tec_issue_count, i.3pp_issue_count, i.clar_issue_count, i.no_fcr_count, i.process_gap_count, i.know_gap_count FROM opcos_list o INNER JOIN work_order_summary i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'DIGITAL'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['app_issue_count'],
				(int)$row['fun_issue_count'],
				(int)$row['data_issue_count'],
				(int)$row['plat_issue_count'],
				(int)$row['NFR_issue_count'],
				(int)$row['tec_issue_count'],
				(int)$row['3pp_issue_count'],
				(int)$row['clar_issue_count'],
				(int)$row['no_fcr_count'],
				(int)$row['process_gap_count'],
				(int)$row['know_gap_count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWOReOLegacy()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, (i.app_issue_count + i.fun_issue_count + i.data_issue_count + i.plat_issue_count + i.NFR_issue_count + i.tec_issue_count + i.3pp_issue_count + i.clar_issue_count + i.no_fcr_count + i.process_gap_count + i.know_gap_count) as count, i.app_issue_count, i.fun_issue_count, i.data_issue_count, i.plat_issue_count, i.NFR_issue_count, i.tec_issue_count, i.3pp_issue_count, i.clar_issue_count, i.no_fcr_count, i.process_gap_count, i.know_gap_count FROM opcos_list o INNER JOIN work_order_summary i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year and o.opco_type = 'LEGACY'");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['app_issue_count'],
				(int)$row['fun_issue_count'],
				(int)$row['data_issue_count'],
				(int)$row['plat_issue_count'],
				(int)$row['NFR_issue_count'],
				(int)$row['tec_issue_count'],
				(int)$row['3pp_issue_count'],
				(int)$row['clar_issue_count'],
				(int)$row['no_fcr_count'],
				(int)$row['process_gap_count'],
				(int)$row['know_gap_count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function updateQueryWOReOAll()
	{
		// Get the posted month and year values
		$selected_month = $this->input->post('month') ? $this->input->post('month') : date('n');
		$selected_year = $this->input->post('year') ? $this->input->post('year') : date('Y');
		// Update the query with the new parameters
		$query = $this->db->query("SELECT o.opco_name, (i.app_issue_count + i.fun_issue_count + i.data_issue_count + i.plat_issue_count + i.NFR_issue_count + i.tec_issue_count + i.3pp_issue_count + i.clar_issue_count + i.no_fcr_count + i.process_gap_count + i.know_gap_count) as count, i.app_issue_count, i.fun_issue_count, i.data_issue_count, i.plat_issue_count, i.NFR_issue_count, i.tec_issue_count, i.3pp_issue_count, i.clar_issue_count, i.no_fcr_count, i.process_gap_count, i.know_gap_count FROM opcos_list o INNER JOIN work_order_summary i ON o.id = i.opcos_list_id WHERE i.month_number = $selected_month AND i.year = $selected_year");
		$rows = $query->result_array();

		// Prepare the data array for the response
		$data = [];
		foreach ($rows as $row) {
			$data[] = [
				$row['opco_name'],
				(int)$row['count'],
				(int)$row['app_issue_count'],
				(int)$row['fun_issue_count'],
				(int)$row['data_issue_count'],
				(int)$row['plat_issue_count'],
				(int)$row['NFR_issue_count'],
				(int)$row['tec_issue_count'],
				(int)$row['3pp_issue_count'],
				(int)$row['clar_issue_count'],
				(int)$row['no_fcr_count'],
				(int)$row['process_gap_count'],
				(int)$row['know_gap_count'],
			];
		}

		// Return the updated query result as JSON
		echo json_encode($data);
	}

	public function get_chart_data()
	{
		$this->load->model('chart_model');
		$chart_data = $this->chart_model->getChartData();

		echo json_encode(array('chart_data' => $chart_data));
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('IndexModel', 'ind_model');
		$this->load->model('ReportsModel', 'report');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = array();
		$this->load->view('index', $data);
	}

	public function index2()
	{
		$data2 = array();
		$data2['woTicketsCount'] = $this->ind_model->getWorkordersTicketsCount(date("Y"));
		$this->load->view('index', $data2);
	}

	public function getIncidentsCount()
	{
		$all_opcos = $this->report->getAllOpcosDetails();
		$data = $this->ind_model->getIncidentsCount();
		// echo "<pre>";print_r($data);die();
		$monthsArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
		$temp = 0;
		for ($i = 0; $i < sizeof($all_opcos); $i++) {
			for ($j = 0; $j < sizeof($monthsArray); $j++) {
				for ($k = 0; $k < sizeof($data); $k++) {
					if ($data[$k]['opcos_list_id'] == $all_opcos[$i]['id'] && $data[$k]['month_number'] == $monthsArray[$j]) {
						$temp = $data[$k][$_POST['columnName']];
					}
				}
				$incidentsCount[$j] = $temp;
				$temp = 0;
			}
			$incidentsCountFinal[$i] = array(
				'opco_name' => $all_opcos[$i]['opco_shortname'],
				'counts' => $incidentsCount
			);
		}
		echo json_encode($incidentsCountFinal);
	}

	public function getServiceRequestCount()
	{
		$all_opcos = $this->report->getAllOpcosDetails();
		$data = $this->ind_model->getServiceRequestCount();
		// echo "<pre>";print_r($data);die();
		$monthsArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
		$temp = 0;
		for ($i = 0; $i < sizeof($all_opcos); $i++) {
			for ($j = 0; $j < sizeof($monthsArray); $j++) {
				for ($k = 0; $k < sizeof($data); $k++) {
					if ($data[$k]['opcos_list_id'] == $all_opcos[$i]['id'] && $data[$k]['month_number'] == $monthsArray[$j]) {
						$temp = $data[$k][$_POST['columnName']];
					}
				}
				$serviceRequestCount[$j] = $temp;
				$temp = 0;
			}
			$serviceRequestCountFinal[$i] = array(
				'opco_name' => $all_opcos[$i]['opco_shortname'],
				'counts' => $serviceRequestCount
			);
		}
		echo json_encode($serviceRequestCountFinal);
	}

	public function billingDetails()
	{
		$data = array();
		$this->load->view('billingDetails');
	}

	public function dataEntry()
	{
		$data = array();
		$this->load->view('dataentry', $data);
	}

	public function additionalDataEntry()
	{
		$data = array();
		$this->load->view('additionalDataEntry', $data);
	}

	public function getOpcoDetails()
	{
		$data = $this->ind_model->getOpcoDetails();
		echo json_encode($data);
	}

	public function submitData()
	{
		$data = $this->ind_model->submitData();
		// echo "<pre>";print_r($_POST);die();
		redirect('indexController/dataEntry');
	}

	public function autoDBdeleteData()
	{
		$data = $this->ind_model->deleteData();
		redirect('indexController/');
	}

	public function submitAdditionalData()
	{
		$data = $this->ind_model->submitAdditionalData();
		redirect('indexController/additionalDataEntry');
	}

	public function getBillCyclePeriods()
	{
		$data = $this->ind_model->getBillCyclePeriods();
		echo json_encode($data);
	}

	public function getDashboardsGraphsData()
	{
		$data['automation'] = $this->ind_model->getDashboardsGraphsData('automation_count', 'automation_dashboard_master');
		$data['km'] = $this->ind_model->getDashboardsGraphsData('km_count', 'km_dashboard_master');
		$data['oi'] = $this->ind_model->getDashboardsGraphsData('oi_count', 'oi_dashboard_master');
		$data['si'] = $this->ind_model->getDashboardsGraphsData('si_count', 'si_dashboard_master');
		// echo '<pre>';print_r($data);die();
		echo json_encode($data);
	}

	public function getAlreadyFilledData()
	{
		$data['incidents_summary'] = $this->ind_model->getIncidentSummaryTableData();
		$data['service_request_summary'] = $this->ind_model->getServiceRequestSummaryTableData();
		$data['repeat_ticket_details'] = $this->ind_model->getrepeatTicketDetailsTableData();
		$data['report_summary'] = $this->ind_model->getReportSummaryTableData();
		$data['automation_dashboard'] = $this->ind_model->getAutomationDashboardTableData();
		$data['km_dashboard'] = $this->ind_model->getKMDashboardTableData();
		$data['si_dashboard'] = $this->ind_model->getSIDashboardTableData();
		$data['oi_dashboard'] = $this->ind_model->getOIDashboardTableData();
		$data['buiseness_kpi_dashboard'] = $this->ind_model->getKPIDashboardTableData();
		$data['incident_count_by_group'] = $this->ind_model->getIncResolvedByGroupTableData();
		$data['workorder_count_by_group'] = $this->ind_model->getWoResolvedByGroupTableData();
		$data['work_order_summary'] = $this->ind_model->getWorkorderSummaryTableData();
		$data['incidents_reason'] = $this->ind_model->getincidentReasonTableData();

		echo json_encode($data);
	}

	public function addNewOpco()
	{
		$data = $this->ind_model->insertNewOpcoData();
		$opcoCode = $data['opco_code'];
		echo json_encode($opcoCode);
	}
}
