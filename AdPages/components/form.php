<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addModel"><h7>Add Product</h7></button>
<!-- Modal -->
<div class="modal fade" id="addModel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Add Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Tên sản phẩm</label>
                        <input class="form-control" type="text" placeholder="Nhập tên sản phẩm" id="Name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phân loại</label>
                        <select class="form-select" id="Cate">
                            <option value="VGA">VGA</option>
                            <option value="Keyboard">Keyboard</option>
                            <option value="Mouse">Chuột</option>
                            <option value="Screen">Màn hình</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link ảnh</label>
                        <input class="form-control" type="text" placeholder="Link ảnh sản phẩm" id="Img">
                    </div>

                    <div class="mb-3" style="display: inline-block;">
                        <label class="form-label">Giá sản phẩm</label>
                        <div style="display: flex;">
                            <input class="form-control" type="text" id="Price">
                            <p style="margin: auto; margin-left: 10px">VNĐ </p>
                        </div>
                    </div>

                    <div class="mb-3" style="display: inline-block;">
                        <label class="form-label">Thời gian bảo hành</label>
                        <div style="display: flex;">
                            <input class="form-control" type="text" id="Warrant">
                            <p style="margin: auto; margin-left: 10px">tháng </p>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Hãng sản xuất</label>
                        <input class="form-control" type="text" placeholder="Nhập hãng sản xuất" id="Manuf">
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" id="Desc" rows="3"></textarea>
                    </div>
                </form>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="handleAdd()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Edit Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Tên sản phẩm</label>
                        <input class="form-control" type="text" id="Name1">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phân loại</label>
                        <select class="form-select" id="Cate1">
                            <option value="VGA">VGA</option>
                            <option value="Keyboard">Keyboard</option>
                            <option value="Mouse">Mouse</option>
                            <option value="Screen">Screen</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link ảnh</label>
                        <input class="form-control" type="text"  id="Img1">
                    </div>

                    <div class="mb-3" style="display: inline-block;">
                        <label class="form-label">Giá sản phẩm</label>
                        <div style="display: flex;">
                            <input class="form-control" type="text" id="Price1">
                            <p style="margin: auto; margin-left: 10px">VNĐ </p>
                        </div>
                    </div>

                    <div class="mb-3" style="display: inline-block;">
                        <label class="form-label">Thời gian bảo hành</label>
                        <div style="display: flex;">
                            <input class="form-control" type="text" id="Warrant1">
                            <p style="margin: auto; margin-left: 10px">tháng </p>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Hãng sản xuất</label>
                        <input class="form-control" type="text" id="Manuf1">
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" id="Desc1" rows="3"></textarea>
                    </div>
                </form>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="handleEdit1()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>