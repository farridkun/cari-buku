<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Buku Perpustakaan Jalanan</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Data Buku Perpustakaan Jalanan</h3>
     <br />
            <br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                        <div class="form-group">
                                <select name="filter_penulis" id="filter_penulis" class="form-control" required>
                                    <option value="">Pilih Nama Penulis</option>
                                    @foreach($angka_tahun as $penulis)
        
                                    <option value="{{ $penulis->penulis }}">{{ $penulis->penulis }}</option>
        
                                    @endforeach
                                </select>
                            </div>
                    <div class="form-group">
                        <select name="filter_terbit" id="filter_terbit" class="form-control" required>
                            <option value="">Pilih Tahun Terbit</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                        </select>
                    </div>
                    <div class="form-group" align="center">
                        <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>

                        <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br />
   <div class="table-responsive">
    <table id="data_buku" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Buku</th>
                            <th>Penulis</th>
                            <th>Tahun Terbit</th>
                        </tr>
                    </thead>
                </table>
   </div>
            <br />
            <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

    fill_datatable();

    function fill_datatable(filter_penulis = '', filter_terbit = '')
    {
        var dataTable = $('#data_buku').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: "{{ route('caribuku.index') }}",
                data:{filter_penulis:filter_penulis, filter_terbit:filter_terbit}
            },
            columns: [
                {
                    data:'nama_buku',
                    name:'nama_buku'
                },
                {
                    data:'penulis',
                    name:'penulis'
                },
                {
                    data:'tahun_terbit',
                    name:'tahun_terbit'
                }
            ]
        });
    }

    $('#filter').click(function(){
        var filter_penulis = $('#filter_penulis').val();
        var filter_terbit = $('#filter_terbit').val();

        if(filter_penulis != '' &&  filter_terbit != '')
        {
            $('#data_buku').DataTable().destroy();
            fill_datatable(filter_penulis, filter_terbit);
        }
        else
        {
            alert('Harus memilih opsi keduanya!');
        }
    });

    $('#reset').click(function(){
        $('#filter_penulis').val('');
        $('#filter_terbit').val('');
        $('#data_buku').DataTable().destroy();
        fill_datatable();
    });

});
</script>