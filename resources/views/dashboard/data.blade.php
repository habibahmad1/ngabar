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
<div class="container-table table-responsive">
    <table id="myTable" class="table table-dark table-striped table-bordered text-center" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>No.Hp</th>
                <th>Online Status</th>
                <th>Status</th>
                <th>Kelola</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr class="table-warning">
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
                    <form action="/dashboard/makeAdmin" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $item->id }}">
                        <button class="text-decoration-none border-0 badge text-bg-success" type="submit" onclick="return confirm('Jadikan Admin?')">Jadi Admin</button>
                    </form>
                    <!-- Form untuk menghapus user -->
                    <form action="/dashboard/deleteUser" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="user_id" value="{{ $item->id }}">
                        <button class="text-decoration-none border-0 badge text-bg-danger" type="submit" onclick="return confirm('Hapus User?')">Hapus User</button>
                    </form>
                    @else
                    <!-- Form untuk mengubah status menjadi Member -->
                    <form action="/dashboard/makeMember" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $item->id }}">
                        <button class="text-decoration-none border-0 badge text-bg-primary" type="submit" onclick="return confirm('Jadikan Member?')">Jadi Member</button>
                    </form>
                    <!-- Form untuk menghapus user -->
                    <form action="/dashboard/deleteUser" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="user_id" value="{{ $item->id }}">
                        <button class="text-decoration-none border-0 badge text-bg-danger" type="submit" onclick="return confirm('Hapus User?')">Hapus User</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="buttonExport my-3">
    <button class="btn btn-success" onclick="confirmExportExcel()"><i class="fa-solid fa-file-excel"></i> Export to Excel</button>
    <button class="btn btn-danger" onclick="confirmExportPDF()"><i class="fa-solid fa-file-pdf"></i> Export to PDF</button>
    <button class="btn btn-primary" onclick="confirmExportWord()"><i class="fa-solid fa-file-word"></i> Export to Word</button>
</div>

<script>
    function exportToWord() {
        const content = document.getElementById('myTable').outerHTML;
        const converted = htmlDocx.asBlob(content);
        saveAs(converted, 'table.docx');
    }

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

    function exportToExcel() {
        const table = document.getElementById('myTable');
        const rows = Array.from(table.querySelectorAll('tr'));
        const data = rows.map(row => Array.from(row.querySelectorAll('th, td')).map(cell => cell.innerText));

        const ws = XLSX.utils.aoa_to_sheet(data);
        const wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');
        XLSX.writeFile(wb, 'data.xlsx');
    }

    function confirmExportExcel() {
        if (confirm("Apakah Anda yakin ingin mengekspor data ke Excel?")) {
            exportToExcel();
        }
    }

    function confirmExportPDF() {
        if (confirm("Apakah Anda yakin ingin mengekspor data ke PDF?")) {
            exportToPDF();
        }
    }

    function confirmExportWord() {
        if (confirm("Apakah Anda yakin ingin mengekspor data ke Word?")) {
            exportToWord();
        }
    }
</script>
@endsection
