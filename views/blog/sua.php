<h3>Chỉnh sửa blog</h3>
<form id="frmPayment" class="form-horizontal" method="post" action="index.php?c=blog&m=sua_submit">
  <div class="control-group">
    <label class="control-label" for="inputName">Tiêu đề</label>
    <div class="controls">
      <input type='hidden' name='id'value= <?php echo $oneblog[0]['id'];?> ></input>
      <input type="text" id="inputName" placeholder="Tên tiêu đề" name="TieuDe" value='<?php echo $oneblog[0]['TieuDe'];?>'/>
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="inputTotal">Nội dung</label>
    <div class="controls">
      
      <textarea id="inputNoiDung" placeholder="Nội dung bài blog" name="NoiDung" ><?php echo $oneblog[0]['NoiDung'];?></textarea>
      <script type="text/javascript">CKEDITOR.replace('inputNoiDung'); </script>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTotal">Tác giả</label>
    <div class="controls">
      <input type="text" id="inputTacGia" placeholder="Tên tác giả" name="TacGia" value='<?php echo $oneblog[0]['TacGia'];?>'/>
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="inputTotal">Ghi chú</label>
    <div class="controls">
      <input type="text" id="inputGhiChu" placeholder="Nội dung ghi chú" name="GhiChu" value='<?php echo $oneblog[0]['GhiChu'];?>'/>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>