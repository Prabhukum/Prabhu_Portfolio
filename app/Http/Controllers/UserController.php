<?php

namespace App\Http\Controllers;

use DB;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {

        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $projectDetails = $request->input('project_details');

        // mail configuration
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = env('MAIL_HOST');
        $mail->SMTPAuth = true;
        $mail->Username = env('MAIL_USERNAME');
        $mail->Password = env('MAIL_PASSWORD');
        $mail->SMTPSecure = env('MAIL_ENCRYPTION');
        $mail->Port = env('MAIL_PORT');
        $mail->setFrom($email, $name);


        DB::table('contact')->insert([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'project_details' => $projectDetails,
        ]);

        return redirect()->back()->with('success', 'Will Reach You Soon!');
    }
}
