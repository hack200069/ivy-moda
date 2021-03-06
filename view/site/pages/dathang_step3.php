<style>
    .but_order_detail {
        border: 0px;
        padding: 10px 20px;
        margin-top: 10px;
        text-transform: uppercase;
        font-weight: bold;
        margin-bottom: 10px;
        font-family: 'Helvetica', 'Arial', Sans-Serif;
        font-size: 11px;
        margin-left: 5px;
        border: 1px solid #000;
    }
</style>
<div id="err_404" style="padding-top: 0px">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 style="color: green; text-transform: uppercase">Đặt hàng thành công</h3>
            <p style="font-size: 13px; padding-top: 10px">Chào <?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?>, đơn hàng của bạn với mã <?=$order_id?> đã được đặt thành công.<br>
                <span style="font-weight: bold">
                    <!--Hiện tại do đang trong Chương trình Sale lớn, đơn hàng của quý khách sẽ gửi chậm hơn so với thời gian dự kiến từ 5-10 ngày. Rất mong quý khách thông cảm vì sự bất tiện này!-->
                    Do tình hình dịch Covid-19 diễn biến phức tạp. IVY moda sử dụng dịch vụ vận chuyển của EMS đều được hoạt động và bưu tá đều đã được tiêm phòng nên anh/ chị yên tâm. Tuy nhiên do hàng dồn nên thời gian nhận hàng có thể lâu hơn 1 chút. Rất mong quý khách thông cảm!
                </span><br>
                <span style="color: red">(Lưu ý: IVY moda sẽ gọi xác nhận đơn hàng, đơn hàng đươc xử lý và sẽ giao cho bạn trong thời sớm nhất)</span><br>
                Cám ơn <?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?> đã tin dùng sản phẩm của IVY moda.<br>
            </p>
            <div class="button_poductDetail">
                <a id="but-checkout-continue" href="<?=SCRIPT_ROOT?>" class="btn btn-info but_order_detail" style="text-transform: uppercase; width: 180px; background-color: #000; color: #fff">Tiếp tục mua sắm</a>
            </div>
            <p style="padding-top: 20px">
                Mọi thắc mắc quý khách vui lòng liên hệ hotline <span class="lead text-danger" style="color:red; font-weight:bold">0246 662 3434</span> hoặc chat với kênh hỗ trợ trên website để được hỗ trợ nhanh nhất.
            </p>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12"></div>
    </div>
</div>
<script>
    document.title = "Đặt hàng thành công | IVY moda";
</script>