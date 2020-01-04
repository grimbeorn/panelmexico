<?php
namespace App\Rules;
use Illuminate\Contracts\Validation\Rule;
use GuzzleHttp\Client;

class ValidRecaptcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Validate ReCaptcha
        $client = new Client([
            'base_uri' => 'https://google.com/recaptcha/api/'
        ]);
        $response = $client->post('siteverify', [
            'query' => [
                'secret' => config('google_config.google_recaptcha_secret'),
                'response' => $value
            ]
        ]);

        \Log::debug('Response' . $response->getBody());
        \Log::debug('JSON Response' . json_decode($response->getBody())->success);
        return json_decode($response->getBody())->success;
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'ReCaptcha verification failed.';
    }
}