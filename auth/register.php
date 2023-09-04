<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
include '../includes/conn.php';

function redirect($url)
{
    if (!headers_sent()) {
        header('Location: ' . $url);
        exit;
    } else {
        echo '<script type="text/javascript">';
        echo 'window.location.href="' . $url . '";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=' . $url . '" />';
        echo '</noscript>';
        exit;
    }
}

if (isset($_POST['signup'])) {
    $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['confirm-password'];
    $contact_info = '';
    $source = 'C0';
   
    //die(json_encode($_POST));

    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['email'] = $email;
    $_SESSION['contact_info'] = $contact_info;


    if ($password != $repassword) {
        $_SESSION['error'] = 'Passwords did not match';
        header('location: ' . $parent_url . '/v2/new#');
    } else {
        $conn = $pdo->open();

        //check whether email is related to other account
        $stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE email=:email");
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch();
        if ($row['numrows'] > 0) {
            $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email");
            $stmt->execute(['email' => $email]);
            $row = $stmt->fetch();

            if ($row['source'] == 'G0') {
                $_SESSION['error'] = 'User already registered with Google.';
                unset($_SESSION['access_token']);
                redirect($parent_url . '/v2/new');
            } elseif ($row['source'] == 'F0') {
                $_SESSION['error'] = 'User already registered with Facebook.';
                unset($_SESSION['access_token']);
                redirect($parent_url . '/v2/new');
            } elseif ($row['source'] == 'T0') {
                $_SESSION['error'] = 'User already registered with Twitter.';
                unset($_SESSION['access_token']);
                redirect($parent_url . '/v2/new');
            } else {
                $_SESSION['error'] = 'User already registered.';
                unset($_SESSION['access_token']);
                redirect($parent_url . '/v2/new');
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////
        else {
            $now = date('Y-m-d');
            $password = password_hash($password, PASSWORD_DEFAULT);

            //generate code
            $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $code = substr(str_shuffle($set), 0, 12);



            try {
                $userid = 0;
                //*
                $stmt = $conn->prepare("INSERT INTO users (source, email, contact_info, password, firstname, lastname, activate_code, created_on) VALUES (:source, :email, :contact_info, :password, :firstname, :lastname, :code, :now)");
                $stmt->execute(['source' => $source, 'email' => $email, 'contact_info' => $contact_info, 'password' => $password, 'firstname' => $firstname, 'lastname' => $lastname, 'code' => $code, 'now' => $now]);
                $userid = $conn->lastInsertId();
                //*/

                $message = '
                <!--begin::Email template-->
<style>
    html,
    body {
        padding: 0;
        margin: 0;
        font-family: Inter, Helvetica, "sans-serif";
    }

    a:hover {
        color: #009ef7;
    }
</style>
<div id="#kt_app_body_content"
    style="background-color:#F7F2EF; font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
    <div
        style="background-color:#ffffff; padding: 45px 0 34px 0; border-radius: 24px; margin:40px auto; max-width: 600px;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="auto"
            style="border-collapse:collapse">
            <tbody>
                <tr>
                    <td align="center" valign="center" style="text-align:center; padding-bottom: 10px">
                        <!--begin:Email content-->
                        <div style="text-align:center; margin:0 15px 34px 15px">
                            <!--begin:Logo-->
                            <div style="margin-bottom: 10px">
                                <a href="https://techkira.net/" rel="noopener" target="_blank">
                                    <img alt="Logo" src="https://techkira.net/assets/media/logos/logo-3.png"
                                        style="height: 100px" />
                                </a>
                            </div>
                            <!--end:Logo-->
                            <!--begin:Media-->
                            <div style="margin-bottom: 15px">
                                <img alt="Logo"
                                    src="https://techkira.net/mail_media/media/email/icon-positive-vote-1.png" />
                            </div>
                            <!--end:Media-->
                            <!--begin:Text-->
                            <div
                                style="font-size: 14px; font-weight: 500; margin-bottom: 27px; font-family:Arial,Helvetica,sans-serif;">
                                <p style="margin-bottom:9px; color:#181C32; font-size: 22px; font-weight:700">Hey ' .
                                    $firstname . ', Welcome to KCTS!</p>
                                <p style="margin-bottom:2px; color:#7E8299; line-height: 20px;">To start exploring, please activate your account by clicking the button below. This will grant you full access to our platform, including procurement updates, tender opportunities, and ongoing projects.
                                </p>
                            </div>
                            <!--end:Text-->
                            <!--begin:Action-->
                            <a href="https://techkira.net/auth/activate.php?code=' . $code . '&user=' . $userid . '"
                                target="_blank"
                                style="background-color:#4B9539; border-radius:6px;display:inline-block; padding:11px 19px; color: #FFFFFF; font-size: 14px; font-weight:500;">Activate
                                Account</a>
                            <!--begin:Action-->
                        </div>
                        <!--end:Email content-->
                    </td>
                </tr>
                <tr style="display: flex; justify-content: center; margin:0 60px 35px 60px">
                    <td align="start" valign="start" style="padding-bottom: 10px;">
                        <p style="color:#181C32; font-size: 18px; font-weight: 600; margin-bottom:13px">About Our Platform:</p>
                        <div style="line-height: 16px;color:#5E6278;font-size: 13px;font-weight: 500;padding-top:3px;margin: 10px;font-family:Arial,Helvetica,sans-serif;text-align: center !important;">KCTS platform is designed to empower you to actively engage with procurement processes and stay informed about ongoing projects within the county. Here is what you can look forward to:
                            </div>
                        <!--begin::Wrapper-->
                        <div style="background: #F9F9F9; border-radius: 12px; padding:35px 30px; line-height: 19px;">
                            <!--begin::Item-->
                            <div style="display:flex">
                                <!--begin::Media-->
                                <div
                                    style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:13px">
                                    <img alt="Logo"
                                        src="https://techkira.net/mail_media/media/email/icon-polygon.png" />
                                    <span
                                        style="position: absolute; color:#4B9539; font-size: 16px; font-weight: 600;">1</span>
                                </div>
                                <!--end::Media-->
                                <!--begin::Block-->
                                <div>
                                    <!--begin::Content-->
                                    <div>
                                        <!--begin::Title-->
                                        <a href="#"
                                            style="color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Stay Updated</a>
                                        <!--end::Title-->
                                        <!--begin::Desc-->
                                        <p
                                            style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">
                                            Access the most recent procurement notices, tender opportunities, and contract awards.</p>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed" style="margin:17px 0 15px 0"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Block-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div style="display:flex">
                                <!--begin::Media-->
                                <div
                                    style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:13px">
                                    <img alt="Logo"
                                        src="https://techkira.net/mail_media/media/email/icon-polygon.png" />
                                    <span
                                        style="position: absolute; color:#4B9539; font-size: 16px; font-weight: 600;">2</span>
                                </div>
                                <!--end::Media-->
                                <!--begin::Block-->
                                <div>
                                    <!--begin::Content-->
                                    <div>
                                        <!--begin::Title-->
                                        <a href="#"
                                            style="color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Project Insights</a>
                                        <!--end::Title-->
                                        <!--begin::Desc-->
                                        <p
                                            style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">
                                           Delve into the details of ongoing projects across various sectors. Monitor project timelines, 
                                           track progress, and provide valuable feedback.</p>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed" style="margin:17px 0 15px 0"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Block-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div style="display:flex">
                                <!--begin::Media-->
                                <div
                                    style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:13px">
                                    <img alt="Logo"
                                        src="https://techkira.net/mail_media/media/email/icon-polygon.png" />
                                    <span
                                        style="position: absolute; color:#4B9539; font-size: 16px; font-weight: 600;">3</span>
                                </div>
                                <!--end::Media-->
                                <!--begin::Block-->
                                <div>
                                    <!--begin::Content-->
                                    <div>
                                        <!--begin::Title-->
                                        <a href="#"
                                            style="color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Community Impact</a>
                                        <!--end::Title-->
                                        <!--begin::Desc-->
                                        <p
                                            style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">
                                            Your involvement directly influences the direction of KCTS development initiatives, making a tangible impact on the community.</p>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Block-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Wrapper-->
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="center"
                        style="font-size: 13px; text-align:center; padding: 0 10px 10px 10px; font-weight: 500; color: #A1A5B7; font-family:Arial,Helvetica,sans-serif">
                        <p style="color:#181C32; font-size: 16px; font-weight: 600; margin-bottom:9px">Its all about
                            customers!</p>
                            <p style="margin-bottom:2px; line-height: 20px;">We are excited to have you as an active participant in our platform, 
                            and we look forward to your contributions that will help shape the future of Kakamega County.</p>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="center" style="text-align:center; padding-bottom: 20px;">
                        <a href="#" style="margin-right:10px">
                            <img alt="Logo" src="https://techkira.net/mail_media/media/email/icon-facebook.png" />
                        </a>
                        <a href="#">
                            <img alt="Logo" src="https://techkira.net/mail_media/media/email/icon-twitter.png" />
                        </a>
                    </td>
                </tr>
                <tr>
                     <td align="center" valign="center" style="font-size: 13px;padding:0 15px;text-align:center;font-weight: 500;color: #A1A5B7;font-family:Arial,Helvetica,sans-serif;line-height: 20px;">
                        <p>Once again, welcome to KCTS&nbsp;
                         &amp; thank you for joining us on this journey towards a prosperous future!                       
                        </p>
                     </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
';
                //Load phpmailer


                $mail = new PHPMailer(true);
                try {
                    //Server settings

                    $mail->isSMTP();
                    $mail->Host = gethostbyname('mail.techkira.net');
                    $mail->SMTPAuth = true;
                    $mail->Username = 'mailer.kakamega@techkira.net';
                    $mail->Password = '9ATYY4s-SoxV';
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;

                    $mail->setFrom('mailer.kakamega@techkira.net');

                    //Recipients
                    $mail->addAddress($email);
                    $mail->addReplyTo('mailer.auto_system@techkira.net');

                    //Content
                    $mail->isHTML(true);
                    $mail->Subject = 'KCTS';
                    $mail->Body    = $message;

                    $mail->send();

                    unset($_SESSION['firstname']);
                    unset($_SESSION['lastname']);
                    unset($_SESSION['email']); {
                        $_SESSION['success'] = 'Account created. Check your email to activate.';
                        header('location: https://techkira.net/v2/new#');
                    }
                } catch (Exception $e) {
                    $_SESSION['error'] = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
                    header('location: https://techkira.net/v2/new#');
                }
            } catch (PDOException $e) {
                $_SESSION['error'] = $e->getMessage();
                header('location: register.php');
            }

            $pdo->close();
        }
    }
} else {
    $_SESSION['error'] = 'Complete filling the signup form first';
    header('location: https://techkira.net/v2/new#');
}
