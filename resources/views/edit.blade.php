<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            h1{
                text-align: center;
            }
            .container{
                width: 500px;
                margin: auto;
            }
            input[type=submit] {
                background-color: #04AA6D;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: left;
            }

            input[type=submit]:hover {
                background-color: #04AA6D;
            }
            input[type=text], select, textarea {
                width: 450px;
                padding: 12px;
                border-radius: 4px;
                resize: vertical;
            }

            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }

            input[type=submit]:hover {
                background-color: #04AA6D;
            }
        </style>
    </head>
    <body>
        <h1>Edit</h1>
        <div class="container">
            <form id="form_tb_input" action="input" method="post">
                <fieldset>
                    <legend>Edit Data Barang</legend>
                    <p>
                        <label for="kode_barang">Kode Barang :</label>
                        <input type="text" name="kode_barang" id="kode_barang">
                    </p>
                    <p>
                        <label for="nama_barang">Nama Barang :</label>
                        <input type="text" name="nama_barang" id="nama_barang">
                    </p>
                    <p>
                        <label for="jenis_barang">Jenis Barang :</label>
                        <input type="text" name="jenis_barang" id="jenis_barang">
                    </p>
                    <p>
                        <label for="jumlah">Jumlah :</label>
                        <input type="text" name="jumlah">
                    </p>

                </fieldset>
                <p>
                    <input type="submit" name="input" value="Edit Data">
                </p>
            </form>
        </div>
    </body>
</html>