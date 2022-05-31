<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Classes\CountryList;
use App\Mail\ContactFormData;
use App\Models\UsersUniquecodes;
use Illuminate\Support\Facades\Mail;


class ContactFormController extends Controller
{
    public function index(Request $request) {
        $request->session()->put([
            'formData.firstName' => '',
            'formData.lastName' => '',
            'formData.email' => '',
            'formData.phone' => '',
            'formData.age' => '',
            'formData.country' => '',
            'formData.criminalRecord' => '',
            'formData.description' => '',
            'formData.secondPass' => '',
            'formData.currentStructure' => '',
            'formData.liveAbroad' => '',
            'formData.conclusion' => '',
            'formData.offshore' => '',
            'formData.reason' => '',
            'formData.currentSituation' => '',
            'formData.powerstructures' => '',
            'formData.agreement' => ''
        ]);
        return view('form', ['param' => 'home']);
    }

    public function getSessionVars(Request $request) {
        $param = explode('/', $request->url());
        $countries = new CountryList();
        return view('form', [
            'param' => isset($param[4]) ? $param[4] : 'home',
            'countries' => $countries->countries(),
            'formData' => $request->session()->get('formData'),
            'ages' => [
                'Jünger als 25',
                '25-35',
                '35-44',
                '45-54',
                '55-64',
                '64+'
            ]
        ]);
    }

    public function store(Request $request) {
        
        $param = explode('/', $request->url());
        if ($param[4] == 'step2') {
            $this->validate($request, [
                'fullName' => 'required',
                'email' => 'required|email',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'age'=> 'required'
             ]);
            $request->session()->put([
                'formData.firstName' => $request->fullName,
                'formData.lastName' => $request->fullName,
                'formData.email' => $request->email,
                'formData.phone' => $request->phone,
                'formData.age' => $request->age
            ]);
        }
        
        if ($param[4] == 'step3') {
            $request->session()->put([
                'formData.country' => $request->country
            ]);
        }

        if ($param[4] == 'step4') {
            $request->session()->put([
                'formData.criminalRecord' => $request->criminalRecord
            ]);
        }

        if ($param[4] == 'step5') {
            $request->session()->put([
                'formData.description' => $request->globalleaders
            ]);
        }

        if ($param[4] == 'step6') {
            $request->session()->put([
                'formData.secondPass' => $request->secondPass
            ]);
        }

        if ($param[4] == 'step7') {
            $request->session()->put([
                'formData.currentStructure' => $request->currentStructure
            ]);
        }

        if ($param[4] == 'step8') {
            $request->session()->put([
                'formData.liveAbroad' => $request->liveAbroad
            ]);
        }

        if ($param[4] == 'step9') {
            $request->session()->put([
                'formData.conclusion' => $request->conclusion
            ]);
        }

        if ($param[4] == 'step10') {
            $request->session()->put([
                'formData.offshore' => $request->offshore,
                'formData.reason' => $request->reason,
                'formData.currentSituation' => $request->currentSituation,
                'formData.powerstructures' => $request->powerstructures
            ]);
        }

        if ($param[4] == 'final') {
            $request->session()->put([
                'formData.agreement' => $request->agreement
            ]);

            // create image
            $captcha = App::make('Libs\\Captcha\\Captcha');
            $fourRandomDigit = mt_rand(1000,9999);
            $captchaImage = $captcha->dumpCaptcha($fourRandomDigit);

            // store the new generated code to db
            $userCode = new UsersUniquecodes;
            $userCode->code = "#".$fourRandomDigit."ps";
            $userCode->email = $request->session()->get('formData')['email'];
            $userCode->is_expired = '1';
            $userCode->save();

            Mail::to($request->session()->get('formData')['email'])
            ->send(new ContactFormData($request->session()->get('formData'), $captchaImage));
        }
        
        return $this->getSessionVars($request);
    }

    public function checkCode(Request $request) {
        $code = $request->code;
        // check code at uniqueCodes
        $uniqueCodes = UsersUniquecodes::where('code', '=', $code)->where('is_expired', '=', '1')->count();
        $data = [];
        if($uniqueCodes>0)
        {
            $data['status'] = true;
            return response()->json($data);
        } else {
            $data['status'] = false;
            return response()->json($data);
        }
    }

    public function updateCode() {
        $fourRandomDigit = mt_rand(1000,9999);
        // store the new generated code to db
        $userCode = UsersUniquecodes::find(1);
        $userCode->code = "#".$fourRandomDigit."ps";
        $userCode->save();

        return redirect(url('contact-form/final'));
    }
}
