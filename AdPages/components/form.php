<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><h7>Add Product</h7></button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Tên sản phẩm</label>
                        <input class="form-control" type="text" placeholder="Nhập tên sản phẩm" aria-label="default input example" id="Name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phân loại</label>
                        <select class="form-select" aria-label="Default select example" id="Cate">
                            <option value="Laptop">Laptop</option>
                            <option value="Bàn phím">Bàn phím</option>
                            <option value="Chuột">Chuột</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link ảnh</label>
                        <input class="form-control" type="text" placeholder="Link ảnh sản phẩm" aria-label="default input example" id="Img">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleAdd()">Save changes</button>
            </div>
        </div>
    </div>
</div>