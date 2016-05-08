<?php  
$nm_lang['create_conn_wizard']['btnavancar'] = 'Next'; 
$nm_lang['create_conn_wizard']['btnconcluir'] = 'Save'; 
$nm_lang['create_conn_wizard']['btnhelp'] = 'Help'; 
$nm_lang['create_conn_wizard']['btnsair'] = 'Cancel'; 
$nm_lang['create_conn_wizard']['btntestar'] = 'Test Connection'; 
$nm_lang['create_conn_wizard']['btnvoltar'] = 'Back'; 
$nm_lang['create_conn_wizard']['descricoes']['access'] = 'Path to the Access database file!'; 
$nm_lang['create_conn_wizard']['descricoes']['base'] = 'The database name where your tables are stored on the server.'; 
$nm_lang['create_conn_wizard']['descricoes']['conn'] = 'A name to identify the connection that will be created. When you begin to create applications, it will be this connection name that you will be able to choose from.'; 
$nm_lang['create_conn_wizard']['descricoes']['dbms'] = 'The database type that you are trying to connect to!'; 
$nm_lang['create_conn_wizard']['descricoes']['decimal'] = 'SGDB decimal separator. Used on the inserts and updates by the applications. <br><br>Ex: UPDATE TB_EXAMPLE SET Salary = 1500.00 WHERE CLIENTID = 1 if you choose the decimal separator to be \'.\', <br><br><br>or UPDATE TB_EXAMPLE SET Salary = \'1500,00\' WHERE CLIENTID = 1 if you choose the decimal separator to be \',\'. <BR ><BR >'; 
$nm_lang['create_conn_wizard']['descricoes']['ibase'] = 'To connect to Interbase, you must inform the machine address (IP, DNS or name), colon and the database file path.<BR ><BR >Eg: 192.168.254.254:c:ibasedatabase.gdb!'; 
$nm_lang['create_conn_wizard']['descricoes']['odbc'] = 'Name of the ODBC that was created to access your database!'; 
$nm_lang['create_conn_wizard']['descricoes']['oracle'] = 'Oracle s TSNAME to access the database!'; 
$nm_lang['create_conn_wizard']['descricoes']['pass'] = 'The DBMS user password!'; 
$nm_lang['create_conn_wizard']['descricoes']['pass_confirm'] = 'The password confirmation must be equal to the password!'; 
$nm_lang['create_conn_wizard']['descricoes']['rep'] = 'DataDictionary - Repository is a tool to store informations about your database to improve the development speed.'; 
$nm_lang['create_conn_wizard']['descricoes']['retrieve_schema'] = 'Choose if you want to use the name of the schema before the name of the table. Ex: public.table_name. <br /> <br /> If you do not know what this option means, leave the default value.'; 
$nm_lang['create_conn_wizard']['descricoes']['schema'] = 'The schema where your table are stored!'; 
$nm_lang['create_conn_wizard']['descricoes']['server'] = 'Address of the server where you database is stored. It can be a local or a remote machine. All you have to do is inform the machine name, its IP or its DNS.'; 
$nm_lang['create_conn_wizard']['descricoes']['sgdb'] = 'Access method to the DBMS. Connect using a specific database version , or connect by ADO or ODBC!'; 
$nm_lang['create_conn_wizard']['descricoes']['sqlite'] = 'Path where the SQLite database file is located!'; 
$nm_lang['create_conn_wizard']['descricoes']['user'] = 'The DBMS user name!'; 
$nm_lang['create_conn_wizard']['descricoes']['use_persistent'] = 'Connection persistent, even after closing the connection, it stay in a pool of connections. Opening a new connection, it checks the pool of connection and get the handle. <br /> <br /> It is usually faster because it does not open a new connection. <br /> <br /> But not all databases are compatible or quick. <br /> <br /> Some databases have cache and in such cases it is better to open a new clean connection.'; 
$nm_lang['create_conn_wizard']['erro']['conn'] = 'Inform a valid connection name!'; 
$nm_lang['create_conn_wizard']['erro']['conn_e'] = 'This connection name already exists!'; 
$nm_lang['create_conn_wizard']['erro']['pass_confirm'] = 'The password confirmation must be equal to the password.'; 
$nm_lang['create_conn_wizard']['erro']['sgdb'] = 'Inform a valid DBMS!'; 
$nm_lang['create_conn_wizard']['erro']['title'] = 'ERROR'; 
$nm_lang['form_db2_warning'] = 'Attention, the settings below are specific to native ibm_db2 drive. <br />Only change if you know what you are doing. For more details see: <br />http://br2.php.net/manual/pt_BR/function.db2-connect.php'; 
$nm_lang['label']['access'] = 'PATH'; 
$nm_lang['label']['action'] = 'Actions'; 
$nm_lang['label']['addgroup'] = 'Add this connection to my current Project'; 
$nm_lang['label']['base'] = 'Database Name'; 
$nm_lang['label']['conn'] = 'Connection Name'; 
$nm_lang['label']['dbms'] = 'DBMS'; 
$nm_lang['label']['decimal'] = 'Decimal Separator'; 
$nm_lang['label']['ibase'] = 'IP:PATH'; 
$nm_lang['label']['lista'] = 'Connection List'; 
$nm_lang['label']['odbc'] = 'ODBC Name'; 
$nm_lang['label']['oracle'] = 'TSNAME'; 
$nm_lang['label']['pass'] = 'Password'; 
$nm_lang['label']['pass_confirm'] = 'Confirm Password'; 
$nm_lang['label']['port'] = 'Port (default %s)';
$nm_lang['label']['prj_criado'] = 'Project successfully created. Continue to create a database connection'; 
$nm_lang['label']['rep'] = 'Repository'; 
$nm_lang['label']['retrieve_schema'] = 'Use schema before the table name'; 
$nm_lang['label']['schema'] = 'Schema'; 
$nm_lang['label']['server'] = 'Server/Host (Name or IP)'; 
$nm_lang['label']['sgdb'] = 'DBMS Type'; 
$nm_lang['label']['sqlite'] = 'PATH'; 
$nm_lang['label']['testar'] = 'Test the connection'; 
$nm_lang['label']['user'] = 'Username'; 
$nm_lang['label']['use_persistent'] = 'Persistent Connection'; 
$nm_lang['lbl_hide_filter']  = 'Hide Filter'; 
$nm_lang['lic_new_error_pr_'] = 'Your license Professiona Edition only allow to create 5 connections.<BR>Please, contact sales@scriptcase.net to migrate to another license type.'; 
$nm_lang['msg_cancel_create_conn'] = 'Do you wish to cancel ?'; 
$nm_lang['msg_connect_lang'] = 'When using multibyte chars like: Arabic, Chinese, Japanese or Russian, the ScriptCase only supports UTF-8 encoded databases, all read and written data is now displayed and stored as UTF-8 encoding in your database'; 
$nm_lang['msg_conn_erro'] = 'Connection Error'; 
$nm_lang['msg_empty_lst_conn']  = 'Empty list of connections.'; 
$nm_lang['msg_err_server_empty'] = 'Server/Host (Name or IP) not informed !'; 
$nm_lang['msg_err_user_empty']  = 'User is not informed!'; 
$nm_lang['new_denied'] = 'Access Denied'; 
$nm_lang['page_title'] = 'Click on the icon to select the DBMS to connect'; 
$nm_lang['page_title_edit'] = 'Click on the icon to select the connection to edit'; 
$nm_lang['page_title_sucess'] = 'Connection successfully created'; 
$nm_lang['values']['nao'] = 'No'; 
$nm_lang['values']['sim'] = 'Yes'; 
$nm_lang['lbl_excl'] = 'Do you really want to delete this connection?';
$nm_lang['mainmenu_new_conn'] = 'New connection';

