<?php

namespace App\Http\Controllers\Api\V2\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V2\Auth\LoginRequest;
use LaravelJsonApi\Core\Document\Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \App\Http\Requests\Api\V2\Auth\LoginRequest $request
     *
     * @return \Symfony\Component\HttpFoundation\Response|\LaravelJsonApi\Core\Document\Error
     * @throws \Exception
     */

    // public function __invoke(LoginRequest $request): Response|Error
    // {
    //     $client = DB::table('oauth_clients')->where('password_client', 1)->first();

    //     $request = Request::create(config('app.url') . '/oauth/token', 'POST', [
    //         'grant_type'    => 'password',
    //         'client_id'     => $client->id,
    //         'client_secret' => $client->secret,
    //         'username'      => $request->email,
    //         'password'      => $request->password,
    //         'scope'         => '',
    //     ]);

    //     /** @var \Illuminate\Http\Response $response */
    //     $response = app()->handle($request);

    //     if ($response->getStatusCode() !== Response::HTTP_OK) {
    //         return Error::fromArray([
    //             'title'  => Response::$statusTexts[Response::HTTP_BAD_REQUEST],
    //             'detail' => $response->exception->getMessage(),
    //             'status' => Response::HTTP_BAD_REQUEST,
    //         ]);
    //     }

    //     return $response;
    // }
    public function __invoke(LoginRequest $request): Response
    {
        return "get out";
        // Validate the login credentials (email and password)
        $credentials = $request->only('email', 'password');

        // Check if the user exists in the database
        $user = User::where('email', $credentials['email'])->first();

        // If user doesn't exist or the password is incorrect, return an error response
        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return response()->json([
                'error'   => 'Invalid credentials.',
                'message' => 'The provided credentials are incorrect.',
            ], Response::HTTP_UNAUTHORIZED);
        }

        // Now that the user is validated, generate the OAuth token
        $client = DB::table('oauth_clients')->where('password_client', 1)->first();

        if (!$client) {
            return response()->json([
                'error' => 'OAuth client not found.',
            ], Response::HTTP_BAD_REQUEST);
        }

        // Prepare the request to obtain the OAuth token
        $tokenRequest = Request::create(config('app.url') . '/oauth/token', 'POST', [
            'grant_type'    => 'password',
            'client_id'     => $client->id,
            'client_secret' => $client->secret,
            'username'      => $request->email, // Use email as the username
            'password'      => $request->password,
            'scope'         => '', // Optional: add any necessary scopes
        ]);

        // Handle the token request
        $response = app()->handle($tokenRequest);

        // If the response is successful (HTTP_OK), return the OAuth token
        if ($response->getStatusCode() === Response::HTTP_OK) {
            $responseBody = json_decode($response->getContent(), true);

            return response()->json([
                'access_token' => $responseBody['access_token'],
                'token_type'   => $responseBody['token_type'],
                'expires_in'   => $responseBody['expires_in'],
            ], Response::HTTP_OK);
        }

        // Return error if the token request fails
        return response()->json([
            'error'   => 'Failed to generate token.',
            'message' => $response->exception->getMessage(),
        ], Response::HTTP_BAD_REQUEST);
    }
}
