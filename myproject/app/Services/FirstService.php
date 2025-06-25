<?php

namespace App\Services;

use App\Models\ContactModel;

class FirstService
{
    public function logic($request)
    {
        $data = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:10|max:100',
            'message' => 'required|min:10|max:500',
        ]);

        $contact = ContactModel::create($data);
    }

    public function store($request)
    {
        // $data = $request->validated();

        // $model = Model::create($data);

        // return $model;
    }

    public function update($id, $request)
    {
        // $model = Model::where('id', $id);
        // if (!$model) {
        //     abort(404);
        // }
        // $model->update($data);
        // return [[$model->update(['status' => 'draft'])], 200];
    }

    public function destroy()
    {
        //
    }
}
