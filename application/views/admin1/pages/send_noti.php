<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Create a Category</h3>
            <div class="row">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <?= form_open_multipart('admin/insert_noti');?>
                                <label for="">To</label>
                                <select name="to" class="form-control form-control-sm" id="">
                                    <?php foreach($users as $user):?>
                                    <option value="<?= $user->user_id;?>"><?= $user->u_name;?> </option>
                                    <?php endforeach;?>
                                    <?= form_error('to');?>
                            </select>

                                <label for="">Notification Title</label>
                                <textarea name="noti" id="" class="form-control" rows="3"></textarea>
                                <?= form_error('noti');?>
                                    <input type="submit" class="btn btn-success form-control">
                                    <?= form_close();?>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
