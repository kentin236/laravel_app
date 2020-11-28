<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;

class APIController extends Controller
{
    public function get()
    {
        $date = new \DateTime();
        $date = $date->format('d:m:Y H:i:s');
        $data = [
            'date' => $date
        ];
        return response()->json($data, Response::HTTP_OK);
    }

    public function post(Request $request)
    {
        $json = $request->request->all();
        $date = new \DateTime();
        $date = $date->format('d:m:Y H:i:s');
        $data = [
            'date' => $date
        ];
        return response()->json($data, Response::HTTP_OK);
    }

    public function put()
    {
        $date = new \DateTime();
        $date = $date->format('d:m:Y H:i:s');
        $data = [
            'date' => $date
        ];
        return response()->json($data, Response::HTTP_OK);
    }

    public function patch()
    {
        $date = new \DateTime();
        $date = $date->format('d:m:Y H:i:s');
        $data = [
            'date' => $date
        ];
        return response()->json($data, Response::HTTP_OK);
    }

    public function delete()
    {
        $date = new \DateTime();
        $date = $date->format('d:m:Y H:i:s');
        $data = [
            'date' => $date
        ];
        return response()->json($data, Response::HTTP_OK);
    }
}
