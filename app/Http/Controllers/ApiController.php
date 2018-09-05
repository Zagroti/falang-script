<?php

namespace App\Http\Controllers;


class ApiController extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * @param string $data
     * @param int $status
     *
     * @return mixed
     */
    public function respond($data = [], $meta = [], $status = 200)
    {
        if (!$meta)
            return response()->json(['data' => $data], $status);
        return response()->json(['data' => $data, 'meta' => $meta], $status);
    }
}
