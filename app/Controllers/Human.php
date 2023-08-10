<?php

namespace App\Controllers;
use App\Models\HumanModel;

class Human extends BaseController
{

    protected $humanModel;

    public function __construct()
    {
        $this->humanModel = new HumanModel();
    }
    public function index()
    {
        
        // $currentPage = $this->request->getVar('page_human') ? $this->request->getVar('page_human') : 1;

        $page = $this->request->getVar('page_human');
        if($page){
            $page = $this->request->getVar('page_human');
        }else{
            $page = 1;
        }

        $dataTampil = 5;

        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $key = $this->humanModel->search($keyword);
        }else{
            $key = $this->humanModel;
        }

        $data = [
            'tittle' => 'Human info',
            // 'human' => $this->humanModel->findAll()
            'human'=>  $key->paginate($dataTampil, 'human'),
            'pager' => $key->pager,
            'currentPage' => $page,
            'dataTampil' => $dataTampil
        ];

        return view('human/index',$data);
    }
}