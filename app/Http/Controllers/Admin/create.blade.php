<?php
public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create()
    {
        return redirect('admin/profile/create');
    }