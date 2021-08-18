<?php

namespace App\Http\Controllers\Profile;

use App\Helper\Stri;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        $contact = $request->user()->contact()->get();

        return view('pages.profile.addresses', [
            'contacts' => $contact
        ]);
    }

    public function create()
    {
        return view('pages.profile.addresses-create');
    }

    public function edit($id)
    {
        $contact = Contact::findOrfail($id);
        return view('pages.profile.addresses-edit', [
            'contact' => $contact
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token', 'default-address');
        $data['id'] = Stri::uuid();
        $data['account_id'] = $request->user()->id;

        Contact::create($data);

        session()->put('toast', __('global.Address added success'));

        return redirect()->route('account-address');
    }

    public function update(Request $request)
    {
        $data = $request->except('_token', 'default-address');
        $data['id'] = Stri::uuid();
        $data['account_id'] = $request->user()->id;

        Contact::create($data);

        return redirect()->route('account-address');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrfail($id);
        $contact->delete();

        session()->put('toast', __('global.Address remove success'));
        return redirect()->back();
    }
}
