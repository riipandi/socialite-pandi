# socialite-pandi
Pandi U.ID OAuth2 Provider for Laravel Socialite

## install

```
composer require riipandi/socialite-pandi
```


## register

```
protected $listen = [
    SocialiteProviders\Manager\SocialiteWasCalled::class => [
        'Riipandi\SocialitePandi\PandiExtendSocialite@handle'
    ],
];
```

## configure

```
'pandi' => [
    'client_id' => env('PANDI_KEY'),
    'client_secret' => env('PANDI_SECRET'),
    'redirect' => env('PANDI_REDIRECT_URI'),
]
```

## start building

```
return Socialite::with('pandi')->redirect();
```
