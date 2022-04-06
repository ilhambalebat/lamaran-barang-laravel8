<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class PermintaanTambahRequest extends FormRequest
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
            'peminta' => 'required|exists:pemintas,id',
            'tanggal_permintaan' => 'required|date',
            'barang.*' => 'required|exists:barangs,id',
            'kuantiti.*' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'peminta.required' => 'Peminta tidak boleh kosong',
            'peminta.exists' => 'Peminta tidak valid',
            'tanggal_permintaan.required' => 'Tanggal Permintaan tidak boleh kosong',
            'tanggal_permintaan.date' => 'Tanggal Permintaan tidak valid',
            'barang.required' => 'Barang tidak boleh kosong',
            'barang.exists' => 'Barang tidak valid',
            'kuantiti.required' => 'Kuantiti tidak boleh kosong',
            'kuantiti.integer' => 'Kuantiti tidak valid'
        ];
    }

    public function failedValidation(Validator $validator)
    {        
        // $response = response()->json([
        //             'success' => false,
        //             'message' => 'Ops! Some errors occurred',
        //             'errors' => $validator->errors()
        //         ]);            
        $response = redirect()
                ->back()
                ->with('danger', 'Oops! terdapat inputan tidak valid')
                ->withErrors($validator)
                ->withInput();
        throw (new ValidationException($validator, $response))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
}
