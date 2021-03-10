<?php

namespace App\Http\Controllers;

use App\Like;
use App\Post;
use App\User;
use App\Dislike;
use App\Dynamic;
use GuzzleHttp\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    public function getdata()
    {
        $client = new \GuzzleHttp\Client();
        $response  = $client->request('POST', 'https://ikoniconnext.com/api/login', [
            'form_params' => [
                'email' => 'sub@djikon.com',
                'password' => 'sub@djikon',
                'role' => '1',
            ]
        ]);
        $data = $response->getBody();
        $data = json_decode($data, true);
        $token = $data['success'];





        $response = Http::withHeaders([
            'Accept' => 'application/json'
        ])->withToken($token)->get('https://ikoniconnext.com/api/artist_blogs');
        $datas = $response->getBody();
        $datas = json_decode($datas);
        dd($datas);

        // $clint = new Client([
        //     'header' => ['content-type' => 'application/json', 'Accept' => 'application/json', 'authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYmQwMjdiYjI1YjlhYmRkNDc0MmM2ZTEzODc0NzIxODc2NTEzNTI0ZDFmNGYxOWQ4ZmY4ZDE3Y2U0YzgxZDcyMDFiNDAwMjI4Y2M5ZTEyMGEiLCJpYXQiOjE2MTI5NDk4MzAsIm5iZiI6MTYxMjk0OTgzMCwiZXhwIjoxNjQ0NDg1ODMwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.FHMj09Kz08nTt-Fyw36iWJzpRPgxaOSZXN_wPUh_5yxbBNjS3l5vS5Lza6BlK1MVRXyCZUXFOE73uHIdkQCEiPAvFj0LdUNeyzuSgL22f3OD2JJ2LsxmJl5c8xXr_LcI8AiJwKhERRD7VY9IasRDl0nsk-Bl-Bx0aL0f-GPjuCX4Bz2N4rTBt-kj6UO20NlLpbeYrfAB0kzaGC7YDlibPU6EHoqz9IQvF12Uda6GyxAk4kiBmU25VG0D80Nol9RHGKM2gkF__LBP-O6Tq0EfjaaWVHsumss5VOPY0PsQuL5cyBVN5rcOpvVFnvJoaL_l2iJRHht8jFlVBbAec0cPuQNrDdumFvdxiEwRkDp5iacpvL-8ntQAbxjIKJrnKL55iE5ICMPU5xox19ui716UPfNAddALLX9h8q2aCGGVrYoI9ojrTeWACu8xPWnw-kS6LfTC7GvoyzXNJqHG7oIlPiXn_9YL4k6tkMyBTg1i6vqVPWanpMmC-KFaUmWJl3eWSOz3KhTW4zOHG4uNFAAmxPa0BqaU7lARMwM1QeEECq1GADMwALhrlXRXRqNJcYgT9DNNu41G2o8Ydh86h5aGm9UUsAAO9rID5329ZtPP6-bcV_iWde2uahttB8leBu3bsCiC7qc3kbUHsUddpWEQ4IeDr9pxEd9VxfTEA7ApRXY'],
        // ]);

        // $response = $clint->request('GET', 'https://ikoniconnext.com/api/artist_blogs');

        // $data = $response->getBody();
        // dd($data);
    }
    // public function post()
    // {
    //     $post = Post::all();

    //     return view('post', compact('post'));
    // }


    // public function insert(Request $request)
    // {


    //     if ($request->ajax()) {
    //         $rules = array(

    //             'rm_code.*'  => 'required',
    //             'raw_material.*'  => 'required',
    //             'compound_ingredients.*'  => 'required',
    //             'function.*'  => 'required',
    //             'active_ingredient.*'  => 'required',
    //             'claim_tablet.*'  => 'required',
    //             'input_tablet.*'  => 'required',
    //             'nrv.*'  => 'required',

    //             'excipients_rm_code.*'  => 'required',
    //             'excipients_raw_material.*'  => 'required',
    //             'excipients_compound_ingredients.*'  => 'required',
    //             'excipients_function.*'  => 'required',
    //             'excipients_active_ingredient.*'  => 'required',
    //             'excipients_claim_tablet.*'  => 'required',
    //             'excipients_input_tablet.*'  => 'required',
    //             'excipients_nrv.*'  => 'required',

    //         );
    //         $error = Validator::make($request->all(), $rules);
    //         if ($error->fails()) {
    //             return response()->json([
    //                 'error'  => $error->errors()->all()
    //             ]);
    //         }

    //         $product = new Dynamic();
    //         $rm_code = $request->rm_code;
    //         $raw_material = $request->raw_material;
    //         $compound_ingredients = $request->compound_ingredients;
    //         $function =  $request->function;
    //         $active_ingredient = $request->active_ingredient;
    //         $claim_tablet =  $request->claim_tablet;
    //         $input_tablet =  $request->input_tablet;
    //         $nrv = $request->nrv;
    //         $data = array_combine($rm_code, $raw_material, $compound_ingredients, $function, $active_ingredient, $claim_tablet, $input_tablet, $nrv);
    //         $product->row = implode(',', $data);

    //         // $product->excipients_rm_code = implode(',', $request->excipients_rm_code);
    //         // $product->excipients_raw_material = implode(',', $request->excipients_raw_material);
    //         // $product->excipients_compound_ingredients = implode(',', $request->excipients_compound_ingredients);
    //         // $product->excipients_function = implode(',', $request->excipients_function);
    //         // $product->excipients_active_ingredient = implode(',', $request->excipients_active_ingredient);
    //         // $product->excipients_claim_tablet = implode(',', $request->excipients_claim_tablet);
    //         // $product->excipients_input_tablet = implode(',', $request->excipients_input_tablet);
    //         // $product->excipients_nrv = implode(',', $request->excipients_nrv);


    //         $product->customer =  $request->customer;
    //         $product->size =  $request->size;
    //         $product->product_name =  $request->product_name;
    //         $product->type =  $request->type;
    //         $product->item_code =  $request->item_code;
    //         $product->total_weight =  $request->total_weight;
    //         $product->revision_number =  $request->revision_number;
    //         $product->tablets_saving =  $request->tablets_saving;
    //         $product->issue_date =  $request->issue_date;
    //         $product->expiry =  $request->expiry;
    //         $product->customer_product_code =  $request->customer_product_code;
    //         $product->pack_size =  $request->pack_size;

    //         $product->cp =  $request->cp;
    //         $product->label =  $request->label;
    //         $product->cl =  $request->cl;
    //         $product->other =  $request->other;
    //         $product->storage =  $request->storage;
    //         $product->irradiation =  $request->irradiation;

    //         $product->gm_status =  $request->gm_status;
    //         $product->allergens =  $request->allergens;
    //         $product->tse_bse_status =  $request->tse_bse_status;
    //         $product->suitable_vegetarians =  $request->suitable_vegetarians;
    //         $product->suitable_vegans =  $request->suitable_vegans;
    //         $product->yes_no =  $request->yes_no;
    //         $product->amendment =  $request->amendment;
    //         $product->amendment_date =  $request->amendment_date;
    //         $product->approved_by =  $request->approved_by;
    //         $product->date =  $request->date;
    //         $product->daapproved_by_customerte =  $request->approved_by_customer;
    //         $product->customer_date =  $request->customer_date;




    //         $product->save();
    //         return response()->json([
    //             'success'  => 'Data Added successfully.'
    //         ]);
    //     }
    // }


    // public function view($post_id)
    // {
    //     $post = Post::all();
    //     $likepost = Post::find($post_id);
    //     $likecount = Like::where(['post_id' => $likepost->id])->count();
    //     $dislikecount = Dislike::where(['post_id' => $likepost->id])->count();
    //     return view('viewpost', ['post' => $post, 'likecount' => $likecount, 'dislikecount' => $dislikecount]);
    // }


    // public function show()
    // {
    //     $product = Dynamic::find(2);
    //     // dd($product);
    //     return view('test', compact('product'));
    // }
}
