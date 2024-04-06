@extends('./layouts/main')
@section('content')
        <h1>Halaman About</h1>
        <h3>{{ $title }}</h3>
        <p>{{ $description }}</p>
        <img src="./img/{{ $image }}" alt="picture" width="200" />

        <div class="row d-flex justify-content-center">
                <div class="col-md-8">
        <h1 class="text-center aboutJudul">Apa itu Ngabar?</h1>
        <p>Ngabar adalah sebuah platform daring yang dirancang khusus sebagai tempat untuk diskusi online. Dengan fokus pada keterlibatan pengguna dan interaksi antaranggota komunitas, Ngabar menjadi sarana yang ideal bagi individu untuk berbagi pandangan, ide, dan informasi dalam beragam topik.</p>
        <p>Dibangun dengan antarmuka yang intuitif dan ramah pengguna, Ngabar menawarkan pengalaman yang menyenangkan dan mudah dipahami bagi para penggunanya. Sebagai sebuah tempat diskusi online</p>

        <h1 class="text-center aboutJudul">Fitur Fitur</h1>
        <ul class="fiturList">
                <li>Beragam Topik: Ngabar menyediakan ruang diskusi untuk berbagai topik mulai dari teknologi, hiburan, olahraga, hingga topik-topik yang lebih khusus dan niche.</li>
                <li>Pengelompokan Topik: Topik-topik diskusi diorganisir secara terstruktur untuk memudahkan pengguna dalam menemukan dan bergabung dengan diskusi yang sesuai dengan minat mereka.
                </li>
                <li>Interaksi Antaranggota: Platform ini mendorong interaksi antara anggota komunitas dengan menyediakan fitur-fitur seperti komentar, like, dan sistem pesan pribadi.
                </li>
                <li>Profil Pengguna: Setiap anggota memiliki profil yang dapat disesuaikan dengan informasi pribadi, minat, dan kontribusi dalam diskusi.
                </li>
                <li>Moderasi Konten: Ngabar mengimplementasikan sistem moderasi konten untuk menjaga diskusi tetap bermutu dan menghindari konten yang tidak pantas.
                </li>
                <li>Responsif dan Terjangkau: Desain responsif memastikan bahwa Ngabar dapat diakses melalui berbagai perangkat, baik itu desktop, tablet, atau ponsel pintar. Selain itu, platform ini ditujukan untuk menjadi terjangkau sehingga dapat diakses oleh sebanyak mungkin orang.
                </li>
        </ul>
        <h1 class="text-center aboutJudul">Apa Tujuan nya?</h1>
        <p>Ngabar bertujuan untuk menjadi tempat yang ramah dan inklusif bagi semua orang yang ingin berpartisipasi dalam diskusi online, menciptakan ruang di mana ide-ide dapat bertemu, pandangan dapat ditukar, dan komunitas dapat tumbuh bersama.</p> 
                </div>
        </div>
        
@endsection
