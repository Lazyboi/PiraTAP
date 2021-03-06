<?php

use App\ComputerLaboratory;
use LPU\DateTime;
use LPU\Route;

ComputerLaboratory::validateIncidentReport();
ComputerLaboratory::loadIncidentReportData();

?>
<style>
.print-body table {
  margin: 10px 0;
}

.print-body table > thead > tr > th > h5 {
  color: #333;
  font-weight: bold;
  margin: 5px 0;
}
</style>
<div class="print-header">
  <h4>LYCEUM OF THE PHILIPPINES UNIVERSITY</h4>
  <h5>Information and Communication Technology</h5>
  <h5>Cavite Campus</h5>
  <h3>LABORATORY INCIDENT REPORT</h3>
</div>
<div class="print-body">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="2">
          <h5>REPOTER DETAILS:</h5>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="width: 50%;">
          <label>Name of Reporter:</label>
          <div>
            <?php ComputerLaboratory::displayIncidentReportData('reported_by'); ?>
          </div>
        </td>
        <td style="width: 50%;">
          <label>Date of Report:</label>
          <div>
            <?php ComputerLaboratory::displayIncidentReportData('reported_at'); ?>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <label>Department(s):</label> 
          <div>
            <?php ComputerLaboratory::displayIncidentReportData('reporter_departments'); ?>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="2">
          <h5>INCIDENT DETAILS:</h5>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="width: 50%;">
          <label>Date of Incident:</label>
          <div>
            <?php ComputerLaboratory::displayIncidentReportData('incident_date'); ?>
          </div>
        </td>
        <td style="width: 50%;">
          <label>Laboratory No:</label>
          <div>
            <?php ComputerLaboratory::displayIncidentReportData('laboratory'); ?>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <label>Name of Violation/Incident:</label> 
          <div>
            <?php ComputerLaboratory::displayIncidentReportData('subject'); ?>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <label>Summary of the Violation/Incident:</label>
          <div>
            <?php ComputerLaboratory::displayIncidentReportData('description'); ?>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <label>Person(s) Involved:</label>
          <div>
            <?php ComputerLaboratory::displayIncidentReportData('persons_involved'); ?>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <label>Attachment(s):</label>
          <div>
            <?php ComputerLaboratory::displayIncidentReportData('attachments'); ?>
          </div>
        </td>
      </tr>
    </tobdy>
  </table>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="2">
          <h5>TECHNICAL DETAILS:</h5>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="2">
          <label>Findings:</label>
          <div>
            <?php ComputerLaboratory::displayIncidentReportData('findings'); ?>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <label>Action Taken:</label>
          <div>
            <?php ComputerLaboratory::displayIncidentReportData('action_taken'); ?>
          </div>
        </td>
      </tr>
      <tr>
        <td style="width: 50%;">
          <label>Date of Process:</label>
          <div>
            <?php ComputerLaboratory::displayIncidentReportData('processed_at'); ?>
          </div>
        </td>
        <td style="width: 50%;">
          <label>Processed By:</label>
          <div>
            <?php ComputerLaboratory::displayIncidentReportData('processed_by'); ?>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="print-footer">
    This was printed on <label><?php DateTime::display('F d, Y h:i:s A') ?></label>
  </div>
</div>
