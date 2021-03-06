
// anggota keluarga
const parent = document.querySelector('.anggota-keluarga')
const jumlahKeluarga = document.querySelector('#jumlahAnggotaKeluarga')

let i = 0

const add = () => {
    i++
    let el = ` <div>
                <div class=" row">
                        <br>

                        

                        <div class="col-md">

                            <label for="exampleInputEmail1" class="form-label mt-3">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama Anggota Keluarga"
                                id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <label for="" class="mt-3">Jenis Kelamin</label>
                            <br>

                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="laki-laki2"
                                    value="laki-laki">
                                <label class="form-check-label" for="laki-laki2">Laki - Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="perempuan2"
                                    value="perempuan">
                                <label class="form-check-label" for="perempuan2">Perempuan</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <label for="" class="mt-3 mb-2">Hubungan </label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Hubungan </option>
                                <option value="1">Ibu</option>
                                <option value="2">Anak Ke-1</option>
                                <option value="3">Anak ke-2</option>
                                <option value="3">Nenek </option>
                                <option value="3">Kakek</option>

                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">

                            <label for="exampleInputEmail1" class="form-label mt-3">Nomor Telepon</label>
                            <input type="tel" maxlength="12" class="form-control"
                                placeholder="masukan nomor yang dapat dihubungi" id="exampleInputEmail1"
                                aria-describedby="emailHelp">


                        </div>

                        <div class="col-md">
                            <label for="" class="mt-3 mb-2">Tempat Lahir</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Tempat Lahir</option>
                                <option value="1">Jepara</option>
                                <option value="2">Semarang</option>
                                <option value="3">Salatiga</option>
                                <option value="3">Jakarta</option>
                                <option value="3">Solo</option>
                                <option value="3">Yogyakarta</option>
                                <option value="3">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <label for="exampleInputEmail1" class="form-label mt-3">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="col-md">
                            <label for="" class="mt-3 mb-2">Status Pekerjaan</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Status Pekerjaan</option>
                                <option value="1">Sudah Bekerja</option>
                                <option value="2">Belum Bekerja</option>
                                <option value="3">Sekolah</option>

                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <!--<div class="col-md">-->
                        <!--    <label for="exampleInputEmail1" class="form-label mt-3">Alamat Sekolah</label>-->
                        <!--    <input type="text" class="form-control" placeholder="masukan Alamat Sekolah" id="exampleInputEmail1" aria-describedby="emailHelp">-->
                        <!--</div>-->
                        <!--<div class="col-md">-->

                        <!--</div>-->
                    </div>
                    <button type="button" class="d-block " style="margin-top:20px;margin-left:auto;padding: 7px 18px ; background: #F92B13; color: #fff;"
                    onclick="remove()"><i class="fas fa-minus" style="font-size: 15px; "></i></button>
            </div> `
       
       
        

    parent.innerHTML += el;
    jumlahKeluarga.value = ( parseInt(jumlahKeluarga.value) + 1);

}

const remove = () => {
    parent.removeChild(parent.lastElementChild);
    jumlahKeluarga.value = ( parseInt(jumlahKeluarga.value) - 1);
    i--
}


// option for every select element
const lainnya = (el , context) => {
   if(el.value === "lainnya"){
        el.parentElement.innerHTML = `<input type="text" placeholder="masukan ${context}" class="form-control"
                                        name=${context} aria-describedby="emailHelp">`
   }

}