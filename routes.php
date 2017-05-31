<?php

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
	Route::get('/staff', 'CRM\Lead\LeadController@json');
	Route::get('/staff/update', 'CRM\Lead\LeadController@jsonupdate');
	
	//Route::get('/', 'PageController@welcome');
	Route::get('/call', 'PageController@call');
	Route::get('about-us', 'PageController@about');
	Route::get('agents', 'PageController@agents');
	Route::get('asset-managers', 'PageController@assetManagers');
	Route::get('contact'       , 'PageController@contact');
	Route::get('faqs', 'PageController@faqs');
	Route::get('home', 'PageController@welcome');
	
	Route::get('calculators/FlipHouse.blade.php', 'PageController@calculators2');
	Route::get('calculators/ROI.blade.php', 'PageController@calculators1');
	Route::get('calculators/Amoritize.blade.php', 'PageController@calculators3');
	//Route::get('application/modal/resubmit', 'Documents\Rentals\ApplicationController@resubmit');
	Route::post('listing/table/load', 'Listings\OfferController@tableLoad');
	Route::get('resume/{first_nm}/{last_nm}/{id}', 'Users\ResumeController@show');
	Route::post('request/form', 'CRM\Lead\RequestController@form');
	Route::get('request/buyer', 'CRM\Lead\RequestController@community_form');
	Route::post('request/buyer', 'CRM\Lead\RequestController@community_store');
	Route::get('request/landing', 'CRM\Lead\RequestController@landing');
	Route::get('request/seller', 'CRM\Lead\RequestController@agent_form');
	Route::post('request/seller', 'CRM\Lead\RequestController@agent_store');
	Route::post('request/store', 'CRM\Lead\RequestController@store');
	Route::get('landing', 'CRM\Lead\LeadController@landing');
	Route::get('search', 'Listings\ListingController@search');

	// Ajax etc etc from OUR SIDE not integrations
	Route::post('agent/json', 'Users\AgentController@json')->name('account.ajax');
	Route::post('email/json', 'CRM\Email\EmailController@json')->name('email.ajax');
	// License json routes
	Route::post('license/json', 'Users\LicenseController@ajaxCall')->name('license.ajax');
	Route::get('tasks/today', 'CRM\TaskController@index')->name('tasks.index');
	Route::get('tours', 'CRM\Calendar\CalendarController@tours')->name('calendar.tours');
	Route::get('tasks', 'CRM\Calendar\CalendarController@tasks')->name('calendar.tasks');
	
	// Integration calls from other API's RentPrep, google, etc
	// Application routes rentPrep -Duke
	Route::post('background/payment', 'Documents\Rentals\ApplicationController@backgroundPayment')->name('background.payment');
	Route::get('background/consent', 'Documents\Rentals\ApplicationController@consentPage')->name('background.consent');
	// PHP Imap server connection -Duke currently not in use
	Route::get('email/testGet', 'CRM\Email\ImapController@testGet')->name('email.testGet');
	// RentPrep Integrations testing routes
	Route::post('rentPrep/post', 'Users\RentPrepController@post')->name('rentPrep.post');// real
	Route::post('rentPrep/receive', 'Users\RentPrepController@recieve')->name('rentPrep.receive');// callback not working...
	// Email routes
	Route::get('gmail/send', 'CRM\Email\OauthController@sendGoogleEmail')->name('gmail.send');            
	Route::get('gmail/import/contacts', 'CRM\Email\OauthController@importGoogleContacts')->name('google.import_contacts');
	Route::get('gmail/import/emails', 'CRM\Email\OauthController@importGoogleEmails')->name('google.import_emails');
	// To gather information from microsoft -TODO
	Route::get('microsoft/import/contacts', 'CRM\Email\OauthController@importMicrosoft')->name('microsoft.import');
	
	// Test routes delete when done!
	Route::get('rentPrep/send', 'Users\RentPrepController@send')->name('rentPrep.send');// test
	Route::post('rentPrep/test', 'Users\RentPrepController@test')->name('rentPrep.test');
	
	//Authentication routes
	$this->get('login', 'Auth\AuthController@showLoginForm');
	$this->post('login', 'Auth\AuthController@login');
	$this->get('logout', 'Auth\AuthController@logout');
	$this->get('register', 'Auth\AuthController@showRegForm');
	$this->post('register', 'Auth\AuthController@register');
	$this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
	$this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
	$this->post('password/reset', 'Auth\PasswordController@reset');
	
	//State routes
	foreach(Config::get('list.state_codes') as $code => $state) {
		Route::get(config('constant.HOUSES-FOR-SALE').'/'.strtolower($code), 'Listings\ListingController@state');
		Route::get(config('constant.HOUSES-FOR-SALE').'/'.strtolower($code).'/{county}-county', 'Listings\ListingController@county');
		Route::get(config('constant.HOUSES-FOR-SALE').'/'.strtolower($code).'/{city}', 'Listings\ListingController@city');
		Route::get(config('constant.HOUSES-FOR-SALE').'/'.strtolower($code).'/{city}/{neighborhood}', 'Listings\ListingController@neighborhood');
		Route::get(config('constant.HOUSES-FOR-SALE').'/'.strtolower($code).'/{city}/{address}/{id}/{couch_id}', 'Listings\ListingController@show');
		Route::get(config('constant.NOTES-FOR-SALE').'/'.strtolower($code), 'Listings\ListingController@state');
		Route::get(config('constant.NOTES-FOR-SALE').'/'.strtolower($code).'/{county}-county', 'Listings\ListingController@county');
		Route::get(config('constant.NOTES-FOR-SALE').'/'.strtolower($code).'/{city}', 'Listings\ListingController@city');
		Route::get(config('constant.NOTES-FOR-SALE').'/'.strtolower($code).'/{city}/{neighborhood}', 'Listings\ListingController@neighborhood');
		Route::get(config('constant.NOTES-FOR-SALE').'/'.strtolower($code).'/{city}/{address}/{id}/{couch_id}', 'Listings\ListingController@show');
		Route::get(config('constant.LAND-FOR-SALE').'/'.strtolower($code), 'Listings\ListingController@state');
		Route::get(config('constant.LAND-FOR-SALE').'/'.strtolower($code).'/{county}-county', 'Listings\ListingController@county');
		Route::get(config('constant.LAND-FOR-SALE').'/'.strtolower($code).'/{city}', 'Listings\ListingController@city');
		Route::get(config('constant.LAND-FOR-SALE').'/'.strtolower($code).'/{city}/{neighborhood}', 'Listings\ListingController@neighborhood');
		Route::get(config('constant.LAND-FOR-SALE').'/'.strtolower($code).'/{city}/{address}/{id}/{couch_id}', 'Listings\ListingController@show');
		Route::get(config('constant.HOUSES-FOR-RENT').'/'.strtolower($code), 'Listings\ListingController@state');
		Route::get(config('constant.HOUSES-FOR-RENT').'/'.strtolower($code).'/{county}-county', 'Listings\ListingController@county');
		Route::get(config('constant.HOUSES-FOR-RENT').'/'.strtolower($code).'/{city}', 'Listings\ListingController@city');
		Route::get(config('constant.HOUSES-FOR-RENT').'/'.strtolower($code).'/{city}/{neighborhood}', 'Listings\ListingController@neighborhood');
		Route::get(config('constant.HOUSES-FOR-RENT').'/'.strtolower($code).'/{city}/{address}/{id}/{couch_id}', 'Listings\ListingController@show');
	}
	
	//Postal routes
	Route::get(config('constant.HOUSES-FOR-SALE').'/{postal}', 'Listings\ListingController@postal')->where('postal', '[0-9]+');
	Route::get(config('constant.HOUSES-FOR-SALE').'/{postal}/{subdivision}', 'Listings\ListingController@subdivision')->where('postal', '[0-9]+');
	Route::get(config('constant.LAND-FOR-SALE').'/{postal}', 'Listings\ListingController@postal')->where('postal', '[0-9]+');
	Route::get(config('constant.LAND-FOR-SALE').'/{postal}/{subdivision}', 'Listings\ListingController@subdivision')->where('postal', '[0-9]+');
	Route::get(config('constant.NOTES-FOR-SALE').'/{postal}', 'Listings\ListingController@postal')->where('postal', '[0-9]+');
	Route::get(config('constant.NOTES-FOR-SALE').'/{postal}/{subdivision}', 'Listings\ListingController@subdivision')->where('postal', '[0-9]+');
	Route::get(config('constant.HOUSES-FOR-RENT').'/{postal}', 'Listings\ListingController@postal')->where('postal', '[0-9]+');
	Route::get(config('constant.HOUSES-FOR-RENT').'/{postal}/{subdivision}', 'Listings\ListingController@subdivision')->where('postal', '[0-9]+');

	
