<?php

namespace App\Http\Controllers\Auth;

use App\Models\Biodata;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Laracasts\Flash\Flash;
use Mockery\Exception;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'nik' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        try{
            DB::beginTransaction();
            $user= User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);

            //Proses pengambilan data by NIK
            $http = new \GuzzleHttp\Client;

            $response = $http->post('https://api-smartcity-samarinda.cf/api/login', [
                'form_params' => [
                    'email' => 'eko.ilkom@gmail.com',
                    'password' => 'ghTyl237Px',
                ],
                'verify' => false,
            ]);

            $array_response=json_decode((string) $response->getBody(), true);

            if($array_response['sukses']){
                $response = $http->get('https://api-smartcity-samarinda.cf/api/penduduk/by-nik/?NIK='.$data['nik'], [
                    'headers' => [
                        'Authorization' => 'Bearer '.$array_response['token'],
                        'Accept'     => 'application/json'
                    ],
                    'verify' => false,
                ]);

                $array_response=json_decode((string) $response->getBody(), true);

                if($array_response['sukses']){
                    Biodata::create([
                        'user_id'=>$user->id,
                        'nik'=>$array_response['data_penduduk']['NIK'],
                        'jenjang_pendidikan_id',
                        'tempat_lahir'=>$array_response['data_penduduk']['Tempat_Lahir'],
                        'tanggal_lahir'=>Carbon::createFromFormat('d-m-Y',$array_response['data_penduduk']['Tanggal_Lahir']),
                        'jenis_kelamin'=>strtolower($array_response['data_penduduk']['Jenis_Kelamin']),
                    ]);
                }else{
                    Biodata::create([
                        'user_id'=>$user->id,
                        'nik'=>$array_response['data_penduduk']['NIK']
                    ]);
                }
            }
            DB::commit();
            return $user;
        }catch (Exception $e){
            DB::rollback();
            Flash::error('Gagal Registrasi. Masalah '.$e->getMessage());
            return redirect(route('login'));
        }


    }
}
