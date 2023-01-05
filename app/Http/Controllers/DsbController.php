<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Support\Facades\Hash;

use Exception;

class DsbController extends Controller
{
    public function list(Request $request)
    {
        try {
            $data = DB::select('SELECT * FROM code_test.pembayaran');
            $response = [
                'meta' => [
                    'code' => 201,
                    'message' => 'Success Add Data!'
                ],
                'data' => $data
            ];
            return response()->json($response);
        } catch (Exception $e) {
            return response()->json($e);
        }
    }

    public function create(Request $request)
    {
        try {
            $add = DB::table('pembayaran')->insert(
                [
                    'total_bonus' => $request->total_bonus,
                    'u_a' => $request->buruh_a,
                    'u_b' => $request->buruh_b,
                    'u_c' => $request->buruh_c,
                    'p_a' => $request->persen_a,
                    'p_b' => $request->persen_b,
                    'p_c' => $request->persen_c,
                    'created_at' => Carbon::now('Asia/Jakarta')->timestamp
                ]
            );

            $response = [
                'meta' => [
                    'code' => 201,
                    'message' => 'Success Add Data!'
                ]
            ];

            return response()->json($response);
        } catch (Exception $e) {
            return response()->json($e);
        }
    }

    public function detail(Request $request) 
    {
        try {
            $data = DB::select('SELECT * FROM code_test.pembayaran where id = ' . $request->id);
            $response = [
                'meta' => [
                    'code' => 201,
                    'message' => 'Success Add Data!'
                ],
                'data' => $data[0]
            ];
            return response()->json($response);
        } catch (Exception $e) {
            return response()->json($e);
        }
    }

    public function update(Request $request)
    {
        try {
            $update = DB::table('pembayaran')->where('id', $request->id)->update(
                [
                    'total_bonus' => $request->total_bonus,
                    'u_a' => $request->buruh_a,
                    'u_b' => $request->buruh_b,
                    'u_c' => $request->buruh_c,
                    'p_a' => $request->persen_a,
                    'p_b' => $request->persen_b,
                    'p_c' => $request->persen_c,
                    'updated_at' => Carbon::now('Asia/Jakarta')->timestamp
                ]
            );

            $response = [
                'meta' => [
                    'code' => 200,
                    'message' => 'Success Update Data!'
                ]
            ];

            return response()->json($response);
        } catch (Exception $e) {
            return response()->json($e);
        }
    }

    public function delete(Request $request) 
    {
        try {
            DB::table('pembayaran')->where('id', '=', $request->id)->delete();

            $response = [
                'meta' => [
                    'code' => 200,
                    'message' => 'Success Delete Data!'
                ]
            ];

            return response()->json($response);
        } catch (Exception $e) {
            return response()->json($e);
        }
    }

    public function login(Request $request) 
    {
        try {
            $data = DB::table('user')->where('username', $request->username)->get();
            if (count($data) <= 0) {
    
                return response()->json([
                    'meta' => [
                        'code' => 404,
                        'message' => 'User tidak ditemukan!'
                    ]
                ]);
            }

            $check = Hash::check($request->password, $data[0]->password);
            
            if ($check) {
                $response = [
                    'meta' => [
                        'code' => 200,
                        'message' => 'Success Get Data!'
                    ],
                    'data' => $data[0]
                ];
    
                return response()->json($response);
            } else {
                $response = [
                    'meta' => [
                        'code' => 400,
                        'message' => 'Password salah!'
                    ]
                ];
    
                return response()->json($response);
            }
            

            
        } catch (Exception $e) {
            return response()->json($e);
        }
    }
}
