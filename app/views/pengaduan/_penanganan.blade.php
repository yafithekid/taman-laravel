<div class='row'>
    <label for='isi'>Isi</label>
    <textarea name='isi' class='form-control'></textarea>
</div>

<div class='row'>
    <label for='kategori'>Kategori</label>
    <input name='kategori' type='text' class='form-control' />
</div>

<div class='row'>
    <label for='tanggal'>Tanggal</label>
    <input name='tanggal' type='text' class='form-control' id='datetimepicker'/>
</div>

<br/>
<button class='btn btn-primary'>Kirim</button>

@section('script')
    @parent
    <script>

    $(document).ready(function(){
        $("#datetimepicker").datetimepicker({format:'Y-m-d',timepicker:false});
    });
    </script>
@stop
