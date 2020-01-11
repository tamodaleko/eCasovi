<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Requests\Teacher\User\UpdateUserAccountRequest;
use App\Http\Requests\Teacher\User\UpdateUserPasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends TeacherController
{
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editAccount()
    {
        return view('teacher.user.account', [
            'account' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Teacher\User\UpdateUserAccountRequest $request
     * @return \Illuminate\Http\Response
     */
    public function updateAccount(UpdateUserAccountRequest $request)
    {
        $validated = $request->validated();

        auth()->user()->fill($validated);

        if (!auth()->user()->save()) {
            return redirect()->route('teacher.user.account')->withError(__('Account could not be updated.'));
        }

        return redirect()->route('teacher.user.account')->withSuccess(__('Account has been updated successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editPassword()
    {
        return view('teacher.user.password', [
            'account' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Teacher\User\UpdateUserPasswordRequest $request
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(UpdateUserPasswordRequest $request)
    {
        $validated = $request->validated();

        if (!Hash::check($validated['password'], auth()->user()->password)) {
            return redirect()->route('teacher.user.password')->withError(__('Your current password is invalid.'));
        }

        auth()->user()->password = Hash::make($validated['new_password']);

        if (!auth()->user()->save()) {
            return redirect()->route('teacher.user.password')->withError(__('Password could not be updated.'));
        }

        return redirect()->route('teacher.user.password')->withSuccess(__('Password has been updated successfully.'));
    }
}
