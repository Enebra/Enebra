<?php

namespace App\Http\Controllers\Website\Social;

use Request;

use Response;

use View;

use Lang;

use App\Http\Controllers\Website\SocialController;

class ProfileController extends SocialController
{
    

    public function __construct()
    {

    		parent::__construct() ;
    }

    public function index()
    {
    	$this -> data['meta'] -> title = Lang::get('account.personal_information');

    	return View::make( self::SOCIAL . '.pages.account.info', $this -> data ) -> render();
    }

    public function balance()
    {
        $this -> data['meta'] -> title = Lang::get('account_nav.balance');

        return View::make( self::SOCIAL . '.pages.account.balance', $this -> data ) -> render();

    }

    public function chron()
    {
        $this -> data['meta'] -> title = Lang::get('account_nav.chron');

        return View::make( self::SOCIAL . '.pages.account.chron', $this -> data ) -> render();

    }

    public function feed_settings()
    {
        $this -> data['meta'] -> title = Lang::get('account_nav.feed_setting');

        return View::make( self::SOCIAL . '.pages.account.feed_settings', $this -> data ) -> render();

    }

    public function blockchain()
    {
        $this -> data['meta'] -> title = Lang::get('account_nav.blockchain');

        return View::make( self::SOCIAL . '.pages.account.blockchain', $this -> data ) -> render();

    }

    public function innov()
    {
        $this -> data['meta'] -> title = Lang::get('account_nav.inovation');

        return View::make( self::SOCIAL . '.pages.account.innov', $this -> data ) -> render();

    }

    public function inform()
    {
        $this -> data['meta'] -> title = Lang::get('account_nav.information');

        return View::make( self::SOCIAL . '.pages.account.inform', $this -> data ) -> render();

    }
}
