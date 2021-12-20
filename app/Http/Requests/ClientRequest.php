<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'Name'=>'required|min:2|max:40',
          'Surname'=>'required|min:2|max:40',
          'MiddleName'=>'required|min:2|max:40',
          'PhoneNumber'=>'required|min:11|max:11',
          'Email'=>'required|email',
          'City'=>'required',
          'Street'=>'required',
          'HouseNumber'=>'required',
          'Flat'=>'required',
          'NumberRooms'=>'required',
          'NumberTenats'=>'required',
          'Login'=>'required'
        ];
    }
    
    public function messages(){
      return[
        'Name.required' => 'Поле имя является обязательным',
        'Surname.required' => 'Поле фамилия является обязательным',
        'MiddleName.required' => 'Поле отчество является обязательным',
        'PhoneNumber.required' => 'Поле телефон обязательно',
        'Email.required' => 'Поле  email обязательно',
        'City.required' => 'Поле город является обязательным',
        'Street.required' => 'Поле улица является обязательным',
        'HouseNumber.required' => 'Поле номер дома является обязательным',
        'Flat.required' => 'Поле номер квартиры является обязательным',
        'NumberRooms.required' => 'Поле число комнат является обязательным',
        'NumberTenats.required' => 'Поле число жильцов является обязательным',
        'Login.required' => 'Поле логин является обязательным'
      ];
    }
}
