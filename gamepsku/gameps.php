<?php
header("Content-Type: application/json; charset=UTF-8");

$games = [
    [
        "nama_game" => "God of War",
        "jenis_game" => "Petualangan",
        "deskripsi"  => "Game aksi-petualangan orang ketiga berlatar mitologi Nordik.",
        "deskripsi_detail" => "God of War adalah game aksi-petualangan orang ketiga yang mengisahkan Kratos, seorang dewa perang yang mencari penebusan di dunia mitologi Nordik. Pemain akan menjelajahi dunia semi-terbuka, memecahkan teka-teki, melawan monster raksasa, dan mengikuti alur cerita emosional tentang hubungan ayah dan anak. Pertarungan brutal, grafis memukau, dan cerita mendalam menjadikannya salah satu pengalaman terbaik di konsol modern.",
        "foto" => "covergame/001.jpg"
    ],
    [
        "nama_game" => "The Last of Us",
        "jenis_game" => "Action Survival",
        "deskripsi"  => "Game survival pasca-apokaliptik dengan cerita mendalam.",
        "deskripsi_detail" => "The Last of Us adalah game survival pasca-apokaliptik dengan narasi emosional tentang perjalanan Joel dan Ellie. Dunia dipenuhi makhluk terinfeksi dan manusia berbahaya, memaksa pemain untuk mengelola sumber daya, membuat senjata, dan memilih strategi bertahan hidup. Ceritanya menyentuh dan penuh keputusan moral yang memengaruhi pengalaman pemain.",
        "foto" => "covergame/002.jpg"
    ],
    [
        "nama_game" => "Uncharted 4",
        "jenis_game" => "Adventure",
        "deskripsi"  => "Game pencarian harta karun dengan aksi menegangkan.",
        "deskripsi_detail" => "Uncharted 4: A Thief's End mengikuti Nathan Drake dalam pencarian harta karun terakhirnya. Game ini memadukan aksi sinematik, pemecahan teka-teki, eksplorasi lokasi eksotis, dan cerita emosional tentang persahabatan dan pengkhianatan. Dengan grafis yang memukau, game ini menjadi penutup yang epik untuk seri Uncharted.",
        "foto" => "covergame/003.jpg"
    ],
    [
        "nama_game" => "Summer Sports Games",
        "jenis_game" => "Olahraga",
        "deskripsi"  => "Game olahraga musim panas yang berisi berbagai cabang olahraga.",
        "deskripsi_detail" => "Summer Sports Games menawarkan mini-game olahraga seperti lari, lompat jauh, lempar lembing, dan renang. Cocok untuk dimainkan bersama keluarga atau teman dengan mode multiplayer. Kontrol yang mudah dan gameplay yang cepat menjadikannya hiburan santai yang menyenangkan.",
        "foto" => "covergame/004.jpg"
    ],
    [
        "nama_game" => "Matchbox Driving Adventures",
        "jenis_game" => "Balapan / Simulasi",
        "deskripsi"  => "Game mengemudi dengan berbagai misi dan petualangan di jalanan.",
        "deskripsi_detail" => "Matchbox Driving Adventures menghadirkan pengalaman berkendara santai dengan berbagai misi seperti mengantar barang, menghindari rintangan, dan balapan. Pemain bisa memilih mobil mainan unik, meningkatkan performa, serta membuka area baru saat progres permainan meningkat. Cocok untuk pemain segala usia.",
        "foto" => "covergame/005.jpg"
    ],
    [
        "nama_game" => "Assassin's Creed Mirage",
        "jenis_game" => "Action Adventure",
        "deskripsi"  => "Game aksi-petualangan bertema sejarah dengan gameplay stealth.",
        "deskripsi_detail" => "Assassin's Creed Mirage mengembalikan fokus seri pada gameplay stealth klasik. Berlatar Baghdad abad ke-9, pemain berperan sebagai Basim yang mempelajari jalan hidup assassin. Game ini menampilkan parkour yang lincah, perencanaan pembunuhan yang strategis, dan eksplorasi kota bersejarah yang detail.",
        "foto" => "covergame/006.jpg"
    ],
    [
        "nama_game" => "Horizon Zero Dawn",
        "jenis_game" => "RPG / Action",
        "deskripsi"  => "Game aksi-RPG di dunia terbuka dengan mesin dan robot dinosaurus.",
        "deskripsi_detail" => "Horizon Zero Dawn menempatkan pemain sebagai Aloy, seorang pemburu yang berusaha mengungkap misteri peradaban yang hilang. Dunia dipenuhi mesin berbentuk binatang dan dinosaurus yang bisa diburu. Pemain dapat membuat senjata, menjelajahi lingkungan indah, dan bertarung secara taktis menggunakan busur serta jebakan.",
        "foto" => "covergame/007.jpg"
    ],
    [
        "nama_game" => "Jump Force",
        "jenis_game" => "Fighting",
        "deskripsi"  => "Game pertarungan crossover dengan karakter anime populer.",
        "deskripsi_detail" => "Jump Force mempertemukan karakter-karakter ikonik dari manga dan anime seperti Goku, Naruto, Luffy, dan banyak lainnya. Pemain bisa membentuk tim, bertarung di arena 3D, dan melakukan serangan super yang spektakuler. Cocok untuk penggemar anime dan game fighting.",
        "foto" => "covergame/008.jpg"
    ],
    [
        "nama_game" => "Knack",
        "jenis_game" => "Platformer / Action",
        "deskripsi"  => "Game platformer aksi dengan karakter yang bisa berubah ukuran.",
        "deskripsi_detail" => "Knack adalah game platformer aksi di mana pemain mengendalikan makhluk yang dapat mengubah ukuran tubuhnya menggunakan artefak kuno. Pemain akan menghadapi musuh, memecahkan teka-teki, dan menjelajahi level yang penuh jebakan. Visual yang cerah membuatnya ramah untuk keluarga.",
        "foto" => "covergame/009.jpg"
    ],
    [
        "nama_game" => "Pirate Yakuza in Hawaii",
        "jenis_game" => "Action Adventure",
        "deskripsi"  => "Game aksi dengan tema bajak laut bercampur gaya Yakuza di Hawaii.",
        "deskripsi_detail" => "Pirate Yakuza in Hawaii adalah game aksi unik yang memadukan dunia bajak laut dengan gaya hidup Yakuza. Pemain bertarung melawan geng saingan, menjelajahi pulau-pulau tropis, dan terlibat dalam cerita penuh intrik serta humor khas Yakuza.",
        "foto" => "covergame/010.jpg"
    ],
    [
        "nama_game" => "Tomb Raider",
        "jenis_game" => "Adventure",
        "deskripsi"  => "Game petualangan dengan eksplorasi makam kuno dan aksi bertahan hidup.",
        "deskripsi_detail" => "Tomb Raider mengikuti petualangan Lara Croft yang menjelajahi makam kuno, menghadapi bahaya, dan bertahan hidup di lingkungan ekstrem. Game ini menggabungkan eksplorasi, teka-teki, dan pertarungan dengan elemen cerita yang dramatis.",
        "foto" => "covergame/011.jpg"
    ],
    [
        "nama_game" => "Skylanders Trap Team",
        "jenis_game" => "Action Adventure",
        "deskripsi"  => "Game aksi-petualangan dengan karakter mainan interaktif.",
        "deskripsi_detail" => "Skylanders Trap Team memungkinkan pemain menggunakan figur mainan fisik untuk memanggil karakter ke dalam game. Pemain menjelajahi dunia, mengalahkan musuh, dan menjebak penjahat untuk bergabung di pihak mereka. Cocok untuk anak-anak dan penggemar koleksi figur.",
        "foto" => "covergame/012.jpg"
    ],
    [
        "nama_game" => "Gran Turismo",
        "jenis_game" => "Balapan",
        "deskripsi"  => "Simulator balap mobil realistis dengan banyak pilihan kendaraan.",
        "deskripsi_detail" => "Gran Turismo adalah simulator balap realistis dengan ratusan mobil dan lintasan yang akurat. Pemain dapat mengikuti kompetisi, menyesuaikan kendaraan, dan meningkatkan keterampilan mengemudi. Cocok untuk penggemar balap yang menginginkan pengalaman autentik.",
        "foto" => "covergame/013.jpg"
    ],
    [
        "nama_game" => "NFS Heat",
        "jenis_game" => "Balapan",
        "deskripsi"  => "Game balap jalanan dengan siang-malam dan kustomisasi mobil.",
        "deskripsi_detail" => "Need for Speed Heat menghadirkan balapan jalanan ilegal dengan sistem siang dan malam. Pemain dapat mengumpulkan uang di siang hari dan mendapatkan reputasi di malam hari. Kustomisasi mobil sangat mendalam, memungkinkan pemain membuat mobil impian mereka.",
        "foto" => "covergame/014.jpg"
    ],
    [
        "nama_game" => "Until Dawn",
        "jenis_game" => "Horror / Survival",
        "deskripsi"  => "Game horor interaktif dengan pilihan cerita yang menentukan nasib.",
        "deskripsi_detail" => "Until Dawn adalah game horor sinematik di mana setiap pilihan pemain dapat menyelamatkan atau membunuh karakter. Cerita berfokus pada sekelompok remaja di pegunungan terpencil yang diteror oleh pembunuh misterius. Cocok untuk penggemar game naratif dengan elemen jumpscare.",
        "foto" => "covergame/015.jpg"
    ],
    [
        "nama_game" => "A Way Out",
        "jenis_game" => "Co-op Adventure",
        "deskripsi"  => "Game petualangan dua pemain yang bekerja sama untuk kabur dari penjara.",
        "deskripsi_detail" => "A Way Out adalah game co-op yang hanya bisa dimainkan berdua. Pemain berperan sebagai Leo dan Vincent, dua narapidana yang bekerja sama untuk melarikan diri dari penjara dan menjalani perjalanan penuh aksi dan emosi. Cocok dimainkan bersama teman.",
        "foto" => "covergame/016.jpg"
    ],
    [
        "nama_game" => "Farcry 4",
        "jenis_game" => "FPS / Action",
        "deskripsi"  => "Game penembak orang pertama berlatar Himalaya dengan dunia terbuka.",
        "deskripsi_detail" => "Far Cry 4 menempatkan pemain di Kyrat, daerah pegunungan Himalaya yang dikuasai diktator. Pemain bebas menjelajahi dunia terbuka, menaklukkan pos musuh, berburu hewan, dan memilih cara menyelesaikan misi. Setiap keputusan memengaruhi dunia di sekitar.",
        "foto" => "covergame/017.jpg"
    ],
    [
        "nama_game" => "Crash Team Racing Nitro Fueled",
        "jenis_game" => "Balapan Kart",
        "deskripsi"  => "Game balap kart dengan karakter Crash Bandicoot dan mode seru.",
        "deskripsi_detail" => "CTR Nitro Fueled adalah remake dari game klasik Crash Team Racing dengan grafis modern. Pemain dapat balapan di lintasan penuh jebakan, menggunakan power-up, dan bermain multiplayer lokal atau online. Sangat cocok untuk dimainkan bersama teman.",
        "foto" => "covergame/018.jpg"
    ],
    [
        "nama_game" => "Jumanji The Video Game",
        "jenis_game" => "Adventure / Action",
        "deskripsi"  => "Game petualangan berdasarkan film Jumanji dengan mode co-op.",
        "deskripsi_detail" => "Jumanji: The Video Game memungkinkan pemain memilih karakter favorit dari film Jumanji dan bekerja sama dalam mode co-op. Pemain harus memecahkan teka-teki, melawan musuh, dan menyelesaikan level berbahaya untuk mengembalikan permata ke patung Jumanji.",
        "foto" => "covergame/019.jpg"
    ],
    [
        "nama_game" => "Call of Duty WWII",
        "jenis_game" => "FPS / Action",
        "deskripsi"  => "Game penembak orang pertama berlatar Perang Dunia II.",
        "deskripsi_detail" => "Call of Duty: WWII mengembalikan seri ke akar sejarah Perang Dunia II. Pemain mengikuti kampanye dramatis di front Eropa, bertempur di pertempuran ikonik seperti D-Day, dan menikmati mode multiplayer yang intens.",
        "foto" => "covergame/020.jpg"
    ],
    [
        "nama_game" => "Atelier Yumia",
        "jenis_game" => "RPG",
        "deskripsi"  => "Game role-playing Jepang dengan alkimia dan eksplorasi fantasi.",
        "deskripsi_detail" => "Atelier Yumia (atau Atelier Lulua) adalah JRPG yang berfokus pada eksplorasi, crafting, dan alkimia. Pemain dapat membuat item, senjata, dan ramuan dengan menggabungkan bahan yang dikumpulkan dari dunia. Cocok untuk penggemar RPG santai.",
        "foto" => "covergame/021.jpg"
    ],
    [
        "nama_game" => "Resident Evil 4",
        "jenis_game" => "Horror / Action",
        "deskripsi"  => "Game survival horror dengan aksi tembak-menembak melawan zombie dan makhluk mutan.",
        "deskripsi_detail" => "Resident Evil 4 mengikuti Leon S. Kennedy dalam misinya menyelamatkan putri presiden dari sekte misterius. Game ini menggabungkan elemen survival horror, aksi intens, dan inventaris taktis. Versi remake menghadirkan grafis modern dan gameplay lebih halus.",
        "foto" => "covergame/022.jpg"
    ],
    [
        "nama_game" => "Watch Dogs 2",
        "jenis_game" => "Action Adventure",
        "deskripsi"  => "Game dunia terbuka bertema hacker dengan misi sabotase dan eksplorasi kota San Francisco.",
        "deskripsi_detail" => "Watch Dogs 2 menempatkan pemain sebagai Marcus Holloway, seorang hacker muda yang bergabung dengan DedSec untuk menjatuhkan sistem ctOS. Pemain dapat meretas kamera, drone, mobil, dan melakukan sabotase sambil menjelajahi kota San Francisco yang hidup.",
        "foto" => "covergame/023.jpg"
    ],
    [
        "nama_game" => "WWE 2K24",
        "jenis_game" => "Fighting / Sports",
        "deskripsi"  => "Game gulat profesional WWE dengan berbagai mode pertandingan realistis.",
        "deskripsi_detail" => "WWE 2K24 menghadirkan roster pegulat WWE terbaru dengan mode karier, showcase sejarah, dan online multiplayer. Pemain bisa menciptakan pegulat sendiri, mengikuti storyline, dan merasakan simulasi gulat yang realistis.",
        "foto" => "covergame/024.jpg"
    ],
    [
        "nama_game" => "Spider-Man Insomniac",
        "jenis_game" => "Action Adventure",
        "deskripsi"  => "Game aksi dunia terbuka dengan Spider-Man melawan musuh klasik di New York.",
        "deskripsi_detail" => "Spider-Man Insomniac memberi pengalaman menjadi Spider-Man dengan kebebasan berayun di seluruh kota New York. Pemain melawan musuh ikonik seperti Kingpin, Electro, dan Doctor Octopus sambil menyeimbangkan kehidupan Peter Parker. Gameplaynya dinamis dan sangat imersif.",
        "foto" => "covergame/025.jpg"
    ]
];

echo json_encode($games, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>
