<?php

namespace App\Http\Controllers;

use App\Models\File;
use Exception;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class offredemploiController extends Controller
{
    /** Carriere --- Offre d'emploi */
    public function offreDemploi(){
        return view('offredemploi');
    }

    /** Carrierre --- candidature spontane */
    public function candidaturespontane(){
        return view('candidaturespontane');
    }

    public function candidaturespontane2(){
        return view('candidaturespantane2');
    }

    /** Offer job detail */
    public function detail_offredemploi(){
        return view('detail_offredemploi');
    }

    /** Upload CV */
    public function sendJobOffer(Request $request){
        
        try{
            // Validate request data
            $request->validate([
                'firstname' => 'required|string',
                'secondname' => 'required|string',
                'country' => 'required|string',
                'situation' => 'required|string',
                'phone' => 'required|string',
                'email' => 'required|email',
                'cvfile' => 'nullable|file'
            ]);
            /** Get fields value */
            $firstname = $request->get('firstname');
            $secondname = $request->get('secondname');
            $country = $request->get('country');
            $situation = $request->get('situation');
            $phone = $request->get('phone');
            $email = $request->get('email');
            $file = $request->file('cvfile');
            
            /** See if he is post his/her CV before */
            $ifpost = DB::table('job_offer')->where('email', $email)->count();
            if($ifpost < 1){

            /** Get file name */
            $filename = time().'_'.$file->getClientOriginalName();

            /** Get contact list file and make it in storage **/
            $file_content = file_get_contents($file);
            //Storage::disk('local')->put( $filename , $file_content);
            Storage::disk('local')->put( $filename , $file_content);

            /** Get the file path */
            $localDiskPath = Storage::disk('local')->path('' . $filename);
            
            DB::table('job_offer')->insert([
                'firstname' => $firstname,
                'secondname' => $secondname,
                'wilaya' => $country,
                'situation' => $situation,
                'phone' => $phone,
                'email' => $email,
                'path' => $localDiskPath,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            // Return a response
            return response()->json([
                'success' => true,
                'message' => 'Data has been submitted.'
            ]);

            }
            // Return a response
            return response()->json([
                'success' => true,
                'message' => 'You are post your CV before.'
            ]);
            
            } catch (\Exception $e) {
                // Return a response
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()+'.'
            ]);
            }
            
    }

    /** Upload CV */
    public function sendtoanyjoboffer(Request $request){
        
        try{
            // Validate request data
            $request->validate([
                'postsouhaiter' => 'required|string',
                'disponibilte' => 'required|date',
                'firstname' => 'required|string',
                'secondname' => 'required|string',
                'country' => 'required|string',
                'situation' => 'required|string',
                'phone' => 'required|string',
                'email' => 'required|email',
                'cvfile' => 'nullable|file'
            ]);
            /** Get fields value */
            $postsouhaiter = $request->get('postsouhaiter');
            $disponibilte = $request->get('disponibilte');
            $firstname = $request->get('firstname');
            $secondname = $request->get('secondname');
            $country = $request->get('country');
            $situation = $request->get('situation');
            $phone = $request->get('phone');
            $email = $request->get('email');
            $file = $request->file('cvfile');
            $lettreMtvfile = $request->file('lettreMtvfile');
            
            /** See if he is post his/her CV before */
            $ifpost = DB::table('anyjoboffer')->where('email', $email)->count();
            if($ifpost < 1){

            /** Get file name */
            $filename = time().'_'.$file->getClientOriginalName();
            $lettreMtvfile_name = time().'_'.$lettreMtvfile->getClientOriginalName();

            /** Get contact list file and make it in storage **/
            $file_content = file_get_contents($file);
            $lettreMtvfile_content = file_get_contents($lettreMtvfile);

            //Storage::disk('local')->put( $filename , $file_content);
            Storage::disk('local')->put( $filename , $file_content);
            Storage::disk('local')->put( $lettreMtvfile_name , $lettreMtvfile_content);

            /** Get the file path */
            $localDiskPath = Storage::disk('local')->path('' . $filename);
            $lettreMtvfile_localDiskPath = Storage::disk('local')->path('' . $lettreMtvfile_name);
            
            DB::table('anyjoboffer')->insert([
                'postsouhaiter' => $postsouhaiter,
                'disponibilte' => $disponibilte,
                'firstname' => $firstname,
                'secondname' => $secondname,
                'wilaya' => $country,
                'situation' => $situation,
                'phone' => $phone,
                'email' => $email,
                'path' => $localDiskPath,
                'lettreMtvfile' => $lettreMtvfile_localDiskPath,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            // Return a response
            return response()->json([
                'success' => true,
                'message' => 'Data has been submitted.'
            ]);

            }
            // Return a response
            return response()->json([
                'success' => true,
                'message' => 'You are post your CV and Motivation letter before.'
            ]);
            
            } catch (\Exception $e) {
                // Return a response
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()+'.'
            ]);
            }
            
    }


}
