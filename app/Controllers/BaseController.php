<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\PermohonanModel;
use App\Models\TanggunganModel;
use App\Models\UserModel;
use App\Models\UserTypeModel;
use App\Models\AksesModel;
use App\Models\PenggunaAksesModel;
use App\Models\AuditTrailModel;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['date', 'url', 'session'];

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		date_default_timezone_set('Asia/Kuala_Lumpur');

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();

		$this->permohonanModel = new PermohonanModel();
		$this->tanggunganModel = new TanggunganModel();
		$this->aksesModel = new AksesModel();
		$this->userModel = new UserModel();
		$this->userTypeModel = new UserTypeModel();
		$this->penggunaAksesModel = new PenggunaAksesModel();
		$this->auditTrailModel = new AuditTrailModel();
		$this->session = \Config\Services::session();
	}
}
