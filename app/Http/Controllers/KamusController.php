<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class KamusController extends BaseController
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		$this->page = 'Kamus Bahasa Indonesia - Jawa';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Log::channel('kamusjawaindo')->info('Halaman '.$this->page);

        if($request->ajax())
        {
            $search = $request->search;

            $data = [];
            $count = 0;
            $page = $request->get('start', 0);  
            $perpage = $request->get('length',50);

            try {
                $kamus =  DB::table('kamusjawaindo')
                            ->select('kamusjawaindo.*')
                            ->where('kamusjawaindo.dlt', DB::raw("'0'"))
                            ->where(function($query) use ($search) {
                                if (!is_null($search) && $search != '') {
                                    $query->where(DB::raw('kamusjawaindo.indonesia'), 'ilike', '%'.$search.'%');
                                    $query->orWhere(DB::raw('kamusjawaindo.jawa'), 'ilike', '%'.$search.'%');
                                }
                            })
                            ->orderBy('kamusjawaindo.indonesia');

                $count = $kamus->count();
                $data = $kamus->skip($page)->take($perpage)->get();

                return $this->sendResponse([
                    'data' => $data,
                    'count' => $count,
                ], 'Data kamus retrieved succesfully.');  
            } catch (QueryException $e) {
                return $this->sendError('SQL Error', $this->getQueryError($e));
            }
            catch (Exception $e) {
                return $this->sendError('Error', $e->getMessage());
            }
        }

        return view(
            'kamus.index', 
            [
                'page' => $this->page, 
            ]
        );


    }

    public function terjemahan_jawa(Request $request) {
        $data = [];
        $count = 0;

        $page = $request->get('start', 0);  
        $perpage = $request->get('length',10);

        try {
            $kamus =  DB::table('kamusjawaindo')
                        ->select('kamusjawaindo.jawa as terjemahan')
                        ->where('kamusjawaindo.dlt', DB::raw("'0'"))
                        ->where(DB::raw('LOWER(kamusjawaindo.indonesia)'), strtolower($request->word_input));

            $data = $kamus->first();
            
            if ($data == null) {
                $kamus =  DB::table('kamusjawaindo')
                        ->select('kamusjawaindo.indonesia as indonesia', 'kamusjawaindo.jawa as jawa')
                        ->where('kamusjawaindo.dlt', DB::raw("'0'"))
                        ->where(DB::raw('LOWER(kamusjawaindo.indonesia)'), 'ilike', '%'.strtolower($request->word_input).'%');

                $data = $kamus->skip($page)->take($perpage)->get();

                return $this->sendResponse([
                    'isExist' => false,
                    'data' => $data,
                    'count' => $count,
                ], 'Data kamus retrieved succesfully.');
                exit;
            }
            // dd($data);
            $count = $kamus->count();
                        
            return $this->sendResponse([
                'isExist' => true,
                'data' => $data,
                'count' => $count,
            ], 'Data kamus retrieved succesfully.');  
        } catch (QueryException $e) {
            return $this->sendError('SQL Error', $this->getQueryError($e));
        }
        catch (Exception $e) {
            return $this->sendError('Error', $e->getMessage());
        }
    }

    public function terjemahan_indonesia(Request $request) {
        $data = [];
        $count = 0;

        $page = $request->get('start', 0);  
        $perpage = $request->get('length',10);

        try {
            $kamus =  DB::table('kamusjawaindo')
                        ->select('kamusjawaindo.indonesia as terjemahan')
                        ->where('kamusjawaindo.dlt', DB::raw("'0'"))
                        ->where(DB::raw('LOWER(kamusjawaindo.jawa)'), strtolower($request->word_input));

            $data = $kamus->first();

            if($data == null) {
                $kamus =  DB::table('kamusjawaindo')
                        ->select('kamusjawaindo.indonesia as indonesia', 'kamusjawaindo.jawa as jawa')
                        ->where('kamusjawaindo.dlt', DB::raw("'0'"))
                        ->where(DB::raw('LOWER(kamusjawaindo.jawa)'), 'ilike', '%'.strtolower($request->word_input.'%'));

                $data = $kamus->skip($page)->take($perpage)->get();

                return $this->sendResponse([
                    'isExist' => false,
                    'data' => $data,
                    'count' => $count,
                ], 'Data kamus retrieved succesfully.');
                exit;
            }
            
            $count = $kamus->count();

            return $this->sendResponse([
                'isExist' => true,
                'data' => $data,
                'count' => $count,
            ], 'Data kamus retrieved succesfully.');  
        } catch (QueryException $e) {
            return $this->sendError('SQL Error', $this->getQueryError($e));
        }
        catch (Exception $e) {
            return $this->sendError('Error', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
