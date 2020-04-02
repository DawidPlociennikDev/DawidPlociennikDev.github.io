<?php if(isset($v) && @$v->id <= 3){
    $readonly = "readonly";    
} else {
    $readonly = '';
} ?>
<div class="form-element-area">
    <form action="<?= base_url($this->uri->segment(1).'/action/'.$this->uri->segment(3).'/'.$this->uri->segment(1).'/'.@$v->id); ?>" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Formularz</h2>
                            <p>Uzupełnij formularz i zatwierdź przyciskiem ZAPISZ, aby dodać nowy wpis</p>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 form-margin">
                                <div class="form-group ic-cmp-int">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Nazwa parametru <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" placeholder="Wymagany" value="<?= @$v->title; ?>" <?= $readonly; ?> required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 form-margin">
                                <div class="form-group ic-cmp-int">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Nazwa kodowa <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="code" placeholder="Opcjonalny" value="<?= @$v->code; ?>" <?= $readonly; ?> required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Krótki opis</label>
                                        <textarea class="form-control" name="short_desc" rows="5" placeholder="Krótki opis danego parametru..."><?= @$v->short_desc; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 form-margin">
                                <div class="form-group ic-cmp-int">
                                    <div id="photoViewer">
                                        <?php if(@$v->photo != ''): ?>
                                        <div class="remove-button" onclick="removePhoto()">
                                            <i class="fas fa-times"></i>
                                        </div>
                                        <img src="<?= base_url('uploads/'.@$v->photo); ?>" class="img-fluid img-thumbnail" width="120px">
                                        <?php endif; ?>
                                    </div>
                                    <div class="nk-int-st">
                                        <label class="nk-label">Wybierz zdjęcie parametru</label>
                                        <input id="photo" type="file" name="photo" class="form-control" value="<?= @$v->photo; ?>">
                                    </div>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Tekst alternatywny zdjęcia</label>
                                        <input type="text" name="alt" class="form-control" value="<?= @$v->alt; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="summernote-clickable text-right" style="margin-bottom: 0;">
                            <button class="btn btn-success btn-sm hec-save">Zapisz</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>