<?=template_header('Trang chủ')?>
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row title_edit">
        <div class="col-md-3 border-right">
            <div class="container mt-3">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">SẢN PHẨM</h4>
                    <p class="card-text"><?= isset($number_product) ? $number_product : 0 ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 border-right">
            <div class="container mt-3">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">NGƯỜI BÁN HÀNG</h4>
                    <p class="card-text"><?= isset($number_saler) ? $number_saler : 0 ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 border-right">
            <div class="container mt-3">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">NGƯỜI DÙNG</h4>
                    <p class="card-text"><?= isset($number_user) ? $number_user : 0 ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 border-right">
            <div class="container mt-3">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">DOANH THU</h4>
                    <p class="card-text"><?= isset($revenue) ? number_format($revenue) : 0 ?> đ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?=template_footer()?>