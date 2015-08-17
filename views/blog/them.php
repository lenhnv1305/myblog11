<h3>Thêm blog mới</h3>
<form id="frmPayment" class="form-horizontal" method="post" action="">
  <div class="control-group">
    <label class="control-label" for="inputName">Tiêu đề</label>
    <div class="controls">
      <input type="text" id="inputName" placeholder="Tên tiêu đề" name="TieuDe" />
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="inputTotal">Nội dung</label>
    <div class="controls">
      <textarea id="inputNoiDung" placeholder="Nội dung bài blog" name="NoiDung" ></textarea>
      <script type="text/javascript">CKEDITOR.replace('inputNoiDung'); </script>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTotal">Tác giả</label>
    <div class="controls">
      <input type="text" id="inputTacGia" placeholder="Tên tác giả" name="TacGia" />
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="inputTotal">Ghi chú</label>
    <div class="controls">
      <input type="text" id="inputGhiChu" placeholder="Nội dung ghi chú" name="GhiChu" />
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>
<!--
<script>
    $('#frmPayment').submit(function() {
        if ($('#inputTotal').val() > 10000000) {
            if (!confirm("Bạn có chắc là số tiền chi tiêu trên 10 triệu ?")) {
                $('#inputTotal').focus();
                return false;
            }
        }
        return true;
    });
</script>
-->