/*
|--------------------------------------------------------------------------
| Private Routes
|--------------------------------------------------------------------------
*/

	Route::group(['middleware' => ['auth']], function () {
		
		// CRM Routes Requiring a Valid Subscription to the Service
		Route::group(['middleware' => ['cust.crm']], function () {
			// Email Routes
			Route::get('email/config', 'CRM\Email\EmailController@config')->name('email.config');
			Route::delete('email/contacts/delete', 'CRM\Email\EmailController@deleteContacts')->name('contacts.delete');
			Route::post('email/contacts/commit', 'CRM\Email\EmailController@storeContacts')->name('contacts.commit');
			Route::delete('emails/delete', 'CRM\Email\EmailController@deleteEmails')->name('emails.delete');
			Route::get('email/send', 'CRM\Email\EmailController@send')->name('email.send');//testing email to send
				
			// Leads Routes
			Route::get('leads/regions/counties', 'CRM\Lead\RegionsController@counties')->name('leads.regions.counties');
			Route::get('leads/regions/create', 'CRM\Lead\RegionsController@create')->name('leads.regions.create');
			Route::get('leads/regions/counties/zipcodes', 'CRM\Lead\RegionsController@zipCodes')->name('leads.regions.counties.zipcodes');
			Route::get('leads/api/integration', 'CRM\Lead\LeadController@integration');
			Route::post('leads/api/source/create', 'CRM\Lead\SourceController@apiCreate');
			Route::get('leads/buyer', 'CRM\Lead\LeadController@buyer');
			Route::post('leads/field', 'CRM\Lead\LeadController@field');
			Route::get('leads/seller', 'CRM\Lead\LeadController@seller');
			Route::get('leads/upload', 'CRM\Lead\LeadController@upload')->name('leads.upload');
			Route::post('leads/upload/commit', 'CRM\Lead\LeadController@commit')->name('leads.commit');
			Route::post('leads/upload/load', 'CRM\Lead\LeadController@load')->name('leads.load');
			Route::delete('leads/upload/rollback', 'CRM\Lead\LeadController@rollback')->name('leads.rollback');	
		});
		
		// Signature Routes Requiring a Valid Subscription to the Service
		Route::group(['middleware' => ['cust.signature']], function () {
				
			
		});
					
		// Account routes
		Route::delete('accounts/upload/delete', 'CRM\AccountController@delete')->name('accounts.delete');
		Route::post('accounts/upload/commit', 'CRM\AccountController@commit')->name('accounts.commit');
		Route::get('accounts/upload', 'CRM\AccountController@upload')->name('accounts.upload');
		Route::post('accounts/upload/load', 'CRM\AccountController@load')->name('accounts.load');
		// Application Routes
		Route::get('application/create/multi', 'Documents\Rentals\ApplicationController@multi');
		Route::get('application/fee', 'Documents\Rentals\ApplicationController@fee');
		Route::post('application/modal/applicants', 'Documents\Rentals\ApplicationController@applicants');
		Route::get('application/verification/pricing', 'Documents\Rentals\ApplicationController@pricing');
		Route::get('application/submit/{id}', 'Documents\Rentals\ApplicationController@submit');
		// Calendar Routes
		Route::get('calendar/show', 'CRM\Calendar\CalendarController@show');
		// Checklist Routes
		Route::get('checklist/create-checklist', 'CRM\Checklist\ChecklistController@create');
		// Confituration Routes
		Route::get('configure', 'Auth\AuthController@configure');
		// Dashboard Routes
		Route::get('dashboard', 'PortalController@index');
		Route::post('dashboard', 'PortalController@index'); //POST method for Lrole switch.		
		// Listing Routes
		Route::get('listings/form', 'Listings\ListingController@form')->name('listings.form');
		Route::get('listings/new', 'Listings\ListingController@newIndex');
		Route::get('listings/rentals', 'Listings\ListingController@rentals')->name('listings.rentals');
		// Form Routes
		Route::get('my-forms', 'Documents\FormController@myForms');
		// Offer Routes
		Route::get('offer/oauth', 'Listings\OfferController@oauthCheck');
		Route::get('offer/oauth/redeem-token', 'Listings\OfferController@redeemToken');
		Route::post('offer/generate-contract', 'Listings\OfferController@generateContract');
		Route::post('offer/modal/account/create', 'Listings\OfferController@createAccount');
		Route::post('offer/modal/buyers', 'Listings\OfferController@buyers');
		Route::get('offer/modal/oauth', 'Listings\OfferController@oauthLoad');
		Route::get('offer/signed/{id}/{key}', 'Listings\OfferController@signingStatus');
		// Pipeline Routes
		Route::get('pipelines/create-pipeline', 'CRM\PipelinesController@create');
		// Credit Routes
		Route::get('documents/rentals/credit', 'Documents\Rentals\CreditController@show');
		// Resume Routes
		Route::post('resume/basic/commit','Users\ResumeController@saveBasic')->name('resume.basic');
		Route::post('resume/license/commit','Users\ResumeController@saveLicense')->name('resume.license');
		Route::post('resume/milestones/commit', 'Users\ResumeController@saveMilstone')->name('resume.saveMilstones');
		Route::post('resume/faq/commit', 'Users\ResumeController@saveFaq')->name('resume.faq');
		Route::get('resume/milestones', 'Users\ResumeController@getMilestones')->name('resume.getMilestones');
		// Settings Routes
		Route::get('settings/email/imap', 'CRM\SettingController@emailImap');
		Route::get('settings/email/select', 'CRM\SettingController@emailselect');
		// Subscription routes
		Route::get('subscription/crm', 'SubscriptionController@crm')->name('subscription.crm');
		Route::get('subscription/signature', 'SubscriptionController@signature')->name('subscription.signature');
		// Team Routes
		Route::get('team/brokerage', 'Users\TeamController@brokerage')->name('team.brokerage');
		// Tour Routes
		Route::get('tour/select', 'CRM\TourController@select')->name('tour.select');
		Route::get('tour/schedule', 'CRM\TourController@schedule')->name('tour.schedule');
		// Transaction Routes
		Route::get('transaction/modal/listing', 'Documents\Transaction\TransactionController@listingSelect');
		Route::get('listings/lease', 'Listings\LeaseController@lease')->name('listings.lease');
		// Repairs Routes
		Route::get('repairs', 'Repairs\RepairsController@create')->name('repairs.form');
		// Resource Routes
		Route::resource('accounts', 'CRM\AccountController');
		Route::resource('agent', 'Users\AgentController');// new name was account setup
		Route::resource('applicant', 'Documents\Rentals\ApplicantController');
		Route::resource('application', 'Documents\Rentals\ApplicationController');
		Route::resource('answer', 'Users\AnswerController');
		Route::resource('calendar', 'CRM\Calendar\CalendarController');
		Route::resource('document', 'Documents\Transaction\DocumentController');
		Route::resource('email','CRM\Email\EmailController');
		Route::resource('template', 'CRM\Email\TemplateController');
		Route::resource('form', 'Documents\FormController');
		Route::resource('groups', 'CRM\Workflow\GroupController');
		Route::resource('interaction', 'CRM\InteractionController');
		Route::resource('leads', 'CRM\Lead\LeadController');
		Route::resource('lease', 'Documents\Rentals\LeaseController');
		Route::resource('license', 'Users\LicenseController');
		Route::resource('listings', 'Listings\ListingController');
		Route::resource('milestone', 'Users\MilestoneController');//added
		Route::resource('network', 'Users\NetworkController');
		Route::resource('offer', 'Listings\OfferController');
		Route::resource('opportunities', 'CRM\OpportunityController');
		Route::resource('organization', 'Users\OrganizationController');
		Route::resource('participant', 'Documents\Transaction\ParticipantController');
		Route::resource('payment', 'Users\PaymentController');
		Route::resource('platform', 'Listings\PlatformController');
		Route::resource('portfolio', 'Listings\PortfolioController');
		Route::resource('properties', 'Listings\PropertyController');
		Route::resource('request', 'CRM\Lead\RequestController');
		Route::resource('resume', 'Users\ResumeController');
		Route::resource('sources', 'CRM\Workflow\SourceController');
		Route::resource('team', 'Users\TeamController');
		Route::resource('transaction', 'Documents\Transaction\TransactionController');
		Route::resource('queues', 'CRM\Lead\QueuesController');
		Route::resource('pipelines', 'CRM\PipelinesController');

	});


