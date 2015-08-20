<h3>Điều chỉnh sản phẩm</h3>
<form id="frmPayment" class="form-horizontal" method="post" action="index.php?c=admin&m=suasp" enctype="multipart/form-data">
  <div class="control-group">
    <label class="control-label" for="inputName">Tên sản phẩm</label>
    <div class="controls">
     
      <input type='hidden' name='id_sp' value ='<?php echo $data['newphone']['id_sp'];?>'>
      <input type="text" id="inputTenSP" placeholder="Tên sản phẩm" name="TenSP" value='<?php echo $data['dienthoai'][0]['TenSP']?>'/>
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="inputTotal">Màn hình</label>
    <div class="controls">
      <input type='text' id='inputManHinh' placeholder='nhập kích thước màn hình' name='ManHinh' value='<?php echo $data['dienthoai'][0]['ManHinh']?>'></input>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTotal">Ram</label>
    <div class="controls">
      <input type="text" id="inputRam" placeholder="dung lượng ram" name="Ram" value='<?php echo $data['dienthoai'][0]['Ram']?>'/>
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="inputTotal">Pin</label>
    <div class="controls">
      <input type="text" id="inputPin" placeholder="dung lượng Pin" name="Pin" value='<?php echo $data['dienthoai'][0]['Pin']?>'/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTotal">Bộ nhớ trong</label>
    <div class="controls">
      <input type="text" id="inputBoNhoTrong" placeholder="bộ nhớ trong" name="BoNhoTrong" value='<?php echo $data['dienthoai'][0]['BoNhoTrong']?>'/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTotal">Giá</label>
    <div class="controls">
      <input type="text" id="inputGia" placeholder="Nội dung ghi chú" name="Gia" value='<?php echo $data['dienthoai'][0]['Gia']?>'/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTotal">Hình</label>
    <div class="controls">
      Chọn file từ máy tính:
      <input type="file" value = 'Chọn'name="fileToUpload" id="fileToUpload"></input>
      <img src='<?php echo $data['dienthoai'][0]['HinhAnh']?>' width='200px'/>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Lưu</button>
      <a href='index.php?c=admin&m=home'class="btn ">Hủy</a>
    </div>
  </div>
</form>