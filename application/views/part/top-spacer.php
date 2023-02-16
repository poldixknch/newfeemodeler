<div class="top-spacer">
    <div class="row" style="padding-top: 5px">
        <div class="col-md-4 col-md-offset-4">
            <?= isset($message) ? "*** $message" : '' ?>
        </div>
        <div class="col-md-4">
            <?php if ($this->session->userdata('uid')) : ?>
                <?php if($page == 'main'): ?>
                <div class="input-group">
                    <input type="text"class="form-control"  name="file_name" placeholder="Put a name here and" 
                        <?= isset($stored['file_name'])?'disabled="disabled" value="'.$stored['file_name'].'"':'' ?> />
                    <span class="input-group-btn" style="padding-right: 5px">
                        <button class="savetocloud btn btn-warning">
                            <?= isset($stored)?'Save Changes':'Save to Cloud' ?>
                        </button>
                    </span>
                </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>