Route::get('test', 'Users\PaymentController@test');
 // Route::get('test', function() {
	 
	 
	
	// $url = "http://photos.listhub.net/CVRMLS/1613135/1?lm=20160420T235233";
	// $header = get_headers($url, 1);
	// $mime = $header['Content-Type'];
	// $ext = getExtension($mime);
	// $clean = substr($url, 0, strrpos($url, '?'));
	// $file_name = substr(strrchr($clean, "/"), 1) . $ext;
	// return $file_name;
 // 	print_r(get_headers("http://photos.listhub.net/CVRMLS/1613135/1?lm=20160420T235233", 1));
 // });
 
/*
 |--------------------------------------------------------------------------
 | CTI/Twillio Routes
 |--------------------------------------------------------------------------
 */
 /*

// POST URL to handle form submission and make outbound call
Route::post('/call', function () {
	// Get form input
	$userPhone = Input::get('userPhone');
	$encodedSalesPhone = urlencode(Input::get('salesPhone'));
	// Set URL for outbound call - this should be your public server URL
	$host = parse_url(Request::url(), PHP_URL_HOST);

	// Create authenticated REST client using account credentials in
	// <project root dir>/.env.php
	$client = new Twilio\Rest\Client(
			getenv('TWILIO_ACCOUNT_SID'),
			getenv('TWILIO_AUTH_TOKEN')
			);

	try {
		$client->calls->create(
				$userPhone, // The visitor's phone number
				getenv('TWILIO_NUMBER'), // A Twilio number in your account
				array(
						"url" => "http://$host/outbound/$encodedSalesPhone"
				)
				);
	} catch (Exception $e) {
		// Failed calls will throw
		return $e;
	}

	// return a JSON response
	return array('message' => 'Call incoming!');
});

	// POST URL to handle form submission and make outbound call
	Route::post('/outbound/{salesPhone}', function ($salesPhone) {
		// A message for Twilio's TTS engine to repeat
		$sayMessage = 'Thanks for contacting our sales department. Our
        next available representative will take your call.';

		$twiml = new Twilio\Twiml();
		$twiml->say($sayMessage, array('voice' => 'alice'));
		$twiml->dial($salesPhone);

		$response = Response::make($twiml, 200);
		$response->header('Content-Type', 'text/xml');
		return $response;
	});
	
		Route::get(
				'/call', ['as' => 'home', function () {
				return response()->view('index');
				}]
				);
		
		Route::post(
				'/token',
				['uses' => 'CRM\Call\TokenController@newToken', 'as' => 'new-token']
				);
		Route::get(
				'/dashboard',
				['uses' => 'CRM\Call\DashboardController@dashboard', 'as' => 'dashboard']
				);
		Route::post(
				'/ticket',
				['uses' => 'CRM\Call\TicketController@newTicket', 'as' => 'new-ticket']
				);
		Route::post(
				'/support/call',
				['uses' => 'CRM\Call\CallController@newCall', 'as' => 'new-call']
				);
*/

