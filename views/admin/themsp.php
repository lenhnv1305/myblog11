<h3>Thêm sản phẩm mới</h3>
<form id="frmPayment" class="form-horizontal" method="post" action="index.php?c=admin&m=themsp" enctype="multipart/form-data">
  <div class="control-group">
    <label class="control-label" for="inputName">Tên sản phẩm</label>
    <div class="controls">
      <input type="text" id="inputTenSP" placeholder="Tên tiêu đề" name="TenSP" />
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="inputTotal">Màn hình</label>
    <div class="controls">
      <input type='text' id='inputManHinh' placeholder='nhập kích thước màn hình' name='ManHinh'></input>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTotal">Ram</label>
    <div class="controls">
      <input type="text" id="inputRam" placeholder="dung lượng ram" name="Ram" />
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="inputTotal">Pin</label>
    <div class="controls">
      <input type="text" id="inputPin" placeholder="dung lượng Pin" name="Pin" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTotal">Bộ nhớ trong</label>
    <div class="controls">
      <input type="text" id="inputBoNhoTrong" placeholder="bộ nhớ trong" name="BoNhoTrong" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTotal">Giá</label>
    <div class="controls">
      <input type="text" id="inputGia" placeholder="Nội dung ghi chú" name="Gia" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTotal">Hình</label>
    <div class="controls">
      Chọn file từ máy tính:
      <input type="file" value = 'Chọn'name="fileToUpload" id="fileToUpload"></input>
      
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Thêm mới</button>
    </div>
  </div>
</form>