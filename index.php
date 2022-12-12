<form id="form_mahasiswa">
    <label for="prodi">
        Prodi
    </label>

    <select name="prodi" id="prodi">
        <option value="IF"> Teknik Informatika </option>
        <option value="CV"> Teknik SIPIL </option>
        <option value="KM"> Teknik KIMIA </option>
    </select>
</form>
    <button id="btn_tampil"> Tampilkan </button>
<br>

<div id="tampil_data"></div>

<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
    integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin = "anonymous">
</script>
 
<script>
    $(document).ready(function () {
        $("#btn_tampil").click(function () { 
            var data = $("#prodi :selected").text();

            $.ajax({
                type    : "POST",
                url     : "tampil.php",
                data    : {prodi : data},
                success : function (response) {
                    $("#tampil_data").load("tampil.php");
                }
            })
        });
    });
</script>
