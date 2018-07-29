<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Administrator;

use App\Repositories\Admin\InfoRepository;

use Response, Auth, Validator, DB, Exception;

class InfoController extends Controller
{
    //
    private $service;
    private $repo;
    public function __construct()
    {
        $this->repo = new InfoRepository;
    }

	public function index()
	{
        return $this->repo->view_index();
	}

    // 编辑基本资料
    public function editAction()
    {
        if(request()->isMethod('get'))  return $this->repo->view_edit();
        else if (request()->isMethod('post')) return $this->repo->save(request()->all());
    }
}