$nm_lang['btn_conc'] = 'Save'; 
$nm_lang['btn_db2'] = 'DB2'; 
$nm_lang['btn_edit'] = 'Edit'; 
$nm_lang['btn_excl'] = 'Delete'; 
$nm_lang['btn_filt'] = 'Filter'; 
$nm_lang['btn_pass'] = 'Change Password'; 
$nm_lang['btn_stat'] = 'Connection'; 
$nm_lang['btn_test'] = 'Test'; 
$nm_lang['lbl_apli'] = 'Apply'; 
$nm_lang['lbl_atr'] = 'Attribute'; 
$nm_lang['lbl_base'] = 'Base'; 
$nm_lang['lbl_dbms'] = 'Database Type'; 
$nm_lang['lbl_deci'] = 'Decimal Separator'; 
$nm_lang['lbl_excl'] = 'Do you really want to delete this connection?'; 
$nm_lang['lbl_exi'] = 'Show'; 
$nm_lang['lbl_filt'] = 'Filters'; 
$nm_lang['lbl_filt_exib'] = 'Show'; 
$nm_lang['lbl_filt_n_exib'] = 'Dont show'; 
$nm_lang['lbl_filt_owner'] = 'Owner'; 
$nm_lang['lbl_filt_tab'] = 'Tables'; 
$nm_lang['lbl_nao'] = 'No'; 
$nm_lang['lbl_pass'] = 'Pass'; 
$nm_lang['lbl_pass_blank'] = 'Set blank password'; 
$nm_lang['lbl_pass_confirm'] = 'Confirm Password'; 
$nm_lang['lbl_retrieve_schema'] = 'Use schema name before table name'; 
$nm_lang['lbl_schema'] = 'Schema'; 
$nm_lang['lbl_serv'] = 'Host'; 
$nm_lang['lbl_show_proc'] = 'Procedures'; 
$nm_lang['lbl_show_system'] = 'System tables'; 
$nm_lang['lbl_show_table'] = 'Tables'; 
$nm_lang['lbl_show_view'] = 'Views'; 
$nm_lang['lbl_sim'] = 'Yes'; 
$nm_lang['lbl_trans'] = 'Has transaction?'; 
$nm_lang['lbl_use_persistent'] = 'Persistent Connection'; 
$nm_lang['lbl_usua'] = 'User'; 
$nm_lang['lbl_val'] = 'Value'; 
$nm_lang['msg_connect_lang'] = 'When using multibyte chars like: Arabic, Chinese, Japanese or Russian, the ScriptCase only supports UTF-8 encoded databases, all read and written data is now displayed and stored as UTF-8 encoding in your database'; 
$nm_lang['msg_save_text'] = 'Your changes have been successfully saved.'; 
$nm_lang['msg_save_title'] = 'Warning'; 
$nm_lang['page_title'] = 'Connections'; 

$nm_lang['button_cancel'] = 'Cancel'; 
$nm_lang['button_close'] = 'Close'; 
$nm_lang['button_confirm'] = 'Confirm';

$nm_lang['lbl_bt_edit_conn'] = 'Edit connection'; 
$nm_lang['lbl_connection_edit'] = 'Edit connection'; 

$nm_lang['lbl_loading']  = 'Loading'; 

$nm_lang['page_apl_cache'] = 'Deployed applications makes cache of the connection. When changing any data in the connection, remember to close the browser and open it again!';

$nm_lang['create_conn_wizard']['descricoes']['date_separator'] = 'Character to use as the delimiter in the date fields within the databases. Example: &#39;2016-01-01&#39; <br /><br />If you do not know what this option means, please just leave it blank.';
$nm_lang['label']['date_separator'] = 'Delimiter character for date field in the database.';
$nm_lang['lbl_date_separator'] = $nm_lang['label']['date_separator'];
?>