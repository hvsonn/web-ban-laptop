<?=template_header('Chi Tiết Sản Phẩm')?>

<body>
    <main class="container mt-5 mb-5 ">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold title_detail">Chi Tiết Sản Phẩm</h3>
                <form class="border shadow p-5 form_detail" action="index.php?controller=product&action=update" method="post">
                    <div class="input-group  mb-3">
                        <input type="text" class="form-control" value=<?= $product['id'] ?> name="id" hidden>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Name</span>
                        <input type="text" class="form-control" value=<?= $product['name'] ?> required name="name">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Price</span>
                        <input type="text" class="form-control" value=<?= $product['price'] ?> required name="price">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Sale Price</span>
                        <input type="text" class="form-control" value=<?= $product['sale_price'] ?> required name="sale_price">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Thumbnail</span>
                        <input type="text" class="form-control" value=<?= $product['thumbnail'] ?> required name="thumbnail">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Product Description</span>
                        <input type="text" class="form-control" value=<?= $product['product_desc'] ?> required name="product_desc">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Detail Description</span>
                        <input type="text" class="form-control" value=<?= $product['detail_desc'] ?> required name="detail_desc">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Chipset</span>
                        <input type="text" class="form-control" value=<?= $product['chipset'] ?> required name="chipset">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Size</span>
                        <input type="text" class="form-control" value=<?= $product['size'] ?> required name="size">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Screen</span>
                        <input type="text" class="form-control" value=<?= $product['screen'] ?> required name="screen">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Camera</span>
                        <input type="text" class="form-control" value=<?= $product['camera'] ?> required name="camera">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Origin</span>
                        <input type="text" class="form-control" value=<?= $product['origin'] ?> required name="origin">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Company</span>
                        <input type="text" class="form-control" value=<?= $product['company'] ?> required name="company">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Sold</span>
                        <input type="text" class="form-control" value=<?= $product['sold'] ?> required name="sold">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Amount</span>
                        <input type="text" class="form-control" value=<?= $product['amount'] ?> required name="amount">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="">Category</span>
                        <select class="form-select" aria-label="" name="category_id">
                            <?php for ($i = 0; $i < count($categories); $i++): ?>
                                <option value="<?= $categories[$i]['id'] ?>" <?= ($product['category_id'] == $categories[$i]['id']) ? "selected" : '' ?> >
                                    <?= $categories[$i]['name'] ?>
                                </option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="form-group  float-end ">
                        <input type="submit" value="Đồng ý" class="btn btn-success">
                        <a href="index.php?controller=product&action=index" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>

<?=template_footer()?>