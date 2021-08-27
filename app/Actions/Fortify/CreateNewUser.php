<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Auth;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {  
        // Validator::make($input, [
        //     'first_name' => ['required', 'string', 'max:255'],
        //     'last_name' => ['required', 'string', 'max:255'],
        //     'gender' => ['required'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => $this->passwordRules(),
        //     'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        // ])->validate();
          
        return User::create([
            'name' => $input['name'],
            'address' => $input['last_name'],
            'vat_number' => $input['gender'],
            'role' => 'user',
            'contact_number' => $input['contact_number'],
            'codice_fiscale' => $input['codice_fiscale'],
            'wallet' => 0,
            'email' => $input['email'],
            'created_by' => Auth::user()->id,
            'password' => Hash::make($input['password']),
        ]);
    }
}
