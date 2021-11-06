<form name="frm_search_notfound" action="<?= SCRIPT_ROOT ?>/tim-kiem" method="get" enctype="application/x-www-form-urlencoded">
	<div id="err_404">
		<div class="row">
			<div class="col-md-5">
				<img src="https://pubcdn.ivymoda.com/images/err_404.jpg" width="100%" />
			</div>
			<div class="col-md-7 text-center">
				Xin lỗi bạn, chúng tôi không thể tìm kiếm được trang web bạn yêu cầu hoặc có gì đó đã sai...
				<p>Bạn vui lòng nhập lại tìm kiếm hoặc trở lại <a href="https://ivymoda.com/">Trang chủ</a>!</p>
				<div class="input-group">
					<input type="text" class="form-control" name="q" placeholder="Tìm kiếm...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div><!-- /input-group -->
			</div>
		</div>
	</div>
</form>
<script>
	document.title = "Không tìm thấy trang!";
</script>