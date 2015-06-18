<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Nonmembers_Form_Report_NonMembers',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'NonMembers',
      'description' => 'NonMembers (uk.teamsinger.civicrm.reports.nonmembers)',
      'class_name' => 'CRM_Nonmembers_Form_Report_NonMembers',
      'report_url' => 'uk.teamsinger.civicrm.reports.nonmembers/nonmembers',
      'component' => 'CiviMember',
    ),
  ),
);