<?php

// The database connection settings where amavis stores settings and emails.
// See mysql.schema for more details.
$rcmail_config['amacube_db_dsn'] = 'mysql://amavis:secret@localhost/amavis';

// Hostname and port of the amavis process.
// For release of quarantined emails, amavis must be set up to accept socket connections from the host where roundcube is running on.
// See README.md for more details.
$rcmail_config['amacube_amavis_host'] = 'localhost';
$rcmail_config['amacube_amavis_port'] = '9998';

// The database connection settings where mailbox accounts are stored.
// When specified amacube will try to get catchall and filter fields from this table
// See mysql.schema for more details.
$rcmail_config['amacube_accounts_db_dsn'] = $rcmail_config['amacube_db_dsn']

// Account table
// This table is used by amacube to lookup accounts in the accounts database
// See README.md for more details.
$rcmail_config['amacube_accounts_db_account_table'] = 'mailbox';

// Account field
// This field is used by amacube to lookup accounts in the accounts database
// See README.md for more details.
$rcmail_config['amacube_accounts_db_account_field'] = 'email';

// Catchall field
// When this field is enabled (1) amacube settings and quarantine apply to entire domain
// See README.md for more details.
$rcmail_config['amacube_accounts_db_account_catchall_field'] = 'catchall';

// Filter field
// When this field is disabled (0) amacube settings and quarantine are not displayed
// See README.md for more details.
$rcmail_config['amacube_accounts_db_account_filter_field'] = 'filter';

// Auto create user
// When enabled amacube will check this amavis database user table field for 1 or 0 and respecfully enables or disables plugin features
$rcmail_config['amacube_auto_create_user'] = true;

// Default Quarantine Page Size
$rcmail_config['mail_pagesize'] = 25;

?>
