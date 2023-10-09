<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DeskreeClient
{
    protected $client;

    protected $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->baseUrl = 'https://' . env('DESKREE_CLIENT_ID') . '.api.deskree.com/api/v1/';
    }

    public function getAccessToken()
    {
        $response = $this->client->post(
            $this->baseUrl . 'oauth/token', // Уточните правильный эндпоинт
            [
                'form_params' => [
                    'grant_type' => 'client_credentials',
                    'client_id' => env('DESKREE_CLIENT_ID'),
                    'client_secret' => env('DESKREE_CLIENT_SECRET'),
                ],
            ]
        );

        if ($response->getStatusCode() === 200) {
            $data = json_decode($response->getBody(), true);
            return $data['access_token'];
        } else {
            dd($response->getStatusCode());
            return null;
        }
    }

//    public function signInUser()
//    {
//        $response = $this->client->post($this->baseUrl . 'rest/collections/shops', [
//            'headers' => [
//                'Content-Type' => 'application/json',
//                'deskree-admin' => env('DESKREE_CLIENT_SECRET'),
//            ],
//        ]);
//        dd($response->getStatusCode());
//        return $response->getStatusCode();
//    }


    public function getUsers()
    {

        $response = $this->client->get(
            $this->baseUrl .'rest/collections/users'
        );

        $data = json_decode($response->getBody(), true);

        return $data;
    }

    public function createUser($userData)
    {
        // Создайте массив с данными пользователя, включая email и пароль
        $userCredentials = [
            'email' => 'foxcreatog@gmail.com',
            'password' => 'Aspirine1210',
        ];

        // Объедините учетные данные и дополнительные данные пользователя
        $combinedData = array_merge($userCredentials, $userData);

        // Отправьте POST-запрос для создания пользователя
        $response = $this->client->post(
            $this->baseUrl . 'rest/collections/users',
            [
                'json' => $combinedData,
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]
        );

        return $response->getStatusCode();
    }



    public function getShops($params = null)
    {
        $response = $this->client->get(
            $this->baseUrl .'rest/collections/shops',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'deskree-admin' => 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJkZXNrcmVlX2lkIjoicGF5YmFja3NhZ2UiLCJnY3BfaWQiOiJkZXNrcmVlLThmMTZjN2E1LTU0MmEtNGQxOS05Iiwia2V5X3ZlcnNpb24iOiIyIn0.nN29jR7ORzAQOdMh+a+ypTcgoJ6mmyRrIUtj9vxf//IuQNmh1j7jflFoFKuSOKkkyxoCVPjcjbQjsYgAIFT3v6yH5GHT+Fy4AUFV1f4kiVKlF7QdkD7FntUaBpxr0gG4Ycv2HqSx/x9hZZJ2u0cs/n/ne2ICsdQrH7N8sGd6Cm8bFPPGpAhxdxyjPmZ3W0ljJpKCQUIVc+f4iWz0LgZgepU4LjWQOZ38pH9Ta3NvZLzrRN8H4G5KthVwjoOYfsiArN5QdpzakNKbK+3DI1izU9ZeydQFUZj3Dj/mNkS9OfVEfS6QLpQATG2AKF1dyst48YCpIsgTCDqlIrbsTgLxsQ==',
                    ],
                'params' => [
                    'where' => json_encode([
                        [
                            'attribute' => 'userUid',
                            'operator' => '=',
                            'value' => 't6Sx369yKDkpAcdLzOJL',
                        ],
                    ]),
                ],
            ],
        );
        $shopsContent = json_decode($response->getBody()->getContents());
        return $shopsContent;
    }

//    public function getShops()
//    {
//        // URL-адрес для GET-запроса
//        $url = $this->baseUrl . 'rest/collections/shops';
//
//        // Заголовки запроса
//        $headers = [
//            'Content-Type: application/json',
//            'deskree-admin: ' . 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJkZXNrcmVlX2lkIjoicGF5YmFja3NhZ2UiLCJnY3BfaWQiOiJkZXNrcmVlLThmMTZjN2E1LTU0MmEtNGQxOS05Iiwia2V5X3ZlcnNpb24iOiIyIn0.nN29jR7ORzAQOdMh+a+ypTcgoJ6mmyRrIUtj9vxf//IuQNmh1j7jflFoFKuSOKkkyxoCVPjcjbQjsYgAIFT3v6yH5GHT+Fy4AUFV1f4kiVKlF7QdkD7FntUaBpxr0gG4Ycv2HqSx/x9hZZJ2u0cs/n/ne2ICsdQrH7N8sGd6Cm8bFPPGpAhxdxyjPmZ3W0ljJpKCQUIVc+f4iWz0LgZgepU4LjWQOZ38pH9Ta3NvZLzrRN8H4G5KthVwjoOYfsiArN5QdpzakNKbK+3DI1izU9ZeydQFUZj3Dj/mNkS9OfVEfS6QLpQATG2AKF1dyst48YCpIsgTCDqlIrbsTgLxsQ==', // Замените на ваш токен
//        ];
//
//        // Создаем контекст для запроса
//        $context = stream_context_create([
//            'http' => [
//                'header' => implode("\r\n", $headers),
//                'method' => 'GET',
//            ],
//        ]);
//
//        // Выполняем GET-запрос
//        $response = file_get_contents($url, false, $context);
//
//        // Проверяем, удалось ли выполнить запрос
//        if ($response === false) {
//            // Обработка ошибки
//            return 'Ошибка выполнения запроса.';
//        }
//
//        // Возвращаем ответ
//        return $response;
//    }


}
