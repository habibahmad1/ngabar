@extends('dashboard.layouts.main')
@section('content')
<h3 class="my-3">Catatan Keuangan</h3>
<hr>
<div class="container-cashNote mt-3">
    <form action="/dashboard/cashnote/" method="POST">
        @csrf
        <button type="button" id="addRow" class="btn btn-primary my-3">Tambah Barang</button>
        <div id="dynamicForm">
            <div class="form-row mb-3">
                <div class="form-group col-lg-4">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <label for="nama_barang" class="form-label">Nama Barang <span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang[]" placeholder="Pulpen">
                </div>
                <div class="form-group col-lg-4">
                    <label for="jumlah_barang" class="form-label">Jumlah Barang <span style="color: red">*</span></label>
                    <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang[]" placeholder="10">
                </div>
                <div class="form-group col-lg-4">
                    <label for="harga_satuan" class="form-label">Harga Satuan (jangan pakai titik atau koma) <span style="color: red">*</span></label>
                    <input type="number" class="form-control" id="harga_satuan" name="harga_satuan[]" placeholder="2000">
                </div>
                <div class="form-group col-lg-2 d-flex align-items-end">
                    <button type="button" class="btn btn-danger remove-row my-3">Hapus</button>
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn btn-success my-3">Tambah Catatan</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        // Menambahkan baris input baru
        $('#addRow').click(function(){
            var newRow = `
            
                <div class="form-row mb-3">
                    <hr>
                    <div class="form-group col-lg-4">
                        <label for="nama_barang" class="form-label">Nama Barang <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="nama_barang[]" placeholder="Pulpen">
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="jumlah_barang" class="form-label">Jumlah Barang <span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="jumlah_barang[]" placeholder="10">
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="harga_satuan" class="form-label">Harga Satuan (jangan pakai titik atau koma) <span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="harga_satuan[]" placeholder="2000">
                    </div>
                    <div class="form-group col-lg-2 d-flex align-items-end">
                        <button type="button" class="btn btn-danger remove-row my-3">Hapus</button>
                    </div>
                </div>`;
            $('#dynamicForm').append(newRow);
        });

        // Menghapus baris input
        $(document).on('click', '.remove-row', function(){
            $(this).closest('.form-row').remove();
        });
    });
</script>
@endsection
