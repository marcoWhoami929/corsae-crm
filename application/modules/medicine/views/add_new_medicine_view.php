<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel-body col-md-6">
            <header class="panel-heading">
                <?php
                if (!empty($medicine->id))
                    echo lang('edit_medicine');
                else
                    echo lang('add_medicine');
                ?>
            </header>
            <div class="row">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <div class="col-md-12">
                            <section class="panel row">
                                <div class="panel-body">
                                    <?php echo validation_errors(); ?>
                                    <form role="form" action="medicine/addNewMedicine" class="clearfix" method="post" enctype="multipart/form-data">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1"> <?php echo lang('name'); ?></label>
                                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" value='<?php
                                                                                                                                if (!empty($medicine->name)) {
                                                                                                                                    echo $medicine->name;
                                                                                                                                }
                                                                                                                                ?>' placeholder="Nombre del producto">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1"> <?php echo lang('category'); ?></label>
                                            <select class="form-control m-bot15" name="category" value=''>
                                                <?php foreach ($categories as $category) { ?>
                                                    <option value="<?php echo $category->category; ?>" <?php
                                                                                                        if (!empty($medicine->category)) {
                                                                                                            if ($category->category == $medicine->category) {
                                                                                                                echo 'selected';
                                                                                                            }
                                                                                                        }
                                                                                                        ?>> <?php echo $category->category; ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1"> <?php echo lang('p_price'); ?></label>
                                            <input type="text" class="form-control" name="price" id="exampleInputEmail1" value='<?php
                                                                                                                                if (!empty($medicine->price)) {
                                                                                                                                    echo $medicine->price;
                                                                                                                                }
                                                                                                                                ?>' placeholder="Precio de Compra">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1"> <?php echo lang('s_price'); ?></label>
                                            <input type="text" class="form-control" name="s_price" id="exampleInputEmail1" value='<?php
                                                                                                                                    if (!empty($medicine->s_price)) {
                                                                                                                                        echo $medicine->s_price;
                                                                                                                                    }
                                                                                                                                    ?>' placeholder="Precio de venta">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1"> <?php echo lang('quantity'); ?></label>
                                            <input type="text" class="form-control" name="quantity" id="exampleInputEmail1" value='<?php
                                                                                                                                    if (!empty($medicine->quantity)) {
                                                                                                                                        echo $medicine->quantity;
                                                                                                                                    }
                                                                                                                                    ?>' placeholder="Cantidad inicial">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1"> <?php echo lang('company'); ?></label>
                                            <input type="text" class="form-control" name="company" id="exampleInputEmail1" value='<?php
                                                                                                                                    if (!empty($medicine->company)) {
                                                                                                                                        echo $medicine->company;
                                                                                                                                    }
                                                                                                                                    ?>' placeholder="Empresa de compra">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1"> <?php echo lang('store_box'); ?></label>
                                            <input type="text" class="form-control" name="box" id="exampleInputEmail1" value='<?php
                                                                                                                                if (!empty($medicine->box)) {
                                                                                                                                    echo $medicine->box;
                                                                                                                                } else {
                                                                                                                                    echo '1';
                                                                                                                                }
                                                                                                                                ?>' placeholder="" readonly>
                                        </div>

                                        <input type="hidden" name="id" value='<?php
                                                                                if (!empty($medicine->id)) {
                                                                                    echo $medicine->id;
                                                                                }
                                                                                ?>'>
                                        <div class="form-group col-md-12">
                                            <button type="submit" name="submit" class="btn btn-info pull-right"> <?php echo 'Guardar Producto' ?></button>
                                        </div>
                                    </form>
                                </div>

                            </section>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->


<style>
    .wrapper {
        padding: 24px 30px;
    }
</style>