@extends('./layouts/main')
@section('content')

<div class="selectViewNgabar">
   <button id="title" style="background-color: #ff465b">Ngabar?</button>
   <button id="tujuan">Tujuan</button>
   <button id="fitur">Fitur</button>
</div>

<div class="container-about">
   <div class="title-ngabar">
      <img src="./img/about.png" alt="imgAbout">
      <div class="judulAbout">
        <center>
           <h1>Apa itu Ngabar?</h1>
        </center>
        <hr>
        <p>Ngabar adalah sebuah platform daring yang dirancang khusus sebagai tempat untuk diskusi online. Dengan fokus pada keterlibatan pengguna dan interaksi antaranggota komunitas, Ngabar menjadi sarana yang ideal bagi individu untuk berbagi pandangan, ide, dan informasi dalam beragam topik.</p>
        <p>Dibangun dengan antarmuka yang intuitif dan ramah pengguna, Ngabar menawarkan pengalaman yang menyenangkan dan mudah dipahami bagi para penggunanya. Sebagai sebuah tempat diskusi online</p>
      </div>
   </div>
   <div class="fitur-ngabar">
        <img src="./img/fiturAbout.png" alt="imgAbout">
        <hr>
        <ul>
           <center>
              <h1>Fitur Fitur Ngabar</h1>
           </center>
            <hr>
            <li>
                <b>Beragam Topik:</b> Ngabar menyediakan ruang diskusi untuk berbagai topik mulai dari teknologi, hiburan, olahraga, hingga topik-topik yang lebih khusus dan niche.
           </li>
           <li>
                <b>Interaksi Antaranggota:</b> Platform ini mendorong interaksi antara anggota komunitas dengan menyediakan fitur-fitur seperti komentar, like, dan sistem pesan pribadi.
           </li>
           <li>
                <b>Profil Pengguna:</b> Setiap anggota memiliki profil yang dapat disesuaikan dengan informasi pribadi, minat, dan kontribusi dalam diskusi.
           </li>
           <li>
                <b>Moderasi Konten:</b> Ngabar mengimplementasikan sistem moderasi konten untuk menjaga diskusi tetap bermutu dan menghindari konten yang tidak pantas.
           </li>
           <li>
                <b>Responsif dan Terjangkau:</b> Desain responsif memastikan bahwa Ngabar dapat diakses melalui berbagai perangkat, baik itu desktop, tablet, atau ponsel pintar. Selain itu, platform ini ditujukan untuk menjadi terjangkau sehingga dapat diakses oleh sebanyak mungkin orang.
           </li>
        </ul>
   </div>
   <div class="tujuan-ngabar">
        <img src="./img/tujuanAbout.png" alt="imgAbout">
        <div class="tujuanAbout">
          <center>
             <h1>Apa Tujuan nya?</h1>
          </center>
          <hr>
          <p>Ngabar bertujuan untuk menjadi tempat yang ramah dan inklusif bagi semua orang yang ingin berpartisipasi dalam diskusi online, menciptakan ruang di mana ide-ide dapat bertemu, pandangan dapat ditukar, dan komunitas dapat tumbuh bersama.</p>
        </div>
   </div>
</div>

@endsection
