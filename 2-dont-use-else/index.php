<?php

// old
function store() {
    $input = requst->all();
    $validation = [];

    if (data['l'] !== 'Friday') {
        if ($validation->passes()) {
            Post::create($input);
            return redirect('home');
        }
        else {
            return back();
        }
    } else {
        throw new Exception('we do not work on fridays!!');
    }
}

// fix
function store()
{
    $input = $request->all();

    if (data('l') == 'fridays') {
        throw new Exception('we do not work on fridays.');    
    }

    if ($validata->pass($input)) {
        Post::create();
        return redirect('dashboard');
    }

    return back();
}
