<?php
$data = [
    [
        'foto' => 'https://media.pitchfork.com/photos/65771142a9bb8a8b8b679dc2/master/pass/Bad-Bunny-X-100pre.jpg',

        'nome_album' => 'X100PRE',

        'artista' => 'BAD BUNNY',

        'Anno' => '2018',

    ],

    [
        'foto' => 'https://i.pinimg.com/474x/18/21/0d/18210d6e340f34987827d3b6aa1e5518.jpg',

        'nome_album' => 'OASIS',

        'artista' => 'BAD BUNNY',

        'Anno' => '2019',

    ],

    [
        'foto' => 'https://i.scdn.co/image/ab67616d0000b273548f7ec52da7313de0c5e4a0',

        'nome_album' => 'YHLQMDLG',

        'artista' => 'BAD BUNNY',

        'Anno' => '2020',

    ],

    [
        'foto' => 'https://i.scdn.co/image/ab67616d0000b273005ee342f4eef2cc6e8436ab',

        'nome_album' => 'EL ULTIMO TOUR DEL MUNDO',

        'artista' => 'BAD BUNNY',

        'Anno' => '2020',

    ],

    [
        'foto' => 'https://i.scdn.co/image/ab67616d0000b27349d694203245f241a1bcaa72',

        'nome_album' => 'UN VERANO SIN TI',

        'artista' => 'BAD BUNNY',

        'Anno' => '2022',

    ],

    [
        'foto' => 'https://is1-ssl.mzstatic.com/image/thumb/Music116/v4/13/21/22/132122a1-2ef2-381b-94b6-7b9449dcaa4a/197190137897.jpg/1200x1200bf-60.jpg',

        'nome_album' => 'NADIE SABE LO QUE VA A PASAR MAÑANA',

        'artista' => 'BAD BUNNY',

        'Anno' => '2023',

    ],
];


header('Content-Type: application/json');

echo json_encode($data);
