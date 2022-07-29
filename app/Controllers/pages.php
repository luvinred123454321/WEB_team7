<?php 

namespace App\Controllers;

class pages extends BaseController{
    public function index(){
        $data = [
            'title' => 'Home | Konoha_Project'
        ];
        return view('pages/Home',$data);
    }
    public function profil(){
        $data = [
            'title' => 'Profil | Konoha_Project'
        ];
        return view('pages/profil',$data);
    }
    public function contact(){
        $data = [
            'title' => 'Contact | Konoha_Project'
        ];
        return view('pages/contact',$data);
    }
    public function team(){
        $data = [
            'title' => 'Team | Konoha_Project'
        ];
        return view('pages/team',$data);
    }
    public function info(){
        $data = [
            'title' => 'Info | Konoha_Project'
        ];
        return view('pages/info',$data);
    }
}
?>