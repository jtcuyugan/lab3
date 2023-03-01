<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Guest extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

        $data = [
            'guest'  => $model->getGuest(),
            'title' => 'Guestbook',
        ];

        return view('templates/header', $data)
            . view('pages/Guests')
            . view('templates/footer');
    }
    
    public function create()
    {
        helper('form');

        if (! $this->request->is('post')){
            return view('templates/header', ['title' => 'Create a guest entry']) .
            view ('pages/Feedback') .
            view ('templates/footer');
        }

        $post = $this->request->getPost(['id','name','email','website','comment','gender','reg_date']);
        
        if (! $this->validateData($post, [
            'name' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',
            'website' => 'required|max_length[255]|min_length[3]',
            'comment' => 'required|max_length[255]|min_length[3]',
            'gender' => 'required|max_length[255]|min_length[3]',
            'reg_date' => 'current_timestamp()'
        ])) {
            return view('templates/header').
            view('pages/Feedback').
            view('templates/footer');
        }

        $model = model(GuestModel::class);

        $model->save([
            'name' => $post['name'],
            'email'  => $post['email'],
            'website'  => $post['website'],
            'comment'  => $post['comment'],
            'gender'  => $post['gender'],
        ]);

        return view('templates/header', ['title' => 'Add a Guest Entry'])
            . view('pages/Guests')
            . view('templates/footer');
    }
}