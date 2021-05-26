<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\MailCV;
use App\Jobs\MailCvJob;
use Mail;
use PDF;
use Response;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio.index');
    }

    public function mailCV(Request $request)
    {
        $res = ['status' => 'Failed'];

        if($request->ajax()){

            $request->validate([
                'email' => 'required|email'
            ]);

            // mail logic here

            // // cv pdf view
            // $image = public_path('img/profile/avatar7.png');
            // $imageData = base64_encode(file_get_contents($image));
            // $profile = 'data:'.mime_content_type($image).';base64,'.$imageData;
            // $context = ['profile' => $profile];
            // $pdf = PDF::loadView('portfolio.pdf.cv', $context);
            
            // Job Run
            MailCvJob::dispatch($request->email)->onConnection('mail');

            // Mail::to($request->email)->send(new MailCV($pdf));

            $res['status'] = 'Success';
            $res['mail'] = $request->email;
        }
        return $res;
        // // Mail::to($request->mail)->send(new MailCV());
        // return redirect(route('personal:portfolio.index'));
    }

    public function generateCvPdf(Request $request)
    {
        // A few settings
        $image = public_path('img/profile/avatar7.png');

        // Read image path, convert to base64 encoding
        $imageData = base64_encode(file_get_contents($image));

        // Format the image SRC:  data:{mime};base64,{data};
        $profile = 'data:'.mime_content_type($image).';base64,'.$imageData;

        $context = [
            'profile' => $profile
        ];

        $pdf = PDF::loadView('portfolio.pdf.cv', $context);
        return $pdf->stream('cv.pdf');
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
