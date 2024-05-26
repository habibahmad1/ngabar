@extends('./dashboard.layouts.main')

@section('content')
<center>
    <h1 class="my-2">Daftar Nama Member Ngabar</h1>
</center>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="container-table">
    <table id="myTable" cellpadding="10">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>No.Hp</th>
        <th>Online Status</th>
        <th>Status</th>
        <th>Kelola</th>
      </tr>
      @foreach ($data as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->noHp }}</td>
        <td>
          @if ($item->last_active && $item->last_active->diffInMinutes() < 1)
          <p class="online d-inline">Online</p>
          @else
              Offline
          @endif
        </td>
        <td>{{ $item->role }}</td>
        <td>
    @if ($item->role == 'Super Admin')
        <!-- Tidak ada tombol untuk Super Admin -->
    @elseif ($item->role != 'Admin' && $item->role != 'Super Admin')
        <!-- Form untuk mengubah status menjadi admin -->
        <form action="/dashboard/makeAdmin" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $item->id }}">
            <button class="text-decoration-none border-0 badge text-bg-success" type="submit" onclick="return confirm('Jadikan Admin?')">Jadi Admin</button>
        </form>
        <!-- Form untuk menghapus user -->
        <form action="/dashboard/deleteUser" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="user_id" value="{{ $item->id }}">
            <button class="text-decoration-none border-0 badge text-bg-danger" type="submit" onclick="return confirm('Hapus User?')">Hapus User</button>
        </form>
    @else
        <!-- Form untuk mengubah status menjadi Member -->
        <form action="/dashboard/makeMember" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $item->id }}">
            <button class="text-decoration-none border-0 badge text-bg-primary" type="submit" onclick="return confirm('Jadikan Member?')">Jadi Member</button>
        </form>
        <!-- Form untuk menghapus user -->
        <form action="/dashboard/deleteUser" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="user_id" value="{{ $item->id }}">
            <button class="text-decoration-none border-0 badge text-bg-danger" type="submit" onclick="return confirm('Hapus User?')">Hapus User</button>
        </form>
    @endif
</td>

      </tr>
      @endforeach
    </table>
</div>
<div class="buttonExport">
    <button class="btn btn-success" onclick="exportToExcel()"><i class="fa-solid fa-file-excel"></i> Export to Excel</button>
    <button class="btn btn-danger" onclick="exportToPDF()"><i class="fa-solid fa-file-pdf"></i> Export to PDF</button>
    <button class="btn btn-primary" onclick="exportToWord()"><i class="fa-solid fa-file-word"></i> Export to Word</button>
</div>
  <script>
    function exportToWord() {
      const content = document.getElementById('myTable').outerHTML;
      const converted = htmlDocx.asBlob(content);
      saveAs(converted, 'table.docx');
    }
  </script>
  <script>
    window.jsPDF = window.jspdf.jsPDF;
    function exportToPDF() {
      const content = document.getElementById('myTable');
      html2canvas(content).then(canvas => {
        const imgData = canvas.toDataURL('image/png');
        const pdf = new jsPDF();
        pdf.addImage(imgData, 'PNG', 0, 0);
        pdf.save('table.pdf');
      });
    }
  </script>
  <script>
    function exportToExcel() {
      const table = document.getElementById('myTable');
      const rows = Array.from(table.querySelectorAll('tr'));
      const data = rows.map(row => Array.from(row.querySelectorAll('th, td')).map(cell => cell.innerText));
      
      const ws = XLSX.utils.aoa_to_sheet(data);
      const wb = XLSX.utils.book_new();
      XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');
      XLSX.writeFile(wb, 'data.xlsx');
    }
  </script>



@endsection