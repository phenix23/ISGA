<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'isga',
		'prefix' => '',
		'encoding' => 'utf8'
	);


//    public $default = array(
//        'datasource' => 'Database/Mysql',
//        'persistent' => false,
//        'host' => 'sql302.byethost31.com',
//        'login' => 'b31_12456803',
//        'password' => 'Eclipse1091',
//        'database' => 'b31_12456803_isga',
//        'prefix' => '',
//        'encoding' => 'utf8'
//    );
        

//            public $default = array(
//        'datasource' => 'Database/Mysql',
//        'persistent' => false,
//        'host' => 'mysql5.000webhost.com',
//        'login' => 'a2828665_root',
//        'password' => 'Eclipse1091',
//        'database' => 'a2828665_isga',
//        'prefix' => '',
//        'encoding' => 'utf8'
//    );

	// Imap email connection
    public $emailTicket = array(
        'datasource' => 'Emails.ImapSource',
        'server' => 'imap.gmail.com',
        'connect' => '{imap.gmail.com:993/imap/ssl}INBOX',
        'username' => 'hedahdia.faycel@gmail.com',
        'password' => 'Eclipse1091',
        'port' => '993',
        'ssl' => true,
        'encoding' => 'UTF-8',
        'error_handler' => 'php',
        'auto_mark_as' => array(
            'Seen',
            // 'Answered',
            // 'Flagged',
            // 'Deleted',
            // 'Draft',
        ),
    );
}
