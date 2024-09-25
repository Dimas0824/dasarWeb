<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Wisata",
        "subMenu" => [
            [
                "nama" => "Pantai"
            ],
            [
                "nama" => "Gunung"
            ]
        ]
    ],
    [
        "nama" => "Hiburan"
    ],
    [
        "nama" => "Kuliner"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat(array $menu){
    echo"<ul>";
    foreach($menu as $$key => $item){
        echo"<li>{$item['nama']}</li>";
    }
    echo"</ul>";
}

tampilkanMenuBertingkat($menu);

?>
